<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
require '../../model-db-connection/config.php';
require '../../model/com.gogetrich.dao/CustomerDaoImpl.php';
require '../../model/com.gogetrich.service/CustomerService.php';
require '../../model/com.gogetrich.model/CustomerVO.php';
require './EmailContent.php';
require './SendingEmail.php';

$iniConfiguration = parse_ini_file("../../model-db-connection/configuration.ini");
$cusDaoImpl = new CustomerDaoImpl();
$customerService = new CustomerService($cusDaoImpl);

$emailOrUsernam = (string) filter_input(INPUT_POST, 'usernameOrEmail');


if ($customerService->getCustomerByEmail($emailOrUsernam) != 404) {
    $jsonObj = $customerService->getCustomerByEmail($emailOrUsernam);
    $obj = json_decode($jsonObj);
    $cusUsername = $obj->{'CUS_USERNAME'};
    $cusEmail = $obj->{'CUS_EMAIL'};
    $cusName = $obj->{'CUS_FIRST_NAME'} . " " . $obj->{'CUS_LAST_NAME'};
    //Start update password
    $updateResult = $customerService->resetPassword(md5($iniConfiguration['guest.password.default']), $obj->{'CUS_ID'});
    if ($updateResult == 200) {
        //Sending email to customer
        $emailContent = new EmailContent();
        $emailBody = $emailContent->getForgetPasswordTemplate($cusUsername, $cusEmail, $iniConfiguration['guest.password.default'], $iniConfiguration['web.application.prefix'], $cusName);
        $sendingEmail = new SendingEmail($iniConfiguration['email.host'], $iniConfiguration['email.username'], $iniConfiguration['email.password'], $cusEmail, $iniConfiguration['email.subject.customer.forget.password'], $emailBody, $iniConfiguration['email.username'], $iniConfiguration['email.name']);
        echo $sendingEmail->sendingEmail();
    } else {
        echo $updateResult;
    }
} else if ($customerService->getCustomerByUsername($emailOrUsernam) != 404) {
    $jsonObj = $customerService->getCustomerByUsername($emailOrUsernam);
    $obj = json_decode($jsonObj);
    $cusUsername = $obj->{'CUS_USERNAME'};
    $cusEmail = $obj->{'CUS_EMAIL'};
    $cusName = $obj->{'CUS_FIRST_NAME'} . " " . $obj->{'CUS_LAST_NAME'};
    //Start update password
    $updateResult = $customerService->resetPassword(md5($iniConfiguration['guest.password.default']), $obj->{'CUS_ID'});
    if ($updateResult == 200) {
        //Sending email to customer
        $emailContent = new EmailContent();
        $emailBody = $emailContent->getForgetPasswordTemplate($cusUsername, $cusEmail, $iniConfiguration['guest.password.default'], $iniConfiguration['web.application.prefix'], $cusName);
        $sendingEmail = new SendingEmail($iniConfiguration['email.host'], $iniConfiguration['email.username'], $iniConfiguration['email.password'], $cusEmail, $iniConfiguration['email.subject.customer.forget.password'], $emailBody, $iniConfiguration['email.username'], $iniConfiguration['email.name']);
        echo $sendingEmail->sendingEmail();
    } else {
        echo $updateResult;
    }
} else {
    echo 'ชื่อผู้ใช้(Username) หรือ อีเมล(Email) ไม่ถูกต้อง';
}
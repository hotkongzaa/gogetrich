<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require '../../model-db-connection/config.php';
require '../../model/com.gogetrich.dao/CustomerDaoImpl.php';
require '../../model/com.gogetrich.service/CustomerService.php';
require '../../model/com.gogetrich.model/CustomerVO.php';
require './EmailContent.php';
require './SendingEmail.php';

$iniConfiguration = parse_ini_file("../../model-db-connection/configuration.ini");
$cusDaoImpl = new CustomerDaoImpl();
$customerService = new CustomerService($cusDaoImpl);

$username = (string) filter_input(INPUT_GET, 'username');
$password = (string) filter_input(INPUT_GET, 'password');
$email = (string) filter_input(INPUT_GET, 'email');
$fName = (string) filter_input(INPUT_GET, 'fName');
$lName = (string) filter_input(INPUT_GET, 'lName');
$gender = (string) filter_input(INPUT_GET, 'gender');
$address = (string) filter_input(INPUT_GET, 'address');
$phone = (string) filter_input(INPUT_GET, 'phone');
$facebookAdr = (string) filter_input(INPUT_GET, 'facebookAdr');

$customerVO = new CustomerVO();
$customerVO->setCusID(md5(date("h:i:sa")));
$customerVO->setCusUsername($username);
$customerVO->setCusPassword(md5($password));
$customerVO->setCusEmail($email);
$customerVO->setCusFirstName($fName);
$customerVO->setCusLastName($lName);
$customerVO->setCusGender($gender);
$customerVO->setCusContactAddr($address);

$customerVO->setPhoneNumber($phone);
$customerVO->setCusFacebookAddr($facebookAdr);
$customerVO->setForceChange("false");

if ($customerService->duplicationUsername($_GET['username']) && $customerService->duplicationEmail($_GET['email'])) {
    echo "Your username and email have been used";
} else if ($customerService->duplicationUsername($_GET['username'])) {
    echo "This username have been used";
} else if ($customerService->duplicationEmail($_GET['email'])) {
    echo "This email have been used";
} else {
    $saveResult = $customerService->saveCustomer($customerVO);
    if ($saveResult == 200) {
        if ($iniConfiguration['email.sending.to.customer'] == true) {
            $emailContent = new EmailContent();
            $emailBody = $emailContent->getCusRegisterNormalContent($iniConfiguration['web.application.prefix']);
            $sendingEmail = new SendingEmail($iniConfiguration['email.host'], $iniConfiguration['email.username'], $iniConfiguration['email.password'], $email, $iniConfiguration['email.subject.customer.register.prefix'], $emailBody, $iniConfiguration['email.username'], $iniConfiguration['email.name']);
            echo $sendingEmail->sendingEmail();
        } else {
            echo $saveResult;
        }
    } else {
        echo $saveResult;
    }
}


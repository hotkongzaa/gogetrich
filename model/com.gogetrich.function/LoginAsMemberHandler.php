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

$emailOrUsernam = (string) filter_input(INPUT_POST, 'result');
if ($customerService->getCustomerByEmail($emailOrUsernam) != 404) {
    $jsonObj = $customerService->getCustomerByEmail($emailOrUsernam);
    $obj = json_decode($jsonObj);
    echo "200:" . $obj->{'CUS_FIRST_NAME'} . "||" . $obj->{'CUS_LAST_NAME'} . "||" . $obj->{'CUS_PHONE_NUMBER'} . "||" . $obj->{'CUS_EMAIL'} . "||" . $obj->{'CUS_CONTACT_ADDRESS'} . "||" . $obj->{'CUS_RECEIPT_ADDRESS'} . "||" . $obj->{'CUS_ID'};
} else if ($customerService->getCustomerByUsername($emailOrUsernam) != 404) {
    $jsonObj = $customerService->getCustomerByUsername($emailOrUsernam);
    $obj = json_decode($jsonObj);
    echo "200:" . $obj->{'CUS_FIRST_NAME'} . "||" . $obj->{'CUS_LAST_NAME'} . "||" . $obj->{'CUS_PHONE_NUMBER'} . "||" . $obj->{'CUS_EMAIL'} . "||" . $obj->{'CUS_CONTACT_ADDRESS'} . "||" . $obj->{'CUS_RECEIPT_ADDRESS'} . "||" . $obj->{'CUS_ID'};
} else {
    echo 'ชื่อผู้ใช้(Username) หรือ อีเมล(Email) ไม่ถูกต้อง';
}
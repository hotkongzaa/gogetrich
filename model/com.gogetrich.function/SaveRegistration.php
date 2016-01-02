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


error_reporting(0);
$cusDaoImpl = new CustomerDaoImpl();
$customerService = new CustomerService($cusDaoImpl);

$customerVO = new CustomerVO();
$customerVO->setCusID(md5(date("h:i:sa")));
$customerVO->setCusUsername($_GET['username']);
$customerVO->setCusPassword(md5($_GET['password']));
$customerVO->setCusEmail($_GET['email']);
$customerVO->setCusFirstName($_GET['fName']);
$customerVO->setCusLastName($_GET['lName']);
$customerVO->setCusGender($_GET['gender']);
$customerVO->setCusContactAddr($_GET['address']);
//$isSmameAddr = $_GET['isSameAddress'];
//if ($isSmameAddr == true) {
//    $customerVO->setCusReceiptAddr($_GET['address']);
//} else {
//    $customerVO->setCusReceiptAddr($_GET['addressForReceipt']);
//}
$customerVO->setPhoneNumber($_GET['phone']);
$customerVO->setCusFacebookAddr($_GET['facebookAdr']);


if ($customerService->duplicationUsername($_GET['username'])) {
    echo "This username have been used";
} else if ($customerService->duplicationEmail($_GET['email'])) {
    echo "This email have been used";
} else {
    echo $customerService->saveCustomer($customerVO);
}


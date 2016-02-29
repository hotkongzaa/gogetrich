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


$cusDaoImpl = new CustomerDaoImpl();
$customerService = new CustomerService($cusDaoImpl);

$cusID = (string) filter_input(INPUT_GET, 'cusID');
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
$customerVO->setCusID($cusID);
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


echo $customerService->editCustomer($customerVO);


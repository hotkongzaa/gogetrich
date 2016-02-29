<?php

session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require '../../model-db-connection/config.php';
require '../../model/com.gogetrich.dao/CustomerDaoImpl.php';
require '../../model/com.gogetrich.service/CustomerService.php';
require '../../model/com.gogetrich.model/CustomerVO.php';
$configuration = require '../../model-db-connection/GoGetRighconf.properties.php';


error_reporting(0);
$cusDaoImpl = new CustomerDaoImpl();
$customerService = new CustomerService($cusDaoImpl);

$reuslt = $customerService->verfiUsernameAndPassword($_POST['username'], md5($_POST['password']));
$resultLogin = explode("||", $reuslt);
if ($resultLogin[0] == 503) {
    //invalid username and password
    echo "503:";
} else if ($resultLogin[0] == 205) {
    //Force change password
    echo "205:" . $resultLogin[1];
} else {
    $jsonValue = $resultLogin[1];
    $obj = json_decode($jsonValue);

    $_SESSION['expireFrontEnd'] = time() + (60 * $configuration['applicationTimeOut']);
    $_SESSION['usernameFrontEnd'] = $obj->{'CUS_USERNAME'};
    $_SESSION['userIdFrontEnd'] = $obj->{'CUS_ID'};

    echo "200:";
}

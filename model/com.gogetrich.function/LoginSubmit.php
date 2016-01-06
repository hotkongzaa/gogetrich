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
if ($reuslt == 503) {
    echo 503;
} else {
    $obj = json_decode($reuslt);

    $_SESSION['expire'] = time() + (60 * $configuration['applicationTimeOut']);
    $_SESSION['username'] = $obj->{'CUS_USERNAME'};
    $_SESSION['userId'] = $obj->{'CUS_ID'};

    echo 200;
}

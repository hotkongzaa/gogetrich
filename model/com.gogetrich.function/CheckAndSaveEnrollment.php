<?php

session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require '../../model/com.gogetrich.dao/CustEnrollDaoImpl.php';
require '../../model/com.gogetrich.service/CustomerEnrollService.php';
require '../../model/com.gogetrich.model/CustomerEnrollVO.php';
require '../../model-db-connection/config.php';

require '../../model/com.gogetrich.dao/CustomerDaoImpl.php';
require '../../model/com.gogetrich.service/CustomerService.php';
require '../../model/com.gogetrich.model/CustomerVO.php';
require './EmailContent.php';
require './SendingEmail.php';

$iniConfiguration = parse_ini_file("../../model-db-connection/configuration.ini");

$cusEnrollDaoImpl = new CustEnrollDaoImpl();
$custEnrollService = new CustomerEnrollService($cusEnrollDaoImpl);

$theNoti = "";

$courseID = (string) filter_input(INPUT_POST, 'courseID');
$paymentTerm = (string) filter_input(INPUT_POST, 'paymentTerm');
$seminarDiscount = (string) filter_input(INPUT_POST, 'seminarDiscount');


$sqlGetMoreRegis = "SELECT * FROM TMP_REGISTER_" . $_SESSION['MORE_TEMP_REGIST'];
$resGetMoreRegis = mysql_query($sqlGetMoreRegis);
while ($rowGetMore = mysql_fetch_array($resGetMoreRegis)) {
    $getEmailForCheckAndPromote = "SELECT * FROM RICH_CUSTOMER WHERE CUS_EMAIL LIKE '" . $rowGetMore['TMP_EMAIL'] . "'";
    $resGetEmailForCheckAndPromote = mysql_query($getEmailForCheckAndPromote);
    if (mysql_num_rows($resGetEmailForCheckAndPromote) >= 1) {
        
    } else {
        
    }
}

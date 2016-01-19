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


$isSmameAddr = $_POST['isSameAddress'];
if ($isSmameAddr == true) {
    $sqlUpdate = "UPDATE RICH_CUSTOMER"
            . " SET CUS_RECEIPT_ADDRESS = '" . $_POST['contactAddress'] . "'"
            . " WHERE CUS_ID = '" . $_SESSION['userIdFrontEnd'] . "'";
    mysql_query($sqlUpdate);
} else {
    $sqlUpdate = "UPDATE RICH_CUSTOMER"
            . " SET CUS_RECEIPT_ADDRESS = '" . $_POST['addressForReceipt'] . "'"
            . " WHERE CUS_ID = '" . $_SESSION['userIdFrontEnd'] . "'";
    mysql_query($sqlUpdate);
}

$additionalUser = "";
$sql = "SELECT * FROM MORE_REGISTRED_TMP WHERE TMP_CUS_ID = '" . $_SESSION['userIdFrontEnd'] . "'";
$res = mysql_query($sql);
while ($row = mysql_fetch_array($res)) {
    $additionalUser.=$row['TMP_NAME'] . "," . $row['TMP_EMAIL'] . "," . $row['TMP_PHONE_NUMBER'] . "||";
}

error_reporting(0);
$cusEnrollDaoImpl = new CustEnrollDaoImpl();
$custEnrollService = new CustomerEnrollService($cusEnrollDaoImpl);
$result = $custEnrollService->checkCustAlreadyEnrollByEnrollID($_POST['courseID'], $_POST['custID']);
if ($result == 200) {
    $custEnrollVO = new CustomerEnrollVO();
    $custEnrollVO->setEnrollID(md5(date("h:i:sa")));
    $custEnrollVO->setRefCusID($_SESSION['userIdFrontEnd']);
    $custEnrollVO->setCourseID($_POST['courseID']);
    $custEnrollVO->setInviteSuggestPersonName("");
    $custEnrollVO->setKnowledgeForReason("");
    $custEnrollVO->setNewsFrom("");
    $custEnrollVO->setOtherknowledgeForReason("");
    $custEnrollVO->setPaymentTerm($_POST['paymentTerm']);
    $custEnrollVO->setSeminarDiscountReason($_POST['seminarDiscount']);
    $custEnrollVO->setAdditionalUser($additionalUser);
    echo $custEnrollService->saveCustEnroll($custEnrollVO);
} else {
    echo $result;
}

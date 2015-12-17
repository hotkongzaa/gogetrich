<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require '../../model/com.gogetrich.dao/CustEnrollDaoImpl.php';
require '../../model/com.gogetrich.service/CustomerEnrollService.php';
require '../../model/com.gogetrich.model/CustomerEnrollVO.php';

error_reporting(0);
$cusEnrollDaoImpl = new CustEnrollDaoImpl();
$custEnrollService = new CustomerEnrollService($cusEnrollDaoImpl);
$result = $custEnrollService->checkCustAlreadyEnrollByEnrollID($_POST['courseID'], $_POST['custID']);
if ($result == 200) {
    $custEnrollVO = new CustomerEnrollVO();
    $custEnrollVO->setEnrollID(md5(date("h:i:sa")));
    $custEnrollVO->setRefCusID($_POST['custID']);
    $custEnrollVO->setCourseID($_POST['courseID']);
    $custEnrollVO->setInviteSuggestPersonName($_POST['inviteSuggest']);
    $custEnrollVO->setKnowledgeForReason($_POST['knowledgeFor']);
    $custEnrollVO->setNewsFrom($_POST['newsFrom']);
    $custEnrollVO->setOtherknowledgeForReason($_POST['otherKnowledgeForReason']);
    $custEnrollVO->setPaymentTerm($_POST['paymentTerm']);
    $custEnrollVO->setSeminarDiscountReason($_POST['seminarDiscount']);
    echo $custEnrollService->saveCustEnroll($custEnrollVO);
} else {
    echo $result;
}

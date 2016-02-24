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

$iniConfiguration = parse_ini_file("../../model-db-connection/configuration.ini");

$cusEnrollDaoImpl = new CustEnrollDaoImpl();
$custEnrollService = new CustomerEnrollService($cusEnrollDaoImpl);

$theNoti = "";

$sqlGetMoreRegis = "SELECT * FROM MORE_REGISTRED_TMP WHERE TMP_CUS_ID = '" . $_SESSION['userIdFrontEnd'] . "'";
$resGetMoreRegis = mysql_query($sqlGetMoreRegis);
while ($rowGetMore = mysql_fetch_array($resGetMoreRegis)) {

    if ($rowGetMore['REF_CUS_ID'] == "true") {

        //Get customerID from email is member
        $cusEmailCheck = $rowGetMore['TMP_EMAIL'];
        $sqlGetCusID = "SELECT * FROM RICH_CUSTOMER WHERE CUS_EMAIL LIKE '" . $cusEmailCheck . "'";
        $resGetCusID = mysql_query($sqlGetCusID);
        $rowGetCusID = mysql_fetch_assoc($resGetCusID);

        //Same address if user are member only        
        $isSmameAddr = $_POST['isSameAddress'];
        if ($isSmameAddr == true) {
            $sqlUpdate = "UPDATE RICH_CUSTOMER"
                    . " SET CUS_RECEIPT_ADDRESS = '" . $_POST['contactAddress'] . "'"
                    . " WHERE CUS_ID = '" . $rowGetCusID['CUS_ID'] . "'";
            mysql_query($sqlUpdate);
        } else {
            $sqlUpdate = "UPDATE RICH_CUSTOMER"
                    . " SET CUS_RECEIPT_ADDRESS = '" . $_POST['addressForReceipt'] . "'"
                    . " WHERE CUS_ID = '" . $rowGetCusID['CUS_ID'] . "'";
            mysql_query($sqlUpdate);
        }

        $result = $custEnrollService->checkCustAlreadyEnrollByEnrollID($_POST['courseID'], $rowGetCusID['CUS_ID']);
        if ($result == 200) {
            $custEnrollVO = new CustomerEnrollVO();
            $custEnrollVO->setEnrollID(md5(date("h:i:sa") . "-" . $rowGetCusID['CUS_ID']));
            $custEnrollVO->setRefCusID($rowGetCusID['CUS_ID']);
            $custEnrollVO->setCourseID($_POST['courseID']);
            $custEnrollVO->setInviteSuggestPersonName("");
            $custEnrollVO->setKnowledgeForReason("");
            $custEnrollVO->setNewsFrom("");
            $custEnrollVO->setOtherknowledgeForReason("");
            $custEnrollVO->setPaymentTerm($_POST['paymentTerm']);
            $custEnrollVO->setSeminarDiscountReason($_POST['seminarDiscount']);
            $custEnrollVO->setAdditionalUser("");
            $custEnrollVO->setIsRegisteredOwn("true");
            $theNoti = $custEnrollService->saveCustEnroll($custEnrollVO);
        } else {
            echo $result;
        }
    } else {
        //Promote guest to new member
        $cusID = md5(date("h:i:sa"));
        $fName = explode(" ", $rowGetMore['TMP_NAME'])[0];
        $lName = explode(" ", $rowGetMore['TMP_NAME'])[1];
        $email = $rowGetMore['TMP_EMAIL'];
        $phone = $rowGetMore['TMP_PHONE_NUMBER'];

        $cusDaoImpl = new CustomerDaoImpl();
        $customerService = new CustomerService($cusDaoImpl);

        $customerVO = new CustomerVO();
        $customerVO->setCusID($cusID);
        $customerVO->setCusUsername($email);
        $customerVO->setCusPassword(md5($iniConfiguration['guest.password.default']));
        $customerVO->setCusEmail($email);
        $customerVO->setCusFirstName($fName);
        $customerVO->setCusLastName($lName);
        $customerVO->setCusGender("");
        $customerVO->setCusContactAddr("");
        $customerVO->setPhoneNumber($phone);
        $customerVO->setCusFacebookAddr("");

        if ($customerService->duplicationUsername($email) && $customerService->duplicationEmail($email)) {
            echo "Your username and email have been used";
        } else if ($customerService->duplicationUsername($email)) {
            echo "This username have been used";
        } else if ($customerService->duplicationEmail($email)) {
            echo "This email have been used";
        } else {
            $saveResult = $customerService->saveCustomer($customerVO);
            if ($saveResult == 200) {

                $resultFromCheckCust = $custEnrollService->checkCustAlreadyEnrollByEnrollID($_POST['courseID'], $cusID);
                if ($resultFromCheckCust == 200) {
                    $custEnrollVO = new CustomerEnrollVO();
                    $custEnrollVO->setEnrollID(md5(date("h:i:sa") . "-" . $cusID));
                    $custEnrollVO->setRefCusID($cusID);
                    $custEnrollVO->setCourseID($_POST['courseID']);
                    $custEnrollVO->setInviteSuggestPersonName("");
                    $custEnrollVO->setKnowledgeForReason("");
                    $custEnrollVO->setNewsFrom("");
                    $custEnrollVO->setOtherknowledgeForReason("");
                    $custEnrollVO->setPaymentTerm($_POST['paymentTerm']);
                    $custEnrollVO->setSeminarDiscountReason($_POST['seminarDiscount']);
                    $custEnrollVO->setAdditionalUser("");
                    $custEnrollVO->setIsRegisteredOwn("false");
                    $theNoti = $custEnrollService->saveCustEnroll($custEnrollVO);
                } else {
                    echo $resultFromCheckCust;
                }
            } else {
                echo $saveResult;
            }
        }
    }
}
echo $theNoti;

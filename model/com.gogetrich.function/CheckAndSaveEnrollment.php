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

        $result = $custEnrollService->checkCustAlreadyEnrollByEnrollID($courseID, $rowGetCusID['CUS_ID']);
        if ($result == 200) {
            $custEnrollVO = new CustomerEnrollVO();
            $custEnrollVO->setEnrollID(md5(date("h:i:sa") . "-" . $rowGetCusID['CUS_ID']));
            $custEnrollVO->setRefCusID($rowGetCusID['CUS_ID']);
            $custEnrollVO->setCourseID($courseID);
            $custEnrollVO->setInviteSuggestPersonName("");
            $custEnrollVO->setKnowledgeForReason("");
            $custEnrollVO->setNewsFrom("");
            $custEnrollVO->setOtherknowledgeForReason("");
            $custEnrollVO->setPaymentTerm($paymentTerm);
            $custEnrollVO->setSeminarDiscountReason($seminarDiscount);
            $custEnrollVO->setAdditionalUser("");
            $custEnrollVO->setIsRegisteredOwn("true");
            $theNoti = $custEnrollService->saveCustEnroll($custEnrollVO);
            
            //Sending enrollment email to customer
            if ($iniConfiguration['email.sending.to.customer'] == "true") {
                $sqlGetCourseDetailByCourseID = "SELECT * FROM GTRICH_COURSE_HEADER HEADER "
                        . "LEFT JOIN GTRICH_COURSE_CATEGORY CATE ON HEADER.REF_CATE_ID = CATE.CATE_ID "
                        . "LEFT JOIN GTRICH_COURSE_EVENT_DATE_TIME EDATE ON HEADER.HEADER_ID = EDATE.REF_COURSE_HEADER_ID "
                        . "WHERE HEADER.HEADER_ID = '" . $courseID . "'";

                $resReport = mysql_query($sqlGetCourseDetailByCourseID);
                $rowReport = mysql_fetch_assoc($resReport);


                $courseNameAndSubCourseName = $rowReport['HEADER_NAME'] . ' <br/> ' . $rowReport['SUB_HEADER_NAME'];
                $linkToCourse = $iniConfiguration['web.application.prefix'] . '/view/scheduleDetail?cname=' . $courseID;

                $courseName = $rowReport['HEADER_NAME'];

                $firstDateTime = explode(" ", $rowReport['START_EVENT_DATE_TIME']);
                $startDate = $firstDateTime[0];
                $startTime = $firstDateTime[1];

                $secondDateTime = explode(" ", $rowReport['END_EVENT_DATE_TIME']);
                $endDate = $secondDateTime[0];
                $endTime = $secondDateTime[1];

                $courseDate = '<span>เริ่ม วันที่ ' . $startDate . ' เวลา ' . $startTime . 'น. ถึง วันที่ ' . $endDate . ' เวลา ' . $endTime . 'น.</span>';

                $emailContent = new EmailContent();
                $emailBody = $emailContent->getCustomerEmailEnrollment($courseNameAndSubCourseName, $linkToCourse, $courseName, $courseDate);
                $sendingEmail = new SendingEmail($iniConfiguration['email.host'], $iniConfiguration['email.username'], $iniConfiguration['email.password'], $rowGetCusID['CUS_EMAIL'], $iniConfiguration['email.subject.customer.prefix'], $emailBody, $iniConfiguration['email.username'], $iniConfiguration['email.name']);
                $sendingEmail->sendingEmail();
            }
            

            //Sending enrollment email to official
            if ($iniConfiguration['email.sending.to.official'] == "true") {
                
            }
        } else {
            echo $result;
        }
    } else {
        //Promote guest to new member
        $fName = explode(" ", $rowGetMore['TMP_NAME'])[0];
        $lName = explode(" ", $rowGetMore['TMP_NAME'])[1];
        $email = $rowGetMore['TMP_EMAIL'];
        $phone = $rowGetMore['TMP_PHONE_NUMBER'];
        $cusID = md5(date("h:i:sa") . "-" . $email);

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
        $customerVO->setForceChange("true");

        if ($customerService->duplicationUsername($email) && $customerService->duplicationEmail($email)) {
            echo "Your username and email have been used";
        } else if ($customerService->duplicationUsername($email)) {
            echo "This username have been used";
        } else if ($customerService->duplicationEmail($email)) {
            echo "This email have been used";
        } else {
            $saveResult = $customerService->saveCustomer($customerVO);
            if ($saveResult == 200) {

                $resultFromCheckCust = $custEnrollService->checkCustAlreadyEnrollByEnrollID($courseID, $cusID);
                if ($resultFromCheckCust == 200) {
                    $custEnrollVO = new CustomerEnrollVO();
                    $custEnrollVO->setEnrollID(md5(date("h:i:sa") . "-" . $cusID));
                    $custEnrollVO->setRefCusID($cusID);
                    $custEnrollVO->setCourseID($courseID);
                    $custEnrollVO->setInviteSuggestPersonName("");
                    $custEnrollVO->setKnowledgeForReason("");
                    $custEnrollVO->setNewsFrom("");
                    $custEnrollVO->setOtherknowledgeForReason("");
                    $custEnrollVO->setPaymentTerm($paymentTerm);
                    $custEnrollVO->setSeminarDiscountReason($seminarDiscount);
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



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


$sqlGetMoreRegis = "SELECT * FROM TMP_REGISTER_" . $_SESSION['MORE_TEMP_REGIST'] . " WHERE TMP_CUS_ID =''";
$resGetMoreRegis = mysql_query($sqlGetMoreRegis);
while ($rowGetMore = mysql_fetch_array($resGetMoreRegis)) {
    $getEmailForCheckAndPromote = "SELECT * FROM RICH_CUSTOMER WHERE CUS_EMAIL LIKE '" . $rowGetMore['TMP_EMAIL'] . "'";
    $resGetEmailForCheckAndPromote = mysql_query($getEmailForCheckAndPromote);
    //Check is exsing user
    //User existing
    if (mysql_num_rows($resGetEmailForCheckAndPromote) >= 1) {
        $richUserDetail = mysql_fetch_assoc($resGetEmailForCheckAndPromote);
        //update address both contact and receipt
        $sqlUpdate = "UPDATE RICH_CUSTOMER SET CUS_CONTACT_ADDRESS='" . $rowGetMore['CONTACT_ADDR'] . "',CUS_RECEIPT_ADDRESS='" . $rowGetMore['RECEIPT_ADDR'] . "' WHERE CUS_ID = '" . $richUserDetail['CUS_ID'] . "'";
        $resUpdateAddr = mysql_query($sqlUpdate);
        if ($resUpdateAddr) {
            //Save new enrollment
            $custEnrollVO = new CustomerEnrollVO();
            $custEnrollVO->setEnrollID(md5(date("h:i:sa") . "-" . $richUserDetail['CUS_ID']));
            $custEnrollVO->setRefCusID($richUserDetail['CUS_ID']);
            $custEnrollVO->setCourseID($courseID);
            $custEnrollVO->setInviteSuggestPersonName("");
            $custEnrollVO->setKnowledgeForReason("");
            $custEnrollVO->setNewsFrom("");
            $custEnrollVO->setOtherknowledgeForReason("");
            $custEnrollVO->setPaymentTerm($paymentTerm);
            $custEnrollVO->setSeminarDiscountReason($seminarDiscount);
            $custEnrollVO->setAdditionalUser("");
            $custEnrollVO->setIsRegisteredOwn("true");
            $saveEnrollRestul = $custEnrollService->saveCustEnroll($custEnrollVO);
            if ($saveEnrollRestul == 200) {
                //Sending email to customer and official
                //Sending enrollment email to customer
                if ($iniConfiguration['email.sending.to.customer'] == true) {
                    $sqlGetCourseDetailByCourseID = "SELECT * FROM GTRICH_COURSE_HEADER HEADER "
                            . "LEFT JOIN GTRICH_COURSE_CATEGORY CATE ON HEADER.REF_CATE_ID = CATE.CATE_ID "
                            . "LEFT JOIN GTRICH_COURSE_EVENT_DATE_TIME EDATE ON HEADER.HEADER_ID = EDATE.REF_COURSE_HEADER_ID "
                            . "WHERE HEADER.HEADER_ID = '" . $courseID . "'";

                    $resReport = mysql_query($sqlGetCourseDetailByCourseID);
                    $rowReport = mysql_fetch_assoc($resReport);


                    $courseNameAndSubCourseName = $rowReport['HEADER_NAME'] . ' <br/> ' . $rowReport['SUB_HEADER_NAME'];
                    $linkToCourse = $iniConfiguration['web.application.prefix'] . 'view/scheduleDetail?cname=' . $courseID;

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
                    $sendingEmail = new SendingEmail($iniConfiguration['email.host'], $iniConfiguration['email.username'], $iniConfiguration['email.password'], $rowGetCusID['CUS_EMAIL'], $iniConfiguration['email.subject.customer.enrollment.prefix'], $emailBody, $iniConfiguration['email.username'], $iniConfiguration['email.name']);
                    $sendingEmail->sendingEmail();
                }

                //Sending enrollment email to official
                if ($iniConfiguration['email.sending.to.official'] == true) {
                    $sqlGetCourseDetailByCourseID = "SELECT * FROM GTRICH_COURSE_HEADER HEADER "
                            . "LEFT JOIN GTRICH_COURSE_CATEGORY CATE ON HEADER.REF_CATE_ID = CATE.CATE_ID "
                            . "LEFT JOIN GTRICH_COURSE_EVENT_DATE_TIME EDATE ON HEADER.HEADER_ID = EDATE.REF_COURSE_HEADER_ID "
                            . "WHERE HEADER.HEADER_ID = '" . $courseID . "'";

                    $resReport = mysql_query($sqlGetCourseDetailByCourseID);
                    $rowReport = mysql_fetch_assoc($resReport);

                    $courseName = $rowReport['HEADER_NAME'];

                    $firstDateTime = explode(" ", $rowReport['START_EVENT_DATE_TIME']);
                    $startDate = $firstDateTime[0];
                    $startTime = $firstDateTime[1];

                    $secondDateTime = explode(" ", $rowReport['END_EVENT_DATE_TIME']);
                    $endDate = $secondDateTime[0];
                    $endTime = $secondDateTime[1];

                    $courseDate = '<span>เริ่ม วันที่ ' . $startDate . ' เวลา ' . $startTime . 'น. ถึง วันที่ ' . $endDate . ' เวลา ' . $endTime . 'น.</span>';

                    $emailContent = new EmailContent();
                    $emailBody = $emailContent->getOfficialEmailEnrollment($rowGetCusID['CUS_FIRST_NAME'] . " " . $rowGetCusID['CUS_LAST_NAME'], $rowGetCusID['CUS_EMAIL'], $rowGetCusID['CUS_PHONE_NUMBER'], $rowGetCusID['CUS_CONTACT_ADDRESS'], $rowGetCusID['CUS_RECEIPT_ADDRESS'], $courseName, $courseDate);
                    $sendingEmail = new SendingEmail($iniConfiguration['email.host'], $iniConfiguration['email.username'], $iniConfiguration['email.password'], $iniConfiguration['email.official'], $iniConfiguration['email.subject.official.prefix'], $emailBody, $iniConfiguration['email.username'], $iniConfiguration['email.name']);
                    $sendingEmail->sendingEmail();
                }
                $theNoti = 200;
            } else {
                echo $saveEnrollRestul;
            }
        } else {
            echo mysql_error();
        }
    } else {
        //User not existing
        $tmpName = explode(" ", $rowGetMore['TMP_NAME']);
        $fName = $tmpName[0];
        $lName = $tmpName[1];
        $cusID = md5(date("h:i:sa") . "-" . $rowGetMore['TMP_EMAIL']);
        $email = $rowGetMore['TMP_EMAIL'];
        $phone = $rowGetMore['TMP_PHONE_NUMBER'];
        //promote unknown user to member
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
        $customerVO->setCusContactAddr($rowGetMore['CONTACT_ADDR']);
        $customerVO->setCusReceiptAddr($rowGetMore['RECEIPT_ADDR']);
        $customerVO->setPhoneNumber($phone);
        $customerVO->setCusFacebookAddr("");
        $customerVO->setForceChange("true");

        $saveUserResult = $customerService->saveCustomer($customerVO);
        if ($saveUserResult == 200) {

            //Sending register email
            if ($iniConfiguration['email.sending.to.customer'] == true) {
                $resetUrl = $iniConfiguration['web.application.prefix'] . "view/forceChangePassword?cusID=" . $cusID;
                $emailContent = new EmailContent();
                $emailBody = $emailContent->getCustomerEmailRegister($resetUrl, $email, $iniConfiguration['guest.password.default']);
                $sendingEmail = new SendingEmail($iniConfiguration['email.host'], $iniConfiguration['email.username'], $iniConfiguration['email.password'], $email, $iniConfiguration['email.subject.customer.register.prefix'], $emailBody, $iniConfiguration['email.username'], $iniConfiguration['email.name']);
                $sendingEmail->sendingEmail();
            }

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

                //Sending enrollment email to customer
                if ($iniConfiguration['email.sending.to.customer'] == true) {
                    $sqlGetCourseDetailByCourseID = "SELECT * FROM GTRICH_COURSE_HEADER HEADER "
                            . "LEFT JOIN GTRICH_COURSE_CATEGORY CATE ON HEADER.REF_CATE_ID = CATE.CATE_ID "
                            . "LEFT JOIN GTRICH_COURSE_EVENT_DATE_TIME EDATE ON HEADER.HEADER_ID = EDATE.REF_COURSE_HEADER_ID "
                            . "WHERE HEADER.HEADER_ID = '" . $courseID . "'";

                    $resReport = mysql_query($sqlGetCourseDetailByCourseID);
                    $rowReport = mysql_fetch_assoc($resReport);


                    $courseNameAndSubCourseName = $rowReport['HEADER_NAME'] . ' <br/> ' . $rowReport['SUB_HEADER_NAME'];
                    $linkToCourse = $iniConfiguration['web.application.prefix'] . 'view/scheduleDetail?cname=' . $courseID;

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
                    $sendingEmail = new SendingEmail($iniConfiguration['email.host'], $iniConfiguration['email.username'], $iniConfiguration['email.password'], $email, $iniConfiguration['email.subject.customer.enrollment.prefix'], $emailBody, $iniConfiguration['email.username'], $iniConfiguration['email.name']);
                    $sendingEmail->sendingEmail();
                }

                //Sending enrollment email to official
                if ($iniConfiguration['email.sending.to.official'] == true) {
                    $sqlGetCourseDetailByCourseID = "SELECT * FROM GTRICH_COURSE_HEADER HEADER "
                            . "LEFT JOIN GTRICH_COURSE_CATEGORY CATE ON HEADER.REF_CATE_ID = CATE.CATE_ID "
                            . "LEFT JOIN GTRICH_COURSE_EVENT_DATE_TIME EDATE ON HEADER.HEADER_ID = EDATE.REF_COURSE_HEADER_ID "
                            . "WHERE HEADER.HEADER_ID = '" . $courseID . "'";

                    $resReport = mysql_query($sqlGetCourseDetailByCourseID);
                    $rowReport = mysql_fetch_assoc($resReport);

                    $courseName = $rowReport['HEADER_NAME'];

                    $firstDateTime = explode(" ", $rowReport['START_EVENT_DATE_TIME']);
                    $startDate = $firstDateTime[0];
                    $startTime = $firstDateTime[1];

                    $secondDateTime = explode(" ", $rowReport['END_EVENT_DATE_TIME']);
                    $endDate = $secondDateTime[0];
                    $endTime = $secondDateTime[1];

                    $courseDate = '<span>เริ่ม วันที่ ' . $startDate . ' เวลา ' . $startTime . 'น. ถึง วันที่ ' . $endDate . ' เวลา ' . $endTime . 'น.</span>';

                    $emailContent = new EmailContent();
                    $emailBody = $emailContent->getOfficialEmailEnrollment($fName . " " . $lName, $email, $phone, "", "", $courseName, $courseDate);
                    $sendingEmail = new SendingEmail($iniConfiguration['email.host'], $iniConfiguration['email.username'], $iniConfiguration['email.password'], $iniConfiguration['email.official'], $iniConfiguration['email.subject.official.prefix'], $emailBody, $iniConfiguration['email.username'], $iniConfiguration['email.name']);
                    $sendingEmail->sendingEmail();
                }
            } else {
                echo $resultFromCheckCust;
            }
        } else {
            echo $saveResult;
        }
    }
}

//Delete temp table
$sqlDropTmpTable = "DROP TABLE TMP_REGISTER_" . $_SESSION['MORE_TEMP_REGIST'];
$dropResult = mysql_query($sqlDropTmpTable);
if ($dropResult) {
    unset($_SESSION['MORE_TEMP_REGIST']);
}
echo $theNoti;

<?php

session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require '../../model-db-connection/config.php';
$userId = (string) filter_input(INPUT_GET, 'userId');
$cid = (string) filter_input(INPUT_GET, 'cid');

$sqlCheck = "SELECT * as counts FROM RICH_CUSTOMER_ENROLL WHERE ENROLL_COURSE_ID='" . $cid . "' AND ENROLL_CUS_ID='" . $userId . "'";
$resCheck = mysql_query($sqlCheck);
$rowGetTmpTbl = mysql_fetch_assoc($resCheck);

//If user enroll then insert into tmp table
if (mysql_num_rows($rowGetTmpTbl) >= 1) {
    $sqlGetUserInfoById = "SELECT * FROM RICH_CUSTOMER WHERE CUS_ID = '" . $userId . "'";
    $resGetUserInFo = mysql_query($sqlGetUserInfoById);
    $rowUserInfo = mysql_fetch_assoc($resGetUserInFo);

    $sqlInsert = "INSERT INTO TMP_REGISTER_" . $_SESSION['MORE_TEMP_REGIST'] . "(TMP_ID,TMP_NAME,TMP_EMAIL,TMP_PHONE_NUMBER,TMP_CUS_ID,REF_CUS_ID,CONTACT_ADDR,RECEIPT_ADDR) "
            . "VALUES ('" . md5(date("h:i:sa")) . "','"
            . $rowUserInfo['CUS_FIRST_NAME'] . " " . $rowUserInfo['CUS_LAST_NAME'] . "','"
            . $rowUserInfo['CUS_EMAIL'] . "','"
            . $rowUserInfo['CUS_PHONE_NUMBER'] . "','"
            . $userId . "',"
            . "NULL,'"
            . $rowUserInfo['CUS_CONTACT_ADDRESS'] . "','"
            . $rowUserInfo['CUS_RECEIPT_ADDRESS'] . "')";
    mysql_query($sqlInsert);
}

echo mysql_num_rows($rowGetTmpTbl);

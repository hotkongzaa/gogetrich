<?php

session_start();
require '../../model-db-connection/config.php';
$userId = (string) filter_input(INPUT_GET, 'userId');
$cid = (string) filter_input(INPUT_GET, 'cid');
//Manage table session
if (isset($_SESSION['MORE_TEMP_REGIST'])) {
    $sqlDelTmpFromSession = "DROP TABLE TMP_REGISTER_" . $_SESSION['MORE_TEMP_REGIST'];
    $delRequest = mysql_query($sqlDelTmpFromSession);
    unset($_SESSION['MORE_TEMP_REGIST']);

    $_SESSION['MORE_TEMP_REGIST'] = uniqid();
    $sqlCreateMoreUserTmp = "CREATE TABLE IF NOT EXISTS TMP_REGISTER_" . $_SESSION['MORE_TEMP_REGIST'] . " ("
            . "TMP_ID VARCHAR(100) NOT NULL,"
            . "TMP_NAME VARCHAR(255),"
            . "TMP_EMAIL VARCHAR(255),"
            . "TMP_PHONE_NUMBER VARCHAR(255),"
            . "TMP_CUS_ID VARCHAR(255),"
            . "REF_CUS_ID VARCHAR(255),"
            . "CONTACT_ADDR MEDIUMTEXT,"
            . "RECEIPT_ADDR MEDIUMTEXT,"
            . "PRIMARY KEY (TMP_ID)"
            . ")ENGINE=InnoDB DEFAULT CHARSET=utf8;";
    $resCreateMoreTmp = mysql_query($sqlCreateMoreUserTmp);

    if ($resCreateMoreTmp) {
        if (!empty($userId)) {
            $sqlCheck = "SELECT * FROM RICH_CUSTOMER_ENROLL WHERE ENROLL_COURSE_ID='" . $cid . "' AND ENROLL_CUS_ID='" . $userId . "'";
            $resCheck = mysql_query($sqlCheck);
            if (mysql_num_rows($resCheck) >= 1) {
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
        }
        echo 200;
    } else {
        echo mysql_error();
    }
} else {
    $_SESSION['MORE_TEMP_REGIST'] = uniqid();
    $sqlCreateMoreUserTmp = "CREATE TABLE IF NOT EXISTS TMP_REGISTER_" . $_SESSION['MORE_TEMP_REGIST'] . " ("
            . "TMP_ID VARCHAR(100) NOT NULL,"
            . "TMP_NAME VARCHAR(255),"
            . "TMP_EMAIL VARCHAR(255),"
            . "TMP_PHONE_NUMBER VARCHAR(255),"
            . "TMP_CUS_ID VARCHAR(255),"
            . "REF_CUS_ID VARCHAR(255),"
            . "CONTACT_ADDR MEDIUMTEXT,"
            . "RECEIPT_ADDR MEDIUMTEXT,"
            . "PRIMARY KEY (TMP_ID)"
            . ")ENGINE=InnoDB DEFAULT CHARSET=utf8;";
    $resCreateMoreTmp = mysql_query($sqlCreateMoreUserTmp);
    if ($resCreateMoreTmp) {
        if (!empty($userId)) {
            $sqlCheck = "SELECT * FROM RICH_CUSTOMER_ENROLL WHERE ENROLL_COURSE_ID='" . $cid . "' AND ENROLL_CUS_ID='" . $userId . "'";
            $resCheck = mysql_query($sqlCheck);
            if (mysql_num_rows($resCheck) >= 1) {
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
        }
        echo 200;
    } else {
        echo mysql_error();
    }
}

<?php

session_start();
require '../../model-db-connection/config.php';

//$sqlDelete = "DELETE FROM MORE_REGISTRED_TMP WHERE TMP_CUS_ID = '" . $_SESSION['userIdFrontEnd'] . "'";
//$res = mysql_query($sqlDelete);
//if ($res) {
//    echo 200;
//} else {
//    echo mysql_error();
//}
//Manage table session
if (isset($_SESSION['MORE_TEMP_REGIST'])) {
    $sqlDelTmpFromSession = "DROP TABLE TMP_REGISTER_" . $_SESSION['MORE_TEMP_REGIST'];
    $delRequest = mysql_query($sqlDelTmpFromSession);
    unset($_SESSION['MORE_TEMP_REGIST']);
    if ($delRequest) {
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
            echo 200;
        } else {
            echo mysql_error();
        }
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
        echo 200;
    } else {
        echo mysql_error();
    }
}

<?php

session_start();
require '../../model-db-connection/config.php';

$isOwnerCondition = !empty($_GET['isOwner']) ? "'" . $_GET['isOwner'] . "'" : "NULL";
$isSameAddr = (string) filter_input(INPUT_GET, 'isSameAddress');
$contactAddr = (string) filter_input(INPUT_GET, 'addressForContact');
$receiptAddr = (string) filter_input(INPUT_GET, 'addressForReceipt');
if ($isSameAddr == "true") {
    $sqlDelete = "INSERT INTO TMP_REGISTER_" . $_SESSION['MORE_TEMP_REGIST'] . "(TMP_ID,TMP_NAME,TMP_EMAIL,TMP_PHONE_NUMBER,TMP_CUS_ID,REF_CUS_ID,CONTACT_ADDR,RECEIPT_ADDR) "
            . "VALUES ('" . md5(date("h:i:sa")) . "','"
            . $_GET['fName'] . " " . $_GET['lName'] . "','"
            . $_GET['email'] . "','"
            . $_GET['phone'] . "','"
            . "',"
            . $isOwnerCondition . ",'"
            . $contactAddr . "','"
            . $contactAddr . "')";
} else {
    $sqlDelete = "INSERT INTO TMP_REGISTER_" . $_SESSION['MORE_TEMP_REGIST'] . "(TMP_ID,TMP_NAME,TMP_EMAIL,TMP_PHONE_NUMBER,TMP_CUS_ID,REF_CUS_ID,CONTACT_ADDR,RECEIPT_ADDR) "
            . "VALUES ('" . md5(date("h:i:sa")) . "','"
            . $_GET['fName'] . " " . $_GET['lName'] . "','"
            . $_GET['email'] . "','"
            . $_GET['phone'] . "','"
            . "',"
            . $isOwnerCondition . ",'"
            . $contactAddr . "','"
            . $receiptAddr . "')";
}

$res = mysql_query($sqlDelete);
if ($res) {
    echo 200;
} else {
    echo mysql_error();
}
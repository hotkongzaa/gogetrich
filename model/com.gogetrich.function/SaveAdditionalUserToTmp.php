<?php

session_start();
require '../../model-db-connection/config.php';

$isOwnerCondition = !empty($_GET['isOwner']) ? "'" . $_GET['isOwner'] . "'" : "NULL";

$sqlDelete = "INSERT INTO MORE_REGISTRED_TMP(TMP_ID,TMP_NAME,TMP_EMAIL,TMP_PHONE_NUMBER,TMP_CUS_ID,REF_CUS_ID) "
        . "VALUES ('" . md5(date("h:i:sa")) . "','"
        . $_GET['fName'] . " " . $_GET['lName'] . "','"
        . $_GET['email'] . "','"
        . $_GET['phone'] . "','"
        . $_SESSION['userIdFrontEnd'] . "',"
        . $isOwnerCondition . ")";
$res = mysql_query($sqlDelete);
if ($res) {
    echo 200;
} else {
    echo mysql_error();
}
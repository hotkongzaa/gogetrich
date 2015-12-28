<?php
session_start();
require '../../model-db-connection/config.php';

$sqlDelete = "INSERT INTO MORE_REGISTRED_TMP(TMP_ID,TMP_NAME,TMP_EMAIL,TMP_PHONE_NUMBER,TMP_CUS_ID) "
        . "VALUES ('" . md5(date("h:i:sa")) . "','" . $_GET['name'] . "','" . $_GET['email'] . "','" . $_GET['phone'] . "','" . $_SESSION['userId'] . "')";
$res = mysql_query($sqlDelete);
if ($res) {
    echo 200;
} else {
    echo mysql_error();
}
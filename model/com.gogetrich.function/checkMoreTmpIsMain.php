<?php

session_start();
require '../../model-db-connection/config.php';

$sqlGetTmpTbl = "SELECT * FROM MORE_REGISTRED_TMP WHERE TMP_ID = '" . $_GET['tmpID'] . "'";
$resGetTmpTbl = mysql_query($sqlGetTmpTbl);
$rowGetTmpTbl = mysql_fetch_assoc($resGetTmpTbl);


$sqlGetRichUser = "SELECT * FROM RICH_CUSTOMER WHERE CUS_ID = '" . $_SESSION['userIdFrontEnd'] . "'";
$resGetRichUser = mysql_query($sqlGetRichUser);
$rowGetRichUser = mysql_fetch_assoc($resGetRichUser);

if ($rowGetTmpTbl['TMP_EMAIL'] == $rowGetRichUser['CUS_EMAIL']) {
    echo 200;
} else {
    //User not match
    echo 111;
}
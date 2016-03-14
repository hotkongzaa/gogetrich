<?php

session_start();
require '../../model-db-connection/config.php';

$regisEmail = (string) filter_input(INPUT_GET, 'email');

$sqlGetTmpTbl = "SELECT count(*) as counts FROM TMP_REGISTER_" . $_SESSION['MORE_TEMP_REGIST'] . " WHERE TMP_EMAIL like '" . $regisEmail . "'";
$resGetTmpTbl = mysql_query($sqlGetTmpTbl);
$rowGetTmpTbl = mysql_fetch_assoc($resGetTmpTbl);

if ($rowGetTmpTbl['counts'] >= 1) {
    echo 409;
} else {
    echo 200;
}
<?php

session_start();
require '../../model-db-connection/config.php';

if (isset($_SESSION['MORE_TEMP_REGIST'])) {
    $sqlGetTmpTbl = "SELECT count(*) as counts FROM TMP_REGISTER_" . $_SESSION['MORE_TEMP_REGIST'] . " WHERE TMP_CUS_ID =''";
    $resGetTmpTbl = mysql_query($sqlGetTmpTbl);
    $rowGetTmpTbl = mysql_fetch_assoc($resGetTmpTbl);

    echo $rowGetTmpTbl['counts'];
} else {
    echo 505;
}


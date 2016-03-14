<?php

session_start();
require '../../model-db-connection/config.php';

$sqlGetTmpTbl = "SELECT count(*) as counts FROM TMP_REGISTER_" . $_SESSION['MORE_TEMP_REGIST'];
$resGetTmpTbl = mysql_query($sqlGetTmpTbl);
$rowGetTmpTbl = mysql_fetch_assoc($resGetTmpTbl);

echo $rowGetTmpTbl['counts'];

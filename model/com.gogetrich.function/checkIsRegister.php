<?php

session_start();
require '../../model-db-connection/config.php';

$sqlGetTmpTbl = "SELECT count(*) as counts FROM MORE_REGISTRED_TMP WHERE TMP_CUS_ID = '" . $_SESSION['userId'] . "'";
$resGetTmpTbl = mysql_query($sqlGetTmpTbl);
$rowGetTmpTbl = mysql_fetch_assoc($resGetTmpTbl);

echo $rowGetTmpTbl['counts'];

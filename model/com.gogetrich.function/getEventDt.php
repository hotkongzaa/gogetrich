<?php

session_start();
require '../../model-db-connection/config.php';

$sqlGetTmpTbl = "SELECT * FROM GTRICH_COURSE_EVENT_DATE_TIME WHERE EVENT_ID = '" . $_GET['id'] . "'";
$resGetTmpTbl = mysql_query($sqlGetTmpTbl);
$rowGetTmpTbl = mysql_fetch_assoc($resGetTmpTbl);

echo "เริ่ม " . $rowGetTmpTbl['START_EVENT_DATE_TIME'] . " ถึง " . $rowGetTmpTbl['END_EVENT_DATE_TIME'];

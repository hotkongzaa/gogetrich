<?php

session_start();
require '../../model-db-connection/config.php';

$email = (string) filter_input(INPUT_GET, 'email');
$courseID = (string) filter_input(INPUT_GET, 'courseID');

$sqlGetTmpTbl = "SELECT COUNT(*) as counts FROM RICH_CUSTOMER RC "
        . "LEFT JOIN RICH_CUSTOMER_ENROLL RCE ON RC.CUS_ID = RCE.ENROLL_CUS_ID "
        . "WHERE RC.CUS_EMAIL LIKE '" . $email . "' AND RCE.ENROLL_COURSE_ID = '" . $courseID . "'";
$resGetTmpTbl = mysql_query($sqlGetTmpTbl);
$rowGetTmpTbl = mysql_fetch_assoc($resGetTmpTbl);

if ($rowGetTmpTbl['counts'] >= 1) {
    echo 'Email นี้ได้เป็นสมาชิก และ ได้ลงทะเบียน Course นี้เรียบร้อยแล้ว';
} else {
    echo 200;
}

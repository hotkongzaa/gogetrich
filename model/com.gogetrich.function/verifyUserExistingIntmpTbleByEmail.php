<?php

session_start();
require '../../model-db-connection/config.php';

$regisEmail = (string) filter_input(INPUT_GET, 'email');

if (isset($_SESSION['MORE_TEMP_REGIST'])) {
    $sqlGetTmpTbl = "SELECT count(*) as counts FROM TMP_REGISTER_" . $_SESSION['MORE_TEMP_REGIST'] . " WHERE TMP_EMAIL like '" . $regisEmail . "'";
    $resGetTmpTbl = mysql_query($sqlGetTmpTbl);
    if ($resGetTmpTbl) {
        $rowGetTmpTbl = mysql_fetch_assoc($resGetTmpTbl);
        if ($rowGetTmpTbl['counts'] >= 1) {
            //Duplicate 
            echo 409;
        } else {
            //Not duplicate
            echo 200;
        }
    } else {
        //Table from session not found
        echo 505;
    }
} else {
    //Session is not set
    echo 505;
}




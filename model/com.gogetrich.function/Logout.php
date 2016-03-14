<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
require '../../model-db-connection/config.php';
//session_destroy();
unset($_SESSION['expireFrontEnd']);
unset($_SESSION['usernameFrontEnd']);
unset($_SESSION['userIdFrontEnd']);

//unset tmp table when logout
if (isset($_SESSION['MORE_TEMP_REGIST'])) {
    $sqlDelTmpFromSession = "DROP TABLE TMP_REGISTER_" . $_SESSION['MORE_TEMP_REGIST'];
    $delRequest = mysql_query($sqlDelTmpFromSession);
    if ($delRequest) {
        unset($_SESSION['MORE_TEMP_REGIST']);
        echo 200;
    } else {
        echo mysql_error();
    }
} else {
    echo 200;
}



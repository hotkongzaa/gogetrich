<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
require '../../model-db-connection/config.php';

//unset tmp table when logout
if (isset($_SESSION['usernameFrontEnd'])) {
    $sqlGetRich = "SELECT *"
            . "FROM RICH_CUSTOMER WHERE CUS_ID = '" . $_SESSION['userIdFrontEnd'] . "'";
    $result = mysql_query($sqlGetRich);
    $row = mysql_fetch_assoc($result);
    echo "200:" . $row['CUS_FIRST_NAME'] . "||" . $row['CUS_LAST_NAME'] . "||" . $row['CUS_PHONE_NUMBER'] . "||" . $row['CUS_EMAIL'] . "||" . $row['CUS_CONTACT_ADDRESS'] . "||" . $row['CUS_RECEIPT_ADDRESS'];
} else {
    echo "101:";
}



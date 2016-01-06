<?php

session_start();
require '../../model-db-connection/config.php';

$sqlDelete = "DELETE FROM MORE_REGISTRED_TMP WHERE TMP_NAME = '" . $_GET['name'] . "' AND TMP_EMAIL='" . $_GET['email'] . "'";
$res = mysql_query($sqlDelete);
if ($res) {
    echo 200;
} else {
    echo mysql_error();
}
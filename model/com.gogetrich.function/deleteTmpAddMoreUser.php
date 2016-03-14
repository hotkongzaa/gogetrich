<?php

session_start();
require '../../model-db-connection/config.php';

$tmpId = (string) filter_input(INPUT_GET, 'tmpID');

$sqlDelete = "DELETE FROM TMP_REGISTER_" . $_SESSION['MORE_TEMP_REGIST'] . " WHERE TMP_ID = '" . $tmpId . "'";
$res = mysql_query($sqlDelete);
if ($res) {
    echo 200;
} else {
    echo mysql_error();
}
<?php

$dbStatus = include("./model-db-connection/DBConnection.inc");
if ($dbStatus == 1) {
    header("Location: view/main");
} else {
    echo "Cannot initial Database";
}
//
die;


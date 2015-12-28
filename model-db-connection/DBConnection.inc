<?php

$config_properties = require 'GoGetRighconf.properties.php';
//Try to connect domain with username and password
$con = mysqli_connect($config_properties['domain'], $config_properties['username'], $config_properties['password']);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//Create database if not exists
$sql = "CREATE DATABASE IF NOT EXISTS " . $config_properties['databasename'];
if (mysqli_query($con, $sql)) {
    //Create all table when the program start    
    $con_create_tbl = mysqli_connect($config_properties['domain'], $config_properties['username'], $config_properties['password'], $config_properties['databasename']);
    mysqli_set_charset($con_create_tbl, "utf8");

    $sqlCreateCustomerDetail = "CREATE TABLE IF NOT EXISTS RICH_CUSTOMER ("
            . "CUS_ID VARCHAR(100) NOT NULL,"
            . "CUS_USERNAME VARCHAR(255),"
            . "CUS_PASSWORD VARCHAR(255),"
            . "CUS_EMAIL VARCHAR(255),"
            . "CUS_FIRST_NAME VARCHAR(255),"
            . "CUS_LAST_NAME VARCHAR(255),"
            . "CUS_GENDER VARCHAR(20),"
            . "CUS_CONTACT_ADDRESS VARCHAR(255),"
            . "CUS_RECEIPT_ADDRESS VARCHAR(255),"
            . "CUS_PHONE_NUMBER VARCHAR(120),"
            . "CUS_FACEBOOK_ADDRESS VARCHAR(255),"
            . "CREATED_DATE_TIME TIMESTAMP,"
            . "PRIMARY KEY (CUS_ID)"
            . ")ENGINE=InnoDB DEFAULT CHARSET=utf8;";
    mysqli_query($con_create_tbl, $sqlCreateCustomerDetail);

    $sqlCreateCustomerEnroll = "CREATE TABLE IF NOT EXISTS RICH_CUSTOMER_ENROLL ("
            . "ENROLL_ID VARCHAR(100) NOT NULL,"
            . "ENROLL_CUS_ID VARCHAR(100) NOT NULL,"
            . "ENROLL_PAYMENT_TERM VARCHAR(10),"
            . "ENROLL_SEMINARDISCOUNT VARCHAR(255),"
            . "ENROLL_INVITESUGGEST VARCHAR(255),"
            . "ENROLL_KNOWLEDGE_FOR_REASON VARCHAR(255),"
            . "ENROLL_OTHER_KNOWLEDGE_FOR_REASON VARCHAR(255),"
            . "ENROLL_NEWSFROM VARCHAR(255),"
            . "ENROLL_COURSE_ID VARCHAR(255),"
            . "CREATED_DATE_TIME TIMESTAMP,"
            . "PAYMENT_STATUS VARCHAR(255),"
            . "ADDITIONAL_ENROLL_CUS_NAME VARCHAR(255),"
            . "PRIMARY KEY (ENROLL_ID),"
            . "FOREIGN KEY (ENROLL_CUS_ID) REFERENCES RICH_CUSTOMER(CUS_ID)"
            . ")ENGINE=InnoDB DEFAULT CHARSET=utf8;";
    mysqli_query($con_create_tbl, $sqlCreateCustomerEnroll);
    return true;
} else {
    echo "Error creating database: " . mysqli_error($con);
}
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CustomerDao
 *
 * @author krisada.thiangtham
 */
require 'CustomerDao.php';

class CustomerDaoImpl implements CustomerDao {

    public function deleteCustomerByID($cusID) {
        
    }

    public function editCustomer(\CustomerVO $customerVO) {
        
    }

    public function getCustomerById($cusID) {
        
    }

    public function saveCustomer(\CustomerVO $customerVO) {
        $sqlSaveCus = "INSERT INTO RICH_CUSTOMER (CUS_ID,CUS_USERNAME,CUS_PASSWORD,CUS_EMAIL,CUS_FIRST_NAME,CUS_LAST_NAME,CUS_GENDER,CUS_CONTACT_ADDRESS,CUS_RECEIPT_ADDRESS,CUS_PHONE_NUMBER,CUS_FACEBOOK_ADDRESS,CREATED_DATE_TIME,FORCE_CHANGE) "
                . "VALUES "
                . "('" . $customerVO->getCusID()
                . "','" . $customerVO->getCusUsername()
                . "','" . $customerVO->getCusPassword()
                . "','" . $customerVO->getCusEmail()
                . "','" . $customerVO->getCusFirstName()
                . "','" . $customerVO->getCusLastName()
                . "','" . $customerVO->getCusGender()
                . "','" . $customerVO->getCusContactAddr()
                . "','" . $customerVO->getCusReceiptAddr()
                . "','" . $customerVO->getPhoneNumber() . "','" . $customerVO->getCusFacebookAddr() . "',NOW(),'" . $customerVO->getForceChange() . "');";
        mysql_query("SET character_set_results=utf8");
        mysql_query("SET character_set_client=utf8");
        mysql_query("SET character_set_connection=utf8");
        $query = mysql_query($sqlSaveCus);
        if ($query) {
            return 200;
        } else {
            return "Cannot save customer with error '" . mysql_error() . "'";
        }
    }

    public function duplicationUsername($username) {
        $sqlChecDupUser = "SELECT count(*) as counts FROM RICH_CUSTOMER WHERE CUS_USERNAME LIKE '" . $username . "'";
        $query = mysql_query($sqlChecDupUser);
        $row = mysql_fetch_assoc($query);
        if ($row['counts'] >= 1) {
            return true;
        } else {
            return false;
        }
    }

    public function verfiUsernameAndPassword($username, $password) {
        $sqlVerifyUser = "SELECT * FROM RICH_CUSTOMER WHERE CUS_USERNAME LIKE '" . $username . "' AND CUS_PASSWORD LIKE '" . $password . "'";
        $query = mysql_query($sqlVerifyUser);
        if (mysql_num_rows($query) >= 1) {
            $row = mysql_fetch_assoc($query);
            if ($row['FORCE_CHANGE'] == "true") {
                //Force change password
                return "205||" . $row['CUS_ID'];
            } else {
                return "200||" . json_encode($row);
            }
        } else {
            //invalid username and password
            return "503||";
        }
    }

    public function duplicationEmail($email) {
        $sqlChecDupUser = "SELECT count(*) as counts FROM RICH_CUSTOMER WHERE CUS_EMAIL LIKE '" . $email . "'";
        $query = mysql_query($sqlChecDupUser);
        $row = mysql_fetch_assoc($query);
        if ($row['counts'] >= 1) {
            return true;
        } else {
            return false;
        }
    }

}

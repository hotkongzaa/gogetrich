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
interface CustomerDao {

    //put your code here
    public function saveCustomer(CustomerVO $customerVO);

    public function editCustomer(CustomerVO $customerVO);

    public function deleteCustomerByID($cusID);

    public function getCustomerById($cusID);

    public function duplicationUsername($username);

    public function verfiUsernameAndPassword($username, $password);

    public function duplicationEmail($email);

    public function getCustomerByEmail($email);

    public function getCustomerByUsername($username);

    public function resetPassword($password, $cusId);
}

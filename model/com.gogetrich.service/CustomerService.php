<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CustomerService
 *
 * @author krisada.thiangtham
 */
class CustomerService {

    //put your code here
    //put your code here
    private $dispatcher;

    public function __construct(CustomerDao $dispatcher) {
        $this->dispatcher = $dispatcher;
    }

    public function action($action) {
        $this->dispatcher->dispatch($action);
    }

    public function deleteCustomerByID($cusID) {
        return $this->dispatcher->deleteCustomerByID($cusID);
    }

    public function editCustomer(\CustomerVO $customerVO) {
        return $this->dispatcher->editCustomer($customerVO);
    }

    public function getCustomerById($cusID) {
        return $this->dispatcher->getCustomerById($cusID);
    }

    public function saveCustomer(\CustomerVO $customerVO) {
        return $this->dispatcher->saveCustomer($customerVO);
    }

    public function duplicationUsername($username) {
        return $this->dispatcher->duplicationUsername($username);
    }

    public function verfiUsernameAndPassword($username, $password) {
        return $this->dispatcher->verfiUsernameAndPassword($username, $password);
    }

    public function duplicationEmail($email) {
        return $this->dispatcher->duplicationEmail($email);
    }

    public function getCustomerByEmail($email) {
        return $this->dispatcher->getCustomerByEmail($email);
    }

    public function getCustomerByUsername($username) {
        return $this->dispatcher->getCustomerByUsername($username);
    }

}

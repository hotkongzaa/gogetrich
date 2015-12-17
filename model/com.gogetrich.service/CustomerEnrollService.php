<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CustomerEnrollService
 *
 * @author krisada.thiangtham
 */
class CustomerEnrollService {

    //put your code here
    private $dispatcher;

    public function __construct(CustEnrollDao $dispatcher) {
        $this->dispatcher = $dispatcher;
    }

    public function action($action) {
        $this->dispatcher->dispatch($action);
    }

    public function checkCustAlreadyEnrollByEnrollID($courseID, $custID) {
        return $this->dispatcher->checkCustAlreadyEnrollByEnrollID($courseID, $custID);
    }

    public function deleteCustEnrollByEnrollID($enrollID) {
        return $this->dispatcher->deleteCustEnrollByEnrollID($enrollID);
    }

    public function getCustEnrollDescFromCustID($custID) {
        return $this->dispatcher->getCustEnrollDescFromCustID($custID);
    }

    public function saveCustEnroll(\CustomerEnrollVO $object) {
        return $this->dispatcher->saveCustEnroll($object);
    }

}

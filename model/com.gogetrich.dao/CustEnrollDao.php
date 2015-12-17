<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CustEnrollDao
 *
 * @author krisada.thiangtham
 */
interface CustEnrollDao {

    //put your code here
    public function saveCustEnroll(CustomerEnrollVO $object);

    public function getCustEnrollDescFromCustID($custID);

    public function checkCustAlreadyEnrollByEnrollID($courseID, $custID);

    public function deleteCustEnrollByEnrollID($enrollID);
}

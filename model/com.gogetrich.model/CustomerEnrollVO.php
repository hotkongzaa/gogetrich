<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CustomerEnroll
 *
 * @author krisada.thiangtham
 */
class CustomerEnrollVO {

    //put your code here
    private $enrollID;
    private $refCusID;
    private $paymentTerm;
    private $seminarDiscountReason;
    private $inviteSuggestPersonName;
    private $knowledgeForReason;
    private $otherknowledgeForReason;
    private $newsFrom;
    private $createDateTime;
    private $courseID;

    function getEnrollID() {
        return $this->enrollID;
    }

    function getRefCusID() {
        return $this->refCusID;
    }

    function getPaymentTerm() {
        return $this->paymentTerm;
    }

    function getSeminarDiscountReason() {
        return $this->seminarDiscountReason;
    }

    function getInviteSuggestPersonName() {
        return $this->inviteSuggestPersonName;
    }

    function getKnowledgeForReason() {
        return $this->knowledgeForReason;
    }

    function getOtherknowledgeForReason() {
        return $this->otherknowledgeForReason;
    }

    function getNewsFrom() {
        return $this->newsFrom;
    }

    function getCreateDateTime() {
        return $this->createDateTime;
    }

    function setEnrollID($enrollID) {
        $this->enrollID = $enrollID;
    }

    function setRefCusID($refCusID) {
        $this->refCusID = $refCusID;
    }

    function setPaymentTerm($paymentTerm) {
        $this->paymentTerm = $paymentTerm;
    }

    function setSeminarDiscountReason($seminarDiscountReason) {
        $this->seminarDiscountReason = $seminarDiscountReason;
    }

    function setInviteSuggestPersonName($inviteSuggestPersonName) {
        $this->inviteSuggestPersonName = $inviteSuggestPersonName;
    }

    function setKnowledgeForReason($knowledgeForReason) {
        $this->knowledgeForReason = $knowledgeForReason;
    }

    function setOtherknowledgeForReason($otherknowledgeForReason) {
        $this->otherknowledgeForReason = $otherknowledgeForReason;
    }

    function setNewsFrom($newsFrom) {
        $this->newsFrom = $newsFrom;
    }

    function setCreateDateTime($createDateTime) {
        $this->createDateTime = $createDateTime;
    }

    function getCourseID() {
        return $this->courseID;
    }

    function setCourseID($courseID) {
        $this->courseID = $courseID;
    }

}

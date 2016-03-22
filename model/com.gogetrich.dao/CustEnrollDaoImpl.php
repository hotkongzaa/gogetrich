<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CustEnrollDaoImpl
 *
 * @author krisada.thiangtham
 */
require 'CustEnrollDao.php';

class CustEnrollDaoImpl implements CustEnrollDao {

    public function checkCustAlreadyEnrollByEnrollID($courseID, $custID) {
        $config_properties = require '../../model-db-connection/GoGetRighconf.properties.php';

        // Create connection
        $mysqli = new mysqli($config_properties['domain'], $config_properties['username'], $config_properties['password'], $config_properties['databasename']);

        /* check connection */
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        // prepare and bind
        if ($stmt = $mysqli->prepare("SELECT COUNT(*) FROM RICH_CUSTOMER_ENROLL WHERE ENROLL_COURSE_ID LIKE ? AND ENROLL_CUS_ID LIKE ?")) {
            $stmt->bind_param("ss", $courseID, $custID);
            $stmt->execute();

            /* bind result variables */
            $stmt->bind_result($isEnroll);

            /* fetch value */
            $stmt->fetch();

            if ($isEnroll >= 1) {
                return "You already register this seminar";
            } else {
                return 200;
            }

            $stmt->close();
        }
        $mysqli->close();
    }

    public function deleteCustEnrollByEnrollID($enrollID) {
        
    }

    public function getCustEnrollDescFromCustID($custID) {
        
    }

    public function saveCustEnroll(\CustomerEnrollVO $object) {

        $config_properties = require '../../model-db-connection/GoGetRighconf.properties.php';

        // Create connection
        $mysqli = new mysqli($config_properties['domain'], $config_properties['username'], $config_properties['password'], $config_properties['databasename']);

        /* check connection */
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        $mysqli->set_charset("utf8");
        // prepare and bind
        $stmt = $mysqli->prepare("INSERT INTO RICH_CUSTOMER_ENROLL (ENROLL_ID, ENROLL_CUS_ID, ENROLL_PAYMENT_TERM,ENROLL_SEMINARDISCOUNT,ENROLL_INVITESUGGEST,ENROLL_KNOWLEDGE_FOR_REASON,ENROLL_OTHER_KNOWLEDGE_FOR_REASON,ENROLL_NEWSFROM,ENROLL_COURSE_ID,CREATED_DATE_TIME,PAYMENT_STATUS,ADDITIONAL_ENROLL_CUS_NAME,IS_REGISTERED_OWNER,ENROLL_STATUS) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,NOW(),'PENDING',?,?,?)");
        $stmt->bind_param("ssssssssssss", $object->getEnrollID(), $object->getRefCusID(), $object->getPaymentTerm(), $object->getSeminarDiscountReason(), $object->getInviteSuggestPersonName(), $object->getKnowledgeForReason(), $object->getOtherknowledgeForReason(), $object->getNewsFrom(), $object->getCourseID(), $object->getAdditionalUser(), $object->getIsRegisteredOwn(), $object->getEnrollmentStatus());

        $stmt->execute();

        $stmt->close();
        $mysqli->close();
        return 200;
    }

}

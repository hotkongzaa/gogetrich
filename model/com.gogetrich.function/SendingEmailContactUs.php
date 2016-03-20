<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require './EmailContent.php';
require './SendingEmail.php';

$iniConfiguration = parse_ini_file("../../model-db-connection/configuration.ini");


$contactName = (string) filter_input(INPUT_GET, 'contactName');
$contactEmail = (string) filter_input(INPUT_GET, 'contactEmail');
$contactSubject = (string) filter_input(INPUT_GET, 'contactSubject');
$contactMessage = (string) filter_input(INPUT_GET, 'contactMessage');

$emailContent = new EmailContent();
$emailBody = $emailContent->getEmailContentContact($contactName, $contactSubject, $contactMessage);
$sendingEmail = new SendingEmail($iniConfiguration['email.host'], $iniConfiguration['email.username'], $iniConfiguration['email.password'], $iniConfiguration['email.official'], "Email Contact: " . $contactSubject, $emailBody, $contactEmail, $contactName);
echo $sendingEmail->sendingEmail();



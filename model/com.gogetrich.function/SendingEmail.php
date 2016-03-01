<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SendingEmail
 *
 * @author krisada.thiangtham
 */
require 'class.phpmailer.php';
require 'class.smtp.php';
require 'class.pop3.php';

class SendingEmail {

    public $addressTo = "";
    public $subJectName = "";
    public $emailBody = "";
    public $from = "";
    public $fromName = "";
    public $host = "";
    public $username = "";
    public $password = "";

    public function __construct($host, $username, $password, $addressTo, $subjectName, $emailBody, $from, $fromName) {
        $this->addressTo = $addressTo;
        $this->subJectName = $subjectName;
        $this->emailBody = $emailBody;
        $this->from = $from;
        $this->fromName = $fromName;
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
    }

    public function sendingEmail() {
        $mail = new PHPMailer(true);
        $mail->CharSet = "UTF-8";
        $mail->IsSMTP();                                      // set mailer to use SMTP
        $mail->Host = $this->host;  // specify main and backup server
        $mail->SMTPAuth = true;     // turn on SMTP authentication
        $mail->Username = $this->username;  // SMTP username
        $mail->Password = $this->password; // SMTP password

        $mail->From = $this->from;
        $mail->FromName = $this->fromName;
        $mail->AddAddress($this->addressTo);
        $mail->IsHTML(true);                                  // set email format to HTML

        $mail->Subject = $this->subJectName;
        $mail->Body = $this->emailBody;

        if (!$mail->Send()) {
            return "Message could not be sent. <p> Mailer Error: " . $mail->ErrorInfo;
        } else {
            return 200;
        }
    }

}

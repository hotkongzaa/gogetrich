<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmailContent
 *
 * @author WIN 10
 */
class EmailContent {

    //put your code here
    public function __construct() {
        
    }

    public function getForgetPasswordTemplate($username, $email, $password, $urlGlobalPath, $name) {
        return '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width"/>
        <style>
            /**********************************************
            * Ink v1.0.5 - Copyright 2013 ZURB Inc        *
            **********************************************/

            /* Client-specific Styles & Reset */

            #outlook a { 
                padding:0; 
            } 

            body{ 
                width:100% !important; 
                min-width: 100%;
                -webkit-text-size-adjust:100%; 
                -ms-text-size-adjust:100%; 
                margin:0; 
                padding:0;
            }

            .ExternalClass { 
                width:100%;
            } 

            .ExternalClass, 
            .ExternalClass p, 
            .ExternalClass span, 
            .ExternalClass font, 
            .ExternalClass td, 
            .ExternalClass div { 
                line-height: 100%; 
            } 

            #backgroundTable { 
                margin:0; 
                padding:0; 
                width:100% !important; 
                line-height: 100% !important; 
            }

            img { 
                outline:none; 
                text-decoration:none; 
                -ms-interpolation-mode: bicubic;
                width: auto;
                max-width: 100%; 
                float: left; 
                clear: both; 
                display: block;
            }

            center {
                width: 100%;
                min-width: 580px;
            }

            a img { 
                border: none;
            }

            p {
                margin: 0 0 0 10px;
            }

            table {
                border-spacing: 0;
                border-collapse: collapse;
            }

            td { 
                word-break: break-word;
                -webkit-hyphens: auto;
                -moz-hyphens: auto;
                hyphens: auto;
                border-collapse: collapse !important; 
            }

            table, tr, td {
                padding: 0;
                vertical-align: top;
                text-align: left;
            }

            hr {
                color: #d9d9d9; 
                background-color: #d9d9d9; 
                height: 1px; 
                border: none;
            }

            /* Responsive Grid */

            table.body {
                height: 100%;
                width: 100%;
            }

            table.container {
                width: 580px;
                margin: 0 auto;
                text-align: inherit;
            }

            table.row { 
                padding: 0px; 
                width: 100%;
                position: relative;
            }

            table.container table.row {
                display: block;
            }

            td.wrapper {
                padding: 10px 20px 0px 0px;
                position: relative;
            }

            table.columns,
            table.column {
                margin: 0 auto;
            }

            table.columns td,
            table.column td {
                padding: 0px 0px 10px; 
            }

            table.columns td.sub-columns,
            table.column td.sub-columns,
            table.columns td.sub-column,
            table.column td.sub-column {
                padding-right: 10px;
            }

            td.sub-column, td.sub-columns {
                min-width: 0px;
            }

            table.row td.last,
            table.container td.last {
                padding-right: 0px;
            }

            table.one { width: 30px; }
            table.two { width: 80px; }
            table.three { width: 130px; }
            table.four { width: 180px; }
            table.five { width: 230px; }
            table.six { width: 280px; }
            table.seven { width: 330px; }
            table.eight { width: 380px; }
            table.nine { width: 430px; }
            table.ten { width: 480px; }
            table.eleven { width: 530px; }
            table.twelve { width: 580px; }

            table.one center { min-width: 30px; }
            table.two center { min-width: 80px; }
            table.three center { min-width: 130px; }
            table.four center { min-width: 180px; }
            table.five center { min-width: 230px; }
            table.six center { min-width: 280px; }
            table.seven center { min-width: 330px; }
            table.eight center { min-width: 380px; }
            table.nine center { min-width: 430px; }
            table.ten center { min-width: 480px; }
            table.eleven center { min-width: 530px; }
            table.twelve center { min-width: 580px; }

            table.one .panel center { min-width: 10px; }
            table.two .panel center { min-width: 60px; }
            table.three .panel center { min-width: 110px; }
            table.four .panel center { min-width: 160px; }
            table.five .panel center { min-width: 210px; }
            table.six .panel center { min-width: 260px; }
            table.seven .panel center { min-width: 310px; }
            table.eight .panel center { min-width: 360px; }
            table.nine .panel center { min-width: 410px; }
            table.ten .panel center { min-width: 460px; }
            table.eleven .panel center { min-width: 510px; }
            table.twelve .panel center { min-width: 560px; }

            .body .columns td.one,
            .body .column td.one { width: 8.333333%; }
            .body .columns td.two,
            .body .column td.two { width: 16.666666%; }
            .body .columns td.three,
            .body .column td.three { width: 25%; }
            .body .columns td.four,
            .body .column td.four { width: 33.333333%; }
            .body .columns td.five,
            .body .column td.five { width: 41.666666%; }
            .body .columns td.six,
            .body .column td.six { width: 50%; }
            .body .columns td.seven,
            .body .column td.seven { width: 58.333333%; }
            .body .columns td.eight,
            .body .column td.eight { width: 66.666666%; }
            .body .columns td.nine,
            .body .column td.nine { width: 75%; }
            .body .columns td.ten,
            .body .column td.ten { width: 83.333333%; }
            .body .columns td.eleven,
            .body .column td.eleven { width: 91.666666%; }
            .body .columns td.twelve,
            .body .column td.twelve { width: 100%; }

            td.offset-by-one { padding-left: 50px; }
            td.offset-by-two { padding-left: 100px; }
            td.offset-by-three { padding-left: 150px; }
            td.offset-by-four { padding-left: 200px; }
            td.offset-by-five { padding-left: 250px; }
            td.offset-by-six { padding-left: 300px; }
            td.offset-by-seven { padding-left: 350px; }
            td.offset-by-eight { padding-left: 400px; }
            td.offset-by-nine { padding-left: 450px; }
            td.offset-by-ten { padding-left: 500px; }
            td.offset-by-eleven { padding-left: 550px; }

            td.expander {
                visibility: hidden;
                width: 0px;
                padding: 0 !important;
            }

            table.columns .text-pad,
            table.column .text-pad {
                padding-left: 10px;
                padding-right: 10px;
            }

            table.columns .left-text-pad,
            table.columns .text-pad-left,
            table.column .left-text-pad,
            table.column .text-pad-left {
                padding-left: 10px;
            }

            table.columns .right-text-pad,
            table.columns .text-pad-right,
            table.column .right-text-pad,
            table.column .text-pad-right {
                padding-right: 10px;
            }

            /* Block Grid */

            .block-grid {
                width: 100%;
                max-width: 580px;
            }

            .block-grid td {
                display: inline-block;
                padding:10px;
            }

            .two-up td {
                width:270px;
            }

            .three-up td {
                width:173px;
            }

            .four-up td {
                width:125px;
            }

            .five-up td {
                width:96px;
            }

            .six-up td {
                width:76px;
            }

            .seven-up td {
                width:62px;
            }

            .eight-up td {
                width:52px;
            }

            /* Alignment & Visibility Classes */

            table.center, td.center {
                text-align: center;
            }

            h1.center,
            h2.center,
            h3.center,
            h4.center,
            h5.center,
            h6.center {
                text-align: center;
            }

            span.center {
                display: block;
                width: 100%;
                text-align: center;
            }

            img.center {
                margin: 0 auto;
                float: none;
            }

            .show-for-small,
            .hide-for-desktop {
                display: none;
            }

            /* Typography */

            body, table.body, h1, h2, h3, h4, h5, h6, p, td { 
                color: #666;
                font-family: "Helvetica", "Arial", sans-serif; 
                font-weight: normal; 
                padding:0; 
                margin: 0;
                text-align: left; 
                line-height: 1.3;
            }

            h1, h2, h3, h4, h5, h6 {
                word-break: normal;
            }

            h1 {font-size: 30px;}
            h2 {font-size: 26px;}
            h3 {font-size: 20px;}
            h4 {font-size: 17px;}
            h5 {font-size: 14px;}
            h6 {font-size: 13px;}

            h1, h2, h3, h4, h5, h6, p {margin-bottom: 10px;}

            body, table.body, p, td {font-size: 14px;line-height:1.42;}

            p.lead, p.lede, p.leed {
                font-size: 18px;
                line-height:21px;
            }

            p { 
                margin-bottom: 10px;
            }

            small {
                font-size: 10px;
            }

            a {
                color: #3498db; 
                text-decoration: none;
            }

            a:hover { 
                color: #2795b6 !important;
            }

            a:active { 
                color: #2795b6 !important;
            }

            a:visited { 
                color: #2ba6cb !important;
            }

            h1 a, 
            h2 a, 
            h3 a, 
            h4 a, 
            h5 a, 
            h6 a {
                color: #2ba6cb;
            }

            h1 a:active, 
            h2 a:active,  
            h3 a:active, 
            h4 a:active, 
            h5 a:active, 
            h6 a:active { 
                color: #2ba6cb !important; 
            } 

            h1 a:visited, 
            h2 a:visited,  
            h3 a:visited, 
            h4 a:visited, 
            h5 a:visited, 
            h6 a:visited { 
                color: #2ba6cb !important; 
            } 

            /* Panels */

            .panel {
                background: #f2f2f2;
                border: 1px solid #d9d9d9;
                padding: 10px !important;
            }

            .sub-grid table {
                width: 100%;
            }

            .sub-grid td.sub-columns {
                padding-bottom: 0;
            }

            /* Buttons */

            table.button,
            table.tiny-button,
            table.small-button,
            table.medium-button,
            table.large-button {
                width: 100%;
                overflow: hidden;
            }

            table.button td,
            table.tiny-button td,
            table.small-button td,
            table.medium-button td,
            table.large-button td {
                display: block;
                width: auto !important;
                text-align: center;
                background: #2ba6cb;
                border: 1px solid #2284a1;
                color: #ffffff;
                padding: 8px 0;
            }

            table.tiny-button td {
                padding: 5px 0 4px;
            }

            table.small-button td {
                padding: 8px 0 7px;
            }

            table.medium-button td {
                padding: 12px 0 10px;
            }

            table.large-button td {
                padding: 21px 0 18px;
            }

            table.button td a,
            table.tiny-button td a,
            table.small-button td a,
            table.medium-button td a,
            table.large-button td a {
                font-weight: bold;
                text-decoration: none;
                font-family: Helvetica, Arial, sans-serif;
                color: #ffffff;
                font-size: 16px;
            }

            table.tiny-button td a {
                font-size: 12px;
                font-weight: normal;
            }

            table.small-button td a {
                font-size: 16px;
            }

            table.medium-button td a {
                font-size: 20px;
            }

            table.large-button td a {
                font-size: 24px;
            }

            table.button:hover td,
            table.button:visited td,
            table.button:active td {
                background: #2795b6 !important;
            }

            table.button:hover td a,
            table.button:visited td a,
            table.button:active td a {
                color: #fff !important;
            }

            table.button:hover td,
            table.tiny-button:hover td,
            table.small-button:hover td,
            table.medium-button:hover td,
            table.large-button:hover td {
                background: #2795b6 !important;
            }

            table.button:hover td a,
            table.button:active td a,
            table.button td a:visited,
            table.tiny-button:hover td a,
            table.tiny-button:active td a,
            table.tiny-button td a:visited,
            table.small-button:hover td a,
            table.small-button:active td a,
            table.small-button td a:visited,
            table.medium-button:hover td a,
            table.medium-button:active td a,
            table.medium-button td a:visited,
            table.large-button:hover td a,
            table.large-button:active td a,
            table.large-button td a:visited {
                color: #ffffff !important; 
            }

            table.secondary td {
                background: #e9e9e9;
                border-color: #d0d0d0;
                color: #555;
            }

            table.secondary td a {
                color: #555;
            }

            table.secondary:hover td {
                background: #d0d0d0 !important;
                color: #555;
            }

            table.secondary:hover td a,
            table.secondary td a:visited,
            table.secondary:active td a {
                color: #555 !important;
            }

            table.success td {
                background: #5da423;
                border-color: #457a1a;
            }

            table.success:hover td {
                background: #457a1a !important;
            }

            table.alert td {
                background: #c60f13;
                border-color: #970b0e;
            }

            table.alert:hover td {
                background: #970b0e !important;
            }

            table.radius td {
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                border-radius: 3px;
            }

            table.round td {
                -webkit-border-radius: 500px;
                -moz-border-radius: 500px;
                border-radius: 500px;
            }

            /* Outlook First */

            body.outlook p {
                display: inline !important;
            }

            /*  Media Queries */

            @media only screen and (max-width: 600px) {

                table[class="body"] img {
                    width: auto !important;
                    height: auto !important;
                }

                table[class="body"] center {
                    min-width: 0 !important;
                }

                table[class="body"] .container {
                    width: 95% !important;
                }

                table[class="body"] .row {
                    width: 100% !important;
                    display: block !important;
                }

                table[class="body"] .wrapper {
                    display: block !important;
                    padding-right: 0 !important;
                }

                table[class="body"] .columns,
                table[class="body"] .column {
                    table-layout: fixed !important;
                    float: none !important;
                    width: 100% !important;
                    padding-right: 0px !important;
                    padding-left: 0px !important;
                    display: block !important;
                }

                table[class="body"] .wrapper.first .columns,
                table[class="body"] .wrapper.first .column {
                    display: table !important;
                }

                table[class="body"] table.columns td,
                table[class="body"] table.column td {
                    width: 100% !important;
                }

                table[class="body"] .columns td.one,
                table[class="body"] .column td.one { width: 8.333333% !important; }
                table[class="body"] .columns td.two,
                table[class="body"] .column td.two { width: 16.666666% !important; }
                table[class="body"] .columns td.three,
                table[class="body"] .column td.three { width: 25% !important; }
                table[class="body"] .columns td.four,
                table[class="body"] .column td.four { width: 33.333333% !important; }
                table[class="body"] .columns td.five,
                table[class="body"] .column td.five { width: 41.666666% !important; }
                table[class="body"] .columns td.six,
                table[class="body"] .column td.six { width: 50% !important; }
                table[class="body"] .columns td.seven,
                table[class="body"] .column td.seven { width: 58.333333% !important; }
                table[class="body"] .columns td.eight,
                table[class="body"] .column td.eight { width: 66.666666% !important; }
                table[class="body"] .columns td.nine,
                table[class="body"] .column td.nine { width: 75% !important; }
                table[class="body"] .columns td.ten,
                table[class="body"] .column td.ten { width: 83.333333% !important; }
                table[class="body"] .columns td.eleven,
                table[class="body"] .column td.eleven { width: 91.666666% !important; }
                table[class="body"] .columns td.twelve,
                table[class="body"] .column td.twelve { width: 100% !important; }

                table[class="body"] td.offset-by-one,
                table[class="body"] td.offset-by-two,
                table[class="body"] td.offset-by-three,
                table[class="body"] td.offset-by-four,
                table[class="body"] td.offset-by-five,
                table[class="body"] td.offset-by-six,
                table[class="body"] td.offset-by-seven,
                table[class="body"] td.offset-by-eight,
                table[class="body"] td.offset-by-nine,
                table[class="body"] td.offset-by-ten,
                table[class="body"] td.offset-by-eleven {
                    padding-left: 0 !important;
                }

                table[class="body"] table.columns td.expander {
                    width: 1px !important;
                }

                table[class="body"] .right-text-pad,
                table[class="body"] .text-pad-right {
                    padding-left: 10px !important;
                }

                table[class="body"] .left-text-pad,
                table[class="body"] .text-pad-left {
                    padding-right: 10px !important;
                }

                table[class="body"] .hide-for-small,
                table[class="body"] .show-for-desktop {
                    display: none !important;
                }

                table[class="body"] .show-for-small,
                table[class="body"] .hide-for-desktop {
                    display: inherit !important;
                }
            }

        </style>
        <style>

            table.facebook td {
                background: #3b5998;
                border-color: #2d4473;
            }

            table.facebook:hover td {
                background: #2d4473 !important;
            }

            table.twitter td {
                background: #00acee;
                border-color: #0087bb;
            }

            table.twitter:hover td {
                background: #0087bb !important;
            }

            table.google-plus td {
                background-color: #DB4A39;
                border-color: #CC0000;
            }

            table.google-plus:hover td {
                background: #CC0000 !important;
            }

            .template-label {
                color: #666666;
                font-weight: bold;
                font-size: 11px;
            }

            .callout .wrapper {
                padding-bottom: 20px;
            }

            .callout .panel {
                background: #ECF8FF;
                border-color: #b9e5ff;
            }

            .header {
                background: #ecf0f1;
            }

            .footer .wrapper {
                background: #E3E3E3;
            }

            .footer h5 {
                padding-bottom: 10px;
            }

            table.columns .text-pad {
                padding-left: 10px;
                padding-right: 10px;
            }

            table.columns .left-text-pad {
                padding-left: 10px;
            }

            table.columns .right-text-pad {
                padding-right: 10px;
            }

            @media only screen and (max-width: 600px) {

                table[class="body"] .right-text-pad {
                    padding-left: 10px !important;
                }

                table[class="body"] .left-text-pad {
                    padding-right: 10px !important;
                }
            }

        </style>
    </head>
    <body>
        <table class="body">
            <tr>
                <td class="center" align="center" valign="top">
                    <center>

                        <table class="row header">
                            <tr>
                                <td class="center" align="center">
                                    <center>

                                        <table class="container">
                                            <tr>
                                                <td class="wrapper last">

                                                    <table class="twelve columns">
                                                        <tr>
                                                            <td class="six sub-columns">
                                                                <img src="' . $urlGlobalPath . '/view/assets/images/logo.png"/>
                                                            </td>
                                                            <td class="six sub-columns last" style="text-align:right; vertical-align:middle;">
                                                                <span class="template-label"></span>
                                                            </td>
                                                            <td class="expander"></td>
                                                        </tr>
                                                    </table>

                                                </td>
                                            </tr>
                                        </table>

                                    </center>
                                </td>
                            </tr>
                        </table>

                        <table class="container">
                            <tr>
                                <td>

                                    <table class="row">
                                        <tr>
                                            <td class="wrapper last">

                                                <table class="twelve columns">
                                                    <tr>
                                                        <td>
                                                            <h1>Hi, ' . $name . '</h1>
                                                            <p class="lead">
                                                                Your password has been reset successfully.<br/>Please see information below
                                                            </p>
                                                        </td>
                                                        <td class="expander"></td>
                                                    </tr>
                                                </table>

                                            </td>
                                        </tr>
                                    </table>

                                    <table class="row callout">
                                        <tr>
                                            <td class="wrapper last">

                                                <table class="twelve columns">
                                                    <tr>
                                                        <td class="panel">
                                                            <p>
                                                                Email: ' . $email . '<br/>
                                                                Username: ' . $username . '<br/>
                                                                Password: <strong>' . $password . '</strong><br/>
                                                            </p>
                                                            <p style="font-size: 12px;">
                                                                You can login to application with<br/>
                                                                Url: <a href="' . $urlGlobalPath . '">' . $urlGlobalPath . '</a>
                                                            </p>
                                                        </td>
                                                        <td class="expander"></td>
                                                    </tr>
                                                </table>

                                            </td>
                                        </tr>
                                    </table>

                                    <table class="row footer">
                                        <tr>
                                            <td class="wrapper">

                                                <table class="six columns">
                                                    <tr>
                                                        <td class="left-text-pad">

                                                            <h3>Connect With Us:</h3>

                                                            <table class="tiny-button facebook">
                                                                <tr>
                                                                    <td>
                                                                        <a target="_blank" href="https://www.facebook.com/richplanning/">Facebook</a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <br/>
                                                            <br/>
                                                        </td>
                                                        <td class="expander"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td class="wrapper last">

                                                <table class="six columns">
                                                    <tr>
                                                        <td class="last right-text-pad">
                                                            <h3>Contact Info:</h3>
                                                            <p>Phone: 081-9023872</p>
                                                            <p>Email: <a href="mailto:info@gogetrich.net">info@gogetrich.net</a></p>
                                                        </td>
                                                        <td class="expander"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- container end below -->
                                </td>
                            </tr>
                        </table>
                    </center>
                </td>
            </tr>
        </table>
    </body>
</html>';
    }

    public function getCustomerEmailEnrollment($courseNameAndSub, $linkTOCOurse, $courseName, $dateTime, $webPath) {
        return '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>    
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Tempo-Responsive Email Template</title>

        <style type="text/css">
            /* Client-specific Styles */
            div, p, a, li, td { -webkit-text-size-adjust:none; }
            #outlook a {padding:0;} /* Force Outlook to provide a "view in browser" menu link. */
            html{width: 100%; }
            body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
            /* Prevent Webkit and Windows Mobile platforms from changing default font sizes, while not breaking desktop design. */
            .ExternalClass {width:100%;} /* Force Hotmail to display emails at full width */
            .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing. */
            #backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
            img {outline:none; text-decoration:none;border:none; -ms-interpolation-mode: bicubic;}
            a img {border:none;}
            .image_fix {display:block;}
            p {margin: 0px 0px !important;}
            table td {border-collapse: collapse;}
            table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }
            a {color: #33b9ff;text-decoration: none;text-decoration:none!important;}
            /*STYLES*/
            table[class=full] { width: 100%; clear: both; }
            /*IPAD STYLES*/
            @media only screen and (max-width: 640px) {
                a[href^="tel"], a[href^="sms"] {
                    text-decoration: none;
                    color: #33b9ff; /* or whatever your want */
                    pointer-events: none;
                    cursor: default;
                }
                .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                    text-decoration: default;
                    color: #33b9ff !important;
                    pointer-events: auto;
                    cursor: default;
                }
                table[class=devicewidth] {width: 440px!important;text-align:center!important;}
                table[class=devicewidthinner] {width: 420px!important;text-align:center!important;}
                img[class=banner] {width: 440px!important;height:220px!important;}
                img[class=col2img] {width: 440px!important;height:220px!important;}


            }
            /*IPHONE STYLES*/
            @media only screen and (max-width: 480px) {
                a[href^="tel"], a[href^="sms"] {
                    text-decoration: none;
                    color: #33b9ff; /* or whatever your want */
                    pointer-events: none;
                    cursor: default;
                }
                .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                    text-decoration: default;
                    color: #33b9ff !important; 
                    pointer-events: auto;
                    cursor: default;
                }
                table[class=devicewidth] {width: 280px!important;text-align:center!important;}
                table[class=devicewidthinner] {width: 260px!important;text-align:center!important;}
                img[class=banner] {width: 280px!important;height:140px!important;}
                img[class=col2img] {width: 280px!important;height:140px!important;}


            }
        </style>
    </head>
    <body>
        <!-- Start of preheader -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="preheader" >
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td width="100%" height="20"></td>
                                                </tr>
                                                <!-- Spacing -->

                                                <!-- Spacing -->
                                                <tr>
                                                    <td width="100%" height="20"></td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of preheader -->       
        <!-- Start of header -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="header">
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" bgcolor="#eacb3c" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <!-- logo -->
                                                        <table bgcolor="#282828" width="200" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="200" height="50" align="center">
                                                                        <div class="imgpop">
                                                                            <a target="_blank" href="http://www.gogetrich.net">
                                                                                <img src="' . $webPath . '/view/assets/images/logo.png" alt="" border="0" width="170" height="60" style="display:block; border:none; outline:none; text-decoration:none;">
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- end of logo -->
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of Header -->
        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator --> 
        <!-- Start of main-banner -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="banner">
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                                            <tbody>
                                                <tr>
                                                    <!-- start of image -->
                                                    <td align="center" st-image="banner-image">
                                                        <div class="imgpop">
                                                            <img width="600" border="0" height="300" alt="" border="0" style="display:block; border:none; outline:none; text-decoration:none;" src="https://blog.compete.com/wp-content/uploads/2014/04/success.jpg" class="banner">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- end of image -->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of main-banner -->  

        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator -->   
        <!-- start of Full text -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="full-text">
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table bgcolor="#ffffff" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td>
                                                        <table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner">
                                                            <tbody>
                                                                <tr>
                                                                    <table width="280" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <table width="280" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                                                        <tbody>
                                                                                            <!-- title -->
                                                                                            <tr>
                                                                                                <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #282828; text-align:left; line-height: 24px;">
                                                                                                    ขอบคุณสำหรับการลงทะเบียน
                                                                                                </td>
                                                                                            </tr>
                                                                                            <!-- end of title -->
                                                                                            <!-- Spacing -->
                                                                                            <tr>
                                                                                                <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                                            </tr>
                                                                                            <!-- /Spacing -->
                                                                                            <!-- content -->
                                                                                            <tr>
                                                                                                <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #889098; text-align:left; line-height: 24px;">
                                                                                                    ' . $courseNameAndSub . '
                                                                                                </td>
                                                                                            </tr>
                                                                                            <!-- end of content -->
                                                                                            <!-- Spacing -->
                                                                                            <tr>
                                                                                                <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                                            </tr>
                                                                                            <!-- /Spacing -->
                                                                                            <!-- read more -->
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <table width="120" height="32" bgcolor="#eacb3c" align="left" valign="middle" border="0" cellpadding="0" cellspacing="0" style="border-radius:3px;" st-button="learnmore">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td height="9" align="center" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td height="14" align="center" valign="middle" style="font-family: Helvetica, Arial, sans-serif; font-size: 13px; font-weight:bold;color: #ffffff; text-align:center; line-height: 14px; ; -webkit-text-size-adjust:none;" st-title="fulltext-btn">
                                                                                                                    <a style="text-decoration: none;color: #282828; text-align:center;" href="' . $linkTOCOurse . '">รายละเอียด</a>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td height="9" align="center" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <!-- end of read more -->
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </tr>
                                                                <tr>
                                                                    <td width="100%" height="30" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                </tr>
                                                                <!-- Title -->
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #282828; text-align:left; line-height: 24px;">
                                                                        รายละเอียดการลงทะเบียน
                                                                    </td>
                                                                </tr>
                                                                <!-- End of Title -->
                                                                <!-- spacing -->
                                                                <tr>
                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                </tr>
                                                                <!-- End of spacing -->
                                                                <!-- content -->
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #889098; text-align:left; line-height: 24px;">
                                                                        <table width="100%">           
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td valign="top" width="30%"><strong>ชื่อคอร์ส</strong></td>
                                                                                    <td>' . $courseName . '</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top"><strong>เวลาเรียน</strong></td>
                                                                                    <td>' . $dateTime . '</td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top"><strong>ช่องทางการจ่ายเงิน</strong></td>
                                                                                    <td>โอนเงินเข้าบัญชี (ชื่อบัญชี "บจ. เอสอี ทอล์ค" ธนาคารกรุงเทพ เลขที่บัญชี 021-7-08688-3, กรุณาส่งสำเนาหลักฐานการโอนเงินมาที่ pinhatai.d@gmail.com)</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <!-- End of content -->
                                                                <!-- Spacing -->
                                                                <tr>
                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                </tr>
                                                                <!-- Spacing -->
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of Full Text -->
        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator --> 
        <!-- Start of Right Image -->      
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="right-image">
            <tbody>
                <tr>
                    <td>

                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of Right Image -->
        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator -->
        <!-- Start of footer -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="footer">
            <tbody>
                <tr>
                    <td>
                        <table width="600" bgcolor="#eacb3c" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table bgcolor="#eacb3c" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="10" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td>
                                                        <!-- Social icons -->
                                                        <table  width="150" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="43" height="43" align="center">
                                                                        <div class="imgpop">
                                                                            <a target="_blank" href="https://www.facebook.com/richplanning">
                                                                                <img src="' . $webPath . '/view/assets/images/facebook_logo.png" alt="" border="0" width="150" height="50" style="display:block; border:none; outline:none; text-decoration:none;"/> 
                                                                            </a>
                                                                            <span style="cursor: pointer;font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #889098;">
                                                                                https://www.facebook.com/richplanning
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td align="left" width="20" style="font-size:18px; margin-left: 10px;">
                                                                    </td>                                                                   
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- end of Social icons -->
                                                    </td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="10" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of footer -->

    </body>
</html>';
    }

    public function getOfficialEmailEnrollment($cusName, $cusEmail, $cusPhone, $cusContactAddr, $cusContactReceipt, $courseName, $dateTime, $webPath) {
        return '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Tempo-Responsive Email Template</title>

        <style type="text/css">
            /* Client-specific Styles */
            div, p, a, li, td { -webkit-text-size-adjust:none; }
            #outlook a {padding:0;} /* Force Outlook to provide a "view in browser" menu link. */
            html{width: 100%; }
            body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
            /* Prevent Webkit and Windows Mobile platforms from changing default font sizes, while not breaking desktop design. */
            .ExternalClass {width:100%;} /* Force Hotmail to display emails at full width */
            .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing. */
            #backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
            img {outline:none; text-decoration:none;border:none; -ms-interpolation-mode: bicubic;}
            a img {border:none;}
            .image_fix {display:block;}
            p {margin: 0px 0px !important;}
            table td {border-collapse: collapse;}
            table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }
            a {color: #33b9ff;text-decoration: none;text-decoration:none!important;}
            /*STYLES*/
            table[class=full] { width: 100%; clear: both; }
            /*IPAD STYLES*/
            @media only screen and (max-width: 640px) {
                a[href^="tel"], a[href^="sms"] {
                    text-decoration: none;
                    color: #33b9ff; /* or whatever your want */
                    pointer-events: none;
                    cursor: default;
                }
                .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                    text-decoration: default;
                    color: #33b9ff !important;
                    pointer-events: auto;
                    cursor: default;
                }
                table[class=devicewidth] {width: 440px!important;text-align:center!important;}
                table[class=devicewidthinner] {width: 420px!important;text-align:center!important;}
                img[class=banner] {width: 440px!important;height:220px!important;}
                img[class=col2img] {width: 440px!important;height:220px!important;}


            }
            /*IPHONE STYLES*/
            @media only screen and (max-width: 480px) {
                a[href^="tel"], a[href^="sms"] {
                    text-decoration: none;
                    color: #33b9ff; /* or whatever your want */
                    pointer-events: none;
                    cursor: default;
                }
                .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                    text-decoration: default;
                    color: #33b9ff !important; 
                    pointer-events: auto;
                    cursor: default;
                }
                table[class=devicewidth] {width: 280px!important;text-align:center!important;}
                table[class=devicewidthinner] {width: 260px!important;text-align:center!important;}
                img[class=banner] {width: 280px!important;height:140px!important;}
                img[class=col2img] {width: 280px!important;height:140px!important;}


            }
        </style>
    </head>
    <body>
        <!-- Start of preheader -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="preheader" >
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td width="100%" height="20"></td>
                                                </tr>
                                                <!-- Spacing -->

                                                <!-- Spacing -->
                                                <tr>
                                                    <td width="100%" height="20"></td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of preheader -->       
        <!-- Start of header -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="header">
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" bgcolor="#eacb3c" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <!-- logo -->
                                                        <table bgcolor="#282828" width="200" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="200" height="50" align="center">
                                                                        <div class="imgpop">
                                                                            <a target="_blank" href="http://www.gogetrich.net">
                                                                                <img src="' . $webPath . '/view/assets/images/logo.png" alt="" border="0" width="170" height="60" style="display:block; border:none; outline:none; text-decoration:none;">
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- end of logo -->
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of Header -->
        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator --> 
        <!-- Start of main-banner -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="banner">
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                                            <tbody>
                                                <tr>
                                                    <!-- start of image -->
                                                    <td align="center" st-image="banner-image">
                                                        <div class="imgpop">
                                                            <img width="600" border="0" height="300" alt="" border="0" style="display:block; border:none; outline:none; text-decoration:none;" src="https://blog.compete.com/wp-content/uploads/2014/04/success.jpg" class="banner">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- end of image -->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of main-banner -->  

        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator -->   
        <!-- start of Full text -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="full-text">
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table bgcolor="#ffffff" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>

                                                <tr>
                                                    <td>
                                                        <table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner">
                                                            <tbody>

                                                                <tr>
                                                                    <td width="100%" height="30" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                </tr>
                                                                <!-- Title -->
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #282828; text-align:left; line-height: 24px;">
                                                                        รายละเอียดการลงทะเบียน
                                                                    </td>
                                                                </tr>
                                                                <!-- End of Title -->
                                                                <!-- spacing -->
                                                                <tr>
                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                </tr>
                                                                <!-- End of spacing -->
                                                                <!-- content -->
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #889098; text-align:left; line-height: 24px;">
                                                                        <table width="100%">           
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td valign="top" width="30%"><strong>ชื่อผู้เรียน</strong></td>
                                                                                    <td>' . $cusName . '</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top" width="30%"><strong>Email ผู้เรียน</strong></td>
                                                                                    <td>' . $cusEmail . '</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top" width="30%"><strong>เบอร์โทรศัพท์ผู้เรียน</strong></td>
                                                                                    <td>' . $cusPhone . '</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top" width="30%"><strong>ที่อยู่ผู้เรียน</strong></td>
                                                                                    <td>' . $cusContactAddr . '</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top" width="30%"><strong>ที่อยู่เพื่อรับใบเสร็จ</strong></td>
                                                                                    <td>' . $cusContactReceipt . '</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="2" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top" width="30%"><strong>ชื่อคอร์ส</strong></td>
                                                                                    <td>' . $courseName . '</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top"><strong>เวลาเรียน</strong></td>
                                                                                    <td>' . $dateTime . '</td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top"><strong>ช่องทางการจ่ายเงิน</strong></td>
                                                                                    <td>โอนเงินเข้าบัญชี (ชื่อบัญชี "บจ. เอสอี ทอล์ค" ธนาคารกรุงเทพ เลขที่บัญชี 021-7-08688-3, กรุณาส่งสำเนาหลักฐานการโอนเงินมาที่ pinhatai.d@gmail.com)</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <!-- End of content -->
                                                                <!-- Spacing -->
                                                                <tr>
                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                </tr>
                                                                <!-- Spacing -->
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of Full Text -->
        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator --> 
        <!-- Start of Right Image -->      
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="right-image">
            <tbody>
                <tr>
                    <td>

                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of Right Image -->
        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator -->
        <!-- Start of footer -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="footer">
            <tbody>
                <tr>
                    <td>
                        <table width="600" bgcolor="#eacb3c" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table bgcolor="#eacb3c" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="10" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td>
                                                        <!-- Social icons -->
                                                        <table  width="150" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="43" height="43" align="center">
                                                                        <div class="imgpop">
                                                                            <a target="_blank" href="https://www.facebook.com/richplanning">
                                                                                <img src="' . $webPath . '/view/assets/images/facebook_logo.png" alt="" border="0" width="150" height="50" style="display:block; border:none; outline:none; text-decoration:none;"/> 
                                                                            </a>
                                                                            <span style="cursor: pointer;font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #889098;">
                                                                                https://www.facebook.com/richplanning
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td align="left" width="20" style="font-size:18px; margin-left: 10px;">
                                                                    </td>                                                                   
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- end of Social icons -->
                                                    </td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="10" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of footer -->

    </body>
</html>';
    }

    public function getCustomerEmailRegister($resetUrl, $username, $password, $webPath) {
        return '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Tempo-Responsive Email Template</title>

        <style type="text/css">
            /* Client-specific Styles */
            div, p, a, li, td { -webkit-text-size-adjust:none; }
            #outlook a {padding:0;} /* Force Outlook to provide a "view in browser" menu link. */
            html{width: 100%; }
            body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
            /* Prevent Webkit and Windows Mobile platforms from changing default font sizes, while not breaking desktop design. */
            .ExternalClass {width:100%;} /* Force Hotmail to display emails at full width */
            .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing. */
            #backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
            img {outline:none; text-decoration:none;border:none; -ms-interpolation-mode: bicubic;}
            a img {border:none;}
            .image_fix {display:block;}
            p {margin: 0px 0px !important;}
            table td {border-collapse: collapse;}
            table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }
            a {color: #33b9ff;text-decoration: none;text-decoration:none!important;}
            /*STYLES*/
            table[class=full] { width: 100%; clear: both; }
            /*IPAD STYLES*/
            @media only screen and (max-width: 640px) {
                a[href^="tel"], a[href^="sms"] {
                    text-decoration: none;
                    color: #33b9ff; /* or whatever your want */
                    pointer-events: none;
                    cursor: default;
                }
                .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                    text-decoration: default;
                    color: #33b9ff !important;
                    pointer-events: auto;
                    cursor: default;
                }
                table[class=devicewidth] {width: 440px!important;text-align:center!important;}
                table[class=devicewidthinner] {width: 420px!important;text-align:center!important;}
                img[class=banner] {width: 440px!important;height:220px!important;}
                img[class=col2img] {width: 440px!important;height:220px!important;}


            }
            /*IPHONE STYLES*/
            @media only screen and (max-width: 480px) {
                a[href^="tel"], a[href^="sms"] {
                    text-decoration: none;
                    color: #33b9ff; /* or whatever your want */
                    pointer-events: none;
                    cursor: default;
                }
                .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                    text-decoration: default;
                    color: #33b9ff !important; 
                    pointer-events: auto;
                    cursor: default;
                }
                table[class=devicewidth] {width: 280px!important;text-align:center!important;}
                table[class=devicewidthinner] {width: 260px!important;text-align:center!important;}
                img[class=banner] {width: 280px!important;height:140px!important;}
                img[class=col2img] {width: 280px!important;height:140px!important;}


            }
        </style>
    </head>
    <body>
        <!-- Start of preheader -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="preheader" >
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td width="100%" height="20"></td>
                                                </tr>
                                                <!-- Spacing -->

                                                <!-- Spacing -->
                                                <tr>
                                                    <td width="100%" height="20"></td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of preheader -->       
        <!-- Start of header -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="header">
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" bgcolor="#eacb3c" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <!-- logo -->
                                                        <table bgcolor="#282828" width="200" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="200" height="50" align="center">
                                                                        <div class="imgpop">
                                                                            <a target="_blank" href="http://www.gogetrich.net">
                                                                                <img src="' . $webPath . '/view/assets/images/logo.png" alt="" border="0" width="170" height="60" style="display:block; border:none; outline:none; text-decoration:none;">
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- end of logo -->
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of Header -->
        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator --> 
        <!-- Start of main-banner -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="banner">
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                                            <tbody>
                                                <tr>
                                                    <!-- start of image -->
                                                    <td align="center" st-image="banner-image">
                                                        <div class="imgpop">
                                                            <img width="600" border="0" height="300" alt="" border="0" style="display:block; border:none; outline:none; text-decoration:none;" src="https://blog.compete.com/wp-content/uploads/2014/04/success.jpg" class="banner">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- end of image -->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of main-banner -->  

        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator -->   
        <!-- start of Full text -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="full-text">
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table bgcolor="#ffffff" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>

                                                <tr>
                                                    <td>
                                                        <table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner">
                                                            <tbody>

                                                                <tr>
                                                                    <td width="100%" height="30" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                </tr>
                                                                <!-- Title -->
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #282828; text-align:left; line-height: 24px;">
                                                                        <table width="280" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table width="600px" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                                                            <tbody>
                                                                                                <!-- title -->
                                                                                                <tr>
                                                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #282828; text-align:left; line-height: 24px;">
                                                                                                        ขอบคุณสำหรับการสมัครสมาชิก
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <!-- end of title -->
                                                                                                <!-- Spacing -->
                                                                                                <tr>
                                                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                                                </tr>
                                                                                                <!-- /Spacing -->
                                                                                                <!-- content -->
                                                                                                <tr>
                                                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #889098; text-align:left; line-height: 24px;  ">
                                                                                                        <blockquote>
                                                                                                            <q>สามสิ่งสำคัญ ในความรู้ของการจัดการการเงิน ที่พี่อยากจะแชร์และแบ่งปันคนไทยทุกคน ได้แก่ การวางแผนงบการเงิน การอยู่อย่างพอเพียง และการใช้ชีวิตอย่างมีความสุข ...ซึ่งทุกคนทำได้  ขอเพียงรู้จักจัดการเงินอย่างฉลาด อิสระภาพทางการเงินและการใช้ชีวิต มันเป็นไปได้....และนี่แหละ คือ โชค ที่ทุกคนต้องการมี</q>
                                                                                                        </blockquote>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <!-- end of content -->
                                                                                                <!-- Spacing -->
                                                                                                <tr>
                                                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                                                </tr>
                                                                                                <!-- /Spacing -->
                                                                                                <!-- read more -->
                                                                                                <tr>
                                                                                                    <td>

                                                                                                    </td>
                                                                                                </tr>
                                                                                                <!-- end of read more -->
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <!-- End of Title -->
                                                                <!-- spacing -->
                                                                <tr>
                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                </tr>
                                                                <!-- End of spacing -->
                                                                <!-- content -->
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #889098; text-align:left; line-height: 24px;">
                                                                        <table width="100%">           
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td colspan="2">
                                                                                        <strong>กรุณาเข้าสู่ระบบด้วย URL ข้างล่างนี้เพื่อเปลี่ยนรหัสผ่านและข้อมูลส่วนตัว</strong>
                                                                                        <a href="' . $resetUrl . '" target="_blank">
                                                                                            ' . $resetUrl . '
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="2" height="10"></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top" width="5%"><strong>Username:</strong></td>
                                                                                    <td>' . $username . '</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top" width="5%"><strong>Password:</strong></td>
                                                                                    <td>' . $password . '</td>
                                                                                </tr>  



                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <!-- End of content -->
                                                                <!-- Spacing -->
                                                                <tr>
                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                </tr>
                                                                <!-- Spacing -->
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of Full Text -->
        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator --> 
        <!-- Start of Right Image -->      
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="right-image">
            <tbody>
                <tr>
                    <td>

                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of Right Image -->
        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator -->
        <!-- Start of footer -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="footer">
            <tbody>
                <tr>
                    <td>
                        <table width="600" bgcolor="#eacb3c" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table bgcolor="#eacb3c" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="10" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td>
                                                        <!-- Social icons -->
                                                        <table  width="150" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="43" height="43" align="center">
                                                                        <div class="imgpop">
                                                                            <a target="_blank" href="https://www.facebook.com/richplanning">
                                                                                <img src="' . $webPath . '/view/assets/images/facebook_logo.png" alt="" border="0" width="150" height="50" style="display:block; border:none; outline:none; text-decoration:none;"/> 
                                                                            </a>
                                                                            <span style="cursor: pointer;font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #889098;">
                                                                                https://www.facebook.com/richplanning
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td align="left" width="20" style="font-size:18px; margin-left: 10px;">
                                                                    </td>                                                                   
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- end of Social icons -->
                                                    </td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="10" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of footer -->

    </body>
</html>';
    }

    public function getCusRegisterNormalContent($linkUrl) {
        return '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Tempo-Responsive Email Template</title>

        <style type="text/css">
            /* Client-specific Styles */
            div, p, a, li, td { -webkit-text-size-adjust:none; }
            #outlook a {padding:0;} /* Force Outlook to provide a "view in browser" menu link. */
            html{width: 100%; }
            body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
            /* Prevent Webkit and Windows Mobile platforms from changing default font sizes, while not breaking desktop design. */
            .ExternalClass {width:100%;} /* Force Hotmail to display emails at full width */
            .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing. */
            #backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
            img {outline:none; text-decoration:none;border:none; -ms-interpolation-mode: bicubic;}
            a img {border:none;}
            .image_fix {display:block;}
            p {margin: 0px 0px !important;}
            table td {border-collapse: collapse;}
            table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }
            a {color: #33b9ff;text-decoration: none;text-decoration:none!important;}
            /*STYLES*/
            table[class=full] { width: 100%; clear: both; }
            /*IPAD STYLES*/
            @media only screen and (max-width: 640px) {
                a[href^="tel"], a[href^="sms"] {
                    text-decoration: none;
                    color: #33b9ff; /* or whatever your want */
                    pointer-events: none;
                    cursor: default;
                }
                .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                    text-decoration: default;
                    color: #33b9ff !important;
                    pointer-events: auto;
                    cursor: default;
                }
                table[class=devicewidth] {width: 440px!important;text-align:center!important;}
                table[class=devicewidthinner] {width: 420px!important;text-align:center!important;}
                img[class=banner] {width: 440px!important;height:220px!important;}
                img[class=col2img] {width: 440px!important;height:220px!important;}


            }
            /*IPHONE STYLES*/
            @media only screen and (max-width: 480px) {
                a[href^="tel"], a[href^="sms"] {
                    text-decoration: none;
                    color: #33b9ff; /* or whatever your want */
                    pointer-events: none;
                    cursor: default;
                }
                .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                    text-decoration: default;
                    color: #33b9ff !important; 
                    pointer-events: auto;
                    cursor: default;
                }
                table[class=devicewidth] {width: 280px!important;text-align:center!important;}
                table[class=devicewidthinner] {width: 260px!important;text-align:center!important;}
                img[class=banner] {width: 280px!important;height:140px!important;}
                img[class=col2img] {width: 280px!important;height:140px!important;}


            }
        </style>
    </head>
    <body>
        <!-- Start of preheader -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="preheader" >
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td width="100%" height="20"></td>
                                                </tr>
                                                <!-- Spacing -->

                                                <!-- Spacing -->
                                                <tr>
                                                    <td width="100%" height="20"></td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of preheader -->       
        <!-- Start of header -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="header">
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" bgcolor="#eacb3c" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <!-- logo -->
                                                        <table bgcolor="#282828" width="200" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="200" height="50" align="center">
                                                                        <div class="imgpop">
                                                                            <a target="_blank" href="http://www.gogetrich.net">
                                                                                <img src="' . $linkUrl . '/view/assets/images/logo.png" alt="" border="0" width="170" height="60" style="display:block; border:none; outline:none; text-decoration:none;">
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- end of logo -->
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of Header -->
        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator --> 
        <!-- Start of main-banner -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="banner">
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                                            <tbody>
                                                <tr>
                                                    <!-- start of image -->
                                                    <td align="center" st-image="banner-image">
                                                        <div class="imgpop">
                                                            <img width="600" border="0" height="300" alt="" border="0" style="display:block; border:none; outline:none; text-decoration:none;" src="https://blog.compete.com/wp-content/uploads/2014/04/success.jpg" class="banner">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- end of image -->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of main-banner -->  

        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator -->   
        <!-- start of Full text -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="full-text">
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table bgcolor="#ffffff" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>

                                                <tr>
                                                    <td>
                                                        <table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner">
                                                            <tbody>

                                                                <tr>
                                                                    <td width="100%" height="30" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                </tr>
                                                                <!-- Title -->
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #282828; text-align:left; line-height: 24px;">
                                                                        <table width="280" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table width="600px" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                                                            <tbody>
                                                                                                <!-- title -->
                                                                                                <tr>
                                                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #282828; text-align:left; line-height: 24px;">
                                                                                                        ขอบคุณสำหรับการสมัครสมาชิก
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <!-- end of title -->
                                                                                                <!-- Spacing -->
                                                                                                <tr>
                                                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                                                </tr>
                                                                                                <!-- /Spacing -->
                                                                                                <!-- content -->
                                                                                                <tr>
                                                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #889098; text-align:left; line-height: 24px;  ">
                                                                                                        <blockquote>
                                                                                                            <q>สามสิ่งสำคัญ ในความรู้ของการจัดการการเงิน ที่พี่อยากจะแชร์และแบ่งปันคนไทยทุกคน ได้แก่ การวางแผนงบการเงิน การอยู่อย่างพอเพียง และการใช้ชีวิตอย่างมีความสุข ...ซึ่งทุกคนทำได้  ขอเพียงรู้จักจัดการเงินอย่างฉลาด อิสระภาพทางการเงินและการใช้ชีวิต มันเป็นไปได้....และนี่แหละ คือ โชค ที่ทุกคนต้องการมี</q>
                                                                                                        </blockquote>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <!-- end of content -->
                                                                                                <!-- Spacing -->
                                                                                                <tr>
                                                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                                                </tr>
                                                                                                <!-- /Spacing -->
                                                                                                <!-- read more -->
                                                                                                <tr>
                                                                                                    <td>

                                                                                                    </td>
                                                                                                </tr>
                                                                                                <!-- end of read more -->
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <!-- End of Title -->
                                                                <!-- spacing -->
                                                                <tr>
                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                </tr>
                                                                <!-- End of spacing -->
                                                                <!-- content -->
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #889098; text-align:left; line-height: 24px;">
                                                                        <table width="100%">           
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td colspan="2">
                                                                                        <strong>กรุณาเข้าสู่ระบบด้วย URL ข้างล่างนี้</strong>
                                                                                        <a href="' . $linkUrl . '" target="_blank">
                                                                                            ' . $linkUrl . '
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="2" height="10"></td>
                                                                                </tr>
                                                                                
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <!-- End of content -->
                                                                <!-- Spacing -->
                                                                <tr>
                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                </tr>
                                                                <!-- Spacing -->
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of Full Text -->
        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator --> 
        <!-- Start of Right Image -->      
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="right-image">
            <tbody>
                <tr>
                    <td>

                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of Right Image -->
        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator -->
        <!-- Start of footer -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="footer">
            <tbody>
                <tr>
                    <td>
                        <table width="600" bgcolor="#eacb3c" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table bgcolor="#eacb3c" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="10" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td>
                                                        <!-- Social icons -->
                                                        <table  width="150" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="43" height="43" align="center">
                                                                        <div class="imgpop">
                                                                            <a target="_blank" href="https://www.facebook.com/richplanning">
                                                                                <img src="' . $linkUrl . '/view/assets/images/facebook_logo.png" alt="" border="0" width="150" height="50" style="display:block; border:none; outline:none; text-decoration:none;"/> 
                                                                            </a>
                                                                            <span style="cursor: pointer;font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #889098;">
                                                                                https://www.facebook.com/richplanning
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td align="left" width="20" style="font-size:18px; margin-left: 10px;">
                                                                    </td>                                                                   
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- end of Social icons -->
                                                    </td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="10" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of footer -->

    </body>
</html>';
    }

    public function getEmailContentContact($contactName, $contactSubject, $contactMessage) {
        return '<!DOCTYPE html "-//w3c//dtd xhtml 1.0 transitional //en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head>
        <!--[if gte mso 9]><xml>
         <o:OfficeDocumentSettings>
          <o:AllowPNG/>
          <o:PixelsPerInch>96</o:PixelsPerInch>
         </o:OfficeDocumentSettings>
        </xml><![endif]-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <meta name="viewport" content="width=device-width">
                <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
                    <title>Go get rich: Contact</title>

                    </head>
                    <body style="width: 100% !important;min-width: 100%;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100% !important;margin: 0;padding: 0;background-color: #FFFFFF">
                        <style id="media-query">
                            /* Client-specific Styles & Reset */
                            #outlook a {
                                padding: 0;
                            }

                            /* .ExternalClass applies to Outlook.com (the artist formerly known as Hotmail) */
                            .ExternalClass {
                                width: 100%;
                            }

                            .ExternalClass,
                            .ExternalClass p,
                            .ExternalClass span,
                            .ExternalClass font,
                            .ExternalClass td,
                            .ExternalClass div {
                                line-height: 100%;
                            }

                            #backgroundTable {
                                margin: 0;
                                padding: 0;
                                width: 100% !important;
                                line-height: 100% !important;
                            }

                            /* Buttons */
                            .button a {
                                display: inline-block;
                                text-decoration: none;
                                -webkit-text-size-adjust: none;
                                text-align: center;
                            }

                            .button a div {
                                text-align: center !important;
                            }

                            /* Outlook First */
                            body.outlook p {
                                display: inline !important;
                            }

                            /*  Media Queries */
                            @media only screen and (max-width: 500px) {
                                table[class="body"] img {
                                    height: auto !important;
                                    width: 100% !important; }
                                table[class="body"] img.fullwidth {
                                    max-width: 100% !important; }
                                table[class="body"] center {
                                    min-width: 0 !important; }
                                table[class="body"] .container {
                                    width: 95% !important; }
                                table[class="body"] .row {
                                    width: 100% !important;
                                    display: block !important; }
                                table[class="body"] .wrapper {
                                    display: block !important;
                                    padding-right: 0 !important; }
                                table[class="body"] .columns, table[class="body"] .column {
                                    table-layout: fixed !important;
                                    float: none !important;
                                    width: 100% !important;
                                    padding-right: 0px !important;
                                    padding-left: 0px !important;
                                    display: block !important; }
                                table[class="body"] .wrapper.first .columns, table[class="body"] .wrapper.first .column {
                                    display: table !important; }
                                table[class="body"] table.columns td, table[class="body"] table.column td, .col {
                                    width: 100% !important; }
                                table[class="body"] table.columns td.expander {
                                    width: 1px !important; }
                                table[class="body"] .right-text-pad, table[class="body"] .text-pad-right {
                                    padding-left: 10px !important; }
                                table[class="body"] .left-text-pad, table[class="body"] .text-pad-left {
                                    padding-right: 10px !important; }
                                table[class="body"] .hide-for-small, table[class="body"] .show-for-desktop {
                                    display: none !important; }
                                table[class="body"] .show-for-small, table[class="body"] .hide-for-desktop {
                                    display: inherit !important; }
                                .mixed-two-up .col {
                                    width: 100% !important; } }
                            @media screen and (max-width: 500px) {
                                div[class="col"] {
                                    width: 100% !important;
                                }
                            }

                            @media screen and (min-width: 501px) {
                                table[class="container"] {
                                    width: 500px !important;
                                }
                            }
                        </style>
                        <table class="body" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;height: 100%;width: 100%;table-layout: fixed" cellpadding="0" cellspacing="0" width="100%" border="0">
                            <tbody><tr style="vertical-align: top">
                                    <td class="center" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;background-color: #FFFFFF" align="center" valign="top">

                                        <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: #61626F" cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                                            <tbody><tr style="vertical-align: top">
                                                    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%">
                                                        <!--[if gte mso 9]>
                                                        <table id="outlookholder" border="0" cellspacing="0" cellpadding="0" align="center"><tr><td>
                                                        <![endif]-->
                                                        <!--[if (IE)]>
                                                        <table width="500" align="center" cellpadding="0" cellspacing="0" border="0">
                                                            <tr>
                                                                <td>
                                                        <![endif]-->
                                                        <table class="container" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit" cellpadding="0" cellspacing="0" align="center" width="100%" border="0"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%"><table class="block-grid" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #333;background-color: transparent" cellpadding="0" cellspacing="0" width="100%" bgcolor="transparent"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" bgcolor="transparent" cellpadding="0" cellspacing="0" border="0"><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign="top" width="500"><![endif]--><div class="col num12" style="display: inline-block;vertical-align: top;width: 100%"><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" align="center" width="100%" border="0"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 30px;padding-right: 0px;padding-bottom: 30px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent"><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" width="100%">
                                                                                                                <tbody><tr style="vertical-align: top">
                                                                                                                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 25px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
                                                                                                                            <div style="color:#ffffff;line-height:120%;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;">            
                                                                                                                                <div style="font-size:18px;line-height:22px;text-align:left;color:#ffffff;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;"><p style="margin: 0;font-size: 18px;line-height: 22px;text-align: left"><span style="font-size: 24px; line-height: 28px;" mce-data-marked="1"><strong>Contact from: ' . $contactName . '</strong></span></p></div><div style="font-size:18px;line-height:22px;text-align:left;color:#ffffff;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;"><p style="margin: 0;font-size: 18px;line-height: 22px;text-align: left"><span style="font-size: 24px; line-height: 28px;" mce-data-marked="1"><strong>Subject: ' . $contactSubject . '</strong></span></p></div>
                                                                                                                            </div>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </tbody></table>
                                                                                                            <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" width="100%">
                                                                                                                <tbody><tr style="vertical-align: top">
                                                                                                                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 0px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
                                                                                                                            <div style="color:#FFFFFF;line-height:150%;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;">            
                                                                                                                                <div style="font-size:14px;line-height:21px;text-align:left;color:#FFFFFF;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;"><p style="margin: 0;font-size: 14px;line-height: 21px;text-align: left"><span style="font-size: 16px; line-height: 24px; font-family: tahoma, arial, helvetica, sans-serif;">' . $contactMessage . '</span></p></div>
                                                                                                                            </div>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </tbody></table>
                                                                                                            <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" align="center" width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                                                                <tbody><tr style="vertical-align: top">
                                                                                                                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px" align="center">
                                                                                                                            <div style="height: 0px;">
                                                                                                                                <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;border-top: 0px solid transparent;width: 100%" align="center" border="0" cellspacing="0">
                                                                                                                                    <tbody><tr style="vertical-align: top">
                                                                                                                                            <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" align="center"></td>
                                                                                                                                        </tr>
                                                                                                                                    </tbody></table>
                                                                                                                            </div>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </tbody></table></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                                                        <!--[if mso]>
                                                        </td></tr></table>
                                                        <![endif]-->
                                                        <!--[if (IE)]>
                                                        </td></tr></table>
                                                        <![endif]-->
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>


                    </body>
                    </html>';
    }

}

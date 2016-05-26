<?php
session_start();
$now = time();
if (isset($_SESSION['expireFrontEnd'])) {
    if ($now > $_SESSION['expireFrontEnd']) {
        session_destroy();
    }
}
require '../model-db-connection/config.php';
?>
<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Go Get Rich.net</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <?php include './assets/css_incl.php'; ?>
        <?php include './assets/javascript_incl.php'; ?>
    </head>
    <body>
        <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!--************************************
                        Preloader Start
        *************************************-->
        <div class="preloader">
            <div id="status"></div>
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_four"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_one"></div>

                </div>
            </div>
        </div>
        <!--************************************
                        Preloader END
        *************************************-->
        <!--************************************
                        Wrapper Start
        *************************************-->
        <div id="wrapper">
            <!--************************************
                            Banner Start
            *************************************-->
            <div class="tg-banner tg-haslayout parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="assets/images/speaker_banner_v2_1920x250.jpg">
                <div class="tg-banner-holder">
                    <div class="container">
                        <div class="tg-displaytable">
                            <div class="tg-displaytablecell">
                                <div class="banner-content tg-haslayout">
                                    <h1>blog detail</h1>
                                    <!--                                    <ol class="tg-breadcrumb">
                                                                            <li><a href="#">Home</a></li>
                                                                            <li class="active">blog detail</li>
                                                                        </ol>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--************************************
                            Banner End
            *************************************-->
            <!--************************************
                            Header Start
            *************************************-->
            <header id="header" class="tg-haslayout">
                <div class="container">
                    <?php include './logo_include.php'; ?>
                    <div class="navigation-area">
                        <?php
                        if (empty($_SESSION['usernameFrontEnd'])) {
                            ?>
                            <ul class="add-nav">
                                <li>
                                    <a data-toggle="modal" data-target=".login-modalbox" href="#">
                                        <i class="fa fa-sign-in"></i> เข้าสู่ระบบ
                                    </a>
                                </li>
                                <li>
                                    <a href="registration">
                                        <i class="fa fa-university"></i> สมัครสมาชิก
                                    </a>
                                </li>
                            </ul>
                            <?php
                        } else {
                            ?>
                            <style>
                                #nav{
                                    width: 68% !important;
                                }
                            </style>
                            <ul class="add-nav">
                                <li class="dropdown-toggle" >
                                    ยินดีต้อนรับ <strong data-toggle="dropdown" aria-haspopup="true" style="cursor: pointer"><?= $_SESSION['usernameFrontEnd'] ?></strong>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0)" onclick="logoutFromApplication()">
                                                <i class="fa fa-sign-out"></i> ออกจากระบบ
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="registration">
                                        <i class="fa fa-university"></i> สมัครสมาชิก
                                    </a>
                                </li>
                            </ul>
                            <?php
                        }
                        ?>
                        <nav id="nav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul>
                                    <li>
                                        <a href="main">หน้าหลัก</a>
                                    </li>
                                    <li>
                                        <a href="aboutus">เกี่ยวกับเรา</a>
                                    </li>
                                    <li>
                                        <a href="trainingSchedule">คอร์สเรียน/ตารางเรียน</a>
                                        <ul>
                                            <li>
                                                <a href="trainingSchedule">ประเภทของคอร์สเรียน</a>
                                            </li>
                                            <li>
                                                <a href="speaker-list">อาจารย์/ผู้สอน</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!--li>
                                        <a href="#">Register</a>
                                    </li-->
                                    <li class="current-menu-item">
                                        <a href="blog-list?page=1">บทความ</a>
                                    </li> 
                                    <li>
                                        <a href="contactus">ติดต่อเรา</a>
                                    </li> 
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>
            <!--************************************
                            Header End
            *************************************-->
            <!--************************************
                            Main Start
            *************************************-->
            <main id="main" class="tg-haslayout">
                <!--************************************
                                Blog Detail Section Start
                *************************************-->
                <div class="tg-main-section tg-haslayout">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 pull-left">
                                <a href="financial-check" class="btn btn-default btn-sm"><i class="fa fa-backward"></i> Back</a>
                                <br/><br/>
                            </div>
                        </div>
                        <div class="row">
                            <div id="content" class="col-md-8 col-sm-8 col-xs-12">
                                <article class="blog-post blog-post-detail tg-haslayout">
                                    <figure>
                                        <img src="assets/images/financial_planning_model.png" alt="image description">
                                        <!--                                        <div class="tg-img-hover">
                                                                                    <div class="tg-displaytable">
                                                                                        <div class="tg-displaytablecell">
                                                                                            <h2>ตรวจสอบสถานการณ์เงิน</h2>
                                                                                            <ul class="tg-metadata">
                                                                                                <li class="author"><a href="#">อ. วิภา เจริญกิจสุพัฒน์ (พี่เกียก)</a></li>
                                                                                                li class="catagory"><a href="#">In Photography</a></li
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>-->
                                    </figure>
                                    <div class="tg-post-detail">
                                        <div class="tg-description">
                                            <p><legend>ตรวจสอบสถานการณ์เงิน ของเราอยู่สถานการณ์ไหน</legend></p>
                                            <p><strong>สถานะการเงินโดยทั่วไปมีอยู่ 6 สถานการณ์:</strong> หนี้สินล้นพ้นตัว, สถานะพึ่งพิง, ไม่มีหนี้หรือมีหนี้ที่จัดการได้ แต่ไม่มีเงินเก็บ, เงินเหลือมากแต่ไม่ได้จัดการ, การเงินมั่นคงปลอดภัย, อิสรภาพการเงิน</p>
                                            <p><strong>สำรวจตัวเองเบื้องต้น ขณะนี้เราเห็นตัวเราเองอยู่สถานการณ์ไหนใน 6 สถานการณ์นี้</strong></br>
                                                <strong>สถานะ -1 หนี้สินล้นพ้นตัว</strong> คือผู้ที่อยู่ในภาวการณ์เป็นหนี้ที่ควบคุมไม่ได้ ค่าใช้จ่ายเกินรายได้ทุกเดือน หมุนบัตรเครดิตหลายใบ</p>
                                            <p><strong>สถานะ 0 สถานะพึ่งพิง</strong> คือ ผู้ที่อยู่ในฐานะที่ต้องอาศัยผู้อื่น เช่น เด็ก นักเรียน นักศึกษา คนเกษียณที่ไม่ได้เตรียมเงินเกษียณ</p>
                                            <p><strong>สถานะ 1 พึ่งพาตัวเองได้</strong>, แต่ไม่มีเงินเก็บ คือคนที่มีรายรับรายจ่ายสมดุล ไม่เป็นหนี้หรือเป็นหนี้ที่อยู่สถานะที่ควบคุมได้ เช่น มีค่าผ่อนบ้าน ผ่อนรถ ใช้จ่ายแบบเดือนชนเดือน</p>
                                            <p><strong>สถานะ 2 พึ่งพาตัวเองได้</strong>, เงินเหลือมากแต่ไม่ได้จัดการ ผู้ที่มีรายได้หักค่าใช้จ่ายมีเงินเหลือ เก็บเงินไว้ในบัญชีธนาคารส่วนใหญ่ ซื้อ LTF/RMF ลดหย่อนภาษีบ้าง ซื้อประกันลดหย่อนภาษีบ้าง โดยยังไม่มีการกำหนดเป้าหมายการออมการลงทุนที่ชัดเจน ว่าต้องเก็บเพื่อวัตถุประสงค์ใด หรือต้องเก็บให้ได้เท่าไร</p>
                                            <p><strong>สถานะ 3 การเงินมั่นคงปลอดภัย</strong> คือผู้ที่เตรียมปัจจัยพื้นฐานไว้ครบถ้วนตลอดทุกช่วงของชีวิต มีบ้านของครอบครัว ค่าใช้จ่ายสมดุลแต่ละเดือน มีเงินออมสำหรับเตรียมค่าใช้จ่ายในอนาคต และเตรียมค่าใช้จ่ายที่คาดการณ์ไม่ได้ในอนาคต</p>
                                            <p><strong>สถานะ 4 อิสรภาพการเงิน</strong> คือผู้ที่มีรายได้โดยไม่ต้องใช้ตัวเองทำงานหาเงินเทียบเท่ากับค่าใช้จ่าย เป็นสถานะที่ทำให้หมดความกังวลเรื่องการหารายได้</p>
                                            <!--p>คุณอยู่สถานการณ์ไหน การรู้สถานการณ์ของตัวเองจะช่วยให้การจัดการการเงินถูกทิศทาง เคลื่อนขึ้นไปทีละขั้น ๆ  ขั้นถึงปลอดภัย  คือ สถานะที่ 3 ที่ทุกครอบครัวต้องจัดการให้ถึงขั้นนี้ได้เป็นอย่างน้อย</p-->
                                            <p>แล้วเราเคยสงสัยมั้ยว่า บางคนมีโอกาสและความสามารถใกล้เคียงกัน แต่ระดับของสถานะการเงินต่างกัน....ถ้าอยากทราบ...โปรดติดตามตอนต่อไป</p>
                                            <blockquote>
                                                <q>"คุณอยู่สถานการณ์ไหน การรู้สถานการณ์ของตัวเองจะช่วยให้การจัดการการเงินถูกทิศทาง เคลื่อนขึ้นไปทีละขั้น ๆ  ขั้นถึงปลอดภัย  คือ สถานะที่ 3 ที่ทุกครอบครัวต้องจัดการให้ถึงขั้นนี้ได้เป็นอย่างน้อย"</q>
                                                <!--span class="author"><a href="#">Frank Smith, Company Inc.</a></span-->
                                            </blockquote>
                                        </div>
                                    </div>
                                </article>

                            </div>
                            <aside id="sidebar" class="col-lg-4 col-md-3 col-sm-4 col-xs-12">
                                <div class="row">
                                    <?php include 'recent-post.php' ?>
                                </div>
                            </aside>

                        </div>
                    </div>
                </div>
                <!--************************************
                                Blog Detail Section End
                *************************************-->
            </main>
            <!--************************************
                            Main End
            *************************************-->
            <!--************************************
                            Footer Start
            *************************************-->
            <?php include './footer.php'; ?>
            <!--************************************
                            Wrapper End
            *************************************-->
        </div>
        <!--************************************
                        Wrapper End
        *************************************-->
        <!--************************************
                        Popup Start
        *************************************-->
        <div class="modal fade login-modalbox" tabindex="-1" role="dialog">
            <div class="tg-login-modalbox">
                <h2>LOGIN FORM</h2>
                <form class="login-form">
                    <fieldset>
                        <div class="form-group">
                            <i class="fa fa-group"></i>
                            <input type="text" id="username" name="username" placeholder="User name" class="form-control">
                        </div>
                        <div class="form-group">
                            <i class="fa fa-lock"></i>
                            <input type="password" id="password" name="password"  placeholder="Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="checkbox">
                                <em>Remember Me</em>
                            </label>
                            <a class="forgetpassword" href="#">
                                <em>Forgot Password</em>
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </div>
                        <button class="tg-theme-btn tg-theme-btn-lg" type="submit">login</button>
                    </fieldset>
                </form>
                <p>Not a Member? <a href="registration">Create an Account</a></p>
            </div>
        </div>

        <div class="scroll-top-wrapper ">
            <span class="scroll-top-inner">
                <i class="fa fa-2x fa-arrow-circle-up"></i>
            </span>
        </div>
    </body>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#login_menu').tooltipster({
                contentAsHTML: true,
                content: $('<ul><li class="linkHover" onclick="logoutFromApplication()" style="list-style: none; margin-left: 10px"><div class="form-group"><i class="fa fa-group"></i> Logout</div></li></ul>'),
                touchDevices: true,
                position: "bottom",
                interactive: true,
                autoClose: true,
                trigger: "click",
                minWidth: 150,
                arrow: false
            });

            runSetDefaultValidation();
            var form = $('.login-form');
            var errorHandler = $('.errorHandler', form);
            form.validate({
                rules: {
                    username: {
                        required: true
                    },
                    password: {
                        required: true
                    }
                },
                submitHandler: function (form) {
                    errorHandler.hide();
                    submitLogin(form);
                },
                invalidHandler: function (event, validator) {//display error alert on form submit
                    errorHandler.show();
                }
            });
        });
        function logoutFromApplication() {
            $.ajax({
                url: "../model/com.gogetrich.function/Logout.php",
                success: function (data, textStatus, jqXHR) {
                    if (data == 200) {
                        window.location.href = "main";
                    }
                }
            });
        }
        function submitLogin(form) {
            $.ajax({
                url: "../model/com.gogetrich.function/LoginSubmit.php",
                type: 'POST',
                data: {'username': $("#username").val(), 'password': $("#password").val()},
                success: function (data, textStatus, jqXHR) {
                    var resData = data.split(":");
                    if (resData[0] == 503) {
                        setTimeout(function () {
                            showWarningNotficationDialog("ชื่อผู้ใช้ หรือ รหัสผ่านไม่ถูกต้อง");
                        }, 100);
                        $(form).trigger('reset');
                    }
                    if (resData[0] == 205) {
                        setTimeout(function () {
                            showSuccessNotficationDialog("กรุณาเปลี่ยนรหัสผ่าน", "forceChangePassword.php?cusID=" + resData[1]);
                        }, 100);
                        $(form).trigger('reset');
                    }
                    if (resData[0] == 200) {
                        window.location = 'trainingSchedule';
                        $(form).trigger('reset');
                    }
                }
            });
        }
        var runSetDefaultValidation = function () {
            $.validator.setDefaults({
                errorElement: "span", // contain the error msg in a small tag
                errorClass: 'help-block',
                errorPlacement: function (error, element) {// render error placement for each input type
                    if (element.attr("type") == "radio" || element.attr("type") == "checkbox") {// for chosen elements, need to insert the error after the chosen container
                        error.insertAfter($(element).closest('.form-group').children('div').children().last());
                    } else if (element.attr("name") == "card_expiry_mm" || element.attr("name") == "card_expiry_yyyy") {
                        error.appendTo($(element).closest('.form-group').children('div'));
                    } else {
                        error.insertAfter(element);
                        // for other inputs, just perform default behavior
                    }
                },
                ignore: ':hidden',
                success: function (label, element) {
                    label.addClass('help-block valid');
                    // mark the current input as valid and display OK icon
                    $(element).closest('.form-group').removeClass('has-error');
                },
                highlight: function (element) {
                    $(element).closest('.help-block').removeClass('valid');
                    // display OK icon
                    $(element).closest('.form-group').addClass('has-error');
                    // add the Bootstrap error class to the control group
                },
                unhighlight: function (element) {// revert the change done by hightlight
                    $(element).closest('.form-group').removeClass('has-error');
                    // set error class to the control group
                }
            });
        };
    </script>
</html>
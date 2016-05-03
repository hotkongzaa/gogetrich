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
        <title>Go Get Rich.net| Financial Status</title>
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
                                    <ol class="tg-breadcrumb">
                                        <li><a href="#">Home</a></li>
                                        <li class="active">blog detail</li>
                                    </ol>
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
                                <li><a data-toggle="modal" data-target=".login-modalbox" href="#">Login</a></li>
                                <li><a href="registration">Register</a></li>
                            </ul>
                            <?php
                        } else {
                            ?>
                            <ul class="add-nav">
                                <li>Welcome <strong id="login_menu" style="cursor: pointer"><?= $_SESSION['usernameFrontEnd'] ?></strong></li>
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
                                        <a href="main">Home</a>
                                    </li>
                                    <li>
                                        <a href="aboutus">About</a>
                                    </li>
                                    <li>
                                        <a href="trainingSchedule">Training/Seminar</a>
                                        <ul>
                                            <li>
                                                <a href="trainingSchedule">Training Category</a>
                                            </li>
                                            <li>
                                                <a href="speaker-list">Speaker</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!--li>
                                        <a href="#">Register</a>
                                    </li-->
                                    <li class="current-menu-item">
                                        <a href="blog-list">Blog</a>
                                    </li> 
                                    <li>
                                        <a href="contactus">Contact us</a>
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
                                <a href="blog-list" class="btn btn-default"><i class="fa fa-backward"></i> Back</a>
                                <br/><br/>
                            </div>
                        </div>
                        <div class="row">
                            <div id="content" class="col-md-9 col-sm-8 col-xs-12">
                                <article class="blog-post blog-post-detail tg-haslayout">
                                    <figure>
                                        <img src="assets/images/blog/financialStatus.jpg" alt="image description">
                                    </figure>
                                    <div class="tg-post-detail">
                                        <div class="tg-description">
                                            <p><legend>สถานะการเงินมิติของอารมณ์ความรู้สึก</legend></p>
                                            <p>
                                                &emsp;&emsp;&emsp;สถานะการเงินเป็นอย่างไร นอกจากความรู้การเงินแล้ว สิ่งที่มีอิทธิพลสูงกว่าคือ ความเชื่อทางสังคม วัฒนธรรม สภาพแวดล้อม การถูกเลี้ยงดู และประสบการณ์ สร้างกรอบความคิดและทัศนคติเกี่ยวกับเงิน
                                            </p>
                                            <p>
                                                &emsp;&emsp;&emsp;หลายคนไม่คุยกันเรื่องเงิน บางคนคิดว่าเรื่องเงินไม่ใช่หน้าที่ต้องรับรู้ บางคนรู้สึกลึกว่าเงินเป็นความเห็นแก่ตัว เป็นความโกง หรือเชื่อว่าคนจะรวยได้ต้องโชคดีชีวิตถูกกำหนดมาแล้ว ฯลฯ ด้วยประสบการณ์ทัศนคติเหล่านี้ จึงปิดการรับรู้ในการเรียนรู้ทำความเข้าใจเกี่ยวกับการทำงานของเงิน
                                            </p>
                                            <p>
                                                &emsp;&emsp;&emsp;เรามาดูความเชื่อ ความรู้สึก ที่กำหนดทัศนคติเกี่ยวกับเงิน ทำให้เกิดการติดสินใจในสถานการณ์ต่าง ๆ ในการใช้ชีวิตประจำวันที่ส่งผลต่อสถานการณ์การเงินที่เป็นอยู่ในปัจจุบัน ทั้งหมดไม่มีผิด ไม่มีถูก แต่มีผลทำให้สถานการณ์การเงินไม่ไปถึงไหน ติด ๆ ขัด ๆ 
                                            </p>
                                            <p>
                                                <strong>Stage 0 – พึ่งพาผู้อื่น (Dependence)</strong><br/>
                                                &emsp;&emsp;&emsp;สำหรับคนไทย นักเรียนนักศึกษาต้องเรียนหนังสืออย่างเดียวค่าใช้จ่ายของเราเป็นหน้าที่ของผู้ปกครองจนกว่าเราจะเรียนจบปริญญาตรีและทำงาน (ในบางประเทศจะพึ่งพาผู้ปกครองถึงอายุ 18 ปี) เราจึงยอมรับที่จะพึ่งพาผู้ปกครองจนกว่าจะเรียนจบมีงานทำ<br/>
                                                &emsp;&emsp;&emsp;คนเกษียณที่มีความเชื่อว่า วัฒนธรรมไทยลูกกตัญญูต้องดูแลพ่อแม่ วันที่ฉันทำงาน ฉันดูแลพวกเธอ วันที่ฉันเกษียณลูกต้องดูแลรับผิดชอบค่าใช้จ่ายพ่อแม่ ก็จะไม่ให้ความสำคัญกับการออมเงินเป็นค่าใช้จ่ายหลังเกษียณ เราจึงยอมรับภาวะพึ่งพาลูกหลานหลังเกษียณ<br/>
                                                หลายคนไม่เตรียมเงินสำรอง ลึก ๆ รู้สึกมีคนช่วย เงินไม่พอมีพ่อแม่ช่วย มีพี่น้องช่วย มีสามีเป็นหลัก มีลูกสาวเป็นหลัก ลูกเงินเยอะขอลูกได้
                                            </p>
                                            <p>
                                                <strong>Stage 1 – มีหนี้ ไม่มีเงินเก็บ (Solvency)</strong><br/>
                                                เป็นผู้ที่มีรายได้ สามารถดูแลค่างวดหนี้และค่าใช้จ่ายของตนเองได้โดยไม่ต้องพึ่งพารายได้จากผู้อื่น แต่ยังคิดว่ามี Backup จากคนในครอบครัว จึงไม่ให้ความสำคัญกับการเตรียมเงินออม หรือเงินสำรองใด ๆ 
                                            </p>
                                            <p>
                                                <strong>Stage 2 – ไม่มีหนี้ ไม่มีเงินเก็บ (Free Debt, No Savings)</strong><br/>
                                                คนกลุ่มนี้ไม่รู้สึกว่าจะต้องเป็นหลักให้กับครอบครัว ขาดเป้าหมายชีวิตที่ชัดเจน มีทัศนคติอาจจะยังไม่เปิดการเรียนรู้การทำงานของเงิน
                                            </p>
                                            <p>
                                                <strong>Stage 3 – ไม่มีหนี้ เงินเหลือมาก (Free Debt, Lot Savings)</strong><br/>
                                                คนกลุ่มนี้มีภาวะผู้นำ ความรู้สึกเป็นหลักให้คนในครอบครัว รับผิดชอบตนเอง แต่อาจจะมีทัศนคติที่ยังไม่เปิดการเรียนรู้การทำงานของเงิน หรือเข้าใจการจัดการเงินคือการออมเท่านั้น จึงขาดข้อมูลการจัดการเงินอย่างเหมาะสม

                                            </p>
                                            <p>
                                                ความเชื่อ ความรู้สึกข้างต้น กำหนดพฤติกรรมบางอย่างที่สร้างผลลัพธ์ให้เราเห็นในตอนนี้
                                            </p>

                                        </div>
                                    </div>
                                </article>

                            </div>
                            <aside id="sidebar" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="tg-widget widget-recent-post">
                                            <div class="tg-widget-holder">
                                                <h3>Recent Posts</h3>
                                                <ul>
                                                    <li>
                                                        <p>ทำไมต้องวางแผนการเงิน</p>
                                                        <time datetime="2008-02-14 20:00" class="tg-post-date">04 February 2015</time>
                                                    </li>
                                                    <li>
                                                        <p>ตรวจสอบสถานการณ์เงิน ของเราอยู่สถานการณ์ไหน</p>
                                                        <time datetime="2008-02-14 20:00" class="tg-post-date">04 February 2015</time>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

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
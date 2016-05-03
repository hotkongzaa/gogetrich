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
        <title>Go Get Rich.net| Financial Situation</title>
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
                                        <a href="blog-list?page=1">Blog</a>
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
                                        <img src="assets/images/blog/financialSit.jpg" alt="image description">
                                    </figure>
                                    <div class="tg-post-detail">
                                        <div class="tg-description">
                                            <p><legend>ตรวจสอบสถานการณ์เงิน</legend></p>
                                            <p>
                                                &emsp;&emsp;&emsp;สถานะการเงินที่มีโอกาสประสบปัญหาการเงินหรือกำลังมีปัญหา ซึ่งจะพบคนรอบ ๆ ตัวเรามี 4 สถานการณ์ ได้แก่ พึ่งพาการเงินผู้อื่น, มีหนี้ ไม่มีเงินเก็บ, ไม่มีหนี้แต่ไม่มีเงินเก็บ, ไม่มีหนี้มีเงินแหลือมาก
                                            </p>
                                            <p style="text-align: center">
                                                <img src="assets/images/blog/blog_list_2_1.png"/>
                                            </p>
                                            <p style="text-align: center;color: blue">
                                                ตอนนี้ลองตอบตัวเองดูว่า<br/>
                                                “เรานั้น...อยู่ในสถานะการเงินไหนใน 4 สถานการณ์”

                                            </p>
                                            <p>
                                                <strong>ลองถามตัวเองว่าตอนนี้เราอยู่ในสถานการณ์การเงินไหนใน 4 สถานการณ์</strong></br>
                                                1. พึ่งพาการเงินผู้อื่น (Dependence)<br/>
                                                2. มีหนี้ ไม่มีเงินเก็บ (Solvency)<br/>
                                                3. ไม่มีหนี้แต่ไม่มีเงินเก็บ (Free debt, No saving)<br/>
                                                4. ไม่มีหนี้มีเงินแหลือมาก (Free debt, Lot saving)<br/>

                                            </p>
                                            <p>
                                                &emsp;&emsp;&emsp;จะใช้ Model Spectrum Financial Stage เรียงลำดับตามระดับทักษะการเงิน โดยให้ 4 สถานการณ์ข้างต้นถูกจัดอยู่ใน 4 stages แรก การวางลำดับนี้จะช่วยให้เข้าใจแต่ละสถานการณ์ได้ง่ายขึ้น วัดผลได้ ง่ายที่จะเข้าใจการเคลื่อนสถานการณ์เงินไปทางที่ดีขึ้น จะต้องเพิ่มทักษะการเงินด้านใดบ้าง
                                            </p>
                                            <p style="text-align: center">
                                                <img src="assets/images/blog/blog_list_2_2.png"/>
                                            </p>
                                            <p>
                                                <strong>Stage 0 – พึ่งพาผู้อื่น (Dependence)</strong><br/>
                                                <strong>ขั้นการเงินพึ่งพาผู้อื่น</strong> คือ คนที่ยังเป็นเด็กหรือนักเรียนนักศึกษาพึ่งพาค่าใช้จ่ายจากพ่อแม่, คนที่ต้องจ่ายค่างวดหนี้มากกว่ารายได้, คนเรียนจบแล้วไม่ทำงาน, คนตกงานไม่ได้เตรียมเงินสำรองฉุกเฉิน, คนเกษียณที่ไม่มีการเตรียมค่าใช้จ่ายหลังเกษียณ
                                            </p>
                                            <p>
                                                <strong>Stage 1 – มีหนี้ ไม่มีเงินเก็บ (Solvency)</strong><br/>
                                                <strong>ขั้นการเงินที่ไม่ต้องใช้เงินจากผู้อื่นมาช่วยจ่าย</strong> คือ คนที่มีรายได้เพียงพอในการจ่ายค่างวดหนี้และค่าใช้จ่ายต่าง ๆ  แต่สถานะจะเปลี่ยนเป็นภาวะพึ่งพาได้ เมื่อสูญเสียรายได้ หรือมีค่าใช้จ่ายที่ไมได้วางแผน เช่น ตกงานกะทันหัน เกิดเจ็บป่วยหรืออุบัติเหตุ
                                            </p>
                                            <p>
                                                <strong>Stage 2 – ไม่มีหนี้ ไม่มีเงินเก็บ (Free Debt, No Savings)</strong><br/>
                                                <strong>ขั้นการเงินที่ไม่มีภาระหนี้สิน แต่ไม่มีเงินเก็บ</strong> ชีวิตจะปกติสุขหากมีรายได้เข้าต่อเนื่อง สถานะจะเปลี่ยนไปที่ภาวะพึ่งพาทันทีที่สูญเสียรายได้ เช่น ตกงาน เจ็บป่วย ฯลฯ สถานะการเงินขั้นนี้มีโอกาสย้อนกลับไปที่ Stage 1 หรือ 0 คือกลับไปเป็นหนี้ หรือต้องพึ่งพาผู้อื่น
                                            </p>
                                            <p>
                                                <strong>Stage 3 – ไม่มีหนี้ เงินเหลือมาก (Free Debt, Lot Savings)</strong><br/>
                                                <strong>ขั้นการเงินที่ไม่มีภาระหนี้สิน แต่มีเงินเก็บมาก</strong> ชีวิตจะปกติสุขในปัจจุบัน แต่หลังรายได้หยุดหรือเกิดการเปลี่ยนแปลงการเงินรุนแรง เช่น เจ็บป่วยหรืออุบัติเหตุหนัก ทุพพลภาพ ฯลฯ อาจจะมีโอกาสกลับไปสู่ภาวะเงินออมหมด (Stage 2) ถ้าค่าใช้จ่ายนั้นเท่าเงินออมที่เคยสะสมไว้ หรือกลับไปเป็นหนี้ (Stage 1) ถ้าค่าใช้จ่ายก้อนใหญ่มากกว่าเงินเก็บ หรือมีสถานะการเงินพึ่งพาผู้อื่น (Stage 0) ถ้าค่าใช้จ่ายก้อนใหญ่นั้นสร้างหนี้สินก้อนใหญ่ที่เกินกำลังผ่อนคืน

                                            </p>
                                            <p>
                                                <strong>Stage 4 – การเงินปลอดภัย (Financial Security)</strong><br/>
                                                <strong>ขั้นการเงินปลอดภัย มีการเตรียมเงินครอบคลุมความต้องการพื้นฐาน</strong> คือมีการออมและลงทุนครอบคลุมค่าใช้จ่ายต่าง ๆ มีเงินสำรองฉุกเฉิน 6-12 เดือน และมีประกันสุขภาพประกันคุ้มครองรายได้ครอบครัว แต่ยังไม่มีแหล่งเงินได้แทนรายได้จากการทำงาน 
                                                ค่าใช้จ่ายก้อนใหญ่ที่คาดการณ์ได้ ได้แก่ ค่าเทอม ฯลฯ มีการคำนวณล่วงหน้าเป็นเป้าหมายออมและลงทุน ส่วนค่าใช้จ่ายก้อนใหญ่ที่คาดการณ์ไม่ได้ ได้แก่ ค่ารักษาพยาบาลโรคร้ายแรงต่อเนื่อง ค่ารักษาพยาบาลกรณีเจ็บป่วย อุบัติเหตุหนัก ฯลฯ ถูกอุดรูรั่วเงินออมด้วยเบี้ยประกันภัย
                                            </p>
                                            <p>
                                                <strong>Stage 5 – อิสรภาพการเงิน (Financial Freedom)</strong><br/>
                                                <strong>มีแหล่งเงินได้ทดแทนรายได้จากการทำงานครอบคลุมรายจ่าย</strong> มี 2 รูปแบบ: 1) มีแหล่งรายได้ที่จ่ายกระแสเงินสดครอบคลุมค่าใช้จ่ายตลอดชีวิต และ 2) แบบที่มีแหล่งเงินก้อนใหญ่ครอบคลุมค่าใช้จ่ายตลอดอายุขัย
                                            </p>
                                            <p>
                                                <strong>Stage 6 – เหลือเฟือ เอื้อผู้อื่น (Abundance)</strong><br/>
                                                <strong>มีแหล่งเงินได้ทดแทนรายได้จากการทำงานมากเกินกว่ารายจ่ายที่ใช้จ่าย</strong> เงินได้จากแหล่งเงินทดแทนรายได้จากการทำงานมีเหลือเกินที่สามารถแบ่งปัน ช่วยเหลือผู้อื่นได้ หรือการสร้างสิ่งที่เป็นประโยชน์อุทิศให้กับผู้อื่น สังคม ประเทศชาติ และโลกใบนี้
                                            </p>
                                            <p>
                                                รายละเอียดแต่ละ Stage ลองพินิจพิจารณาดูว่า คุณอยู่ในขั้นไหน...ในขั้นที่คุณอยู่ ให้ความรู้สึกมั่นคงปลอดภัยหรือยัง? มีความสงบสุขทางใจเกิดขึ้นหรือไม่?
                                            </p>
                                            <p>
                                                &emsp;&emsp;&emsp;ผลลัพธ์สถานการณ์การเงินในปัจจุบันเกิดจากการตัดสินใจในสถานการณ์การเงินในการใช้ชีวิตแต่ละวัน ซึ่งนอกเหนือจากมิติที่เกี่ยวกับตัวเลขแล้ว การตัดสินใจเรื่องการเงินมีรากฐานมาจากการรับรู้ความเชื่อเรื่องเงิน และความรู้สึกการเป็นผู้ให้ ความรับผิดชอบ หรือภาวะผู้นำด้วย
                                            </p>
                                            <p style="text-align: center">
                                                <img src="assets/images/blog/blog_list_2_3.png" />
                                            </p>
                                            <p>
                                                &emsp;&emsp;&emsp;ฉะนั้นสถานการณ์การเงินเป็นอย่างไรเกี่ยวข้องกับเงินมิติตัวเลขและอารมณ์ความรู้สึก ซึ่งเราจำเป็นต้องทำความเข้าใจประกอบกัน เพื่อวางรากฐานะการเงินที่มั่นคง
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
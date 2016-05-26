<?php
session_start();
$now = time();
if (isset($_SESSION['expireFrontEnd'])) {
    if ($now > $_SESSION['expireFrontEnd']) {
        session_destroy();
    }
}
$fPage = (string) filter_input(INPUT_GET, 'fPage');
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
            <div class="tg-banner tg-haslayout parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="assets/images/learn-to-rich-header.jpg">
                <div class="tg-banner-holder">
                    <div class="container">
                        <div class="tg-displaytable">
                            <div class="tg-displaytablecell">
                                <div class="banner-content tg-haslayout">
                                    <h1>LEARN TO RICH</h1>
                                    <!--                                    <ol class="tg-breadcrumb">
                                                                            <li><a href="main">Home</a></li>
                                                                            <li class="active">LEARN TO RICH</li>
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
                                        <a href="aboutus">เราคือใคร</a>
                                    </li>
                                    <li>
                                        <a href="trainingSchedule">คอร์สเรียน/ตารางเรียน</a>
                                        <ul>
                                            <li >
                                                <a href="trainingSchedule">ประเภทของคอร์สเรียน</a>
                                            </li>
                                            <li>
                                                <a href="speaker-list">อาจารย์/ผู้สอน</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
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
                                About Section Start
                *************************************-->
                <section class="tg-main-section tg-haslayout">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 pull-left">
                                <a href="<?= $fPage ?>" class="btn btn-default btn-sm">
                                    <i class="fa fa-backward"></i> กลับสู่ เรียนรู้สู่ความรวย
                                </a>
                                <br/><br/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="tg-theme-heading">
                                    <span>LEARN TO RICH</span>
                                    <h2>อิสระทางการเงิน</h2>
                                </div>
                            </div>
                            <div class="tg-aboutus-section">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <figure class="tg-about-img"><img src="assets/images/learn-to-rich/money-freedom.jpg" alt="image description"></figure>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="tg-aboutus">
                                        <div class="tg-description">
                                            <p>&emsp;&emsp;&emsp;คุณลองหลับตา...แล้วนึก...ตอนนี้คุณมีอิสรภาพการเงินแล้ว...อารมณ์ความสุขเล็ก ๆ สบายใจ สงบสุขเกิดขึ้นเลยใช่มั้ย?...</p>
                                            <p>&emsp;&emsp;&emsp;อิสรภาพการเงินในความหมายที่ทำให้คุณรู้สึกสงบสุข คืออะไร?... </p>
                                            <p>&emsp;&emsp;&emsp;หลายคนอาจจะให้ความหมาย อิสรภาพการเงิน คือ “อยากซื้ออะไร ก็ซื้อได้หมดทุกอย่าง” แนวความคิดนี้จะทำให้คนจนไม่มีโอกาสพบหนทางอิสระ 
                                                หรือคนที่รวยมาก ๆ มีรายได้มาก ๆ จะไม่ถูกปลดปล่อยให้เป็นอิสระซักที</p>
                                            <p>&emsp;&emsp;&emsp;กลับมาที่ความหมายของ “อิสรภาพการเงิน” ในความหมายที่ทำให้เกิดความรู้สึกสงบสุขในใจ</p>
                                            <p align="center"><strong>“ไม่กังวลเรื่องเงิน”<br />
                                                    “สามารถทำสิ่งที่อยากทำ โดยไม่กังวลเรื่องเงิน”<br />
                                                    “หยุดทำงานได้ โดยไม่กังวลเรื่องเงิน”</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-centered">
                                    <div class="tg-aboutus">
                                        <div class="tg-description">
                                            <br />
                                            <br />
                                            <p>&emsp;&emsp;&emsp;คุณคิดว่าถ้าคุณจะมีอิสรภาพการเงิน ต้องมีเงินเท่าไร?... 10 ล้านบาท, 100 ล้านบาท, 1,000 ล้านบาท ฯลฯ... 
                                                ถ้าตอนนี้คุณมีเงินจำนวนที่ต้องการแล้ว...รู้สึกมีอิสรภาพการเงินเลยใช่มั้ย?</p>
                                            <p>&emsp;&emsp;&emsp;อิสรภาพการเงินในความหมายของการวางแผนการเงิน 
                                                คือ ความชัดเจนของตัวเลขค่าใช้จ่าย และมีรายได้ที่ไม่ต้องใช้ตัวเองทำงานออกมาสม่ำเสมอครอบคลุมค่าใช้จ่ายก้อนนี้ </p>
                                            <p>&emsp;&emsp;&emsp;เช่น คุณมีค่าใช้จ่ายตัวคุณรวมครอบครัว 50,000 บาทต่อเดือน...แล้ววันนี้คุณมีรายได้โดยไม่ต้องทำงานจำนวน 50,000 บาท
                                                ทุกเดือน...คุณรู้สึกอย่างไร? ความหมายของ “อิสรภาพการเงินแบบหลัง” ให้ความรู้สึกสงบสุข และเป็นไปได้</p>
                                            <p>&emsp;&emsp;&emsp;<strong>“อิสรภาพการเงิน” หรือ “ทำสิ่งที่รักโดยไม่กังวลเรื่องเงิน”</strong> ไม่ต้องรอเกษียณ ทำให้เกิดขึ้นเร็วที่สุด แล้วใช้เวลาที่เหลือทำในสิ่งอยากทำได้โดยไม่กังวลเรื่องเงินอีกต่อไป</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                                About Section End
                *************************************-->
                <!--************************************
                                Our Team Start
                *************************************-->
                <section class="tg-main-section tg-haslayout tg-skillreview-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="tg-theme-heading">
                                    <span>We are Go Get Rich</span>
                                    <h2>Our Coach</h2>
                                </div>
                            </div>
                            <?php include './mentor_part.php'; ?>
                        </div>
                    </div>
                </section>
                <!--************************************
                                Our Team End
                *************************************-->
                <!--************************************
                                Testimonials Start
                *************************************-->
                <!--section class="tg-main-section tg-haslayout testimonial-image">
                    <div class="container">
                        <div class="row">
                            <div class="tg-testimonials tg-haslayout">
                                <div class="col-lg-10 col-md-7 col-sm-7">
                                    <div id="tg-testi-slider" class="tg-testi-slider">
                                        <div class="item">
                                            <div class="tg-theme-heading">
                                                <span>our coach</span>
                                                <h2>วิภา เจริญกิจสุพัฒน์ <span>(อ. พี่เกียก)</span></h2>
                                            </div>
                                            <div class="tg-description">
                                                <blockquote>
                                                    <q>สามสิ่งสำคัญ ในความรู้ของการจัดการการเงิน ที่พี่อยากจะแชร์และแบ่งปันคนไทยทุกคน ได้แก่ การวางแผนงบการเงิน การอยู่อย่างพอเพียง และการใช้ชีวิตอย่างมีความสุข ...ซึ่งทุกคนทำได้  ขอเพียงรู้จักจัดการเงินอย่างฉลาด อิสระภาพทางการเงินและการใช้ชีวิต มันเป็นไปได้....และนี่แหละ คือ โชค ที่ทุกคนต้องการมี</q>
                                                </blockquote>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="tg-theme-heading">
                                                <span>our coach</span>
                                                <h2>อ. ตู่ กามล</h2>
                                            </div>
                                            <div class="tg-description">
                                                <blockquote>
                                                    <q>คนเราทำงาน ก็เพื่อหาเงิน เพื่อความสุข หากมีปัญหาในทางการทำงานและการเงิน มันก็แค่สิ่งหนึ่งที่เกิดขึ้นในกระบวนการ การเปลี่ยนแปลง... ค่อยๆคิด ค่อยๆแก้ สิ่งสำคัญ คือ หากเราเข้าใจตนเอง เราจะสามารถนำศักยภาพ และดึงความสามารถที่มีอยู่ สร้างรายได้อย่างไม่มีข้อจำกัด ....ศักยภาพจากการเข้าใจตนเอง และความรู้อย่างถ่องแท้ในงานที่ทำ จะสร้างโชค ที่ไม่รู้จบ</q>
                                                </blockquote>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section-->
                <!--************************************
                                Testimonials End
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
                            Footer End
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
                            <a class="forgetpassword" href="forgetPassword">
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
        <?php include './mentor_dialog.php'; ?>
        <!--************************************
                        Popup End
        *************************************-->
        <div class="scroll-top-wrapper ">
            <span class="scroll-top-inner">
                <i class="fa fa-2x fa-arrow-circle-up"></i>
            </span>
        </div>
    </body>
    <style type="text/css">
        .linkHover:hover{
            color:#ffcc33;
            cursor: pointer;
        }
    </style>
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
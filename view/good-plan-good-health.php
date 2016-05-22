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
                                    <h2>สวยหล่อด้วยสุขภาพการเงินที่ดี</h2>
                                </div>
                            </div>
                            <div class="tg-aboutus-section">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <figure class="tg-about-img"><img src="assets/images/learn-to-rich/good-plan-good-health.jpg" alt="image description"></figure>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="tg-aboutus">
                                        <div class="tg-description">
                                            <p>&emsp;&emsp;&emsp;สวยหล่อด้วยสุขภาพการเงินที่ดี จากภายในสู่ภายนอก สุขภาพการเงินที่ดีสร้างความสงบสุขเติมเต็ม เป็นพลังงานสงบที่ผู้คนรอบข้างสัมผัสได้</p>
                                            <p>&emsp;&emsp;&emsp;สุขภาพการเงินที่ดีเป็นอย่างไร? ไม่กังวลค่าใช้จ่ายที่เกิดขึ้นในทุกช่วงของชีวิต รายรับรายจ่ายปัจจุบันสมดุล เตรียมพร้อมค่าใช้จ่ายอนาคตในสถานการณ์ปกติ และพร้อมในสถานการณ์ไม่ปกติ</p>
                                            <p>&emsp;&emsp;&emsp;การตรวจสุขภาพการเงินช่วยให้เราเห็นภาพการเงินของตนเองชัดเจน ว่าอยู่จุดไหนของสถานการณ์การเงิน</p>
                                            <p><strong>วิธีตรวจสุขภาพการเงินด้วยตนเองง่าย ๆ คือ</strong><br />
                                                &emsp;&emsp;&emsp;1. ทรัพย์สินสุทธิคงเหลือเปรียบเทียบกับเกณฑ์<br />
                                                &emsp;&emsp;&emsp;2. สำรวจพฤติกรรมการเงิน<br />
                                                &emsp;&emsp;&emsp;3. ประเมินสถานการณ์ปัจจุบัน<br />
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-centered">
                                    <div class="tg-aboutus">
                                        <div class="tg-description">
                                            </br>
                                            <p><strong>1. ทรัพย์สินสุทธิคงเหลือเปรียบเทียบกับเกณฑ์</strong></p>
                                            <p>&emsp;&emsp;&emsp;ทรัพย์สินสุทธิ = ทรัพย์สิน – หนี้สิน<br />
                                                &emsp;&emsp;&emsp;<u>ตัวอย่าง</u></p>
                                            <p style="text-align:center">
                                                <img src="assets/images/learn-to-rich/beauty_and_health_4.jpg" alt="image description" style="width:550px;height:600px;"/>
                                            </p>
                                            <p>&emsp;&emsp;&emsp;<strong>เปรียบเทียบกับทรัพย์สินสุทธิกับเกณฑ์มาตรฐาน</strong><br />
                                                &emsp;&emsp;&emsp;เกณฑ์ทรัพย์สินสุทธิ  = รายได้ปีล่าสุด x จำนวนปีที่ทำงาน x 20%<br />
                                                &emsp;&emsp;&emsp;<u>ตัวอย่าง</u></p>
                                            <p style="text-align:center">
                                                <img src="assets/images/learn-to-rich/beauty_and_health_5.jpg" alt="image description" style="width:620px;height:140px;"/>
                                            </p>
                                            <p>&emsp;&emsp;&emsp;เกณฑ์ทรัพย์สินสุทธิ  = 720,000 บาท x 15 ปี x 20% = 2,160,000 บาท<br />
                                                &emsp;&emsp;&emsp;มีมูลค่าทรัพย์สินสุทธิจริง 1,950,000 บาท มูลค่าทรัพย์สินที่ควรจะมีคือ 2,160,000 บาท
                                            </p>
                                            <p><strong>2. สำรวจพฤติกรรมการเงิน</strong></p>
                                            <p>&emsp;&emsp;&emsp;กระแสเงินสดสุทธิ = กระแสเงินสดรับ – กระแสเงินสดจ่าย<br />
                                                &emsp;&emsp;&emsp;กระแสเงินสดรับ  = รายได้<br />
                                                &emsp;&emsp;&emsp;กระแสเงินสดจ่าย = รายจ่าย<br />
                                                &emsp;&emsp;&emsp;<u>ตัวอย่าง</u></p>
                                            <p style="text-align:center">
                                                <img src="assets/images/learn-to-rich/beauty_and_health_6.jpg" alt="image description" style="width:560px;height:760px;"/>
                                            </p>
                                            <p>พฤติกรรมการเงินเป็นเหตุ ทรัพย์สินสุทธิเป็นผลลัพธ์</p>
                                            <ul>
                                                <li>รายรับรายจ่ายสมดุลหรือไม่? กระแสเงินสดรับ – กระแสเงินสดจ่าย</li>
                                                <li>ค่าใช้จ่ายปัจจุบัน ไม่ควรเกิน 55% ของรายได้</li>
                                                <li>ค่างวดผ่อนทั้งหมดไม่เกิน 35% ของรายได้</li>
                                                <li>เงินออมมากกว่า 10% ของรายได้</li>
                                            </ul>
                                            <p style="text-align:center">
                                                <img src="assets/images/learn-to-rich/beauty_and_health_7.jpg" alt="image description" style="width:314px;height:214px;"/>
                                            </p>
                                            <ul>
                                                <li>รายรับรายจ่ายสมดุลหรือไม่? กระแสเงินสดรับ – กระแสเงินสดจ่าย มีเงินเหลือหรือติดลบ การใช้จ่ายเกินรายได้ </li>
                                                <li>ค่าใช้จ่ายปัจจุบัน ไม่ควรเกิน 55% ของรายได้ </li>
                                                <li>ค่างวดผ่อนทั้งหมดไม่เกิน 35% ของรายได้</li>
                                                <li>เงินออมมากกว่า 10% ของรายได้ </li>
                                            </ul><br />
                                            <p><strong>3. วิเคราะห์สถานะการเงิน</strong></p>
                                            <p>ประเมินสถานการณ์การเงินปัจจุบัน:</p>
                                            <ul>
                                                <li>ทรัพย์สินสุทธิมากกว่าเกณฑ์ เกณฑ์มาจากการออม 20% ตั้งแต่เริ่มต้นทำงาน</li>
                                                <li>กระแสเงินสดสุทธิ การมีรายรับรายจ่ายสมดุล</li>
                                                <li>สภาพคล่อง คือเงินออมสำรองฉุกเฉินกรณีมีรายจ่ายที่ไม่อยู่ในแผนการเงิน หรือกรณีตกงานกะทันหัน ควรสำรอง 6 เท่าของรายจ่าย</li>
                                                <li>ค่างวดผ่อนชำระทั้งหมด ไม่ควรเกิน 35% ของรายได้</li>
                                                <li>ค่างวดผ่อนชำระหนี้บริโภค ไม่ควรเกิน 20% ของรายได้ เนื่องจากเป็นหนี้ที่ทำให้ทรัพย์สินลดลง</li>
                                                <li>เงินออมควรมากกว่า 10% ของรายได้ เงินออมมีความสำคัญในการเตรียมเป็นค่าใช้จ่ายในอนาคต การออมน้อยเกินไป จะทำให้ค่าใช้จ่ายอนาคตที่ถึงเวลาต้องใช้ แต่เตรียมไม่พอเนื่องจากออมน้อยเกินไป เป็นสาเหตุให้เข้าสู่วงจรเป็นหนี้</li>
                                                <li>อิสรภาพการเงิน คือ การมีรายได้ที่เกิดจากทรัพย์สิน (ไม่ต้องใช้เวลาและความสามารถในการสร้างรายได้) เทียบเท่ากับรายจ่าย</li>
                                            </ul><br />
                                            <p style="text-align:center">
                                                <img src="assets/images/learn-to-rich/beauty_and_health_8.jpg" alt="image description" style="width:400px;height:600px;"/>
                                            </p><br />
<!--                                            <p style="text-align:center">
                                                <img src="assets/images/learn-to-rich/beauty_and_health_1.jpg" alt="image description"/>
                                            </p>-->
                                            <!--                                                <br />
                                                                                            <br />
                                                                                            <br />
                                                                                            <p>*ข้อมูลจาก: กรรมตามสมอง, ขุนเขา สินธุเสน เขจรบุตร</p>-->
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
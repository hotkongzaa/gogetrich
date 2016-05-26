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
        <?php include './assets/css_incl.php'; ?>
        <?php include './assets/javascript_incl.php'; ?>
    </head>
    <body class="home">
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
                            Header Start
            *************************************-->
            <header id="header" class="tg-haslayout" data-spy="affix" data-offset-top="10">
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
                                    <li class="current-menu-item">
                                        <a href="main">หน้าหลัก</a>
                                    </li>
                                    <li>
                                        <a href="aboutus">เราคือใคร</a>
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
                            Home Slider Start
            *************************************-->
            <div id="home-slider" class="home-slider tg-haslayout">
                <div class="item">
                    <figure>
                        <img src="assets/images/home-slider/seminar_slide.png" alt="image description">
                    </figure>
                    <div class="tg-banner-content">
                        <div class="tg-border-bottomleft">
                            <h1>Seminar <span> “Secret$ of Money Cat” รุ่น#2</span></h1>
                        </div>
                        <a class="tg-theme-btn" href="trainingSchedule">ดูรายละเอียด</a>
                        <?php
                        if (empty($_SESSION['usernameFrontEnd'])) {
                            ?>
                            <a data-toggle="modal" data-target=".login-modalbox" class="tg-theme-btn" href="#">ลงทะเบียน</a>
                            <?php
                        } else {
                            ?>
                            <a class="tg-theme-btn" href="trainingSchedule">ลงทะเบียน</a>
                            <?php
                        }
                        ?>

                        <a class="tg-theme-btn" href="trainingSchedule">ดูหลักสูตรอบรมทั้งหมด</a>
                    </div>
                </div>
                <div class="item">
                    <figure>
                        <img src="assets/images/homepage_carousel_2_v4.png" alt="image description">
                    </figure>
                    <div class="tg-banner-content">
                        <!--div class="tg-border-bottomleft">
                            <h1>Virtually <span>bUILD yOUR</span> HOUSE</h1>
                        </div-->
                        <!--a class="tg-theme-btn" href="#">BUILD NOW</a-->
                        <!--a class="tg-theme-btn" href="aboutus">ดูรายละเอียด</a-->
                    </div>
                </div>                
            </div>
            <!--************************************
                            Home Slider End
            *************************************-->
            <!--************************************
                            Main Start
            *************************************-->
            <main id="main" class="tg-haslayout">
                <!--************************************
                                Services Start
                *************************************-->
                <section class="tg-main-section tg-haslayout bg-white">
                    <div class="container">                        
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="tg-theme-heading">
                                    <span>LEARN TO RICH</span>
                                    <h2>เรียนรู้สู่ความรวย</h2>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="col-md-4 col-sm-12 col-sm-offset-3 col-sm-12 col-md-offset-0 ">
                                    <div class="row">
                                        <div class="tg-service-img">
                                            <figure class="tg-img-border">
                                                <img src="assets/images/financial_planning_revised.png" alt="image description">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-12 col-xs-12 zero-right-padding">
                                    <div class="tg-services row">
                                        <div class="tg-service services-content tg-haslayout pointer" onclick="window.location.href = 'life-target?fPage=learn-to-rich'">
                                            <figure class="tg-sercice-img">
                                                <img src="assets/images/icon-1.jpg" alt="image description">
                                            </figure>
                                            <div class="tg-border-topleft tg-haslayout">
                                                <div class="tg-displaytable">
                                                    <div class="tg-displaytablecell">
                                                        <span class="fa fa-graduation-cap"></span>
                                                        <h3>ล็อคเป้าหมายชีวิต</h3>
                                                        <div class="tg-description">
                                                            <p>ความรู้การเงินทำให้เรารู้วิธีสร้างเป้าหมายการเงิน เหมือนมีตะกร้าเงินหลาย ๆ ใบที่จะค่อยกักเก็บเงินให้คุณตามเป้าหมายการเงินที่สนับสนุนเป้าหมายชีวิตของคุณ</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-service services-content tg-haslayout pointer" onclick="window.location.href = 'mind-and-brain-take-to-rich?fPage=learn-to-rich'">
                                            <figure class="tg-sercice-img">
                                                <img src="assets/images/icon-2.jpg" alt="image description">
                                            </figure>
                                            <div class="tg-border-topleft tg-haslayout">
                                                <div class="tg-displaytable">
                                                    <div class="tg-displaytablecell">
                                                        <span class="flaticon-star182"></span>
                                                        <h3>จิตและสมองพารวย</h3>
                                                        <div class="tg-description">
                                                            <p>การพัฒนาทักษะการเงินนอกจากมิติตัวเลขแล้วยังมีมิติของการรับรู้ ความเชื่อเกี่ยวกับเงิน ภาวะผู้นำและระดับของการให้ การได้รับความรู้ควบคู่กันไป</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-service services-content tg-haslayout pointer" onclick="window.location.href = 'good-plan-good-health?fPage=learn-to-rich'">
                                            <figure class="tg-sercice-img">
                                                <img src="assets/images/icon-3.jpg" alt="image description">
                                            </figure>
                                            <div class="tg-border-topleft tg-haslayout">
                                                <div class="tg-displaytable">
                                                    <div class="tg-displaytablecell">
                                                        <span class="fa fa-heartbeat"></span>
                                                        <h3>สวยหล่อด้วยสุขภาพการเงินที่ดี</h3>
                                                        <div class="tg-description">
                                                            <p>สวยหล่อด้วยสุขภาพการเงินที่ดี จากภายในสู่ภายนอก สุขภาพการเงินที่ดีสร้างความสงบสุขเติมเต็ม เป็นพลังงานสงบที่ผู้คนรอบข้างสัมผัสได้</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-service services-content tg-haslayout pointer" onclick="window.location.href = 'learn-to-rich'">
                                            <figure class="tg-sercice-img">
                                                <img src="assets/images/icon-4.jpg" alt="image description">
                                            </figure>
                                            <div class="tg-border-topleft tg-haslayout">
                                                <div class="tg-displaytable">
                                                    <div class="tg-displaytablecell">
                                                        <span class="fa fa-plus"></span>
                                                        <h3>More...</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                                Services End
                *************************************-->
                <!--************************************
                                Virtually Build Start
                *************************************-->
                <section class="tg-main-section tg-haslayout parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="assets/images/testimonial_image.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-7 tg-displayinlineblock">
                                <div class="tg-virtual-img tg-haslayout">
                                    <figure>
                                        <img src="assets/images/financial_planning_model_grey.png" alt="image description">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-sm-5 tg-displayinlineblock">
                                <div class="tg-virtuallybuild">
                                    <div class="tg-theme-heading">
                                        <h2>Who are you? <span>คุณเป็นใครใน Financial Spectrum Stages</span></h2>
                                    </div>
                                    <div class="tg-description">
                                        <p>คุณอยู่สถานการณ์ไหน การรู้สถานการณ์ของตัวเองจะช่วยให้การจัดการการเงินถูกทิศทาง รวมถึงการวางแผนการเงินเพื่อให้เกิดความชัดเจนเรื่องเงิน ตลอดทุกช่วงชีวิต เพื่อความสงบสุขทางใจ เพื่อสร้างความมั่นคงให้กับครอบครัว</p>
                                    </div>
                                    <div class="tg-btn-box">
                                        <a class="tg-theme-btn" href="financial-check">ตรวจสอบเดี๋ยวนี้</a>
                                        <a class="tg-theme-btn" href="financial-check-detail">รายละเอียด</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                                Virtually Build End
                *************************************-->
                <!--************************************
                                Portfolio Start
                *************************************-->
                <section class="tg-main-section tg-haslayout bg-white">
                    <div class="container">
                        <div class="row">
                            <div class="tg-portfolio">
                                <div class="col-sm-4">
                                    <div class="tg-theme-heading" style="cursor: pointer;" onclick="window.location.href = 'speaker-list'">
                                        <span>Our Mentor</span>
                                        <h2>พี่เลี้ยงพารวย</h2>
                                    </div>
                                    <div class="tg-service-img tg-haslayout">
                                        <div class="tab-content tg-img-border">
                                            <div role="tabpanel" class="tab-pane fade in active" id="portfolio-item-one">
                                                <figure>
                                                    <img src="assets/images/portfolio/wipa_image.png" alt="อ. วิภา เจริญกิจสุพัฒน์">
                                                </figure>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="portfolio-item-two">
                                                <figure>
                                                    <img src="assets/images//portfolio/golf_image.png" alt="อ. วิธิวัต โรจนตรีคูณ">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="portfolio masnory tg-haslayout">
                                        <ul id="gallery-cats" class="gallery-cats option-set haslayout">
                                            <li class="select"><a href="#" data-filter="*">All</a></li>
                                            <li><a href="#" data-filter=".moneymentor">พี่เลี้ยงการเงิน</a></li>
                                        </ul>
                                        <div class="row">
                                            <div class="portfolio-content tg-haslayout portfolio-image grid" role="tablist">
                                                <div role="presentation" class="active portfolio-item grid-item moneymentor">
                                                    <div class="product-box">
                                                        <a href="#portfolio-item-one" aria-controls="portfolio-item-one" role="tab" data-toggle="tab">
                                                            <figure>
                                                                <img src="assets/images/portfolio/wipa_thumbnail.png" alt="image description">
                                                            </figure>
                                                            <div class="tg-img-hover">
                                                                <div class="tg-displaytable">
                                                                    <div class="tg-displaytablecell" data-toggle="modal" data-target=".mentor-p_kieak">
                                                                        <i class="fa fa-book"></i>
                                                                        <h4>อ. วิภา เจริญกิจสุพัฒน์</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div role="presentation" class="portfolio-item grid-item moneymentor">
                                                    <div class="product-box">
                                                        <a href="#portfolio-item-two" aria-controls="portfolio-item-two" role="tab" data-toggle="tab">
                                                            <figure>
                                                                <img src="assets/images/portfolio/golf_thumbnail.png" alt="image description">
                                                            </figure>
                                                            <div class="tg-img-hover">
                                                                <div class="tg-displaytable">
                                                                    <div class="tg-displaytablecell" data-toggle="modal" data-target=".mentor-p_golf">
                                                                        <i class="fa fa-book"></i>
                                                                        <h4>อ. ณัฏฐพล พราหมณ์สำราญ</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                                Portfolio End
                *************************************-->

                <!--************************************
                                Latest Blog Start
                *************************************-->
                <?php include './blog-list_front.php'; ?>
                <!--************************************
                                Latest Blog End
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
                <h2>LOGIN FORM <span class="pull-right" style="cursor: pointer" onclick="$('.login-modalbox').modal('hide')">x</span></h2>
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
        <!--<Part of mentor Dialog>-->
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
                content: $('<ul><li class="linkHover" onclick="logoutFromApplication()" style="list-style: none; margin-left: 10px"><div class="form-group"><i class="fa fa-sign-out"></i> Logout</div></li></ul>'),
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
                        }, 50);
                        $(form).trigger('reset');
                    }
                    if (resData[0] == 205) {
                        setTimeout(function () {
                            showSuccessNotficationDialog("กรุณาเปลี่ยนรหัสผ่าน", "forceChangePassword.php?cusID=" + resData[1]);
                        }, 50);
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
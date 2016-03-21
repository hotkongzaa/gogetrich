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
        <title>BootStrap HTML5 CSS3 Theme</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <?php include './assets/css_incl.php'; ?>
        <?php include './assets/javascript_incl.php'; ?>
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
                                        <img src="assets/images/blog/whyplanning.jpg" alt="image description">
                                        <div class="tg-img-hover">
                                            <div class="tg-displaytable">
                                                <div class="tg-displaytablecell">
                                                    <h2>ทำไมต้องวางแผนการเงิน</h2>
                                                    <ul class="tg-metadata">
                                                        <li class="author"><a href="#">By Admin / </a></li>
                                                        <li class="catagory"><a href="#">In Photography</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="tg-post-detail">
                                        <div class="tg-description">
                                            <p>
                                                &emsp;&emsp;&emsp;ยุคสมัยเปลี่ยนแปลงไป เราได้รับการศึกษาในระบบมากขึ้น โอกาสมากขึ้น มีการเปลี่ยนจากทำเกษตรกรรมในรุ่นพ่อแม่ปู่ย่าตายาย หรือค้าขายที่บ้าน มาทำงานมีรายได้ในรูปของเงินเดือนเป็นจำนวนเงินแน่นอนทุกเดือน ดูแล้วน่าจะดีกว่าในอดีตที่ทำเกษตรกรรมหรือค้าขายที่บ้านที่มีรายได้ไม่แน่นอน
                                            </p>
                                            <p>
                                                &emsp;&emsp;&emsp;ด้วยรูปแบบการดำเนินชีวิตที่เปลี่ยนไป มีรายได้มากขึ้น มีเงินซื้อรถ ซื้อบ้านเดี่ยวมีบริเวณ  การแข่งขันสูงขึ้น จึงต้องส่งให้ลูกเรียนในสถาบันการศึกษาที่ติดอันดับ วันหยุดพาลูกเรียนพิเศษ เรียนดนตรี ไม่มีเวลาอยู่บ้านทำอาหารเอง แต่ก็ยังใช้ชีวิตได้อย่างสะดวกสบาย โดยซื้ออาหารปรุงสำเร็จนอกบ้านเป็นหลักรวมถีงฟาสต์ฟูดส์แบบฝรั่ง กินมากเกินไปน้ำหนักเกินก็ไปฟิตเนสออกกำลังกายให้รูปร่างได้สัดส่วน
                                            </p>
                                            <p>
                                                &emsp;&emsp;&emsp;ทำงานเครียดเกินไปเดินชอปปิ้งร้านค้าในห้างสรรพสินค้าจัดร้านสวย ๆ สินค้าเกรด A มากมาย ตกเย็นเพื่อน ๆ ชวนกันไปหาร้านอร่อย ๆ กินกัน
                                            </p>
                                            <p>
                                                &emsp;&emsp;&emsp;ที่จริงกลุ่มคนเมืองมีปัญหาการเงินที่ซ่อนอยู่แต่ยังมองไม่เห็น เนื่องจากยังคงมีรายได้ทุก ๆ เดือน แต่จะแฝงด้วยความรู้สึกกังวล ความกลัว โดยไม่เข้าใจต้นเหตุที่แท้จริง ความกังวลลึก ๆ แบบนี้โอกาสจะกระทบกับปฏิสัมพันธ์กับผู้ร่วมงาน และคนในครอบครัวโดยไม่รู้ตัว
                                            </p>
                                            <blockquote style="font-size: 20px !important;">
                                                <q>“ลองมองดูความรู้สึกตัวเอง 
                                                    ตอนนี้รู้สึกยังไงกับการเงินตัวเอง สบายใจหรือกังวล
                                                    ถ้ากังวล...กังวลอะไร?”</q>
                                            </blockquote>
                                            <p>
                                                &emsp;&emsp;&emsp;ทั้ง ๆ ที่รายได้มากและเพิ่มขึ้นทุกปี การใช้จ่ายยังคงเป็นแบบเดือนชนเดือน ค่าใช้จ่ายปัจจุบันใช้เงินเดือนถัดไปมาจ่าย ไม่มีการเตรียมเงินสำรองฉุกเฉิน ปัญหาจะเห็นชัดเจนเมื่อสายเกินไป เช่น หนี้บัตรเครดิตมากเกินกว่าที่จะจ่ายขั้นต่ำไหว, ตกงานกะทันหัน, หัวหน้าครอบครัวเสียชีวิตหรือพิการ, หรือบางทีปัญหาไปพบเอาตอนเกษียณเลย เงินออมไม่พอ หรือการไม่มีการวางแผนการใช้จ่ายเงินก้อนสุดท้ายหลังเกษียณ ซึ่งถึงตอนนั้นจะแก้ตัวไม่ทัน
                                            </p>
                                            <p>
                                                &emsp;&emsp;&emsp;วันนี้เรายังต้องทำงานหนักหาเงินให้ได้มาก ๆ เพื่อจ่ายเงินซื้อทุกสิ่งทุกอย่างโดยไม่มีการจัดการใด ๆ เหมือนเป็นทาสของเงิน ชีวิตมีแต่หาเงิน ใช้เงิน, หาเงิน ใช้เงิน, หาเงิน ใช้เงิน เราจะอยู่ในสถานการณ์นี้อีกนานแค่ไหน
                                            </p>
                                            <p>
                                                &emsp;&emsp;&emsp;ถึงเวลาแล้วแล้วหรือยังที่จะทบทวนชีวิตทบทวนการเงินที่ผ่านมา วางแผนการเงินเพื่อจัดการรับรายรายจ่ายให้ชัดเจน เตรียมเงินออมให้สร้างรายได้แทนเราในวันข้างหน้าในวันนี้ ขณะที่เรามีแรงมีกำลังความสามารถพร้อมในการหาเงิน.....การจัดการเงินให้เงินทำงานหนักแทนเราตอนนี้ยังมีเงินให้เราจัดการ
                                            </p>
                                            <blockquote style="font-size: 20px !important;">
                                                <q>“ถึงเวลาหรือยังที่เราจะลุกขึ้นมา
                                                    ทำอะไรบางอย่างเพื่อจัดการเงินที่เราหามาได้
                                                    ให้เงินทำงานหนักแทนเรา
                                                    ”</q>
                                            </blockquote>
                                            <p>
                                                &emsp;&emsp;&emsp;วันนี้เรายังต้องทำงานหนักหาเงินให้ได้มาก ๆ เพื่อจ่ายเงินซื้อทุกสิ่งทุกอย่างโดยไม่มีการจัดการใด ๆ เหมือนเป็นทาสของเงิน ชีวิตมีแต่หาเงิน ใช้เงิน, หาเงิน ใช้เงิน, หาเงิน ใช้เงิน เราจะอยู่ในสถานการณ์นี้อีกนานแค่ไหน
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!--************************************
                                            Sidebar Start
                            *************************************-->
                            <aside id="sidebar" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <div class="row">

                                    <div class="col-md-12 col-xs-12">
                                        <div class="tg-widget widget-recent-post">
                                            <div class="tg-widget-holder">
                                                <h3>Recent Posts</h3>
                                                <ul>
                                                    <li>
                                                        <p>Claritas est etiam processus dynamicus, qui sequitur...</p>
                                                        <time datetime="2008-02-14 20:00" class="tg-post-date">04 February 2015</time>
                                                    </li>
                                                    <li>
                                                        <p>Duis aytem eum iriure dolor...</p>
                                                        <time datetime="2008-02-14 20:00" class="tg-post-date">04 February 2015</time>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </aside>
                            <!--************************************
                                            Sidebar End
                            *************************************-->
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
        <!--************************************
                        Popup End
        *************************************-->
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
    </body>
</html>
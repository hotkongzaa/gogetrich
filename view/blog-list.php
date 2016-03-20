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
                                    <h1>blog list</h1>
                                    <ol class="tg-breadcrumb">
                                        <li><a href="#">Home</a></li>
                                        <li class="active">blog list</li>
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
                    <strong class="logo">
                        <a href="main">
                            <img src="assets/images/logo.png" alt="Constructioner">
                        </a>
                    </strong>
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
                <div class="tg-main-section tg-haslayout bg-white">
                    <div class="container">
                        <div class="row">
                            <div id="twocolumns" class="blog-list">
                                <!--************************************
                                                Blog List Section Start
                                *************************************-->
                                <div class="col-md-9 col-sm-8 col-xs-12">
                                    <div class="tg-theme-heading">
                                        <span>from our</span>
                                        <h2>Blog พารวย</h2>
                                    </div>
                                    <div class="tg-post">
                                        <div class="tg-post-img">
                                            <figure>
                                                <a href="#">
                                                    <img src="assets/images/blog/whyplanning.jpg" alt="image description">
                                                </a>
                                            </figure>
                                            <div class="tg-post-hover">
                                                <ul class="tg-post-hover-icons">
                                                    <li><a href="#"><i class="flaticon-plus79"></i></a></li>
                                                    <li><a href="#"><i class="flaticon-share55"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tg-post-content tg-border-topleft">
                                            <h3><a href="whyweplanning-blog">ทำไมต้องวางแผนการเงิน</a></h3>
                                            <div class="tg-post-meta">
                                                <span><a href="#">By Admin / </a></span>
                                                <span><a href="#">In Map</a></span>
                                            </div>
                                            <div class="tg-description">
                                                <p>ยุคสมัยเปลี่ยนแปลงไป เราได้รับการศึกษาในระบบมากขึ้น โอกาสมากขึ้น มีการเปลี่ยนจากทำเกษตรกรรมในรุ่นพ่อแม่ปู่ย่าตายาย หรือค้าขายที่บ้าน มาทำงานมีรายได้ในรูปของเงินเดือนเป็นจำนวนเงินแน่นอนทุกเดือน...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tg-post">
                                        <div class="tg-post-img">
                                            <figure>
                                                <a href="#">
                                                    <img src="assets/images/blog/financialSit.jpg" alt="image description">
                                                </a>
                                            </figure>
                                            <div class="tg-post-hover">
                                                <ul class="tg-post-hover-icons">
                                                    <li><a href="#"><i class="flaticon-plus79"></i></a></li>
                                                    <li><a href="#"><i class="flaticon-share55"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tg-post-content tg-border-topleft">
                                            <h3><a href="financial-check-detail">ตรวจสอบสถานการณ์เงิน ของเราอยู่สถานการณ์ไหน</a></h3>
                                            <div class="tg-post-meta">
                                                <span><a href="#">By Admin / </a></span>
                                                <span><a href="#">In Map</a></span>
                                            </div>
                                            <div class="tg-description">
                                                <p>สถานะการเงินโดยทั่วไปมีอยู่ 6 สถานการณ์: สถานะพึ่งพิง, หนี้สินล้นพ้นตัว, ไม่มีหนี้หรือมีหนี้ที่จัดการได้ แต่ไม่มีเงินเก็บ, เงินเหลือมากแต่ไม่ได้จัดการ, การเงินมั่นคงปลอดภัย, อิสรภาพการเงิน...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tg-post">
                                        <div class="tg-post-img">
                                            <figure>
                                                <a href="#">
                                                    <img src="assets/images/blog/financialStatus.jpg" alt="image description">
                                                </a>
                                            </figure>
                                            <div class="tg-post-hover">
                                                <ul class="tg-post-hover-icons">
                                                    <li><a href="#"><i class="flaticon-plus79"></i></a></li>
                                                    <li><a href="#"><i class="flaticon-share55"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tg-post-content tg-border-topleft">
                                            <h3><a href="financial-check">สถานะการเงินกับจิตใต้สำนึก</a></h3>
                                            <div class="tg-post-meta">
                                                <span><a href="#">By Admin / </a></span>
                                                <span><a href="#">In Map</a></span>
                                            </div>
                                            <div class="tg-description">
                                                <p>ทฤษฎีภูเขาน้ำแข็งของซิกมันด์ ฟรอยด์ (Sigmund Freud) บิดาแห่งจิตวิทยาผู้ให้ความสนใจพฤติกรรมของมนุษย์ที่เกี่ยวข้องกับจิตใต้สำนึก โดยเปรียบเทียบกับภูเขาน้ำแข็ง...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tg-post">
                                        <div class="tg-post-img">
                                            <figure>
                                                <a href="#">
                                                    <img src="assets/images/blog/blog_piramid.jpg" alt="image description">
                                                </a>
                                            </figure>
                                            <div class="tg-post-hover">
                                                <ul class="tg-post-hover-icons">
                                                    <li><a href="#"><i class="flaticon-plus79"></i></a></li>
                                                    <li><a href="#"><i class="flaticon-share55"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tg-post-content tg-border-topleft">
                                            <h3><a href="financialpyramid-blog">ปิรามิดการเงิน</a></h3>
                                            <div class="tg-post-meta">
                                                <span><a href="#">By Admin / </a></span>
                                                <span><a href="#">In Map</a></span>
                                            </div>
                                            <div class="tg-description">
                                                <p>ขั้นตอนในกระบวนการวางแผนการเงินเป็นเรื่องง่าย ๆ ที่จะซับซ้อนมากหากอธิบายเป็นตัวหนังสือเป็นข้อ ๆ ปิรามิดการเงินเป็นภาพช่วยสื่อสารขั้นตอนการวางแผนการเงิน</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--************************************
                                            Pagination Start
                                    *************************************-->
                                    <ul class="tg-pagination">
                                        <li class="tg-prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <!--li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li-->
                                        <li class="tg-next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                    <!--************************************
                                            Pagination End
                                    *************************************-->
                                </div>
                                <!--************************************
                                                Blog List Section End
                                *************************************-->
                                <!--************************************
                                                Sidebar Start
                                *************************************-->
                                <aside id="sidebar" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                    <div class="row">
                                        <!--div class="col-md-12 col-xs-12">
                                            <div class="tg-widget sidebar-search">
                                                <div class="tg-widget-holder">
                                                    <form class="search-form">
                                                        <fieldset>
                                                            <input type="search" placeholder="Search..." class="form-control">
                                                            <button type="submit" class="fa fa-search"></button>
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </div-->
                                        <!--div class="col-md-12 col-xs-12">
                                            <div class="tg-widget widget-categories">
                                                <div class="tg-widget-holder">
                                                    <h3>Categories</h3>
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <em>Web Design</em>
                                                                <i>389</i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <em>Marketing</em>
                                                                <i>256</i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <em>Wordpress</em>
                                                                <i>56</i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <em>Graphic Design</em>
                                                                <i>43</i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <em>Photography</em>
                                                                <i>38</i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <em>eCommerce</em>
                                                                <i>26</i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <em>Html</em>
                                                                <i>3</i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div-->
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
                                        <!--div class="col-md-12 col-xs-12">
                                            <div class="tg-widget widget-accordions">
                                                <div class="tg-widget-holder">
                                                    <h3>Accordions Widget</h3>
                                                    <ul class="tg-haslayout accordion" id="accordion" role="tablist" aria-multiselectable="true">
                                                        <li class="tg-panel panel">
                                                            <div class="tg-panel-heading actives" role="tab" id="headingOne">
                                                                <h4 class="actives">
                                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Our Solution</a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                                <div class="tg-body">
                                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="tg-panel panel">
                                                            <div class="tg-panel-heading" role="tab" id="headingTwo">
                                                                <h4>
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Our Mission</a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                                <div class="tg-body">
                                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="tg-panel panel">
                                                            <div class="tg-panel-heading" role="tab" id="headingThree">
                                                                <h4>
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Our Technology</a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                                <div class="tg-body">
                                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="tg-panel panel">
                                                            <div class="tg-panel-heading" role="tab" id="headingFour">
                                                                <h4>
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">Our Specification</a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                                <div class="tg-body">
                                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xs-12">
                                            <div class="tg-widget widget-flickr">
                                                <div class="tg-widget-holder">
                                                    <h3>Flickr Widget</h3>
                                                    <ul>
                                                        <li>
                                                            <div class="tg-post-img">
                                                                <img src="assets/images/thumbnail/img-25.jpg" alt="image description">
                                                                <div class="tg-img-hover">
                                                                    <a href="#" class="flaticon-plus79"></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="tg-post-img">
                                                                <img src="assets/images/thumbnail/img-26.jpg" alt="image description">
                                                                <div class="tg-img-hover">
                                                                    <a href="#" class="flaticon-plus79"></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="tg-post-img">
                                                                <img src="assets/images/thumbnail/img-27.jpg" alt="image description">
                                                                <div class="tg-img-hover">
                                                                    <a href="#" class="flaticon-plus79"></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="tg-post-img">
                                                                <img src="assets/images/thumbnail/img-28.jpg" alt="image description">
                                                                <div class="tg-img-hover">
                                                                    <a href="#" class="flaticon-plus79"></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="tg-post-img">
                                                                <img src="assets/images/thumbnail/img-29.jpg" alt="image description">
                                                                <div class="tg-img-hover">
                                                                    <a href="#" class="flaticon-plus79"></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="tg-post-img">
                                                                <img src="assets/images/thumbnail/img-30.jpg" alt="image description">
                                                                <div class="tg-img-hover">
                                                                    <a href="#" class="flaticon-plus79"></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div-->
                                    </div>
                                </aside>
                                <!--************************************
                                                Sidebar End
                                *************************************-->
                            </div>
                        </div>
                    </div>
                </div>
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
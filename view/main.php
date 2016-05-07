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
                                    <li class="current-menu-item">
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
                                    <li>
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
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
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
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
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
                                                        <h3>สวยด้วยสุขภาพการเงินที่ดี</h3>
                                                        <div class="tg-description">
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
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
                                        <img src="assets/images/financial_planning_model.png" alt="image description">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-sm-5 tg-displayinlineblock">
                                <div class="tg-virtuallybuild">
                                    <div class="tg-theme-heading">
                                        <h2>Who are you? <span>คุณเป็นใคร ในภูเขาน้ำแข็งทางการเงิน</span></h2>
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
                                                    <img src="assets/images//portfolio/pop_image.png" alt="อ. วิธิวัต โรจนตรีคูณ">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="portfolio masnory tg-haslayout">
                                        <ul id="gallery-cats" class="gallery-cats option-set haslayout">
                                            <li class="select"><a href="#" data-filter="*">All</a></li>
                                            <li><a href="#" data-filter=".construction">พี่เลี้ยงการเงิน</a></li>
                                        </ul>
                                        <div class="row">
                                            <div class="portfolio-content tg-haslayout portfolio-image grid" role="tablist">
                                                <div role="presentation" class="active portfolio-item grid-item construction">
                                                    <div class="product-box">
                                                        <a href="#portfolio-item-one" aria-controls="portfolio-item-one" role="tab" data-toggle="tab">
                                                            <figure><img src="assets/images/portfolio/wipa_thumbnail.png" alt="image description"></figure>
                                                            <div class="tg-img-hover">
                                                                <div class="tg-displaytable">
                                                                    <div class="tg-displaytablecell" data-toggle="modal" data-target=".mentor-modalbox">

                                                                        <i class="fa fa-book"></i>
                                                                        <h4>อ. วิภา เจริญกิจสุพัฒน์</h4>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div role="presentation" class="portfolio-item grid-item construction">
                                                    <div class="product-box">
                                                        <a href="#portfolio-item-two" aria-controls="portfolio-item-two" role="tab" data-toggle="tab">
                                                            <figure><img src="assets/images/portfolio/pop_thumbnail.png" alt="image description"></figure>
                                                            <div class="tg-img-hover">
                                                                <div class="tg-displaytable">
                                                                    <div class="tg-displaytablecell" onclick="window.open('http://www.vihoon.com/?pg=about', '_blank');">
                                                                        <i class="fa fa-book"></i>
                                                                        <h4>อ. วิธิวัต โรจนตรีคูณ</h4>
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
                <section class="tg-main-section tg-haslayout bg-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="tg-theme-heading">
                                    <span>from our</span>
                                    <h2>Blog พารวย</h2>
                                </div>
                            </div>
                            <div id="tg-posts-slider" class="tg-posts">
                                <div class="item">
                                    <div class="tg-post">
                                        <div class="tg-post-img">
                                            <figure>
                                                <a href="#">
                                                    <img src="assets/images/blog/whyplanningMain.jpg" alt="image description">
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
                                                <p>ยุคสมัยเปลี่ยนแปลงไป เราได้รับการศึกษาในระบบมากขึ้น โอกาสมากขึ้น มีการเปลี่ยนจากทำเกษตร...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tg-post">
                                        <div class="tg-post-img">
                                            <figure>
                                                <a href="#">
                                                    <img src="assets/images/blog/financialSitMain.jpg" alt="image description">
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
                                                <p>สถานะการเงินโดยทั่วไปมีอยู่ 6 สถานการณ์: สถานะพึ่งพิง, หนี้สินล้นพ้นตัว, ไม่มีหนี้...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tg-post">
                                        <div class="tg-post-img">
                                            <figure>
                                                <a href="#">
                                                    <img src="assets/images/blog/financialStatusMain.jpg" alt="image description">
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
                                                <p>ทฤษฎีภูเขาน้ำแข็งของซิกมันด์ ฟรอยด์ (Sigmund Freud) บิดาแห่งจิตวิทยาผู้ให้ความสนใจพฤติกรรม...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tg-post">
                                        <div class="tg-post-img">
                                            <figure>
                                                <a href="#">
                                                    <img src="assets/images/blog/blog_piramidMain.jpg" alt="image description">
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
                                                <p>ขั้นตอนในกระบวนการวางแผนการเงินเป็นเรื่องง่าย ๆ ที่จะซับซ้อนมากหากอธิบายเป็นตัวหนังสือเป็นข้อ ๆ...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
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

        <div class="modal fade mentor-modalbox" tabindex="-1" role="dialog">
            <div class="tg-signup-modalbox">
                <h2>MENTOR DETAIl <span class="pull-right" style="cursor: pointer" onclick="$('.mentor-modalbox').modal('hide')">x</span></h2>
                <form style="padding:20px" >
                    <div>
                        <div class="row">
                            <div class="col-sm-4">                                        
                                <img src="assets/images/portfolio/wipa_image.png" alt="อ. วิภา เจริญกิจสุพัฒน์">
                                <br/><br/>
                                <fieldset>
                                    <legend style="text-align: center;">อ.วิภา เจริญกิจสุพัฒน์</legend>
                                </fieldset>
                            </div>
                            <div class="col-sm-8" style="overflow-x:hidden; max-height: 450px;">
                                <fieldset>
                                    <legend>ประวัติการศึกษา</legend>
                                    <li>ปริญญาโท วิทยาศาสตร์มหาบัณฑิต (สาขาเทคโนโลยีสารสนเทศ) มหาวิทยาลัยเกษตรศาสตร์</li>
                                    <li>ปริญญาตรี บริหารธุรกิจบัณฑิต (สาขาระบบสารสนเทศ) เกียรตินิยมอันดับ 1 สถาบันเทคโนโลยีราชมงคล</li>
                                    <li>AFPTTM – Associate Financial Planner Thailand คุณวุฒิวิชาชีพที่ปรึกษาการเงิน จากสมาคมนักวางแผนการเงินไทย</li>
                                    <li>FChFP – Fellow Chartered Financial Practitioner คุณวุฒิทางวิชาชีพสำหรับมืออาชีพ ด้านบริการทางการเงิน จากสมาคมตัวแทนประกันชีวิตและที่ปรึกษาการเงิน</li>
                                    <li>RFC - Registered Financial Consultants วุฒิบัตรที่ปรึกษาการเงิน จากสถาบัน IARFC สมาคมที่ปรึกษาการเงินนานาชาติ ประเทศสหรัฐอเมริกา</li>
                                    <li>ใบอนุญาตผู้แนะนำการลงทุนด้านหลักทรัพย์ สำนักงานคณะกรรมการกำกับหลักทรัพย์และตลาดหลักทรัพย์ (กลต)</li>
                                    <li>ใบอนุญาตตัวแทนประกันชีวิต สำนักงานคณะกรรมการกำกับและส่งเสริมการประกอบธุรกิจประกันภัย (คปภ.)</li></br>
                                    <legend>ประวัติการเป็นวิทยากร</legend>
                                    <li>วิทยากรรับเชิญ โครงการอบรม “บริการด้วยใจ นักขายมืออาชีพ” ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร จังหวัดสมุทรปราการ</li>
                                    <li>วิทยากรรับเชิญ เสวนาเรื่อง “วางแผนการเงิน เรื่องที่ควรรู้ก่อนการซื้อบ้าน” ในมหกรรมบ้าน-คอนโดและสินเชื่อแห่งปี</li>
                                    <li>วิทยากร สัมมนาเชิงปฏิบัติการ “Secret of Money Cat ความลับการจัดการเงินอย่างฉลาด เพื่ออิสรภาพทางการเงิน”</li>
                                    <li>วิทยากร สัมมนาเชิงปฏิบัติการ “เคล็ดลับสร้างความมั่งคั่งอย่างยั่งยืน”</li>
                                    <li>วิทยากรประจำโครงการ Pre-Career Financial Advisor เครือนำทอง บริษัท เอไอเอ จำกัด</li>
                                    <li>วิทยากรบรรยาย “วางแผนภาษีด้วยสินค้าประชีวิต” โครงการ Financial Advisor Standard เครือนำทอง บริษัท เอไอเอ จำกัด</li>
                                    <li>วิทยากรรับเชิญจากสำนักงานตัวแทนคุณชูลักษณ์ สมุทรปราการ หัวข้อ “Regular Activities for Fulltime Agents ทำตามหน้าที่ แล้วหน้าที่จะสอนให้เราทำ”</li></br>
                                    <legend>ประวัติการทำงาน</legend>
                                    <li>กรรมการผู้จัดการบริษัทฟินคีย์ แอ็ดไวเซอรี่ จำกัด</li>
                                    <li>เป็นตัวแทนประกันชีวิตและผู้จัดการฝ่ายขายบริษัท เอไอเอ จำกัด ตั้งแต่ปีพ.ศ. 2546 ถึงปัจจุบัน</li>
                                    <li>ทำงานด้านพัฒนา ติดตั้งและสนับสนุนระบบคอมพิวเตอร์ซอฟต์แวร์ พ.ศ. 2531-2548</li></br>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </form>   
            </div>
        </div>
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
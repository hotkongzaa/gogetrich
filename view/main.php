<?php
session_start();
$now = time();
if (isset($_SESSION['expire'])) {
    if ($now > $_SESSION['expire']) {
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
                    <strong class="logo">
                        <a href="main">
                            <img src="assets/images/logo.png" alt="Constructioner">
                        </a>
                    </strong>
                    <div class="navigation-area">
                        <?php
                        if (empty($_SESSION['username'])) {
                            ?>
                            <ul class="add-nav">
                                <li><a data-toggle="modal" data-target=".login-modalbox" href="#">Login</a></li>
                                <li><a href="registration">Register</a></li>
                            </ul>
                            <?php
                        } else {
                            ?>
                            <ul class="add-nav">
                                <li>Welcome <strong id="login_menu" style="cursor: pointer"><?= $_SESSION['username'] ?></strong></li>
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
                                        <a href="#">Training/Seminar</a>
                                        <ul>
                                            <li>
                                                <a href="trainingSchedule">Training schedule</a>
                                            </li>
                                            <li>
                                                <a href="speaker-list">Speaker</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!--li>
                                        <a href="#">Register</a>
                                    </li-->
                                    <li>
                                        <a href="#">Blog</a>
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
                        <a class="tg-theme-btn" href="scheduleDetail?cname=Secret$%20of%20Money%20Cat%20รุ่นที่%202">ดูรายละเอียด</a>
                        <?php
                        if (empty($_SESSION['username'])) {
                            ?>
                            <a data-toggle="modal" data-target=".login-modalbox" class="tg-theme-btn" href="#">ลงทะเบียน</a>
                            <?php
                        } else {
                            ?>
                            <a class="tg-theme-btn" data-toggle="modal" data-target=".register-modalbox" href="#">ลงทะเบียน</a>
                            <?php
                        }
                        ?>

                        <a class="tg-theme-btn" href="trainingSchedule">ดูหลักสูตรอบรมทั้งหมด</a>
                    </div>
                </div>
                <div class="item">
                    <figure>
                        <img src="assets/images/home-slider/img-02.jpg" alt="image description">
                    </figure>
                    <div class="tg-banner-content">
                        <div class="tg-border-bottomleft">
                            <h1>Virtually <span>bUILD yOUR</span> HOUSE</h1>
                        </div>
                        <a class="tg-theme-btn" href="#">BUILD NOW</a>
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
                                        <div class="tg-service services-content tg-haslayout">
                                            <figure class="tg-sercice-img">
                                                <img src="assets/images/icon-1.jpg" alt="image description">
                                            </figure>
                                            <div class="tg-border-topleft tg-haslayout">
                                                <div class="tg-displaytable">
                                                    <div class="tg-displaytablecell">
                                                        <span class="fa fa-graduation-cap"></span>
                                                        <h3>ล็อคเป้าหมายชีวิต</h3>
                                                        <!--div class="tg-description">
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                                                        </div-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-service tg-haslayout">
                                            <figure class="tg-sercice-img">
                                                <img src="assets/images/icon-2.jpg" alt="image description">
                                            </figure>
                                            <div class="tg-border-topleft tg-haslayout">
                                                <div class="tg-displaytable">
                                                    <div class="tg-displaytablecell">
                                                        <span class="flaticon-star182"></span>
                                                        <h3>จิตและสมองพารวย</h3>
                                                        <!--div class="tg-description">
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                                                        </div-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-service tg-haslayout">
                                            <figure class="tg-sercice-img">
                                                <img src="assets/images/icon-3.jpg" alt="image description">
                                            </figure>
                                            <div class="tg-border-topleft tg-haslayout">
                                                <div class="tg-displaytable">
                                                    <div class="tg-displaytablecell">
                                                        <span class="fa fa-heartbeat"></span>
                                                        <h3>สวยด้วยสุขภาพการเงินที่ดี</h3>
                                                        <!--div class="tg-description">
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                                                        </div-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-service tg-haslayout">
                                            <figure class="tg-sercice-img">
                                                <img src="assets/images/icon-4.jpg" alt="image description">
                                            </figure>
                                            <div class="tg-border-topleft tg-haslayout">
                                                <div class="tg-displaytable">
                                                    <div class="tg-displaytablecell">
                                                        <span class="fa fa-edit"></span>
                                                        <h3>จัดการชีวีด้วยงบการเงิน</h3>
                                                        <!--div class="tg-description">
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                                                        </div-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--                                        <div class="tg-service services-content tg-haslayout">
                                                                                    <figure class="tg-sercice-img">
                                                                                        <img src="assets/images/icon-5.jpg" alt="image description">
                                                                                    </figure>
                                                                                    <div class="tg-border-topleft tg-haslayout">
                                                                                        <div class="tg-displaytable">
                                                                                            <div class="tg-displaytablecell">
                                                                                                <span class="fa fa-angellist"></span>
                                                                                                <h3>เดินมั่นคงด้วยแผนเกษียณ</h3>
                                                                                                div class="tg-description">
                                                                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                                                                                                </div
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="tg-service services-content tg-haslayout">
                                                                                    <figure class="tg-sercice-img">
                                                                                        <img src="assets/images/icon-6.jpg" alt="image description">
                                                                                    </figure>
                                                                                    <div class="tg-border-topleft tg-haslayout">
                                                                                        <div class="tg-displaytable">
                                                                                            <div class="tg-displaytablecell">
                                                                                                <span class="fa fa-user-secret"></span>
                                                                                                <h3>เรียนหาทางลดหย่อนภาษี</h3>
                                                                                                div class="tg-description">
                                                                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                                                                                                </div
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="tg-service services-content tg-haslayout">
                                                                                    <figure class="tg-sercice-img">
                                                                                        <img src="assets/images/icon-7.jpg" alt="image description">
                                                                                    </figure>
                                                                                    <div class="tg-border-topleft tg-haslayout">
                                                                                        <div class="tg-displaytable">
                                                                                            <div class="tg-displaytablecell">
                                                                                                <span class="fa fa-home"></span>
                                                                                                <h3>อสังหาดีๆมีให้ลงทุน</h3>
                                                                                                div class="tg-description">
                                                                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                                                                                                </div
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="tg-service services-content tg-haslayout">
                                                                                    <figure class="tg-sercice-img">
                                                                                        <img src="assets/images/icon-8.jpg" alt="image description">
                                                                                    </figure>
                                                                                    <div class="tg-border-topleft tg-haslayout">
                                                                                        <div class="tg-displaytable">
                                                                                            <div class="tg-displaytablecell">
                                                                                                <span class="fa fa-clock-o"></span>
                                                                                                <h3>เล่นหุ้นต้องศึกษา</h3>
                                                                                                div class="tg-description">
                                                                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                                                                                                </div
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="tg-service services-content tg-haslayout">
                                                                                    <figure class="tg-sercice-img">
                                                                                        <img src="assets/images/icon-9.jpg" alt="image description">
                                                                                    </figure>
                                                                                    <div class="tg-border-topleft tg-haslayout">
                                                                                        <div class="tg-displaytable">
                                                                                            <div class="tg-displaytablecell">
                                                                                                <span class="fa fa-star-o"></span>
                                                                                                <h3>เป้าหมายข้างหน้า คือ อิสระทางการเงิน</h3>
                                                                                                div class="tg-description">
                                                                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                                                                                                </div
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>-->
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
                <section class="tg-main-section tg-haslayout parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="assets/images/who_are_you.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-7 tg-displayinlineblock">
                                <div class="tg-virtual-img tg-haslayout">
                                    <figure>
                                        <img src="assets/images/ice_berg_image_v6_653x310.png" alt="image description">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-sm-5 tg-displayinlineblock">
                                <div class="tg-virtuallybuild">
                                    <div class="tg-theme-heading">
                                        <h2>Who are you? <span>คุณเป็นใคร ในภูเขาน้ำแข็งทางการเงิน</span></h2>
                                    </div>
                                    <div class="tg-description">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud.</p>
                                    </div>
                                    <div class="tg-btn-box">
                                        <a class="tg-theme-btn" href="#">ตรวจสอบเดี๋ยวนี้</a>
                                        <a class="tg-theme-btn" href="#">รายละเอียด</a>
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
                                            <!--div role="tabpanel" class="tab-pane fade" id="portfolio-item-three">
                                                <figure><img src="assets/images//portfolio/img-03.jpg" alt="image description"></figure>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="portfolio-item-four">
                                                <figure><img src="assets/images//portfolio/img-04.jpg" alt="image description"></figure>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade in" id="portfolio-item-five">
                                                <figure><img src="assets/images//portfolio/img-05.jpg" alt="image description"></figure>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="portfolio-item-six">
                                                <figure><img src="assets/images//portfolio/img-06.jpg" alt="image description"></figure>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="portfolio-item-seven">
                                                <figure><img src="assets/images//portfolio/img-07.jpg" alt="image description"></figure>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="portfolio-item-eight">
                                                <figure><img src="assets/images//portfolio/img-08.jpg" alt="image description"></figure>
                                            </div-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="portfolio masnory tg-haslayout">
                                        <ul id="gallery-cats" class="gallery-cats option-set haslayout">
                                            <li class="select"><a href="#" data-filter="*">All</a></li>
                                            <li><a href="#" data-filter=".construction">พี่เลี้ยงการเงิน</a></li>
                                            <!--li><a href="#" data-filter=".digging">Digging</a></li>
                                            <li><a href="#" data-filter=".renovation">Renovation</a></li>
                                            <li><a href="#" data-filter=".interior">Interior</a></li-->
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
                                                <!--div role="presentation" class="portfolio-item grid-item renovation">
                                                    <div class="product-box">
                                                        <a href="#portfolio-item-three" aria-controls="portfolio-item-three" role="tab" data-toggle="tab">
                                                            <figure><img src="assets/images//thumbnail/img-03.jpg" alt="image description"></figure>
                                                            <div class="tg-img-hover">
                                                                <div class="tg-displaytable">
                                                                    <div class="tg-displaytablecell">
                                                                        <i class="fa fa-picture-o"></i>
                                                                        <h4>Exterior Project</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div role="presentation" class="portfolio-item grid-item interior">
                                                    <div class="product-box">
                                                        <a href="#portfolio-item-four" aria-controls="portfolio-item-four" role="tab" data-toggle="tab">
                                                            <figure><img src="assets/images//thumbnail/img-04.jpg" alt="image description"></figure>
                                                            <div class="tg-img-hover">
                                                                <div class="tg-displaytable">
                                                                    <div class="tg-displaytablecell">
                                                                        <i class="fa fa-picture-o"></i>
                                                                        <h4>Exterior Project</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div role="presentation" class="portfolio-item grid-item construction">
                                                    <div class="product-box">
                                                        <a href="#portfolio-item-five" aria-controls="portfolio-item-five" role="tab" data-toggle="tab">
                                                            <figure><img src="assets/images//thumbnail/img-05.jpg" alt="image description"></figure>
                                                            <div class="tg-img-hover">
                                                                <div class="tg-displaytable">
                                                                    <div class="tg-displaytablecell">
                                                                        <i class="fa fa-picture-o"></i>
                                                                        <h4>Exterior Project</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div role="presentation"  class="portfolio-item grid-item digging">
                                                    <div class="product-box">
                                                        <a href="#portfolio-item-six" aria-controls="portfolio-item-six" role="tab" data-toggle="tab">
                                                            <figure><img src="assets/images//thumbnail/img-06.jpg" alt="image description"></figure>
                                                            <div class="tg-img-hover">
                                                                <div class="tg-displaytable">
                                                                    <div class="tg-displaytablecell">
                                                                        <i class="fa fa-picture-o"></i>
                                                                        <h4>Exterior Project</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div role="presentation"  class="portfolio-item grid-item renovation">
                                                    <div class="product-box">
                                                        <a href="#portfolio-item-seven" aria-controls="portfolio-item-seven" role="tab" data-toggle="tab">
                                                            <figure><img src="assets/images//thumbnail/img-07.jpg" alt="image description"></figure>
                                                            <div class="tg-img-hover">
                                                                <div class="tg-displaytable">
                                                                    <div class="tg-displaytablecell">
                                                                        <i class="fa fa-picture-o"></i>
                                                                        <h4>Exterior Project</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div role="presentation"  class="portfolio-item grid-item renovation">
                                                    <div class="product-box">
                                                        <a href="#portfolio-item-eight" aria-controls="portfolio-item-eight" role="tab" data-toggle="tab">
                                                            <figure><img src="assets/images//thumbnail/img-08.jpg" alt="image description"></figure>
                                                            <div class="tg-img-hover">
                                                                <div class="tg-displaytable">
                                                                    <div class="tg-displaytablecell">
                                                                        <i class="fa fa-picture-o"></i>
                                                                        <h4>Exterior Project</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div-->
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
                                Testimonials Start
                *************************************-->
                <section class="tg-main-section tg-haslayout testimonial-image">
                    <div class="container">
                        <div class="row">
                            <div class="tg-testimonials tg-haslayout">
                                <div class="col-sm-5">
                                    <div class="tg-testimonials-img">
                                        <figure><img src="assets/images//img-02.png" alt="image description"></figure>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-7 col-sm-7">
                                    <div id="tg-testi-slider" class="tg-testi-slider">
                                        <div class="item">
                                            <div class="tg-theme-heading">
                                                <span>our happy customers</span>
                                                <h2>Mr. David <span>&amp; Family</span></h2>
                                            </div>
                                            <div class="tg-description">
                                                <blockquote>
                                                    <q>Sed ut perspiciatis unde omnis iste natus error sit tatem accusantium doloremque laudantium, totam.</q>
                                                </blockquote>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="tg-theme-heading">
                                                <span>our happy customers</span>
                                                <h2>Mr. David <span>&amp; Family</span></h2>
                                            </div>
                                            <div class="tg-description">
                                                <blockquote>
                                                    <q>Sed ut perspiciatis unde omnis iste natus error sit tatem accusantium doloremque laudantium, totam.</q>
                                                </blockquote>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="tg-theme-heading">
                                                <span>our happy customers</span>
                                                <h2>Mr. David <span>&amp; Family</span></h2>
                                            </div>
                                            <div class="tg-description">
                                                <blockquote>
                                                    <q>Sed ut perspiciatis unde omnis iste natus error sit tatem accusantium doloremque laudantium, totam.</q>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                                Testimonials End
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
                                                    <img src="assets/images//blog/img-01.jpg" alt="image description">
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
                                            <h3><a href="#">blog title here</a></h3>
                                            <div class="tg-post-meta">
                                                <span><a href="#">By Admin / </a></span>
                                                <span><a href="#">In Map</a></span>
                                            </div>
                                            <div class="tg-description">
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tg-post">
                                        <div class="tg-post-img">
                                            <figure>
                                                <a href="#">
                                                    <img src="assets/images//blog/img-02.jpg" alt="image description">
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
                                            <h3><a href="#">blog title here</a></h3>
                                            <div class="tg-post-meta">
                                                <span><a href="#">By Admin / </a></span>
                                                <span><a href="#">In Map</a></span>
                                            </div>
                                            <div class="tg-description">
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tg-post">
                                        <div class="tg-post-img">
                                            <figure>
                                                <a href="#">
                                                    <img src="assets/images//blog/img-01.jpg" alt="image description">
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
                                            <h3><a href="#">blog title here</a></h3>
                                            <div class="tg-post-meta">
                                                <span><a href="#">By Admin / </a></span>
                                                <span><a href="#">In Map</a></span>
                                            </div>
                                            <div class="tg-description">
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tg-post">
                                        <div class="tg-post-img">
                                            <figure>
                                                <a href="#">
                                                    <img src="assets/images//blog/img-02.jpg" alt="image description">
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
                                            <h3><a href="#">blog title here</a></h3>
                                            <div class="tg-post-meta">
                                                <span><a href="#">By Admin / </a></span>
                                                <span><a href="#">In Map</a></span>
                                            </div>
                                            <div class="tg-description">
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tg-post">
                                        <div class="tg-post-img">
                                            <figure>
                                                <a href="#">
                                                    <img src="assets/images//blog/img-01.jpg" alt="image description">
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
                                            <h3><a href="#">blog title here</a></h3>
                                            <div class="tg-post-meta">
                                                <span><a href="#">By Admin / </a></span>
                                                <span><a href="#">In Map</a></span>
                                            </div>
                                            <div class="tg-description">
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tg-post">
                                        <div class="tg-post-img">
                                            <figure>
                                                <a href="#">
                                                    <img src="assets/images//blog/img-02.jpg" alt="image description">
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
                                            <h3><a href="#">blog title here</a></h3>
                                            <div class="tg-post-meta">
                                                <span><a href="#">By Admin / </a></span>
                                                <span><a href="#">In Map</a></span>
                                            </div>
                                            <div class="tg-description">
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
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
        <div class="modal fade register-modalbox" tabindex="-1" role="dialog">
            <div class="tg-signup-modalbox">
                <h2>REGISTRATION FORM <span class="pull-right" style="cursor: pointer" onclick="$('.register-modalbox').modal('hide')">x</span></h2>

                <form style="padding:20px" id="registerSeminar">
                    <div style="overflow: auto;max-height: 450px;">
                        <?php
                        $sqlgetUserDetail = "SELECT * FROM RICH_CUSTOMER WHERE CUS_ID = '" . $_SESSION['userId'] . "'";
                        $res = mysql_query($sqlgetUserDetail);
                        $row = mysql_fetch_assoc($res);
                        ?>
                        <fieldset>
                            <legend>User Profile</legend>
                            <table class="table table-condensed table-hover schedule_detail_table">
                                <tbody>
                                    <tr>
                                        <td style="text-align: left;" width="150px">Username: </td>
                                        <td style="text-align: left;"><?= $row['CUS_USERNAME'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;" width="150px">Name: </td>
                                        <td style="text-align: left;"><?= $row['CUS_FIRST_NAME'] ?> <?= $row['CUS_LAST_NAME'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;" width="150px">Email: </td>
                                        <td style="text-align: left;"><?= $row['CUS_EMAIL'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;" width="150px">Gender: </td>
                                        <td style="text-align: left;"><?= $row['CUS_GENDER'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;" width="150px">Contact Address: </td>
                                        <td style="text-align: left;"><?= $row['CUS_CONTACT_ADDRESS'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;" width="150px">Receipt Address: </td>
                                        <td style="text-align: left;"><?= $row['CUS_RECEIPT_ADDRESS'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;" width="150px">Phone number: </td>
                                        <td style="text-align: left;"><?= $row['CUS_PHONE_NUMBER'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;" width="150px">Facebook: </td>
                                        <td style="text-align: left;"><?= $row['CUS_FACEBOOK_ADDRESS'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;" width="150px">Register Date time: </td>
                                        <td style="text-align: left;"><?= $row['CREATED_DATE_TIME'] ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <button class="btn btn-sm" type="submit"><i class="fa fa-pencil"></i> Edit Profile</button><br/><br/>
                        </fieldset>
                        <fieldset>
                            <legend>Register Detail</legend>
                            <div class="form-group">
                                <strong>ช่องทางการจ่ายที่เลือก (Payment method) *</strong>
                                <br/>
                                <input type="radio" name="paymentTerm" value="1"> จ่ายเงินสดหน้างาน ในวันแรกของการอบรม
                                <br>
                                <input type="radio" name="paymentTerm" value="2"> โอนเงินเข้าบัญชี (ชื่อบัญชี "บจ. เอสอี ทอล์ค" ธนาคารกรุงเทพ เลขที่บัญชี 021-7-08688-3, กรุณาส่งสำเนาหลักฐานการโอนเงินมาที่ pinhatai.d@gmail.com)
                            </div>
                            <div class="form-group">
                                <strong>คลิกแสดงสิทธิ์เพื่อรับส่วนลด</strong>
                                <br/>
                                <input type="checkbox" name="seminarDiscount" value="ลงทะเบียนก่อนหรือภายในวันที่ 28 พฤศจิกายน 2558"> ลงทะเบียนก่อนหรือภายในวันที่ 28 พฤศจิกายน 2558
                                <br/>
                                <input type="checkbox" name="seminarDiscount" value="มาเป็นคู่ หรือ กลุ่ม จำนวน 5 ท่านต่อกลุ่ม"> มาเป็นคู่ หรือ กลุ่ม จำนวน 5 ท่านต่อกลุ่ม
                                <br/>
                                <input type="checkbox" name="seminarDiscount" value="แนะนำผ่าน Finkey Group หรือยืนยันส่วนลดกับเจ้าหน้าที่ทางโทรศัพท์"> แนะนำผ่าน Finkey Group หรือยืนยันส่วนลดกับเจ้าหน้าที่ทางโทรศัพท์
                                <br/>
                                <input type="checkbox" name="seminarDiscount" value="โปรโมชั่นพิเศษ (กรุณาติดต่อคุณปิ่นหทัย 081-9023872 เพื่อสอบถามและขอรับโปรโมชั่นพิเศษ)"> โปรโมชั่นพิเศษ (กรุณาติดต่อคุณปิ่นหทัย 081-9023872 เพื่อสอบถามและขอรับโปรโมชั่นพิเศษ)
                            </div>
                            <div class="form-group">
                                <strong>หากได้รับส่วนลดผ่านการแนะนำ กรุณาระบุชื่อผู้แนะนำ</strong>
                                <input type="text" name="inviteSuggest" id="inviteSuggest" placeholder="ชื่อผู้แนะนำ"/> 
                            </div>
                            <div class="form-group">
                                <strong>ท่านต้องการความรู้ไปเพื่อประโยชน์ด้านใด (เลือกได้มากกว่า 1 ข้อ)</strong>
                                <br/>
                                <input type="checkbox" name="knowledgeFor" value="เพื่อจัดการค่าใช้จ่าย หรือลดรายจ่าย"> เพื่อจัดการค่าใช้จ่าย หรือลดรายจ่าย
                                <br/>
                                <input type="checkbox" name="knowledgeFor" value="เพื่อหาทางลดภาระหนี้สิน ให้ลดได้เร็วที่สุด"> เพื่อหาทางลดภาระหนี้สิน ให้ลดได้เร็วที่สุด
                                <br/>
                                <input type="checkbox" name="knowledgeFor" value="เพื่อวางแผนภาษีบุคคล ลดการจ่ายภาษี"> เพื่อวางแผนภาษีบุคคล ลดการจ่ายภาษี
                                <br/>
                                <input type="checkbox" name="knowledgeFor" value="เพื่อวางแผนประกันชีวิตได้อย่างคุ้มค่ามากที่สุด"> เพื่อวางแผนประกันชีวิตได้อย่างคุ้มค่ามากที่สุด
                                <br/>
                                <input type="checkbox" name="knowledgeFor" value="เพื่อหาทางเพิ่มรายได้"> เพื่อหาทางเพิ่มรายได้
                                <br/>
                                <input type="checkbox" name="knowledgeFor" value="เพื่อเริ่มต้นลงทุนอย่างเข้าใจ"> เพื่อเริ่มต้นลงทุนอย่างเข้าใจ
                                <br/>
                                <input type="checkbox" name="knowledgeFor" value="อื่นๆ" id="benifitOther"> อื่นๆ

                            </div>
                            <div class="form-group" id="hideReasonBenifitOther">
                                <strong>หากเลือก อื่นๆ โปรดระบุ</strong>
                                <textarea name="other_register" id="otherKnowledgeForReason" cols="20" style="height: 150px;"></textarea>
                            </div>
                            <div class="form-group">
                                <strong>ท่านทราบข่าวสารนี้จากแหล่งข้อมูลใด</strong>
                                <br/>
                                <input type="checkbox" name="newsFrom" value="https://www.facebook.com/RichPlanning"> <a href="https://www.facebook.com/RichPlanning" target="_blank">https://www.facebook.com/RichPlanning</a>
                                <br/>
                                <input type="checkbox" name="newsFrom" value="https://www.facebook.com/FinkeyGroup"> <a href="https://www.facebook.com/FinkeyGroup" target="_blank">https://www.facebook.com/FinkeyGroup</a>
                                <br/>
                                <input type="checkbox" name="newsFrom" value="ข่าวประชาสัมพันธ์ (line, email)"> ข่าวประชาสัมพันธ์ (line, email)
                                <br/>
                                <input type="checkbox" name="newsFrom" value="เพื่อนแนะนำ"> เพื่อนแนะนำ
                            </div>
                            <div class="form-group">
                                <strong>ยืนยันการลงทะเบียน *</strong>
                                <br/>
                                <input type="checkbox" name="confirmRegister">  ข้าพเจ้าขอยืนยันการลงทะเบียนหลักสูตร Secret$ of Money Cat และรับทราบว่า หากจะยกเลิกการลงทะเบียน ต้องแจ้งทางผู้จัดหลักสูตร อย่างน้อย 7 วันก่อนวันอบรมจึงจะได้รับเงินค่าเรียนคืนเต็มจำนวน  ข้าพเจ้ายินยอมที่จะเสียอัตราค่าเรียนเต็มจำนวนหากไม่ได้เข้าเรียนและไม่ได้แจ้งยกเลิกล่วงหน้าก่อนวันเรียน อย่างน้อย 7 วัน
                            </div>
                        </fieldset>
                    </div>
                    <button class="tg-theme-btn tg-theme-btn-lg" type="submit">ลงทะเบียนสัมนา</button>
                </form>

            </div>
        </div>
        <div class="modal fade mentor-modalbox" tabindex="-1" role="dialog">
            <div class="tg-signup-modalbox">
                <h2>MENTOR DETAIl</h2>
                <form style="padding:20px" >
                    <div>
                        <div class="row">
                            <div class="col-sm-4">                                        
                                <img src="assets/images/portfolio/wipa_image.png" alt="อ. วิภา เจริญกิจสุพัฒน์">
                                <br/>
                                <fieldset>
                                    <legend style="text-align: center;">อ.วิภา เจริญกิจสุพัฒน์</legend>
                                </fieldset>
                            </div>
                            <div class="col-sm-8">
                                <fieldset>
                                    <legend>ประวัติ และคุณวุฒิ​</legend>
                                    <li>AFPTTM – Associate Financial Planner Thailand คุณวุฒิวิชาชีพที่ปรึกษาการเงิน จากสมาคมนักวางแผนการเงินไทย</li>
                                    <li>FChFP – Fellow Chartered Financial Practitioner คุณวุฒิทางวิชาชีพสำหรับมืออาชีพ ด้านบริการทางการเงิน จากสมาคมตัวแทนประกันชีวิตและที่ปรึกษาการเงิน</li>
                                    <li>RFC - Registered Financial Consultants วุฒิบัตรที่ปรึกษาการเงิน จากสถาบัน IARFC สมาคมที่ปรึกษาการเงินนานาชาติ ประเทศสหรัฐอเมริกา </li>
                                    <li>ใบอนุญาตผู้แนะนำการลงทุนด้านหลักทรัพย์ สำนักงานคณะกรรมการกำกับหลักทรัพย์และตลาดหลักทรัพย์ (กลต)</li>
                                    <li>ใบอนุญาตตัวแทนประกันชีวิต สำนักงานคณะกรรมการกำกับและส่งเสริมการประกอบธุรกิจประกันภัย (คปภ.)</li>
                                    <li>ปริญญาโท วิทยาศาสตร์มหาบัณฑิต (สาขาเทคโนโลยีสารสนเทศ) มหาวิทยาลัยเกษตรศาสตร์</p>
                                    <li>ปริญญาตรี บริหารธุรกิจบัณฑิต (สาขาระบบสารสนเทศ) เกียรตินิยมอันดับ 1 สถาบันเทคโนโลยีและอาชีวศึกษา</li>
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
    </body>
    <style type="text/css">
        .linkHover:hover{
            color:#ffcc33;
            cursor: pointer;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#hideReasonBenifitOther").hide();
            $("#benifitOther").click(function () {
                if (document.getElementById('benifitOther').checked) {
                    $("#hideReasonBenifitOther").show();
                } else {
                    $("#hideReasonBenifitOther").hide();
                }
            });
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
            var formRegisterSeminar = $('#registerSeminar');
            var errorHandlers = $('.errorHandler', formRegisterSeminar);
            formRegisterSeminar.validate({
                rules: {
                    paymentTerm: {
                        required: true
                    },
                    confirmRegister: {
                        required: true
                    }
                },
                submitHandler: function (form) {
                    errorHandlers.hide();
                    var seminarDiscount = "";
                    $('input[name="seminarDiscount"]:checked').each(function () {
                        seminarDiscount += this.value + "||";
                    });
                    var knowledgeFor = "";
                    $('input[name="knowledgeFor"]:checked').each(function () {
                        knowledgeFor += this.value + "||";
                    });
                    var inviteSuggest = $("#inviteSuggest").val();
                    var newsFrom = "";
                    $('input[name="newsFrom"]:checked').each(function () {
                        newsFrom += this.value + "||";
                    });
                    var otherKnowledgeForReason = $("#otherKnowledgeForReason").val();

                    var paymentTerm = $('input:radio[name=paymentTerm]').filter(":checked").val();

                    $.ajax({
                        url: "../model/com.gogetrich.function/CheckAndSaveEnrollment.php",
                        type: 'POST',
                        data: {'custID': '<?php
                        if (isset($_SESSION['userId'])) {
                            echo $_SESSION['userId'];
                        } else {
                            echo '';
                        }
                        ?>', 'courseID': 'SECRETMONEY01', 'seminarDiscount': seminarDiscount, 'knowledgeFor': knowledgeFor, 'inviteSuggest': inviteSuggest, 'newsFrom': newsFrom, 'otherKnowledgeForReason': otherKnowledgeForReason, 'paymentTerm': paymentTerm},
                        success: function (data, textStatus, jqXHR) {
                            if (data == 200) {
                                alert("ลงทะเบียนเรียบร้อยแล้ว");
                                window.location.href = 'scheduleDetail?cname=Secret$%20of%20Money%20Cat%20รุ่นที่%202';
                            } else {
                                alert(data);
                                window.location.href = 'main';
                            }
                        }
                    });

                },
                invalidHandler: function (event, validator) {//display error alert on form submit
                    errorHandlers.show();
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
            var formLogin = $(form).serialize();
            $.ajax({
                url: "../model/com.gogetrich.function/LoginSubmit.php",
                type: 'POST',
                data: {'username': $("#username").val(), 'password': $("#password").val()},
                success: function (data, textStatus, jqXHR) {
                    if (data == 503) {
                        alert("Username/password is invalid");
                    } else {
                        window.location = 'trainingSchedule';
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
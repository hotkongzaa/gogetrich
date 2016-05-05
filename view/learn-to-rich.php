<?php
$currentFile = basename(__FILE__, '.php');
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
        <meta http-equiv=Content-Type content="text/html; charset=utf-8">
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
                                    <ol class="tg-breadcrumb">
                                        <li><a href="#">Home</a></li>
                                        <li class="active">LEARN TO RICH</li>
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
                                            <li class="current-menu-item">
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
                            Main Start
            *************************************-->
            <main id="main" class="tg-haslayout">
                <div class="container">
                    <!--************************************
                                    Portfolio Start
                    *************************************-->
                    <div class="tg-main-section tg-haslayout">
                        <div class="tg-portfolio tg-portfolio-list tg-haslayout">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="tg-theme-heading">
                                        <span>LEARN TO RICH</span>
                                        <h2>เรียนรู้สู่ความรวย</h2>
                                    </div>
                                </div>
                            </div>
                            <!--div class="row">
                                <div class="col-sm-12">
                                    <ul id="gallery-cats" class="gallery-cats option-set haslayout">
                                        <li class="select"><a href="#" data-filter="*">ทั้งหมด</a></li>
                                        <li><a href="#" data-filter=".construction">ล็อคเป้าหมายชีวิต</a></li>
                                        <li><a href="#" data-filter=".digging">จิตและสมองพารวย</a></li>
                                        <li><a href="#" data-filter=".renovation">สวยด้วยสุขภาพการเงินที่ดี</a></li>
                                        <li><a href="#" data-filter=".interior">จัดการชีวีด้วยงบการเงิน</a></li>
                                        <li><a href="#" data-filter=".interior">เดินมั่นคงด้วยแผนเกษียณ</a></li>
                                        <li><a href="#" data-filter=".interior">เรียนหนทางลดหย่อนภาษี</a></li>
                                        <li><a href="#" data-filter=".interior">อสังหาดีๆมีให้ลงทุน</a></li>
                                        <li><a href="#" data-filter=".interior">เล่นหุ้นต้องศึกษา</a></li>
                                        <li><a href="#" data-filter=".interior">อิสระทางการเงิน</a></li>
                                    </ul>
                                </div>
                            </div-->
                            
                            <div class="portfolio masnory tg-haslayout">
                                <div class="portfolio-content tg-haslayout list" role="tablist">
                                    <div class="portfolio-item grid-item dentist">
                                        <div class="product-box">
                                            <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                                                <div class="row">
                                                    <div class="tg-portfolio-img">
                                                        <figure><img src="assets/images/learn-to-rich/learn-to-rich-1.jpg" alt="image description"></figure>
                                                        <div class="tg-img-hover">
                                                            <ul class="tg-member-hover-icons">
                                                                <li><a href="#"><i class="flaticon-plus79"></i></a></li>
                                                                <li><a href="#"><i class="flaticon-share55"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="tg-border-topleft tg-portfolio-content" style="height:321px !important;">
                                                        <div class="tg-theme-heading">
                                                            <!--span>Graphic Design, Photoshop</span-->
                                                            <h2><a href="life-target?fPage=<?= $currentFile ?>">ล็อคเป้าหมายชีวิต</a></h2>
                                                        </div>
                                                        <div class="tg-description">
                                                            <p>&emsp;&emsp;&emsp;ความรู้การเงินทำให้เรารู้วิธีสร้างเป้าหมายการเงิน เหมือนมีตะกร้าเงินหลาย ๆ 
                                                                ใบที่จะค่อยกักเก็บเงินให้คุณตามเป้าหมายการเงินที่สนับสนุนเป้าหมายชีวิตของคุณ 
                                                                หรืออย่างน้อยคุณมีตะกร้า “เป้าหมายอิสรภาพการเงิน” ที่ชัดเจนว่าต้องมีเงินเท่าไร 
                                                                ตอนอายุเท่าไรตามที่เรากำหนด</p>
                                                        </div>
                                                        <a class="tg-viewmore-btn" href="life-target?fPage=<?= $currentFile ?>">View More »</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-item grid-item renovation">
                                        <div class="product-box">
                                            <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                                                <div class="row">
                                                    <div class="tg-portfolio-img">
                                                        <figure><img src="assets/images/learn-to-rich/learn-to-rich-2.jpg" alt="image description"></figure>
                                                        <div class="tg-img-hover">
                                                            <ul class="tg-member-hover-icons">
                                                                <li><a href="#"><i class="flaticon-plus79"></i></a></li>
                                                                <li><a href="#"><i class="flaticon-share55"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="tg-border-topleft tg-portfolio-content" style="height:321px !important;">
                                                        <div class="tg-theme-heading">
                                                            <!--span>Graphic Design, Photoshop</span-->
                                                            <h2><a href="mind-and-brain-take-to-rich?fPage=<?= $currentFile ?>">จิตและสมองพารวย</a></h2>
                                                        </div>
                                                        <div class="tg-description">
                                                            <p>&emsp;&emsp;&emsp;การพัฒนาทักษะการเงินนอกจากมิติตัวเลขแล้วยังมีมิติของการรับรู้ ความเชื่อเกี่ยวกับเงิน ภาวะผู้นำและระดับของการให้ 
                                                                การได้รับความรู้ควบคู่กันไปเพื่อปรับในระดับจิตใต้สำนึก จึงจะแก้ปัญหาได้อย่างแท้จริง การปลูกฝังการรับรู้การทำงานของเงิน 
                                                                ต้องพัฒนาให้เกิดทักษะการเงินใหม่ จึงจะสามารถสร้างให้เกิดอิสรภาพการเงินได้ในระยะยาว</p>
                                                        </div>
                                                        <a class="tg-viewmore-btn" href="mind-and-brain-take-to-rich?fPage=<?= $currentFile ?>">View More »</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-item grid-item construction">
                                        <div class="product-box">
                                            <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                                                <div class="row">
                                                    <div class="tg-portfolio-img">
                                                        <figure><img src="assets/images/learn-to-rich/learn-to-rich-3.jpg" alt="image description"></figure>
                                                        <div class="tg-img-hover">
                                                            <ul class="tg-member-hover-icons">
                                                                <li><a href="#"><i class="flaticon-plus79"></i></a></li>
                                                                <li><a href="#"><i class="flaticon-share55"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="tg-border-topleft tg-portfolio-content" style="height:321px !important;">
                                                        <div class="tg-theme-heading">
                                                            <!--span></span-->
                                                            <h2><a href="good-plan-good-health?fPage=<?= $currentFile ?>">สวยด้วยสุขภาพการเงินที่ดี</a></h2>
                                                        </div>
                                                        <div class="tg-description">
                                                            <p>&emsp;&emsp;&emsp;สวยหล่อด้วยสุขภาพการเงินที่ดี จากภายในสู่ภายนอก สุขภาพการเงินที่ดีสร้างความสงบสุขเติมเต็ม 
                                                                เป็นพลังงานสงบที่ผู้คนรอบข้างสัมผัสได้</p>
                                                            <p>&emsp;&emsp;&emsp;สุขภาพการเงินที่ดีเป็นอย่างไร? ไม่กังวลค่าใช้จ่ายที่เกิดขึ้นในทุกช่วงของชีวิต รายรับ - รายจ่ายปัจจุบันสมดุล 
                                                                เตรียมพร้อมค่าใช้จ่ายอนาคตในสถานการณ์ปกติ และพร้อมในสถานการณ์ไม่ปกติ</p>
                                                        </div>
                                                        <a class="tg-viewmore-btn" href="good-plan-good-health?fPage=<?= $currentFile ?>">View More »</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-item grid-item digging">
                                        <div class="product-box">
                                            <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                                                <div class="row">
                                                    <div class="tg-portfolio-img">
                                                        <figure><img src="assets/images/learn-to-rich/learn-to-rich-4.jpg" alt="image description"></figure>
                                                        <div class="tg-img-hover">
                                                            <ul class="tg-member-hover-icons">
                                                                <li><a href="#"><i class="flaticon-plus79"></i></a></li>
                                                                <li><a href="#"><i class="flaticon-share55"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="tg-border-topleft tg-portfolio-content" style="height:321px !important;">
                                                        <div class="tg-theme-heading">
                                                            <!--span></span-->
                                                            <h2><a href="life-by-financial?fPage=<?= $currentFile ?>">จัดการชีวีด้วยงบการเงิน</a></h2>
                                                        </div>
                                                        <div class="tg-description">
                                                            <p>&emsp;&emsp;&emsp;จากการประเมินสุขภาพการเงิน เราจะพบต้นเหตุมาจากกการบริหารจัดการเงิน การขาดความรู้ความเข้าใจในการจัดการเงิน 
                                                                ทำให้ค่าใช้จ่ายสูง มีเงินออมเหลือน้อย การบริหารจัดการเงินง่ายๆ เพื่อสุขภาพการเงินที่ดี</p>
                                                        </div>
                                                        <a class="tg-viewmore-btn" href="life-by-financial?fPage=<?= $currentFile ?>">View More »</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-item grid-item interior">
                                        <div class="product-box">
                                            <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                                                <div class="row">
                                                    <div class="tg-portfolio-img">
                                                        <figure><img src="assets/images/learn-to-rich/learn-to-rich-5.jpg" alt="image description"></figure>
                                                        <div class="tg-img-hover">
                                                            <ul class="tg-member-hover-icons">
                                                                <li><a href="#"><i class="flaticon-plus79"></i></a></li>
                                                                <li><a href="#"><i class="flaticon-share55"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="tg-border-topleft tg-portfolio-content" style="height:321px !important;">
                                                        <div class="tg-theme-heading">
                                                            <!--span></span-->
                                                            <h2><a href="perfect-life-with-retirement?fPage=<?= $currentFile ?>">เดินมั่นคงด้วยแผนเกษียณ</a></h2>
                                                        </div>
                                                        <div class="tg-description">
                                                            <p>&emsp;&emsp;&emsp;คนส่วนใหญ่อายุใกล้เกษียณจะเริ่มสนใจเตรียม อายุที่สนใจเตรียมเงินเกษียณอายุคือ คนอายุ 40-45 ปี ขึ้นไป 
                                                                ทำให้เป็นภาระหนักในการเตรียมเงินเกษียณในเวลาทำงานที่เหลือสั้น ๆ</p>
                                                        </div>
                                                        <a class="tg-viewmore-btn" href="perfect-life-with-retirement?fPage=<?= $currentFile ?>">View More »</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-item grid-item interior">
                                        <div class="product-box">
                                            <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                                                <div class="row">
                                                    <div class="tg-portfolio-img">
                                                        <figure><img src="assets/images/learn-to-rich/learn-to-rich-6.jpg" alt="image description"></figure>
                                                        <div class="tg-img-hover">
                                                            <ul class="tg-member-hover-icons">
                                                                <li><a href="#"><i class="flaticon-plus79"></i></a></li>
                                                                <li><a href="#"><i class="flaticon-share55"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="tg-border-topleft tg-portfolio-content" style="height:321px !important;">
                                                        <div class="tg-theme-heading">
                                                            <!--span></span-->
                                                            <h2><a href="way-to-deduct-tax?fPage=<?= $currentFile ?>">เรียนหนทางลดหย่อนภาษี</a></h2>
                                                        </div>
                                                        <div class="tg-description">
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p>
                                                        </div>
                                                        <a class="tg-viewmore-btn" href="way-to-deduct-tax?fPage=<?= $currentFile ?>">View More »</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-item grid-item interior">
                                        <div class="product-box">
                                            <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                                                <div class="row">
                                                    <div class="tg-portfolio-img">
                                                        <figure><img src="assets/images/learn-to-rich/learn-to-rich-7.jpg" alt="image description"></figure>
                                                        <div class="tg-img-hover">
                                                            <ul class="tg-member-hover-icons">
                                                                <li><a href="#"><i class="flaticon-plus79"></i></a></li>
                                                                <li><a href="#"><i class="flaticon-share55"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="tg-border-topleft tg-portfolio-content" style="height:321px !important;">
                                                        <div class="tg-theme-heading">
                                                            <!--span></span-->
                                                            <h2><a href="property-investment?fPage=<?= $currentFile ?>">อสังหาดีๆมีให้ลงทุน</a></h2>
                                                        </div>
                                                        <div class="tg-description">
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p>
                                                        </div>
                                                        <a class="tg-viewmore-btn" href="property-investment?fPage=<?= $currentFile ?>">View More »</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-item grid-item interior">
                                        <div class="product-box">
                                            <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                                                <div class="row">
                                                    <div class="tg-portfolio-img">
                                                        <figure><img src="assets/images/learn-to-rich/learn-to-rich-8.jpg" alt="image description"></figure>
                                                        <div class="tg-img-hover">
                                                            <ul class="tg-member-hover-icons">
                                                                <li><a href="#"><i class="flaticon-plus79"></i></a></li>
                                                                <li><a href="#"><i class="flaticon-share55"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="tg-border-topleft tg-portfolio-content" style="height:321px !important;">
                                                        <div class="tg-theme-heading">
                                                            <!--span></span-->
                                                            <h2><a href="learn-to-invest?fPage=<?= $currentFile ?>">เล่นหุ้นต้องศึกษา</a></h2>
                                                        </div>
                                                        <div class="tg-description">
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p>
                                                        </div>
                                                        <a class="tg-viewmore-btn" href="learn-to-invest?fPage=<?= $currentFile ?>">View More »</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-item grid-item interior">
                                        <div class="product-box">
                                            <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                                                <div class="row">
                                                    <div class="tg-portfolio-img">
                                                        <figure><img src="assets/images/learn-to-rich/learn-to-rich-9.jpg" alt="image description"></figure>
                                                        <div class="tg-img-hover">
                                                            <ul class="tg-member-hover-icons">
                                                                <li><a href="#"><i class="flaticon-plus79"></i></a></li>
                                                                <li><a href="#"><i class="flaticon-share55"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="tg-border-topleft tg-portfolio-content" style="height:321px !important;">
                                                        <div class="tg-theme-heading">
                                                            <!--span></span-->
                                                            <h2><a href="money-freedom?fPage=<?= $currentFile ?>">อิสระทางการเงิน</a></h2>
                                                        </div>
                                                        <div class="tg-description">
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p>
                                                        </div>
                                                        <a class="tg-viewmore-btn" href="money-freedom?fPage=<?= $currentFile ?>">View More »</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--************************************
                                    Portfolio End
                    *************************************-->
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
        <div class="scroll-top-wrapper ">
            <span class="scroll-top-inner">
                <i class="fa fa-2x fa-arrow-circle-up"></i>
            </span>
        </div>
        <!--************************************
                        Popup End
        *************************************-->
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
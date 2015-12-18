<?php
session_start();
$now = time();
if (isset($_SESSION['expire'])) {
    if ($now > $_SESSION['expire']) {
        session_destroy();
    }
}
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
            <div class="tg-banner tg-haslayout parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="assets/images/page-banner-img/img-01.jpg">
                <div class="tg-banner-holder">
                    <div class="container">
                        <div class="tg-displaytable">
                            <div class="tg-displaytablecell">
                                <div class="banner-content tg-haslayout">
                                    <h1>OUR MENTOR</h1>
                                    <ol class="tg-breadcrumb">
                                        <li><a href="#">Home</a></li>
                                        <li class="active">OUR MENTOR</li>
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
                                    <li>
                                        <a href="main">Home</a>
                                    </li>
                                    <li >
                                        <a href="aboutus">About</a>
                                    </li>
                                    <li class="current-menu-item">
                                        <a href="#">Training/Seminar</a>
                                        <ul>
                                            <li>
                                                <a href="trainingSchedule">Training schedule</a>
                                            </li>
                                            <li class="current-menu-item">
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
                                    <div class="tg-theme-heading" style="cursor: pointer;">
                                        <span>Our Mentor</span>
                                        <h2>พี่เลี้ยงพารวย</h2>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <ul id="gallery-cats" class="gallery-cats option-set haslayout">
                                        <li class="select"><a href="#" data-filter="*">All</a></li>
                                        <li><a href="#" data-filter=".construction">พี่เลี้ยงการเงิน</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio masnory tg-haslayout">
                                <div class="portfolio-content tg-haslayout list" role="tablist" >
                                    <div class="portfolio-item grid-item dentist">
                                        <div class="product-box">
                                            <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                                                <div class="row">
                                                    <div class="tg-portfolio-img">
                                                        <figure><img src="assets/images/portfolio/img-10.jpg" alt="image description"></figure>
                                                        <div class="tg-img-hover">
                                                            <ul class="tg-member-hover-icons">
                                                                <li><a href="#"><i class="flaticon-plus79"></i></a></li>
                                                                <li><a href="#"><i class="flaticon-share55"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12" >
                                                <div class="row">
                                                    <div class="tg-border-topleft tg-portfolio-content">
                                                        <div class="tg-theme-heading">
                                                            <span>นักวางแผนการเงิน</span>
                                                            <h2><a href="#" data-toggle="modal" data-target=".mentor-modalbox">อ. วิภา เจริญกิจสุพัฒน์ (พี่เกียก)</a></h2>
                                                        </div>
                                                        <div class="tg-description" style="height: 150px!important;">
                                                            <p>"สามสิ่งสำคัญ ในความรู้ของการจัดการการเงิน ที่พี่อยากจะแชร์และแบ่งปันคนไทยทุกคน ได้แก่ การวางแผนงบการเงิน การอยู่อย่างพอเพียง และการใช้ชีวิตอย่างมีความสุข ...ซึ่งทุกคนทำได้  ขอเพียงรู้จักจัดการเงินอย่างฉลาด อิสระภาพทางการเงินและการใช้ชีวิต มันเป็นไปได้....และนี่แหละ คือ โชค ที่ทุกคนต้องการมี"</p>
                                                        </div>
                                                        <a class="tg-viewmore-btn" href="#" data-toggle="modal" data-target=".mentor-modalbox">View More »</a>
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
                                                        <figure><img src="assets/images/portfolio/img-11.jpg" alt="image description"></figure>
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
                                                    <div class="tg-border-topleft tg-portfolio-content">
                                                        <div class="tg-theme-heading">
                                                            <span>ผู้เชี่ยวชาญด้านหุ้น และอสังหาริมทรัพย์</span>
                                                            <h2><a href="#" onclick="window.open('http://www.vihoon.com/?pg=about', '_blank');">อ. วิธิวัต โรจนตรีคูณ (พี่ป๊อป)</a></h2>
                                                        </div>
                                                        <div class="tg-description" style="height: 150px!important;">
                                                            <p>วิธิวัต โรจนตรีคุณ เทรนเนอร์ผู้เชี่ยวชาญด้านหุ้น และอสังหาริมทรัพย์ที่น่าจับตามองมากที่สุดคนหนึ่งของไทยในยุคนี้ เติบโตในครอบครัวนักลงทุนทั้งหุ้นและอสังหาริมทรัพย์</p>
                                                        </div>
                                                        <a class="tg-viewmore-btn" href="#" onclick="window.open('http://www.vihoon.com/?pg=about', '_blank');">View More »</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--div class="portfolio-item grid-item construction">
                                        <div class="product-box">
                                            <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                                                <div class="row">
                                                    <div class="tg-portfolio-img">
                                                        <figure><img src="assets/images/portfolio/img-09.jpg" alt="image description"></figure>
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
                                                    <div class="tg-border-topleft tg-portfolio-content">
                                                        <div class="tg-theme-heading">
                                                            <span>Graphic Design, Photoshop</span>
                                                            <h2><a href="#">Lorem ipsum dolor sit amet, consectetuer elit</a></h2>
                                                        </div>
                                                        <div class="tg-description">
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p>
                                                        </div>
                                                        <a class="tg-viewmore-btn" href="#">View More »</a>
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
                                                        <figure><img src="assets/images/portfolio/img-12.jpg" alt="image description"></figure>
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
                                                    <div class="tg-border-topleft tg-portfolio-content">
                                                        <div class="tg-theme-heading">
                                                            <span>Graphic Design, Photoshop</span>
                                                            <h2><a href="#">Lorem ipsum dolor sit amet, consectetuer elit</a></h2>
                                                        </div>
                                                        <div class="tg-description">
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p>
                                                        </div>
                                                        <a class="tg-viewmore-btn" href="#">View More »</a>
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
                                                        <figure><img src="assets/images/portfolio/img-13.jpg" alt="image description"></figure>
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
                                                    <div class="tg-border-topleft tg-portfolio-content">
                                                        <div class="tg-theme-heading">
                                                            <span>Graphic Design, Photoshop</span>
                                                            <h2><a href="#">Lorem ipsum dolor sit amet, consectetuer elit</a></h2>
                                                        </div>
                                                        <div class="tg-description">
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p>
                                                        </div>
                                                        <a class="tg-viewmore-btn" href="#">View More »</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--************************************
                                    Portfolio End
                    *************************************-->
                </div>
                <!--************************************
                                Brands Start
                *************************************-->
                <!--div class="tg-main-section tg-haslayout">
                    <div class="container">
                        <div class="row">
                            <div class="tg-brands tg-haslayout">
                                <div class="col-sm-3 col-xs-3 width-360">
                                    <figure><a href="#"><img src="assets/images/brand-01.png" alt="brand name"></a></figure>
                                </div>
                                <div class="col-sm-3 col-xs-3 width-360">
                                    <figure><a href="#"><img src="assets/images/brand-02.png" alt="brand name"></a></figure>
                                </div>
                                <div class="col-sm-3 col-xs-3 width-360">
                                    <figure><a href="#"><img src="assets/images/brand-03.png" alt="brand name"></a></figure>
                                </div>
                                <div class="col-sm-3 col-xs-3 width-360">
                                    <figure><a href="#"><img src="assets/images/brand-04.png" alt="brand name"></a></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div-->
                <!--************************************
                                Brands End
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
        <div class="modal fade register-modalbox" tabindex="-1" role="dialog">
            <div class="tg-signup-modalbox">
                <h2>REGISTRATION FORM</h2>

                <form style="padding:20px" id="registerSeminar">
                    <div style="overflow: auto;max-height: 450px;">
                        <fieldset>
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
                                <h4>อ.วิภา เจริญกิจสุพัฒน์</h4>
                            </div>
                            <div class="col-sm-8">
                                <span style="font-size: 18px;"><strong>ประวัติ และคุณวุฒิ​</strong></span>
                                <p>AFPTTM – Associate Financial Planner Thailand คุณวุฒิวิชาชีพที่ปรึกษาการเงิน จากสมาคมนักวางแผนการเงินไทย</p>
                                <p>FChFP – Fellow Chartered Financial Practitioner คุณวุฒิทางวิชาชีพสำหรับมืออาชีพ ด้านบริการทางการเงิน จากสมาคมตัวแทนประกันชีวิตและที่ปรึกษาการเงิน</p>
                                <p>RFC - Registered Financial Consultants วุฒิบัตรที่ปรึกษาการเงิน จากสถาบัน IARFC สมาคมที่ปรึกษาการเงินนานาชาติ ประเทศสหรัฐอเมริกา </p>
                                <p>ใบอนุญาตผู้แนะนำการลงทุนด้านหลักทรัพย์ สำนักงานคณะกรรมการกำกับหลักทรัพย์และตลาดหลักทรัพย์ (กลต)</p>
                                <p>ใบอนุญาตตัวแทนประกันชีวิต สำนักงานคณะกรรมการกำกับและส่งเสริมการประกอบธุรกิจประกันภัย (คปภ.)</p>
                                <p>ปริญญาโท วิทยาศาสตร์มหาบัณฑิต (สาขาเทคโนโลยีสารสนเทศ) มหาวิทยาลัยเกษตรศาสตร์</p>
                                <p>ปริญญาตรี บริหารธุรกิจบัณฑิต (สาขาระบบสารสนเทศ) เกียรตินิยมอันดับ 1 สถาบันเทคโนโลยีและอาชีวศึกษา</p>

                            </div>
                        </div>
                    </div>
                </form>   
            </div>
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
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
            <div class="tg-banner tg-haslayout parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="assets/images/training_seminar_1920x250.jpg">
                <div class="tg-banner-holder">
                    <div class="container">
                        <div class="tg-displaytable">
                            <div class="tg-displaytablecell">
                                <div class="banner-content tg-haslayout">
                                    <h1>Training / SEMINAR</h1>
                                    <ol class="tg-breadcrumb">
                                        <li><a href="main">Home</a></li>
                                        <li class="active">Training / Seminar</li>
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
                                    <li >
                                        <a href="aboutus">About</a>
                                    </li>
                                    <li class="current-menu-item">
                                        <a href="#">Training/Seminar</a>
                                        <ul>
                                            <li class="current-menu-item">
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
                <!--************************************
                                About Section Start
                *************************************-->
                <section class="tg-main-section tg-haslayout">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="tg-theme-heading">
                                    <span>WE ARE GO GET RICH</span>
                                    <h2>Our Training / Schedule</h2>
                                </div>
                            </div>
                            <div class="tg-aboutus-section">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="span7">   
                                        <?php
                                        $sqlGetCate = "SELECT * FROM GTRICH_COURSE_CATEGORY ORDER BY CATE_CREATE_DATE_TIME DESC";
                                        $resGetCate = mysql_query($sqlGetCate);
                                        while ($rowGetCate = mysql_fetch_array($resGetCate)) {
                                            ?>
                                            <div class="widget stacked widget-table action-table">
                                                <div class="widget-header">
                                                    <h3><?= $rowGetCate['CATE_NAME'] ?></h3>
                                                </div> <!-- /widget-header -->
                                                <div class="widget-content">   
                                                    <table class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th width="5%">No.</th>
                                                                <th width="25%">Course Name</th>
                                                                <th width="5%">Days</th>
                                                                <th width="30%">Fee (THB)</th>
                                                                <th width="30%">Course Schedule</th>
                                                                <th width="10%"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $sqlCheckCateForCourse = "SELECT COUNT(*) AS haveCourse FROM GTRICH_COURSE_HEADER WHERE REF_CATE_ID='" . $rowGetCate['CATE_ID'] . "' AND HEADER_COURSE_STATUS = '0'";
                                                            $resCheckCateForCourse = mysql_query($sqlCheckCateForCourse);
                                                            $rowCheckCateForCourse = mysql_fetch_assoc($resCheckCateForCourse);
                                                            if ($rowCheckCateForCourse['haveCourse'] > 0) {
                                                                $sqlGetCourseHeader = "SELECT * FROM GTRICH_COURSE_HEADER WHERE REF_CATE_ID='" . $rowGetCate['CATE_ID'] . "' AND HEADER_COURSE_STATUS = '0'";
                                                                $resGetCourseHeader = mysql_query($sqlGetCourseHeader);
                                                                $no = 1;
                                                                while ($rowGetCourseHeader = mysql_fetch_array($resGetCourseHeader)) {
                                                                    ?>
                                                                    <tr>
                                                                        <td><?= $no ?></td>
                                                                        <td style="text-align:left;">
                                                                            <span class="linkHover" style="cursor: pointer" onclick="showCourseDetali('<?= $rowGetCourseHeader['HEADER_ID'] ?>')"><?= $rowGetCourseHeader['HEADER_NAME'] ?></span>
                                                                        </td>
                                                                        <td><?= $rowGetCourseHeader['HEADER_COURSE_DURATION'] ?></td>
                                                                        <td width="450px" id="<?= $rowGetCourseHeader['HEADER_ID'] ?>" style="text-align: left">                    
                                                                            <?= $rowGetCourseHeader['HEADER_DETAIL'] ?>                                           
                                                                        </td>
                                                                        <td style="text-align:left;" width="320px">
                                                                            <?php
                                                                            $sqlGetEventDateTime = "SELECT * FROM GTRICH_COURSE_EVENT_DATE_TIME WHERE REF_COURSE_HEADER_ID = '" . $rowGetCourseHeader['HEADER_ID'] . "'";
                                                                            $resGetEventDateTime = mysql_query($sqlGetEventDateTime);
                                                                            while ($rowGetEventDateTime = mysql_fetch_array($resGetEventDateTime)) {
                                                                                $startDate = explode(" ", $rowGetEventDateTime['START_EVENT_DATE_TIME'])[0];
                                                                                $startTime = explode(" ", $rowGetEventDateTime['START_EVENT_DATE_TIME'])[1];

                                                                                $endDate = explode(" ", $rowGetEventDateTime['END_EVENT_DATE_TIME'])[0];
                                                                                $endTime = explode(" ", $rowGetEventDateTime['END_EVENT_DATE_TIME'])[1];
                                                                                ?>

                                                                    <li class="linkHover" onclick="showCourseDetali('<?= $rowGetCourseHeader['HEADER_ID'] ?>')">เริ่ม วันที่ <?= $startDate ?> เวลา <?= $startTime ?>น. ถึง วันที่ <?= $endDate ?> เวลา <?= $endTime ?>น.</li>

                                                                    <?php
                                                                }
                                                                ?>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    if (empty($_SESSION['usernameFrontEnd'])) {
                                                                        ?>
                                                                        <a href="#" class="tg-theme-btn-sm" data-toggle="modal" data-target=".login-modalbox" onclick="clearMoreTmp('<?= $rowGetCourseHeader['HEADER_ID'] ?>')">ลงทะเบียน</a>
                                                                        <?php
                                                                    } else {
                                                                        $sqlCheckAlreadyRegis = "SELECT COUNT(*) AS counts FROM RICH_CUSTOMER_ENROLL WHERE ENROLL_COURSE_ID='" . $rowGetCourseHeader['HEADER_ID'] . "' AND ENROLL_CUS_ID='" . $_SESSION['userIdFrontEnd'] . "'";
                                                                        $resCheckAlreadyRegis = mysql_query($sqlCheckAlreadyRegis);
                                                                        $rowCheckAlreadyRegis = mysql_fetch_assoc($resCheckAlreadyRegis);
                                                                        if ($rowCheckAlreadyRegis['counts'] >= 1) {
                                                                            ?>
                                                                            <a href="#" class="tg-theme-btn-sm disabled" onclick="showWarningNotficationDialog('คุณได้ลงทะเบียนคอร์สนี้เรียบร้อยแล้ว')">ลงทะเบียน</a>
                                                                            <?php
                                                                        } else {
                                                                            ?>
                                                                            <a href="#" class="tg-theme-btn-sm" data-toggle="modal" data-target=".register-modalbox" onclick="clearMoreTmp('<?= $rowGetCourseHeader['HEADER_ID'] ?>')">ลงทะเบียน</a>
                                                                            <?php
                                                                        }
                                                                    }
                                                                    ?>

                                                                </td>
                                                                </tr>
                                                                <?php
                                                                $no++;
                                                            }
                                                        } else {
                                                            ?>
                                                            <tr>
                                                                <td colspan="17"> Course will available soon <span class="fa fa-clock-o"></span> </td>
                                                            </tr>
                                                            <?php
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>


                                                </div> <!-- /widget-content -->

                                            </div><br/> <!-- /widget -->
                                            <?php
                                        }
                                        ?>

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
                            <div class="tg-ourteam tg-haslayout">
                                <div class="col-md-3 col-sm-6 col-xs-6 width-480">
                                    <div class="tg-teammember tg-haslayout">
                                        <figure class="tg-member-img">
                                            <a href="#"><img src="assets/images/wipa_resized.jpg" alt="member name"></a>
                                            <div class="tg-member-hover">
                                                <ul class="tg-member-hover-icons">
                                                    <li><a href="#"><i class="flaticon-plus79"></i></a></li>
                                                    <li><a href="#"><i class="flaticon-share55"></i></a></li>
                                                </ul>
                                            </div>
                                        </figure>
                                        <div class="tg-member-detail tg-haslayout">
                                            <span class="tg-member-name" style="cursor: pointer" data-toggle="modal" data-target=".mentor-modalbox">อ. วิภา เจริญกิจสุพัฒน์</span>
                                            <span class="tg-member-postion">คุณวุฒิวิชาชีพที่ปรึกษาการเงิน จากสมาคมนักวางแผนการเงินไทย</span>
                                            <ul class="tg-social-icon">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 width-480">
                                    <div class="tg-teammember tg-haslayout">
                                        <figure class="tg-member-img">
                                            <a href="#"><img src="assets/images/pop_our.png" alt="member name"></a>
                                            <div class="tg-member-hover">
                                                <ul class="tg-member-hover-icons">
                                                    <li><a href="#"><i class="flaticon-plus79"></i></a></li>
                                                    <li><a href="#"><i class="flaticon-share55"></i></a></li>
                                                </ul>
                                            </div>
                                        </figure>
                                        <div class="tg-member-detail tg-haslayout">
                                            <span class="tg-member-name" style="cursor: pointer;" onclick="window.open('http://www.vihoon.com/?pg=about', '_blank');">อ. วิธิวัต โรจนตรีคูณ</span>
                                            <span class="tg-member-postion">ผู้เชี่ยวชาญด้านหุ้น และอสังหาริมทรัพย์</span>
                                            <ul class="tg-social-icon">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                                Our Team End
                *************************************-->
                <!--************************************
                                Testimonials Start
                *************************************-->
                <section class="tg-main-section tg-haslayout testimonial-image">
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
                </section>
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
        <div class="modal fade register-modalbox" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
            <div class="tg-signup-modalbox">
                <h2>REGISTRATION COURSE <span class="pull-right" style="cursor: pointer" onclick="closeRegisterPartialDialog($('.register-modalbox'))">x</span></h2>
                <div id="scheduleFormDiv"></div>
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
                            <div class="col-sm-8 scrollbar-inner" style="overflow-x:hidden; max-height: 450px;">
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
                    if (data == 503) {
                        alert("ชื่อผู้ใช้ หรือ รหัสผ่านไม่ถูกต้อง");
                    }
                    if (data == 205) {
                        showSuccessNotficationDialog("กรุณาเปลี่ยนรหัสผ่าน", "forceChangePassword.php");
                    }
                    if (data == 200) {
                        window.location = 'trainingSchedule';
                        $(form).trigger('reset');
                    }
                }
            });
        }
        function showCourseDetali(courseName) {
            window.location = "scheduleDetail?cname=" + courseName;
        }

        function clearMoreTmp(cid) {
            $("#scheduleFormDiv").load("register_partial.php?cname=" + cid, function () {
                $.ajax({
                    url: "../model/com.gogetrich.function/clearTmp.php",
                    type: 'POST',
                    success: function (data, textStatus, jqXHR) {
                        if (data != 200) {
                            console.log(data);
                        } else {
                            $("#loadMoreUser").load("moreUserTbl.php");
                        }

                    }
                });
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
    <style type="text/css">
        .linkHover:hover{
            color:#ffcc33;
        }
        .table-bordered {
            border: 1px solid #dddddd;
            border-collapse: separate;
            border-left: 0;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
        }

        .table {
            width: 100%;
            margin-bottom: 20px;
            background-color: transparent;
            border-collapse: collapse;
            border-spacing: 0;
            display: table;
        }

        .widget.widget-table .table {
            margin-bottom: 0;
            border: none;
        }

        .widget.widget-table .widget-content {
            padding: 0;
        }

        .widget .widget-header + .widget-content {
            border-top: none;
            -webkit-border-top-left-radius: 0;
            -webkit-border-top-right-radius: 0;
            -moz-border-radius-topleft: 0;
            -moz-border-radius-topright: 0;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .widget .widget-content {
            padding: 20px 15px 15px;
            background: #FFF;
            border: 1px solid #D5D5D5;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
        }

        .widget .widget-header {
            position: relative;
            height: 40px;
            line-height: 40px;
            background: #E9E9E9;
            background: -moz-linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fafafa), color-stop(100%, #e9e9e9));
            background: -webkit-linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
            background: -o-linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
            background: -ms-linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
            background: linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
            text-shadow: 0 1px 0 #fff;
            border-radius: 5px 5px 0 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1),inset 0 1px 0 white,inset 0 -1px 0 rgba(255,255,255,0.7);
            border-bottom: 1px solid #bababa;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9');
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9')";
            border: 1px solid #D5D5D5;
            -webkit-border-top-left-radius: 4px;
            -webkit-border-top-right-radius: 4px;
            -moz-border-radius-topleft: 4px;
            -moz-border-radius-topright: 4px;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            -webkit-background-clip: padding-box;
        }

        thead {
            display: table-header-group;
            vertical-align: middle;
            border-color: inherit;
        }

        .widget .widget-header h3 {
            top: 2px;
            position: relative;
            left: 10px;
            display: inline-block;
            margin-right: 3em;
            font-size: 14px;
            font-weight: 600;
            color: #555;
            line-height: 18px;
            text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.5);
        }

        .widget .widget-header [class^="icon-"], .widget .widget-header [class*=" icon-"] {
            display: inline-block;
            margin-left: 13px;
            margin-right: -2px;
            font-size: 16px;
            color: #555;
            vertical-align: middle;
        }
    </style>
</html>
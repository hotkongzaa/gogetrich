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
                                    <li class="current-menu-item">
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
                <div class="tg-main-section tg-haslayout bg-white">
                    <div class="container">
                        <div class="row">
                            <div id="twocolumns" class="blog-list">
                                <!--************************************
                                                Blog List Section Start
                                *************************************-->
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="tg-theme-heading">
                                        <span>from our</span>
                                        <h2>Blog พารวย</h2>
                                    </div>

                                    <?php
                                    $page = (string) filter_input(INPUT_GET, 'page');
                                    ?>
                                    <ul class="tg-pagination" style="margin-bottom: 20px !important;">
                                        <li class="tg-prev">
                                            <?php
                                            if ($page == 3) {
                                                ?>
                                                <a href="blog-list?page=2">
                                                    <i class="fa fa-angle-left"></i>
                                                </a>
                                                <?php
                                            } else if ($page == 2) {
                                                ?>
                                                <a href="blog-list?page=1">
                                                    <i class="fa fa-angle-left"></i>
                                                </a>
                                                <?php
                                            } else if ($page == 1) {
                                                ?>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-angle-left"></i>
                                                </a>
                                                <?php
                                            } else {
                                                ?>
                                                <a href="blog-list?page=1">
                                                    <i class="fa fa-angle-left"></i>
                                                </a>
                                                <?php
                                            }
                                            ?>
                                        </li>
                                        <li>
                                            <a href="blog-list?page=1">1</a>
                                        </li>
                                        <li>
                                            <a href="blog-list?page=2">2</a>
                                        </li>
                                        <li>
                                            <a href="blog-list?page=3">3</a>
                                        </li>
                                        <li class="tg-next">
                                            <?php
                                            if ($page == 1) {
                                                ?>
                                                <a href="blog-list?page=2">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                                <?php
                                            } else if ($page == 2) {
                                                ?>
                                                <a href="blog-list?page=3">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                                <?php
                                            } else {
                                                ?>
                                                <a href="javascript:void(0)">
                                                    <i class="fa "></i>
                                                </a>
                                                <?php
                                            }
                                            ?>

                                        </li>
                                    </ul>
                                    <?php
                                    if (!empty($page)) {
                                        if ($page == 1) {
                                            ?>
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
                                                    <h3>
                                                        <a href="blog?rPage=1&id=<?= md5(1) ?>">ทำไมต้องวางแผนการเงิน</a>
                                                    </h3>
                                                    <!--h3>
                                                        <a href="whyweplanning-blog">ทำไมต้องวางแผนการเงิน</a>
                                                    </h3-->
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
                                                    <h3>
                                                        <a href="blog?rPage=1&id=<?= md5(2) ?>">ตรวจสอบสถานการณ์เงิน ของเราอยู่สถานการณ์ไหน</a>
                                                    </h3>
                                                    <!--h3>
                                                        <a href="financial-situation">ตรวจสอบสถานการณ์เงิน ของเราอยู่สถานการณ์ไหน</a>
                                                    </h3-->
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
                                                    <h3>
                                                        <a href="blog?rPage=1&id=<?= md5(3) ?>">สถานะการเงินมิติของอารมณ์ความรู้สึก</a>
                                                    </h3>
                                                    <!--h3>
                                                        <a href="financial-status">สถานะการเงินมิติของอารมณ์ความรู้สึก</a>
                                                    </h3-->
                                                    <div class="tg-post-meta">
                                                        <span><a href="#">By Admin / </a></span>
                                                        <span><a href="#">In Map</a></span>
                                                    </div>
                                                    <div class="tg-description">
                                                        <p>สถานะการเงินเป็นอย่างไร นอกจากความรู้การเงินแล้ว สิ่งที่มีอิทธิพลสูงกว่าคือ ความเชื่อทางสังคม วัฒนธรรม สภาพแวดล้อม การถูกเลี้ยงดู...</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tg-post">
                                                <div class="tg-post-img">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="assets/images/blog/life-destiny_front.png" alt="image description">
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
                                                    <h3>
                                                        <a href="blog?rPage=1&id=<?= md5(4) ?>">ชะตาชีวิตลิขิตได้</a>
                                                    </h3>
                                                    <div class="tg-post-meta">
                                                        <span><a href="#">By Admin / </a></span>
                                                        <span><a href="#">In Map</a></span>
                                                    </div>
                                                    <div class="tg-description">
                                                        <p>ไม่ว่าสถานการณ์การเงินปัจจุบันจะเป็นอย่างไรก็ตามไม่มีผิดไม่มีถูก ที่ผ่านมาเป็นเพียงปรากฏการณ์ มาทำความรู้จักกับกลไกธรรมชาติที่มีในทุกคน...</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tg-post">
                                                <div class="tg-post-img">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="assets/images/blog/financial_freedom_front.png" alt="image description">
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
                                                    <h3>
                                                        <a href="blog?rPage=1&id=<?= md5(5) ?>">พัฒนาทักษะการเงินอย่างไรเพื่อไปสู่อิสรภาพการเงิน</a>
                                                    </h3>
                                                    <div class="tg-post-meta">
                                                        <span><a href="#">By Admin / </a></span>
                                                        <span><a href="#">In Map</a></span>
                                                    </div>
                                                    <div class="tg-description">
                                                        <p>หลังจากเราทราบแล้วว่าตนเองอยู่ในสถานการณ์การเงินแบบใด ต่อไปคือการเข้ากระบวนการวางแผนการเงินเพื่อไปสู่อิสรภาพการเงิน ในกระบวนการอาจจะจำเป็นต้องปรับสภาพคล่องให้เหมาะสม สร้างแผนสำรองเพื่อรองรับความไม่แน่นอน...</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        } else if ($page == 2) {
                                            ?>
                                            <div class="tg-post">
                                                <div class="tg-post-img">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="assets/images/blog/financial_planning_front.png" alt="image description">
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
                                                    <h3>
                                                        <a href="blog?rPage=2&id=<?= md5(6) ?>">ภาพรวมกระบวนการวางแผนการเงิน</a>
                                                    </h3>
                                                    <div class="tg-post-meta">
                                                        <span><a href="#">By Admin / </a></span>
                                                        <span><a href="#">In Map</a></span>
                                                    </div>
                                                    <div class="tg-description">
                                                        <p>หลักการในกระบวนการวางแผนการเงิน ประกอบด้วย 3 เรื่องหลัก ๆ คือ รายได้ รายจ่าย และการลงทุน เมื่อทราบแล้วว่าเรามีสถานะการเงินแบบไหน เรามาเข้ากระบวนการที่เหตุ เริ่มจากการบริหารรายจ่ายปัจจุบัน บริหารให้มีเงินเหลือออม เป็นจุดเริ่มต้นในการสร้างความมั่งคั่งที่มั่นคง...</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tg-post">
                                                <div class="tg-post-img">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="assets/images/blog/7_front.png" alt="image description">
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
                                                    <h3>
                                                        <a href="blog?rPage=2&id=<?= md5(7) ?>">กระบวนการวางแผนการเงินมีกลไกคุมรายจ่ายกันยังไง...ไม่ให้เพิ่มตามรายได้</a>
                                                    </h3>
                                                    <div class="tg-post-meta">
                                                        <span><a href="#">By Admin / </a></span>
                                                        <span><a href="#">In Map</a></span>
                                                    </div>
                                                    <div class="tg-description">
                                                        <p>หลายคนอาจจะยังไม่รู้ตัวว่ารายจ่ายเพิ่มตามรายได้  อาจจะรู้สึกชีวิตสะดวกสบายขึ้น หรือนับวันอึดอัดมากขึ้นเรื่อย ๆ ด้วยรู้สึกว่าภาระมากขึ้น อาจจะรู้สึกสงสัยทำไงที่จะควบคุมรายจ่ายเพื่อให้รายได้ที่เพิ่มขึ้นกลายเป็นเงินออมที่เพิ่มขึ้นเรื่อย ๆ
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tg-post">
                                                <div class="tg-post-img">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="assets/images/blog/8_front.png" alt="image description">
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
                                                    <h3>
                                                        <a href="blog?rPage=2&id=<?= md5(8) ?>">Budgeting เสาเข็มแรก</a>
                                                    </h3>
                                                    <div class="tg-post-meta">
                                                        <span><a href="#">By Admin / </a></span>
                                                        <span><a href="#">In Map</a></span>
                                                    </div>
                                                    <div class="tg-description">
                                                        <p>การทำงบประมาณหรือ Budgeting ศัพท์ดูหรู ที่รู้จักในการทำงบประมาณรายจ่ายบริษัท ดูเป็นทางการทำให้หลายคนรู้สึกว่าไกลตัว การทำงบประมาณ เป็นกำหนดตัวเลขประมาณการที่คาดว่าจะเป็นไปได้ของรายได้ ยอดค่าใช้จ่ายแต่ละประเภท รวมถึงงบประมาณการออมด้วย...
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tg-post">
                                                <div class="tg-post-img">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="assets/images/blog/9_front.png" alt="image description">
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
                                                    <h3>
                                                        <a href="blog?rPage=2&id=<?= md5(9) ?>">เงินสำรองฉุกเฉิน (Emergency Cash) เสาเข็มที่สอง</a>
                                                    </h3>
                                                    <div class="tg-post-meta">
                                                        <span><a href="#">By Admin / </a></span>
                                                        <span><a href="#">In Map</a></span>
                                                    </div>
                                                    <div class="tg-description">
                                                        <p>ถ้าเราเพิ่งเริ่มวางแผนการเงิน และยังไม่มีการกันเงินสำรองฉุกเฉินเลย แนะนำให้ตั้งเป้าหมายเตรียมเงินสำรองฉุกเฉิน 6 เดือนของรายจ่ายประมาณการจากงบประมาณในหัวข้อที่แล้ว และเริ่มเปิดบัญชีเงินฝากเพื่อเตรียมเงินก้อนนี้ทันที...
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tg-post">
                                                <div class="tg-post-img">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="assets/images/blog/10_front.png" alt="image description">
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
                                                    <h3>
                                                        <a href="blog?rPage=2&id=<?= md5(10) ?>">ความรู้พื้นฐานก่อนการวางแผนการเงิน</a>
                                                    </h3>
                                                    <div class="tg-post-meta">
                                                        <span><a href="#">By Admin / </a></span>
                                                        <span><a href="#">In Map</a></span>
                                                    </div>
                                                    <div class="tg-description">
                                                        <p>ความรู้พื้นฐานที่ใช้ในกระบวนการวางแผนการเงินจะเกี่ยวข้องกับการคำนวณดอกเบี้ย มูลค่าเงินตามเวลา...
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        } else if ($page == 3) {
                                            ?>
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
                                                    <h3>
                                                        <a href="blog?rPage=3&id=<?= md5(11) ?>">กฎ 72 </a>
                                                    </h3>
                                                    <div class="tg-post-meta">
                                                        <span><a href="#">By Admin / </a></span>
                                                        <span><a href="#">In Map</a></span>
                                                    </div>
                                                    <div class="tg-description">
                                                        <p>การหาระยะเวลาที่เงินจะเติบโตเป็น 2 เท่า ในอัตราดอกเบี้ยที่กำหนด หรือคำนวณหาผลตอบแทนที่ต้องการเงินเติบโตเป็น 2 เท่าในระยะเวลาที่ต้องการ...
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
                                                    <h3>
                                                        <a href="blog?rPage=3&id=<?= md5(12) ?>">พลังดอกเบี้ยทบต้น</a>
                                                    </h3>
                                                    <div class="tg-post-meta">
                                                        <span><a href="#">By Admin / </a></span>
                                                        <span><a href="#">In Map</a></span>
                                                    </div>
                                                    <div class="tg-description">
                                                        <p>ดอกเบี้ยทบต้นคือ ดอกเบี้ยที่คิดจากเงินต้นบวกดอกเบี้ยและรวมดอกเบี้ยกับเงินต้นคำนวณในรอบถัดไปเรื่อย ๆ
                                                            เงินต้น 1,000,000 บาท อัตราดอกเบี้ย 10% คำนวณเปรียบเทียบไม่ทบต้นและทบต้นเป็นระยะเวลา 20 ปี จำนวนเงินต่างกันมากกว่า 1 เท่า
                                                            ...
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
                                                    <h3>
                                                        <a href="blog?rPage=3&id=<?= md5(13) ?>">เงินเฟ้อ และมูลค่าเงินตามเวลา</a>
                                                    </h3>
                                                    <div class="tg-post-meta">
                                                        <span><a href="#">By Admin / </a></span>
                                                        <span><a href="#">In Map</a></span>
                                                    </div>
                                                    <div class="tg-description">
                                                        <p>เงินเฟ้อ คือ ใช้เงินเท่าเดิมซื้อของได้น้อยลง  หรือของเท่าเดิมต้องใช้เงินมากขึ้น ดูธรรมดาที่รู้กันอยู่แล้ว แต่ไม่ธรรมดาเมื่อเราต้องคำนวณคาดการณ์ในวันที่เราเกษียณในอีก 20 ปี 30 ปี ข้างหน้า ในการครองชีพด้วยค่าใช้จ่ายจำเป็นวันนี้กับวันที่เกษียณแตกต่างกันจนน่าตกใจ...
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
                                                    <h3>
                                                        <a href="blog?rPage=3&id=<?= md5(14) ?>">ประเภทเงินกู้ และวิธีคำนวณดอกเบี้ยเงินกู้</a>
                                                    </h3>
                                                    <div class="tg-post-meta">
                                                        <span><a href="#">By Admin / </a></span>
                                                        <span><a href="#">In Map</a></span>
                                                    </div>
                                                    <div class="tg-description">
                                                        <p>เงินกู้แบ่งเป็น 2 ประเภท คือ 
                                                            1.	แบบมีทรัพย์สินเป็นหลักประกัน อัตราดอกเบี้ยต่ำกว่า เช่น สินเชื่อบ้าน สินเชื่อรถยนต์
                                                            2.	แบบไม่มีทรัพย์สินเป็นหลักประกัน มีอัตราดอกเบี้ยสูง และสูงมาก เช่น สินเชื่อบุคคล ดอกเบี้ย...
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
                                                    <h3>
                                                        <a href="blog?rPage=3&id=<?= md5(15) ?>">Debt Management (การบริหารโครงสร้างหนี้) เสาเข็มที่สาม (ตอนที่ 1)</a>
                                                    </h3>
                                                    <div class="tg-post-meta">
                                                        <span><a href="#">By Admin / </a></span>
                                                        <span><a href="#">In Map</a></span>
                                                    </div>
                                                    <div class="tg-description">
                                                        <p>เวัตถุประสงค์ของการบริหารโครงสร้างหนี้ คือ<br/>
                                                            •	ปรับค่างวดผ่อนชำระไม่สูงเกินไป คือ ค่างวดทั้งหมดต่อเดือนไม่ควรเกิน 35-40% ของรายได้  ค่างวดผ่อนชำระสูงเกินอาจจะทำให้เกิดภาวะเป็นหนี้ซ้ำซ้อน มีเงินเหลือไม่เพียงพอกับการใช้จ่ายประจำวัน
                                                            ...
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        } else {
                                            
                                        }
                                    }
                                    ?>

                                    <!--************************************
                                            Pagination Start
                                    *************************************-->
                                    <ul class="tg-pagination">
                                        <li class="tg-prev">
                                            <?php
                                            if ($page == 3) {
                                                ?>
                                                <a href="blog-list?page=2">
                                                    <i class="fa fa-angle-left"></i>
                                                </a>
                                                <?php
                                            } else if ($page == 2) {
                                                ?>
                                                <a href="blog-list?page=1">
                                                    <i class="fa fa-angle-left"></i>
                                                </a>
                                                <?php
                                            } else if ($page == 1) {
                                                ?>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-angle-left"></i>
                                                </a>
                                                <?php
                                            } else {
                                                ?>
                                                <a href="blog-list?page=1">
                                                    <i class="fa fa-angle-left"></i>
                                                </a>
                                                <?php
                                            }
                                            ?>
                                        </li>
                                        <li>
                                            <a href="blog-list?page=1">1</a>
                                        </li>
                                        <li>
                                            <a href="blog-list?page=2">2</a>
                                        </li>
                                        <li>
                                            <a href="blog-list?page=3">3</a>
                                        </li>
                                        <li class="tg-next">
                                            <?php
                                            if ($page == 1) {
                                                ?>
                                                <a href="blog-list?page=2">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                                <?php
                                            } else if ($page == 2) {
                                                ?>
                                                <a href="blog-list?page=3">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                                <?php
                                            } else {
                                                ?>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                                <?php
                                            }
                                            ?>

                                        </li>
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
                                <aside id="sidebar" class="col-lg-4 col-md-3 col-sm-4 col-xs-12">
                                    <div class="row">                                        
                                        <div class="col-md-12 col-xs-12">
                                            <?php include 'recent-post.php' ?>
                                        </div>                                       
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
        <div class="scroll-top-wrapper ">
            <span class="scroll-top-inner">
                <i class="fa fa-2x fa-arrow-circle-up"></i>
            </span>
        </div>
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
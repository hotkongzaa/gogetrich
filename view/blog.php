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
        <title>Go Get Rich</title>
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
                                    <!--                                    <ol class="tg-breadcrumb">
                                                                            <li><a href="javascript:void(0)">Home</a></li>
                                                                            <li class="active">blog detail</li>
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
                                    <a data-toggle="modal" data-target=".login-modalbox" href="javascript:void(0)">
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
                                    width: 60% !important;
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
                                    <li>
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
                                    <li class="current-menu-item">
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
                                Blog Detail Section Start
                *************************************-->
                <div class="tg-main-section tg-haslayout">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 pull-left">
                                <?php
                                $page = (string) filter_input(INPUT_GET, 'rPage');
                                $configure = parse_ini_file("../model-db-connection/configuration.ini");
                                $blogId = (string) filter_input(INPUT_GET, 'id');
                                ?>
                                <a href="blog-list?page=<?= $page ?>" class="btn btn-default btn-sm">
                                    <i class="fa fa-backward"></i> กลับสู่ BLOG พารวย
                                </a>
                                <br/><br/>
                            </div>
                        </div>
                        <div class="row">
                            <div id="content" class="col-md-8 col-sm-8 col-xs-12">
                                <?php
                                if ($blogId == md5(1)) {
                                    ?>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                </li>
                                                <li>                                                   
                                                    <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('ทำไมต้องวางแผนการเงิน', 'whyplanning.jpg', 'ใครเป็นแบบนี้บ้าง...เงินเดือนมากขึ้น ซื้อรถ ซื้อบ้าน ซื้อคอนโดฯ  การแข่งขันสูงขึ้น จึงต้องส่งให้ลูกเรียนในสถาบันการศึกษาที่ติดอันดับ วันหยุดพาลูกเรียนพิเศษ เรียนดนตรี ไม่มีเวลาอยู่บ้านทำอาหารเอง แต่ก็ยังใช้ชีวิตได้อย่างสะดวกสบาย โดยซื้ออาหารปรุงสำเร็จนอกบ้านเป็นหลัก รวมถีงฟาสต์ฟูดส์แบบฝรั่ง กินมากเกินไปน้ำหนักเกิน ก็ไปฟิตเนสออกกำลังกายให้รูปร่างได้สัดส่วน...')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <article class="blog-post blog-post-detail tg-haslayout">
                                        <figure>
                                            <img src="assets/images/blog/whyplanning.jpg" alt="image description">                                        
                                        </figure>
                                        <div class="tg-post-detail">
                                            <div class="tg-description">                                               
                                                <p>
                                                <legend>ทำไมต้องวางแผนการเงิน</legend>                                                
                                                </p>                                                
                                                <p>
                                                    &emsp;&emsp;&emsp;ใครเป็นแบบนี้บ้าง...เงินเดือนมากขึ้น ซื้อรถ ซื้อบ้าน ซื้อคอนโดฯ  การแข่งขันสูงขึ้น จึงต้องส่งให้ลูกเรียนในสถาบันการศึกษาที่ติดอันดับ วันหยุดพาลูกเรียนพิเศษ เรียนดนตรี ไม่มีเวลาอยู่บ้านทำอาหารเอง แต่ก็ยังใช้ชีวิตได้อย่างสะดวกสบาย โดยซื้ออาหารปรุงสำเร็จนอกบ้านเป็นหลัก รวมถีงฟาสต์ฟูดส์แบบฝรั่ง กินมากเกินไปน้ำหนักเกิน ก็ไปฟิตเนสออกกำลังกายให้รูปร่างได้สัดส่วน
                                                </p>
                                                <p>
                                                    ทำงานเครียด ๆ ก็ไปเดินชอปปิ้งในศูนย์การค้า ร้านสวย ๆ ชิค ๆ สินค้าเกรด A มากมาย พอตกเย็นก็ชวนเพื่อน ๆ ไปหาร้านอร่อย ๆ กินกัน
                                                </p>
                                                <p>
                                                    &emsp;&emsp;&emsp;ที่จริงกลุ่มคนเมืองมีปัญหาการเงินที่ซ่อนอยู่แต่ยังมองไม่เห็น เนื่องจากยังคงมีรายได้ทุก ๆ เดือน แต่จะแฝงด้วยความรู้สึกกังวล ความกลัว โดยไม่เข้าใจต้นเหตุที่แท้จริง ความกังวลลึก ๆ เหล่านี้มีโอกาสจะกระทบกับปฏิสัมพันธ์กับผู้ร่วมงาน และคนในครอบครัวโดยไม่รู้ตัว 
                                                </p>
                                                <blockquote>
                                                    <q>“ลองมองดูความรู้สึกตัวเอง 
                                                        ตอนนี้รู้สึกยังไงกับการเงินตัวเอง สบายใจหรือกังวล
                                                        ถ้ากังวล...กังวลอะไร?”</q>
                                                </blockquote>
                                                <p>
                                                    เราลองมาตรวจสอบความพร้อมการเงินจาก <a href="financial-check">“แบบสำรวจความพร้อมการเงิน”</a> จะช่วยให้เห็นตัวเองชัดขึ้นว่า มีความกังวลเกี่ยวกับเรื่องใดบ้าง
                                                </p>
                                            </div><br/>
                                            <div class="tg-post-meta">
                                                <span>
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target=".mentor-p_kieak">โดย อ.วิภา เจริญกิจสุพัฒน์ / </a>
                                                </span>
                                                <span>
                                                    <a href="javascript:void(0)">CFP<sup>®</sup>, RFC, FChFP, MSIT</a>
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                </li>
                                                <li>                                                   
                                                    <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('ทำไมต้องวางแผนการเงิน', 'whyplanning.jpg', 'ใครเป็นแบบนี้บ้าง...เงินเดือนมากขึ้น ซื้อรถ ซื้อบ้าน ซื้อคอนโดฯ  การแข่งขันสูงขึ้น จึงต้องส่งให้ลูกเรียนในสถาบันการศึกษาที่ติดอันดับ วันหยุดพาลูกเรียนพิเศษ เรียนดนตรี ไม่มีเวลาอยู่บ้านทำอาหารเอง แต่ก็ยังใช้ชีวิตได้อย่างสะดวกสบาย โดยซื้ออาหารปรุงสำเร็จนอกบ้านเป็นหลัก รวมถีงฟาสต์ฟูดส์แบบฝรั่ง กินมากเกินไปน้ำหนักเกิน ก็ไปฟิตเนสออกกำลังกายให้รูปร่างได้สัดส่วน...')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php
                                } else if ($blogId == md5(2)) {
                                    ?>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                </li>
                                                <li>                                                   
                                                    <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('ตรวจสอบสถานการณ์เงิน', 'financialSit.jpg', 'สถานะการเงินที่มีโอกาสประสบปัญหาการเงินหรือกำลังมีปัญหา ซึ่งจะพบคนรอบ ๆ ตัวเรามี 4 สถานการณ์ ได้แก่ พึ่งพาการเงินผู้อื่น, มีหนี้ ไม่มีเงินเก็บ, ไม่มีหนี้แต่ไม่มีเงินเก็บ, ไม่มีหนี้มีเงินแหลือมาก')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <article class="blog-post blog-post-detail tg-haslayout">
                                        <figure>
                                            <img src="assets/images/blog/financialSit.jpg" alt="image description">
                                        </figure>
                                        <div class="tg-post-detail">
                                            <div class="tg-description">
                                                <p><legend>ตรวจสอบสถานการณ์เงิน</legend></p>
                                                <p>
                                                    &emsp;&emsp;&emsp;สถานะการเงินที่มีโอกาสประสบปัญหาการเงินหรือกำลังมีปัญหา ซึ่งจะพบคนรอบ ๆ ตัวเรามี 4 สถานการณ์ ได้แก่ พึ่งพาการเงินผู้อื่น, มีหนี้ ไม่มีเงินเก็บ, ไม่มีหนี้แต่ไม่มีเงินเก็บ, ไม่มีหนี้มีเงินแหลือมาก
                                                </p>
                                                <p style="text-align: center">
                                                    <img src="assets/images/blog/blog_list_2_1.png"/>
                                                </p>
                                                <p style="text-align: center">
                                                    ตอนนี้ลองตอบตัวเองดูว่า<br/></p>
                                                <blockquote>
                                                    <q>“เรานั้น...อยู่ในสถานะการเงินไหนใน 4 สถานการณ์”</q>
                                                </blockquote>
                                                <p>
                                                    <strong>ลองถามตัวเองว่าตอนนี้เราอยู่ในสถานการณ์การเงินไหนใน 4 สถานการณ์</strong></br>
                                                    1. พึ่งพาการเงินผู้อื่น (Dependence)<br/>
                                                    2. มีหนี้ ไม่มีเงินเก็บ (Solvency)<br/>
                                                    3. ไม่มีหนี้แต่ไม่มีเงินเก็บ (Free debt, No saving)<br/>
                                                    4. ไม่มีหนี้มีเงินแหลือมาก (Free debt, Lot saving)<br/>

                                                </p>
                                                <p>
                                                    &emsp;&emsp;&emsp;จะใช้ Model Spectrum Financial Stage เรียงลำดับตามระดับทักษะการเงิน โดยให้ 4 สถานการณ์ข้างต้นถูกจัดอยู่ใน 4 stages แรก การวางลำดับนี้จะช่วยให้เข้าใจแต่ละสถานการณ์ได้ง่ายขึ้น วัดผลได้ ง่ายที่จะเข้าใจการเคลื่อนสถานการณ์เงินไปทางที่ดีขึ้น จะต้องเพิ่มทักษะการเงินด้านใดบ้าง
                                                </p>
                                                <p style="text-align: center">
                                                    <img src="assets/images/blog/blog_list_2_2.png"/>
                                                </p>
                                                <p>
                                                    <strong>Stage 0 – พึ่งพาผู้อื่น (Dependence)</strong><br/>
                                                    <strong>ขั้นการเงินพึ่งพาผู้อื่น</strong> คือ คนที่ยังเป็นเด็กหรือนักเรียนนักศึกษาพึ่งพาค่าใช้จ่ายจากพ่อแม่, คนที่ต้องจ่ายค่างวดหนี้มากกว่ารายได้, คนเรียนจบแล้วไม่ทำงาน, คนตกงานไม่ได้เตรียมเงินสำรองฉุกเฉิน, คนเกษียณที่ไม่มีการเตรียมค่าใช้จ่ายหลังเกษียณ
                                                </p>
                                                <p>
                                                    <strong>Stage 1 – มีหนี้ ไม่มีเงินเก็บ (Solvency)</strong><br/>
                                                    <strong>ขั้นการเงินที่ไม่ต้องใช้เงินจากผู้อื่นมาช่วยจ่าย</strong> คือ คนที่มีรายได้เพียงพอในการจ่ายค่างวดหนี้และค่าใช้จ่ายต่าง ๆ  แต่สถานะจะเปลี่ยนเป็นภาวะพึ่งพาได้ เมื่อสูญเสียรายได้ หรือมีค่าใช้จ่ายที่ไมได้วางแผน เช่น ตกงานกะทันหัน เกิดเจ็บป่วยหรืออุบัติเหตุ
                                                </p>
                                                <p>
                                                    <strong>Stage 2 – ไม่มีหนี้ ไม่มีเงินเก็บ (Free Debt, No Savings)</strong><br/>
                                                    <strong>ขั้นการเงินที่ไม่มีภาระหนี้สิน แต่ไม่มีเงินเก็บ</strong> ชีวิตจะปกติสุขหากมีรายได้เข้าต่อเนื่อง สถานะจะเปลี่ยนไปที่ภาวะพึ่งพาทันทีที่สูญเสียรายได้ เช่น ตกงาน เจ็บป่วย ฯลฯ สถานะการเงินขั้นนี้มีโอกาสย้อนกลับไปที่ Stage 1 หรือ 0 คือกลับไปเป็นหนี้ หรือต้องพึ่งพาผู้อื่น
                                                </p>
                                                <p>
                                                    <strong>Stage 3 – ไม่มีหนี้ เงินเหลือมาก (Free Debt, Lot Savings)</strong><br/>
                                                    <strong>ขั้นการเงินที่ไม่มีภาระหนี้สิน แต่มีเงินเก็บมาก</strong> ชีวิตจะปกติสุขในปัจจุบัน แต่หลังรายได้หยุดหรือเกิดการเปลี่ยนแปลงการเงินรุนแรง เช่น เจ็บป่วยหรืออุบัติเหตุหนัก ทุพพลภาพ ฯลฯ อาจจะมีโอกาสกลับไปสู่ภาวะเงินออมหมด (Stage 2) ถ้าค่าใช้จ่ายนั้นเท่าเงินออมที่เคยสะสมไว้ หรือกลับไปเป็นหนี้ (Stage 1) ถ้าค่าใช้จ่ายก้อนใหญ่มากกว่าเงินเก็บ หรือมีสถานะการเงินพึ่งพาผู้อื่น (Stage 0) ถ้าค่าใช้จ่ายก้อนใหญ่นั้นสร้างหนี้สินก้อนใหญ่ที่เกินกำลังผ่อนคืน

                                                </p>
                                                <p>
                                                    <strong>Stage 4 – การเงินปลอดภัย (Financial Security)</strong><br/>
                                                    <strong>ขั้นการเงินปลอดภัย มีการเตรียมเงินครอบคลุมความต้องการพื้นฐาน</strong> คือมีการออมและลงทุนครอบคลุมค่าใช้จ่ายต่าง ๆ มีเงินสำรองฉุกเฉิน 6-12 เดือน และมีประกันสุขภาพประกันคุ้มครองรายได้ครอบครัว แต่ยังไม่มีแหล่งเงินได้แทนรายได้จากการทำงาน 
                                                    ค่าใช้จ่ายก้อนใหญ่ที่คาดการณ์ได้ ได้แก่ ค่าเทอม ฯลฯ มีการคำนวณล่วงหน้าเป็นเป้าหมายออมและลงทุน ส่วนค่าใช้จ่ายก้อนใหญ่ที่คาดการณ์ไม่ได้ ได้แก่ ค่ารักษาพยาบาลโรคร้ายแรงต่อเนื่อง ค่ารักษาพยาบาลกรณีเจ็บป่วย อุบัติเหตุหนัก ฯลฯ ถูกอุดรูรั่วเงินออมด้วยเบี้ยประกันภัย
                                                </p>
                                                <p>
                                                    <strong>Stage 5 – อิสรภาพการเงิน (Financial Freedom)</strong><br/>
                                                    <strong>มีแหล่งเงินได้ทดแทนรายได้จากการทำงานครอบคลุมรายจ่าย</strong> มี 2 รูปแบบ: 1) มีแหล่งรายได้ที่จ่ายกระแสเงินสดครอบคลุมค่าใช้จ่ายตลอดชีวิต และ 2) แบบที่มีแหล่งเงินก้อนใหญ่ครอบคลุมค่าใช้จ่ายตลอดอายุขัย
                                                </p>
                                                <p>
                                                    <strong>Stage 6 – เหลือเฟือ เอื้อผู้อื่น (Abundance)</strong><br/>
                                                    <strong>มีแหล่งเงินได้ทดแทนรายได้จากการทำงานมากเกินกว่ารายจ่ายที่ใช้จ่าย</strong> เงินได้จากแหล่งเงินทดแทนรายได้จากการทำงานมีเหลือเกินที่สามารถแบ่งปัน ช่วยเหลือผู้อื่นได้ หรือการสร้างสิ่งที่เป็นประโยชน์อุทิศให้กับผู้อื่น สังคม ประเทศชาติ และโลกใบนี้
                                                </p>
                                                <p>
                                                    รายละเอียดแต่ละ Stage ลองพินิจพิจารณาดูว่า คุณอยู่ในขั้นไหน...ในขั้นที่คุณอยู่ ให้ความรู้สึกมั่นคงปลอดภัยหรือยัง? มีความสงบสุขทางใจเกิดขึ้นหรือไม่?
                                                </p>
                                                <p>
                                                    &emsp;&emsp;&emsp;ผลลัพธ์สถานการณ์การเงินในปัจจุบันเกิดจากการตัดสินใจในสถานการณ์การเงินในการใช้ชีวิตแต่ละวัน ซึ่งนอกเหนือจากมิติที่เกี่ยวกับตัวเลขแล้ว การตัดสินใจเรื่องการเงินมีรากฐานมาจากการรับรู้ความเชื่อเรื่องเงิน และความรู้สึกการเป็นผู้ให้ ความรับผิดชอบ หรือภาวะผู้นำด้วย
                                                </p>
                                                <p style="text-align: center">
                                                    <img src="assets/images/blog/blog_list_2_3.png" />
                                                </p>
                                                <p>
                                                    &emsp;&emsp;&emsp;ฉะนั้นสถานการณ์การเงินเป็นอย่างไรเกี่ยวข้องกับเงินมิติตัวเลขและอารมณ์ความรู้สึก ซึ่งเราจำเป็นต้องทำความเข้าใจประกอบกัน เพื่อวางรากฐานะการเงินที่มั่นคง
                                                </p>
                                            </div><br/>
                                            <div class="tg-post-meta">
                                                <span>
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target=".mentor-p_kieak">โดย อ.วิภา เจริญกิจสุพัฒน์ / </a>
                                                </span>
                                                <span>
                                                    <a href="javascript:void(0)">CFP<sup>®</sup>, RFC, FChFP, MSIT</a>
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                </li>
                                                <li>                                                   
                                                    <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('ตรวจสอบสถานการณ์เงิน', 'financialSit.jpg', 'สถานะการเงินที่มีโอกาสประสบปัญหาการเงินหรือกำลังมีปัญหา ซึ่งจะพบคนรอบ ๆ ตัวเรามี 4 สถานการณ์ ได้แก่ พึ่งพาการเงินผู้อื่น, มีหนี้ ไม่มีเงินเก็บ, ไม่มีหนี้แต่ไม่มีเงินเก็บ, ไม่มีหนี้มีเงินแหลือมาก')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php
                                } else if ($blogId == md5(3)) {
                                    ?>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                </li>
                                                <li>                                                   
                                                    <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('สถานะการเงินมิติของอารมณ์ความรู้สึก', 'financialStatus.jpg', 'สถานะการเงินเป็นอย่างไร นอกจากความรู้การเงินแล้ว สิ่งที่มีอิทธิพลสูงกว่าคือ ความเชื่อทางสังคม วัฒนธรรม สภาพแวดล้อม การถูกเลี้ยงดู และประสบการณ์ สร้างกรอบความคิดและทัศนคติเกี่ยวกับเงิน')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <article class="blog-post blog-post-detail tg-haslayout">
                                        <figure>
                                            <img src="assets/images/blog/financialStatus.jpg" alt="image description">
                                        </figure>
                                        <div class="tg-post-detail">
                                            <div class="tg-description">
                                                <p><legend>สถานะการเงินมิติของอารมณ์ความรู้สึก</legend></p>
                                                <p>
                                                    &emsp;&emsp;&emsp;สถานะการเงินเป็นอย่างไร นอกจากความรู้การเงินแล้ว สิ่งที่มีอิทธิพลสูงกว่าคือ ความเชื่อทางสังคม วัฒนธรรม สภาพแวดล้อม การถูกเลี้ยงดู และประสบการณ์ สร้างกรอบความคิดและทัศนคติเกี่ยวกับเงิน
                                                </p>
                                                <p>
                                                    &emsp;&emsp;&emsp;หลายคนไม่คุยกันเรื่องเงิน บางคนคิดว่าเรื่องเงินไม่ใช่หน้าที่ต้องรับรู้ บางคนรู้สึกลึกว่าเงินเป็นความเห็นแก่ตัว เป็นความโกง หรือเชื่อว่าคนจะรวยได้ต้องโชคดีชีวิตถูกกำหนดมาแล้ว ฯลฯ ด้วยประสบการณ์ทัศนคติเหล่านี้ จึงปิดการรับรู้ในการเรียนรู้ทำความเข้าใจเกี่ยวกับการทำงานของเงิน
                                                </p>
                                                <p>
                                                    &emsp;&emsp;&emsp;เรามาดูความเชื่อ ความรู้สึก ที่กำหนดทัศนคติเกี่ยวกับเงิน ทำให้เกิดการติดสินใจในสถานการณ์ต่าง ๆ ในการใช้ชีวิตประจำวันที่ส่งผลต่อสถานการณ์การเงินที่เป็นอยู่ในปัจจุบัน ทั้งหมดไม่มีผิด ไม่มีถูก แต่มีผลทำให้สถานการณ์การเงินไม่ไปถึงไหน ติด ๆ ขัด ๆ 
                                                </p>
                                                <p>
                                                    <strong>Stage 0 – พึ่งพาผู้อื่น (Dependence)</strong><br/>
                                                    &emsp;&emsp;&emsp;สำหรับคนไทย นักเรียนนักศึกษาต้องเรียนหนังสืออย่างเดียวค่าใช้จ่ายของเราเป็นหน้าที่ของผู้ปกครองจนกว่าเราจะเรียนจบปริญญาตรีและทำงาน (ในบางประเทศจะพึ่งพาผู้ปกครองถึงอายุ 18 ปี) เราจึงยอมรับที่จะพึ่งพาผู้ปกครองจนกว่าจะเรียนจบมีงานทำ<br/>
                                                    &emsp;&emsp;&emsp;คนเกษียณที่มีความเชื่อว่า วัฒนธรรมไทยลูกกตัญญูต้องดูแลพ่อแม่ วันที่ฉันทำงาน ฉันดูแลพวกเธอ วันที่ฉันเกษียณลูกต้องดูแลรับผิดชอบค่าใช้จ่ายพ่อแม่ ก็จะไม่ให้ความสำคัญกับการออมเงินเป็นค่าใช้จ่ายหลังเกษียณ เราจึงยอมรับภาวะพึ่งพาลูกหลานหลังเกษียณ<br/>
                                                    หลายคนไม่เตรียมเงินสำรอง ลึก ๆ รู้สึกมีคนช่วย เงินไม่พอมีพ่อแม่ช่วย มีพี่น้องช่วย มีสามีเป็นหลัก มีลูกสาวเป็นหลัก ลูกเงินเยอะขอลูกได้
                                                </p>
                                                <p>
                                                    <strong>Stage 1 – มีหนี้ ไม่มีเงินเก็บ (Solvency)</strong><br/>
                                                    เป็นผู้ที่มีรายได้ สามารถดูแลค่างวดหนี้และค่าใช้จ่ายของตนเองได้โดยไม่ต้องพึ่งพารายได้จากผู้อื่น แต่ยังคิดว่ามี Backup จากคนในครอบครัว จึงไม่ให้ความสำคัญกับการเตรียมเงินออม หรือเงินสำรองใด ๆ 
                                                </p>
                                                <p>
                                                    <strong>Stage 2 – ไม่มีหนี้ ไม่มีเงินเก็บ (Free Debt, No Savings)</strong><br/>
                                                    คนกลุ่มนี้ไม่รู้สึกว่าจะต้องเป็นหลักให้กับครอบครัว ขาดเป้าหมายชีวิตที่ชัดเจน มีทัศนคติอาจจะยังไม่เปิดการเรียนรู้การทำงานของเงิน
                                                </p>
                                                <p>
                                                    <strong>Stage 3 – ไม่มีหนี้ เงินเหลือมาก (Free Debt, Lot Savings)</strong><br/>
                                                    คนกลุ่มนี้มีภาวะผู้นำ ความรู้สึกเป็นหลักให้คนในครอบครัว รับผิดชอบตนเอง แต่อาจจะมีทัศนคติที่ยังไม่เปิดการเรียนรู้การทำงานของเงิน หรือเข้าใจการจัดการเงินคือการออมเท่านั้น จึงขาดข้อมูลการจัดการเงินอย่างเหมาะสม

                                                </p>
                                                <p>
                                                    ความเชื่อ ความรู้สึกข้างต้น กำหนดพฤติกรรมบางอย่างที่สร้างผลลัพธ์ให้เราเห็นในตอนนี้
                                                </p>

                                            </div><br/>
                                            <div class="tg-post-meta">
                                                <span>
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target=".mentor-p_kieak">โดย อ.วิภา เจริญกิจสุพัฒน์ / </a>
                                                </span>
                                                <span>
                                                    <a href="javascript:void(0)">CFP<sup>®</sup>, RFC, FChFP, MSIT</a>
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                </li>
                                                <li>                                                   
                                                    <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('สถานะการเงินมิติของอารมณ์ความรู้สึก', 'financialStatus.jpg', 'สถานะการเงินเป็นอย่างไร นอกจากความรู้การเงินแล้ว สิ่งที่มีอิทธิพลสูงกว่าคือ ความเชื่อทางสังคม วัฒนธรรม สภาพแวดล้อม การถูกเลี้ยงดู และประสบการณ์ สร้างกรอบความคิดและทัศนคติเกี่ยวกับเงิน')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php
                                } else if ($blogId == md5(4)) {
                                    ?>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                </li>
                                                <li>                                                   
                                                    <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('ชะตาชีวิตลิขิตได้', 'life-destiny_detail.png', 'ไม่ว่าสถานการณ์การเงินปัจจุบันจะเป็นอย่างไรก็ตามไม่มีผิดไม่มีถูก ที่ผ่านมาเป็นเพียงปรากฏการณ์ มาทำความรู้จักกับกลไกธรรมชาติที่มีในทุกคน')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <article class="blog-post blog-post-detail tg-haslayout">
                                        <figure>
                                            <img src="assets/images/blog/life-destiny_detail.png" alt="image description">
                                        </figure>
                                        <div class="tg-post-detail">
                                            <div class="tg-description">
                                                <p><legend>ชะตาชีวิตลิขิตได้</legend></p>
                                                <p>
                                                    &emsp;&emsp;&emsp;ไม่ว่าสถานการณ์การเงินปัจจุบันจะเป็นอย่างไรก็ตามไม่มีผิดไม่มีถูก ที่ผ่านมาเป็นเพียงปรากฏการณ์ มาทำความรู้จักกับกลไกธรรมชาติที่มีในทุกคน
                                                </p>
                                                <p>
                                                    &emsp;&emsp;&emsp;โดยธรรมชาติของมนุษย์เราจะตัดสินใจตลอดเวลาในสถานการณ์ต่าง ๆ “ตัดสินใจทำหรือไม่ทำ” การตัดสินใจตัวเราเองจะมีความรู้สึกมาเกี่ยวข้องเสมอ อารมณ์ความรู้สึกนั้นเกิดจากความคิด
                                                </p>
                                                <p>
                                                    &emsp;&emsp;&emsp;ในสถานการณ์แบบเดียวกันตัดสินใจแบบเดียวกันซ้ำ ๆ เกิดเป็นพฤติกรรมที่สร้างนิสัย นิสัยถาวรทำให้เกิดผลลัพธ์ซ้ำ ๆ จะกลายเป็นชะตาชีวิตของเรานั้นเอง 
                                                </p>
                                                <p>
                                                    &emsp;&emsp;&emsp;โดยธรรมชาติเราจะหนีความทุกข์ เข้าหาความสุข เครียดช็อป เครียดกิน เครียดออกำลังกาย ผลลัพธ์ภายนอกแตกต่างกัน
                                                </p>
                                                <p style="text-align: center">
                                                    <img src="assets/images/blog/blog_list_4_1.png" />
                                                </p>
                                                <p>
                                                    &emsp;&emsp;&emsp;กลไกนี้เชื่อมโยงกับเส้นใยประสาทในสมอง ในอดีตมีความเชื่อว่าสมองจะพัฒนาถึงอายุ 7 ขวบ แล้วจะไม่มีการเปลี่ยนแปลงเหมือนโครงเหล็ก หลาย 10 ปีที่ผ่านมาพบว่า ขนาดของสมองเปลี่ยนแปลงได้ ตามความสามารถที่ถูกสร้างทักษะใหม่ และความสามารถใดที่ไม่ได้ใช้สมองส่วนที่เกี่ยวข้องกับความสามารถนั้นถูกทำลายและกำจัดออก
                                                </p>
                                                <p>
                                                    &emsp;&emsp;&emsp;ดังนั้น หากเราต้องการเปลี่ยนพฤติกรรมการเงิน เรียนรู้ให้เข้าใจการทำงานของเงิน และสร้างพฤติกรรมใหม่ไปในทิศทางการเงินที่ต้องการ ซึ่งโดยธรรมชาติการเริ่มทำอะไรใหม่ ๆ จะฝืนอยู่ซักระยะหนึ่ง การทำซ้ำจะสร้างทักษะใหม่กลายเป็นนิสัยใหม่ เส้นใยประสาทในสมองจะถูกสร้างขึ้นมาใหม่เชื่อมโยงตามพฤติกรรมใหม่ ชะตาการเงินชะตาชีวิตเป็นไปตามที่เรากำหนดได้
                                                </p>
                                                <p>
                                                    *สนใจค้นคว้าเพิ่มเติมได้จากหนังสือ “กรรม ตาม สมอง” ของขุนเขา สินธุเสน เขจรบุตร, ถอดรหัสลับสมองเงินล้าน (Secrets of the Millionaire Mind) ของ T-Harv Eker
                                                </p>
                                            </div><br/>
                                            <div class="tg-post-meta">
                                                <span>
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target=".mentor-p_kieak">โดย อ.วิภา เจริญกิจสุพัฒน์ / </a>
                                                </span>
                                                <span>
                                                    <a href="javascript:void(0)">CFP<sup>®</sup>, RFC, FChFP, MSIT</a>
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                </li>
                                                <li>                                                   
                                                    <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('ชะตาชีวิตลิขิตได้', 'life-destiny_detail.png', 'ไม่ว่าสถานการณ์การเงินปัจจุบันจะเป็นอย่างไรก็ตามไม่มีผิดไม่มีถูก ที่ผ่านมาเป็นเพียงปรากฏการณ์ มาทำความรู้จักกับกลไกธรรมชาติที่มีในทุกคน')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php
                                } else if ($blogId == md5(5)) {
                                    ?>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                </li>
                                                <li>                                                   
                                                    <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('พัฒนาทักษะการเงินอย่างไรเพื่อไปสู่อิสรภาพการเงิน', 'financial_freedom_detail.png', 'หลังจากเราทราบแล้วว่าตนเองอยู่ในสถานการณ์การเงินแบบใด ต่อไปคือการเข้ากระบวนการวางแผนการเงินเพื่อไปสู่อิสรภาพการเงิน ในกระบวนการอาจจะจำเป็นต้องปรับสภาพคล่องให้เหมาะสม สร้างแผนสำรองเพื่อรองรับความไม่แน่นอน มีการปรับหรือตัดค่าใช้จ่ายผันแปร และบางครั้งอาจจะจำเป็นต้องปรับค่าใช้จ่ายคงที่ให้ลดลง หากจำเป็น')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <article class="blog-post blog-post-detail tg-haslayout">
                                        <figure>
                                            <img src="assets/images/blog/financial_freedom_detail.png" alt="image description">
                                        </figure>
                                        <div class="tg-post-detail">
                                            <div class="tg-description">
                                                <p><legend>พัฒนาทักษะการเงินอย่างไรเพื่อไปสู่อิสรภาพการเงิน</legend></p>
                                                <p>
                                                    &emsp;&emsp;&emsp;หลังจากเราทราบแล้วว่าตนเองอยู่ในสถานการณ์การเงินแบบใด ต่อไปคือการเข้ากระบวนการวางแผนการเงินเพื่อไปสู่อิสรภาพการเงิน ในกระบวนการอาจจะจำเป็นต้องปรับสภาพคล่องให้เหมาะสม สร้างแผนสำรองเพื่อรองรับความไม่แน่นอน มีการปรับหรือตัดค่าใช้จ่ายผันแปร และบางครั้งอาจจะจำเป็นต้องปรับค่าใช้จ่ายคงที่ให้ลดลง หากจำเป็น
                                                </p>
                                                <p>
                                                    &emsp;&emsp;&emsp;ถ้าการปรับรายจ่ายลงแล้ว ยังมีเงินไม่เพียงพอ จำเป็นต้องหารายได้เพิ่ม ในเบื้องต้นการเพิ่มรายได้แนะนำให้พัฒนาความสามารถในงานเดิมเพื่อเพิ่มโอกาสในการมีรายได้เพิ่มก่อน จึงจะไปขั้นการค้นหาอาชีพที่ 2
                                                </p>
                                                <p>
                                                    &emsp;&emsp;&emsp;การเตรียมสร้างอาชีพที่ 2 ให้เกิดขึ้น นอกเหนือจากจะช่วยเพิ่มรายได้ในปัจจุบันแล้ว ยังเป็นการเตรียมทำอาชีพสำรองช่วงที่เรายังมีรายได้ประจำที่มั่นคงอยู่ ทักษะความชำนาญอาชีพที่ 2 อาจจะกลายเป็นรายได้หลักในอนาคตก็เป็นไปได้ นอกจากนี้ ถ้ามีการถูกให้ออกจากงานกะทันหันอาชีพที่ 2 ช่วยให้เรายังคงมีอาชีพ มีรายได้อยู่ หรือทดแทนรายได้หลักกรณีเกษียณแล้วมีเงินออมไม่เพียงพอหลักเกษียณได้
                                                </p>
                                                <p>
                                                    <strong>กิจกรรมที่ต้องเข้ากระบวนการวางแผนการเงินของสถานะการเงินแต่ละแบบสรุปดังนี้</strong>
                                                </p>
                                                <p>
                                                <table class="table table-condensed table-hover schedule_detail_table" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <td width="50%">
                                                                <strong>กระบวนการวางแผนการเงิน</strong>
                                                            </td>
                                                            <td style="width:10%">
                                                                <strong>พึ่งพาผู้อื่น</strong>
                                                            </td style="width:10%">
                                                            <td style="width:10%">
                                                                <strong>มีหนี้ไม่มีเงินเก็บ</strong>
                                                            </td>
                                                            <td style="width:10%">
                                                                <strong>ไม่มีหนี้ไม่มีเงินเก็บ</strong>
                                                            </td>
                                                            <td style="width:10%">
                                                                <strong>ไม่มีหนี้เงินเหลือมาก</strong>
                                                            </td>
                                                            <td style="width:10%">
                                                                <strong>การเงินปลอดภัย</strong>
                                                            </td>
                                                            <td style="width:10%">
                                                                <strong>อิสรภาพการเงิน</strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">
                                                                ปรับโครงสร้างหนี้
                                                            </td>
                                                            <td>
                                                                x
                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td >

                                                            </td>
                                                            <td >

                                                            </td>
                                                            <td >

                                                            </td>
                                                            <td >

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">
                                                                บันทึกรายรับรายจ่าย
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                            </td>
                                                            <td >
                                                            </td>
                                                            <td >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">
                                                                ปรับ/ตัดรายจ่าย
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                            </td>
                                                            <td >
                                                            </td>
                                                            <td >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">
                                                                แบ่งประเภทรายจ่ายและทำงบประมาณรายจ่าย
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                            </td>
                                                            <td >
                                                            </td>
                                                            <td >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">
                                                                เตรียมเงินสำรองฉุกเฉิน
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                            </td>
                                                            <td >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">
                                                                วางแผนภาษี
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                            </td>
                                                            <td >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">
                                                                วางแผนประกันภัย
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                            </td>
                                                            <td >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">
                                                                วางแผนซื้อบ้านของครอบครัว
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td ></td>
                                                            <td >

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">
                                                                วางแผนการศึกษาบุตร วางแผนเกษียณอายุ วางแผนดูแลผู้สูงอายุระยะยาว
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">
                                                                จัดพอร์ตลงทุนตามความเสี่ยงที่รับได้และเป้าหมายการเงิน
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">
                                                                วางแผนภาษีมรดก
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">
                                                                พัฒนาความสามารถในงานปัจจุบัน/ค้นหาอาชีพที่ 2 และการสร้างธุรกิจ
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                            <td >
                                                                x
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                </p>
                                                <p>
                                                    *เงินสภาพคล่อง คือ เงินที่พร้อมใช้ มักออมในบัญชีเงินฝากธนาคาร หรือกองทุนรวมตลาดเงิน ผลตอบแทนเฉลี่ย 0.5-1.8% ต่อปี ในขณะที่เงินเฟ้อเฉลี่ย 3-5%
                                                </p>
                                            </div><br/>
                                            <div class="tg-post-meta">
                                                <span>
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target=".mentor-p_kieak">โดย อ.วิภา เจริญกิจสุพัฒน์ / </a>
                                                </span>
                                                <span>
                                                    <a href="javascript:void(0)">CFP<sup>®</sup>, RFC, FChFP, MSIT</a>
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                </li>
                                                <li>                                                   
                                                    <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('พัฒนาทักษะการเงินอย่างไรเพื่อไปสู่อิสรภาพการเงิน', 'financial_freedom_detail.png', 'หลังจากเราทราบแล้วว่าตนเองอยู่ในสถานการณ์การเงินแบบใด ต่อไปคือการเข้ากระบวนการวางแผนการเงินเพื่อไปสู่อิสรภาพการเงิน ในกระบวนการอาจจะจำเป็นต้องปรับสภาพคล่องให้เหมาะสม สร้างแผนสำรองเพื่อรองรับความไม่แน่นอน มีการปรับหรือตัดค่าใช้จ่ายผันแปร และบางครั้งอาจจะจำเป็นต้องปรับค่าใช้จ่ายคงที่ให้ลดลง หากจำเป็น')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php
                                } else if ($blogId == md5(6)) {
                                    ?>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                </li>
                                                <li>                                                   
                                                    <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('ภาพรวมกระบวนการวางแผนการเงิน', 'financial_planning_detail.png', 'หลักการในกระบวนการวางแผนการเงิน ประกอบด้วย 3 เรื่องหลัก ๆ คือ รายได้ รายจ่าย และการลงทุน เมื่อทราบแล้วว่าเรามีสถานะการเงินแบบไหน เรามาเข้ากระบวนการที่เหตุ เริ่มจากการบริหารรายจ่ายปัจจุบัน บริหารให้มีเงินเหลือออม เป็นจุดเริ่มต้นในการสร้างความมั่งคั่งที่มั่นคง')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <article class="blog-post blog-post-detail tg-haslayout">
                                        <figure>
                                            <img src="assets/images/blog/financial_planning_detail.png" alt="image description">
                                        </figure>
                                        <div class="tg-post-detail">
                                            <div class="tg-description">
                                                <p><legend>ภาพรวมกระบวนการวางแผนการเงิน</legend></p>
                                                <p>
                                                    &emsp;&emsp;&emsp;หลักการในกระบวนการวางแผนการเงิน ประกอบด้วย 3 เรื่องหลัก ๆ คือ รายได้ รายจ่าย และการลงทุน เมื่อทราบแล้วว่าเรามีสถานะการเงินแบบไหน เรามาเข้ากระบวนการที่เหตุ เริ่มจากการบริหารรายจ่ายปัจจุบัน บริหารให้มีเงินเหลือออม เป็นจุดเริ่มต้นในการสร้างความมั่งคั่งที่มั่นคง
                                                </p>
                                                <p style="text-align: center">
                                                    <img src="assets/images/blog/blog_list_6_1.png" />
                                                </p>
                                                <p>
                                                    &emsp;&emsp;&emsp;ภาพนี้เลียนแบบมาจากเอกสารเผยแพร่ชื่อ “Building Wealth” ของ Federal Reserve Bank of Dallas เว็บไซด์ <a href="http://www.dallasfed.org" target="_blank">www.dallasfed.org</a> เป็นภาพที่ให้ไอเดียที่ชัดเจน เข้าใจง่าย บอกถึงการสร้างความมั่งคั่งด้วยการควบคุมหนี้และการใช้จ่าย จึงจะมีเงินออมนำไปลงทุนตามเป้าหมายการเงิน
                                                </p>
                                                <p style="text-align: center">
                                                    <img src="assets/images/blog/blog_list_6_2.png" />
                                                </p>
                                                <p>
                                                    &emsp;&emsp;&emsp;อีกภาพหนึ่งที่ชัดเจน ได้แนวความคิดจากหนังสือ “เงินกับชีวิต” (Your Money or Your life) โดย โจ โดมิงเกซ และวิคกี้ โรบิน ในภาพกระบวนการวางแผนการเงิน แกน Y คือจำนวนเงิน แกน X คือเส้นอายุ จับหลักจาก 3 เส้นเช่นเดียวกันโดยเริ่มจากเส้นแนวโน้มรายจ่ายใช้สีแดง เส้นแนวโน้มรายได้ใช้สีน้ำเงิน และเส้นแนวโน้มการลงทุนใช้สีเขียว เคยรู้จักครั้งแรกจาก 10 garden Consult เป็นบริษัทวางแผนการเงินของคนไทยที่วางแผนแบบเก็บค่าธรรมเนียมและเปิดอบรมแบบ in-house ให้กับพนักงานบริษัทฯและหน่วยงานราชการ ได้นำกราฟนี้มาอธิบายให้ผู้เรียนเห็นภาพรวมของกระบวนการวางแผนการเงิน
                                                </p>
                                                <p>
                                                    1.	เส้นแนวโน้มรายจ่าย  จากด้านซ้ายจะเห็นว่าเส้นสีแดงกับสีน้ำเงินซ้อน ๆ กันอยู่ แสดงให้เห็นว่าคนส่วนใหญ่ รายได้เพิ่มขึ้นรายจ่ายเพิ่มขึ้นตามกัน เป็นต้นเหตุที่ทำให้ไม่มีเงินเหลือให้ออม เมื่อผ่านกระบวนการวางแผนการเงินจะมีกลไกที่ช่วยดูแลเส้นรายจ่ายให้ควบคุมได้ ไม่ให้เพิ่มตามรายได้ ซึ่งจะกล่าวรายละเอียดในตอนต่อไป
                                                </p>
                                                <blockquote>
                                                    <q>
                                                        <strong>“คนส่วนใหญ่ รายได้เพิ่มขึ้นรายจ่ายเพิ่มขึ้นตามกัน
                                                            เป็นต้นเหตุทีทำให้ไม่มีเงินเหลือให้ออม
                                                            เมื่อมีการผ่านกระบวนการวางแผนการเงิน
                                                            จะมีกลไกที่ช่วยดูแลเส้นรายจ่ายให้ควบคุมได้”</strong>

                                                    </q>
                                                </blockquote>
                                                <p>
                                                    2.	เส้นแนวโน้มรายได้  การทำงานเกิดความชำนาญ มีประสบการณ์ รวมทั้งภาวะเงินเฟ้อค่าครองชีพที่สูงขึ้น เส้นรายได้จะเพิ่มขึ้น ถึงจุดหนึ่งหลายคนรายได้ลดลงช่วงปลาย และทุกคนเส้นรายได้จะหยุดเมื่อเกษียณอายุ
                                                </p>
                                                <p>
                                                    3.	เส้นแนวโน้มลงทุน  ช่วงเริ่มต้นของการลงทุนอาจจะมีติดลบบ้าง เงินจะเติบโตขึ้นในระยะยาว ในภาพแสดงให้เห็นว่าเราวางแผนการออมการลงทุนไปถึงจุดหนึ่ง จะมีผลตอบแทนจ่ายออกมาจากเงินลงทุน เทียบเท่ากับรายจ่ายเมื่อไร แปลว่า รายได้เกิดจากทรัพย์สินโดยไม่ต้องใช้ตัวเองทำงาน แตะจุดเปลี่ยนสภาพ เกิด “อิสรภาพการเงิน”
                                                </p>
                                            </div><br/>
                                            <div class="tg-post-meta">
                                                <span>
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target=".mentor-p_kieak">โดย อ.วิภา เจริญกิจสุพัฒน์ / </a>
                                                </span>
                                                <span>
                                                    <a href="javascript:void(0)">CFP<sup>®</sup>, RFC, FChFP, MSIT</a>
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                </li>
                                                <li>                                                   
                                                    <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('ภาพรวมกระบวนการวางแผนการเงิน', 'financial_planning_detail.png', 'หลักการในกระบวนการวางแผนการเงิน ประกอบด้วย 3 เรื่องหลัก ๆ คือ รายได้ รายจ่าย และการลงทุน เมื่อทราบแล้วว่าเรามีสถานะการเงินแบบไหน เรามาเข้ากระบวนการที่เหตุ เริ่มจากการบริหารรายจ่ายปัจจุบัน บริหารให้มีเงินเหลือออม เป็นจุดเริ่มต้นในการสร้างความมั่งคั่งที่มั่นคง')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php
                                } else if ($blogId == md5(7)) {
                                    ?>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                </li>
                                                <li>                                                   
                                                    <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('กระบวนการวางแผนการเงินมีกลไกคุมรายจ่ายกันยังไง...ไม่ให้เพิ่มตามรายได้', '7_detail.png', 'หลายคนอาจจะยังไม่รู้ตัวว่ารายจ่ายเพิ่มตามรายได้  อาจจะรู้สึกชีวิตสะดวกสบายขึ้น หรือนับวันอึดอัดมากขึ้นเรื่อย ๆ ด้วยรู้สึกว่าภาระมากขึ้น อาจจะรู้สึกสงสัยทำไงที่จะควบคุมรายจ่ายเพื่อให้รายได้ที่เพิ่มขึ้นกลายเป็นเงินออมที่เพิ่มขึ้นเรื่อย ๆ')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <article class="blog-post blog-post-detail tg-haslayout">
                                        <figure>
                                            <img src="assets/images/blog/7_detail.png" alt="image description">
                                        </figure>
                                        <div class="tg-post-detail">
                                            <div class="tg-description">
                                                <p><legend>กระบวนการวางแผนการเงินมีกลไกคุมรายจ่ายกันยังไง...ไม่ให้เพิ่มตามรายได้</legend></p>
                                                <p>
                                                    &emsp;&emsp;&emsp;หลายคนอาจจะยังไม่รู้ตัวว่ารายจ่ายเพิ่มตามรายได้  อาจจะรู้สึกชีวิตสะดวกสบายขึ้น หรือนับวันอึดอัดมากขึ้นเรื่อย ๆ ด้วยรู้สึกว่าภาระมากขึ้น อาจจะรู้สึกสงสัยทำไงที่จะควบคุมรายจ่ายเพื่อให้รายได้ที่เพิ่มขึ้นกลายเป็นเงินออมที่เพิ่มขึ้นเรื่อย ๆ
                                                </p>
                                                <p>
                                                    <strong>กลไกการคุมรายจ่ายประกอบด้วย</strong>
                                                </p>
                                                <p>
                                                    •	การบันทึกรายจ่ายและการทำงบประมาณรายจ่าย (Budgeting)<br> 
                                                    •	เงินสำรองฉุกเฉิน (Emergency Cash)<br>
                                                    •	การบริหารความเสี่ยง (Risk Management)<br>
                                                    •	การบริหารโครงสร้างหนี้ (Debt Management)<br/>
                                                    <img src="assets/images/blog/blog_list_7_1.png" /><br/>
                                                    •	การบันทึกรายจ่ายและการทำงบประมาณรายจ่าย (Budgeting) กระบวนการที่จะทำให้เราติดตามการเคลื่อนไหวของค่าใช้จ่ายได้ง่ายขึ้น ปกติเราจ่ายค่าใช้จ่ายคงที่ เช่น ค่างวดบ้าน ค่างวดรถ เหลือเงินเท่าไรมักจะเก็บเงินทั้งหมดไว้ในบัญชีเดียว ค่าอาหาร ค่าเดินทาง ค่ารักษาพยาบาล ค่าเทอม จิปาถะ หยิบออกมาจากที่เดียวกันทำให้ไม่ทราบว่าค่าใช้จ่ายไหนใช้มากเกินไป
                                                </p>
                                                <p>
                                                    วิธีทำงบประมาณง่าย ๆ เบื้องต้นคือ แยกเงินที่เหลือจากการจ่ายค่าใช้จ่ายคงที่ไปแล้ว ใส่ลงกล่องแยกตามประเภทรายจ่าย เช่น ค่าอาหาร ค่าเดินทาง ค่าเทอมฯลฯ ควบคู่กับการบันทึกค่าใช้จ่ายจริงที่เกิดขึ้น เราจะหยิบเงินไปใช้จ่ายตามประเภทของงบประมาณ ซึ่งจะช่วยให้เห็นรายจ่ายรายการที่ใช้เกินได้ง่ายขึ้นในแต่ละกล่อง เห็นก่อนที่เงินจะหมด
                                                </p>
                                                <p>
                                                    หลังจากจัดทำงบประมาณรายจ่ายแล้ว ทำให้เราติดตามได้ว่าค่าใช้จ่ายหมวดไหนใช้เท่าไร รายการไหนจ่ายเกินความจำเป็น โดยกลไกนี้จะทำให้มีเงินเหลือออมเพิ่มขึ้น
                                                </p>
                                                <p>
                                                    สำหรับรายจ่ายที่จ่ายปีละครั้ง เช่น เบี้ยประกันภัย บริหารรายจ่ายไม่ใช้เป็นภาระได้ด้วยการนำรายจ่ายก้อนนั้นหาร 12 เปิดบัญชีแล้วหักเข้าบัญชีทุกเดือนเสมือนเป็นค่าใช้จ่ายรายเดือน
                                                </p>
                                                <p>
                                                    •	เงินสำรองฉุกเฉิน (Emergency Cash) เตรียมเท่ากับรายจ่าย 3-12 เดือน ตามความเหมาะสม  เงินสำรองฉุกเฉินจะช่วยปกป้องแผนการออมและเป้าหมายต่าง ๆ และป้องกันการเป็นหนี้ หากเกิดค่าใช้จ่ายที่ไม่อยู่ในแผน เช่น ค่าเปลี่ยนยางล้อรถที่ไม่มีอยู่ในแผน กรณีต้องออกงานกะทันหัน ฯลฯ
                                                    “เงินสำรองฉุกเฉินจะช่วยปกป้องแผนการออมและเป้าหมายต่าง ๆ และป้องกันการเป็นหนี้” <br/>
                                                    •	การบริหารความเสี่ยง (Risk Management)  บางเหตุการณ์ เช่น จำเป็นต้องมีการผ่าตัดใหญ่ค่าใช้จ่ายหลายแสนบาท  การดึงเงินสำรองฉุกเฉินมาใช้อาจจะไม่พอ หรือทำให้บัญชีเงินสำรองฉุกเฉินเงินหมดไปเลย  การเตรียมเบี้ยประกันในงบประมาณที่เหมาะสม จะช่วยให้เราไม่ต้องรับผิดชอบค่ารักษาพยาบาลก้อนใหญ่ ช่วยปกป้องเงินสำรองฉุกเฉินและแผนการออมอื่น ๆ ไม่ให้เสียหายได้ และที่สำคัญป้องกันการเข้าสู่วงจรหนี้

                                                </p>
                                                <blockquote>
                                                    <q>
                                                        <strong style="color: #0e62c7">“การเตรียมเบี้ยประกันในงบประมาณที่เหมาะสม 
                                                            จะช่วยให้เราไม่ต้องรับผิดชอบค่ารักษาพยาบาลก้อนใหญ่ 
                                                            ช่วยปกป้องเงินสำรองฉุกเฉินและแผนการออมอื่น ๆ ไม่ให้เสียหายได้ 
                                                            และที่สำคัญที่สุด คือ ป้องกันการเข้าสู่วงจรหนี้”</strong>

                                                    </q>
                                                </blockquote>
                                                <p>
                                                    •	การบริหารโครงสร้างหนี้ (Debt Management) การปรับโครงสร้างหนี้ จะช่วยลดความเครียด ลดภาระการจ่ายดอกเบี้ย ลดระยะเวลาการผ่อนชำระได้ ป้องกันการเกิดรายจ่ายเกินรายได้เรื้อรังจากภาระหนี้สินซ้ำซ้อน 
                                                </p>
                                                <p>
                                                    กลไกทั้ง 4 ประการเป็นกระบวนการวางแผนการเงินที่สำคัญเหมือนการตอกเสาเข็มก่อนการสร้างบ้าน หากฐานไม่มีเสาเข็ม หรือวางเสาเข็มไม่ครบตามตำแหน่งสำคัญ บ้านอาจจะทรุดหรือพังได้ เช่นเดียวกันกับเป้าหมายการเงิน ถ้าเสาเข็มการวางพื้นฐาน 4 กลไกนี้ไม่พร้อม ยากที่ไปถึงฝั่งฝันเป้าหมายการเงินที่มั่นคงได้
                                                </p>
                                            </div><br/>
                                            <div class="tg-post-meta">
                                                <span>
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target=".mentor-p_kieak">โดย อ.วิภา เจริญกิจสุพัฒน์ / </a>
                                                </span>
                                                <span>
                                                    <a href="javascript:void(0)">CFP<sup>®</sup>, RFC, FChFP, MSIT</a>
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                </li>
                                                <li>                                                   
                                                    <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('กระบวนการวางแผนการเงินมีกลไกคุมรายจ่ายกันยังไง...ไม่ให้เพิ่มตามรายได้', '7_detail.png', 'หลายคนอาจจะยังไม่รู้ตัวว่ารายจ่ายเพิ่มตามรายได้  อาจจะรู้สึกชีวิตสะดวกสบายขึ้น หรือนับวันอึดอัดมากขึ้นเรื่อย ๆ ด้วยรู้สึกว่าภาระมากขึ้น อาจจะรู้สึกสงสัยทำไงที่จะควบคุมรายจ่ายเพื่อให้รายได้ที่เพิ่มขึ้นกลายเป็นเงินออมที่เพิ่มขึ้นเรื่อย ๆ')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php
                                } else if ($blogId == md5(8)) {
                                    ?>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                </li>
                                                <li>                                                   
                                                    <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('Budgeting เสาเข็มแรก', '8_detail.png', 'การทำงบประมาณหรือ Budgeting ศัพท์ดูหรู ที่รู้จักในการทำงบประมาณรายจ่ายบริษัท ดูเป็นทางการทำให้หลายคนรู้สึกว่าไกลตัว การทำงบประมาณ เป็นกำหนดตัวเลขประมาณการที่คาดว่าจะเป็นไปได้ของรายได้ ยอดค่าใช้จ่ายแต่ละประเภท รวมถึงงบประมาณการออมด้วย')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <article class="blog-post blog-post-detail tg-haslayout">
                                        <figure>
                                            <img src="assets/images/blog/8_detail.png" alt="image description">
                                        </figure>
                                        <div class="tg-post-detail">
                                            <div class="tg-description">
                                                <p><legend>Budgeting เสาเข็มแรก</legend></p>
                                                <p>
                                                    &emsp;&emsp;&emsp;การทำงบประมาณหรือ Budgeting ศัพท์ดูหรู ที่รู้จักในการทำงบประมาณรายจ่ายบริษัท ดูเป็นทางการทำให้หลายคนรู้สึกว่าไกลตัว การทำงบประมาณ เป็นกำหนดตัวเลขประมาณการที่คาดว่าจะเป็นไปได้ของรายได้ ยอดค่าใช้จ่ายแต่ละประเภท รวมถึงงบประมาณการออมด้วย
                                                </p>
                                                <p style="text-align: center">
                                                    <img src="assets/images/blog/blog_list_8_1.png" />
                                                </p>
                                                <p>
                                                    <strong>ขั้นตอนทำงบประมาณ</strong><br/>
                                                    1.	บันทึกงบประมาณรายได้ เป็นประมาณการรายได้ที่จะได้รับ<br/>
                                                    2.	บันทึกงบประมาณรายจ่าย เป็นประมาณการรายจ่ายแต่ละหมวด แบ่งเป็น 3 กลุ่ม คือ ค่าใช้จ่ายคงที่ ค่าใช้จ่ายผันแปร และเงินออมตามเป้าหมาย<br/>
                                                    3.	เทียบงบประมาณรายรับและรายจ่าย ถ้าติดลบ ขยับปรับเปลี่ยนที่เงินออมและค่าใช้จ่ายผันแปรจนกว่าจะไม่ติดลบ<br/>
                                                    4.	รายได้รวมหักรายจ่ายคงที่ จึงจะนำเงินที่เหลือมาทำงบประมาณรายจ่ายผันแปรและเงินออม<br/>
                                                    5.	รายจ่ายต่าง ๆ นอกจากแยกในการบันทึกงบประมาณแล้ว “ต้องแยกเงินจริง ๆ” ด้วย <br/>
                                                    &emsp;&emsp;•จ่ายเดือนละครั้งแยกเข้าบัญชีธนาคาร<br/>
                                                    &emsp;&emsp;•รายจ่ายที่จ่ายบ่อย เดือนละหลายครั้ง เช่น ค่าอาหาร ค่าเดินทาง ฯลฯ แยกเงินออกมาใส่กล่องหรือซอง <br/>
                                                    6.	รายจ่ายที่จ่ายบ่อยให้บันทึกเทียบกับงบประมาณ ซึ่งจะทำให้เราแก้ปัญหาค่าใช้จ่ายเกินได้ตรงจุด<br/>
                                                    7.	รายจ่ายที่จ่ายปีละครั้ง เช่น ค่าเบี้ยประกัน ค่าส่วนกลางหมู่บ้าน ฯลฯ นำค่าใช้จ่ายมาหาร 12 เสมือนจ่ายรายเดือน แต่ให้ออมใส่บัญชีธนาคาร*อีก 1 เล่ม จะไม่เป็นภาระเมื่อถึงงวดที่ต้องชำระ<br/>
                                                </p>
                                                <p>
                                                    &emsp;&emsp;&emsp;ขั้นตอนข้างต้นในการทำงบประมาณรายจ่ายวิธีนี้เป็นวิธีการแบบง่าย ๆ นี้สามารถเริ่มต้นทำได้เลย พร้อม ๆ กับการบันทึกรายจ่าย  เมื่อเราเห็นค่าใช้จ่ายหมวดใดเกิน เดือนถัดไปแยกมาจดเป็นรายละเอียด จะเห็นรายการค่าใช้จ่ายที่เกินชัดเจนขึ้น
                                                </p>
                                                <p>
                                                    &emsp;&emsp;&emsp;ช่วงแรกงบประมาณที่ใกล้เคียงกับการใช้จ่ายจริง ๆ มีการเปลี่ยนแปลงขยับขึ้นขยับลงได้ เนื่องจากระยะแรก ๆ ค่าใช้จ่ายบางรายการอาจจะถูกปรับเปลี่ยน ถ้าไม่เคยบันทึกรายจ่ายเลยใช้เวลาอย่างน้อย 12 เดือน งบประมาณจะชัดเจนขึ้น
                                                </p>
                                                <blockquote>
                                                    <q>
                                                        <strong style="color: #0e62c7">“การทำงบประมาณรายจ่ายจำเป็นอย่างยิ่ง สำหรับอาชีพที่มีรายได้ไม่สม่ำเสมอ มากบ้างน้อยบ้าง 
                                                            การทำงบประมาณจะช่วยหยุดและป้องกันการเข้าสู่วงจรหนี้ครัวเรือนได้”</strong>
                                                    </q>
                                                </blockquote>
                                                <p>
                                                    &emsp;&emsp;&emsp;การทำงบประมาณรายจ่ายจำเป็นอย่างยิ่ง สำหรับอาชีพที่มีรายได้ไม่สม่ำเสมอ มากบ้างน้อยบ้าง จะช่วยหยุดและป้องกันการเข้าสู่วงจรหนี้ครัวเรือนได้ ถ้าไม่มีการทำงบประมาณกำกับการใช้จ่าย ในเดือนที่มีรายได้มากก็จะใช้มาก ในขณะที่เดือนที่มีรายได้น้อยรายได้ติดลบ จะต้องกู้หนี้ยืมสินมาใช้จ่าย
                                                </p>
                                                <p>
                                                    &emsp;&emsp;&emsp;การมีงบประมาณรายจ่ายที่ชัดเจน ในเดือนที่มีรายได้มากกว่างบประมาณรายจ่ายมาก ๆ ให้เก็บเงินส่วนเกินสำรองไว้ในเดือนที่มีรายได้เข้ามาน้อยกว่ารายจ่าย
                                                </p>
                                                <p>
                                                    &emsp;&emsp;&emsp;ทุกครั้งที่มีการเปลี่ยนแปลงในชีวิต เช่น แต่งงาน, มีลูกคนใหม่ ฯลฯ งบประมาณจะต้องปรับเปลี่ยนตามสถานการณ์ และแน่นอน เราจำเป็นต้องมีการบันทึกรายจ่ายละเอียดอีกครั้ง เพื่อให้โครงสร้างของงบประมาณรายจ่ายรองรับรูปแบบชีวิตที่เปลี่ยนแปลงไป<br/>
                                                    *ปัจจุบันอัตราดอกเบี้ยเงินฝากธนาคารเพียง 0.5-1.5% และเสียภาษีหัก ณ ที่จ่าย 15% แนะนำให้สำรองเงินไว้ใน “กองทุนรวมตลาดเงิน” เป็นกองทุนรวมที่ลงทุนในตราสารหนี้ระยะสั้น ไม่เกิน 1 ปี เช่น ตั๋วเงินคลัง ได้ผลตอบแทนสุทธิเกือบ 2% ไม่เสียภาษี

                                                </p>
                                            </div><br/>
                                            <div class="tg-post-meta">
                                                <span>
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target=".mentor-p_kieak">โดย อ.วิภา เจริญกิจสุพัฒน์ / </a>
                                                </span>
                                                <span>
                                                    <a href="javascript:void(0)">CFP<sup>®</sup>, RFC, FChFP, MSIT</a>
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                </li>
                                                <li>                                                   
                                                    <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('Budgeting เสาเข็มแรก', '8_detail.png', 'การทำงบประมาณหรือ Budgeting ศัพท์ดูหรู ที่รู้จักในการทำงบประมาณรายจ่ายบริษัท ดูเป็นทางการทำให้หลายคนรู้สึกว่าไกลตัว การทำงบประมาณ เป็นกำหนดตัวเลขประมาณการที่คาดว่าจะเป็นไปได้ของรายได้ ยอดค่าใช้จ่ายแต่ละประเภท รวมถึงงบประมาณการออมด้วย')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php
                                } else if ($blogId == md5(9)) {
                                    ?>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                </li>
                                                <li>                                                   
                                                    <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('เงินสำรองฉุกเฉิน (Emergency Cash) เสาเข็มที่สอง', '9_detail.png', 'ถ้าเราเพิ่งเริ่มวางแผนการเงิน และยังไม่มีการกันเงินสำรองฉุกเฉินเลย แนะนำให้ตั้งเป้าหมายเตรียมเงินสำรองฉุกเฉิน 6 เดือนของรายจ่ายประมาณการจากงบประมาณในหัวข้อที่แล้ว')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <article class="blog-post blog-post-detail tg-haslayout">
                                        <figure>
                                            <img src="assets/images/blog/9_detail.png" alt="image description">
                                        </figure>
                                        <div class="tg-post-detail">
                                            <div class="tg-description">
                                                <p><legend>เงินสำรองฉุกเฉิน (Emergency Cash) เสาเข็มที่สอง</legend></p>
                                                <p>
                                                    &emsp;&emsp;&emsp;ถ้าเราเพิ่งเริ่มวางแผนการเงิน และยังไม่มีการกันเงินสำรองฉุกเฉินเลย แนะนำให้ตั้งเป้าหมายเตรียมเงินสำรองฉุกเฉิน 6 เดือนของรายจ่ายประมาณการจากงบประมาณในหัวข้อที่แล้ว และเริ่มเปิดบัญชีเงินฝากเพื่อเตรียมเงินก้อนนี้ทันที
                                                </p>

                                                <p>
                                                    &emsp;&emsp;&emsp;หลายคนเห็นความจำเป็นของเงินสำรองฉุกเฉินแล้ว ก็จะมีคำถามต่อไปว่าแล้วอย่างเรา &ldquo;ต้องเตรียมเท่าไร&rdquo;, หรือค่าใช้จ่ายติดลบทุกเดือน อย่างนี้จะเอาเงินที่ไหนมาเตรียมเงินสำรองฉุกเฉิน</p>

                                                <blockquote>
                                                    <q>
                                                        <strong>&ldquo;ค่าใช้จ่ายติดลบทุกเดือน จะเอาเงินที่ไหนมาเตรียมเงินสำรองฉุกเฉิน&rdquo;</strong>
                                                    </q>
                                                </blockquote>

                                                <p>
                                                    •  ควรเตรียมเงินสำรองฉุกเฉินเท่าไร?<br/>
                                                    •  ควรเตรียมเงินสำรองฉุกเฉินอย่างไร?<br/>
                                                </p>

                                                <p>
                                                    <strong><u>ควรเตรียมเงินสำรองฉุกเฉินเท่าไร</u><u>?</u></strong>
                                                </p>

                                                <p >การจะเตรียมเท่าไรนั้นสัมพันธ์กับอาชีพ ภาระความรับผิดชอบ และผู้ร่วมรับผิดชอบครอบครัว</p>

                                                <table class="table table-condensed table-hover schedule_detail_table" style="width:70%">
                                                    <tbody>
                                                        <tr >
                                                            <td>
                                                                <strong>สถานการณ์</strong>
                                                            </td>
                                                            <td>
                                                                <strong>จำนวนเท่าของค่าใช้จ่ายต่อเดือน</strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">
                                                                &nbsp;เงินเดือนประจำคู่สมรส
                                                            </td>
                                                            <td>
                                                                3 เดือน
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">
                                                                &nbsp;เงินเดือนประจำรายได้คนเดียว
                                                            </td>
                                                            <td >
                                                                6 เดือน
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">
                                                                &nbsp;รายได้ค่านายหน้าอย่างเดียว
                                                            </td>
                                                            <td >
                                                                6 เดือน
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">
                                                                &nbsp;อาชีพที่หางานยาก เช่น ตำแหน่งงานที่มีรายได้สูงมาก
                                                            </td>
                                                            <td >
                                                                12 เดือน
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">
                                                                &nbsp;เปลี่ยนงานจากลูกจ้างเป็นเจ้าของกิจการ
                                                            </td>
                                                            <td >
                                                                12 เดือน
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">
                                                                &nbsp;อาชีพอิสระที่มีรายได้ไม่สม่ำเสมอ
                                                            </td>
                                                            <td >
                                                                12 เดือน
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <div style="clear:both;">&nbsp;</div>

                                                <p >*เตรียมเงินสำรองฉุกเฉินจำนวนกี่เดือนนี้เป็นประมาณการ</p>

                                                <p>
                                                    <strong><u>ควรเตรียมเงินสำรองฉุกเฉินอย่างไร</u><u>?</u></strong>
                                                </p>

                                                <p>
                                                    สรุปวิธีการเตรียมเงินฉุกเฉินได้ดังนี้<br/>
                                                    •  เปิดบัญชีเงินฝากธนาคารเป็นบัญชีเงินสำรองฉุกเฉินวัตถุประสงค์เดียว*<br/>
                                                    •  ทยอยเก็บสะสมทุกเดือนจนกว่าจะครบ<br/>
                                                    •  บันทึกค่าใช้จ่ายแล้ว ลองสำรวจดูว่ามีค่าใช้จ่ายประเภท ไม่ซื้อชีวิตก็ยังคงดำเนินได้ปกติ ดูตัวอย่าง<br/>
                                                </p>

                                                <table class="table table-condensed table-hover schedule_detail_table" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                <strong>รายการค่าใช้จ่าย</strong>
                                                            </th>
                                                            <th>
                                                                <strong>ราคา (บาท)</strong>
                                                            </th>
                                                            <th colspan="2">
                                                                <strong>ความถี่</strong>
                                                            </th>
                                                            <th style="width: 10%">
                                                                <strong>ค่าใช้จ่ายต่อเดือน</strong>
                                                            </th>
                                                            <th style="width: 30%">
                                                                <strong>ของทดแทน/ตัดรายจ่าย</strong>
                                                            </th>
                                                            <th style="width:5%">
                                                                <strong>ราคา(บาท)</strong>
                                                            </th>
                                                            <th style="width:10%">
                                                                <strong>เงินเหลือ</strong>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="text-align:left !important;">
                                                                &nbsp;กาแฟสด
                                                            </td>
                                                            <td>
                                                                60
                                                            </td>
                                                            <td >
                                                                2
                                                            </td>
                                                            <td >
                                                                ต่อวัน
                                                            </td>
                                                            <td >
                                                                1,800
                                                            </td>
                                                            <td style="text-align:left !important;">
                                                                &nbsp;ซื้อกาแฟ Gold มาชงเอง
                                                            </td>
                                                            <td >
                                                                20
                                                            </td>
                                                            <td >
                                                                1,200
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">
                                                                &nbsp;เสื้อผ้าตลาดนัด
                                                            </td>
                                                            <td >
                                                                200
                                                            </td>
                                                            <td >
                                                                1
                                                            </td>
                                                            <td >
                                                                ต่อสัปดาห์
                                                            </td>
                                                            <td >
                                                                800
                                                            </td>
                                                            <td style="text-align:left !important;">
                                                                &nbsp;เสื้อผ้าเยอะแล้ว (ไม่ซื้อ)
                                                            </td>
                                                            <td >
                                                                &nbsp;
                                                            </td>
                                                            <td >
                                                                800
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">
                                                                &nbsp;ค่าทางด่วนไปกลับ
                                                            </td>
                                                            <td >
                                                                60
                                                            </td>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                ต่อวัน
                                                            </td>
                                                            <td >
                                                                2,640
                                                            </td>
                                                            <td style="text-align:left !important;">
                                                                &nbsp;ใช้ทางด่วนขาไปขากลับหาเส้นทางใหม่ไกลขึ้น 10 กิโลเมตร
                                                            </td>
                                                            <td>
                                                                85
                                                            </td>
                                                            <td>
                                                                770
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">
                                                                &nbsp;น้ำอัดลม
                                                            </td>
                                                            <td >
                                                                14
                                                            </td>
                                                            <td >
                                                                2
                                                            </td>
                                                            <td >
                                                                ต่อวัน
                                                            </td>
                                                            <td >
                                                                840
                                                            </td>
                                                            <td style="text-align:left !important;">
                                                                &nbsp;น้ำอัดลม 1 กระป๋อง
                                                            </td>
                                                            <td >
                                                                14
                                                            </td>
                                                            <td >
                                                                420
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">
                                                                &nbsp;อาหารมือพิเศษ
                                                            </td>
                                                            <td >
                                                                500
                                                            </td>
                                                            <td >
                                                                4
                                                            </td>
                                                            <td >
                                                                ต่อสัปดาห์
                                                            </td>
                                                            <td >
                                                                496
                                                            </td>
                                                            <td style="text-align:left !important;">
                                                                &nbsp;ลดเหลือ 2 ครั้งต่อเดือน
                                                            </td>
                                                            <td >
                                                                &nbsp;
                                                            </td>
                                                            <td >
                                                                1,000
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4" style="text-align:left !important;">
                                                                รวมค่าใช้จ่าย
                                                            </td>
                                                            <td >
                                                                6,576
                                                            </td>
                                                            <td colspan="2" style="text-align:left !important;">
                                                                รวมค่าใช้จ่ายที่ประหยัดได้
                                                            </td>
                                                            <td >
                                                                4,190
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <p>ซื้อกาแฟทุกวันแก้วละ 60 บาท x 30 วัน = 1,800 บาท:เดือน x 12 เดือน =21,600 บาท:ปี</p>

                                                <p>อาหารมื้อพิเศษครั้งละ 500 บาท สัปดาห์ละครั้ง x 4 ครั้ง =2,000 บาท:เดือน x 12 เดือน =24,000 บาท:ปี</p>

                                                <p>ค่ากาแฟ ค่าอาหารมื้อพิเศษ ค่าเสื้อผ้า ค่าของจุกจิ๊กเวลาไปเดินตลาดนัด เช่น เสื้อผ้า ดูตัวอย่างตารางข้างบน เราสามารถลดค่าใช้จ่ายบางรายการได้ เช่น กาแฟแก้วละ 60 บาท เปลี่ยนเป็นซื้อมาชงเอง หรือทานกาแฟบริษัท, หรือหาเส้นทางเดินทางใหม่ที่ลดการจ่ายค่าทางด่วนหรือย่นระยะทางให้สั้นลง ฯลฯ ได้เงินออมเพิ่มขึ้นเดือนละ 4 พันกว่าบาท</p>

                                                <p>&nbsp;อย่างไรก็ตาม, ถ้ารู้สึกว่าอึดอัดเกินไป ความสุขหายไป ยังไม่จำเป็นต้องตัดค่าใช้จ่ายส่วนนี้ออก แนะนำให้ตั้งเป็นงบประมาณสำหรับความสุข และใช้ให้หมดเป็นเดือน ๆ ไป ก็ยังมีความสุขได้ในงบประมาณที่กำหนด เรียกว่า &ldquo;มีความสุขแบบรู้ตัว&rdquo;</p>

                                                <p>&nbsp;</p>

                                                <p >*เราสามารถนำเงินส่วนหนึ่งมาซื้อกองทุนรวมตลาดเงินที่ได้ผลตอบแทนมากกว่าเปลี่ยนเป็นเงินสดพร้อมใช้ได้ในวันรุ่งขึ้น</p>

                                            </div><br/>
                                            <div class="tg-post-meta">
                                                <span>
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target=".mentor-p_kieak">โดย อ.วิภา เจริญกิจสุพัฒน์ / </a>
                                                </span>
                                                <span>
                                                    <a href="javascript:void(0)">CFP<sup>®</sup>, RFC, FChFP, MSIT</a>
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                </li>
                                                <li>                                                   
                                                    <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('เงินสำรองฉุกเฉิน (Emergency Cash) เสาเข็มที่สอง', '9_detail.png', 'ถ้าเราเพิ่งเริ่มวางแผนการเงิน และยังไม่มีการกันเงินสำรองฉุกเฉินเลย แนะนำให้ตั้งเป้าหมายเตรียมเงินสำรองฉุกเฉิน 6 เดือนของรายจ่ายประมาณการจากงบประมาณในหัวข้อที่แล้ว')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php
                                } else if ($blogId == md5(10)) {
                                    ?>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                </li>
                                                <li>                                                   
                                                    <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('ความรู้พื้นฐานก่อนการวางแผนการเงิน', '10_detail.png', 'ความรู้พื้นฐานที่ใช้ในกระบวนการวางแผนการเงินจะเกี่ยวข้องกับการคำนวณดอกเบี้ย มูลค่าเงินตามเวลา')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <article class="blog-post blog-post-detail tg-haslayout">
                                        <figure>
                                            <img src="assets/images/blog/10_detail.png" alt="image description">
                                        </figure>
                                        <div class="tg-post-detail">
                                            <div class="tg-description">
                                                <p><legend>ความรู้พื้นฐานก่อนการวางแผนการเงิน</legend></p>                                                
                                                <p>
                                                    <strong>ความรู้พื้นฐานที่ใช้ในกระบวนการวางแผนการเงินจะเกี่ยวข้องกับการคำนวณดอกเบี้ย มูลค่าเงินตามเวลา</strong><br/>
                                                    •	<a href="blog?rPage=3&id=<?= md5(11) ?>">กฎ 72</a><br/>
                                                    •	<a href="blog?rPage=3&id=<?= md5(12) ?>">พลังดอกเบี้ยทบต้น</a><br/>
                                                    •	<a href="blog?rPage=3&id=<?= md5(13) ?>">เงินเฟ้อ และมูลค่าเงินตามเวลา</a><br/>
                                                    •	<a href="blog?rPage=3&id=<?= md5(14) ?>">ประเภทเงินกู้ และวิธีคำนวณดอกเบี้ยเงินกู้</a><br/>
                                                </p>

                                            </div><br/>
                                            <div class="tg-post-meta">
                                                <span>
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target=".mentor-p_kieak">โดย อ.วิภา เจริญกิจสุพัฒน์ / </a>
                                                </span>
                                                <span>
                                                    <a href="javascript:void(0)">CFP<sup>®</sup>, RFC, FChFP, MSIT</a>
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                </li>
                                                <li>                                                   
                                                    <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('ความรู้พื้นฐานก่อนการวางแผนการเงิน', '10_detail.png', 'ความรู้พื้นฐานที่ใช้ในกระบวนการวางแผนการเงินจะเกี่ยวข้องกับการคำนวณดอกเบี้ย มูลค่าเงินตามเวลา')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php
                                } else if ($blogId == md5(11)) {
                                    ?>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                </li>
                                                <li>                                                   
                                                    <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('กฎ 72', '11_detail.png', 'การหาระยะเวลาที่เงินจะเติบโตเป็น 2 เท่า ในอัตราดอกเบี้ยที่กำหนด หรือคำนวณหาผลตอบแทนที่ต้องการเงินเติบโตเป็น 2 เท่าในระยะเวลาที่ต้องการ')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <article class="blog-post blog-post-detail tg-haslayout">
                                        <figure>
                                            <img src="assets/images/blog/11_detail.png" alt="image description">
                                        </figure>
                                        <div class="tg-post-detail">
                                            <div class="tg-description">
                                                <p><legend>กฎ 72 </legend></p>                                                
                                                <p>การหาระยะเวลาที่เงินจะเติบโตเป็น 2 เท่า ในอัตราดอกเบี้ยที่กำหนด หรือคำนวณหาผลตอบแทนที่ต้องการเงินเติบโตเป็น 2 เท่าในระยะเวลาที่ต้องการ</p>

                                                <p><u>สูตร</u>72/อัตราผลตอบแทนที่กำหนด</p>

                                                <p>เช่น อัตราดอกเบี้ย 6% ต่อปี 72/6 = 12 ปี</p>

                                                <p>หมายความว่า ถ้าเงินต้น 100,000 บาท ดอกเบี้ยทบต้น 6% ใช้เวลา 12 ปี จะกลายเป็นเงิน 200,000 บาท</p>

                                                <p>เงินต้น 100,000 บาท ต้องการให้เงินเติบโต 200,000 บาทภายใน 10 ปี ต้องหาผลตอบแทนเฉลี่ยต่อปี 7.2%</p>

                                                <table  class="table table-condensed table-hover schedule_detail_table" style="width:60%">
                                                    <thead>
                                                        <tr>
                                                            <th >
                                                                อัตราผลตอบแทนทบต้น
                                                            </th>
                                                            <th>
                                                                จำนวนปีเงินเพิ่มเป็น 2 เท่า
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                2%
                                                            </td>
                                                            <td >
                                                                72/2=36 ปี                                                            
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td >
                                                                4%
                                                            </td>
                                                            <td >
                                                                72/4=18 ปี
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td >
                                                                6%
                                                            </td>
                                                            <td >
                                                                72/6=12 ปี
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td >
                                                                8%
                                                            </td>
                                                            <td >
                                                                72/8=9 ปี
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td >
                                                                10%
                                                            </td>
                                                            <td >
                                                                72/10=7.2 ปี
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td >
                                                                12%
                                                            </td>
                                                            <td >
                                                                72/12=6 ปี
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <div style="clear:both;">&nbsp;</div>

                                            </div><br/>
                                            <div class="tg-post-meta">
                                                <span>
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target=".mentor-p_kieak">โดย อ.วิภา เจริญกิจสุพัฒน์ / </a>
                                                </span>
                                                <span>
                                                    <a href="javascript:void(0)">CFP<sup>®</sup>, RFC, FChFP, MSIT</a>
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                </li>
                                                <li>                                                   
                                                    <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('กฎ 72', '11_detail.png', 'การหาระยะเวลาที่เงินจะเติบโตเป็น 2 เท่า ในอัตราดอกเบี้ยที่กำหนด หรือคำนวณหาผลตอบแทนที่ต้องการเงินเติบโตเป็น 2 เท่าในระยะเวลาที่ต้องการ')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php
                                } else if ($blogId == md5(12)) {
                                    ?>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                </li>
                                                <li>                                                   
                                                    <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('พลังดอกเบี้ยทบต้น', '12_detail.png', 'The most powerful force in the universe is compound interest.')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <article class="blog-post blog-post-detail tg-haslayout">
                                        <figure>
                                            <img src="assets/images/blog/12_detail.png" alt="image description">
                                        </figure>
                                        <div class="tg-post-detail">
                                            <div class="tg-description">
                                                <p><legend>พลังดอกเบี้ยทบต้น</legend></p> 
                                                <blockquote>
                                                    <q>
                                                        <strong style="color: #0e62c7">“The most powerful force in the universe is compound interest.”
                                                            พลังที่ทรงพลังมากที่สุดในจักรวาลคือพลังดอกเบี้ยทบต้น
                                                            กล่าวโดย “อัลเบิร์ต ไอน์สไตน์”</strong>
                                                    </q>
                                                </blockquote>
                                                <p>
                                                    ดอกเบี้ยทบต้นคือ ดอกเบี้ยที่คิดจากเงินต้นบวกดอกเบี้ยและรวมดอกเบี้ยกับเงินต้นคำนวณในรอบถัดไปเรื่อย ๆ
                                                </p>
                                                <p>
                                                    เงินต้น 1,000,000 บาท อัตราดอกเบี้ย 10% คำนวณเปรียบเทียบไม่ทบต้นและทบต้นเป็นระยะเวลา 20 ปี จำนวนเงินต่างกันมากกว่า 1 เท่า
                                                </p>
                                                <p style="text-align: center">
                                                    <img src="assets/images/blog/blog_list_12_1.png" />
                                                </p>
                                                <p>
                                                    เปรียบเทียบแล้วจะเห็นได้ชัดเจน การคำนวณดอกเบี้ยชั้นเดียวกับดอกเบี้ยทบต้นต่างกันมาก การออมได้อัตราดอกเบี้ยทบต้น จะช่วยผ่อนแรงการออมให้เราถึงเป้าหมายง่ายดายขึ้น
                                                </p>
                                            </div><br/>
                                            <div class="tg-post-meta">
                                                <span>
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target=".mentor-p_kieak">โดย อ.วิภา เจริญกิจสุพัฒน์ / </a>
                                                </span>
                                                <span>
                                                    <a href="javascript:void(0)">CFP<sup>®</sup>, RFC, FChFP, MSIT</a>
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                </li>
                                                <li>                                                   
                                                    <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('พลังดอกเบี้ยทบต้น', '12_detail.png', 'The most powerful force in the universe is compound interest.')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php
                                } else if ($blogId == md5(13)) {
                                    ?>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                </li>
                                                <li>                                                   
                                                    <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('เงินเฟ้อ และมูลค่าเงินตามเวลา', '13_front.png', ' เงินเฟ้อ คือ ใช้เงินเท่าเดิมซื้อของได้น้อยลง  หรือของเท่าเดิมต้องใช้เงินมากขึ้น ดูธรรมดาที่รู้กันอยู่แล้ว แต่ไม่ธรรมดาเมื่อเราต้องคำนวณคาดการณ์ในวันที่เราเกษียณในอีก 20 ปี 30 ปี ข้างหน้า')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <article class="blog-post blog-post-detail tg-haslayout">
                                        <figure>
                                            <img src="assets/images/blog/13_front.png" alt="image description">
                                        </figure>
                                        <div class="tg-post-detail">
                                            <div class="tg-description">
                                                <p><legend>เงินเฟ้อ และมูลค่าเงินตามเวลา</legend></p>                                                
                                                <p>
                                                    เงินเฟ้อ คือ ใช้เงินเท่าเดิมซื้อของได้น้อยลง  หรือของเท่าเดิมต้องใช้เงินมากขึ้น ดูธรรมดาที่รู้กันอยู่แล้ว แต่ไม่ธรรมดาเมื่อเราต้องคำนวณคาดการณ์ในวันที่เราเกษียณในอีก 20 ปี 30 ปี ข้างหน้า ในการครองชีพด้วยค่าใช้จ่ายจำเป็นวันนี้กับวันที่เกษียณแตกต่างกันจนน่าตกใจ
                                                </p>
                                                <p>
                                                    ลองมาดูสถิติจริงของเงินเฟ้อประเทศไทยย้อนหลังจากปีพ.ศ. 2558 30 ปี ปี พ.ศ. 2529-2558 แต่ละปีเงินเฟ้อไม่เท่ากัน ราคาสินค้าปีเริ่มต้น 100 บาท ถึงปีที่ 30 ราคาสินค้ากลายเป็น 270.79 บาท
                                                </p>
                                                <p style="text-align: center">
                                                    <img src="assets/images/blog/blog_list_13_1.png" />
                                                </p>
                                                <p>
                                                    ถ้าใช้สถิติอดีตย้อนหลัง 30 ปี วันนี้ค่าใช้จ่ายเดือนละ 10,000 บาท ต้องเตรียมเงิน 27,000 บาท ซื้อของในปริมาณเท่ากัน
                                                </p>
                                                <p>
                                                    เงินเฟ้อไม่เท่ากันวิเคราะห์ยาก ค่าเฉลี่ยเงินเฟ้อเฉลี่ยเท่ากันทุกปี 3.38% สินค้าราคาเริ่มต้น 100 บาท คำนวณแบบเดียวกับดอกเบี้ยทบต้น 3.38% ได้ 270.79 บาท เท่ากัน
                                                </p>

                                            </div><br/>
                                            <div class="tg-post-meta">
                                                <span>
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target=".mentor-p_kieak">โดย อ.วิภา เจริญกิจสุพัฒน์ / </a>
                                                </span>
                                                <span>
                                                    <a href="javascript:void(0)">CFP<sup>®</sup>, RFC, FChFP, MSIT</a>
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                </li>
                                                <li>                                                   
                                                    <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('เงินเฟ้อ และมูลค่าเงินตามเวลา', '13_front.png', ' เงินเฟ้อ คือ ใช้เงินเท่าเดิมซื้อของได้น้อยลง  หรือของเท่าเดิมต้องใช้เงินมากขึ้น ดูธรรมดาที่รู้กันอยู่แล้ว แต่ไม่ธรรมดาเมื่อเราต้องคำนวณคาดการณ์ในวันที่เราเกษียณในอีก 20 ปี 30 ปี ข้างหน้า')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php
                                } else if ($blogId == md5(14)) {
                                    ?>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">
                                                <ul class="tg-tags">                                                
                                                    <li>
                                                        <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                    </li>
                                                    <li>                                                   
                                                        <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                    </li>
                                                </ul>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('ประเภทเงินกู้ และวิธีคำนวณดอกเบี้ยเงินกู้', '14_detail.png', 'เงินกู้แบ่งเป็น 2 ประเภท คือ แบบมีทรัพย์สินเป็นหลักประกัน และ แบบไม่มีทรัพย์สินเป็นหลักประกัน')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <article class="blog-post blog-post-detail tg-haslayout">
                                        <figure>
                                            <img src="assets/images/blog/14_detail.png" alt="image description">
                                        </figure>
                                        <div class="tg-post-detail">
                                            <div class="tg-description">
                                                <p><legend>ประเภทเงินกู้ และวิธีคำนวณดอกเบี้ยเงินกู้</legend></p>                                                
                                                <p>
                                                    เงินกู้แบ่งเป็น 2 ประเภท คือ <br/>
                                                    &nbsp;&nbsp;<strong style="color: #0e62c7">1. แบบมีทรัพย์สินเป็นหลักประกัน</strong> อัตราดอกเบี้ยต่ำกว่า เช่น สินเชื่อบ้าน สินเชื่อรถยนต์<br/>
                                                    &nbsp;&nbsp;<strong style="color: #0e62c7">2. แบบไม่มีทรัพย์สินเป็นหลักประกัน</strong> มีอัตราดอกเบี้ยสูง และสูงมาก เช่น สินเชื่อบุคคล ดอกเบี้ยบัตรเครดิต เนื่องจากความเสี่ยงของผู้ให้กู้สูงกว่าแบบแรก<br/>

                                                </p>

                                                <p style="text-align: center">
                                                    <img src="assets/images/blog/blog_list_14_1.png" />
                                                </p>
                                                <p>
                                                    <strong style="color: #0e62c7">วิธีคำนวณดอกเบี้ยเงินกู้</strong><br/>
                                                    วิธีคำนวณดอกเบี้ยเงินกู้มี 2 แบบ คือ<br/>
                                                    &nbsp;&nbsp;1.	คิดดอกเบี้ยแบบลดต้นลดดอก  ได้แก่ ค่างวดผ่อนบ้าน ค่างวดกู้เอนกประสงค์ <br/>
                                                    &nbsp;&nbsp;2.	คิดดอกเบี้ยแบบดอกเบี้ยคงที่ ได้แก่ ค่างวดผ่อนรถ หรือสินเชื่อบุคคลบางแบบ<br/>
                                                    เปรียบเทียบเงินต้น อัตราดอกเบี้ย และระยะเวลาผ่อนชำระเท่ากัน การคิดดอกเบี้ยแบบคงที่จะเสียค่าใช้จ่ายดอกเบี้ยมากว่าแบบลดต้นลดดอก

                                                </p>
                                                <p style="text-align: center">
                                                    <img src="assets/images/blog/blog_list_14_2.png" />
                                                </p>
                                                <p>
                                                    เมื่อเข้าใจวิธีคิดดอกเบี้ยแล้วจะทราบว่าการโป๊ะค่าผ่อนรถไม่ทำให้ค่าใช้จ่ายลดลงแต่อย่างใด นอกจากจะไปเจรจาต่อรองขอลดดอกเบี้ย<br/>
                                                    เราจะใช้ความรู้พื้นฐานทั้ง 3 อย่างนี้ในการบริหารโครงสร้างหนี้ โปรดติดตามตอนต่อไป

                                                </p>
                                            </div><br/>
                                            <div class="tg-post-meta">
                                                <span>
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target=".mentor-p_kieak">โดย อ.วิภา เจริญกิจสุพัฒน์ / </a>
                                                </span>
                                                <span>
                                                    <a href="javascript:void(0)">CFP<sup>®</sup>, RFC, FChFP, MSIT</a>
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">                                                
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                </li>
                                                <li>                                                   
                                                    <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('ประเภทเงินกู้ และวิธีคำนวณดอกเบี้ยเงินกู้', '14_detail.png', 'เงินกู้แบ่งเป็น 2 ประเภท คือ แบบมีทรัพย์สินเป็นหลักประกัน และ แบบไม่มีทรัพย์สินเป็นหลักประกัน')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php
                                } else if ($blogId == md5(15)) {
                                    ?>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                </li>
                                                <li>                                                   
                                                    <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('Debt Management (การบริหารโครงสร้างหนี้) เสาเข็มที่สาม (ตอนที่ 1)', '15_detail.png', 'ระเภทหนี้ในการวางแผนการเงินส่วนบุคคล มี 2 ประเภท คือ หนี้จดจำนอง และ หนี้ไม่จดจำนอง')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <article class="blog-post blog-post-detail tg-haslayout">
                                        <figure>
                                            <img src="assets/images/blog/15_detail.png" alt="image description">
                                        </figure>
                                        <div class="tg-post-detail">
                                            <div class="tg-description">
                                                <p><legend>Debt Management (การบริหารโครงสร้างหนี้) เสาเข็มที่สาม (ตอนที่ 1)</legend></p>                                                
                                                <p>
                                                    <strong>วัตถุประสงค์ของการบริหารโครงสร้างหนี้ คือ</strong> <br/>
                                                    &nbsp;&nbsp;•	ปรับค่างวดผ่อนชำระไม่สูงเกินไป คือ ค่างวดทั้งหมดต่อเดือนไม่ควรเกิน 35-40% ของรายได้  ค่างวดผ่อนชำระสูงเกินอาจจะทำให้เกิดภาวะเป็นหนี้ซ้ำซ้อน มีเงินเหลือไม่เพียงพอกับการใช้จ่ายประจำวัน<br/>
                                                    &nbsp;&nbsp;•	ลดความเครียด <br/>
                                                    &nbsp;&nbsp;•	ประหยัดค่าใช้จ่ายที่เกี่ยวข้องทั้งหมดในโครงสร้างหนี้  ลดค่าใช้จ่ายได้ก็คือเงินออม<br/>
                                                    &nbsp;&nbsp;•	กำจัดหนี้ให้หมดเร็วที่สุดหรืออย่างช้าต้องหมดภาระก่อนเกษียณอายุ<br/>
                                                </p>
                                                <p>
                                                    <strong>ประเภทหนี้ในการวางแผนการเงินส่วนบุคคล มี 2 ประเภท คือ หนี้จดจำนอง และ หนี้ไม่จดจำนอง</strong><br/>
                                                    &nbsp;&nbsp;1.	หนี้จดจำนอง  ประเภทสินเชื่อบ้าน ค่างวดผ่อนชำระของหนี้ประเภทนี้สูงสุดไม่เกิน 35-40% ของรายได้ (รวมหนี้ไม่จดจำนอง)<br/>
                                                    &nbsp;&nbsp;2.	หนี้ไม่จดจำนอง สินเชื่อรถยนต์ หนี้บัตรเครดิต สินเชื่อบุคคล ค่างวดผ่อนชำระของหนี้ประเภทนี้สูงสุดไม่เกิน 20% ของรายได้<br/>
                                                    &nbsp;&nbsp;&nbsp;เพดานค่างวดผ่อนชำระของหนี้ไม่จดจำนองทั้งหมดไม่เกิน 20% เนื่องจากอัตราดอกเบี้ยสูง และเป็นหนี้บริโภค คือ ทรัพย์สินประเภทเสื่อมค่า หรือใช้แล้วหมดไป<br/>
                                                </p>
                                                <p>
                                                    &nbsp;&nbsp;&nbsp;หากผ่อนเกินจากเพดานที่แนะนำนี้อาจจะทำให้มีโอกาสเป็นหนี้เพิ่มขึ้น เนื่องจากรายได้ที่หักค่างวดผ่อนชำระแล้ว จะเหลือน้อยเกินไปสำหรับค่าใช้จ่ายอื่น ๆ ปัญหาจะเกิดเร็วขึ้นถ้าไม่มีเงินสำรองฉุกเฉิน เพื่อป้องกันการเป็นหนี้ ควรเตรียมการดังต่อไปนี้ คือ<br/>

                                                    &nbsp;&nbsp;1.	<u>เตรียมเงินสำรองฉุกเฉิน 3-6 เท่าของค่าใช้จ่ายรายเดือน</u> (รวมค่างวดผ่อนชำระทั้งหมดด้วย) โดยอาจจะปรับค่างวดผ่อนชำระลดลง พร้อมกับลดค่าใช้จ่ายอื่น ๆ ที่ไม่จำเป็น <br/>
                                                &nbsp;&nbsp;2.	<u>ปรับค่างวดผ่อนชำระ</u> ไม่ให้อึดอัดเกินไป<br/>
                                                &nbsp;&nbsp;3.	<u>Refinance</u> ถ้าสามารถหาอัตราดอกเบี้ยได้ถูกกว่าเดิม 2% ลดภาระค่าใช้จ่ายดอกเบี้ย<br/>
                                                &nbsp;&nbsp;4.	<u>บัตรเครดิตจ่ายเต็มจำนวนทุกครั้ง</u> ถ้าผ่อนขั้นต่ำอยู่ ให้เคลียร์ออกทั้งหมด โดยกู้โปรแกรมที่มีอัตราดอกเบี้ยต่ำกว่า หรือยืมจากคนในครอบครัว แล้วตั้งใจผ่อนคืนแหล่งเงินยืมใหม่<br/>
                                                &nbsp;&nbsp;5.	<u>สินเชื่อบุคคล</u> ถ้ามีดูเงื่อนไขการเคลียร์ “มีค่าใช้จ่ายเพิ่มถ้าปิดก่อน” และต่อรองที่จะโป๊ะไม่ได้ ก็ตั้งหน้าตั้งต่อผ่อนไป และอย่างมีการกู้สินเชื่อครั้งต่อไป “เด็ดขาด”<br/>
                                                &nbsp;&nbsp;6.	<u>ทำงบประมาณ</u> เพื่อควบคุมรายจ่ายอย่างเข้มงวด<br/>
                                                &nbsp;&nbsp;7.	<u>หาช่องทางในการหารายได้เพิ่ม</u> อาจจะใช้ทักษะความชำนาญงานปัจจุบัน ทำงานนอกเวลาหลังเลิกงานหรือวันหยุด <br/>
                                                </p>
                                                <p>
                                                    &nbsp;&nbsp;&nbsp;โดยสรุปคือ เตรียมเงินสำรองฉุกเฉิน ทำงบประมาณรายจ่าย และปิดหนี้ที่อัตราดอกเบี้ยสูง ได้แก่ บัตรเครดิต และสินเชื่อบุคคล ทั้งหมด หารายได้เพิ่มหากจำเป็น
                                                </p>
                                            </div><br/>
                                            <div class="tg-post-meta">
                                                <span>
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target=".mentor-p_kieak">โดย อ.วิภา เจริญกิจสุพัฒน์ / </a>
                                                </span>
                                                <span>
                                                    <a href="javascript:void(0)">CFP<sup>®</sup>, RFC, FChFP, MSIT</a>
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                    <div class="tags-social tg-haslayout">
                                        <div class="tags pull-left">
                                            <strong>tags:</strong>
                                            <ul class="tg-tags">
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=wipa">wipa</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=charoenkijsupat">charoenkijsupat</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financial">financial</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=financialplanning">financialplanning</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=cfp">cfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=fchfp">fchfp</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=rfc">rfc</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=gogetrich">gogetrich</a>
                                                </li>
                                                <li>                                                   
                                                    <a href="blog-list?page=<?= $page ?>&tag=rich">rich</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=money">money</a>
                                                </li>
                                                <li>
                                                    <a href="blog-list?page=<?= $page ?>&tag=moneycate">moneycate</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social pull-right">
                                            <strong>share</strong>
                                            <ul class="tg-social-icon">
                                                <li class="facebook">
                                                    <a href="javascript:void(0)" onclick="postToFeed('Debt Management (การบริหารโครงสร้างหนี้) เสาเข็มที่สาม (ตอนที่ 1)', '15_detail.png', 'ระเภทหนี้ในการวางแผนการเงินส่วนบุคคล มี 2 ประเภท คือ หนี้จดจำนอง และ หนี้ไม่จดจำนอง')">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>

                            </div>
                            <!--************************************
                                            Sidebar Start
                            *************************************-->
                            <aside id="sidebar" class="col-lg-4 col-md-3 col-sm-4 col-xs-12">
                                <div class="row">

                                    <div class="col-md-12 col-xs-12">
                                        <?php include './recent-post.php' ?>
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
                            <a class="forgetpassword" href="forgetPassword">
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
                    touchDevices: true, position: "bottom",
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
                        username: {required: true
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
                facebookSetup();
            });
            function facebookSetup() {
                window.fbAsyncInit = function () {
                    FB.init({
                        appId: '1039572559467696',
                        xfbml: true,
                        version: 'v2.6'
                    });
                };

                (function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) {
                        return;
                    }
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/en_US/sdk.js";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            }
            function postToFeed(name, blogImage, fbDescription) {
                // calling the API ...
                var obj = {
                    method: 'feed',
                    redirect_uri: '<?= $configure['web.application.prefix'] ?>view/blog-list?page=<?= $page ?>',
                                link: '<?= $configure['web.application.prefix'] ?>view/blog?rPage=<?= $page ?>&id=<?= $blogId ?>',
                                            picture: '<?= $configure['web.application.prefix'] ?>view/assets/images/blog/' + blogImage,
                                            name: name,
                                            caption: 'Go Get Rich: BLOG พารวย',
                                            description: fbDescription
                                        };

                                        function callback(response) {

                                            document.getElementById('msg').innerHTML = "Post ID: " + response['post_id'];
                                        }

                                        FB.ui(obj, callback);
                                    }
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
        <?php include './mentor_dialog.php'; ?>
    </body>
</html>

<?php
session_start();
$now = time();
if (isset($_SESSION['expireFrontEnd'])) {
    if ($now > $_SESSION['expireFrontEnd']) {
        session_destroy();
    }
}
$fPage = (string) filter_input(INPUT_GET, 'fPage');
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
            <div class="tg-banner tg-haslayout parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="assets/images/learn-to-rich-header.jpg">
                <div class="tg-banner-holder">
                    <div class="container">
                        <div class="tg-displaytable">
                            <div class="tg-displaytablecell">
                                <div class="banner-content tg-haslayout">
                                    <h1>LEARN TO RICH</h1>
                                    <ol class="tg-breadcrumb">
                                        <li><a href="main">Home</a></li>
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
                                    <li class="current-menu-item">
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
                                    <li>
                                        <a href="blog-list?page=1">Blog</a>
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
                            <div class="col-xs-12 pull-left">
                                <a href="<?= $fPage ?>" class="btn btn-default btn-sm">
                                    <i class="fa fa-backward"></i> กลับสู่ เรียนรู้สู่ความรวย
                                </a>
                                <br/><br/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="tg-theme-heading">
                                    <span>LEARN TO RICH</span>
                                    <h2>เติมความมั่นคงด้วยแผนเกษียณ</h2>
                                </div>
                            </div>
                            <div class="tg-aboutus-section">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <figure class="tg-about-img"><img src="assets/images/learn-to-rich/perfect-life-with-retirement.jpg" alt="image description"></figure>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="tg-aboutus">
                                        <div class="tg-description">
                                            <p align="center"><strong>“ที่สุดของความเสียดาย...คือตายไปแล้วใช้เงินไม่หมด<br />
                                                    ที่สุดแห่งความสลด...คือใช้เงินหมด แล้วยังไม่ตาย”</strong></p>
                                            <p>&emsp;&emsp;&emsp;อ่านแล้วอาจจะขำ แต่จะไม่ขำเลยถ้าเหตุการณ์นี้เกิดขึ้นกับเรา ผู้ที่เตรียมค่าใช้จ่ายดูแลตนเองหลังเกษียณไม่เพียงพอ มีสาเหตุจาก</p>
                                            <p>&emsp;&emsp;&emsp;1. ไม่ทราบว่าค่าใช้จ่ายหลังเกษียณต้องเตรียมเท่าไร<br />
                                                &emsp;&emsp;&emsp;2. คิดว่าเกษียณยังอีกไกล<br />
                                                &emsp;&emsp;&emsp;3. ได้รับเงินเกษียณก้อนโต ใช้หมดภายใน 5-10 ปี<br />
                                                &emsp;&emsp;&emsp;4. ไม่เข้าใจการลงทุน กลัวเงินต้นหาย<br />
                                                &emsp;&emsp;&emsp;5. ตกงานกะทันหัน ไม่มีเงินสำรองฉุกเฉิน<br />
                                                &emsp;&emsp;&emsp;6. เป็นหม้าย<br />
                                                &emsp;&emsp;&emsp;7. คิดว่าแก่แล้วตายเลย ไม่คิดว่าจะเจ็บป่วยเรื้อรัง<br />
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-centered">
                                    <div class="tg-aboutus">
                                        <div class="tg-description">
                                            </br>
                                            <p><strong>1. ไม่ทราบว่าค่าใช้จ่ายหลังเกษียณต้องเตรียมเท่าไร</strong></p>
                                            <p style="text-align:center">
                                                <img src="assets/images/learn-to-rich/retirement_1.jpg" alt="image description"/>
                                            </p>
                                            <p>&emsp;&emsp;&emsp;มาดูเงินเกษียณที่ต้องเตรียม คำนวณจากความต้องการค่าใช้จ่ายต่อเดือน โดยใช้ค่าเงินปัจจุบัน 
                                                คำนวณบวกค่าเงินเฟ้อที่ 4% ใช้เงินเกษียณตอนอายุ 60 – 80 ปี ผลตอบแทนหลังเกษียณ 5%</p>
                                            <p>&emsp;&emsp;&emsp;<u>ตัวอย่าง</u> ถ้าปัจจุบันอายุ 30 ปี ต้องการค่าใช้จ่ายเดือนละ 20,000 บาท (ค่าเงินวันนี้) วันที่อายุ 60 ปี 
                                                ต้องมี “เงินเกษียณ 14,738,186 บาท” เป็นค่าใช้จ่ายเท่ากับค่าเงินปัจจุบันเดือนละ 20,000 บาท ตั้งแต่อายุ 60-80 ปี </p>
                                            <p style="text-align:center">
                                                <img src="assets/images/learn-to-rich/retirement_3.jpg" alt="image description"/>
                                            </p>
                                            <p>&emsp;&emsp;&emsp;คนส่วนใหญ่อายุใกล้เกษียณจะเริ่มสนใจเตรียม อายุที่สนใจเตรียมเงินเกษียณอายุคือ คนอายุ 40-45 ปี ขึ้นไป 
                                                ทำให้เป็นภาระหนักในการเตรียมเงินเกษียณในเวลาทำงานที่เหลือสั้น ๆ</p>
                                            <p>&emsp;&emsp;&emsp;ถ้าเราต้องการค่าใช้จ่ายหลังเกษียณเป็นค่าเงินปัจจุบัน เดือนละ 40,000 บาท ที่ค่าเงินเฟ้อ 4% โดยอายุปัจจุบัน 40 ปี ก่อนอายุ 60 ปี 
                                                เราต้องเตรียมเงิน 19,913,181 บาท โดยเงินก้อนนี้จะอยู่ในพอร์ตลงทุนหลังเกษียณที่ผลตอบแทนเฉลี่ยปีละ 5%</p>
                                            <p><strong>2. คิดว่าเกษียณยังอีกไกล</strong></p>
                                            <p style="text-align:center">
                                                <img src="assets/images/learn-to-rich/retirement_2.jpg" alt="image description" style="width:250px;height:214px;"/>
                                            </p>
                                            <p>&emsp;&emsp;&emsp;คนที่ทำงาน 10-15 ปีแรก คิดว่าการเตรียมเงินเกษียณไกลตัว สังเกตได้จากส่วนใหญ่ใช้สิทธิลดหย่อนภาษี LTF และรู้สึกว่าการออมด้วย RMF ยาวเกินไป 
                                                และเกือบทั้งหมดไม่มีใครซื้อประกันบำนาญเลย ยังไม่มีการวางเป้าหมายเกษียณจึงขาดการจัดการเงินที่จะออมเพื่อการเกษียณอายุ</p>
                                            <p>&emsp;&emsp;&emsp;ถ้าเราทราบแล้วว่าเงินเกษียณยิ่งเตรียมเร็วจะลดภาระการออมระยะสั้น ลองมาดูว่าถ้าวันแรกที่เริ่มทำงาน 
                                                ให้ออม 10% ทุก ๆ เดือน จัดพอร์ตลงทุนผลตอบแทนเฉลี่ย 8%</p>
                                            <p style="text-align:center">
                                                <img src="assets/images/learn-to-rich/retirement_4.jpg" alt="image description"/>
                                            </p>
                                            <p>&emsp;&emsp;&emsp;ถ้าเริ่มออม 10% ของรายได้ตั้งแต่เดือนแรกที่ทำงานตอนอายุ 25 ปี ลงทุนผลตอบแทนเฉลี่ย 8% 
                                                ถึงวันที่เกษียณอายุ 60 ปี จะมีเงินเกษียณประมาณ 13 ล้านบาท</p>
                                            <p>&emsp;&emsp;&emsp;ถ้าเริ่มออมตอนอายุ 40 ปี โดยออมปีละ 10% ของรายได้ และลงทุนอัตราผลตอบแทนเฉลี่ย 8% 
                                                เราจะมีเงินออมประมาณ 8.8 ล้านบาท</p>
                                            <p style="text-align:center">
                                                <img src="assets/images/learn-to-rich/retirement_5.jpg" alt="image description"/>
                                            </p>
                                            <p><strong>3. ได้รับเงินเกษียณก้อนโต ใช้หมดภายใน 5-10 ปี</strong></p>
                                            <p>&emsp;&emsp;&emsp;Honey Moon Retirement คือ คนที่ได้รับเงินเกษียณ มักจะใช้เงินหมดภายใน 5-10 ปี เนื่องจากเคยรับเงินเดือน เช่น เดือนสุดท้ายก่อนเกษียณได้เงินเดือน 
                                                100,000 บาท วันที่เกษียณได้รับเงินกองทุนสำรองเลี้ยงชีพ เงินชดเชยตามกฎหมายรวม ๆ อาจจะได้ถึง 10 ล้านบาท </p>
                                            <p>&emsp;&emsp;&emsp;คนที่ไม่เคยเข้าใจการทำงานของเงิน เคยได้เงินเดือนที่หักกองทุนสำรองเลี้ยงชีพ หักภาษีไปแล้ว ได้เงินเดือนละหลักหมื่นหลักแสน วันที่เกษียณได้รับเงิน 10 ล้านบาท 
                                                เหมือนคนถูกหวยเงินหมดภายในไม่เกิน 10 ปี เพราะไม่เข้าใจว่า 10 ล้านบาท คือค่าใช้จ่ายตลอดอายุขัย จึงใช้เงินไปท่องเที่ยวต่างประเทศ ลูกยืมไปลงทุนเพราะคิดว่าพ่อแม่เงินเยอะ 
                                                ตนเองลงทุนเองบ้าง ญาติพี่น้องเพื่อนฝูงยืมไม่คืนบ้าง เงินจึงหมดก่อนอายุขัย</p>
                                            <p><strong>4. ไม่เข้าใจการลงทุน กลัวเงินต้นหาย</strong></p>
                                            <p>&emsp;&emsp;&emsp;การออมในระบบในกองทุนสำรองเลี้ยงชีพ เพราะผู้ออมกลัวเงินต้นหาย จึงมักจะเลือกพอร์ตกองทุนตลาดเงิน ได้ผลตอบแทนประมาณ 1-2% 
                                                ในขณะที่เงินเฟ้อเฉลี่ย 4-5% ซึ่งทำให้เงินเติบโตไม่ทันเงินเฟ้อ หลายคนอาจจะเลือกที่จะเก็บไว้ในบัญชีเงินฝากธนาคาร ผลตอบแทนฝากประจำ 12 เดือน ปัจจุบันเหลือ 
                                                1.5% เท่านั้น ไม่ทันเงินเฟ้อเช่นกัน</p>
                                            <p><strong>5. ตกงานกะทันหัน ไม่มีเงินสำรองฉุกเฉิน</strong></p>
                                            <p>&emsp;&emsp;&emsp;การตกงานกะทันหันโดยไม่มีเงินสำรองฉุกเฉิน ทำให้ต้องดึงเงินออมที่ออมไว้สำหรับเกษียณมาเป็นค่าใช้จ่ายแทนรายได้ที่หายไป</p>
                                            <p><strong>6. เป็นหม้าย</strong></p>
                                            <p>&emsp;&emsp;&emsp;บางคนพึ่งพาคู่สมรสที่แสนดี จนไม่ได้คิดพึ่งพาตนเอง โดยเฉพาะผู้หญิงที่ได้รับการดูแลจากสามีดี วันหนึ่งที่คู่สมรสเสียชีวิตก่อน โดยตนเองไม่เคยสนใจเรื่องเงินเลย 
                                                กรอบคิดเรื่องเงินไม่เคยถูกฝึก อาจจะไม่สามารถดูแลเงินที่เหลืออยู่ให้ตนเองได้ถึงวันที่สิ้นสุดอายุขัย</p>
                                            <p><strong>7. คิดว่าแก่แล้วตายเลย ไม่คิดว่าจะเจ็บป่วยเรื้อรัง</strong></p>
                                            <p>&emsp;&emsp;&emsp;บางเข้าใจว่าแก่แล้วตายเลย ไม่คิดว่าจะเจ็บป่วยเรื้อรัง จึงไม่มีการเตรียมการค่าใช้จ่ายในการดูแลสุขภาพ เงินเกษียณจึงหมดก่อนหมดอายุขัย</p>
                                            <p><strong>วิธีคำนวณค่าใช้จ่ายหลังเกษียณ - การคำนวณเงินเกษียณ ใช้ข้อมูลดังนี้</strong></p>
                                            <ul>
                                                <li>อายุปัจจุบัน</li>
                                                <li>อายุเกษียณ (ทำงานปีสุดท้ายอายุเท่าไร)</li>
                                                <li>อายุขัย (ดูอายุขัยปู่ย่าตายายเฉลี่ย และบวกเพิ่มไปอีก 5-10 ปี) </li>
                                                <li>ค่าใช้จ่ายหลังเกษียณ เป็นมูลค่าตามค่าเงินปัจจุบัน หลังเกษียณใช้จ่ายอะไรบ้าง ค่าใช้รายการไหนไม่ใช้แล้ว </li>
                                                <li>จำนวนปีก่อนเกษียณอายุ (ปัจจุบันถึงเกษียณมีเวลาเก็บเงินอีกกี่ปี)</li>
                                                <li>จำนวนปีหลังเกษียณ (ปีที่เกษียณจนถึงอายุขัย ต้องเตรียมค่าใช้จ่ายกี่ปี)</li>
                                                <li>ค่าเงินเฟ้อ เฉลี่ยต่อปี ตามตัวอย่างใช้ 4%</li>
                                                <li>ดัชนีค่าเงินเฟ้อ ได้จากตาราง F1</li>
                                            </ul><br />
                                            <p style="text-align:center">
                                                <img src="assets/images/learn-to-rich/retirement_6.jpg" alt="image description" style="width:530px;height:710px;"/>
                                            </p>
                                            <p>&emsp;&emsp;&emsp;ตารางหาดัชนีค่าเงินเฟ้อ (F1) วิธีใช้คือ เงินเฟ้อกี่เปอร์เซ็นต์ให้ดูที่หัวตาราง และจำนวนปีก่อนเกษียณ เช่น เงินเฟ้อเฉลี่ยปีละ 4% จากปัจจุบันถึงปีที่เกษียณคือ 20 ปี 
                                                ดูหัวตารางช่อง 4% และดูคอลัมน์ซ้ายสุดตรงปีที่ 20 ดัชนีค่าเงินเฟ้อคือ 2.1911 (ที่มาของการคำนวณอยู่ด้านล่างของตาราง)</p>
                                            <p style="text-align:center">
                                                <img src="assets/images/learn-to-rich/retirement_7.jpg" alt="image description" style="width:545px;height:755px;"/>
                                            </p>
                                            <p>&emsp;&emsp;&emsp;จากนั้นคำนวณค่าใช้จ่ายปีแรกที่เกษียณ นำค่าใช้จ่ายต่อเดือนที่ต้องการใช้หลังเกษียณ คูณ 12 ทำเป็นรายปี คูณดัชนีค่าเงินเฟ้อ</p>
                                            <p>&emsp;&emsp;&emsp;ตัวอย่างเช่น ต้องการค่าใช้จ่ายเดือนละ 20,000 บาท ตามมูลค่าเงินปัจจุบัน คูณ 12 เป็นค่าใช้จ่ายต่อปี 240,000 บาท 
                                                บวกเงินเฟ้อ 4% ไป 20 ปี เงิน 240,000 บาทในปัจจุบันจะกลายเป็น 525,864 บาท ถ้าต้องการเตรียมสำหรับหลังเกษียณ 25 ปี นำ 25 ปี คูณ 525,864 บาท 
                                                ได้ประมาณ 15 ล้านบาท</p>
                                            <p><strong>หาเงินเงินเกษียณที่เตรียมไว้แล้ว</strong></p>
                                            <p>&emsp;&emsp;&emsp;แหล่งเงินได้หลังเกษียณสำหรับคนทำงานบริษัท จะเก็บในรูปของกองทุนสำรองเลี้ยงชีพ ประกันชีวิตสะสมทรัพย์ ประกันบำนาญ 
                                                กองทุนรวมเพื่อการเลี้ยงชีพ (RMF) และแหล่งอื่น ๆ ที่ตั้งใจเก็บเป็นเงินเกษียณ รวบรวมและรวมเงินที่เตรียมไว้แล้ว</p>
                                            <p><strong>เงินเกษียณเตรียมขาด/เกิน</strong></p>
                                            <p>&emsp;&emsp;&emsp;เงินเกษียณที่ต้องการ หักด้วยจำนวนเงินที่เตรียมไว้แล้ว ขาดหรือเกินเท่าไร? ถ้ายังขาดอยู่ ก็มาทบทวนดูว่า 
                                                การบริหารเงินสดมีเงินเหลือจากค่าใช้จ่าย วางแผนออมเพิ่ม ถ้าประหยัดแล้ว ลดค่าใช้จ่ายแล้ว ยังมีเงินเหลือไม่เพียงพอ แนะนำให้หารายได้เพิ่ม</p>
                                        </div>
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
                                <!--div class="col-md-3 col-sm-6 col-xs-6 width-480">
                                    <div class="tg-teammember tg-haslayout">
                                        <figure class="tg-member-img">
                                            <a href="#"><img src="assets/images/pinhathai_resized.jpg" alt="member name"></a>
                                            <div class="tg-member-hover">
                                                <ul class="tg-member-hover-icons">
                                                    <li><a href="#"><i class="flaticon-plus79"></i></a></li>
                                                    <li><a href="#"><i class="flaticon-share55"></i></a></li>
                                                </ul>
                                            </div>
                                        </figure>
                                        <div class="tg-member-detail tg-haslayout">
                                            <span class="tg-member-name">อ. ปิ่นหทัย เดชสิงหรัตน์</span>
                                            <span class="tg-member-postion">Designer at Example.com</span>
                                            <ul class="tg-social-icon">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div-->
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
                <!--section class="tg-main-section tg-haslayout testimonial-image">
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
                </section-->
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
        <div class="modal fade mentor-modalbox" tabindex="-1" role="dialog">
            <div class="tg-signup-modalbox">
                <h2>MENTOR DETAIl</h2>
                <form style="padding:20px" >
                    <div style="overflow-x:hidden; max-height: 450px;">
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
                                    <!--legend>ประวัติ และคุณวุฒิ​</legend>
                                    <li>AFPTTM – Associate Financial Planner Thailand คุณวุฒิวิชาชีพที่ปรึกษาการเงิน จากสมาคมนักวางแผนการเงินไทย</li>
                                    <li>FChFP – Fellow Chartered Financial Practitioner คุณวุฒิทางวิชาชีพสำหรับมืออาชีพ ด้านบริการทางการเงิน จากสมาคมตัวแทนประกันชีวิตและที่ปรึกษาการเงิน</li>
                                    <li>RFC - Registered Financial Consultants วุฒิบัตรที่ปรึกษาการเงิน จากสถาบัน IARFC สมาคมที่ปรึกษาการเงินนานาชาติ ประเทศสหรัฐอเมริกา </li>
                                    <li>ใบอนุญาตผู้แนะนำการลงทุนด้านหลักทรัพย์ สำนักงานคณะกรรมการกำกับหลักทรัพย์และตลาดหลักทรัพย์ (กลต)</li>
                                    <li>ใบอนุญาตตัวแทนประกันชีวิต สำนักงานคณะกรรมการกำกับและส่งเสริมการประกอบธุรกิจประกันภัย (คปภ.)</li>
                                    <li>ปริญญาโท วิทยาศาสตร์มหาบัณฑิต (สาขาเทคโนโลยีสารสนเทศ) มหาวิทยาลัยเกษตรศาสตร์</p>
                                    <li>ปริญญาตรี บริหารธุรกิจบัณฑิต (สาขาระบบสารสนเทศ) เกียรตินิยมอันดับ 1 สถาบันเทคโนโลยีและอาชีวศึกษา</li-->
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
</html>
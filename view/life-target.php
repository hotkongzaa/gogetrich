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
                                    <!--                                    <ol class="tg-breadcrumb">
                                                                            <li><a href="main">Home</a></li>
                                                                            <li class="active">LEARN TO RICH</li>
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
                                    <a data-toggle="modal" data-target=".login-modalbox" href="#">
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
                                    width: 68% !important;
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
                                            <li >
                                                <a href="trainingSchedule">ประเภทของคอร์สเรียน</a>
                                            </li>
                                            <li>
                                                <a href="speaker-list">อาจารย์/ผู้สอน</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
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
                                    <h2>ล็อคเป้าหมายชีวิต</h2>
                                </div>
                            </div>
                            <div class="tg-aboutus-section">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <figure class="tg-about-img"><img src="assets/images/learn-to-rich/life-target.jpg" alt="image description"></figure>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="tg-aboutus">
                                        <div class="tg-description">
<!--                                            <p>Go Get Rich เกิดขึ้นมาจาก กลุ่มคนเล็กๆ ที่เห็นความสำคัญของ การจัดการและการวางแผนทางการเงิน เราเคยแอบบ่นกันเองว่า "นี่ถ้ามีความรู้เรื่องการจัดการ การวางแผนการเงิน และการลงทุน ตั้งแต่ตอนเรียนมหาวิทยาลัย หรือเมื่อตอนอายุยี่สิบ พวกเราคงรวย และได้เกษียณ ไม่ต้องทำงาน กันไปนานแล้ว"</p>
                                            <p>แต่อย่างไรก็ตาม สิ่งที่เรามองว่า เป็น "โชคดี" ของชาตินี้ ก็คือ ถึงจะรู้ช้า แต่อย่างน้อย ก็ได้รู้ ถึงแม้ อายุของแต่ละคนในทีม จะมากๆกันแล้วก็ตาม (ไม่ต้องถามหรอกนะ ว่าตอนนี้ อายุกันเท่าไร ฮา)</p>
                                            <p>ความรู้ ในการจัดการ วางแผนการเงิน และการลงทุน ที่พวกเรามี ไม่ได้ หมายความว่า พวกเรา เป็นเศรษฐีร้อยล้านพันล้าน แต่ ความรู้เหล่านี้ ได้ช่วยให้เรา "มีความสุข และได้ใช้ชีวิต โดยที่ไม่ต้องกังวลในเรื่องการเงิน" </p>
                                            <p>ความมุ่งมั่นของทีม Go Get Rich คือ การเผยแพร่ ความรู้ บนพื้นฐานของการจัดการการเงิน ตามปิระมิดการเงิน โดยใช้เครื่องมืออันทรงประสิทธิภาพที่สุดของการจัดการทางการเงิน ซึ่งก็คือ "การวางแผนจัดการเงิน"</p>
                                            <p><strong>มาร่วมกัน เรียนรู้ สร้าง วางแผนการเงิน และ ออกแบบการใช้ชีวิต ให้มีความสุขกันเถอะค่ะ !</strong></p>-->
                                            <p>&emsp;&emsp;&emsp;คุณอาจจะเคยได้ทราบเกี่ยวกับวิจัยชิ้นหนึ่งของ *มหาวิทยาลัยฮาร์วาดเกี่ยวกับการมีเป้าหมาย ผลการวิจัย พบว่า</p>
                                            <ul>
                                                <li>คนที่เป้าหมายชีวิตระยะยาวชัดเจน มีเพียง 3% ของกลุ่มคนที่สำรวจ ในช่วงระยะเวลา 20 ปี พวกเขาทุ่มเทความพยายามไปในทิศทางเดียวจึงทำให้พวกเขากลายเป็นคนประสบความสำเร็จอย่างมากในสังคม</li>
                                                <li>คนที่เป้าหมายชีวิตระยะสั้นชัดเจน คนกลุ่มนี้ส่วนใหญ่จะอยู่ในระดับกลางของสังคม ประสบความสำเร็จระดับหนึ่ง</li>
                                                <li>คนที่มีเป้าหมายชีวิตที่คลุมเครือ ซึ่งเป็นคนส่วนใหญ่ พวกเขาอยู่ในสังคมระดับกลาง มีงานทำแต่ไม่ประสบความสำเร็จในหน้าที่การงานมากเท่าที่ควร</li>
                                                <li>คนที่ไม่มีเป้าหมายชีวิต เป็นคนที่อยู่ในระดับล่างของสังคม ชีวิตไม่สมหวัง ตกงาน ต้องพึ่งพาความช่วยเหลือการเงินจากรัฐ ชอบบ่นว่าผู้อื่น บ่นว่าสังคม และบ่นว่าทุกอย่างในโลกใบนี้</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-centered">
                                    <div class="tg-aboutus">
                                        <div class="tg-description">
                                            </br>
                                            <p>&emsp;&emsp;&emsp;เป้าหมายการเงินที่สนับสนุนเป้าหมายชีวิต การขาดเป้าหมายการเงินก็เช่นเดียวกัน ทำให้ฐานะการเงินยังไม่สมกับความสามารถในการหารายได้ การมีความรู้ความเข้าใจองค์ความรู้วางแผนการเงินทำให้เข้าใจและสามารถจัดการโครงสร้างการเงิน สนับสนุนเป้าหมายชีวิต สนับสนุนให้ตนเองและครอบครัวมีสถานะการเงินมั่งคง</p>
                                            <p>&emsp;&emsp;&emsp;หลายคนมองย้อนกลับไปจะเห็นว่าทำไมแทบไม่เหลืออะไรเลย เหตุผลสำคัญคือ เราไม่มีเป้าหมายการเงิน มีรายได้เข้ามาทุกเดือนก็ใช้ไป รายได้เพิ่มหรือเปลี่ยนงานมีรายได้เพิ่มขึ้น ก็รู้สึกชีวิตสะดวกสบายขึ้น ซื้อสิ่งอำนวยความสะดวกได้มากขึ้น</p>
                                            <p>&emsp;&emsp;&emsp;ความรู้การเงินทำให้เรารู้วิธีสร้างเป้าหมายการเงิน เหมือนมีตะกร้าเงินหลาย ๆ ใบที่จะค่อยกักเก็บเงินให้คุณตามเป้าหมายการเงินที่สนับสนุนเป้าหมายชีวิตของคุณ หรืออย่างน้อยคุณมีตะกร้า “เป้าหมายอิสรภาพการเงิน” ที่ชัดเจนว่าต้องมีเงินเท่าไร ตอนอายุเท่าไรตามที่เรากำหนด </p>
<!--                                                <p>&emsp;&emsp;&emsp;การขาดเป้าหมายการเงินก็เช่นเดียวกัน ทำให้ฐานะการเงินยังไม่สมกับความสามารถในการหารายได้ การมีความรู้ความเข้าใจองค์ความรู้วางแผนการเงินทำให้เข้าใจและสามารถจัดการโครงสร้างการเงิน สนับสนุนให้ตนเองและครอบครัวมีสถานะการเงินมั่งคง</p>
                                            <p style="text-align:center">
                                                <img src="assets/images/learn-to-rich/life_goal_1.jpg" alt="image description" style="width:224px;height:192px;"/>
                                            </p>
                                            <p><strong>วิธีสำรวจตนเองง่าย ๆ คือ</strong><br/>
                                                &emsp;&emsp;&emsp;1. หารายได้ผ่านมือ<br/>
                                                &emsp;&emsp;&emsp;2. หามูลค่าทรัพย์สินสุทธิที่คงเหลือปัจจุบัน<br/>
                                                &emsp;&emsp;&emsp;3. เปรียบเทียบกับมูลค่าทรัพย์สินสุทธิคงเหลือมาตรฐาน</p>
                                            <p><strong>1. หารายได้ผ่านมือ</strong></p>
                                            <p>รายได้เฉลี่ยต่อเดือน = (รายได้เดือนล่าสุด + รายได้เดือนแรกที่เริ่มงาน) / 2<br />
                                                <u>ตัวอย่าง</u> รายได้เดือนล่าสุด 60,000 บาท รายได้เดือนแรก 15,000 บาท ทำงานมา 15 ปี
                                                รายได้เฉลี่ยต่อเดือน = (60,000 + 15,000) / 2 = 37,500 บาท
                                                รายได้ผ่านมือ         = 37,500 X 12 X 15 = 6,750,000 บาท</p>
                                            <p><strong>2. หามูลค่าทรัพย์สินสุทธิที่คงเหลือปัจจุบัน</strong></p>
                                            <p>มูลค่าทรัพย์สินสุทธิ = ทรัพย์สิน – หนี้สิน<br />
                                                <u>ตัวอย่าง</u></p>
                                            <table class="table table-condensed schedule_detail_table" style="width:70%">
                                                <tbody>
                                                    <tr>
                                                        <td style="text-align:left !important;">เงินสด</td>
                                                        <td style="text-align:right !important;">10,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left !important;">เงินฝากธนาคาร</td>
                                                        <td style="text-align:right !important;">100,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left !important;">LTF</td>
                                                        <td style="text-align:right !important;">200,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left !important;">กองทุนสำรองเลี้ยงชีพ</td>
                                                        <td style="text-align:right !important;">300,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left !important;">มูลค่าเงินสดกรมธรรม์ประกันชีวิต</td>
                                                        <td style="text-align:right !important;">300,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left !important;">บ้าน (ราคาถ้าขายได้ตอนนี้)</td>
                                                        <td style="text-align:right !important;">3,000,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left !important;">รถ (ราคาถ้าขายได้ตอนนี้)</td>
                                                        <td style="text-align:right !important;">400,000</td>
                                                    </tr>
                                                    <tr bgcolor="#ffcc33">
                                                        <td style="text-align:left !important;">ทรัพย์สินรวม</td>
                                                        <td style="text-align:right !important;">4,310,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left !important;">เงินกู้ซื้อบ้านคงเหลือ</td>
                                                        <td style="text-align:right !important;">2,000,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left !important;">เงินกู้ซื้อรถคงเหลือ</td>
                                                        <td style="text-align:right !important;">360,000</td>
                                                    </tr>
                                                    <tr bgcolor="#ffcc33">
                                                        <td style="text-align:left !important;">หนี้สินรวม</td>
                                                        <td style="text-align:right !important;">2,360,000</td>
                                                    </tr>
                                                    <tr bgcolor="#ffcc33">
                                                        <td style="text-align:left !important;">มูลค่าทรัพย์สินสุทธิ</td>
                                                        <td style="text-align:right !important;">1,950,000</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p><strong>3. เปรียบเทียบกับมูลค่าทรัพย์สินสุทธิคงเหลือมาตรฐาน</strong></p>
                                            <table class="table table-condensed schedule_detail_table" style="width:70%">
                                                <tbody>
                                                    <tr>
                                                        <td style="text-align:left !important;">มูลค่าทรัพย์สินสุทธิคงเหลือ</td>
                                                        <td style="text-align:left !important;">=  รายได้ปีล่าสุด x จำนวนปีที่ทำงาน x 20%</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2"  style="text-align:left !important;"><u>ตัวอย่าง</u></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left !important;">มูลค่าทรัพย์สินสุทธิคงเหลือ</td>
                                                        <td style="text-align:left !important;">= 720,000 บาท x 15 ปี x 20%</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left !important;"></td>
                                                        <td style="text-align:left !important;">= 2,160,000 บาท</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>&emsp;&emsp;&emsp;จากตัวอย่างรายได้ผ่านมือตั้งแต่ทำงาน 15 ปี 6,750,000 บาท มีมูลค่าทรัพย์สินสุทธิจริง 1,950,000 บาท มูลค่าทรัพย์สินที่ควรจะมีคือ 2,160,000 บาท</p>
                                            <p align="center">“แล้วของคุณมีมูลค่าทรัพย์สินคงเหลือเท่าไร? พอใจกับสถานะการเงินตอนนี้มั้ย”</p>
                                            <p>&emsp;&emsp;&emsp;หลายคนมองย้อนกลับไปจะเห็นว่าทำไมแทบไม่เหลืออะไรเลย เหตุผลสำคัญคือ เราไม่มีเป้าหมายการเงิน มีรายได้เข้ามาทุกเดือนก็ใช้ไป รายได้เพิ่มหรือเปลี่ยนงานมีรายได้เพิ่มขึ้น ก็รู้สึกชีวิตสะดวกสบายขึ้น ซื้อสิ่งอำนวยความสะดวกได้มากขึ้น</p>
                                            <p>&emsp;&emsp;&emsp;ความรู้การเงินทำให้เรารู้วิธีสร้างเป้าหมายการเงิน เหมือนมีตะกร้าเงินหลาย ๆ ใบที่จะค่อยกักเก็บเงินให้คุณตามเป้าหมายการเงินที่สนับสนุนเป้าหมายชีวิตของคุณ หรืออย่างน้อยคุณมีตะกร้า “เป้าหมายอิสรภาพการเงิน” ที่ชัดเจนว่าต้องมีเงินเท่าไร ตอนอายุเท่าไรตามที่เรากำหนด</p>-->
                                            <br />
                                            <br />
                                            <br />
                                            <p>*แหล่งข้อมูล: <br />“ฮาร์วาร์ด มหาวิทยาลัยที่ดีที่สุดของโลก” สอนวิธีคิด เล่มที่ 1 - “วิชาชีวิตที่ไม่มีในตำรา” <a href="https://th-th.facebook.com/beemedia/posts/973694775998954:0">https://th-th.facebook.com/beemedia/posts/973694775998954:0</a></p>
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
                            <?php include './mentor_part.php'; ?>
                        </div>
                    </div>
                </section>
                <!--************************************
                                Our Team End
                *************************************-->
                <?php include './mentor_dialog.php'; ?>
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
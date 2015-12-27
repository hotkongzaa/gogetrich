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
            <div class="tg-banner tg-haslayout parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="assets/images/training_schedule_detail_banner_v2_1920x250.jpg">
                <div class="tg-banner-holder">
                    <div class="container">
                        <div class="tg-displaytable">
                            <div class="tg-displaytablecell">
                                <div class="banner-content tg-haslayout">
                                    <h1>Course Schedule</h1>
                                    <ol class="tg-breadcrumb">
                                        <li><a href="main">Home</a></li>
                                        <li class="active">Course Schedule</li>
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
                                    <li>
                                        <a href="aboutus">About</a>
                                    </li>
                                    <li class="current-menu-item">
                                        <a href="#">Training/Seminar</a>
                                        <ul>
                                            <li class="current-menu-item">
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
                                    <h2><?= $_GET['cname'] ?></h2>
                                    <span>"ความลับ" ของการจัดการเงิน อย่างฉลาด เพื่ออิสรภาพ ทางการเงิน</span>
                                </div>
                            </div>
                            <div class="tg-aboutus-section">
                                <div class="col-md-10 col-sm-10 col-xs-10">
                                    <div class="container">
                                        <div class="row">
                                            <div class="span12">
                                                <table class="table table-condensed table-hover schedule_detail_table">
                                                    <tbody>
                                                        <tr>
                                                            <td width="250px"><strong>Training Date: </strong></td>
                                                            <td>
                                                                <ul>
                                                                    <li>23 January's 2016 - 24 January's 2016</li>
                                                                    <li>
                                                                        <?php
                                                                        if (empty($_SESSION['username'])) {
                                                                            ?>
                                                                            <a href="#" class="tg-theme-btn-sm" data-toggle="modal" data-target=".login-modalbox">ลงทะเบียน</a>
                                                                            <?php
                                                                        } else {
                                                                            ?>
                                                                            <a href="#" class="tg-theme-btn-sm" data-toggle="modal" data-target=".register-modalbox">ลงทะเบียน</a>
                                                                            <?php
                                                                        }
                                                                        ?>

                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Time :</strong></td>
                                                            <td>12 ชั่วโมง</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Days :</strong></td>
                                                            <td>2 วัน</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Duration :</strong></td>
                                                            <td>09:00 - 16:00</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Fee :</strong></td>
                                                            <td>
                                                                <ul>
                                                                    <li>บุคคลทั่วไป 3,900 บาท</li>
                                                                    <li>early bird ลงทะเบียนก่อนวันที่ 9 มกราคม 2559 - 3,500 บาท</li>
                                                                    <li>มาเป็นคู่ หรือ ลงทะเบียนแบบกลุ่ม 5 ท่าน ท่านละ 3,500 บาท</li>
                                                                    <li>ฟรี coffee break เช้า บ่าย, อาหารกลางวัน และเอกสารการเรียนการสอน</li>
                                                                    <li><span style="color:red;">อัตรานี้ ยังไม่รวม VAT 7%</span></li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Language :</strong></td>
                                                            <td>ไทย</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Instructor :</strong></td>
                                                            <td>
                                                                <ul>
                                                                    <li>อ. วิภา เจริญกิจสุพัฒน์</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Objective :</strong></td>
                                                            <td>
                                                                <p>การที่จะมี ความสุขที่แท้จริงอันเกิดจากความมั่งคั่งที่มั่นคง ความร่ำรวยที่ยั่งยืน มั่นใจว่าชีวิตหลังเกษียณจะสามารถอยู่ได้อย่างมีความสุข โดยไม่ต้องเป็นห่วงกับการหาเงินอีกต่อไป อยู่ที่คนเรา สามารถเห็นเป้าหมายและความต้องการในชีวิต และความต้องการทางการเงินของตนเองอย่างชัดเจน
                                                                    การมีความรู้ ความเข้าใจ ในหลักการ แนวทาง และวิธีการวางแผนการเงิน ที่จะนำไปสู่ การจัดการการเงินที่ได้ผล จึงเป็นสิ่งสำคัญอย่างยิ่ง</p>

                                                                <p><strong>Secret$ of Money Cat คอร์สอบรม รูปแบบ เวิร์คช็อบสัมมนา</strong></p>

                                                                <p>จึงกำเนิดขึ้นมา โดยมี เป้าประสงค์ เพื่อผู้เรียนสามารถกำหนดจัดตั้งเป้าหมายชีวิต ความต้องการชีวิต ความต้องการทางการเงิน และเป้าหมายการเงิน เช่น การจัดการรายจ่าย การวางแผนเกษียณ การจัดการหนี้สิน การจัดการเงินเพื่ออนาคต ที่ชัดเจนขึ้น โดยเนื้อหาหลักสูตรที่ให้ จะทำให้ผู้เรียน มีความเข้าใจและได้แนวทาง สำหรับการวางแผนการเงินที่สนับสนุนเป้าหมายการเกษียณและเป้าหมายชีวิตได้</p>

                                                                <p><strong>อิสรภาพทางการเงิน = อิสรภาพชีวิต</strong></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Who Should Attend :</strong></td>
                                                            <td>
                                                                <p>คอร์สนี้ เหมาะกับ ผู้ที่กำลังต้องการ วางรากฐานความมั่นคงทางการเงินให้ชีวิต หรือครอบครัว เริ่มต้นลงทุนอย่างเข้าใจ ต้องการจัดการหรือปรับเปลี่ยนพฤติกรรมการใช้เงินของตนเอง ต้องการหาทางลดภาระรายจ่ายและหนี้สิน ต้องการหาแนวทางในการเพิ่มรายได้ ต้องการหาแนวทาง และวิธีการ เพื่อการเกษียณ ให้ได้เร็วขึ้น และ ต้องการมี อิสรภาพ ทางการเงิน</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Benefits: </strong></td>
                                                            <td>
                                                                <p>เข้าใจเป้าหมาย และกระบวนการวางแผนการเงิน วางรากฐานการเงินให้มั่นคง สร้างความมั่งคั่งระยะยาว จัดการภาษีบุคคลให้อยู่หมัด! ศักยภาพสร้างเงิน</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Course Outline :</strong></td>
                                                            <td>
                                                                <strong>1. เข้าใจเป้าหมาย และกระบวนการวางแผนการเงิน</strong>
                                                                <ul>
                                                                    <li><p>แกะรอยปัญหาหรือพฤติกรรมการใช้เงินของตนเอง วิเคราะห์สุขภาพทางการเงิน เข้าใจภาพรวมของกระบวนการวางแผนการเงิน และความลับทางการเงิน ที่จะช่วยให้ตระหนักถึงความรวดเร็วของการเติบโตดอกเบี้ยทางการเงิน</p></li>
                                                                </ul>
                                                                <strong>2. ตอกเสาร์เข็ม! วางรากฐานการเงินให้มั่นคง</strong>
                                                                <ul>
                                                                    <li><p>การสร้างงบประมาณการเงิน การสร้างเงินสำรองฉุกเฉิน การวางแผนประกันทั้งระบบ การวางแผนก่อนการเป็นหนี้ และการวางแผนออกจากหนี้</p></li>
                                                                </ul>
                                                                <strong>3. สร้างความมั่งคั่งระยะยาว</strong>
                                                                <ul>
                                                                    <li><p>การออมและการลงทุนตามเป้าหมายการเงิน การวางแผนการเงินเป้าหมายระยะยาว การวางแผนเกษียณ</p></li>
                                                                </ul>
                                                                <strong>4. จัดการภาษีบุคคลให้อยู่หมัด!</strong>
                                                                <ul>
                                                                    <li><p>พบความแตกต่างระหว่างคนวางแผนและไม่วางแผนภาษี เข้าใจโครงสร้างการคำนวณภาษีเงินได้บุคคลธรรมดา การคำนวณภาษีแบบขั้นบันได สิทธิลดหย่อนภาษีของบุคคลธรรมดาที่ถูกต้อง ครบถ้วน เลือกใช้เป็น เทคนิคการวางแผนภาษีโดยการแยกหน่วยภาษี และตัวอย่างการเครดิตภาษีเงินปันผล</p></li>
                                                                </ul>
                                                                <strong>5. ศักยภาพสร้างเงิน!</strong>
                                                                <ul>
                                                                    <li><p>ค้นหาลักษณะของตนที่จะประสบความสำเร็จ และแนวทางในการสร้างรายได้เพิ่ม</p></li>
                                                                </ul>
                                                                <strong>6. สร้าง Passive income หลังเกษียณ!</strong>
                                                                <ul>
                                                                    <li><p>พบ เครื่องมือการออมและการลงทุน และเริ่มต้นลงทุนอย่างเข้าใจ</p></li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <strong>Payment Condition :</strong>
                                                            </td>
                                                            <td>
                                                                <ul>
                                                                    <li>เงินสด ณ หน้างานในวันแรกของการอบรม</li>
                                                                    <li>โอนเงินเข้าบัญชีออมทรัพย์ ชื่อบัญชี "บจ. เอสอี ทอล์ค" ธนาคารกรุงเทพ เลขที่บัญชี 021-7-08688-3</li>
                                                                    <ul>
                                                                        <li><strong>หมายเหตุ</strong>             
                                                                            ส่งหลักฐานการโอนเงินมาได้ที่ pinhatai.d@gmail.com</li>
                                                                        <li><strong>นโยบายการขอยกเลิกและคืนเงิน</strong><br/>             
                                                                            แจ้งยกเลิกภายใน 7 วันก่อนวันเรียน (ภายใน 12 ธันวาคม 2558) ได้รับเงินคืนเต็มจำนวน แจ้งยกเลิกหลังวันที่ 12 ธันวาคม 2558 ผู้เรียนยังต้องจ่ายค่าลงทะเบียนเต็มจำนวน</li>
                                                                    </ul>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <strong>Contact Person :</strong>
                                                            </td>
                                                            <td>
                                                                <p>Ms. Pinhatai Dechsingharat</p>
                                                                <p>Tel: 081-9023872</p>
                                                                <p>Facebook: www.facebook.com/richplanning</p>
                                                                <p>Website: www.gogetrich.net</p>
                                                                <p>Email: pinhatai.d@setalk.net</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <strong>Location:</strong>
                                                            </td>
                                                            <td><br/>
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <div id="tg-map" class="tg-map">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" style="text-align:center !important;">
                                                                <br/>
                                                                <?php
                                                                if (empty($_SESSION['username'])) {
                                                                    ?>
                                                                    <a href="#" class="tg-theme-btn" data-toggle="modal" data-target=".login-modalbox">ลงทะเบียน</a>
                                                                    <?php
                                                                } else {
                                                                    ?>
                                                                    <a href="#" class="tg-theme-btn" data-toggle="modal" data-target=".register-modalbox">ลงทะเบียน</a>
                                                                    <?php
                                                                }
                                                                ?>                                                                
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
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
                            <input type="text" id="usernameLogin" name="username" placeholder="User name" class="form-control">
                        </div>
                        <div class="form-group">
                            <i class="fa fa-lock"></i>
                            <input type="password" id="passwordLogin" name="password"  placeholder="Password" class="form-control">
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
        <!--************************************
                        Popup End
        *************************************-->
    </body>
    <style type="text/css">
        .schedule_detail_table tr td{
            text-align: left !important;
        }
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
                                window.location.href = 'scheduleDetail?cname=<?= $_GET['cname'] ?>';
                            } else {
                                alert(data);
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
                data: {'username': $("#usernameLogin").val(), 'password': $("#passwordLogin").val()},
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
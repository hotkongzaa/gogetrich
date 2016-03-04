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
        <title>My Blog</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
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
                                    <h1>แบบสำรวจความพร้อมการเงิน</h1>
                                    <ol class="tg-breadcrumb">
                                        <li><a href="#">Home</a></li>
                                        <li class="active">แบบสำรวจความพร้อมการเงิน</li>
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
                                    <li>
                                        <a href="aboutus">About</a>
                                    </li>
                                    <li>
                                        <a href="#">Training/Seminar</a>
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
                                    <li class="current-menu-item">
                                        <a href="blog-list">Blog</a>
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
                                <a href="blog-list" class="btn btn-default"><i class="fa fa-backward"></i> Back</a>
                                <br/><br/>
                            </div>
                        </div>
                        <div class="row">
                            <div id="content" class="col-md-9 col-sm-8 col-xs-12" style="margin-left: 11%">

                                <article class="blog-post blog-post-detail tg-haslayout">
                                    <figure>
                                        <img src="assets/images/ice_berg_image_v6_653x310.png" alt="สำรวจความพร้อมการเงิน">
                                        <div class="tg-img-hover">
                                            <div class="tg-displaytable">
                                                <div class="tg-displaytablecell">
                                                    <h2>สำรวจความพร้อมการเงิน</h2>
                                                    <ul class="tg-metadata">
                                                        <li class="author"><a href="#">อ. วิภา เจริญกิจสุพัฒน์ (พี่เกียก)</a></li>
                                                        <!--li class="catagory"><a href="#"></a></li-->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="tg-post-detail">
                                        <div class="tg-description">
                                            <h2>แบบสำรวจความพร้อมการเงิน</h2>
                                            <legend style="padding-bottom: 20px;">กรุณาใส่เครื่องหมายถูก / ในข้อที่ตรงกับสถานการณ์ปัจจุบันของคุณ “ใช่, ไม่ใช่, ไม่แน่ใจ”</legend>
                                            <div class="12">
                                                <table class="table table-condensed table-hover schedule_detail_table">
                                                    <tbody>
                                                        <tr style="background-color:#E7E7E7">
                                                            <td><strong>การเงินที่เตรียมแล้วของฉัน</strong></td>
                                                            <td><strong>ใช่</strong></td>
                                                            <td><strong>ไม่ใช่</strong></td>
                                                            <td><strong>ไม่แน่ใจ</strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">1. ฉันมีการออมอย่างน้อย 10% ของรายได้ทุกเดือน</td>
                                                            <td width="100px"><input type="radio" name="no1" value="0"></td>
                                                            <td width="100px"><input type="radio" name="no1" value="1"></td>
                                                            <td width="100px"><input type="radio" name="no1" value="2"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">2. วันนี้ฉันไม่กังวลหากรายได้หยุดกะทันหัน  เพราะมีเงินสำรองฉุกเฉินเพียงพอสำหรับค่าใช้จ่าย 6 เดือน </td>
                                                            <td width="100px"><input type="radio" name="no2" value="0"></td>
                                                            <td width="100px"><input type="radio" name="no2" value="1"></td>
                                                            <td width="100px"><input type="radio" name="no2" value="2"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">3. ฉันมีแผนชัดเจนในการชำระหนี้สินและชำระได้หมดก่อนเกษียณอายุ</td>
                                                            <td width="100px"><input type="radio" name="no3" value="0"></td>
                                                            <td width="100px"><input type="radio" name="no3" value="1"></td>
                                                            <td width="100px"><input type="radio" name="no3" value="2"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">4. ค่างวดผ่อนชำระของฉันทั้งหมดไม่รวมค่างวดผ่อนบ้าน น้อยกว่า 20% ของรายได้ต่อเดือน</td>
                                                            <td width="100px"><input type="radio" name="no4" value="0"></td>
                                                            <td width="100px"><input type="radio" name="no4" value="1"></td>
                                                            <td width="100px"><input type="radio" name="no4" value="2"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">5. ค่างวดผ่อนชำระของฉันทั้งหมดในแต่ละเดือน น้อยกว่า 35% ของรายได้ต่อเดือน</td>
                                                            <td width="100px"><input type="radio" name="no5" value="0"></td>
                                                            <td width="100px"><input type="radio" name="no5" value="1"></td>
                                                            <td width="100px"><input type="radio" name="no5" value="2"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">6. ฉันจ่ายเงินคืนบัตรเครดิตเต็มจำนวนทุกเดือน</td>
                                                            <td width="100px"><input type="radio" name="no6" value="0"></td>
                                                            <td width="100px"><input type="radio" name="no6" value="1"></td>
                                                            <td width="100px"><input type="radio" name="no6" value="2"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">7. ฉันเตรียมค่าใช้จ่ายสำหรับใช้จ่ายหลังเกษียณได้อย่างน้อย 15 ปี ในวันที่เกษียณมาถึง</td>
                                                            <td width="100px"><input type="radio" name="no7" value="0"></td>
                                                            <td width="100px"><input type="radio" name="no7" value="1"></td>
                                                            <td width="100px"><input type="radio" name="no7" value="2"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">8. หากเกิดการจากไปกะทันหันของหัวหน้าครอบครัว สมาชิกในอุปการะยังคงมีเงินสำหรับค่าใช้จ่ายได้อย่างน้อย 5 ปี หรือ 60 เดือน</td>
                                                            <td width="100px"><input type="radio" name="no8" value="0"></td>
                                                            <td width="100px"><input type="radio" name="no8" value="1"></td>
                                                            <td width="100px"><input type="radio" name="no8" value="2"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">9. หากเกิดการเจ็บป่วยหรืออุบัติเหตุหนักของฉันหรือสมาชิกในครอบครัว ที่ต้องใช้ค่ารักษาหลักแสน ไม่กระทบกับค่าใช้จ่ายและเงินออมรายเดือน</td>
                                                            <td width="100px"><input type="radio" name="no9" value="0"></td>
                                                            <td width="100px"><input type="radio" name="no9" value="1"></td>
                                                            <td width="100px"><input type="radio" name="no9" value="2"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;">10. หากวันนี้หัวหน้าครอบครัวเกิดเหตุทำให้ไม่สามารถทำงานอีกต่อไป เช่น พิการ ครอบครัวสามารถอยู่ได้อย่างน้อย 5 ปีหรือ 60 เดือน</td>
                                                            <td width="100px"><input type="radio" name="no10" value="0"></td>
                                                            <td width="100px"><input type="radio" name="no10" value="1"></td>
                                                            <td width="100px"><input type="radio" name="no10" value="2"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;"><strong></strong></td>
                                                            <td width="300px" colspan="3">                                                                
                                                                <a style="cursor:pointer" onclick="calculateAss()" class="btn btn-default pull-right">
                                                                    <i class="fa fa-calculator"></i> เริ่มคำนวณ
                                                                </a>
                                                                <a style="cursor:pointer; margin-right:5px;" onclick="resetAss()" class="btn btn-default pull-right">
                                                                    <i class="fa fa-refresh"></i> เริ่มต้นใหม่
                                                                </a>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;"><strong>A) จำนวนข้อที่เลือก</strong></td>
                                                            <td width="100px"><span id="totalSelectFirstChoice"></span></td>
                                                            <td width="100px"><span id="totalSelectSecondChoice"></span></td>
                                                            <td width="100px"><span id="totalSelectThirdChoice"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;"><strong>B) ให้คะแนน</strong></td>
                                                            <td width="100px">3 แต้ม</td>
                                                            <td width="100px">0 แต้ม</td>
                                                            <td width="100px">-3 แต้ม</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;"><strong>C) รวมคะแนนแต่ละช่อง</strong></td>
                                                            <td width="100px"><span id="totalPointFirstChoice"></span></td>
                                                            <td width="100px">0</td>
                                                            <td width="100px"><span id="totalPointThirdChoice"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left !important;"><strong>D) คะแนนรวม</strong></td>
                                                            <td td colspan="3" style="text-align:center !important;"><strong><span id="totalPointSummary"></span></strong></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <p>
                                                <span style="margin-left:28%; font-size:18px; width:100%">
                                                    ระดับความพร้อมของคุณ: <strong><span id="summaryText">กรุณาทำแบบสอบถาม</span></strong>
                                                </span>
                                                <br/><br/>
                                                <a href="blog-detail-me-2" class="btn btn-default">
                                                    <i class="fa fa-book"></i> รายละเอียดเพิ่มเติม
                                                </a>
                                            </p>
                                            <blockquote>
                                                <q>"การวางแผนการเงินเพื่อให้เกิดความชัดเจนเรื่องเงิน ตลอดทุกช่วงชีวิต เพื่อความสงบสุขทางใจ เพื่อสร้างความมั่นคงให้กับครอบครัว"</q>
                                            </blockquote>
                                        </div>
                                    </div>
                                </article>

                            </div>                           
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
                <h2>LOGIN FORM</h2>
                <form class="login-form">
                    <fieldset>
                        <div class="form-group">
                            <i class="fa fa-envelope"></i>
                            <input type="email" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <i class="fa fa-lock"></i>
                            <input type="text" placeholder="Name" class="form-control">
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
                <p>Not a Member? <a href="#">Create an Account</a></p>
            </div>
        </div>
        <div class="modal fade signup-modalbox" tabindex="-1" role="dialog">
            <div class="tg-signup-modalbox">
                <h2>REGISTRATION FORM</h2>
                <form class="login-form">
                    <fieldset>
                        <div class="form-group">
                            <input type="text" placeholder="Username" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Confirm Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email Address" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="First Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Last Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label><input type="checkbox"><em>I agree with the terms and conditions</em></label>
                        </div>
                        <button class="tg-theme-btn tg-theme-btn-lg" type="submit">Create an Account</button>
                    </fieldset>
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
        function resetAss() {
            $('input:radio[name=no1]').filter(":checked").prop("checked", false);
            $('input:radio[name=no2]').filter(":checked").prop("checked", false);
            $('input:radio[name=no3]').filter(":checked").prop("checked", false);
            $('input:radio[name=no4]').filter(":checked").prop("checked", false);
            $('input:radio[name=no5]').filter(":checked").prop("checked", false);
            $('input:radio[name=no6]').filter(":checked").prop("checked", false);
            $('input:radio[name=no7]').filter(":checked").prop("checked", false);
            $('input:radio[name=no8]').filter(":checked").prop("checked", false);
            $('input:radio[name=no9]').filter(":checked").prop("checked", false);
            $('input:radio[name=no10]').filter(":checked").prop("checked", false);

            $("#totalSelectFirstChoice").empty();
            $("#totalSelectSecondChoice").empty();
            $("#totalSelectThirdChoice").empty();

            $("#totalPointFirstChoice").empty();
            $("#totalPointThirdChoice").empty();
            $("#totalPointSummary").empty();

            $("#summaryText").html("กรุณาทำแบบสอบถาม");
        }
        function calculateAss() {
            var totalChoiceOne = 0;
            var totalChoiceTwo = 0;
            var totalChoiceThree = 0;

            var no1 = $('input:radio[name=no1]').filter(":checked").val();
            if (no1 == 0) {
                totalChoiceOne += 1;
            }
            if (no1 == 1) {
                totalChoiceTwo += 1;
            }
            if (no1 == 2) {
                totalChoiceThree += 1;
            }
            var no2 = $('input:radio[name=no2]').filter(":checked").val();
            if (no2 == 0) {
                totalChoiceOne += 1;
            }
            if (no2 == 1) {
                totalChoiceTwo += 1;
            }
            if (no2 == 2) {
                totalChoiceThree += 1;
            }
            var no3 = $('input:radio[name=no3]').filter(":checked").val();
            if (no3 == 0) {
                totalChoiceOne += 1;
            }
            if (no3 == 1) {
                totalChoiceTwo += 1;
            }
            if (no3 == 2) {
                totalChoiceThree += 1;
            }
            var no4 = $('input:radio[name=no4]').filter(":checked").val();
            if (no4 == 0) {
                totalChoiceOne += 1;
            }
            if (no4 == 1) {
                totalChoiceTwo += 1;
            }
            if (no4 == 2) {
                totalChoiceThree += 1;
            }
            var no5 = $('input:radio[name=no5]').filter(":checked").val();
            if (no5 == 0) {
                totalChoiceOne += 1;
            }
            if (no5 == 1) {
                totalChoiceTwo += 1;
            }
            if (no5 == 2) {
                totalChoiceThree += 1;
            }
            var no6 = $('input:radio[name=no6]').filter(":checked").val();
            if (no6 == 0) {
                totalChoiceOne += 1;
            }
            if (no6 == 1) {
                totalChoiceTwo += 1;
            }
            if (no6 == 2) {
                totalChoiceThree += 1;
            }
            var no7 = $('input:radio[name=no7]').filter(":checked").val();
            if (no7 == 0) {
                totalChoiceOne += 1;
            }
            if (no7 == 1) {
                totalChoiceTwo += 1;
            }
            if (no7 == 2) {
                totalChoiceThree += 1;
            }
            var no8 = $('input:radio[name=no8]').filter(":checked").val();
            if (no8 == 0) {
                totalChoiceOne += 1;
            }
            if (no8 == 1) {
                totalChoiceTwo += 1;
            }
            if (no8 == 2) {
                totalChoiceThree += 1;
            }
            var no9 = $('input:radio[name=no9]').filter(":checked").val();
            if (no9 == 0) {
                totalChoiceOne += 1;
            }
            if (no9 == 1) {
                totalChoiceTwo += 1;
            }
            if (no9 == 2) {
                totalChoiceThree += 1;
            }
            var no10 = $('input:radio[name=no10]').filter(":checked").val();
            if (no10 == 0) {
                totalChoiceOne += 1;
            }
            if (no10 == 1) {
                totalChoiceTwo += 1;
            }
            if (no10 == 2) {
                totalChoiceThree += 1;
            }

            $("#totalSelectFirstChoice").html(totalChoiceOne);
            $("#totalSelectSecondChoice").html(totalChoiceTwo);
            $("#totalSelectThirdChoice").html(totalChoiceThree);

            $("#totalPointFirstChoice").html(totalChoiceOne * 3);
            $("#totalPointThirdChoice").html(totalChoiceThree * -3);

            var totalSum = (totalChoiceOne * 3) + (totalChoiceThree * -3) + 0;

            $("#totalPointSummary").html(totalSum);

            if (totalSum <= 15) {
                $("#summaryText").html("เสี่ยงต่อการเป็นหนี้ที่ควบคุมไม่ได้สูง");
            } else if (totalSum >= 16 && totalSum <= 20) {
                $("#summaryText").html("มีความพร้อมในปัจจุบัน แต่เสี่ยงที่ระดับความพร้อมจะลดลง");
            } else if (totalSum > 20) {
                $("#summaryText").html("มีความพร้อมในปัจจุบัน");
            }
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
</html>
<?php
session_start();
$now = time();
if (isset($_SESSION['expire'])) {
    if ($now > $_SESSION['expire']) {
        session_destroy();
    }
}
require '../model-db-connection/config.php';
$sqlGetCourseHeaderID = "SELECT * FROM GTRICH_COURSE_HEADER WHERE HEADER_ID = '" . $_GET['cname'] . "'";
$res = mysql_query($sqlGetCourseHeaderID);
$rowHeader = mysql_fetch_assoc($res);
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
                            <div class="col-xs-12 pull-left">
                                <a href="trainingSchedule" class="btn btn-default"><i class="fa fa-backward"></i> Back</a>
                                <br/><br/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="tg-theme-heading">     
                                    <?php
                                    if (!empty($rowHeader['HEADER_NAME'])) {
                                        ?>
                                        <h2><?= $rowHeader['HEADER_NAME'] ?></h2>
                                        <span><?= $rowHeader['SUB_HEADER_NAME'] ?></span>
                                        <?php
                                    }
                                    ?>


                                </div>
                            </div>
                            <?php
                            if (!empty($rowHeader['HEADER_NAME'])) {
                                ?>
                                <div class="tg-aboutus-section">
                                    <div class="col-md-10 col-sm-10 col-xs-10">
                                        <div class="container">
                                            <div class="row">
                                                <div class="span12">
                                                    <table class="table table-condensed table-hover schedule_detail_table">
                                                        <tbody>
                                                            <?php
                                                            $sqlGetCourseDetailByHeaderID = "SELECT * FROM GTRICH_COURSE_DETAIL GCD"
                                                                    . " LEFT JOIN GTRICH_DESCRIPTION_HEADER GDH ON GCD.DESC_HEADER_ID = GDH.DESC_HEADER_ID "
                                                                    . " WHERE 1=1"
                                                                    . " AND GCD.REF_COURSE_HEADER_ID = '" . $rowHeader['HEADER_ID'] . "'"
                                                                    . " ORDER BY DETAIL_ORDER ASC";
                                                            $resGetCourseDetailByHeaderID = mysql_query($sqlGetCourseDetailByHeaderID);
                                                            while ($rowGetCourseDetailByHeaderID = mysql_fetch_array($resGetCourseDetailByHeaderID)) {
                                                                if (!empty($rowGetCourseDetailByHeaderID['DETAIL_LAT'])) {
                                                                    ?>
                                                                    <tr>
                                                                        <td width="250px"><strong><?= $rowGetCourseDetailByHeaderID['DESC_HEADER_NAME'] ?> </strong></td>
                                                                        <td>
                                                                            <br/>
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <script type="text/javascript">
                                                                                    $(document).ready(function () {
                                                                                        $("#<?= $rowGetCourseDetailByHeaderID['DETAIL_ID'] ?>").gmap3({
                                                                                            marker: {
                                                                                                values: [
                                                                                                    {latLng: [<?= $rowGetCourseDetailByHeaderID['DETAIL_LAT'] ?>, <?= $rowGetCourseDetailByHeaderID['DETAIL_LNG'] ?>], data: "Saminar Position !"}
                                                                                                ]},
                                                                                            map: {
                                                                                                options: {
                                                                                                    zoom: 16,
                                                                                                    scrollwheel: false,
                                                                                                    navigationControl: false,
                                                                                                    mapTypeControl: false,
                                                                                                    scaleControl: false,
                                                                                                    draggable: false
                                                                                                }
                                                                                            }
                                                                                        });
                                                                                    });
                                                                                </script>
                                                                                <div id="<?= $rowGetCourseDetailByHeaderID['DETAIL_ID'] ?>" class="tg-map">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <?php
                                                                } else {
                                                                    ?>
                                                                    <tr>
                                                                        <td width="250px"><strong><?= $rowGetCourseDetailByHeaderID['DESC_HEADER_NAME'] ?> </strong></td>
                                                                        <td>
                                                                            <?= $rowGetCourseDetailByHeaderID['DETAIL_DESCRIPTION'] ?>
                                                                        </td>
                                                                    </tr>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                            <tr>
                                                                <td colspan="2" style="text-align:center !important;">
                                                                    <br/>
                                                                    <?php
                                                                    if (empty($_SESSION['username'])) {
                                                                        ?>
                                                                        <a href="#" class="tg-theme-btn" data-toggle="modal" data-target=".login-modalbox" onclick="clearTmp()">ลงทะเบียน</a>
                                                                        <?php
                                                                    } else {
                                                                        ?>
                                                                        <a href="#" class="tg-theme-btn" data-toggle="modal" data-target=".register-modalbox" onclick="clearTmp()">ลงทะเบียน</a>
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
                                <?php
                            } else {
                                ?>
                                <div class="row">
                                    <div class="tg-error-section">
                                        <div class="tg-message">
                                            <h2>404 Error</h2>
                                            <h3>Cannot found couse</h3>
                                            <div class="tg-img-border">
                                                <img src="assets/images/404NotFound.jpg" width="398px" height="269px" alt="image description">
                                            </div>
                                            <span>Go back to <a href="trainingSchedule">Training Schedule</a></span>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
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
                <h2>LOGIN FORM <span class="pull-right" style="cursor: pointer" onclick="$('.login-modalbox').modal('hide')">x</span></h2>
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
                                    <!--tr>
                                        <td style="text-align: left;" width="150px">Receipt Address: </td>
                                        <td style="text-align: left;"><?= $row['CUS_RECEIPT_ADDRESS'] ?></td>
                                    </tr-->
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
                            <button class="btn btn-sm" type="button"><i class="fa fa-pencil"></i> Edit Profile</button><br/><br/>
                        </fieldset>
                        <fieldset>
                            <legend>Register Detail</legend>
                            <div class="form-group">
                                <strong>ลงทะเบียน*</strong>
                                <br/>
                                <input type="radio" name="paymentCondition" value="1"> ลงทะเบียนให้ตัวเอง
                                <br>
                                <input type="radio" name="paymentCondition" value="2"> ลงทะเบียนมากกว่า 1 คน
                            </div>
                            <div class="form-group" id="regisMoreThan1User">                                                
                                <label for="moreUser_1">ชื่อ-สกุล (Name)</label> 
                                <input type="text" id="moreUser_1"/>
                                <label for="phone_number_1">เบอร์โทรศัพท์ (Phone number)</label> 
                                <input type="text" id="phone_number_1"/>
                                <label for="moreUserEmail_1">อีเมล์ (Email)</label> 
                                <input type="text" id="moreUserEmail_1"/><br/><br/>
                                <div id="addMoreRegister"></div>
                                <button class="btn btn-sm" type="button" onclick="addMoreRegister()">
                                    <i class="fa fa-pencil"></i> เพิ่มผู้สมัคร
                                </button>
                                <div id="loadMoreUser" style="margin-top: 10px;"></div>
                            </div>
                            <div class="form-group">
                                <strong>ช่องทางการจ่ายที่เลือก (Payment method) *</strong>
                                <br/>
                                <input type="radio" name="paymentTerm" value="1"> จ่ายเงินสดหน้างาน ในวันแรกของการอบรม
                                <br>
                                <input type="radio" name="paymentTerm" value="2"> โอนเงินเข้าบัญชี (ชื่อบัญชี "บจ. เอสอี ทอล์ค" ธนาคารกรุงเทพ เลขที่บัญชี 021-7-08688-3, กรุณาส่งสำเนาหลักฐานการโอนเงินมาที่ pinhatai.d@gmail.com)
                            </div>
                            <div class="form-group">                                                
                                <label for="isSameAddress">ที่อยู่ (เพื่อออกใบเสร็จรับเงิน) (Address in receipt)</label><br/><br/>  
                                <input type="checkbox" id="isSameAddress" value="true" name="isSameAddress" >  เช่นเดียวกับที่อยู่เพื่อการติดต่อ
                            </div>
                            <div class="form-group">
                                <label for="addressForReceipt">หากใช้ที่อยู่ที่แตกต่าง กรุณากรอกข้อมูล</label>
                                <textarea name="addressForReceipt" id="addressForReceipt" cols="20" style="height: 150px;"></textarea>
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
            $("#regisMoreThan1User").hide();
            $("#hideReasonBenifitOther").hide();

            $("#isSameAddress").click(function () {
                if ($("#isSameAddress").is(":checked")) {
                    $("#addressForReceipt").val("");
                    $("#addressForReceipt").attr("readonly", "true");
                } else {
                    $("#addressForReceipt").removeAttr("readonly");
                }
            });

            $('input[name=paymentCondition]').click(function () {
                if ($(this).val() == 1) {
                    $("#regisMoreThan1User").hide();
                    $("#moreUser_1").val("");
                    $("#moreUserEmail_1").val("");
                    $("#phone_number_1").val("");
                } else {
                    $("#regisMoreThan1User").show();
                    $("#loadMoreUser").load("moreUserTbl.php");
                }
            });

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

                    var isSameAddress = $("#isSameAddress").val();
                    var addressForReceipt = $("#addressForReceipt").val();

                    $.ajax({
                        url: "../model/com.gogetrich.function/CheckAndSaveEnrollment.php",
                        type: 'POST',
                        data: {'contactAddress': '<?= $row['CUS_CONTACT_ADDRESS'] ?>', 'addressForReceipt': addressForReceipt, 'isSameAddress': isSameAddress, 'custID': '<?php
                        if (isset($_SESSION['userId'])) {
                            echo $_SESSION['userId'];
                        } else {
                            echo '';
                        }
                        ?>', 'courseID': '<?= $rowHeader['HEADER_ID'] ?>', 'seminarDiscount': seminarDiscount, 'knowledgeFor': knowledgeFor, 'inviteSuggest': inviteSuggest, 'newsFrom': newsFrom, 'otherKnowledgeForReason': otherKnowledgeForReason, 'paymentTerm': paymentTerm},
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
        function deleteMoreUserTmp(tmpID) {
            $.ajax({
                url: "../model/com.gogetrich.function/deleteTmpAddMoreUser.php?tmpID=" + tmpID,
                type: 'POST',
                success: function (data, textStatus, jqXHR) {
                    if (data == 200) {
                        $("#loadMoreUser").load("moreUserTbl.php");
                    } else {
                        alert(data);
                    }
                }
            });
        }
        function addMoreRegister() {
            var name = $("#moreUser_1").val();
            var email = $("#moreUserEmail_1").val();
            var phone = $("#phone_number_1").val();
            if (name == "") {
                alert("Please enter name");
            } else if (email == "") {
                alert("Please enter email");
            } else if (phone == "") {
                alert("Please enter phone");
            } else {
                $.ajax({
                    url: "../model/com.gogetrich.function/SaveAdditionalUserToTmp.php?name=" + name + "&email=" + email + "&phone=" + phone,
                    type: 'POST',
                    success: function (data, textStatus, jqXHR) {
                        if (data == 200) {
                            $("#loadMoreUser").load("moreUserTbl.php");

                        } else {
                            alert(data);
                        }
                        $("#moreUser_1").val("");
                        $("#moreUserEmail_1").val("");
                        $("#phone_number_1").val("");
                    }
                });
            }
        }
        function clearTmp() {
            $.ajax({
                url: "../model/com.gogetrich.function/clearTmp.php",
                type: 'POST',
                success: function (data, textStatus, jqXHR) {
                    if (!data == 200) {
                        alert(data);
                    }
                }
            });
            $("#moreUser_1").val("");
            $("#moreUserEmail_1").val("");
            $("#phone_number_1").val("");
        }
    </script>
</html>
<?php
session_start();
$now = time();
if (isset($_SESSION['expireFrontEnd'])) {
    if ($now > $_SESSION['expireFrontEnd']) {
        session_destroy();
    }
}
require '../model-db-connection/config.php';
$iniConfiguration = parse_ini_file("../model-db-connection/configuration.ini", false, INI_SCANNER_RAW);
$cId = (string) filter_input(INPUT_GET, 'cId');
$fPage = (string) filter_input(INPUT_GET, 'fPage');
$sqlGetCourseHeaderID = "SELECT * FROM GTRICH_COURSE_HEADER WHERE HEADER_ID = '" . $cId . "'";
$res = mysql_query($sqlGetCourseHeaderID);
if (mysql_num_rows($res) <= 0) {
    header("Refresh:0; url=pageNotFound");
} else {
    $rowHeader = mysql_fetch_assoc($res);
}

$uId = (string) filter_input(INPUT_GET, 'uId');

$uFirstName = "";
$uLastName = "";
$uPhonNumber = "";
$uEmail = "";
$uAContact = "";
$uAReceipt = "";
if (!empty($uId)) {
    $getUserInfo = "SELECT * FROM RICH_CUSTOMER WHERE CUS_ID = '" . $uId . "'";
    $resUserInfo = mysql_query($getUserInfo);
    $rowGetUserInfo = mysql_fetch_assoc($resUserInfo);
    $uFirstName = $rowGetUserInfo['CUS_FIRST_NAME'];
    $uLastName = $rowGetUserInfo['CUS_LAST_NAME'];
    $uPhonNumber = $rowGetUserInfo['CUS_PHONE_NUMBER'];
    $uEmail = $rowGetUserInfo['CUS_EMAIL'];
    $uAContact = $rowGetUserInfo['CUS_CONTACT_ADDRESS'];
    $uAReceipt = $rowGetUserInfo['CUS_RECEIPT_ADDRESS'];
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
        <meta name="description" content="Go Get Rich">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include './assets/css_incl.php'; ?>
        <?php include './assets/javascript_incl.php'; ?>
        <script src="assets/js/CourseRegis.js"></script>
        <script src="assets/js/register_wizard.js"></script>

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
            <div class="tg-banner tg-haslayout parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="assets/images/register_banner.jpg">
                <div class="tg-banner-holder">
                    <div class="container">
                        <div class="tg-displaytable">
                            <div class="tg-displaytablecell">
                                <div class="banner-content tg-haslayout">
                                    <h1>Registration</h1>
                                    <!--                                    <ol class="tg-breadcrumb">
                                                                            <li><a href="main">Home</a></li>
                                                                            <li class="active">Registration</li>
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
                        <div id="loadLoginState"></div>
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
                                    <li class="current-menu-item">
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
                                <a href="<?= $fPage ?>" class="btn btn-default btn-sm" style="width:100px;">
                                    <i class="fa fa-backward"></i> Back
                                </a>
                                <br/><br/>
                            </div>
                        </div>
                        <div class="row">    
                            <div class="col-xs-12">
                                <div class="tg-theme-heading">
                                    <h2>Registration Course Form</h2>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                    <form id="courseRegistered" class="stepy-wizzard form-horizontal">
                                        <fieldset title="รายละเอียดหลักสูตร" style="background-color: #ffffff">
                                            <legend class="hide">Course detail</legend>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <strong style="font-size: 18px;">ชื่อคอร์ส: </strong><br/> 
                                                    <span style="font-size: 18px; cursor: pointer" data-toggle="modal" data-target=".courseDetailDialog">
                                                        <?= $rowHeader['HEADER_NAME'] ?>
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <strong style="font-size: 18px;">เลือกเวลาเรียน *</strong>

                                                    <?php
                                                    $sqlGetSchedule = "SELECT * FROM GTRICH_COURSE_EVENT_DATE_TIME "
                                                            . "WHERE REF_COURSE_HEADER_ID = '" . $rowHeader['HEADER_ID'] . "' "
                                                            . "ORDER BY EVENT_CREATED_DATE_TIME ASC";
                                                    $resGetSchedule = mysql_query($sqlGetSchedule);
                                                    if (mysql_num_rows($resGetSchedule) == 1) {
                                                        $rowGetSChedule = mysql_fetch_assoc($resGetSchedule);
                                                        $firstDateTime = explode(" ", $rowGetSChedule['START_EVENT_DATE_TIME']);
                                                        $startDate = $firstDateTime[0];
                                                        $startTime = $firstDateTime[1];

                                                        $secondDateTime = explode(" ", $rowGetSChedule['END_EVENT_DATE_TIME']);
                                                        $endDate = $secondDateTime[0];
                                                        $endTime = $secondDateTime[1];
                                                        ?>
                                                        <br/>
                                                        <input type="radio" name="courseScheduleSelect" checked value="<?= $rowGetSChedule['EVENT_ID'] ?>"/> <span>เริ่ม วันที่ <?= $startDate ?> เวลา <?= $startTime ?>น. ถึง วันที่ <?= $endDate ?> เวลา <?= $endTime ?>น.</span>
                                                        <?php
                                                    } else {
                                                        while ($rowGetSChedule = mysql_fetch_array($resGetSchedule)) {
                                                            $firstDateTime = explode(" ", $rowGetSChedule['START_EVENT_DATE_TIME']);
                                                            $startDate = $firstDateTime[0];
                                                            $startTime = $firstDateTime[1];

                                                            $secondDateTime = explode(" ", $rowGetSChedule['END_EVENT_DATE_TIME']);
                                                            $endDate = $secondDateTime[0];
                                                            $endTime = $secondDateTime[1];
                                                            ?>
                                                            <br/>
                                                            <input type="radio" name="courseScheduleSelect" value="<?= $rowGetSChedule['EVENT_ID'] ?>"/> <span>เริ่ม วันที่ <?= $startDate ?> เวลา <?= $startTime ?>น. ถึง วันที่ <?= $endDate ?> เวลา <?= $endTime ?>น.</span>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <strong style="font-size: 18px;">ช่องทางการจ่ายที่เลือก (Payment method) *</strong>
                                                    <br/>                                                            
                                                    <input type="radio" name="paymentTerm" value="2" checked/> 
                                                    โอนเงินเข้าบัญชี (ชื่อบัญชี "บจ. เอสอี ทอล์ค" ธนาคารกรุงเทพ เลขที่บัญชี 021-7-08688-3, กรุณาส่งสำเนาหลักฐานการโอนเงินมาที่ info@gogetrich.net)
                                                </div>
                                                <div class="form-group">
                                                    <strong style="font-size: 18px;">คลิกแสดงสิทธิ์เพื่อรับส่วนลด</strong>
                                                    <?php
                                                    $sqlGetPromotion = "SELECT * FROM GTRICH_COURSE_PROMOTION WHERE REF_COURSE_HEADER_ID = '" . $cId . "'";
                                                    $resGetPromotion = mysql_query($sqlGetPromotion);
                                                    while ($rowGetPromotion = mysql_fetch_array($resGetPromotion)) {
                                                        ?>
                                                        <br/>
                                                        <input type="checkbox" name="seminarDiscount" value="<?= $rowGetPromotion['PRO_NAME'] ?>"> <?= $rowGetPromotion['PRO_NAME'] ?>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>     
                                                <div class="divider-form form-group"></div>
                                            </div>
                                        </fieldset>
                                        <fieldset title="ประเภทการลงทะเบียน" style="background-color: #ffffff">
                                            <legend class="hide">Registration type</legend>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                                <div class="form-group">
                                                    <h3>ลงทะเบียนแบบสมาชิก</h3>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Username</label>
                                                    <input type="text" class="form-control" id="loginName" name="loginName" placeholder="Username">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <input type="password" class="form-control" id="loginPassword" name="loginPassword" placeholder="Password">
                                                </div>
                                                <div class="form-group">

                                                    <a href="javascript:void(0)" id="loginAsMember" class="btn btn-default btn-md">
                                                        เข้าสู่ระบบ
                                                    </a>
                                                    <span class="btn btn-default btn-md">
                                                        <a href="forgetPassword">ลืมรหัสผ่าน</a>
                                                    </span>
                                                </div>

                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="divider-form form-group"></div>
                                            </div>
                                        </fieldset>
                                        <fieldset title="แบบฟอร์มการลงทะเบียน" style="background-color: #ffffff">
                                            <legend class="hide">Registration Form</legend>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                                
                                                <div class="form-group">
                                                    <div id="loadMoreUser" style="margin-top: 10px;"></div>
                                                </div>
                                                <div class="form-group">                                                    
                                                    <label class="pull-right" id="addMoreRegisLab" onclick="toggleRegistrationForm()" style="cursor: pointer; margin-right: 20px;">
                                                        <span class="fa fa-user-plus"></span> เพิ่มผู้สมัคร
                                                    </label>
                                                </div>

                                                <div class="form-group" id="regisMoreThan1User">                                                                      

                                                    <div class="col-lg-7 inner-addon left-addon">
                                                        <label style="cursor: pointer;" onclick="showLoginAsMemberDialog('<?= $cId ?>')">
                                                            <span class="fa fa-user-plus"></span> เพิ่มผู้สมัครแบบสมาชิก                                                        
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-12" style="margin-top: 10px;">
                                                        <label for="moreUser_1">ชื่อ (First Name)*</label> 
                                                        <input type="text" id="moreFirstName_1" style="padding: 4px 6px 4px 20px !important;" value="<?= $uFirstName ?>"/>
                                                        <label for="moreUser_1">สกุล (Last Name)*</label> 
                                                        <input type="text" id="moreLastName_1" style="padding: 4px 6px 4px 20px !important;" value="<?= $uLastName ?>"/>
                                                        <label for="phone_number_1" >เบอร์โทรศัพท์ (Phone number)*</label> 
                                                        <input type="text" id="phone_number_1" style="padding: 4px 6px 4px 20px !important;" value="<?= $uPhonNumber ?>"/>
                                                        <label for="moreUserEmail_1" >อีเมล์ (Email)* กรุณาสมัครสมาชิกด้วย Email ที่ไม่ใช่ hotmail</label> 
                                                        <input type="text" id="moreUserEmail_1" style="padding: 4px 6px 4px 20px !important;" value="<?= $uEmail ?>"/><br/><br/>
                                                        <!--<div id="addMoreRegister"></div>-->

                                                        <label>ที่อยู่ (เพื่อออกใบเสร็จรับเงิน)</label>&nbsp; 
                                                        <input type="checkbox" id="isSameAddress" name="isSameAddress" >  เช่นเดียวกับที่อยู่ของสมาชิก

                                                        <div id="divForAddressContact">
                                                            <textarea id="addressForContact" cols="20" style="height: 150px; padding: 4px 6px 4px 20px !important;">
                                                                <?= $uAContact ?>
                                                            </textarea>
                                                        </div>
                                                        <div >
                                                            <label for="addressForReceipt">หากใช้ที่อยู่ที่แตกต่าง กรุณากรอกข้อมูล</label>
                                                            <textarea id="addressForReceipt" cols="20" style="height: 150px; padding: 4px 6px 4px 20px !important;">
                                                                <?= $uAReceipt ?>
                                                            </textarea>
                                                        </div>
                                                        <br/>
                                                        <a href="#" class="btn btn-default" onclick="addMoreRegister('<?= $rowHeader['HEADER_ID'] ?>', '<?= $cId ?>')">
                                                            <span class="fa fa-plus"></span> สมัคร
                                                        </a>
                                                        <a href="#" class="btn btn-default" onclick="resetForm()">
                                                            <span class="fa fa-eraser"></span> รีเซ็ตฟอร์ม
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="divider-form form-group"></div>
                                            </div>
                                        </fieldset>     
                                        <fieldset title="ยืนยันการลงทะเบียน" style="background-color: #ffffff">
                                            <legend class="hide">Confirm Registration</legend>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group" style="padding: 10px;">
                                                    <strong style="font-size: 18px;">ยืนยันการลงทะเบียน *</strong>
                                                    <br/>
                                                    <input type="checkbox" name="confirmRegister" id="confirmRegister">  <?= $iniConfiguration['confirmation.text'] ?>
                                                </div>
                                                <a id="registerCourseBtn" href="javascript:void(0)" class="btn btn-default btn-lg">
                                                    <i class="fa fa-hand-peace-o" aria-hidden="true"></i> ยืนยันการลงทะเบียน
                                                </a>
                                                <div class="divider-form form-group"></div>
                                            </div> 

                                        </fieldset>
                                    </form>
                                </div>      
                            </div>
                        </div>
                    </div>
                </section>

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
                <h2>LOGIN FORM <span class="pull-right" style="cursor: pointer" onclick="$('.login-modalbox').modal('hide')">x</span></h2></h2>
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

        <div class="modal fade courseDetailDialog" tabindex="-1" role="dialog">
            <div class="tg-signup-modalbox">
                <h2>
                    COURSE DETAIl <span class="pull-right" style="cursor: pointer" onclick="$('.courseDetailDialog').modal('hide')">x</span>
                </h2>
                <div class="span12" style="overflow-x:hidden; max-height: 450px; padding: 20px;">
                    <fieldset>                        

                        <?php
                        $sqlGetCourseDetailByHeaderID = "SELECT * FROM GTRICH_COURSE_DETAIL GCD"
                                . " LEFT JOIN GTRICH_DESCRIPTION_HEADER GDH ON GCD.DESC_HEADER_ID = GDH.DESC_HEADER_ID "
                                . " WHERE 1=1"
                                . " AND GCD.REF_COURSE_HEADER_ID = '" . $rowHeader['HEADER_ID'] . "'"
                                . " ORDER BY DETAIL_ORDER ASC";
                        $resGetCourseDetailByHeaderID = mysql_query($sqlGetCourseDetailByHeaderID);
                        while ($rowGetCourseDetailByHeaderID = mysql_fetch_array($resGetCourseDetailByHeaderID)) {
                            if (!empty($rowGetCourseDetailByHeaderID['DETAIL_LAT'])) {
                                $showInMap = trim(preg_replace('/\s+/', ' ', $rowGetCourseDetailByHeaderID['DETAIL_DESCRIPTION']));
                                ?>
                                <legend>
                                    <?= $rowGetCourseDetailByHeaderID['DESC_HEADER_NAME'] ?>
                                </legend>
                                <div class="form-group">
                                    <?= $rowGetCourseDetailByHeaderID['DETAIL_DESCRIPTION'] ?>
                                </div>
                                <?php
                            } else if ($rowGetCourseDetailByHeaderID['REF_GALLERY_ID'] != "true") {
                                ?>
                                <legend>
                                    <?= $rowGetCourseDetailByHeaderID['DESC_HEADER_NAME'] ?>
                                </legend>
                                <div class="form-group">
                                    <?= $rowGetCourseDetailByHeaderID['DETAIL_DESCRIPTION'] ?>
                                </div>

                                <?php
                            }
                        }
                        ?>
                    </fieldset>
                </div>

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
        .divider-form {
            border: 1px solid #EBEFF1;
            margin: 15px -40px 10px;
        }
        .linkHover:hover{
            color:#ffcc33;
            cursor: pointer;
        }
        .blockTextArea{
            background-color: #ddd;
        }
    </style>
    <script>
        var state = 1;
        $(document).ready(function () {
            $("#loadLoginState").load("loginState.php");
            if ("<?= $uId ?>" != "") {
                $("#regisMoreThan1User").show();
            }

            //* wizard with validation
            wizard.validation('<?= $cId ?>');
            //* add step numbers to titles
            wizard.steps_nb();

            //Load table if found user regis (In case of refresh page)
            $.ajax({
                url: "../model/com.gogetrich.function/checkIsRegister.php",
                type: 'POST',
                beforeSend: function (xhr) {
                    $(".preloader").show();
                },
                success: function (data, textStatus, jqXHR) {
                    $(".preloader").fadeOut("slow");
                    if (data > 0) {
                        $.ajax({
                            url: "moreUserTbl.php?courseId=<?= $cId ?>",
                            type: 'POST',
                            success: function (data, textStatus, jqXHR) {
                                $("#loadMoreUser").html(data);
                            }
                        });
                        $("#regisMoreThan1User").toggle();
                        $("#addMoreRegisLab").toggle();
                    }
                }
            });

            $("#hideRegisterForm").click(function () {
                if (state == 1) {
                    $("#hideRegisterForm").html('<span class="fa fa-minus-square"></span> ฟอร์มการลงทะเบียน');
                    state = 2;
                } else {
                    $("#hideRegisterForm").html('<span class="fa fa-plus-square"></span> ฟอร์มการลงทะเบียน');
                    state = 1;
                }
                $("#regisMoreThan1User").toggle();
                $("#addMoreRegisLab").toggle();
                resetForm();
            });
            initialPageRegisCourse('<?= $cId ?>', '<?= $fPage ?>');
            $("#isSameAddress").click(function () {
                if ($(this).is(":checked")) {
                    $("#addressForReceipt").prop("disabled", true);
                    $("#addressForReceipt").val("");
                    $("#addressForReceipt").addClass("blockTextArea");
                } else {
                    $("#addressForReceipt").prop("disabled", false);
                    $("#addressForReceipt").removeClass("blockTextArea");
                }
            });
            $("#registerCourseBtn").click(function () {
                var seminarDiscount = "";
                $('input[name="seminarDiscount"]:checked').each(function () {
                    seminarDiscount += this.value + "||";
                });
                var paymentTerm = $('input:radio[name=paymentTerm]').filter(":checked").val();
                var timeSchedule = $('input:radio[name=courseScheduleSelect]').filter(":checked").val();
                $.ajax({
                    url: "../model/com.gogetrich.function/checkIsRegisterIncaseRegisterCourse.php",
                    type: 'POST',
                    success: function (data, textStatus, jqXHR) {
                        if (data == 505) {
                            showSuccessNotficationDialog("เกิดข้อผิดพลาดระหว่างการทำงาน<br/>กรุณากดลงทะเบียนใหม่อีกครั้งค่ะ", "scheduleDetail?cname=<?= $cId ?>");
                        } else {
                            if (typeof (timeSchedule) === "undefined" && data <= 0 && typeof (paymentTerm) === "undefined" && !$("#confirmRegister").is(":checked")) {
                                showWarningNotficationDialog("<ul><li>กรุณาเลือกเวลาเรียน</li><li>กรุณากรอกข้อมูลการลงทะเบียน</li><li>กรุณาเลือกช่องทางการจ่ายเงิน</li><li>กรุณายืนยันการลงทะเบียน</li></ul>");
                                $('html,body').animate({
                                    scrollTop: $("#registerSeminar").offset().top
                                });
                            } else if (typeof (timeSchedule) === "undefined") {
                                showWarningNotficationDialog("กรุณาเลือกเวลาเรียน");
                                $('html,body').animate({
                                    scrollTop: $("#registerSeminar").offset().top
                                });
                            } else if (data <= 0) {
                                blinkDiv($("#loadMoreUser"));
                                showWarningNotficationDialog("กรุณากรอกข้อมูลการลงทะเบียน");
                                $('html,body').animate({
                                    scrollTop: $("#registerSeminar").offset().top
                                });
                            } else if (typeof (paymentTerm) === "undefined") {
                                showWarningNotficationDialog("กรุณาเลือกช่องทางการจ่ายเงิน");
                                $('html,body').animate({
                                    scrollTop: $("#regisMoreThan1User").offset().top
                                });
                            } else if (!$("#confirmRegister").is(":checked")) {
                                showWarningNotficationDialog("กรุณายืนยันการลงทะเบียน");
                            } else {
                                $.ajax({
                                    url: "../model/com.gogetrich.function/CheckAndSaveEnrollment.php",
                                    type: 'POST',
                                    data: {'courseID': '<?= $cId ?>', 'paymentTerm': paymentTerm, 'seminarDiscount': seminarDiscount, 'timeSchedule': timeSchedule},
                                    beforeSend: function (xhr) {
                                        $(".preloader").show();
                                    },
                                    success: function (data, textStatus, jqXHR) {
                                        $(".preloader").fadeOut("slow");
                                        if (data == 200) {
                                            $.ajax({
                                                url: "../model/com.gogetrich.function/getEventDt.php?id=" + timeSchedule,
                                                type: 'POST',
                                                success: function (eventDt, textStatus, jqXHR) {
                                                    showSuccessNotficationDialog("<strong>ท่านลงทะเบียนสำเร็จแล้ว</strong><br/><strong>หลักสูตร:</strong> <?= $rowHeader['HEADER_NAME'] ?><br/><strong>ในวันที่:</strong> " + eventDt + "<br/>ท่านจะได้รับข้อมูลรายละเอียดของหลักสูตรที่ท่านได้ลงทะเบียนไว้ทางอีเมล<br/>ขอบคุณค่ะ", "<?= $fPage ?>");
                                                }
                                            });
                                        } else if (data == 505) {
                                            showSuccessNotficationDialog("เกิดข้อผิดพลาดระหว่างการทำงาน<br/>กรุณากดลงทะเบียนใหม่อีกครั้งค่ะ", "scheduleDetail?cname=<?= $cId ?>");
                                        } else {
                                            showWarningNotficationDialog(data);
                                        }
                                    }
                                });
                            }
                        }
                    }
                });
            });
            $("#regisAsMember").click(function () {
                $.ajax({
                    url: "../model/com.gogetrich.function/VerifyIsLogin.php",
                    type: 'POST',
                    beforeSend: function (xhr) {
                        $(".preloader").show();
                    },
                    success: function (data, textStatus, jqXHR) {
                        $(".preloader").fadeOut("slow");
                        var resData = data.split(":");
                        if (resData[0] == 200) {
                            var fName = resData[1].split("||")[0];
                            var lName = resData[1].split("||")[1];
                            var phone = resData[1].split("||")[2];
                            var email = resData[1].split("||")[3];
                            var contactAddr = resData[1].split("||")[4];
                            var receiptAddr = resData[1].split("||")[5];
                            $("#moreFirstName_1").val(fName);
                            $("#moreLastName_1").val(lName);
                            $("#phone_number_1").val(phone);
                            $("#addressForContact").val(contactAddr);
                            $("#moreUserEmail_1").val(email);
                            $("#addressForReceipt").val(receiptAddr);
                        } else {
                            $("#login-modal").modal('toggle');
                        }
                        $("#regisMoreThan1User").show();
                        $("#addMoreRegisLab").hide();
                    }
                });
            });
            $("#loginAsMember").click(function () {
                var loginPassword = $("#loginPassword").val();
                var loginName = $("#loginName").val();
                if (loginName == "" && loginPassword == "") {
                    showWarningNotficationDialog("กรุณาระบุ ชื่อผู้ใช้ และ รหัสผ่าน");
                } else if (loginName == "") {
                    showWarningNotficationDialog("กรุณาระบุ ชื่อผู้ใช้");
                } else if (loginPassword == "") {
                    showWarningNotficationDialog("กรุณาระบุ รหัสผ่าน");
                } else {
                    $.ajax({
                        url: "../model/com.gogetrich.function/LoginSubmit.php",
                        data: {'username': loginName, 'password': loginPassword},
                        type: 'POST',
                        success: function (data, textStatus, jqXHR) {
                            var resData = data.split(":");
                            if (resData[0] == 503) {
                                setTimeout(function () {
                                    showWarningNotficationDialog("ชื่อผู้ใช้ หรือ รหัสผ่านไม่ถูกต้อง");
                                }, 100);
                                $("#loginForGetRes").trigger('reset');
                            }
                            if (resData[0] == 205) {
                                setTimeout(function () {
                                    showSuccessNotficationDialog("กรุณาเปลี่ยนรหัสผ่าน", "forceChangePassword.php?cusID=" + resData[1]);
                                }, 100);
                                $("#loginForGetRes").trigger('reset');
                            }
                            if (resData[0] == 200) {
                                //Check if register this course
                                $.ajax({
                                    url: "../model/com.gogetrich.function/CheckUserEnroll.php?userId=" + resData[1].split("||")[6] + "&cid=<?= $cId ?>",
                                    type: 'POST',
                                    success: function (data, textStatus, jqXHR) {
                                        if (data > 0) {
                                            $.ajax({
                                                url: "moreUserTbl.php?courseId=<?= $cId ?>",
                                                type: 'POST',
                                                success: function (data, textStatus, jqXHR) {

                                                    $('#courseRegistered').stepy('step', 3);
                                                    $("#loadMoreUser").html(data);
                                                }
                                            });
                                            $("#regisMoreThan1User").toggle();
                                            $("#addMoreRegisLab").toggle();
                                            $("#login-modal").modal('toggle');

                                            $("#loadLoginState").load("loginState.php");
                                        } else {

                                            $("#loadLoginState").load("loginState.php");
                                            $("#regisMoreThan1User").show();
                                            $("#addMoreRegisLab").hide();
                                            $('#courseRegistered').stepy('step', 3);

                                            var fName = resData[1].split("||")[0];
                                            var lName = resData[1].split("||")[1];
                                            var phone = resData[1].split("||")[2];
                                            var email = resData[1].split("||")[3];
                                            var contactAddr = resData[1].split("||")[4];
                                            var receiptAddr = resData[1].split("||")[5];
                                            $("#moreFirstName_1").val(fName);
                                            $("#moreLastName_1").val(lName);
                                            $("#phone_number_1").val(phone);
                                            $("#addressForContact").val(contactAddr);
                                            $("#moreUserEmail_1").val(email);
                                            $("#addressForReceipt").val(receiptAddr);
                                            $("#login-modal").modal('toggle');
                                            $("#loginForGetRes").trigger('reset');
                                        }
                                    }
                                });
                            }
                        }
                    });
                }
            });
        });
        function submitLogin(form, cid, fPage) {
            $.ajax({
                url: "../model/com.gogetrich.function/LoginSubmit.php",
                type: 'POST',
                data: {'username': $("#usernameLogin").val(), 'password': $("#passwordLogin").val()},
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
                        //Check if register this course
                        $.ajax({
                            url: "../model/com.gogetrich.function/CheckUserEnroll.php?userId=" + resData[1].split("||")[6] + "&cid=" + cid,
                            type: 'POST',
                            success: function (data, textStatus, jqXHR) {
                                if (data > 0) {
                                    $.ajax({
                                        url: "moreUserTbl.php?courseId=" + cid,
                                        type: 'POST',
                                        success: function (data, textStatus, jqXHR) {
                                            window.location = 'registrationCourse?cId=' + cid + '&fPage=<?= $fPage ?>';
                                        }
                                    });
                                    $("#regisMoreThan1User").toggle();
                                    $("#addMoreRegisLab").toggle();
                                    $("#login-modal").modal('toggle');
                                } else {
                                    window.location = 'registrationCourse?cId=' + cid + '&fPage=<?= $fPage ?>&uId=' + resData[1].split("||")[6];
                                    var fName = resData[1].split("||")[0];
                                    var lName = resData[1].split("||")[1];
                                    var phone = resData[1].split("||")[2];
                                    var email = resData[1].split("||")[3];
                                    var contactAddr = resData[1].split("||")[4];
                                    var receiptAddr = resData[1].split("||")[5];
                                    $("#moreFirstName_1").val(fName);
                                    $("#moreLastName_1").val(lName);
                                    $("#phone_number_1").val(phone);
                                    $("#addressForContact").val(contactAddr);
                                    $("#moreUserEmail_1").val(email);
                                    $("#addressForReceipt").val(receiptAddr);
                                    $("#login-modal").modal('toggle');
                                    $("#loginForGetRes").trigger('reset');
                                }
                            }
                        });
                    }
                }
            });
        }
    </script>
    <div id="loginAsModal" style="display: none;">

        <fieldset>
            <form id="loginForGetRes">
                <div class="row" style="margin-top: 20px;">
                    <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-lock"></i>
                                </span> 
                                <input type="text" style="padding: 4px 6px 4px 20px !important;" name="userOrPassCredential" id="userOrPassCredential" placeholder="ชื่อผู้ใช้ (Username) หรือ อีเมลล์ (Email)" class="form-control">                                
                            </div>
                        </div>
                        <span id="notification_txt_forinvalid" style="color: #ff484b">This is test</span>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>

</html>
<?php
session_start();
$now = time();
if (isset($_SESSION['expireFrontEnd'])) {
    if ($now > $_SESSION['expireFrontEnd']) {
        session_destroy();
    }
}
require '../model-db-connection/config.php';
$cId = (string) filter_input(INPUT_GET, 'cId');
$fPage = (string) filter_input(INPUT_GET, 'fPage');
$sqlGetCourseHeaderID = "SELECT * FROM GTRICH_COURSE_HEADER WHERE HEADER_ID = '" . $cId . "'";
$res = mysql_query($sqlGetCourseHeaderID);
if (mysql_num_rows($res) <= 0) {
    header("Refresh:0; url=pageNotFound");
} else {
    $rowHeader = mysql_fetch_assoc($res);
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
            <div class="tg-banner tg-haslayout parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="assets/images/register_banner.jpg">
                <div class="tg-banner-holder">
                    <div class="container">
                        <div class="tg-displaytable">
                            <div class="tg-displaytablecell">
                                <div class="banner-content tg-haslayout">
                                    <h1>Registration</h1>
                                    <ol class="tg-breadcrumb">
                                        <li><a href="main">Home</a></li>
                                        <li class="active">Registration</li>
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
                                    <li class="current-menu-item">
                                        <a href="#">Training/Seminar</a>
                                        <ul>
                                            <li >
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
                                About Section Start
                *************************************-->
                <section class="tg-main-section tg-haslayout">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 pull-left">
                                <a href="<?= $fPage ?>" class="btn btn-default" style="width:100px;">
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
                                <div class="col-md-10 col-sm-10 col-xs-10 width-480">
                                    <form style="padding:20px" id="registerSeminar">
                                        <div>
                                            <div class="form-group">
                                                <strong style="font-size: 18px;">ชื่อคอร์ส: </strong><br/> 
                                                <span style="font-size: 16px;"><?= $rowHeader['HEADER_NAME'] ?></span>
                                            </div>
                                            <div class="form-group">
                                                <strong style="font-size: 18px;">เลือกเวลาเรียน *</strong>

                                                <?php
                                                $sqlGetSchedule = "SELECT * FROM GTRICH_COURSE_EVENT_DATE_TIME "
                                                        . "WHERE REF_COURSE_HEADER_ID = '" . $rowHeader['HEADER_ID'] . "' "
                                                        . "ORDER BY EVENT_CREATED_DATE_TIME ASC";
                                                $resGetSchedule = mysql_query($sqlGetSchedule);

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
                                                ?>
                                            </div>
                                            <div class="form-group">
                                                <strong style="font-size: 18px;">ลงทะเบียน*&nbsp;&nbsp;</strong>
                                                <br/>
                                                <label for="signInAsMemeber" class="btn btn-default" style="margin-top: 10px;" id="regisAsMember">
                                                    <span class="fa fa-user"></span> ลงทะเบียนแบบสมาชิก
                                                </label>
                                                <br/><br/>
                                            </div>
                                            <div class="form-group">
                                                <div id="loadMoreUser" style="margin-top: 10px;"></div>
                                            </div>
                                            <div class="form-group">
                                                <span id="hideRegisterForm" style="cursor: pointer;margin-bottom: 10px;">
                                                    <span class="fa fa-upload"></span> ซ่อนฟอร์มการลงทะเบียน
                                                </span>
                                            </div>
                                            <div class="form-group" id="regisMoreThan1User" style="border:1px solid #BDBDBD; padding: 15px;">                  
                                                <label for="moreUser_1">ชื่อ (First Name)*</label> 
                                                <input type="text" id="moreFirstName_1" style="padding: 4px 6px 4px 20px !important;"/>
                                                <label for="moreUser_1">สกุล (Last Name)*</label> 
                                                <input type="text" id="moreLastName_1" style="padding: 4px 6px 4px 20px !important;"/>
                                                <label for="phone_number_1" >เบอร์โทรศัพท์ (Phone number)*</label> 
                                                <input type="text" id="phone_number_1" style="padding: 4px 6px 4px 20px !important;"/>
                                                <label for="moreUserEmail_1" >อีเมล์ (Email)*</label> 
                                                <input type="text" id="moreUserEmail_1" style="padding: 4px 6px 4px 20px !important;"/><br/><br/>
                                                <!--<div id="addMoreRegister"></div>-->
                                                <div class="form-group">                                                
                                                    <label>ที่อยู่ (เพื่อออกใบเสร็จรับเงิน)</label>&nbsp; 
                                                    <input type="checkbox" id="isSameAddress" name="isSameAddress" >  เช่นเดียวกับที่อยู่ของสมาชิก
                                                </div>
                                                <div class="form-group" id="divForAddressContact">
                                                    <textarea name="addressForContact" id="addressForContact" cols="20" style="height: 150px; padding: 4px 6px 4px 20px !important;"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="addressForReceipt">หากใช้ที่อยู่ที่แตกต่าง กรุณากรอกข้อมูล</label>
                                                    <textarea name="addressForReceipt" id="addressForReceipt" cols="20" style="height: 150px; padding: 4px 6px 4px 20px !important;"></textarea>
                                                </div>
                                                <a href="#" class="btn btn-default" onclick="addMoreRegister()">
                                                    <span class="fa fa-plus"></span> เพิ่มผู้สมัคร
                                                </a>

                                            </div>

                                            <div class="form-group">
                                                <strong style="font-size: 18px;">ช่องทางการจ่ายที่เลือก (Payment method) *</strong>
                                                <br/>
                                                <!--input type="radio" name="paymentTerm" value="1"> จ่ายเงินสดหน้างาน ในวันแรกของการอบรม-->            
                                                <input type="radio" name="paymentTerm" value="2"> โอนเงินเข้าบัญชี (ชื่อบัญชี "บจ. เอสอี ทอล์ค" ธนาคารกรุงเทพ เลขที่บัญชี 021-7-08688-3, กรุณาส่งสำเนาหลักฐานการโอนเงินมาที่ pinhatai.d@gmail.com)
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
                                            <div class="form-group">
                                                <strong style="font-size: 18px;">ยืนยันการลงทะเบียน *</strong>
                                                <br/>
                                                <input type="checkbox" name="confirmRegister" id="confirmRegister">  ข้าพเจ้าขอยืนยันการลงทะเบียน และรับทราบว่า หากจะยกเลิกการลงทะเบียน ต้องแจ้งทางผู้จัดหลักสูตร อย่างน้อย 7 วันก่อนวันอบรมจึงจะได้รับเงินค่าเรียนคืนเต็มจำนวน  ข้าพเจ้ายินยอมที่จะเสียอัตราค่าเรียนเต็มจำนวนหากไม่ได้เข้าเรียนและไม่ได้แจ้งยกเลิกล่วงหน้าก่อนวันเรียน อย่างน้อย 7 วัน
                                            </div>
                                        </div>
                                        <button class="tg-theme-btn tg-theme-btn-lg" type="button" id="registerCourseBtn">
                                            <span class="fa fa-edit"></span> ลงทะเบียนสัมมนา
                                        </button>
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
    </body>
    <style type="text/css">
        .linkHover:hover{
            color:#ffcc33;
            cursor: pointer;
        }
        .blockTextArea{
            background-color: #ddd;
        }
    </style>
    <script type="text/javascript">
        var state = 1;
        $(document).ready(function () {
            $("#hideRegisterForm").click(function () {
                if (state == 1) {
                    $("#hideRegisterForm").html('<span class="fa fa-download"></span> แสดงฟอร์มการลงทะเบียน');
                    state = 2;
                } else {
                    $("#hideRegisterForm").html('<span class="fa fa-upload"></span> ซ่อนฟอร์มการลงทะเบียน');
                    state = 1;
                }
                $("#regisMoreThan1User").toggle();
            });
            initialPage();
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
                    url: "../model/com.gogetrich.function/checkIsRegister.php",
                    type: 'POST',
                    success: function (data, textStatus, jqXHR) {
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
                                data: {'courseID': '<?= $cId ?>', 'paymentTerm': paymentTerm, 'seminarDiscount': seminarDiscount},
                                success: function (data, textStatus, jqXHR) {
                                    if (data == 200) {
                                        $.ajax({
                                            url: "../model/com.gogetrich.function/getEventDt.php?id=" + timeSchedule,
                                            type: 'POST',
                                            success: function (eventDt, textStatus, jqXHR) {
                                                showSuccessNotficationDialog("<strong>ท่านลงทะเบียนสำเร็จแล้ว</strong><br/><strong>หลักสูตร:</strong> <?= $rowHeader['HEADER_NAME'] ?><br/><strong>ในวันที่:</strong> " + eventDt + "<br/> ขอบคุณค่ะ", "scheduleDetail?cname=<?= $cId ?>");
                                            }
                                        });
                                    } else {
                                        showWarningNotficationDialog(data);
                                    }
                                }
                            });
                        }
                    }
                });
            });
            $("#regisAsMember").click(function () {
                $("#login-modal").modal('toggle');
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
                    var formEle = $("#loginForGetRes").serialize();
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
            });
        });
        function addMoreRegister() {
            var firtName = $("#moreFirstName_1").val();
            var lastName = $("#moreLastName_1").val();
            var email = $("#moreUserEmail_1").val();
            var phone = $("#phone_number_1").val();
            var addressForReceipt = $("#addressForReceipt").val();
            var addressForContact = $("#addressForContact").val();
            var isSameAddress = "";
            if ($("#isSameAddress").is(":checked")) {
                isSameAddress = "true";
            } else {
                isSameAddress = "false";
            }
            if (firtName == "" && lastName == "" && phone == "" && !validatePhone(phone) && email == "" && !validateEmail(email)) {
                showWarningNotficationDialog("<li>กรุณาระบุ ชื่อ สกุล ของผู้สมัครท่านอื่น</li><li>กรุณาระบุ เบอร์โทรศัพท์ ให้ถูกต้อง (กรุณาระบุเป็นตัวเลขเท่านั้น)</li><li>กรุณาระบุ อีเมล ให้ถูกต้อง</li>");
                $('html,body').animate({
                    scrollTop: $("#loadMoreUser").offset().top
                });
            } else if (firtName == "") {
                showWarningNotficationDialog("กรุณาระบุ ชื่อ");
                $('html,body').animate({
                    scrollTop: $("#loadMoreUser").offset().top
                });
            } else if (lastName == "") {
                showWarningNotficationDialog("กรุณาระบุ สกุล");
                $('html,body').animate({
                    scrollTop: $("#moreFirstName_1").offset().top
                });
            } else if (phone == "" || !validatePhone(phone)) {
                showWarningNotficationDialog("กรุณาระบุ เบอร์โทรศัพท์ ให้ถูกต้อง (กรุณาระบุเป็นตัวเลขเท่านั้น)");
                $('html,body').animate({
                    scrollTop: $("#moreLastName_1").offset().top
                });
            } else if (email == "" || !validateEmail(email)) {
                showWarningNotficationDialog("กรุณาระบุ อีเมล ให้ถูกต้อง");
                $('html,body').animate({
                    scrollTop: $("#phone_number_1").offset().top
                });
            } else {
                $.ajax({
                    url: "../model/com.gogetrich.function/verifyUserExistingIntmpTbleByEmail.php?email=" + email,
                    type: 'POST',
                    beforeSend: function (xhr) {
                        $(".preloader").show();
                    },
                    success: function (isDuplicate, textStatus, jqXHR) {
                        $(".preloader").fadeOut("slow");
                        if (isDuplicate == 409) {
                            showWarningNotficationDialog("อีเมลนี้ได้ถูกใช้ในการลงทะเบียนเรียบร้อยแล้ว");
                        } else {
                            $.ajax({
                                url: "../model/com.gogetrich.function/verifyEmailEnrollment.php?email=" + email + "&courseID=<?= $rowHeader['HEADER_ID'] ?>",
                                type: 'POST',
                                success: function (dataCheckRegistered, textStatus, jqXHR) {
                                    if (dataCheckRegistered == 200) {
                                        $.ajax({
                                            url: "../model/com.gogetrich.function/SaveAdditionalUserToTmp.php?isSameAddress=" + isSameAddress + "&fName=" + firtName + "&lName=" + lastName + "&email=" + email + "&phone=" + phone + "&isOwner=false&addressForReceipt=" + addressForReceipt + "&addressForContact=" + addressForContact,
                                            type: 'POST',
                                            success: function (data, textStatus, jqXHR) {
                                                if (data == 200) {
                                                    $("#loadMoreUser").load("moreUserTbl.php", function () {
                                                        $('html,body').animate({
                                                            scrollTop: $("#loadMoreUser").offset().top
                                                        });
                                                    });
                                                    $("#moreFirstName_1").val("");
                                                    $("#moreLastName_1").val("");
                                                    $("#moreUserEmail_1").val("");
                                                    $("#phone_number_1").val("");
                                                    $("#addressForReceipt").val("");
                                                    $("#addressForContact").val("");
                                                    $("#isSameAddress").prop("checked", false);
                                                    $("#addressForReceipt").removeClass("blockTextArea");
                                                } else {
                                                    showWarningNotficationDialog(data);
                                                }

                                            }
                                        });
                                        $("body, html, #scheduleFormDiv").animate({scrollTop: 0}, "fast");
                                    } else {
                                        showWarningNotficationDialog(dataCheckRegistered);
                                    }
                                }
                            });
                        }
                    }
                });
            }
        }
        function validateEmail($email) {
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            return emailReg.test($email);
        }
        function validatePhone($phone) {
            var phoneReg = /[0-9 -()+]+$/;
            return phoneReg.test($phone);
        }
        function initialPage() {
            //Manage login 
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
            //Loading registration table into Div
            $.ajax({
                url: "moreUserTbl.php",
                type: 'POST',
                success: function (data, textStatus, jqXHR) {
                    $("#loadMoreUser").html(data);
                }
            });
            //Show login popup
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
        }
        function submitLogin(form) {
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
                        window.location = 'registrationCourse?cId=<?= $cId ?>&fPage=<?= $fPage ?>';
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
        function deleteMoreUserTmp(tmpID) {
            $.ajax({
                url: "../model/com.gogetrich.function/deleteTmpAddMoreUser.php?tmpID=" + tmpID,
                type: 'POST',
                success: function (data2, textStatus, jqXHR) {
                    if (data2 == 200) {
                        $("#loadMoreUser").load("moreUserTbl.php");
                        $('html,body').animate({
                            scrollTop: $("#loadMoreUser").offset().top
                        });
                    } else {
                        showWarningNotficationDialog(data2);
                    }
                }
            });
        }
    </script>
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Begin # DIV Form -->
                <fieldset>
                    <form id="loginForGetRes">
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="glyphicon glyphicon-user"></i>
                                        </span> 
                                        <input class="form-control" placeholder="ชื่อผู้ใช้" id="loginName" type="text" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="glyphicon glyphicon-lock"></i>
                                        </span>
                                        <input class="form-control" placeholder="รหัสผ่าน" id="loginPassword" type="password" value="">
                                    </div>
                                </div>
                                <div class="form-group pull-right">
                                    <input type="button" class="btn btn-default" id="loginAsMember" value="เข้าสู่ระบบ">
                                    <input type="button" class="btn btn-default" onclick="$('#login-modal').modal('toggle');
                                            $('#loginForGetRes').trigger('reset');" value="ยกเลิก">
                                </div>
                            </div>
                        </div>
                    </form>
                </fieldset>
                <!-- End # DIV Form -->

            </div>
        </div>
    </div>

</html>
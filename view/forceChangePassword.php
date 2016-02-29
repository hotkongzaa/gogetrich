<?php
session_start();
$now = time();
if (isset($_SESSION['expireFrontEnd'])) {
    if ($now > $_SESSION['expireFrontEnd']) {
        session_destroy();
    }
}
require '../model-db-connection/config.php';
$cusID = (string) filter_input(INPUT_GET, 'cusID');
$sqlgetUserInformation = "SELECT * FROM RICH_CUSTOMER WHERE CUS_ID = '" . $cusID . "'";
$resGetUserInfo = mysql_query($sqlgetUserInformation);
$rowGetUserInfo = mysql_fetch_assoc($resGetUserInfo);

if ($rowGetUserInfo["FORCE_CHANGE"] == "true") {
    $cusEmail = $rowGetUserInfo['CUS_EMAIL'];
    $cusFirstName = $rowGetUserInfo['CUS_FIRST_NAME'];
    $cusLastName = $rowGetUserInfo['CUS_LAST_NAME'];
    $cusPhoneNum = $rowGetUserInfo['CUS_PHONE_NUMBER'];
    $cusContactAddr = $rowGetUserInfo['CUS_CONTACT_ADDRESS'];
} else {
    header("Location: main");
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
                                    <h1>Force Change Password</h1>
                                    <ol class="tg-breadcrumb">
                                        <li><a href="main">Home</a></li>
                                        <li class="active">Force Change Password</li>
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
                                    <h2>FORCE CHANGE PASSWORD</h2>
                                </div>
                            </div>
                            <h2></h2>
                            <div class="row">                                
                                <div class="col-md-8 col-sm-6 col-xs-6 width-480">
                                    <form class="cus_registration_form">
                                        <fieldset>
                                            <legend>User Credential</legend>

                                            <input type="hidden" name="cusID" id="cusID" value="<?= $cusID ?>">

                                            <div class="form-group">
                                                <label for="username">ชื่อผู้ใช้ (Username) *</label>
                                                <input type="text" name="username" id="username" placeholder="Username" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="password">รหัสผ่าน (Password) * </label> (กรุณาใส่อย่างน้อย 8 ตัวอักษร)
                                                <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="confirmPassword">ยืนยันรหัสผ่าน (Confirm password) *</label>
                                                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">อีเมล์ (Email) *</label>
                                                <input type="email" value="<?= $cusEmail ?>" id="email" name="email" placeholder="Email Address" class="form-control" readonly="true">
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend>User Information</legend>
                                            <div class="form-group">
                                                <label for="fName">ชื่อ (First Name) *</label>
                                                <input type="text" value="<?= $cusFirstName ?>" id="fName" name="fName" placeholder="First Name" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="lName">สกุล (Last Name) *</label>
                                                <input type="text" value="<?= $cusLastName ?>" id="lName" name="lName" placeholder="Last Name" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="gender">เพศ (Gender)</label>
                                                <select id="gender" name="gender">
                                                    <option value="0"></option>
                                                    <option value="Male">ชาย</option>
                                                    <option value="Female">หญิง</option>
                                                    <option value="Other">ไม่ระบุ</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="address">ที่อยู่ (เพื่อการติดต่อ) (Contact address) *</label>
                                                <textarea id="address" name="address" cols="20" style="height: 150px;"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">หมายเลขโทรศัพท์ เพื่อการติดต่อ (Phone number) *</label>
                                                <input type="text" id="phone" value="<?= $cusPhoneNum ?>" name="phone" placeholder="Phone number" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="facebookAdr">Facebook address</label>
                                                <input type="text" id="facebookAdr" name="facebookAdr" placeholder="Facebook Address" class="form-control">
                                            </div>

                                        </fieldset>
                                        <button class="tg-theme-btn tg-theme-btn-lg" type="submit">Update an Account</button>
                                    </form>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4 width-480">
                                    <br/>
                                    <img src="assets/images/registerform_v2_370x247.jpg"/>
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
        <div class="modal fade notification-modalBox" tabindex="-1" role="dialog">
            <div class="tg-login-modalbox">
                <h2>System notification <span class="pull-right" style="cursor: pointer" onclick="$('.notification-modalBox').modal('hide')">x</span></h2></h2>
                <div class="alert alert-error">
                    <a class="close" data-dismiss="alert"></a>
                    <span class="notification_detail"></span>
                </div>
            </div>
        </div>
        <div class="modal fade login-modalbox" tabindex="-1" role="dialog">
            <div class="tg-login-modalbox">
                <h2>LOGIN FORM <span class="pull-right" style="cursor: pointer" onclick="$('.login-modalbox').modal('hide')">x</span></h2>
                <form class="login-form">
                    <fieldset>
                        <div class="form-group">
                            <i class="fa fa-group"></i>
                            <input type="text" id="usernameLogin" name="usernameLogin" placeholder="User name" class="form-control">
                        </div>
                        <div class="form-group">
                            <i class="fa fa-lock"></i>
                            <input type="password" id="passwordLogin" name="passwordLogin"  placeholder="Password" class="form-control">
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
            var formRegis = $('.cus_registration_form');
            var errorHandler = $('.errorHandler', formRegis);
            formRegis.validate({
                rules: {
                    username: {
                        required: true
                    },
                    password: {
                        minlength: 8,
                        required: true
                    },
                    confirmPassword: {
                        required: true,
                        equalTo: "#password"
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    fName: {
                        required: true
                    },
                    lName: {
                        required: true
                    },
                    address: {
                        required: true
                    },
                    phone: {
                        minlength: 6,
                        required: true,
                        number: true
                    }
                },
                submitHandler: function (form) {
                    errorHandler.hide();
                    submitCustomer(form);
                },
                invalidHandler: function (event, validator) {//display error alert on form submit
                    errorHandler.show();
                }
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
                        window.location = 'trainingSchedule';
                        $(form).trigger('reset');
                    }
                }
            });
        }
        function submitCustomer(form) {
//            showWarningNotficationDialog("This feature is not implement yet !");
            var fromObj = $(form).serialize();
            $.ajax({
                url: "../model/com.gogetrich.function/UpdateRegistration.php?" + fromObj,
                type: 'POST',
                success: function (data, textStatus, jqXHR) {
                    if (data == 200) {
                        $.ajax({
                            url: "../model/com.gogetrich.function/LoginSubmit.php",
                            type: 'POST',
                            data: {'username': $("#username").val(), 'password': $("#password").val()},
                            success: function (data, textStatus, jqXHR) {
                                var resData = data.split(":");
                                if (resData[0] == 503) {
                                    setTimeout(function () {
                                        showWarningNotficationDialog("ชื่อผู้ใช้ หรือ รหัสผ่านไม่ถูกต้อง");
                                    }, 50);
                                    $(form).trigger('reset');
                                }
                                if (resData[0] == 205) {
                                    setTimeout(function () {
                                        showSuccessNotficationDialog("กรุณาเปลี่ยนรหัสผ่าน", "forceChangePassword.php?cusID=" + resData[1]);
                                    }, 50);
                                    $(form).trigger('reset');
                                }
                                if (resData[0] == 200) {
                                    window.location = 'trainingSchedule';
                                    $(form).trigger('reset');
                                }
                            }
                        });
                    } else {
                        $(".notification-modalBox").modal("show");
                        $(".notification_detail").html(data);
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
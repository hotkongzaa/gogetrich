<?php
session_start();
$now = time();
if (isset($_SESSION['expireFrontEnd'])) {
    if ($now > $_SESSION['expireFrontEnd']) {
        session_destroy();
    }
}
require '../model-db-connection/config.php';
$cId = (string) filter_input(INPUT_GET, 'cname');
$iniConfiguration = parse_ini_file("../model-db-connection/configuration.ini");
$sqlGetCourseHeaderID = "SELECT * FROM GTRICH_COURSE_HEADER WHERE HEADER_ID = '" . $cId . "'";
$res = mysql_query($sqlGetCourseHeaderID);
$rowHeader = mysql_fetch_assoc($res);
$currentFile = basename(__FILE__, '.php');
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
                        if (!isset($_SESSION['usernameFrontEnd'])) {
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
                                            <li class="current-menu-item">
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
                                                            <tr>
                                                                <td colspan="2" style="text-align:right !important;">
                                                                    <br/>
                                                                    <?php
                                                                    if (!isset($_SESSION['usernameFrontEnd'])) {
                                                                        ?>
                                                                        <!--a href="#" class="btn btn-default" data-toggle="modal" data-target=".login-modalbox" onclick="clearMoreTmp()">
                                                                            <i class="fa fa-pencil-square"></i> <span style="color: #ffcc33;font-weight: bold;">ลงทะเบียนเรียน</span>
                                                                        </a-->
                                                                        <!--a href="#" class="btn btn-default" data-toggle="modal" data-target=".register-modalbox" onclick="clearMoreTmp()">
                                                                            <i class="fa fa-pencil-square"></i> <span style="color: #ffcc33;font-weight: bold;">ลงทะเบียนเรียน</span>
                                                                        </a-->
                                                                        <a href="#" class="btn btn-default" onclick="clearMoreTmp()">
                                                                            <i class="fa fa-pencil-square"></i> <span style="color: #ffcc33;font-weight: bold;">ลงทะเบียนเรียน</span>
                                                                        </a>
                                                                        <?php
                                                                    } else {
                                                                        $sqlCheckAlreadyRegis = "SELECT COUNT(*) AS counts FROM RICH_CUSTOMER_ENROLL WHERE ENROLL_COURSE_ID='" . $cId . "' AND ENROLL_CUS_ID='" . $_SESSION['userIdFrontEnd'] . "'";
                                                                        $resCheckAlreadyRegis = mysql_query($sqlCheckAlreadyRegis);
                                                                        $rowCheckAlreadyRegis = mysql_fetch_assoc($resCheckAlreadyRegis);
                                                                        if ($rowCheckAlreadyRegis['counts'] >= 1) {
                                                                            ?>
                                                                            <span style="color: #ffcc33"><p>คุณได้ลงทะเบียนคอร์สนี้เรียบร้อยแล้ว</p></span>
                                                                            <a href="#" class="btn btn-default disabled"><i class="fa fa-pencil-square"></i> <span style="color: #ffcc33;font-weight: bold;">ลงทะเบียนเรียน</span></a>
                                                                            <?php
                                                                        } else {
                                                                            ?>
                                                                            <!--a href="#" class="btn btn-default" data-toggle="modal" data-target=".register-modalbox" onclick="clearMoreTmp()">
                                                                                <i class="fa fa-pencil-square"></i> <span style="color: #ffcc33;font-weight: bold;">ลงทะเบียนเรียน</span>
                                                                            </a-->
                                                                            <a href="#" class="btn btn-default" onclick="clearMoreTmp()">
                                                                                <i class="fa fa-pencil-square"></i> <span style="color: #ffcc33;font-weight: bold;">ลงทะเบียนเรียน</span>
                                                                            </a>
                                                                            <?php
                                                                        }
                                                                    }
                                                                    ?>                                                                
                                                                </td>
                                                            </tr>
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
                                                                    <tr>
                                                                        <td width="250px"><strong><?= $rowGetCourseDetailByHeaderID['DESC_HEADER_NAME'] ?> </strong></td>
                                                                        <td>
                                                                            <?= $rowGetCourseDetailByHeaderID['DETAIL_DESCRIPTION'] ?>
                                                                            <br/>
                                                                            <div id="<?= $rowGetCourseDetailByHeaderID['DETAIL_ID'] ?>" class="tg-map" style="height:200px !important;">
                                                                            </div>
                                                                            <script type="text/javascript">
                                                                                $(document).ready(function () {
                                                                                    $("#<?= $rowGetCourseDetailByHeaderID['DETAIL_ID'] ?>").gmap3({
                                                                                        map: {
                                                                                            options: {
                                                                                                center: [<?= $rowGetCourseDetailByHeaderID['DETAIL_LAT'] ?>, <?= $rowGetCourseDetailByHeaderID['DETAIL_LNG'] ?>],
                                                                                                zoom: 16,
                                                                                                fullscreenControl: true,
                                                                                                scrollwheel: false,
                                                                                                navigationControl: false,
                                                                                                mapTypeControl: false,
                                                                                                scaleControl: true,
                                                                                                draggable: true
                                                                                            }
                                                                                        },
                                                                                        marker: {
                                                                                            values: [
                                                                                                {latLng: [<?= $rowGetCourseDetailByHeaderID['DETAIL_LAT'] ?>, <?= $rowGetCourseDetailByHeaderID['DETAIL_LNG'] ?>], data: "<?= $showInMap ?><a href='fullmap?lng=<?= $rowGetCourseDetailByHeaderID['DETAIL_LNG'] ?>&lat=<?= $rowGetCourseDetailByHeaderID['DETAIL_LAT'] ?>&name=<?= $showInMap ?>'>View large map</a>"}
                                                                                            ],
                                                                                            options: {
                                                                                                draggable: false
                                                                                            },
                                                                                            events: {
                                                                                                click: function (marker, event, context) {
                                                                                                    var map = $(this).gmap3("get"),
                                                                                                            infowindow = $(this).gmap3({get: {name: "infowindow"}});
                                                                                                    if (infowindow) {
                                                                                                        infowindow.open(map, marker);
                                                                                                        infowindow.setContent(context.data);
                                                                                                    } else {
                                                                                                        $(this).gmap3({
                                                                                                            infowindow: {
                                                                                                                anchor: marker,
                                                                                                                options: {content: context.data}
                                                                                                            }
                                                                                                        });
                                                                                                    }
                                                                                                }
            //                                                                                                mouseout: function () {
            //                                                                                                    var infowindow = $(this).gmap3({get: {name: "infowindow"}});
            //                                                                                                    if (infowindow) {
            //                                                                                                        infowindow.close();
            //                                                                                                    }
            //                                                                                                }
                                                                                            }
                                                                                        }
                                                                                    });
                                                                                });
                                                                            </script>
                                                                        </td>
                                                                    </tr>
                                                                    <?php
                                                                } else if ($rowGetCourseDetailByHeaderID['REF_GALLERY_ID'] == "true") {
                                                                    ?>
                                                                    <tr>
                                                                        <td width="250px">
                                                                            <strong><?= $rowGetCourseDetailByHeaderID['DESC_HEADER_NAME'] ?> </strong>
                                                                        </td>
                                                                        <td>
                                                                            <div id="<?= $rowGetCourseDetailByHeaderID['DETAIL_ID'] ?>gallery" style="display:none;">
                                                                                <?php
                                                                                $sqlGetImageGallery = "SELECT * FROM GTRICH_GALLERY_IMAGES_UPLOAD WHERE REF_COURSE_HEADER_ID = '" . $rowHeader['HEADER_ID'] . "' AND REF_COURSE_DESCRIPTION_HEADER_ID='" . $rowGetCourseDetailByHeaderID['DESC_HEADER_ID'] . "'";
                                                                                $resGetImageGallery = mysql_query($sqlGetImageGallery);
                                                                                while ($rowGetImageGallery = mysql_fetch_array($resGetImageGallery)) {
                                                                                    ?>
                                                                                    <img alt="ภาพกิจกรรม"
                                                                                         src="<?= $iniConfiguration['web.application.admin.prefix'] ?>view/assets/uploads/images/<?= $rowGetImageGallery['IMAGE_NAME'] ?>"
                                                                                         data-image="<?= $iniConfiguration['web.application.admin.prefix'] ?>view/assets/uploads/images/<?= $rowGetImageGallery['IMAGE_NAME'] ?>">                                                                           
                                                                                         <?php
                                                                                     }
                                                                                     ?>
                                                                            </div>
                                                                            <script>
                                                                                var api;
                                                                                jQuery(document).ready(function () {
                                                                                    api = jQuery("#<?= $rowGetCourseDetailByHeaderID['DETAIL_ID'] ?>gallery").unitegallery();
                                                                                    api.togglePlay();
                                                                                });

                                                                            </script>
                                                                        </td>
                                                                    </tr>

                                                                    <?php
                                                                } else {
                                                                    ?>
                                                                    <tr>
                                                                        <td width="250px">
                                                                            <strong><?= $rowGetCourseDetailByHeaderID['DESC_HEADER_NAME'] ?> </strong>
                                                                        </td>
                                                                        <td>
                                                                            <?= $rowGetCourseDetailByHeaderID['DETAIL_DESCRIPTION'] ?>
                                                                        </td>
                                                                    </tr>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                            <tr>
                                                                <td colspan="2" style="text-align:right !important;">
                                                                    <br/>
                                                                    <?php
                                                                    if (!isset($_SESSION['usernameFrontEnd'])) {
                                                                        ?>
                                                                        <!--a href="#" class="btn btn-default" data-toggle="modal" data-target=".login-modalbox" onclick="clearMoreTmp()">
                                                                            <i class="fa fa-pencil-square"></i> <span style="color: #ffcc33;font-weight: bold;">ลงทะเบียนเรียน</span>
                                                                        </a-->
                                                                        <a href="#" class="btn btn-default" onclick="clearMoreTmp()">
                                                                            <i class="fa fa-pencil-square"></i> <span style="color: #ffcc33;font-weight: bold;">ลงทะเบียนเรียน</span>
                                                                        </a>
                                                                        <?php
                                                                    } else {
                                                                        $sqlCheckAlreadyRegis = "SELECT COUNT(*) AS counts FROM RICH_CUSTOMER_ENROLL WHERE ENROLL_COURSE_ID='" . $cId . "' AND ENROLL_CUS_ID='" . $_SESSION['userIdFrontEnd'] . "'";
                                                                        $resCheckAlreadyRegis = mysql_query($sqlCheckAlreadyRegis);
                                                                        $rowCheckAlreadyRegis = mysql_fetch_assoc($resCheckAlreadyRegis);
                                                                        if ($rowCheckAlreadyRegis['counts'] >= 1) {
                                                                            ?>
                                                                            <span style="color: #ffcc33"><p>คุณได้ลงทะเบียนคอร์สนี้เรียบร้อยแล้ว</p></span>
                                                                            <a href="#" class="btn btn-default disabled"><i class="fa fa-pencil-square"></i> <span style="color: #ffcc33;font-weight: bold;">ลงทะเบียนเรียน</span></a>
                                                                            <?php
                                                                        } else {
                                                                            ?>
                                                                            <a href="#" class="btn btn-default" onclick="clearMoreTmp()">
                                                                                <i class="fa fa-pencil-square"></i> <span style="color: #ffcc33;font-weight: bold;">ลงทะเบียนเรียน</span>
                                                                            </a>
                                                                            <?php
                                                                        }
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
                                <script>
                                    window.location.href = "pageNotFound?fPage=trainingSchedule";
                                </script>
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
        <div class="modal fade register-modalbox" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
            <div class="tg-signup-modalbox">
                <h2>REGISTRATION COURSE <span class="pull-right" style="cursor: pointer" onclick="closeRegisterPartialDialog($('.register-modalbox'))">x</span></h2>
                <div id="scheduleFormDiv"></div>

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

        function clearMoreTmp() {
            $.ajax({
                url: "../model/com.gogetrich.function/clearTmp.php",
                type: 'POST',
                beforeSend: function (xhr) {
                    $(".preloader").show();
                },
                success: function (data, textStatus, jqXHR) {
                    if (data != 200) {
                        console.log(data);
                    } else {
                        window.location.href = "registrationCourse?cId=<?= $cId ?>&fPage=<?= $currentFile ?>?cname=<?= $cId ?>";
                    }
                    $(".preloader").fadeOut("slow");

                }
            });

        }
    </script>
</html>
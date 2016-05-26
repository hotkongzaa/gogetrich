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
                                    <h2>จิตและสมองพารวย</h2>
                                </div>
                            </div>
                            <div class="tg-aboutus-section">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <figure class="tg-about-img"><img src="assets/images/learn-to-rich/mind-and-brain-take-to-rich.jpg" alt="image description"></figure>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="tg-aboutus">
                                        <div class="tg-description">
                                            <p>&emsp;&emsp;&emsp;การพัฒนาทักษะการเงินนอกจากมิติตัวเลขแล้วยังมีมิติของการรับรู้ ความเชื่อเกี่ยวกับเงิน ภาวะผู้นำและระดับของการให้ 
                                                การได้รับความรู้ควบคู่กันไปเพื่อปรับในระดับจิตใต้สำนึก จึงจะแก้ปัญหาได้อย่างแท้จริง การปลูกฝังการรับรู้การทำงานของเงิน 
                                                ต้องพัฒนาให้เกิดทักษะการเงินใหม่ จึงจะสามารถสร้างให้เกิดอิสรภาพการเงินได้ในระยะยาว</p>
                                            <p><strong>เรื่องของจิต</strong></p>
                                            <p>&emsp;&emsp;&emsp;ลองนึกย้อนถึงการใช้ชีวิตที่ผ่านมา การลงมือทำอะไรก็ตาม เกิดจากอารมณ์ความรู้สึก และการทำแบบเคยชิน พฤติกรรมต่าง ๆ เริ่มจากความคิด 
                                                ความคิดกำหนดอารมณ์ความรู้สึก ความรู้สึกกำหนดการกระทำ การกระทำซ้ำ ๆ กลายเป็นนิสัย และนิสัยจะกลายเป็นตัวเราเป็นบุคลิกภาพเป็น 
                                                “ชะตาชีวิต”</p>
                                            <p align="center"><strong>ความคิดคือการคุยกับตัวเอง เราคุยกับตัวเองตลอดเวลา เพียงแค่เราไม่รู้ตัว</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-centered">
                                    <div class="tg-aboutus">
                                        <div class="tg-description">
                                            </br>
                                            <p>&emsp;&emsp;&emsp;ลองหลับตานึกถึงวันพักผ่อนในวันหยุดตอนเช้า ที่บ้านพักตากอากาศริมทะเล ตื่นขึ้นมาไม่ต้องรีบ อากาศเย็นสบาย เตียงสีขาวหมอนฟูนุ่มสบาย 
                                                คุณนอนบิดไปบิดมา เสียงคลื่นกระทบฝั่ง “โอโซน”....แล้วคุณก็ลุกขึ้นเดินไปที่ระเบียง สูดอากาศบริสุทธิ์....ทอดสายตาออกไปมองทะเลสบาย ๆ 
                                                ผ่อนคลาย...เสียงโทรศัพท์ที่หัวเตียงดังขึ้น คุณเดินไปหยิบขึ้นมาเห็นชื่อ “หัวหน้าของคุณ” คุณรู้สึกอย่างไร?</p>
                                            <p>&emsp;&emsp;&emsp;เขียนออกมาว่าคุณรู้สึกอย่างไร ภายใต้ความรู้สึกนั้น คุณคิดเกี่ยวกับหัวหน้าของคุณอย่างไร เขียนลงที่กระดาษ</p>
                                            <p style="text-align:center">
                                                <img src="assets/images/learn-to-rich/mind_and_brain_1.png" alt="image description" />
                                            </p>
                                            <p align="center">คุณเห็นแล้วใช่มั้ย ว่าก่อนที่จะเกิดความรู้สึกบางอย่าง มีความคิดเกิดขึ้นมาก่อน...นั้นแหละ ”เราคุยกับตัวเอง”</p>
                                            <p>จาก Secret of the Millionaire Mind โดย T. Harv Eker มีแนวความคิดที่น่าสนใจเก็บมาให้อ่านบางส่วน</p>
                                            <ul>
                                                <li>คนรวยเชื่อว่า “ฉันสร้างชีวิตของฉันเอง”, คนจนเชื่อว่า “ชีวิตทำให้ฉันเป็นไป”</li>
                                                <li>คนรวยมองจดจ่อไปที่โอกาส, คนจนจดจ่อที่อุปสรรค</li>
                                                <li>คนรวยเลือกการรับผลตอบแทนจากผลลัพธ์ของงาน, คนจนเลือกการรับผลตอบแทนตามเวลาทำงาน</li>
                                                <li>คนรวยโฟกัสที่มูลค่าทรัพย์สินสุทธิ, คนจนโฟกัสที่รายได้จากการทำงาน</li>
                                                <li>คนรวยมีการจัดการเงินที่ดี, คนจนไม่สนใจการจัดการเงิน</li>
                                                <li>คนรวยทำทั้ง ๆ ที่กลัว, คนจนปล่อยให้ความกลัวหยุดพวกเขา</li>
                                                <li>คนรวยเรียนรู้และเติบโตตลอดเวลา, คนจนคิดว่า ฉันรู้แล้ว</li>
                                            </ul><br />
                                            <p>ประโยคเหล่านี้ เป็นตัวอย่างการคุยกับตัวเองที่แตกต่างกัน มีผลให้มีพฤติกรรมที่แตกต่างกัน สนับสนุนให้เป็นไปตามความคิดนั้น</p>
                                            <p><strong>เรื่องของสมอง</strong></p>
                                            <p>&emsp;&emsp;&emsp;โชคดีที่ความเข้าใจใหม่เกี่ยวกับสมองสนับสนุนให้เราเชื่อการกำหนดชะตาชีวิตตนเอง *ในช่วงก่อนศตวรรษที่ 21 
                                                มีความเชื่อกันว่าสมองมนุษย์เมื่อพ้นวัยเด็กแล้วจะหยุดพัฒนา และไม่สามารถเปลี่ยนแปลงใด ๆ ได้ ไม่นานมานี้มีการค้นพบใหม่ 
                                                สมองมนุษย์เปลี่ยนแปลงได้ตลอดเวลา ส่วนไหนที่ถูกใช้บ่อยเนื้อสมองจะเพิ่มขึ้นมีโครงข่ายใยประสาทที่เชื่อมโยงกันใหม่ ส่วนไหนไม่ถูกใช้จะถูกกำจัดออกไป</p>
                                            <p>&emsp;&emsp;&emsp;เนื้อสมองที่เปลี่ยนแปลงนี้เกิดจาก “ความคิด” ที่ทำให้มีการเปลี่ยนแปลงพฤติกรรมไปตามความคิดนั้น ตัวอย่างหนึ่งที่ทำให้เข้าใจและเห็นภาพคือ 
                                                สมองของคนขับรถแท็กซี่ในลอนดอนส่วนที่เกี่ยวกับการจำเส้นทางจะมีขนาดใหญ่กว่าคนขับรถประจำทางในลอนดอน 
                                                เพราะคนขับรถประจำทางมีเส้นทางประจำเหมือนเดิมทุกวัน ในขณะที่คนขับแท็กซี่ต้องเรียนรู้เส้นทางใหม่ ๆ ตลอดเวลา</p>
                                            <p style="text-align:center">
                                                <img src="assets/images/learn-to-rich/mind_and_brain_2.jpg" alt="image description" />
                                            </p>
                                            <p>&emsp;&emsp;&emsp;เมื่อคุยกันถึงเรื่องสมอง เรามักจะนึกถึง ไอน์สไตน์ ซึ่งเรามักจะคิดว่า เขาเกิดมาก็เป็นอัจฉริยะอย่างนั้นเลย ถ้ามีเวลาลองเข้าไปหา youtube 
                                                สารคดี อัลเบิร์ต ไอสไตน์ อัจฉริยะพลิกโลก HD 
                                                <a href="https://www.youtube.com/watch?v=TPAaSCtuUXk&nohtml5=False">https://www.youtube.com/watch?v=TPAaSCtuUXk&nohtml5=False</a>
                                                จะเห็นว่าการใช้ชีวิตขอไอน์สไตน์ จดจ่อกับสิ่งที่เขาทำ เขาไม่ได้มีคำตอบในหัวมาก่อน มีแต่เป้าหมายที่เป็นภารกิจสำคัญในชีวิตในการเข้าใจจักรวาล 
                                                สมองของเขาถูกใช้ตลอดเวลาคิด จินตนาการ พิสูจน์เรื่องที่คิด</p>
                                            <p>&emsp;&emsp;&emsp;<strong>จิต สมอง...</strong> เราเรียนรู้การทำงานเชื่อมโยงกันของจิตและสมอง เพื่อปรับเปลี่ยนพฤติกรรมการเงินไปในทิศทางที่ต้องการจะเป็น ด้วยความรู้การวางแผนการเงินในการจัดการเงิน 
                                                วิธีคิดเพื่อเห็นความเป็นไปได้ ปฏิบัติซ้ำให้เกิดทักษะใหม่เปลี่ยนเป็นพฤติกรรมการเงินใหม่ในระดับจิต เพื่อให้เกิดการเชื่อมโยงโครงข่ายสมองใหม่ ในทิศทางที่เราต้องการ</p>
                                            <br />
                                            <br />
                                            <br />
                                            <p>*ข้อมูลจาก: กรรมตามสมอง, ขุนเขา สินธุเสน เขจรบุตร</p>
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
<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>My Blog 2</title>
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
            <div class="tg-banner tg-haslayout parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="assets/images/page-banner-img/img-01.jpg">
                <div class="tg-banner-holder">
                    <div class="container">
                        <div class="tg-displaytable">
                            <div class="tg-displaytablecell">
                                <div class="banner-content tg-haslayout">
                                    <h1>blog detail</h1>
                                    <ol class="tg-breadcrumb">
                                        <li><a href="#">Home</a></li>
                                        <li class="active">blog detail</li>
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
                                Blog Detail Section Start
                *************************************-->
                <div class="tg-main-section tg-haslayout">
                    <div class="container">
                        <div class="row">
                            <div id="content" class="col-md-9 col-sm-8 col-xs-12">
                                <article class="blog-post blog-post-detail tg-haslayout">
                                    <figure>
                                        <img src="assets/images/ice_berg_image_v6_653x310.png" alt="image description">
                                        <div class="tg-img-hover">
                                            <div class="tg-displaytable">
                                                <div class="tg-displaytablecell">
                                                    <h2>ตรวจสอบสถานการณ์เงิน</h2>
                                                    <ul class="tg-metadata">
                                                        <li class="author"><a href="#">อ. วิภา เจริญกิจสุพัฒน์ (พี่เกียก)</a></li>
                                                        <!--li class="catagory"><a href="#">In Photography</a></li-->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="tg-post-detail">
                                        <div class="tg-description">
                                            <p><legend>ตรวจสอบสถานการณ์เงิน ของเราอยู่สถานการณ์ไหน</legend></p>
                                            <p><strong>สถานะการเงินโดยทั่วไปมีอยู่ 6 สถานการณ์:</strong> หนี้สินล้นพ้นตัว, สถานะพึ่งพิง, ไม่มีหนี้หรือมีหนี้ที่จัดการได้ แต่ไม่มีเงินเก็บ, เงินเหลือมากแต่ไม่ได้จัดการ, การเงินมั่นคงปลอดภัย, อิสรภาพการเงิน</p>
                                            <p><strong>สำรวจตัวเองเบื้องต้น ขณะนี้เราเห็นตัวเราเองอยู่สถานการณ์ไหนใน 6 สถานการณ์นี้</strong></br>
                                                <strong>สถานะ -1 หนี้สินล้นพ้นตัว</strong> คือผู้ที่อยู่ในภาวการณ์เป็นหนี้ที่ควบคุมไม่ได้ ค่าใช้จ่ายเกินรายได้ทุกเดือน หมุนบัตรเครดิตหลายใบ</p>
                                            <p><strong>สถานะ 0 สถานะพึ่งพิง</strong> คือ ผู้ที่อยู่ในฐานะที่ต้องอาศัยผู้อื่น เช่น เด็ก นักเรียน นักศึกษา คนเกษียณที่ไม่ได้เตรียมเงินเกษียณ</p>
                                            <p><strong>สถานะ 1 พึ่งพาตัวเองได้</strong>, แต่ไม่มีเงินเก็บ คือคนที่มีรายรับรายจ่ายสมดุล ไม่เป็นหนี้หรือเป็นหนี้ที่อยู่สถานะที่ควบคุมได้ เช่น มีค่าผ่อนบ้าน ผ่อนรถ ใช้จ่ายแบบเดือนชนเดือน</p>
                                            <p><strong>สถานะ 2 พึ่งพาตัวเองได้</strong>, เงินเหลือมากแต่ไม่ได้จัดการ ผู้ที่มีรายได้หักค่าใช้จ่ายมีเงินเหลือ เก็บเงินไว้ในบัญชีธนาคารส่วนใหญ่ ซื้อ LTF/RMF ลดหย่อนภาษีบ้าง ซื้อประกันลดหย่อนภาษีบ้าง โดยยังไม่มีการกำหนดเป้าหมายการออมการลงทุนที่ชัดเจน ว่าต้องเก็บเพื่อวัตถุประสงค์ใด หรือต้องเก็บให้ได้เท่าไร</p>
                                            <p><strong>สถานะ 3 การเงินมั่นคงปลอดภัย</strong> คือผู้ที่เตรียมปัจจัยพื้นฐานไว้ครบถ้วนตลอดทุกช่วงของชีวิต มีบ้านของครอบครัว ค่าใช้จ่ายสมดุลแต่ละเดือน มีเงินออมสำหรับเตรียมค่าใช้จ่ายในอนาคต และเตรียมค่าใช้จ่ายที่คาดการณ์ไม่ได้ในอนาคต</p>
                                            <p><strong>สถานะ 4 อิสรภาพการเงิน</strong> คือผู้ที่มีรายได้โดยไม่ต้องใช้ตัวเองทำงานหาเงินเทียบเท่ากับค่าใช้จ่าย เป็นสถานะที่ทำให้หมดความกังวลเรื่องการหารายได้</p>
                                            <!--p>คุณอยู่สถานการณ์ไหน การรู้สถานการณ์ของตัวเองจะช่วยให้การจัดการการเงินถูกทิศทาง เคลื่อนขึ้นไปทีละขั้น ๆ  ขั้นถึงปลอดภัย  คือ สถานะที่ 3 ที่ทุกครอบครัวต้องจัดการให้ถึงขั้นนี้ได้เป็นอย่างน้อย</p-->
                                            <p>แล้วเราเคยสงสัยมั้ยว่า บางคนมีโอกาสและความสามารถใกล้เคียงกัน แต่ระดับของสถานะการเงินต่างกัน....ถ้าอยากทราบ...โปรดติดตามตอนต่อไป</p>
                                            <blockquote>
                                                <q>"คุณอยู่สถานการณ์ไหน การรู้สถานการณ์ของตัวเองจะช่วยให้การจัดการการเงินถูกทิศทาง เคลื่อนขึ้นไปทีละขั้น ๆ  ขั้นถึงปลอดภัย  คือ สถานะที่ 3 ที่ทุกครอบครัวต้องจัดการให้ถึงขั้นนี้ได้เป็นอย่างน้อย"</q>
                                                <!--span class="author"><a href="#">Frank Smith, Company Inc.</a></span-->
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
    </body>
</html>
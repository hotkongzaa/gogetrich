<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>BootStrap HTML5 CSS3 Theme</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <?php include './assets/css_incl.php'; ?>
        <?php include './assets/javascript_incl.php'; ?>
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
                            <div id="content" class="col-md-9 col-sm-8 col-xs-12">
                                <article class="blog-post blog-post-detail tg-haslayout">
                                    <figure>
                                        <img src="assets/images/blog/financialpyramid-blog.jpg" alt="image description">
                                        <div class="tg-img-hover">
                                            <div class="tg-displaytable">
                                                <div class="tg-displaytablecell">
                                                    <h2>blog title here</h2>
                                                    <ul class="tg-metadata">
                                                        <li class="author"><a href="#">By Admin / </a></li>
                                                        <li class="catagory"><a href="#">In Photography</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="tg-post-detail">
                                        <div class="tg-description">
                                            <p>ขั้นตอนในกระบวนการวางแผนการเงินเป็นเรื่องง่าย ๆ ที่จะซับซ้อนมากหากอธิบายเป็นตัวหนังสือเป็นข้อ ๆ ปิรามิดการเงินเป็นภาพช่วยสื่อสารขั้นตอนการวางแผนการเงินเรียงลำดับจากล่างขึ้นบน และจากซ้ายไปขวา</p>
                                            <p><strong>ขั้นที่ 1 ปกป้องทรัพย์สิน (Wealth Protection)</strong></p>
											<p>การวางแผนขั้นที่ 1 ครบทั้ง 4 เรื่องหลัก ๆ คือ Budgeting, Emergency Cash, Debt Management และ Risk Management จะเป็นการวางรากฐานการเงินที่ป้องกันการเป็นหนี้ที่ควบคุมไม่ได้ โดยเริ่มจากการบันทึกรายรับรายจ่ายพร้อมกับการทำงบประมาณเพื่อบริหารกระแสเงินสดรับจ่ายให้สมดุล ควบคุมได้</p>
											<p>การเตรียมเงินสำรองฉุกเฉิน ป้องการค่าใช้จ่ายที่ไม่ได้วางแผนสร้างผลกระทบกับแผนการออมการลงทุน หรือทำให้กระแสเงินสดรับจ่ายเสียสมดุล ทำให้เกิดภาระหนี้สินได้</p>
											<p>การจัดการหนี้สิน คือการบริหารหนี้ค่างวดผ่อนชำระอยู่ในเกณฑ์ที่ไม่กระทบกับกระแสเงินสดและเป้าหมายการเงินอื่น ๆ ในอัตราดอกเบี้ยและค่าใช้จ่ายต่ำที่สุด ภายในระยะเวลาที่เหมาะสม</p>
											<p>การจัดการความเสี่ยง เป็นการโอนความรับผิดชอบค่าใช้จ่ายที่มีความเสี่ยงอาจจะสร้างค่าใช้จ่ายมหาศาล และสร้างผลกระทบกับกระแสเงินสดและเป้าหมายการเงินอื่น ๆ ด้วยการจำกัดความรับผิดชอบเท่ากับเบี้ยประกัน เพื่อให้แผ
											<p><strong>ขั้นที่ 2 ออมและลงทุนตามเป้าหมายการเงิน (Wealth Accumulation)</strong></p>
											<p>เป็นการเตรียมค่าใช้จ่ายที่จะเกิดขึ้นในอนาคต เป็นจำนวนเงินและเวลาที่ต้องการใช้ที่ชัดเจน มักวางแผนเป็น 3 ระยะ คือ แผนระยะสั้น แผนระยะกลาง และแผนระยะยาว เพื่อจะนำเงินไปออมและลงทุนในสินค้าการเงินได้อย่างเหมาะสม ให้ได้เงินตามจำนวนที่ต้องการในวันที่ต้องการใช้ เช่น แผนเตรียมค่าใช้จ่ายหลังเกษียณ แผนเตรียมค่าเล่าเรียน แผนการซื้อบ้านของครอบครัว เป็นต้น</p>
											<p><strong>ขั้นที่ 3 ส่งต่อทรัพย์สิน (Wealth Distribution/Wealth Transfer)</strong></p>
											<p>การเตรียมการในการส่งมอบทรัพย์สินในวันที่เราจากไป ให้มั่นใจได้ว่า ทรัพย์สินถึงคนที่เรารักได้รวดเร็วด้วยค่าใช้จ่ายต่ำและไม่เป็นภาระใคร เรียกว่า การวางแผนมรดก</p>
                                            <blockquote>
                                                <q>“ขั้นตอนในกระบวนการวางแผนการเงินเป็นเรื่องง่าย ๆ ที่จะซับซ้อนมากหากอธิบายเป็นตัวหนังสือเป็นข้อ ๆ ปิรามิดการเงินเป็นภาพช่วยสื่อสารขั้นตอนการวางแผนการ”</q>
                                                <!--span class="author"><a href="#">Frank Smith, Company Inc.</a></span-->
                                            </blockquote>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!--************************************
                                            Sidebar Start
                            *************************************-->
                            <aside id="sidebar" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <div class="row">

                                    <div class="col-md-12 col-xs-12">
                                        <div class="tg-widget widget-recent-post">
                                            <div class="tg-widget-holder">
                                                <h3>Recent Posts</h3>
                                                <ul>
                                                    <li>
                                                        <p>Claritas est etiam processus dynamicus, qui sequitur...</p>
                                                        <time datetime="2008-02-14 20:00" class="tg-post-date">04 February 2015</time>
                                                    </li>
                                                    <li>
                                                        <p>Duis aytem eum iriure dolor...</p>
                                                        <time datetime="2008-02-14 20:00" class="tg-post-date">04 February 2015</time>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </aside>
                            <!--************************************
                                            Sidebar End
                            *************************************-->
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
    </body>
</html>
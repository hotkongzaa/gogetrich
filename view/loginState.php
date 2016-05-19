<?php
session_start();
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

    </ul>
    <?php
}
?>
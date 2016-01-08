<?php
session_start();
require '../model-db-connection/config.php';
$sqlGetCourseHeaderID = "SELECT * FROM GTRICH_COURSE_HEADER WHERE HEADER_ID = '" . $_GET['cname'] . "'";
$res = mysql_query($sqlGetCourseHeaderID);
$rowHeader = mysql_fetch_assoc($res);

if (isset($_SESSION['userId'])) {
    $sqlgetUserInformation = "SELECT * FROM RICH_CUSTOMER WHERE CUS_ID = '" . $_SESSION['userId'] . "'";
    $resGetUserInfo = mysql_query($sqlgetUserInformation);
    $rowGetUserInfo = mysql_fetch_assoc($resGetUserInfo);
}
?>

<form style="padding:20px" id="registerSeminar">
    <div style="overflow: auto;max-height: 450px;">
        <div class="form-group">
            <strong style="font-size: 16px;">ชื่อคอร์ส: </strong> <span style="font-size: 16px;"><?= $rowHeader['HEADER_NAME'] ?></span>
        </div>
        <div class="form-group">
            <strong>เลื่อกเวลาเรียน *</strong>

            <?php
            $sqlGetSchedule = "SELECT * FROM GTRICH_COURSE_EVENT_DATE_TIME WHERE REF_COURSE_HEADER_ID = '" . $rowHeader['HEADER_ID'] . "' ORDER BY EVENT_CREATED_DATE_TIME ASC";
            $resGetSchedule = mysql_query($sqlGetSchedule);

            while ($rowGetSChedule = mysql_fetch_array($resGetSchedule)) {
                ?>
                <br/>
                <input type="radio" name="courseScheduleSelect" value="<?= $rowGetSChedule['EVENT_ID'] ?>"> เริ่ม <?= $rowGetSChedule['START_EVENT_DATE_TIME'] ?> ถึง <?= $rowGetSChedule['END_EVENT_DATE_TIME'] ?>
                <?php
            }
            ?>
        </div>
        <div class="form-group">
            <strong>ลงทะเบียน*</strong>
            <br/>
            <input type="checkbox" id="registerOwn"> ลงทะเบียนให้ตัวเอง
            <br>
            <input type="checkbox" id="registerMore"> ลงทะเบียนมากกว่า 1 คน
        </div>
        <div class="form-group" id="regisMoreThan1User">
            <label for="moreUser_1">ชื่อ-สกุล (Name)*</label> 
            <input type="text" id="moreUser_1"/>
            <label for="phone_number_1">เบอร์โทรศัพท์ (Phone number)*</label> 
            <input type="text" id="phone_number_1"/>
            <label for="moreUserEmail_1">อีเมล์ (Email)*</label> 
            <input type="text" id="moreUserEmail_1"/><br/><br/>
            <div id="addMoreRegister"></div>
            <a href="#" class="btn btn-default" onclick="addMoreRegister()">
                เพิ่มผู้สมัคร
            </a>
        </div>
        <div class="form-group">
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
            <input type="checkbox" id="isSameAddress" value="true" name="isSameAddress" >  เช่นเดียวกับที่อยู่ของสมาชิก
        </div>
        <div class="form-group">
            <label for="addressForReceipt">หากใช้ที่อยู่ที่แตกต่าง กรุณากรอกข้อมูล</label>
            <textarea name="addressForReceipt" id="addressForReceipt" cols="20" style="height: 150px;"></textarea>
        </div>
        <div class="form-group">
            <strong>คลิกแสดงสิทธิ์เพื่อรับส่วนลด</strong>
            <?php
            $sqlGetPromotion = "SELECT * FROM GTRICH_COURSE_PROMOTION WHERE REF_COURSE_HEADER_ID = '" . $_GET['cname'] . "'";
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
            <strong>ยืนยันการลงทะเบียน *</strong>
            <br/>
            <input type="checkbox" name="confirmRegister">  ข้าพเจ้าขอยืนยันการลงทะเบียนหลักสูตร และรับทราบว่า หากจะยกเลิกการลงทะเบียน ต้องแจ้งทางผู้จัดหลักสูตร อย่างน้อย 7 วันก่อนวันอบรมจึงจะได้รับเงินค่าเรียนคืนเต็มจำนวน  ข้าพเจ้ายินยอมที่จะเสียอัตราค่าเรียนเต็มจำนวนหากไม่ได้เข้าเรียนและไม่ได้แจ้งยกเลิกล่วงหน้าก่อนวันเรียน อย่างน้อย 7 วัน
        </div>
    </div>
    <button class="tg-theme-btn tg-theme-btn-lg" type="submit">ลงทะเบียนสัมมนา</button>
</form>


<script type="text/javascript">
    $(document).ready(function () {
        $("#regisMoreThan1User").hide();
        $("#loadMoreUser").load("moreUserTbl.php");
        $("#isSameAddress").click(function () {
            if ($("#isSameAddress").is(":checked")) {
                $("#addressForReceipt").val("");
                $("#addressForReceipt").attr("readonly", "true");
            } else {
                $("#addressForReceipt").removeAttr("readonly");
            }
        });

        $("#registerOwn").click(function () {
            if ($("#registerOwn").is(":checked")) {
                $.ajax({
                    url: "../model/com.gogetrich.function/SaveAdditionalUserToTmp.php?name=<?php
            if (isset($_SESSION['userId'])) {
                echo $rowGetUserInfo['CUS_FIRST_NAME'] . " " . $rowGetUserInfo['CUS_LAST_NAME'];
            } else {
                echo '';
            }
            ?>&email=<?php
            if (isset($_SESSION['userId'])) {
                echo $rowGetUserInfo['CUS_EMAIL'];
            } else {
                echo '';
            }
            ?>&phone=<?php
            if (isset($_SESSION['userId'])) {
                echo $rowGetUserInfo['CUS_PHONE_NUMBER'];
            } else {
                echo '';
            }
            ?>",
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
            } else {
                deleteTmpFromCheckBox();
            }

        });
        $("#registerMore").click(function () {
            if ($("#registerMore").is(":checked")) {
                $("#regisMoreThan1User").show();
            } else {
                $("#regisMoreThan1User").hide();
                $("#moreUser_1").val("");
                $("#moreUserEmail_1").val("");
                $("#phone_number_1").val("");
            }
        });

        runSetDefaultValidation();
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

            },
            invalidHandler: function (event, validator) {//display error alert on form submit
                errorHandlers.show();
            }
        });
    });
    function deleteMoreUserTmp(tmpID) {
        checkMoreTmpIsMain(tmpID);
        $.ajax({
            url: "../model/com.gogetrich.function/deleteTmpAddMoreUser.php?tmpID=" + tmpID,
            type: 'POST',
            success: function (data, textStatus, jqXHR) {
                if (data == 200) {
                    $("#loadMoreUser").load("moreUserTbl.php", function () {

                    });
                } else {
                    alert(data);
                }
            }
        });
    }
    function checkMoreTmpIsMain(tmpID) {
        $.ajax({
            url: "../model/com.gogetrich.function/checkMoreTmpIsMain.php?tmpID=" + tmpID,
            type: 'POST',
            success: function (data, textStatus, jqXHR) {
                if (data == 200) {
                    $("#registerOwn").attr("checked", false);
                } else {
                    console.log(data);
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                return false;
            }
        });
    }
    function deleteTmpFromCheckBox() {
        $.ajax({
            url: "../model/com.gogetrich.function/deleteOwnInTmp.php?name=<?php
            if (isset($_SESSION['userId'])) {
                echo $rowGetUserInfo['CUS_FIRST_NAME'] . " " . $rowGetUserInfo['CUS_LAST_NAME'];
            } else {
                echo '';
            }
            ?>&email=<?php
            if (isset($_SESSION['userId'])) {
                echo $rowGetUserInfo['CUS_EMAIL'];
            } else {
                echo '';
            }
            ?>",
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
    function validateEmail($email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        return emailReg.test($email);
    }
    function validatePhone($phone) {
        var phoneReg = /[0-9 -()+]+$/;
        return phoneReg.test($phone);
    }
    function addMoreRegister() {
        var name = $("#moreUser_1").val();
        var email = $("#moreUserEmail_1").val();
        var phone = $("#phone_number_1").val();
        if (name == "") {
            alert("กรุณาระบุ ชื่อ สกุล");
        } else if (phone == "" || !validatePhone(phone)) {
            alert("กรุณาระบุ เบอร์โทรศัพท์ ให้ถูกต้อง");
        } else if (email == "" || !validateEmail(email)) {
            alert("กรุณาระบุ อีเมล ให้ถูกต้อง");
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
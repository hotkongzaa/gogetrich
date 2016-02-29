<?php
session_start();
require '../model-db-connection/config.php';
$sqlGetCourseHeaderID = "SELECT * FROM GTRICH_COURSE_HEADER WHERE HEADER_ID = '" . $_GET['cname'] . "'";
$res = mysql_query($sqlGetCourseHeaderID);
$rowHeader = mysql_fetch_assoc($res);

if (isset($_SESSION['userIdFrontEnd'])) {
    $sqlgetUserInformation = "SELECT * FROM RICH_CUSTOMER WHERE CUS_ID = '" . $_SESSION['userIdFrontEnd'] . "'";
    $resGetUserInfo = mysql_query($sqlgetUserInformation);
    $rowGetUserInfo = mysql_fetch_assoc($resGetUserInfo);

    $cusEmail = $rowGetUserInfo['CUS_EMAIL'];
    $cusFirstName = $rowGetUserInfo['CUS_FIRST_NAME'];
    $cusLastName = $rowGetUserInfo['CUS_LAST_NAME'];
    $cusPhoneNum = $rowGetUserInfo['CUS_PHONE_NUMBER'];
    $cusContactAddr = $rowGetUserInfo['CUS_CONTACT_ADDRESS'];
}
?>

<form style="padding:20px" id="registerSeminar">
    <div style="overflow: auto;max-height: 450px;">
        <div class="form-group">
            <strong style="font-size: 16px;">ชื่อคอร์ส: </strong> <span style="font-size: 16px;"><?= $rowHeader['HEADER_NAME'] ?></span>
        </div>
        <div class="form-group">
            <strong>เลือกเวลาเรียน *</strong>

            <?php
            $sqlGetSchedule = "SELECT * FROM GTRICH_COURSE_EVENT_DATE_TIME "
                    . "WHERE REF_COURSE_HEADER_ID = '" . $rowHeader['HEADER_ID'] . "' "
                    . "ORDER BY EVENT_CREATED_DATE_TIME ASC";
            $resGetSchedule = mysql_query($sqlGetSchedule);

            while ($rowGetSChedule = mysql_fetch_array($resGetSchedule)) {
                $startDate = explode(" ", $rowGetSChedule['START_EVENT_DATE_TIME'])[0];
                $startTime = explode(" ", $rowGetSChedule['START_EVENT_DATE_TIME'])[1];

                $endDate = explode(" ", $rowGetSChedule['END_EVENT_DATE_TIME'])[0];
                $endTime = explode(" ", $rowGetSChedule['END_EVENT_DATE_TIME'])[1];
                ?>
                <br/>
                <input type="radio" name="courseScheduleSelect" value="<?= $rowGetSChedule['EVENT_ID'] ?>"/> <span>เริ่ม วันที่ <?= $startDate ?> เวลา <?= $startTime ?>น. ถึง วันที่ <?= $endDate ?> เวลา <?= $endTime ?>น.</span>
                <?php
            }
            ?>
        </div>
        <div class="form-group">
            <strong>ลงทะเบียน*&nbsp;&nbsp;</strong>
            <div class="btn-group" >
                <label>
                    <input type="checkbox" id="registerOwn"> ลงทะเบียนให้ตนเอง &nbsp;&nbsp;</label>
                <label id="label_dis"><input type="checkbox" id="registerMore"> ลงทะเบียนให้คนอื่น</label>                
            </div>
        </div>
        <div class="form-group">
            <div id="loadMoreUser" style="margin-top: 10px;"></div>
        </div>
        <div class="form-group" id="regisMoreThan1User">
            <label for="moreUser_1">ชื่อ (First Name)*</label> 
            <input type="text" id="moreFirstName_1" style="padding: 4px 6px 4px 20px !important;"/>
            <label for="moreUser_1">สกุล (Last Name)*</label> 
            <input type="text" id="moreLastName_1" style="padding: 4px 6px 4px 20px !important;"/>
            <label for="phone_number_1" >เบอร์โทรศัพท์ (Phone number)*</label> 
            <input type="text" id="phone_number_1" style="padding: 4px 6px 4px 20px !important;"/>
            <label for="moreUserEmail_1" >อีเมล์ (Email)*</label> 
            <input type="text" id="moreUserEmail_1" style="padding: 4px 6px 4px 20px !important;"/><br/><br/>
            <div id="addMoreRegister"></div>
            <a href="#" class="btn btn-default" onclick="addMoreRegister()">
                เพิ่มผู้สมัคร
            </a>
        </div>

        <div class="form-group">
            <strong>ช่องทางการจ่ายที่เลือก (Payment method) *</strong>
            <br/>
            <!--input type="radio" name="paymentTerm" value="1"> จ่ายเงินสดหน้างาน ในวันแรกของการอบรม-->            
            <input type="radio" name="paymentTerm" value="2"> โอนเงินเข้าบัญชี (ชื่อบัญชี "บจ. เอสอี ทอล์ค" ธนาคารกรุงเทพ เลขที่บัญชี 021-7-08688-3, กรุณาส่งสำเนาหลักฐานการโอนเงินมาที่ pinhatai.d@gmail.com)
        </div>
        <div class="form-group">                                                
            <label>ที่อยู่ (เพื่อออกใบเสร็จรับเงิน)</label>&nbsp; 
            <input type="checkbox" id="isSameAddress" value="true" name="isSameAddress" >  เช่นเดียวกับที่อยู่ของสมาชิก
        </div>
        <div class="form-group" id="divForAddressContact">
            <textarea name="addressForContact" id="addressForContact" cols="20" style="height: 150px; padding: 4px 6px 4px 20px !important;"></textarea>
        </div>
        <div class="form-group">
            <label for="addressForReceipt">หากใช้ที่อยู่ที่แตกต่าง กรุณากรอกข้อมูล</label>
            <textarea name="addressForReceipt" id="addressForReceipt" cols="20" style="height: 150px; padding: 4px 6px 4px 20px !important;"></textarea>
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
            <input type="checkbox" name="confirmRegister" id="confirmRegister">  ข้าพเจ้าขอยืนยันการลงทะเบียน และรับทราบว่า หากจะยกเลิกการลงทะเบียน ต้องแจ้งทางผู้จัดหลักสูตร อย่างน้อย 7 วันก่อนวันอบรมจึงจะได้รับเงินค่าเรียนคืนเต็มจำนวน  ข้าพเจ้ายินยอมที่จะเสียอัตราค่าเรียนเต็มจำนวนหากไม่ได้เข้าเรียนและไม่ได้แจ้งยกเลิกล่วงหน้าก่อนวันเรียน อย่างน้อย 7 วัน
        </div>
    </div>
    <button class="tg-theme-btn tg-theme-btn-lg" type="button" id="registerCourseBtn">ลงทะเบียนสัมมนา</button>
</form>


<script type="text/javascript">
    $(document).ready(function () {
        $("#divForAddressContact").hide();
        $("#regisMoreThan1User").hide();
        $("#loadMoreUser").load("moreUserTbl.php");
        $("#isSameAddress").click(function () {
            if ($("#isSameAddress").is(":checked")) {
                $("#divForAddressContact").show();
                $("#addressForContact").html('<?= $cusContactAddr ?>');
                $("#addressForReceipt").val("");
                $("#addressForReceipt").attr("readonly", "true");
            } else {
                $("#addressForReceipt").removeAttr("readonly");
                $("#divForAddressContact").hide();
                $("#addressForContact").html('<?= $cusContactAddr ?>');
            }
        });
        $("#registerOwn").click(function () {
            if ($("#registerOwn").is(":checked")) {
                //Very duplicate in temp table
                $.ajax({
                    url: "../model/com.gogetrich.function/verifyUserExistingIntmpTbleByEmail.php?email=<?= $cusEmail ?>",
                    type: 'POST',
                    success: function (isDuplicate, textStatus, jqXHR) {
                        if (isDuplicate == 409) {
                            showWarningNotficationDialog("อีเมลนี้ได้ถูกใช้ในการลงทะเบียนเรียบร้อยแล้ว");
                        } else {
                            $.ajax({
                                url: "../model/com.gogetrich.function/SaveAdditionalUserToTmp.php?fName=<?= $cusFirstName ?>&lName=<?= $cusLastName ?>&email=<?= $cusEmail ?>&phone=<?= $cusPhoneNum ?>&isOwner=true",
                                type: 'POST',
                                success: function (data, textStatus, jqXHR) {
                                    if (data == 200) {
                                        $("#loadMoreUser").load("moreUserTbl.php");
                                    } else {
                                        showWarningNotficationDialog(data)
                                    }
                                    $("#moreFirstName_1").val("");
                                    $("#moreLastName_1").val("");
                                    $("#moreUserEmail_1").val("");
                                    $("#phone_number_1").val("");
                                }
                            });
                        }
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
                $("#moreFirstName_1").val("");
                $("#moreLastName_1").val("");
                $("#moreUserEmail_1").val("");
                $("#phone_number_1").val("");
            }
        });
        $("#registerCourseBtn").click(function () {
            var seminarDiscount = "";
            $('input[name="seminarDiscount"]:checked').each(function () {
                seminarDiscount += this.value + "||";
            });
            var paymentTerm = $('input:radio[name=paymentTerm]').filter(":checked").val();
            var timeSchedule = $('input:radio[name=courseScheduleSelect]').filter(":checked").val();
            var isSameAddress = $("#isSameAddress").val();
            var addressForReceipt = $("#addressForReceipt").val();

            $.ajax({
                url: "../model/com.gogetrich.function/checkIsRegister.php",
                type: 'POST',
                success: function (data, textStatus, jqXHR) {
                    if (typeof (timeSchedule) === "undefined" && data <= 0 && typeof (paymentTerm) === "undefined" && !$("#confirmRegister").is(":checked")) {
                        showWarningNotficationDialog("<ul><li>กรุณาเลือกเวลาเรียน</li><li>กรุณาเลือกเงื่อนไขการลงทะเบียน</li><li>กรุณาเลือกช่องทางการจ่ายเงิน</li><li>กรุณายืนยันการลงทะเบียน</li></ul>");
                    } else if (typeof (timeSchedule) === "undefined") {
                        showWarningNotficationDialog("กรุณาเลือกเวลาเรียน");
                    } else if (data <= 0) {
                        showWarningNotficationDialog("กรุณาเลือกเงื่อนไขการลงทะเบียน");
                    } else if (typeof (paymentTerm) === "undefined") {
                        showWarningNotficationDialog("กรุณาเลือกช่องทางการจ่ายเงิน");
                    } else if (!$("#confirmRegister").is(":checked")) {
                        showWarningNotficationDialog("กรุณายืนยันการลงทะเบียน");
                    } else {
                        $.ajax({
                            url: "../model/com.gogetrich.function/CheckAndSaveEnrollment.php",
                            type: 'POST',
                            data: {'isSameAddress': isSameAddress, 'contactAddress': '<?= $cusContactAddr ?>', 'addressForReceipt': addressForReceipt, 'courseID': '<?= $_GET['cname'] ?>', 'paymentTerm': paymentTerm, 'seminarDiscount': seminarDiscount},
                            success: function (data, textStatus, jqXHR) {
                                if (data == 200) {
                                    $.ajax({
                                        url: "../model/com.gogetrich.function/getEventDt.php?id=" + timeSchedule,
                                        type: 'POST',
                                        success: function (eventDt, textStatus, jqXHR) {
                                            showSuccessNotficationDialog("<strong>ท่านลงทะเบียนสำเร็จแล้ว</strong><br/><strong>หลักสูตร:</strong> <?= $rowHeader['HEADER_NAME'] ?><br/><strong>ในวันที่:</strong> " + eventDt + "<br/> ขอบคุณค่ะ", "scheduleDetail?cname=<?= $_GET['cname'] ?>");
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

    });

    function deleteMoreUserTmp(tmpID) {
        $.ajax({
            url: "../model/com.gogetrich.function/checkMoreTmpIsMain.php?tmpID=" + tmpID,
            type: 'POST',
            success: function (data, textStatus, jqXHR) {
                if (data == 200) {
                    $("#registerOwn").attr("checked", false);

                    $.ajax({
                        url: "../model/com.gogetrich.function/deleteTmpAddMoreUser.php?tmpID=" + tmpID,
                        type: 'POST',
                        success: function (data2, textStatus, jqXHR) {
                            if (data2 == 200) {
                                $("#loadMoreUser").load("moreUserTbl.php");
                            } else {
                                showWarningNotficationDialog(data2);
                            }
                        }
                    });
                } else {
                    if (data == 111) {
                        $.ajax({
                            url: "../model/com.gogetrich.function/deleteTmpAddMoreUser.php?tmpID=" + tmpID,
                            type: 'POST',
                            success: function (data2, textStatus, jqXHR) {
                                if (data2 == 200) {
                                    $("#loadMoreUser").load("moreUserTbl.php");
                                } else {
                                    showWarningNotficationDialog(data2);
                                }
                            }
                        });
                    } else {
                        showWarningNotficationDialog(data);
                    }

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
            if (isset($_SESSION['userIdFrontEnd'])) {
                echo $rowGetUserInfo['CUS_FIRST_NAME'] . " " . $rowGetUserInfo['CUS_LAST_NAME'];
            } else {
                echo '';
            }
            ?>&email=<?php
            if (isset($_SESSION['userIdFrontEnd'])) {
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
        var firtName = $("#moreFirstName_1").val();
        var lastName = $("#moreLastName_1").val();
        var email = $("#moreUserEmail_1").val();
        var phone = $("#phone_number_1").val();

        if (firtName == "" && lastName == "" && phone == "" && !validatePhone(phone) && email == "" && !validateEmail(email)) {
            showWarningNotficationDialog("<li>กรุณาระบุ ชื่อ สกุล ของผู้สมัครท่านอื่น</li><li>กรุณาระบุ เบอร์โทรศัพท์ ให้ถูกต้อง (กรุณาระบุเป็นตัวเลขเท่านั้น)</li><li>กรุณาระบุ อีเมล ให้ถูกต้อง</li>");
        } else if (firtName == "") {
            showWarningNotficationDialog("กรุณาระบุ ชื่อ");
        } else if (lastName == "") {
            showWarningNotficationDialog("กรุณาระบุ สกุล");
        } else if (phone == "" || !validatePhone(phone)) {
            showWarningNotficationDialog("กรุณาระบุ เบอร์โทรศัพท์ ให้ถูกต้อง (กรุณาระบุเป็นตัวเลขเท่านั้น)");
        } else if (email == "" || !validateEmail(email)) {
            showWarningNotficationDialog("กรุณาระบุ อีเมล ให้ถูกต้อง");
        } else {
            //check existing user by email
            $.ajax({
                url: "../model/com.gogetrich.function/verifyUserExistingByEmail.php?email=" + email,
                type: 'POST',
                success: function (data, textStatus, jqXHR) {
                    if (data != 200) {
                        $.ajax({
                            url: "../model/com.gogetrich.function/verifyUserExistingIntmpTbleByEmail.php?email=" + email,
                            type: 'POST',
                            success: function (isDuplicate, textStatus, jqXHR) {
                                if (isDuplicate == 409) {
                                    showWarningNotficationDialog("อีเมลนี้ได้ถูกใช้ในการลงทะเบียนเรียบร้อยแล้ว");
                                } else {
                                    $.ajax({
                                        url: "../model/com.gogetrich.function/verifyEmailEnrollment.php?email=" + email + "&courseID=<?= $rowHeader['HEADER_ID'] ?>",
                                        type: 'POST',
                                        success: function (dataCheckRegistered, textStatus, jqXHR) {
                                            if (dataCheckRegistered == 200) {
                                                $.ajax({
                                                    url: "../model/com.gogetrich.function/SaveAdditionalUserToTmp.php?fName=" + firtName + "&lName=" + lastName + "&email=" + email + "&phone=" + phone + "&isOwner=true",
                                                    type: 'POST',
                                                    success: function (data, textStatus, jqXHR) {
                                                        if (data == 200) {
                                                            $("#loadMoreUser").load("moreUserTbl.php");
                                                        } else {
                                                            alert(data);
                                                        }
                                                        $("#moreFirstName_1").val("");
                                                        $("#moreLastName_1").val("");
                                                        $("#moreUserEmail_1").val("");
                                                        $("#phone_number_1").val("");
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
                    } else {
                        //Very duplicate in temp table
                        $.ajax({
                            url: "../model/com.gogetrich.function/verifyUserExistingIntmpTbleByEmail.php?email=" + email,
                            type: 'POST',
                            success: function (isDuplicate, textStatus, jqXHR) {
                                if (isDuplicate == 409) {
                                    showWarningNotficationDialog("อีเมลนี้ได้ถูกใช้ในการลงทะเบียนเรียบร้อยแล้ว");
                                } else {
                                    //Save additional User to tmp table with isOwner equal to false
                                    $.ajax({
                                        url: "../model/com.gogetrich.function/SaveAdditionalUserToTmp.php?fName=" + firtName + "&lName=" + lastName + "&email=" + email + "&phone=" + phone + "&isOwner=false",
                                        type: 'POST',
                                        success: function (data, textStatus, jqXHR) {
                                            if (data == 200) {
                                                $("#loadMoreUser").load("moreUserTbl.php");
                                            } else {
                                                alert(data);
                                            }
                                            $("#moreFirstName_1").val("");
                                            $("#moreLastName_1").val("");
                                            $("#moreUserEmail_1").val("");
                                            $("#phone_number_1").val("");
                                        }
                                    });
                                }
                            }
                        });
                    }
                }
            });
        }
    }
</script>
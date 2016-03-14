<?php
session_start();
require '../model-db-connection/config.php';
$sqlGetCourseHeaderID = "SELECT * FROM GTRICH_COURSE_HEADER WHERE HEADER_ID = '" . $_GET['cname'] . "'";
$res = mysql_query($sqlGetCourseHeaderID);
$rowHeader = mysql_fetch_assoc($res);
?>

<form style="padding:20px" id="registerSeminar">
    <div style="overflow: auto; max-height: 500px;">
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
            <label for="signInAsMemeber" class="btn btn-default" style="margin-top: 10px;">
                <span class="fa fa-user"></span> ลงทะเบียนแบบสมาชิก
            </label>
            <br/><br/>
        </div>
        <div class="form-group">
            <div id="loadMoreUser" style="margin-top: 10px;"></div>
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
                เพิ่มผู้สมัคร
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
            <strong style="font-size: 18px;">ยืนยันการลงทะเบียน *</strong>
            <br/>
            <input type="checkbox" name="confirmRegister" id="confirmRegister">  ข้าพเจ้าขอยืนยันการลงทะเบียน และรับทราบว่า หากจะยกเลิกการลงทะเบียน ต้องแจ้งทางผู้จัดหลักสูตร อย่างน้อย 7 วันก่อนวันอบรมจึงจะได้รับเงินค่าเรียนคืนเต็มจำนวน  ข้าพเจ้ายินยอมที่จะเสียอัตราค่าเรียนเต็มจำนวนหากไม่ได้เข้าเรียนและไม่ได้แจ้งยกเลิกล่วงหน้าก่อนวันเรียน อย่างน้อย 7 วัน
        </div>
    </div>
    <button class="tg-theme-btn tg-theme-btn-lg" type="button" id="registerCourseBtn">ลงทะเบียนสัมมนา</button>
</form>
<script type="text/javascript">
    $(document).ready(function () {
        initialPage();
    });
    function initialPage() {
        //Loading registration table into Div
        $.ajax({
            url: "moreUserTbl.php",
            type: 'POST',
            success: function (data, textStatus, jqXHR) {
                $("#loadMoreUser").html(data);
            }
        });
    }
</script>


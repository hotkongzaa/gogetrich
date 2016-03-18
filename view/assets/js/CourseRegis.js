/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function addMoreRegister(headerId, courseId) {
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
//                        url: "../model/com.gogetrich.function/verifyEmailEnrollment.php?email=" + email + "&courseID=<?= $rowHeader['HEADER_ID'] ?>",
                        url: "../model/com.gogetrich.function/verifyEmailEnrollment.php?email=" + email + "&courseID=" + headerId,
                        type: 'POST',
                        success: function (dataCheckRegistered, textStatus, jqXHR) {
                            if (dataCheckRegistered == 200) {
                                $.ajax({
                                    url: "../model/com.gogetrich.function/SaveAdditionalUserToTmp.php?isSameAddress=" + isSameAddress + "&fName=" + firtName + "&lName=" + lastName + "&email=" + email + "&phone=" + phone + "&isOwner=false&addressForReceipt=" + addressForReceipt + "&addressForContact=" + addressForContact,
                                    type: 'POST',
                                    success: function (data, textStatus, jqXHR) {
                                        if (data == 200) {
                                            $("#loadMoreUser").load("moreUserTbl.php?courseId=" + courseId, function () {
                                                $('html,body').animate({
                                                    scrollTop: $("#loadMoreUser").offset().top
                                                });
                                            });
                                            $("#addMoreRegisLab").toggle();
                                            $("#regisMoreThan1User").toggle();
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
function initialPageRegisCourse(cid, fpage) {
    $("#addMoreRegisLab").hide();
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
            submitLogin(form, cid, fpage);
        },
        invalidHandler: function (event, validator) {//display error alert on form submit
            errorHandler.show();
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
function submitLogin(form, cid, fPage) {
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
                window.location = 'registrationCourse?cId=' + cid + '&fPage=' + fPage;
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
function deleteMoreUserTmp(tmpID, courseId) {
    $.ajax({
        url: "../model/com.gogetrich.function/deleteTmpAddMoreUser.php?tmpID=" + tmpID,
        type: 'POST',
        success: function (data2, textStatus, jqXHR) {
            if (data2 == 200) {
                $.ajax({
                    url: "../model/com.gogetrich.function/checkIsRegister.php",
                    type: 'POST',
                    beforeSend: function (xhr) {
                        $(".preloader").show();
                    },
                    success: function (data, textStatus, jqXHR) {
                        $(".preloader").fadeOut("slow");
                        if (data > 0) {
                            $("#loadMoreUser").load("moreUserTbl.php?courseId=" + courseId);
                            $('html,body').animate({
                                scrollTop: $("#loadMoreUser").offset().top
                            });
                            $("#regisMoreThan1User").hide();
                            $("#addMoreRegisLab").show();
                        } else {
                            $("#loadMoreUser").empty();
                            $("#regisMoreThan1User").show();
                            $("#addMoreRegisLab").hide();
                            $('html,body').animate({
                                scrollTop: $("#regisMoreThan1User").offset().top
                            });
                        }
                    }
                });

            } else {
                showWarningNotficationDialog(data2);
            }
        }
    });
}
function resetForm() {
    $("#moreFirstName_1").val("");
    $("#moreLastName_1").val("");
    $("#moreUserEmail_1").val("");
    $("#phone_number_1").val("");
    $("#addressForReceipt").val("");
    $("#addressForContact").val("");
    $("#isSameAddress").prop("checked", false);
    $("#addressForReceipt").removeClass("blockTextArea");

    $('html,body').animate({
        scrollTop: $("#loadMoreUser").offset().top
    });
}
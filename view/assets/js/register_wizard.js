/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


wizard = {
    validation: function (courseId) {
        $('#courseRegistered').stepy({
            nextLabel: '<a href="javascript:void(0)" class="btn btn-default btn-sm">ต่อไป <i class="fa fa-chevron-right" aria-hidden="true"></i></a>',
            backLabel: '<a href="javascript:void(0)" class="btn btn-default btn-sm"><i class="fa fa-chevron-left" aria-hidden="true"></i> ย้อนกลับ</a>',
            block: true,
            errorImage: true,
            titleClick: false,
            validate: true,
            finishButton: false,
            next: function (step) {
                switch (step) {
                    case 1:

                        break;
                    case 2:
                        $("#courseRegistered-next-1").html('<a href="javascript:void(0)" class="btn btn-default btn-sm">ลงทะเบียนแบบไม่ใช่สมาชิก <i class="fa fa-chevron-right" aria-hidden="true"></i></a>');

                        var timeSchedule = $('input:radio[name=courseScheduleSelect]').filter(":checked").val();
                        var paymentTerm = $('input:radio[name=paymentTerm]').filter(":checked").val();
                        if (typeof (timeSchedule) == "undefined") {
                            showWarningNotficationDialog("กรุณาเลือกเวลาเรียน");
                            $('#courseRegistered').stepy('destroy');
                        } else if (typeof (paymentTerm) == "undefined") {
                            showWarningNotficationDialog("กรุณาเลือกช่องทางการจ่ายเงิน");
                            $('#courseRegistered').stepy('destroy');
                        } else {
                            $.ajax({
                                url: "../model/com.gogetrich.function/getSessionEmail.php",
                                type: 'POST',
                                beforeSend: function (xhr) {
                                    $(".preloader").show();
                                },
                                success: function (data, textStatus, jqXHR) {
                                    $(".preloader").fadeOut("slow");
                                    if (data != "" && data != null) {
                                        $.ajax({
                                            url: "../model/com.gogetrich.function/verifyUserExistingIntmpTbleByEmail.php?email=" + data,
                                            type: 'POST',
                                            beforeSend: function (xhr) {
                                                $(".preloader").show();
                                            },
                                            success: function (isDuplicate, textStatus, jqXHR) {
                                                $(".preloader").fadeOut("slow");
                                                if (isDuplicate == 409) {
                                                    //Assign if there are user exist in temp table
                                                    $('#courseRegistered').stepy('step', 3);
                                                    resetForm();

                                                } else if (isDuplicate == 505) {
                                                    showSuccessNotficationDialog("เกิดข้อผิดพลาดระหว่างการทำงาน<br/>กรุณากดลงทะเบียนใหม่อีกครั้งค่ะ", "scheduleDetail?cname=" + courseId);
                                                } else {
                                                    //GO to step 3 with fill data
                                                    $.ajax({
                                                        url: "../model/com.gogetrich.function/getUserSessionDetail.php",
                                                        type: 'POST',
                                                        beforeSend: function (xhr) {
                                                            $(".preloader").show();
                                                        },
                                                        success: function (data, textStatus, jqXHR) {
                                                            $(".preloader").fadeOut("slow");
                                                            $('#courseRegistered').stepy('step', 3);
                                                            var resData = data.split(":");
                                                            var fName = resData[1].split("||")[0];
                                                            var lName = resData[1].split("||")[1];
                                                            var phone = resData[1].split("||")[2];
                                                            var email = resData[1].split("||")[3];
                                                            var contactAddr = resData[1].split("||")[4];
                                                            var receiptAddr = resData[1].split("||")[5];
                                                            $("#moreFirstName_1").val(fName);
                                                            $("#moreLastName_1").val(lName);
                                                            $("#phone_number_1").val(phone);
                                                            $("#addressForContact").val(contactAddr);
                                                            $("#moreUserEmail_1").val(email);
                                                            $("#addressForReceipt").val(receiptAddr);
                                                            $("#login-modal").modal('toggle');
                                                            $("#loginForGetRes").trigger('reset');
                                                        }
                                                    });

                                                }
                                            }
                                        });
                                    } else {
                                        console.log(data);
                                        $('#courseRegistered').stepy('step', 2);
                                    }
                                }
                            });
                        }
                        break;
                    case 3:
                        var timeSchedule = $('input:radio[name=courseScheduleSelect]').filter(":checked").val();
                        var paymentTerm = $('input:radio[name=paymentTerm]').filter(":checked").val();
                        if (typeof (timeSchedule) == "undefined") {
                            showWarningNotficationDialog("กรุณาเลือกเวลาเรียน");
                            $('#courseRegistered').stepy('destroy');
                        } else if (typeof (paymentTerm) == "undefined") {
                            showWarningNotficationDialog("กรุณาเลือกช่องทางการจ่ายเงิน");
                            $('#courseRegistered').stepy('destroy');
                        }
                        break;
                    case 4:
                        var timeSchedule = $('input:radio[name=courseScheduleSelect]').filter(":checked").val();
                        var paymentTerm = $('input:radio[name=paymentTerm]').filter(":checked").val();
                        if (typeof (timeSchedule) == "undefined") {
                            showWarningNotficationDialog("กรุณาเลือกเวลาเรียน");
                            $('#courseRegistered').stepy('destroy');
                        } else if (typeof (paymentTerm) == "undefined") {
                            showWarningNotficationDialog("กรุณาเลือกช่องทางการจ่ายเงิน");
                            $('#courseRegistered').stepy('destroy');
                        } else {
                            $.ajax({
                                url: "../model/com.gogetrich.function/checkIsRegisterIncaseRegisterCourse.php",
                                type: 'POST',
                                success: function (data, textStatus, jqXHR) {
                                    if (data <= 0) {
                                        showWarningNotficationDialog("กรุณากรอกข้อมูลการลงทะเบียน");
                                        $('#courseRegistered').stepy('step', 3);
                                    } else {

                                    }
                                }

                            });
                        }

                        break;
                    default :

                        break;
                }
            },
            back: function (step) {
                switch (step) {
                    case 1:

                        break;
                    case 2:
                        resetForm();
                        $.ajax({
                            url: "../model/com.gogetrich.function/getSessionEmail.php",
                            type: 'POST',
                            beforeSend: function (xhr) {
                                $(".preloader").show();
                            },
                            success: function (data, textStatus, jqXHR) {
                                $(".preloader").fadeOut("slow");
                                if (data != "" && data != null) {
                                    $.ajax({
                                        url: "../model/com.gogetrich.function/verifyUserExistingIntmpTbleByEmail.php?email=" + data,
                                        type: 'POST',
                                        beforeSend: function (xhr) {
                                            $(".preloader").show();
                                        },
                                        success: function (isDuplicate, textStatus, jqXHR) {
                                            $(".preloader").fadeOut("slow");
                                            if (isDuplicate == 409) {
                                                $('#courseRegistered').stepy('step', 1);
                                            } else {
                                                $('#courseRegistered').stepy('step', 1);
                                            }
                                        }
                                    });
                                } else {
                                    $('#courseRegistered').stepy('step', 2);
                                }
                            }
                        });

                        break;
                    case 3:

                        break;
                    case 4:

                        break;
                    default :

                        break;
                }
            }
        });
        stepy_validation = $('#courseRegistered').validate({
            onfocusout: false,
            errorPlacement: function (error, element) {
                error.appendTo(element.closest("div.controls"));
            },
            highlight: function (element) {
                $(element).closest("div.control-group").addClass("error f_error");
                var thisStep = $(element).closest('form').prev('ul').find('.current-step');
                thisStep.addClass('error-image');
            },
            unhighlight: function (element) {
                $(element).closest("div.control-group").removeClass("error f_error");
                if (!$(element).closest('form').find('div.error').length) {
                    var thisStep = $(element).closest('form').prev('ul').find('.current-step');
                    thisStep.removeClass('error-image');
                }

            },
            rules: {
//                'courseCate': 'required',
//                'courseName': 'required',
//                'courseStatus': 'required',
//                'courseDuration': 'required'
            }, messages: {
//                'courseCate': {required: 'Please select category!'},
//                'courseName': {required: 'Course Name field is required!'},
//                'courseStatus': {required: 'Course Status field is required!'},
//                'courseDuration': {required: 'Please fill course duration (days)'}
            },
            ignore: ':hidden'
        });
    },
    //* add numbers to step titles
    steps_nb: function () {
        $('.stepy-titles').each(function () {
            $(this).children('li').each(function (index) {
                var myIndex = index + 1
                $(this).append('<span class="stepNb">' + myIndex + '</span>');
            });
        });
    }
};
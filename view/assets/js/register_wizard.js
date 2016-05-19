/* [ ---- Gebo Admin Panel - wizard ---- ] */
wizard = {
    validation: function (step, cId, fPage) {

        $('#courseRegistered').stepy({
            nextLabel: '<a href="javascript:void(0)" class="btn btn-default btn-sm" style="width:80px;">ถัดไป <i class="fa fa-chevron-right" aria-hidden="true"></i></a>',
            next: function (step) {
                switch (step) {
                    case 1:
                        window.location.href = "registrationCourse?cId=" + cId + "&fPage=" + fPage + "&step=" + step;
                        $('#courseRegistered').stepy('destroy');
                        break;
                    case 2:
                        window.location.href = "registrationCourse?cId=" + cId + "&fPage=" + fPage + "&step=" + step;
                        $('#courseRegistered').stepy('destroy');
                        break;
                    case 3:
                        window.location.href = "registrationCourse?cId=" + cId + "&fPage=" + fPage + "&step=" + step;
                        $('#courseRegistered').stepy('destroy');
                        break;
                    case 4:
                        window.location.href = "registrationCourse?cId=" + cId + "&fPage=" + fPage + "&step=" + step;
                        $('#courseRegistered').stepy('destroy');
                        break;
                    default :
                        $('#courseRegistered').stepy('step', 1);
                        $('#courseRegistered').stepy('destroy');
                        break;
                }

            },
            backLabel: '<a href="javascript:void(0)" class="btn btn-default btn-sm" style="width:80px;"><i class="fa fa-chevron-left" aria-hidden="true"></i> ย้อนกลับ</a>',
            back: function (step) {
                switch (step) {
                    case 1:
                        window.location.href = "registrationCourse?cId=" + cId + "&fPage=" + fPage + "&step=" + step;
                        $('#courseRegistered').stepy('destroy');
                        break;
                    case 2:
                        window.location.href = "registrationCourse?cId=" + cId + "&fPage=" + fPage + "&step=" + step;
                        $('#courseRegistered').stepy('destroy');
                        break;
                    case 3:
                        window.location.href = "registrationCourse?cId=" + cId + "&fPage=" + fPage + "&step=" + step;
                        $('#courseRegistered').stepy('destroy');
                        break;
                    case 4:
                        window.location.href = "registrationCourse?cId=" + cId + "&fPage=" + fPage + "&step=" + step;
                        $('#courseRegistered').stepy('destroy');
                        break;
                    default :
                        $('#courseRegistered').stepy('step', 1);
                        $('#courseRegistered').stepy('destroy');
                        break;
                }
            },
            block: true,
            errorImage: true,
            titleClick: false,
            transition: 'slide',
            validate: true,
            finishButton: false
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
        $('#courseRegistered').stepy('step', step);
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
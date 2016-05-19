/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


wizard = {
    validation: function (step, cid, fpage) {
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
                        break;
                    case 3:
                        break;
                    case 4:
                        break;
                }
            },
            back: function (step) {
                switch (step) {
                    case 1:
                        break;
                    case 2:
                        break;
                    case 3:
                        break;
                    case 4:
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
                'courseCate': 'required',
                'courseName': 'required',
                'courseStatus': 'required',
                'courseDuration': 'required'
//                'availableSeat': 'required'
            }, messages: {
                'courseCate': {required: 'Please select category!'},
                'courseName': {required: 'Course Name field is required!'},
                'courseStatus': {required: 'Course Status field is required!'},
                'courseDuration': {required: 'Please fill course duration (days)'}
//                'availableSeat': {required: 'Please fill available seats'}
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
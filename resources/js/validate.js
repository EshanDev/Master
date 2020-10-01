require('./bootstrap');

//Disable Enter Key
$('form').bind("keypress", function(e) {
    if (e.keyCode == 13) {
        return false;
    }
});


// get base url
let getUrl = window.location,
    baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
//console.log("this is a "+baseUrl + "/verify_email");
// Validation
//For Conditions System.




const condition = document.getElementById('conditions_form');
$(condition).validate({
    rules: {
        student_code: {
            required: true,
            number: true,
            maxlength: 10,
            minlength: 10,
            remote: {
                url: baseUrl + "/verify_student_code",
                type: "get",
            }
        },
        student_email: {
            required: true,
            email: true,
            remote: {
                url: baseUrl + "/verify_email",
                type: "get",
            }
        }
    },
    messages: {
        student_code: {
            required: "กรุณากรอกรหัสนักศึกษา",
            number: "รูปแบบรหัสผ่านไม่ถูกต้อง",
            maxlength: "รูปแบบรหัสผ่านไม่ถูกต้อง",
            minlength: "รูปแบบรหัสผ่านไม่ถูกต้อง",
            remote: "รหัสนักศึกษานี้ได้ลงทะเบียนแล้ว",
        },
        student_email: {
            required: "กรุณากรอกที่อยู่อีเมล์",
            remote: "อีเมล์นี้ได้ลงทะเบียนไว้แล้ว",
        },


    },

});



// Validator for registration system
const registration = document.getElementById('registration_form');
$(registration).validate({
    rules: {
        student_code: {
            required: true,
            number: true,
            maxlength: 10,
            minlength: 10,
            remote: {
                url: baseUrl + "/verify_student_code",
                type: "get",
            }
        },
        student_email: {
            required: true,
            email: true,
            remote: {
                url: baseUrl + "/verify_email",
                type: "get",
            }
        },
        student_name: {
            required: true,
        },
        student_branch: {
            required: true,
        },
        student_faculty: {
            required: true,
        },
        password: {
            required: true,
        },

        password_confirmation: {
            required: true,
            equalTo: "#password",
        },

        registration_code: {
            required: true,
            remote: {
                url: baseUrl + "/verify_reg_code",
                type: 'get',
            }
        },
        name: {
            required: true,
        },
    },
    messages: {
        student_name: {
            required: "กรุณากรอกข้อมูล",

        },
        student_branch: {
            required: "กรุณากรอกข้อมูล",
        },
        student_faculty: {
            required: "กรุณากรอกข้อมูล",
        },
        password: {
            required: "กรุณาระบุรหัสผ่าน",
        },

        password_confirmation: {
            required: "ระบุรหัสผ่านอีกครั้ง",
            equalTo: "รหัสผ่านไม่ตรงกัน",
        },
        registration_code: {
            required: "กรุณากรอกรหัสลงทะเบียน",
            remote: 'รหัสลงทะเบียนไม่ถูกต้อง',
        },
        student_email: {
            required: "กรุณากรอกอีเมล์",
            remote: 'อีเมล์ไม่ถูกต้อง',
        },
        student_code: {
            required: "กรุณากรอกรหัสนักศึกษา",
            remote: 'รหัสนักศึกษาไม่ถูกต้อง',
        },
        name: {
            required: "กรุณาตั้งชื่อผู้ใช้งาน",
        },

    },
    success: function(label) {
        if (label.attr('for') == "registration_code") {
            let element = '#' + label.attr('for');
            label.html("<span class='success-message'>รหัสลงทะเบียนถูกต้อง <i class='fa fa-check' aria-hidden='true'></i></span>");
        } else {
            label.parent().removeClass('error');
            label.remove();
        }

    },

});



// Verify Registration Code
const registration_code = document.getElementById('verify_form');
$(registration_code).validate({
    rules: {
        registration_code: {
            required: true,
            remote: {
                url: baseUrl + "/verify_reg_code",
                type: 'get',
            }
        }
    },
    messages: {
        registration_code: {
            required: 'กรุณากรอกรหัสลงทะเบียน',
            remote: 'รหัสลงทะเบียนไม่ถูกต้อง',
        }
    },
    success: function(label) {
        let name = label.attr('for');
        label.html("<span class='success-message'>รหัสลงทะเบียนถูกต้อง <i class='fa fa-check' aria-hidden='true'></i></span>");
    },



});







// Jquery Fomatter
$('.serials').mask('AAAAA-BBBBB-CCCCC-DDDDD', {
    'translation': {
        A: {
            pattern: /[A-Za-z0-9]/
        },
        B: {
            pattern: /[A-Za-z0-9]/
        },
        C: {
            pattern: /[A-Za-z0-9]/
        },
        D: {
            pattern: /[A-Za-z0-9]/
        },

    }
});
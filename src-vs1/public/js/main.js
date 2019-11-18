
// $('.bay').click(function() {
//     sanpham.style.display = 'flex';
//     ve.style.display = 'none';
//     $(".bay").addClass("hide-1");
//     $(".ve-1").removeClass("hide-2");
//     $(".show-1").addClass("active");
//     $(".show-1").addClass("active");
//     $(".show-2").removeClass("active");
// })
// $('.ve-1').click(function() {
//     ve.style.display = 'flex';
//     sanpham.style.display = 'none';
//     $(".ve-1").addClass("hide-2");
//     $(".bay").removeClass("hide-1");
//     $(".show-2").addClass("active");
//     $(".show-1").removeClass("active");
// })
function chitietcb(id){
    var sanpham = document.getElementById('detail-fight'+id+'');
    var ve = document.getElementById("ticker"+id+"");
    sanpham.style.display = 'flex';
    ve.style.display = 'none';
    $("#idfight"+id+"").addClass("hide-1");
    $("#iddetail"+id+"").removeClass("hide-2");
    $(".show-1").addClass("active");
    $(".show-1").addClass("active");
    $(".show-2").removeClass("active");
}
function chitietve(id){
    var sanpham = document.getElementById('detail-fight'+id+'');
    var ve = document.getElementById("ticker"+id+"");
    ve.style.display = 'flex';
    sanpham.style.display = 'none';
    $("#iddetail"+id+"").addClass("hide-2");
    $("#idfight"+id+"").removeClass("hide-1");
    $(".show-2").addClass("active");
    $(".show-1").removeClass("active");
}
var x = document.getElementById("datepicker-to");
x.disabled = true;
x.style.background = '#CFCFCF';
$('#customRadioInline1').click(function() {
    x.disabled = true;
    x.style.background = '#CFCFCF';
    $('#datepicker-to').val("");
})
$('#customRadioInline2').click(function() {
    x.disabled = false;
    x.style.background = 'white';
})
var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();
today = yyyy + '-' + mm + '-' + dd;

$(function() {
    $("#datepicker").datepicker({
        'format': 'yyyy-mm-dd'
    });
    $("#datepicker").val(today);

    $("#datepicker-to").datepicker({
        'format': 'yyyy-mm-dd'
    });
});

function minusform(id) {
    var x = $('#' + id + '').val();
    x = parseInt(x);
    if (x > 1) {
        x = x - 1;
        $('#' + id + '').val(x);
    } else {
        $('#' + id + '').val(1);
    }
}

function plusform(id) {
    var x = $('#' + id + '').val();
    x = parseInt(x);
    x = x + 1;
    $('#' + id + '').val(x);
}

function testkey(id) {
    var x = $("#" + id + "").val();
    if (isNaN(x)) {
        $("#" + id + "").val(1);
    } else {
        $("#" + id + "").val(x);
    }

}

function getValue(v) {
    return document.forms['sign_up'][v].value;
}

function set_alert(x) {
    var id = "";
    var id = "#alert_" + x;
    if (x == 0) {
        $(id).text("Tên tài khoản không hợp lệ");
    }
    if (x == 1) {
        $(id).text("Mật khẩu phải từ 6 kí tự trở lên");
    }
    if (x == 2) {
        $(id).text("Mật khẩu phải từ 6 kí tự trở lên");
    }
    if (x == 3) {
        $(id).text("Email không hợp lệ");
    }
    if (x == 4) {
        $(id).text("Địa chỉ không hợp lệ");
    }
}

function set_alert_default(x) {
    var id = "";
    var id = "#alert_" + x;
    if (x == 0) {
        $(id).text("");
    }
    if (x == 1) {
        $(id).text("");
    }
    if (x == 2) {
        $(id).text("");
    }
    if (x == 3) {
        $(id).text("");
    }
    if (x == 4) {
        $(id).text("");
    }
}

function check_pass(x, y) {
    if (x != y) {
        $("#alert_2").text("Mật khẩu không khớp");
    }

}

function check_sign_up() {
    var p1 = /^[\w]+$/gi;
    var p2 = /^[0-9a-zA-z]{6,}$/gi;
    var p3 = /^[0-9a-zA-z]{6,}$/gi;
    var p4 = /^[\w]+$/gi;
    var p5 = /^[\w]+$/gi;
    var p6 = /\W/gi;
    var pe = /^[a-z][a-z0-9_\.]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$/gi;

    var flag = 1;

    if (p1.test(getValue('username')) == false) {
        set_alert(0);
        flag = 0;
    } else set_alert_default(0);

    if (p2.test(getValue('password')) == false) {
        set_alert(1);
        flag = 0;
    } else set_alert_default(1);

    if (p3.test(getValue('repassword')) == false) {
        set_alert(2);
        flag = 0;
    } else set_alert_default(2);

    if (pe.test(getValue('email')) == false) {
        set_alert(3);
        flag = 0;
    } else set_alert_default(3);

    if (getValue('address') == "") {
        set_alert(4);
        flag = 0;
    } else set_alert_default(4);

    if (getValue('password') != getValue('repassword')) {
        $('#alert_1').text("Mật khẩu không khớp!");
        $('#alert_2').text("Mật khẩu không khớp!");
        flag = 0;
    }

    if (flag == 0) return false;

}

function getValueDN(v) {
    return document.forms['sign_in'][v].value;
}


function check_sign_in() {
    var flag = 1;
    var p1 = /^[\w]+$/gi;
    var p2 = /^[0-9a-zA-z]{6,}$/gi;
    if (p1.test(getValueDN('username')) == false) {
        alert("Tài khoản không hợp lệ!!");
        flag = 0;
    }
    if (p2.test(getValueDN('password')) == false) {
        alert("Mật khẩu phải có từ 6 kí tự trở lên");
        flag = 0;
    }
    if (flag == 0) return false;
}

function logout() {
    $.ajax({
        type: "GET",
        url: "./DangNhap/DangXuat"
    }).done(function(data) {
        location.href = "./";
    });
}

function myFunction() {
    var x = document.getElementById("snackbar");
    x.className = "show";

    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 2000);
  }
function phantrang(){
    document.getElementById('pages').innerHTML = '<i class="fa fa-spinner fa-spin"></i>Đang tải';

    

}
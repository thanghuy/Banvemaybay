var sanpham = document.getElementById('detail-fight');
var ve = document.getElementById("ticker");
$('.bay').click(function() {
    sanpham.style.display = 'flex';
    ve.style.display = 'none';
    $(".bay").addClass("hide-1");
    $(".ve-1").removeClass("hide-2");
    $(".show-1").addClass("active");
    $(".show-1").addClass("active");
    $(".show-2").removeClass("active");
})
$('.ve-1').click(function() {
    ve.style.display = 'flex';
    sanpham.style.display = 'none';
    $(".ve-1").addClass("hide-2");
    $(".bay").removeClass("hide-1");
    $(".show-2").addClass("active");
    $(".show-1").removeClass("active");
})

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
    if (p1.test(getValue('username')) == false) set_alert(0);
    else set_alert_default(0);

    if (p2.test(getValue('password')) == false) set_alert(1);
    else set_alert_default(1);

    if (p3.test(getValue('repassword')) == false) set_alert(2);
    else set_alert_default(2);

    if (pe.test(getValue('email')) == false) set_alert(3);
    else set_alert_default(3);

    if (getValue('address') == "") set_alert(4);
    else set_alert_default(4);

    if (getValue('password') != getValue('repassword')) {
        $('#alert_1').text("Mật khẩu không khớp!");
        $('#alert_2').text("Mật khẩu không khớp!");
    }

    return false;

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
        alert("Mật khẩu là chữ cái latinh có từ 6 kí tự trở lên");
        flag = 0;
    }
    if (flag == 0) return false;
}
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
        $(id).text("Mật khẩu không hợp lệ");
    }
    if (x == 2) {
        $(id).text("Mật khẩu không hợp lệ");
    }
    if (x == 3) {
        $(id).text("Email không được để trống");
    }
    if (x == 4) {
        $(id).text("Địa chỉ không được để trống");
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

    if (x == 0) return false;

}
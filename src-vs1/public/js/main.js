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

function alert_dk(x) {
    var id = "";
    var id = "alert_" + x;
    switch (x) {
        case 0:
            $("#" + id).text("Tên tài khoản không được để trống!!");
            $("#" + id).css(text - align, center);
            break;
        case 1:
            $("#" + id).text("Mật khẩu không được để trống!!");
            $("#" + id).css(text - align, center);
            break;
        case 2:
            $("#" + id).text("Mật khẩu không được để trống!!");
            $("#" + id).css(text - align, center);
            break;
        case 3:
            $("#" + id).text("Email được để trống!!");
            $("#" + id).css(text - align, center);
            break;
        case 4:
            $("#" + id).text("Địa chỉ không được để trống!!");
            $("#" + id).css(text - align, center);
            break;
    }
}

function check_sign_up() {
    var dk = new Array(getValue('username'), getValue('password'), getValue('repassword'), getValue('email'), getValue('address'));
    for (var i = 0; i < dk.length; i++) {
        if (dk[i] == "") alert_dk(i);
    }
}
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

function check_null(x) {
    if (x == NULL) {

    }
}

function getValue(v) {
    return document.forms['sign_up'][v].value;
}

function check_sign_up() {
    var dk = new Array(getValue('username'), getValue('password'), getValue('repassword'), getValue('email'), getValue('address'));
    var i = 0;
    while (i < dk.length) {
        alert(dk[i]);
        i++;
    }
}
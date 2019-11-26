$(document).ready(function () {
    var pathname = window.location.href;
    var lastChar = pathname.slice(-1);
    $("#collapse" + lastChar).collapse('show');
});

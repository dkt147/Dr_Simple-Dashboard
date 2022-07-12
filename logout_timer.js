var idleTime = 0;
$(document).ready(function () {
    console.log('timer')

    var n = 6000000;

    $(this).mousemove(function (e) {
        setTimeout(setTitle,  n);
    });

    function setTitle() {
        location.href = "logout.php";
    }



});

function timerIncrement() {
    idleTime = idleTime + 1;
    if (idleTime > 19) { // 20 minutes
        window.location.reload();
    }
}
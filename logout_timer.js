// Set timeout variables.
    var timoutWarning = 3000; // Display warning in 14 Mins.
    var timoutNow = 6000; // Warning has been shown, give the user 1 minute to interact
    var logoutUrl = 'logout.php'; // URL to logout page.

    var warningTimer;
    var timeoutTimer;

    // Start warning timer.
    function StartWarningTimer() {
        warningTimer = setTimeout("IdleWarning()", timoutWarning);

        alert('start warning timer')
    }

    // Reset timers.
    function ResetTimeOutTimer() {
        clearTimeout(timeoutTimer);
        StartWarningTimer();
        $("#timeout").dialog('close');

        alert('reset timer')
    }

    // Show idle timeout warning dialog.
    function IdleWarning() {
        clearTimeout(warningTimer);
        timeoutTimer = setTimeout("IdleTimeout()", timoutNow);
        $("#timeout").dialog({
            modal: true
        });
        alert('warning')
        // Add code in the #timeout element to call ResetTimeOutTimer() if
        // the "Stay Logged In" button is clicked
    }

    // Logout the user.
    function IdleTimeout() {
        window.location = logoutUrl;
    }
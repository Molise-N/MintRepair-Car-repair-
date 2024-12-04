<?php
// this page enables only login users to access certain pages
    session_start();
    // Define session timeout (adjust as needed)
    $session_timeout = 3000; // 5 minutes in seconds

    // Check if session has already started and calculate time since last activity
    if (isset($_SESSION['LAST_ACTIVITY'])) {
    $lastActivity = $_SESSION['LAST_ACTIVITY'];
    $currentTime = time();
    $timeSinceLastActivity = $currentTime - $lastActivity;

    // Check if session has timed out
    if ($timeSinceLastActivity > $session_timeout) {
        // Session timed out, destroy session data and redirect
        session_destroy();
        header('Location: logout.php'); // Redi00rect to logout page
        exit;
    }
    }

// Update last activity timestamp (executed on every request)
$_SESSION['LAST_ACTIVITY'] = time();
    if(!isset($_SESSION["email"])) {
        header("Location: index.php");
        exit();
    }
?>
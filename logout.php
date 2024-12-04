<?php
    session_start();
    // Destroy session if user logs out
    if(session_destroy()) {
        // Redirecting To Home Page after user logs out
        header("Location: index.php");
    }
?>

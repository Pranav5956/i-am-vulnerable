<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] !== "POST") {
        header("Location: index.php");
        $_SESSION['status'] = "error";
        $_SESSION['message'] = "Method not supported!";
        die();
    }

    if (!isset($_POST)) {
        header("Location: index.php");
        $_SESSION['status'] = "error";
        $_SESSION['message'] = "Logout failed!";
        die();
    }

    if ($_POST['submit'] !== "Logout") {
        header("Location: index.php");
        $_SESSION['status'] = "error";
        $_SESSION['message'] = "Logout access denied!";
        die();
    }

    header("Location: index.php");
    session_destroy();
    session_start();
    $_SESSION['status'] = "success";
    $_SESSION['message'] = "Logout successful!";
?>
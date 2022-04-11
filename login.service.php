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
        $_SESSION['message'] = "Please provide login credentials!";
        die();
    }

    if ($_POST['submit'] !== "Login") {
        header("Location: index.php");
        $_SESSION['status'] = "error";
        $_SESSION['message'] = "Login access denied!";
        die();
    }

    if (!isset($_POST['username']) || empty($_POST['username'])) {
        header("Location: index.php");
        $_SESSION['status'] = "error";
        $_SESSION['message'] = "Username not provided!";
        die();
    }

    if (!isset($_POST['password']) || empty($_POST['password'])) {
        header("Location: index.php");
        $_SESSION['status'] = "error";
        $_SESSION['message'] = "Password not provided!";
        die();
    }

    // Static authentication
    // username: "user"
    // password: "pass"
    if ($_POST["username"] !== "user") {
        header("Location: index.php");
        $_SESSION['status'] = "error";
        $_SESSION['message'] = "Incorrect Username!";
        die();
    }

    if ($_POST["password"] !== "pass") {
        header("Location: index.php");
        $_SESSION['status'] = "error";
        $_SESSION['message'] = "Incorrect password!";
        die();
    }

    header("Location: dashboard.php");
    $_SESSION['status'] = "success";
    $_SESSION['message'] = "Login successful!";
    $_SESSION['user'] = "user123";
?>
<?php 
    session_start();

    if (isset($_SESSION["user"])) {
        header("Location: dashboard.php");
        die();
    }

    $flash_message_exists = false;
    $flash_message_text = "";
    $flash_message_status = "";

    if (isset($_SESSION["message"])) {
        $flash_message_exists = true;

        $flash_message_text = $_SESSION["message"];
        $flash_message_status = $_SESSION["status"];

        unset($_SESSION["message"]);
        unset($_SESSION["status"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I Am Vulnerable! | by Pranav Balaji</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.min.css" integrity="sha512-I8lSB676wT2jGSNnvIhbYGqHMiZOc0+cl18soJSWPvJCkGm8xnTcXZafn2xTf1woMXz1AY3Z1Vd/qAPvjXB4Kw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <main class="container">
        <header class="banner">
            <h1 class="heading">I am Vulnerable!</h1>
            <p class="lead">This is a vulnerable application built using PHP and can be used for testing brute force intruder attacks, SQL injection, XSS attacks, etc.</p>
        </header>
        <section class="panel">
            <h2 class="panel-heading">Login</h2>

            <?php if ($flash_message_exists) : ?>
                <div class="panel-alert panel-alert-<?= $flash_message_status ?>">
                    <?= $flash_message_text ?>
                </div>
            <?php endif; ?>

            <form class="panel-form" action="login.service.php" method="post">
                <div class="panel-form-control">
                    <input type="text" name="username" id="username" placeholder="username">
                    <i class="panel-form-icon fa fa-user"></i>
                </div>
                <div class="panel-form-control">
                    <input type="text" name="password" id="password" placeholder="password">
                    <i class="panel-form-icon fa fa-lock"></i>
                </div>
                <input class="panel-form-button" type="submit" name="submit" value="Login">
            </form>
        </section>
    </main>
    <footer class="footer">
        <section class="social-links">
            <a href="https://github.com/Pranav5956" class="social-link">
                <i class="fa fa-github"></i>
            </a>
        </section>
    </footer>
</body>
</html>
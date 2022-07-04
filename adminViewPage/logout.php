<?php

session_start();

if (isset($_SESSION['user-email'])) {
    unset($_SESSION['user-email']);
}

header("Location: adminLoginPage.php");
die;

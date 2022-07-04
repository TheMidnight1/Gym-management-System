<?php

session_start();

if (isset($_SESSION['user-email'])) {
    unset($_SESSION['user-email']);
}

header("Location: login.php");
die;

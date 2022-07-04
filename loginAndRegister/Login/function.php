<?php
function check_login($conn)
{
    if (isset($_SESSION['user-email'])) {
        $email = $_SESSION['user-email'];
        $query = "SELECT * FROM registration where email='$email' limit 1";
        $result = mysqli_query($conn, $query);
        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                return $user_data;
            }
        }
    }
    //redirect to login page
    header("Location: ../loginAndRegister/Login/login.php");
    die;
}

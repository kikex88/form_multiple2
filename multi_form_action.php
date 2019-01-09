<?php
if (isset($_POST['submit'])) {
    $email      = mysqli_real_escape_string($conn, $_POST['email']);
    $password   = mysqli_real_escape_string($conn, $_POST['password']);
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name  = mysqli_real_escape_string($conn, $_POST['last_name']);
    $mobile     = mysqli_real_escape_string($conn, $_POST['mobile']);
    $address    = mysqli_real_escape_string($conn, $_POST['address']);
    if (mysqli_query($conn, "INSERT INTO user(email, pass, first_name, last_name, mobile, address) VALUES('" . $email . "', '" . $password . "', '" . $first_name . "', '" . $last_name . "', '" . $mobile . "', '" . $address . "')")) {
        echo "You're Registered Successfully!";
    } else {
        echo "Error in registering...Please try again later!";
    }
}

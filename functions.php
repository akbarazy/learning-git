<?php
$connect = mysqli_connect("localhost", "root", "", "ourlist");

// 
function query($query)
{
    global $connect;
    $result = mysqli_query($connect, $query);
    $userListValue = [];
    while ($userListValueRow = mysqli_fetch_assoc($result)) {
        $userListValue[] = $userListValueRow;
    }
    return $userListValue;
}

// logic for table database userregist
function regist()
{
    global $connect;

    if (isset($_POST['submit'])) {
        $username = strtolower(stripslashes($_POST['username']));
        $password = mysqli_real_escape_string($connect, $_POST['password']);
        $confirmPassword = mysqli_real_escape_string($connect, $_POST['confirm-password']);

        $result = mysqli_query($connect, "SELECT username FROM userregist WHERE username = '$username'");

        if ($confirmPassword === $password && $result == false) {
            $confirmPassword = password_hash($confirmPassword, PASSWORD_DEFAULT);
            mysqli_query($connect, "INSERT INTO userregist VALUES (
                '', '$username', '$confirmPassword'
            )");
            return true;
        } else if ($result) {
            return '<div class="alert alert-danger" role="alert">
                Your name has been used.
            </div>';
        } else if ($confirmPassword !== $password) {
            return '<div class="alert alert-danger" role="alert">
                Your confirm password isnt match.
            </div>';
        }
    }
}

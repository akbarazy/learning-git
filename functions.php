<?php
$connect = mysqli_connect("localhost", "root", "", "ourlist");

// logic to display all the contents of my database table.
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

// logic for table database userregist.
function regist()
{
    global $connect;

    if (isset($_POST['submit'])) {
        $username = strtolower(stripslashes($_POST['username']));
        $password = mysqli_real_escape_string($connect, $_POST['password']);
        $confirmPassword = mysqli_real_escape_string($connect, $_POST['confirm-password']);

        $result = mysqli_query($connect, "SELECT name FROM userregist WHERE name = '$username'");

        if ($confirmPassword === $password && mysqli_num_rows($result) === 0) {

            $confirmPassword = password_hash($confirmPassword, PASSWORD_DEFAULT);
            mysqli_query($connect, "INSERT INTO userregist VALUES (
                '', '$username', '$confirmPassword'
            )");
            return '';
        } else if (mysqli_num_rows($result) > 0) {

            return '<div class="alert alert-danger" role="alert">
                Your name has been used.
            </div>';
        } else if ($confirmPassword !== $password) {

            return '<div class="alert alert-danger" role="alert">
                Your confirm password isn\'t match.
            </div>';
        }
    }
}

// logic to compare logged in users.
function login()
{
    global $connect;

    if (isset($_POST['submit'])) {
        $username = strtolower(stripslashes($_POST['username']));
        $password = mysqli_real_escape_string($connect, $_POST['password']);

        $result = mysqli_query($connect, "SELECT * FROM userregist WHERE name = '$username'");

        if (mysqli_num_rows($result) > 0) {
            $userListValueRow = mysqli_fetch_assoc($result);

            if ($username === 'muhammad akbar alfarizy' && $password === 'akbarazy123') {
                setcookie('admin', true, time() + 432000);
                $_SESSION['admin'] = true;
            }

            if (password_verify($password, $userListValueRow['password'])) {

                $_SESSION['login'] = true;
                if (isset($_POST['remember-me'])) {

                    setcookie('key1', $userListValueRow['id'], time() + 432000);
                    setcookie('key2', hash('sha256', $userListValueRow['name']), time() + 432000);
                    setcookie('key3', $userListValueRow['password'], time() + 432000);
                }

                header('location: index.php');
                exit;
            } else {

                return '<div class="alert alert-danger" role="alert">
                    Your password isn\'t match.
                </div>';
            }
        } else if (mysqli_num_rows($result) === 0) {

            return '<div class="alert alert-danger" role="alert">
                Your name isn\'t match.
            </div>';
        }
    }
}

// logic for image upload
function uploadImage()
{
    $imageName = $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];

    $formatValid = ["jpg", "jpeg", "png", "webp", "svg"];
    $formatFile = explode(".", $imageName);
    $formatFile = strtolower(end($formatFile));

    if (!in_array($formatFile, $formatValid)) {
        return false;
    }

    $newImageName = uniqid() . '.' . $formatFile;
    move_uploaded_file($tmpName, "images/$newImageName");
    return $newImageName;
}

// logic to create new list
function create()
{
    global $connect;

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $image = uploadImage();

        if ($image === false) {
            return '<div class="alert alert-danger" role="alert">
                Your format image isn\'t match.
            </div>';
        }

        $date = date('Y-m-d', time());
        $query = "INSERT INTO userlist VALUES (
        '', '$date', '$name', '$image'
    )";

        mysqli_query($connect, $query);
        return '';
    }
}

// logic for delete list
function delete()
{
    global $connect;
    $userListId = $_GET['delete'];

    mysqli_query($connect, "DELETE FROM userlist WHERE id = $userListId");
}

// logic to edit list
function edit()
{
    global $connect;

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $image = $_POST['old-image'];

        if ($_FILES['image']['error'] !== 4) {
            $image = uploadImage();

            if ($image === false) {
                return '<div class="alert alert-danger" role="alert">
                    Your format image isn\'t match.
                </div>';
            }
        }

        $query = "UPDATE userlist SET
            name = '$name',
            image = '$image'
        WHERE id = $id";

        mysqli_query($connect, $query);
        return '';
    }
}

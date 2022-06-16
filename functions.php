<?php
$connect = mysqli_connect("localhost", "root", "", "ourlist");

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

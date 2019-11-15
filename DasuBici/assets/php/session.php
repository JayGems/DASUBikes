<?php
include('config.php');
session_start();

$conn = OpenCon();

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($conn, "select nombre from dasu where correo = '$user_check' ");
if (!$ses_sql) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

$login_session = $row['nombre'];

if (!isset($_SESSION['login_user'])) {
    header("location:login.php");
    die();
}

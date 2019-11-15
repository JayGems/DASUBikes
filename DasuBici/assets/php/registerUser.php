<?php
include('config.php');
if (($conn = OpenCon()) != false) {
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form

        $myid       = mysqli_real_escape_string($conn, $_POST['clave']);
        $myname     = mysqli_real_escape_string($conn, $_POST['username']);
        $myrole     = mysqli_real_escape_string($conn, $_POST['area']);
        $myemail    = mysqli_real_escape_string($conn, $_POST['email']);

        $sql = "INSERT INTO usuariobuap (userID, nombre, email, rol) VALUES ('$myid' ,'$myname', '$myemail', '$myrole')";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }else{
            echo "Se registro con éxito a $myname";
        }

    }
}

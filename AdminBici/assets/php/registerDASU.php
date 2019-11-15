<?php
include('config.php');
if (($conn = OpenCon()) != false) {
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $myid     = mysqli_real_escape_string($conn, $_POST['clave']);
        $myname     = mysqli_real_escape_string($conn, $_POST['username']);
        $mypass     = mysqli_real_escape_string($conn, $_POST['psswd']);
        $myemail    = mysqli_real_escape_string($conn, $_POST['email']);

        $sql = "INSERT INTO dasu (ID, nombre, correo, password) VALUES ('$myid', '$myname', '$myemail', '$mypass')";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }else{
            echo "Se registro con éxito a $myname";
        }
    }
}

<?php
include('config.php');
if (($conn = OpenCon()) != false) {
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $bColor     = mysqli_real_escape_string($conn, $_POST['color']);
        $bSize     = mysqli_real_escape_string($conn, $_POST['size']);
        $bModel     = mysqli_real_escape_string($conn, $_POST['model']);

        $sql = "INSERT INTO bicicleta (color, rodada, modelo) VALUES ('$bColor', '$bSize', '$bModel')";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }else{
            echo "Se registro con éxito Bicicleca con características: $bColor, $bSize, $bModel";
        }
    }
}

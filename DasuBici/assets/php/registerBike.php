<?php
include('config.php');
if (($conn = OpenCon()) != false) {
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $isUser = "";

        $bColor     = mysqli_real_escape_string($conn, $_POST['color']);
        $bSize      = mysqli_real_escape_string($conn, $_POST['size']);
        $bModel     = mysqli_real_escape_string($conn, $_POST['model']);
        $uID        = mysqli_real_escape_string($conn, $_POST['clave']);

        $isUser    = "SELECT userID FROM usuariobuap WHERE userID = '$uID'";

        $result = mysqli_query($conn, $isUser);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $active = $row['userID'];

        $count = mysqli_num_rows($result);

        if ($count == 1) {
            $sql = "INSERT INTO bicicleta (userID, color, rodada, modelo) VALUES ('$uID', '$bColor', '$bSize', '$bModel')";
            $result = mysqli_query($conn, $sql);
            if (!$result) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            } else {
                $rb     = "SELECT bikeID FROM bicicleta WHERE userID = $uID";
                $ri     = mysqli_query($conn, $rb);
                $row = mysqli_fetch_array($ri, MYSQLI_ASSOC);
                $sri = $row['bikeID'];
                echo $sri;
                if (!$ri) {
                    printf("Error: %s\n", mysqli_error($conn));
                } else {
                    $q      = "UPDATE usuariobuap SET bikeID = $sri WHERE userID = $uID";
                    $result = mysqli_query($conn, $q);
                    if (!$result) {
                        printf("Error: %s\n", mysqli_error($conn));
                        exit();
                    } else {
                        echo "Se registro con éxito Bicicleca con características: $bColor, $bSize, $bModel al usuario: $uID";
                    }
                }
            }
        } else {
            $error = "No existe ese usuario";
            echo $error;
        }
    }
}

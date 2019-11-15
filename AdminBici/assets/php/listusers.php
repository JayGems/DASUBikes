<?php
class usuario
{
    var $uID;
    var $bID;
    var $name;
    var $email;
    var $role;
}

include('config.php');
if (($conn = OpenCon()) != false) {
    session_start();
    #if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

    $sql = "SELECT * FROM usuariobuap";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }

    $users = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $user = new usuario();
        $user->uid      = $row['userID'];
        $user->bid      = $row['bikeID'];
        $user->name     = utf8_encode($row['nombre']);
        $user->email    = utf8_encode($row['email']);
        $user->role   = utf8_encode($row['rol']);
        array_push($users, $user);
    }

    $finalJ = json_encode($users, JSON_UNESCAPED_UNICODE);

    echo $finalJ;
}

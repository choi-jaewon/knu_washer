<?php 
    $con = mysqli_connect("localhost", "moapp", "wodnjs13!", "moapp");
    mysqli_query($con,'SET NAMES utf8');

    $userID = $_POST["user_num"];
    $userPassword = $_POST["password"];
    $userName = $_POST["user_name"];

    $statement = mysqli_prepare($con, "INSERT INTO USER (user_num, user_name, password) VALUES (?,?,?)");
    mysqli_stmt_bind_param($statement, "sss", $userID, $userName, $userPassword);
    mysqli_stmt_execute($statement);

    $response = array();
    $response["success"] = true;
 
    echo json_encode($response);

?>
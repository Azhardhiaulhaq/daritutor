<?php

include '../../dbhandler/dbhandler.php';

if ( filter_has_var( INPUT_POST, 'login' ) ) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $database = new DBHandler();
    $conn = $database->getConnection();
    $stmt = $conn->prepare("SELECT email,password FROM User WHERE email='$email'AND password='$pass';");
    $stmt->execute();

    //Ambil Hasil Execute Statement
    $result = $stmt->fetch(PDO::FETCH_ASSOC); 
    // if not empty result
    if (is_array($result)){
        $cookie_name = "user";
        $cookie_value = generateRandomString(20);
        setcookie($cookie_name,$cookie_value,time()+(60*10),"/");
        
        $resultemail = $result['email']; 
        $stmt2 = $conn->prepare("UPDATE User SET cookies='$cookie_value' where email='$resultemail';");
        $stmt2->execute();
        header('Location: ../../dashboard/index.php');
    }else{
        echo ("<script LANGUAGE='JavaScript'>
        window.location.href='../index.php#alert';
        </script>");
        // header ('Location: ../index.php');
        
    } 
}


function generateRandomString($length) 
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?> 
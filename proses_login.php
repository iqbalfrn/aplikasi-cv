<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $parts = explode('@', $email);
    if(count($parts) == 2){
        $domain = $parts[1];
    } else {
        $domain = "";
    }

    if($password === $domain){
        $_SESSION['email'] = $email;
        header("Location: form.php");
        exit();
    } else {
        echo "Login gagal! Password salah. <a href='login.php'>Kembali ke login</a>";
    }
} else {
    header("Location: login.php");
    exit();
}
?>

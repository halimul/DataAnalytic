<?php

session_start();

require 'koneksi.php';

if( isset($_COOKIE['login']) ) {
    if( $_COOKIE['login'] == 'true') {
        $_COOKIE['login'] = true;
    }
}

if( isset($_SESSION["login"])){
    header("Location: upload_file.php");
    exit;
}

if( isset($_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE
    username_id ='$username'");
    
    //echo (mysqli_num_rows($result));
    
    //Cek: Cari username ada apa ngga
    if (mysqli_num_rows($result) === 1 ) {
    
        //Cek: Passwordnya sesuai apa ngga
        $row = mysqli_fetch_assoc($result);
        
        //kalo password dienkripsi
        //if (password_verify($password, $row["password"])) {
        
        if ($password === $row["password"]) {    
            
            //Set Session
            $_SESSION["login"] = true;
            
            //Set COOKIE
            setcookie('login', 'true', time() + 60);
            
            header("Location: upload_file.php");
            exit;
        }
    }
    $error = true;
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>
	
	<h2>Halaman Login</h2>
    
    <?php if ( isset($error) ): ?>
        <p style="color: red; font-style: italic;"> username / password salah </p>
    <?php endif; ?>
    <form action="" method="post">

        <ul>
            <li>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </li>
            <li>    
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">Login</buton>
            </li>
        </ul>
</body>
</html>

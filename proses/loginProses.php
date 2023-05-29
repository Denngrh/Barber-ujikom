<?php
    require ('../inc/koneksi.php');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users where email = '$email'";
    $query = mysqli_query($conn,$sql);

    if(mysqli_num_rows($query) == 0 ){
        header("Location: ../user/login.php?info=EMAIL TIDAK DI TEMUKAN!!");
    }else {
        $user = mysqli_fetch_assoc($query);
        if(password_verify($password,$user['password'])){
            if($user['is_verified']==1){
                session_start();
                $_SESSION['isLogin'] = true;
                $_SESSION['user'] = $user;
                $_SESSION['id'] = $user['id'];
                header("location: ../user/index.php");
            }else {
                header("Location: ../user/login.php?info=VERIF EMAIL DULU GANN!!");
            }
        }else {
            header("Location: ../user/login.php?info=PASSWORD SALAH!!");
        }
    }
?>
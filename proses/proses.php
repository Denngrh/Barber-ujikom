<?php
// Load PHPMailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

   //sesuaikan name dengan di form nya ya 
   $name = $_POST['name'];
   $email = $_POST['email'];
   $pesan = $_POST['pesan'];

// Create a new PHPMailer instance
$mail = new PHPMailer();

// Set the SMTP credentials
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'badennugraha4@gmail.com';
$mail->Password = 'brpkrwqupmlzqpxv';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Set the email content
$mail->setFrom('badennugraha4@gmail.com', 'Your website');
$mail->addAddress('badennugraha4@gmail.com');
$mail->Subject = $name;
$body = 'Atas nama='.$name.'dengan gmail='.$email.'mengrimkan anda sebuah pesan '.$pesan.'';
$mail->Body = $body;

// Send the email
if(!$mail->send()) {
    echo 'Gagal mengirim email: ' . $mail->ErrorInfo;
} else {
    header("Location: ../index.php?info=Pesan Berhasil Dikirim!");
}
?>
<?php
include "../inc/koneksi.php";
    if(isset($_POST['reset'])) {
        $email = $_POST['mail'];
    }
    else {
        exit();
    }

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/OAuth.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/POP3.php';
    require '../PHPMailer/src/SMTP.php';
    
    
    $mail = new PHPMailer;

    
    try {
        //Server settings
        $mail->isSMTP();       
        $mail->SMTPDebug = SMTP::DEBUG_OFF;                                     
        $mail->Host       = 'smtp.gmail.com';                    
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'badennugraha4@gmail.com';                     
        $mail->Password   = 'brpkrwqupmlzqpxv';                               
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
        $mail->Port       = 587;                                    
    
        //Recipients
        $mail->setFrom('badennugraha4@gmail.com', 'Admin');
        $mail->addAddress($email);     

        $code = substr(str_shuffle('1234567890QWERTYUIOPASDFGHJKLZXCVBNM'),0,10);
    
        
        $mail->isHTML(true);                                  
        $mail->Subject = 'Password Reset';
        $mail->Body    = '<!DOCTYPE html>
        <html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width,initial-scale=1">
          <meta name="x-apple-disable-message-reformatting">
          <title></title>
          <!--[if mso]>
          <noscript>
            <xml>
              <o:OfficeDocumentSettings>
                <o:PixelsPerInch>96</o:PixelsPerInch>
              </o:OfficeDocumentSettings>
            </xml>
          </noscript>
          <![endif]-->
          <style>
            table, td, div, h1, p {font-family: Arial, sans-serif;}
          </style>
        </head>
        <body style="margin:0;padding:0;">
          <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
            <tr>
              <td align="center" style="padding:0;">
                <table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                  <tr>
                    <td align="center" style="padding:40px 0 30px 0;background:#000;">
                      <img src="https://github.com/Denngrh/Barber-ujikom/assets/112230212/83986cfc-2397-42fd-9626-06a9df793476" alt="logo barbershop" width="100" style="height:auto;display:block;" />
                    </td>
                  </tr>
                  <tr>
                    <td style="padding:36px 30px 42px 30px;">
                      <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                        <tr>
                          <td style="padding:0 0 36px 0;color:#153643;">
                            <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">Halo Selamat Datang </h1>
                            <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Email Ini Mengirim reset password</p>
                            <p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><a href="" style="color:#ee4c50;text-decoration:underline;">Kunjungi Web</a></p>
                          </td>
                        </tr>
                        <tr>
                          <td><H2><a href="http://localhost:8080/Ujikom/user/change-password.php?code='.$code.'">Reset Password</a></H2></td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                  <td style="padding:30px;background:#ee4c50;">
                  <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
                    <tr>
                      <td style="padding:0;width:100%;" align="left">
                        <p style="margin:0;font-size:15px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;">
                            Copyright &copy;<strong><span class="text-theme"></span>2023,</strong> All right reserved | Denngrh Develop <br/>
                        </p>
                      </td>
                      <td style="padding:0;width:100%;" align="right">
                        <table role="presentation" style="border-collapse:collapse;border:0;border-spacing:0;">
                          <tr>
                          </tr>
                        </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </body>
        </html>';

        if($conn->connect_error) {
            die('Could not connect to the database.');
        } 

        $verifyQuery = $conn->query("SELECT * FROM users WHERE email = '$email'");

        if($verifyQuery->num_rows) {
            $codeQuery = $conn->query("UPDATE users SET reset_code = '$code' WHERE email = '$email'");
                
            $mail->send();
            header("Location: ../user/login.php?cek=Code Reset Telah Terkirim Mohon Cek Email Anda");
            exit();
            }
        $conn->close();
    
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

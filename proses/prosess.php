<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/OAuth.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/POP3.php';
    require '../PHPMailer/src/SMTP.php';

  //sesuaikan name dengan di form nya ya 
  $name = $_POST['name'];
  $email = $_POST['email'];
  $pesan = htmlspecialchars($_POST['pesan']);

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = SMTP::DEBUG_OFF;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->SMTPAuth = true;
        $mail->Username = 'badennugraha4@gmail.com';
        $mail->Password = 'brpkrwqupmlzqpxv';

        // Set the email content
        $mail->setFrom('badennugraha4@gmail.com', 'Your website');
        $mail->addAddress('badennugraha4@gmail.com');
        $mail->Subject = 'message';

        $body = '<!DOCTYPE html>
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
                            <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">Halo Selamat Datang,&nbsp;' . $name . ' </h1>
                            <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Email Ini mengirim anda sebuah pesan= ' . $email . '</p>
                            <p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">isi pesann</p>
                          </td>
                        </tr>
                        <tr>
                          <td><H2>' . $pesan . '</H2></td>
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
        $mail->Body = $body;
        //Replace the plain text body with one created manually
        $mail->AltBody = 'Verification Account';

       // Send the email
if(!$mail->send()) {
    echo 'Gagal mengirim email: ' . $mail->ErrorInfo;
} else {
    header("Location: ../index.php?info=Pesan Berhasil Dikirim!");
}
?>
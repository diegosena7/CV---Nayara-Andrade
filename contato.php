<?php
    $mailBy   = $_POST['email'];
    $mailSub  = $_POST['telefone'];
    $mailName = $_POST['name'];
    $mailMsg  = $_POST['message'];

    $mailMain = "diegosenadev.89@gmail.com";
    $mailPass = "santosfc2020";
    
    $mailBody = '<p>Olá Diego Sena!</p><br>Novo contato via website! <br><br> <strong>Nome:</strong> ' .$mailName. '<br> <strong>Telefone:</strong> ' .$mailSub. ' <br> <strong>E-mail:</strong> '.$mailBy. '<br> <strong>Mensagem:</strong> "' .$mailMsg. '"<br><br>Atenciosamente.<br><br><b>CV Diego Sena</b><br/>
                </p>';

   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);

   $mail ->Username = $mailMain;
   $mail ->Password = $mailPass;

   $mail ->SetFrom("Diego Sena");
   $mail ->Subject = $mailSub;
   $mail ->Body    = $mailBody;
   $mail ->AddAddress($mailMain);

   if(!$mail->Send())
   {
       echo "Sua mensagem não foi enviada!";
   }
   else
   {
       echo "Obrigado por me contatar, em breve lhe responderei!";
   }
?>




   


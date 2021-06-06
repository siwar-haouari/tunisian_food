<?php
  require_once 'mailer/class.phpmailer.php'; 
  // creates object
  $mail = new PHPMailer(true); 
  if(isset($_POST['btn_send']))
  {
   $email      = strip_tags($_POST['email']);
   $subject    = strip_tags($_POST['subject']);
   $text_message    = "Hello";      
   $message  = strip_tags($_POST['message']);
 try
   {
    $mail->IsSMTP(); 
    $mail->isHTML(true);
    $mail->SMTPDebug  = 0;                     
    $mail->SMTPAuth   = true;                  
    $mail->SMTPSecure = "ssl";                 
    $mail->Host       = "smtp.gmail.com";      
    $mail->Port        = '465';             
    $mail->AddAddress('haouarisiwar4@gmail.com','Siwar haouari');
    $mail->Username   ="haouarisiwar4@gmail.com";  
    $mail->Password   ="Waranawara1997!!";            
    $mail->SetFrom('haouarisiwar4@gmail.com','Siwar haouari');
   // $mail->AddReplyTo("haouarisiwar4@gmail.com","siwar haouari");
    $mail->Subject    = $subject;
    $mail->Body    = $message;
    $mail->AltBody    = $message;
     
    if($mail->Send())
    {
     
     $msg = "Hi, Your mail successfully sent to".$email." ";
     
    }
   }
   catch(phpmailerException $ex)
   {
    $msg = "<div class='alert alert-warning'>".$ex->errorMessage()."</div>";
   }
  } 
  header("location:contact.php");

?>
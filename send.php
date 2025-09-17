<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require_once "vendor/autoload.php";

if(isset($_POST['fname']) && isset($_POST['email'])){
     $name = input_cleaner($_POST['fname']).' '.input_cleaner($_POST['lname']);
$email =input_cleaner( $_POST['email']);
$subject = input_cleaner($_POST['subject']);
$message = input_cleaner($_POST['message']);
$phone = input_cleaner($_POST['phone']);
$country = input_cleaner($_POST['country']);
$fax = input_cleaner($_POST['fax']);

$mail = new PHPMailer(true);
  
try {
    $mail->isSMTP(); 
    $mail->SMTPDebug = 4;
    $mail->Host       = 'comium.gm'; 
    $mail->SMTPAuth   = true;  
    $mail->Port       = 587; 
    $mail->SMTPSecure = "tls";
    $mail->Username   = '_mainaccount@comium.gm';                  
    $mail->Password   = '-5LED}t<CL';   
    $mail->setFrom('form@comium.gm','Comium');           
    $mail->addAddress('info@comium.gm','Form');
    $mail->isHTML(true);                                  
    $mail->Subject = 'comium Form';
    $mail->Body    = '<div> Sender Name : '.$name .'</div><div> Sender Email : '.$email.' </div><div> Sender Country : '.$country.' </div><div>Mail Subject : '.$subject.'</div><div> Message : <br/> '.$message.'</div><div> Phone  : '.$phone .'</div><div> Fax : '.$fax .'</div>';
    $mail->AltBody = 'test here';
    $mail->send();
    echo "Mail has been sent successfully!";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

function input_cleaner($input) {
  $input = trim($input);
  $input = stripslashes($input);
  $input = htmlspecialchars($input);
  return $input;
}
?>
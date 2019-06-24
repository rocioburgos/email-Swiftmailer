<?php 
session_start();
require_once 'vendor/autoload.php';
$email= $_POST['email'];
$name= $_POST['name'];
$msj= $_POST['msj'];
$asunto = $_POST['asunto'];

if( isset($email)  && isset($name) && isset($msj) && isset($asunto)){

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 2525))
  ->setUsername('')
  ->setPassword('')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

$html_msj= "
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Email</title>
</head>
<body>
    <p>Mensaje de: $name - $email</p>
    <p>Asunto: $asunto</p>
    <br>
    <p>Mensaje: $msj</p>
</body>
</html>";
// Create a message
$message = (new Swift_Message('Wonderful Subject'))
  ->setFrom([$email => $name])
  ->setTo(['rocioburgos00@gmail.com' => 'Rocio Burgos'])
  ->setBody($html_msj)
  ;

// Send the message
$result = $mailer->send($message);
    if($result){
        $_SESSION['exito']=true;
    }else{
        $_SESSION['error']=true;
    }
}else{
    $_SESSION['error']=true;
}

header("Location: index.php");

?>
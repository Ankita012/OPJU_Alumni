
<html lang="en">
<head>
  <title>feedback</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:/xampp/htdocs/Alumni/src/Exception.php';
require 'C:/xampp/htdocs/Alumni/src/PHPMailer.php';
require 'C:/xampp/htdocs/Alumni/src/SMTP.php';

require 'C:/xampp/phpMyAdmin/vendor/autoload.php';
if(!empty($_POST['email']))
{
$email = $_POST['email'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$feedback = $_POST['feedback'];


$mail = new PHPMailer;

$mail->isSMTP();

$mail->SMTPDebug = 0;

$mail->Host = 'smtp.gmail.com';


$mail->Port = 587;

$mail->SMTPSecure = 'tls';

$mail->SMTPAuth = true;

$mail->SMTPAutoTLS = false;
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->Username = "ankita.kaushik012@gmail.com";

$mail->Password ="1251996anriti";

$mail->setFrom('ankita.kaushik012@gmail.com', 'demo');

$mail->addAddress('ankita.kaushik62@gmail.com', 'Ankita');

$mail->Subject = 'SMTP test';
$mail->isHTML(true);         
$mail->Body    = 'email       '.$email.'  <br>'.'name     '.$name.'  <br>'.'phone     '.$phone.'  <br>'.'feedback  '  ;



if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Thank You For Feedback";
   
}



}
else{
	echo "enter your details";
}

?>
<div class="container">
<form action="nitin.php" method="post">
<div class="form-group">
<label for="name">Name:</label>
<input type="text" class="form-control"  name="name"/>
</div>
<div class="form-group">
<label for="name">Phone no:</label>
<input type="text" class="form-control"  name="phone"/>
</div>
<div class="form-group">
<label for="name">Email:</label>
<input type="email" class="form-control"  name="email"/>
<?if(!isset($_POST['email']))
{echo "email";}
else{
	echo "great";
}
?>
</div>
<div class="form-group">
<label for="name">Feedback:</label>
<input type="text" class="form-control"  name="feedback"/>
</div>
<input type="submit" class="btn btn-default" value="Send" name="send"/>

</form>
</div>
</html>
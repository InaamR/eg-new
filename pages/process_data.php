<?php

//process_data.php

if(isset($_POST["first_name"]))
{
 $first_name = '';
 $last_name = '';
 $email = '';
 $tel = '';
 $msg = '';

 $first_name_error = '';
 $last_name_error = '';
 $email_error = '';
 $tel_error = '';
 $msg_error = '';
 $captcha_error = '';

 if(empty($_POST["first_name"]))
 {
  $first_name_error = 'Votre prénom est obligatoire';
 }
 else
 {
  $first_name = $_POST["first_name"];
 }

 if(empty($_POST["last_name"]))
 {
  $last_name_error = 'Votre nom de famille est obligatoire';
 }
 else
 {
  $last_name = $_POST["last_name"];
 }
 if(empty($_POST["email"]))
 {
  $email_error = 'Votre adresse email est obligatoire';
 }
 else
 {
  if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
  {
   $email_error = 'Adresse email invalide';
  }
  else
  {
   $email = $_POST["email"];
  }
 }

 if(empty($_POST["tel"]))
 {
  $tel_error = 'Le téléphone est obligatoire';
 }
 else
 {
  $tel = $_POST["tel"];
 }

 if(empty($_POST["message"]))
 {
  $msg_error = 'Le message est obligatoire';
 }
 else
 {
  $msg = $_POST["message"];
 }

if(empty($_POST['g-recaptcha-response']))
{
$captcha_error = 'Captcha est obligatoire.';
}
else
{
$secret_key = '6Lcmj_UbAAAAAKDbibUwNnouH7RUvBAEhymFnPS4';

if($first_name_error == '' && $phonenum_error == '' && $email_error == '' && $msg_error == '' && $tel_error == '' && $captcha_error == '')
{
$response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
$response_data = json_decode($response);
if(!$response_data->success)
{
$captcha_error = 'Échec de la vérification du captcha. Rafraîchir la page pour recharger si nécessaire.';
}
}
}

 if($first_name_error == '' && $last_name_error == '' && $email_error == '' && $tel_error == '' && $msg_error == '' && $captcha_error == '')
 {
    
  require 'class/class.phpmailer.php';
		$mail = new PHPMailer;
		//$mail->isSMTP();                                      // Set mailer to use SMTP
        //$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        //$mail->SMTPAuth = true;                               // Enable SMTP authentication
        //$mail->Username = '';                 // SMTP username
        //$mail->Password = '';                           // SMTP password
        //$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        //$mail->Port = 587;                                    // TCP port to connect to

        $mail->From = $email;
        $mail->FromName = $first_name.' '.$last_name;
        $mail->addAddress('naam.rach@gmail.com', 'Expert Gaming');     // Add a recipient
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //$mail->addAttachment('');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Demande de contact de '.$first_name.' '.$last_name;
        $mail->Body    = $msg;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->send()) {
            $error = '<label class="text-success">Votre demande de contact sera traitée dans les 24h</label>';
            $error .= 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            $error = '<label class="text-danger">Désolé une erreur est survenue</label>';
        }
		$name = '';
		$email = '';
		$subject = '';
		$message = '';

        $data = array(
            'success'  => true           );
 }
 else
 {
  $data = array(
   'first_name_error' => $first_name_error,
   'last_name_error' => $last_name_error,
   'email_error'  => $email_error,
   'tel_error' => $tel_error,
   'msg_error' => $msg_error,
   'captcha_error'  => $captcha_error
  );
 }

 echo json_encode($data);
}

?>
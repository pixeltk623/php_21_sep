<?php 
	


	require_once 'vendor/autoload.php';

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	use PHPMailer\PHPMailer\SMTP;

	$mail = new PHPMailer(true);


	//Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'dream.sharvan@gmail.com';                     //SMTP username
    $mail->Password   = '9835401515';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


    //Recipients
    $mail->setFrom('dream.sharvan@gmail.com', 'Company Inc');
    $mail->addAddress('sharvank1515@gmail.com', 'Sharvan Kumar');     //Add a recipient
    $mail->addAddress('draj73212@gmail.com');               //Name is optional
    $mail->addReplyTo('amitmor5942@gmail.com', 'Amit');
    $mail->addCC('pajlotuser@gmail.com');
    $mail->addBCC('rajeshwardutta04@gmail.com');


    //Attachments
    // $mail->addAttachment('jaimin.pdf');         //Add attachments
    $mail->addAttachment('jaimin.pdf', 'Resume');    //Optional name

     //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Just For Fun!';
    $mail->Body    = '<h1>Welcome To GWP Vadodara</h1>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
?>

// 10 Email => send 

// File 

// HTML Email 

<?php
$config = require __DIR__ . '/../web/config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';


$recaptchaSecret = $config['recaptcha_secret'];
if (isset($_POST['g-recaptcha-response'])) {
    $recaptchaResponse = $_POST['g-recaptcha-response'];
    $remoteIp = $_SERVER['REMOTE_ADDR'];

    $verifyUrl = "https://www.google.com/recaptcha/api/siteverify";
    $data = [
        'secret' => $recaptchaSecret,
        'response' => $recaptchaResponse,
        'remoteip' => $remoteIp
    ];

    $options = [
        'http' => [
            'method'  => 'POST',
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'content' => http_build_query($data)
        ]
    ];

    $context  = stream_context_create($options);
    $verifyResponse = file_get_contents($verifyUrl, false, $context);
    $responseData = json_decode($verifyResponse);

    if (!$responseData->success) {
        echo 'Chyba: Neprošla reCAPTCHA.';
        exit;
    }
} else {
    echo 'Chyba: Chybí reCAPTCHA.';
    exit;
}

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['message']);

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = $config['smtp_host'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $config['smtp_user'];
    $mail->Password   = $config['smtp_pass'];
    $mail->SMTPSecure = $config['smtp_secure'];
    $mail->Port       = $config['smtp_port'];

    $mail->setFrom('info@sferasolutions.eu', 'Web Kontakt');
    $mail->addAddress('info@sferasolutions.eu');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(false);
    $mail->Subject = $subject;
    $mail->Body    = "Name: $name\nEmail: $email\nMessage:\n$message";
   
   
    // $mail->SMTPDebug = 3; // или 3 для более подробной информации
    // $mail->Debugoutput = 'html';
    $mail->send();
    echo "Message was sent.";
} catch (Exception $e) {
    echo "Error: {$mail->ErrorInfo}";
}
?>

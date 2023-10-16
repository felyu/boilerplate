<?php
header('Content-Type: application/json');
// Include Composer Autoload and externals functions
require_once __DIR__ . '/../../vendor/autoload.php';

require '../include/phpMailer/Exception.php';
require '../include/phpMailer/PHPMailer.php';
require '../include/phpMailer/SMTP.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

function sendEmail($email, $first_name, $subject, $html_email, $txt_email){
    // PHP MAILER
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();
        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'quoted-printable';                                            //Send using SMTP
        $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = $_ENV['EMAIL_USERNAME'];                     //SMTP username
        $mail->Password   = $_ENV['EMAIL_PASSWORD'];                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        //Recipients
        $mail->setFrom($_ENV['EMAIL_USERNAME'], 'Vilis');
        $mail->addAddress($email, $first_name); //Add a recipient
        //Content
        $mail->isHTML(true);   
        $mail->Subject = html_entity_decode($subject);        //Set email format to HTML        
        $mail->Body = $html_email;
        $mail->AltBody = $txt_email;
        $mail->send();
    } catch (Exception $e) {
        return false;
    }
    return true;
}
?>
<?php
require_once dirname(__FILE__) . '/../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mail extends Connection{

    private $mailUser;
    private $pesan;
    private $message;

    //auto get
    public function __get($atribute)
    {
        if (property_exists($this, $atribute)) {
            return $this->$atribute;
        }
    }

    //auto set
    public function __set($atribut, $value)
    {
        if (property_exists($this, $atribut)) {
            $this->$atribut = $value;
        }
    }

    public static function sendMail($to, $name, $subject, $message)
    {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;

        //Email Pengirim
        $mail->Username = 'amandamuchsinchalik1999@gmail.com';
        $mail->Password = 'muchsin171199';
        $mail->From = 'amandamuchsinchalik1999@gmail.com';
        $mail->FromName ='Admin E-Consultation';
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer'=> false,
                'verify_peer_name'=>false,
                'allow_self_signed'=>true
            )
        );
        
        $mail->wordwrap = 50;
        $mail->isHTML(true);

        $mail->addAddress($to, $name);
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->AltBody = "This is the body in plain text for non-HTML mail clients";
        $mail->SMTPDebug = 0;

        if (!$mail->send()){
            echo "Message could not be sent.<p>";
            echo "Mailer Error : " . $mail->ErrorInfo;
            exit;
        }
    }
}
?>

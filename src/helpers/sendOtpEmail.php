<?php

// src/helpers/sendOtpEmail.php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function send_otp_email(string $toEmail, string $code): void {
    $mail = new PHPMailer(true);
    
    try {
        // Paramétrage du serveur SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Par exemple pour Gmail
        $mail->SMTPAuth = true;
        $mail->Username = 'chagaiboumahamadoumaiga@gmail.com';  // Ton adresse email SMTP
        $mail->Password = 'iojq olsv bcfa jkuk';      // Ton mot de passe d'email ou "App Password" dans le cas de Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Destinataire
        $mail->setFrom('chagaiboumahamadoumaiga@gmail.com', 'Agence Voyage');
        $mail->addAddress($toEmail);  // Email destinataire

        // Contenu de l'email
        $mail->isHTML(false);  // Texte simple
        $mail->Subject = 'Votre code de confirmation';
        $mail->Body    = "Votre code OTP est : {$code}\nIl expire dans 15 minutes.";

        // Envoi de l'email
        $mail->send();
        echo "Le code OTP a été envoyé.";
    } catch (Exception $e) {
        echo "Erreur : L'email n'a pas pu être envoyé. Mailer Error: {$mail->ErrorInfo}";
    }
}



?>
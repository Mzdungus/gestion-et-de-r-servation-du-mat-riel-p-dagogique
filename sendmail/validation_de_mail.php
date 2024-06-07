<?php

function validation(){ 
    // Envoi du mail
    $to = $reservation['email'];
    $subject = "Votre compte a été créé";
    $message = "Bonjour,\n\nVotre compte a été créé avec succès dans 
    notre base de données.\n\nVotre mot de passe est : @materiel2024@
    \n\nCordialement,\nL'équipe du site";
    $headers = "From: testsendmail063@gmail.com\r\n";
    $headers .= "Reply-To: testsendmail063@gmail.com\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "Le mail a été envoyé avec succès.";
    } else {
        echo "Erreur lors de l'envoi du mail.";
    }}
  
?>
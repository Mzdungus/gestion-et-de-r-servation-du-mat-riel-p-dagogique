<?php

function refus(){ 
    // Envoi du mail
    $to = $reservation['email'];
    $subject = "Réservation refusée";
    $message = "Bonjour,\n\n une de vos réservation  a été
                refusée rendez-vous au plateforme pour verifier ! :\n  
                ,\n cette mail est envoyer automatiquement merci de 
                ne pas repondre. ";
    $headers = "From: testsendmail063@gmail.com\r\n";
    $headers .= "Reply-To: testsendmail063@gmail.com\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "Le mail a été envoyé avec succès.";
    } else {
        echo "Erreur lors de l'envoi du mail.";
    }}
  
?>
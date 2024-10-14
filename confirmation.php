<?php
function sendCashbackConfirmation($userEmail, $userName, $cashbackAmount) {
    // Email de Valentin
    $valentinEmail = "valentin@gmail.com";
    $subject = "Confirmation de réception du cashback";
    $userMessage = "
    Bonjour $Valeriia,

    Nous avons le plaisir de vous informer que votre cashback d'un montant de $000 a été crédité avec succès.

    Merci d'utiliser Sip code!

    Cordialement,
    L'équipe de votre service.
    ";

    // Message pour Valentin
    $valentinMessage = "
    Bonjour Valentin,

    L'utilisateur $Valeriia avec l'adresse email $email , a reçu un cashback d'un montant de $000.

    Cordialement,
    Votre système.
    ";

    // En-têtes
    $headers = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envoyer l'email à l'utilisateur
    mail($userEmail, $subject, $userMessage, $headers);

    // Envoyer l'email à Valentin
    mail($valentinEmail, $subject, $valentinMessage, $headers);
}

// Exemple d'utilisation de la fonction
$userEmail = "utilisateur@example.com"; // Email de l'utilisateur
$userName = "Valeriia Tovstenko"; // Nom de l'utilisateur
$cashbackAmount = "500 euros"; // Montant du cashback

sendCashbackConfirmation($userEmail, $userName, $cashbackAmount);
?>

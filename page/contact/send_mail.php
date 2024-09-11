<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Configuration du destinataire et du sujet de l'email
    $to = "nicolas.prudhomme.59@gmail.com"; // Remplace par ton email
    $subject = "Nouveau message de $name";

    // Composition du corps de l'email
    $body = "Nom: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";

    // Envoi de l'email
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi de votre message.";
    }
}
?>

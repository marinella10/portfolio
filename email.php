<?php
if(isset($_POST['objet']) && !empty($_POST['objet']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['message']) && !empty($_POST['message'])){


    //Creer des variables
    $destinataire = "marine.calandri1@gmail.com";
    $objet = $_POST['objet'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = $destinataire;
    $subject = $objet;
    $header = $email;
    $message = '<html>
        <body style="background-color: red; color:white">
             <p>Expediteur : '.$header.'</p>
            <p>Objet du mail : '.$subject.'</p>
            <p>Message : '.$message.'</p>
        </body>
    </html>';

    //Fonction mail de php
    mail($to, $subject, $message, $header);

    echo "<p class='alert alert-success'>Votre email a bien été envoyé !</p>";
}else{
    echo "<p class='alert alert-danger'>Votre email n'a pas ete envoyé, merci de recommencer!</p>";
}


<?php
define ('SERVER', "127.0.0.1");
define ('LOGIN', "root");
define ('MDP', "root");
define ('BDD', "chou");
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>

    <meta content="Login" property="og:title" />
    <meta content="Description" property="og:description" />
    <meta content="#c5a4ff" data-react-helmet="true" name="theme-color" />

    <body>
    <header>
        <h1>Inscription</h1>
    </header>


    <?php
try{
    //On crée un objet $conn qui représente la connexion au SGBD
    $conn = new PDO("mysql:host=".SERVER.";dbname=".BDD, LOGIN, MDP);
    //On crée un rapport d’erreur et on définit le mode d'erreur de PDO sur Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Inscription réussis <br>';
    } //fin du try
    //On capture les exceptions si une exception est lancée et on affiche les informations relatives à celle-ci
    catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
    }



//Exemple d’enregistrement de données dans la table « membres » à partir d’un formulaire
$insert = $conn->prepare("INSERT INTO case_shop (username, password, email) VALUES (:username, :password, :email)");
$insert->bindParam(':username', $_POST['username']);
$insert->bindParam(':password', $_POST['password']);
$insert->bindParam(':email', $_POST['email']);
if ($insert->execute()) {
    echo 'Entrée ajoutée dans la table';
} else {
    echo 'Une erreur s\'est produite lors de l\'ajout de l\'entrée dans la table';
}
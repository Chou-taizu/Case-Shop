<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test - Login</title>

    <meta content="Login" property="og:title" />
    <meta content="Description" property="og:description" />
    <meta content="#c5a4ff" data-react-helmet="true" name="theme-color" />
</head>

<header>
    <h1> INFORMATIONS </h1>
</header>

<body>
<?php
if (isset($_POST['user']) && isset($_POST['password'])) {
    $user = hash("SHA256", $_POST['user']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    if ($user == "8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918" && password_verify("admin", $password)){

        $message = file_get_contents('message.txt');
        echo "<div> Message secret: " . $message . " </div>";
    } else {
        header('Location: login.php');
    }
}
?>
</body>

<footer>

</footer>

</html>
    
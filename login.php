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
    <h1> CONNECTEZ-VOUS </h1>
</header>

<body>
    <form action = "login_submit.php" method = "POST">
        <table>
            <tr>
                <td><div>Login: <input type="text" name="user" placeholder="Username" required></div></td>
            </tr>
            <tr>
                <td><div>Mot de passe: <input type="password" name="password" placeholder="Password" required></div></td>
            </tr>
            <tr>
                <td><div>Vérif Mot de passe: <input type="password" name="password" placeholder="Password" required></div></td>
            </tr>
            <tr>
                <td><div>Email: <input type="email" name="email" placeholder="email" required></div></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Envoyer"></td>
            </tr>
        </table>
</body>

<footer>

</footer>

</html>
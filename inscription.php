<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Inscription</h1>

    <form method="post" action="index.php">
        <input type="text" name="name" placeholder="Nom" required><br>
        <input type="text" name="username" placeholder="Nom d'utilisateur" required><br>
        <input type="email" name="email" placeholder="Adresse e-mail" required><br>
        <input type="password" name="password" placeholder="Mot de passe" required><br>
        <input type="text" name="photo" placeholder="URL de la photo" required><br>
        <button type="submit">S'inscrire</button>
    </form>
</body>
</html>

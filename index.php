<?php
require "config.php";

// Afficher les tweets du plus récent au plus ancien
$requete = $database->prepare("SELECT * FROM tweets ORDER BY created_at DESC");
$requete->execute();
$tweets = $requete->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Acceuil</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Twixer</h1>

    <!-- Formulaire de recherche -->
<h2>Rechercher des twixs</h2>
<form method="get" action="search.php">
    <input type="text" name="term" placeholder="Rechercher...">
    <button type="submit">Rechercher</button>
</form>

<!-- Formulaire pour créer un nouveau twix -->
<h2>Créer un nouveau twix</h2>
<form method="post" action="add_tweet.php">
    <textarea name="content" placeholder="Quoi de neuf ?"></textarea>
    <input type="hidden" name="user_id" value="1">
    <button type="submit">Envoyer</button>
</form>

    <!-- Affichage des tweets -->
    <div class="tweets">
        <?php foreach ($tweets as $tweet): ?>
            <div class="tweet">
                <p class="content"><?= $tweet['content'] ?></p>
                <p class="user">Posté par : <?= $tweet['user_id'] . $tweet['photo'] ?> le <?= $tweet['created_at']; ?></p>
                <form method="post" action="delete_tweet.php">
                    <input type="hidden" name="tweet_id" value="<?= $tweet['id'] ?>">
                    <button type="submit" class="delete-btn">Supprimer</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>

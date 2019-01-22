<?php
require_once('helper.php');

$bdd = dbConnect();

/* 
Version optimale avec un prepare/execute : 

$request = 'SELECT * FROM movies_thomas WHERE id = :id';

$response = $bdd->prepare($request);

$film = $response->execute([
    'id' => $_GET['id']
]); */

$response = $bdd->query('SELECT * FROM movies_thomas WHERE id = ' . $_GET['id']);

$film = $response->fetch();

if (!$film) {
    $_SESSION['element_doesnt_exist'] = true;
    Header('Location: list.php');
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $film['title']; ?> (<?= $film['year_of_prod']; ?>)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-12">

            <h1><?= $film['title']; ?> (<?= $film['year_of_prod']; ?>)</h1>
            <small>Réalisé par <?= $film['director']; ?> avec <?= $film['actors']; ?>. Une production de <?= $film['producer']; ?>.</small>

            <hr>
            <blockquote class="blockquote">
                <p class="mb-0">
                    Un oeuvre de type <?= $film['category']; ?>, disponible en langue "<?= $film['language'] ?>".
                    <br>
                    
                    <strong>Vidéo : </strong> <?= (!empty($film['video'])) ? "<a href='".$film['video']."' target='_blank'>Cliquer ici</a>" : "Aucune vidéo disponible."; ?>
                </p>
                <footer class="blockquote-footer">
                    <?= $film['storyline']; ?>
                </footer>
            </blockquote>

                <a href="list.php">Retour à la liste</a>
            </div>
        </div>
    </div>
    
</body>
</html>
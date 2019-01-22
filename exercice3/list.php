<?php
require_once('helper.php');

$bdd = dbConnect();

$request = "SELECT id, title, director, year_of_prod FROM movies_thomas";

$response = $bdd->query($request);

$movies = [];

while ($film = $response->fetch()) {
    $movies[] = $film;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vidéoclub - Liste des films</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">

                <p>
                    <h1>Liste des films au vidéoclub</h1>
                    <a href="add.php" class="btn btn-sm btn-danger">Ajouter un film</a>
                    <hr>
                    <ul class="list-group">
                    <?php   
                        if (!empty($_SESSION['element_doesnt_exist'])) {
                            echo '<li class="list-group-item list-group-item-danger">Attention, le film demandé n\'existe pas ou a été supprimé.</li>';
                            unset($_SESSION['element_doesnt_exist']);
                        }
                    ?>
                    </ul>
                </p>


                <table class="table">
                    <tr>
                        <th>Titre</th>
                        <th>Réalisateur</th>
                        <th>Année de production</th>
                        <th></th>
                    </tr>

                    <?php foreach($movies as $m) { ?>
                        <tr>
                            <td><?= $m['title']; ?></td>
                            <td><?= $m['director']; ?></td>
                            <td><?= $m['year_of_prod']; ?></td>
                            <td>
                                <a href="show.php?id=<?= $m['id']; ?>" class="btn btn-sm btn-primary">Plus d'infos</a>
                                </td>
                        </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</body>
</html>


http://www.example.com/page.php?nom=thomas&prenom=durant&role=admin

$_POST['titre']

$_GET['nom']
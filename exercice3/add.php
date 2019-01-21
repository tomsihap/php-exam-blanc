<?php require_once('helper.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vidéoclub</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">

                <p class="lead">
                    <h1>Enregistrement d'un film</h1>
                    <a href="list.php" class="btn btn-sm btn-danger">< retour</a>
                    <br>
                    Les champs avec une astérisque * sont obligatoires.
                    <ul class="list-group">
                    <?php   
                        if (!empty($_SESSION['form_error'])) {
                            foreach($_SESSION['form_error'] as $err) {
                                echo '<li class="list-group-item list-group-item-danger"><?= $err; ?></li>';
                            }
                            $_SESSION['form_error'] = [];
                        }
                    ?>
                    </ul>
                </p>

                <form action="save.php" method="post">

                    <label for="titleMovie">Titre du film*</label>
                    <small>Entre 5 et 50 caractères.</small>
                    <input id="titleMovie" class="form-control" type="text" name="title" required>

                    <label for="actorsMovie">Acteurs*</label>
                    <small>Entre 5 et 255 caractères.</small>
                    <input id="actorsMovie" class="form-control" type="text" name="actors" required>

                    <label for="directorMovie">Réalisateur*</label>
                    <small>Entre 5 et 50 caractères.</small>
                    <input id="directorMovie" class="form-control" type="text" name="director" required>

                    <label for="producerMovie">Producteur*</label>
                    <small>Entre 5 et 50 caractères.</small>
                    <input id="producerMovie" class="form-control" type="text" name="producer" required>

                    <label for="yearOfProdMovie">Année*</label>
                    <select id="yearOfProdMovie" class="form-control" name="year_of_prod">
                    <?php
                        for ($i=1901; $i < 2030; $i++) {
                            echo "<option value='".$i."'>".$i."</option>";
                        }
                    ?>
                    </select>

                    <label for="languageMovie">Langue*</label>
                    <select id="languageMovie" class="form-control" name="language">
                        <option value="fr">Français</option>          
                        <option value="en">Anglais</option>
                        <option value="de">Allemand</option>
                        <option value="es">Espagnol</option>
                    </select>

                    <label for="">Catégorie*</label>
                    <select id="categoryMovie" class="form-control" name="category">
                        <option value="horreur">Horreur</option>          
                        <option value="comedie">Comédie</option>
                        <option value="documentaire">Documentaire</option>
                    </select>

                    <label for="storylineMovie">Synopsis</label>
                    <textarea id="storylineMovie" class="form-control" cols="30" rows="10" name="storyline"></textarea>

                    <label for="videoMovie">Lien vers la vidéo</label>
                    <small>Entre 5 et 100 caractères.</small>
                    <input id="videoMovie" class="form-control" type="text" name="video">

                    <hr>
                    
                    <button class="btn btn-primary float-right" type="submit">Enregistrer</button>
                </form>

            </div>
        </div>
    </div>
</body>
</html>


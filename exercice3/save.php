<?php
require_once('helper.php');
/**
 * Je vérifie si mes variables se transmettent bien avec var_dump($_POST);
 */

$_SESSION['form-error'] = [];


/**
 * j'effectue mes validations :
 * - title, director, actors, producer, storyline : mini 5 caractères
 * - video : format d'URL valide
 */

/**
 * Titre
 */
if (empty($_POST['title'])) {
    echo formError("Le titre ne doit pas être vide.");
}
elseif(strlen($_POST['title']) < 5) {
    echo formError("Le titre doit faire plus de 5 caractères.");
}
else {
    $title = $_POST['title'];
}

/**
 * Acteurs
 */
if (empty($_POST['actors'])) {
    echo formError("Le champ acteurs ne doit pas être vide.");
}
elseif(strlen($_POST['actors']) < 5) {
    echo formError("Le champ acteurs doit faire plus de 5 caractères.");
}
else {
    $actors = $_POST['actors'];
}

/**
 * Réalisateur
 */
if (empty($_POST['director'])) {
    echo formError("Le titre ne doit pas être vide.");
}
elseif(strlen($_POST['director']) < 5) {
    echo formError("Le titre doit faire plus de 5 caractères.");
}
else {
    $director = $_POST['director'];
}


/**
 * Producteur
 */
if (empty($_POST['producer'])) {
    echo formError("Le producteur ne doit pas être vide.");
}
elseif(strlen($_POST['producer']) < 5) {
    echo formError("Le producteur doit faire plus de 5 caractères.");
}
else {
    $producer = $_POST['producer'];
}

/**
 * Synopsis (nullable)
 */
if (empty($_POST['storyline'])) {
    $storyline = null;
}
elseif(strlen($_POST['storyline']) < 5) {
    echo formError("Le synopsis doit faire plus de 5 caractères.");
    $storyline = null;
}
else {
    $storyline = $_POST['storyline'];
}

/**
 * Vidéo (nullable)
 */
if (empty($_POST['video'])) {
    $video = null;
}

elseif(!preg_match('/((([A-Za-z]{3,9}:(?:\/\/)?)(?:[-;:&=\+\$,\w]+@)?[A-Za-z0-9.-]+|(?:www.|[-;:&=\+\$,\w]+@)[A-Za-z0-9.-]+)((?:\/[\+~%\/.\w-_]*)?\??(?:[-\+=&;%@.\w_]*)#?(?:[\w]*))?)/', $_POST['video'])) {
    echo formError("La vidéo doit être une URL valide.");
    return;
}
else {
    $video = $_POST['video'];
}

/**
 * Année de production
 */
if (empty($_POST['year_of_prod'])) {
    echo formError("L'année de production est obligatoire.");
    return;
}
else {
    $yearOfProd = $_POST['year_of_prod'];
}

/**
 * Langue
 */
if (empty($_POST['language'])) {
    echo formError("La langue est obligatoire.");
    return;
}
else {
    $language = $_POST['language'];
}

/**
 * Catégorie
 */
if (empty($_POST['category'])) {
    echo formError("La catégorie est obligatoire.");
    return;
}
elseif(!in_array($_POST['category'], ['horreur', 'comedie', 'documentaire'])) {
    echo formError("La catégorie est invalide.");
    return;
}
else {
    $category = $_POST['category'];
}

/**
 * Fin des validations
 * 
 * Enregistrement en BDD
 */

// Erreur si l'un de mes champs requried est vide
if (empty($title) || empty($actors) || empty($director) || empty($producer) || empty($yearOfProd) || empty($language) || empty($category) ) {
    echo formError('Les champs titre, acteurs, réalisateur, producteur, année de production, langue, catégorie sont obligatoires.');
}

else {
    $bdd = dbConnect();

    $query = "  INSERT INTO movies_thomas(title, actors, director, producer, year_of_prod, language, category, storyline, video)
                VALUES (:title, :actors, :director, :producer, :yearOfProd, :language, :category, :storyline, :video)";

    $response = $bdd->prepare($query);

    $response->execute([
        'title'     => $title,
        'actors'    => $actors,
        'director'  => $director,
        'producer'  => $producer,
        'yearOfProd'=> $yearOfProd,
        'language'  => $language,
        'category'  => $category,
        'storyline' => $storyline,
        'video'     => $video
    ]);

    echo "<h3>Le film a bien été ajouté !</h3>";
    echo "<a href='list.php'>Retour à la liste</a>";
}
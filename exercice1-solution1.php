<?php

/**
 * On créée un tableau de données comme demandé
 */
$donnees = [
    'prenom'    => 'John',
    'nom'       => 'Doe',
    'adresse'   => '13 rue des lilas',
    'zipcode'   => '69007',
    'ville'     => 'Lyon',
    'email'     => 'john.doe@gmail.com',
    'phone'     => '0612345678',
    'birthdate' =>  '1991/01/12'
];

/**
 * On initialise la liste avec <ul> et on lance le foreach() sur le tableau de données
 */
echo '<ul>';
    foreach($donnees as $caracteristique => $valeur) {

        // Si je suis sur la caractéristique "birthdate", alors je la traite comme une date
        if ($caracteristique == 'birthdate') {
            echo '<li>' . $caracteristique . ': ' . date('d/m/Y', strtotime($valeur));
        }

        // Sinon, j'affiche le reste classiquement dans un <li>
        else {
            echo '<li>' . $caracteristique . ': ' . $valeur;
        }
    }
echo '</ul>';


// Bonus : avec DateTime :
// On créée un objet DateTime prennant en paramètres une date au format YYYY-MM-DD
// Cet objet a une méthode "->format()" permettant d'afficher la date au format souhaité.

echo '<ul>';
foreach($donnees as $caracteristique => $valeur) {
    
    if ($caracteristique == 'birthdate') {

        $dateObject = new DateTime($valeur);

        echo '<li>' . $caracteristique . ': ' . $dateObject->format('d/m/Y');
    }

    else {
        echo '<li>' . $caracteristique . ': ' . $valeur;
    }
    
}
echo '</ul>';
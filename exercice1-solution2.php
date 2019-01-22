<?php

/**
 * Une autre solution plus optimale :
 * On peut traiter le tableau en amont afin d'avoir un foreach qui soit propre ! (pas de if/else sur les données)
 */

$donnees = [
    'prenom'    => 'John',
    'nom'       => 'Doe',
    'adresse'   => '13 rue des lilas',
    'zipcode'   => '69007',
    'ville'     => 'Lyon',
    'email'     => 'john.doe@gmail.com',
    'phone'     => '0612345678',
    'birthdate' =>  '1991-01-12'
];


/**
 * Je modifie les champs de mon tableau que je dois adapter, ici 'birthdate' :
 */

// Avec date() :
$donnees['birthdate'] = date('d/m/Y', strtotime($donnees['birthdate']));


// Avec DateTime :
$dateObject = new DateTime($donnees['birthdate']);
$donnees['birthdate'] = $dateObject->format('d/m/Y');

/**
 * J'affiche ma liste
 */
echo '<ul>';
    foreach($donnees as $caracteristique => $valeur) {
        echo '<li>' . $caracteristique . ': ' . $valeur;
    }
echo '</ul>';
<?php

/**
 * Convertit un montant donné dans la devise oposée sur la paire EUR/USD.
 * Le taux utilisé est 1 euro = 1.085965 dollars américains
 * 
 * @param mixed $montant    un montant (int ou float) dans la devise de départ
 * @param string $devise    la devise d'arrivée ('EUR' ou 'USD')
 */
function converter($montant, $devise) {

    $eurToUsd = 1.085965;

    if (!is_numeric($montant)) {
        // Erreur : le montant doit être numérique
        return false;
    }

    switch($devise) {
        case 'EUR':
            return $montant * $eurToUsd;
            break;
        case 'USD':
            return $montant / $eurToUsd;
        
        default:

            // Erreur : la devise ne peut être que 'EUR' ou 'USD'
            return false;
    }
}

// Cas OK :
var_dump(converter(12, 'USD'));
var_dump(converter(12, 'EUR'));
var_dump(converter(9.15, 'EUR'));
var_dump(converter(9.15, 'USD'));
var_dump(converter("12", 'USD'));


// Cas invalides :
var_dump(converter(9,15, 'EUR'));           // Il y a 3 arguments (9, 15 et EUR... Attention à la virgule qui doit être un point !)
var_dump(converter(12, 'Baht'));            // La devise est incorrecte
var_dump(converter("3 patates", 'Baht'));   // Le montant doit être numérique


<?php

$random_words = ["ape", "apple", "zoo", "pie", "elephant", "banana", "picnic", "eye"];

// Fonction de comparaison pour le tri
function compareMots($a, $b) {
    $longA = strlen($a);
    $longB = strlen($b);

    // Si les longueurs sont différentes, trie par longueur
    if ($longA !== $longB) {
        return $longA - $longB;
    }

    // Si les longueurs sont les mêmes, trie alphabétiquement
    return strcmp($a, $b);
}

// Utilisation de la fonction de comparaison pour trier le tableau
usort($random_words, 'compareMots');

// Affichage du tableau trié
echo "Tableau trié :\n";
print_r($random_words);

?>

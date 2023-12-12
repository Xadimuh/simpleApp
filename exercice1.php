<?php
// Exercice 1
$messyArray = [
    "Marguerite" => "Orange",
    "Kiwi",
    7 => "Pomme",
    [
        "Prune",
        "Cerise" => "Cerise"
    ]
];

// Afficher "Kiwi" à partir de messyArray si la clé existe
$kiwi = isset($messyArray[1]) ? $messyArray[1] : null;

// Afficher "Cerise" à partir de messyArray si la clé existe
$cerise = isset($messyArray[3]["Cerise"]) ? $messyArray[3]["Cerise"] : null;

// Supprimer "Prune" à partir de messyArray si la clé existe
if (isset($messyArray[3][0])) {
    unset($messyArray[3][0]);
}

// Tableau final
$resultArray = [
    ["Action", "Résultat"],
    ["Afficher 'Kiwi'", $kiwi ?? "Clé 1 non trouvée"],
    ["Afficher 'Cerise'", $cerise ?? "Clé 'Cerise' non trouvée"],
    ["Supprimer 'Prune'", isset($messyArray[3][0]) ? "Prune supprimé" : "Clé 0 non trouvée dans le sous-tableau à l'indice 3"],
    ["Résultat final", print_r($messyArray, true)],
];

// Afficher le résultat sous forme de tableau
echo "\n";
foreach ($resultArray as $row) {
    echo "| " . str_pad($row[0], 20) . " | " . str_pad(strval($row[1]), 50) . " |\n";
}
echo "\n";
?>

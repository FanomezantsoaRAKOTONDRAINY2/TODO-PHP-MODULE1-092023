<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nouveauEt = [
        'id' => uniqid(), // Générer un ID unique (ou utiliser un compteur)
        'intitule' => $_POST['intitule'],
    ];

    // Ajouter le nouveau produit au fichier de données
    file_put_contents($dataFilePath, serialize($nouveauEt) . PHP_EOL, FILE_APPEND);

    // Rediriger vers la liste des produits
    header('Location: index.php');
}
?>
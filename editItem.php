<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $m_intitule = $_POST['m_intitule'];
    $id = $_POST['id'];
    $updatedEtudData = [
        'id' => $id,
        'intitule' => $m_intitule,
    ];

    // Lire les données actuelles du fichier
    $nouveauEt = [];
    if (file_exists($dataFilePath)) {
        $data = file_get_contents($dataFilePath);
        $lines = explode(PHP_EOL, $data);
        foreach ($lines as $line) {
            if (!empty($line)) {
                $etudEnr = unserialize($line);
                if ($etudEnr['id'] == $id) {
                    // Mettre à jour le produit
                    $nouveauEt[] = $updatedEtudData;
                } else {
                    $nouveauEt[] = $etudEnr;
                }
            }
        }

        // Écrire les données mises à jour dans un nouveau fichier temporaire
        $tempFilePath = $dataFilePath . '.tmp';
        foreach ($nouveauEt as $etud) {
            file_put_contents($tempFilePath, serialize($etud) . PHP_EOL, FILE_APPEND);
        }

        // Renommer le fichier temporaire pour écraser l'original
        if (rename($tempFilePath, $dataFilePath)) {
            // Rediriger vers la liste des produits
            header('Location: index.php');
        } else {
            echo 'Erreur lors de la mise à jour du fichier.';
        }
    }
}

?>
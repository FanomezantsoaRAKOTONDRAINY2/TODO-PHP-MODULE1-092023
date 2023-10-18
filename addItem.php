<?php
    include('fct/ruquest.php');
    include('confing/app.php');

    $intitule = "\n".$_POST['intitule'];

    if (file_exists(FIL_NAME)) {
        // file_put_contents(FIL_NAME, $intitule);

        // Ouvrir le fichier en mode écriture
        // Si le fichier n'existe pas, il sera créé. Si le fichier existe, son contenu sera écrasé.
        $handle = fopen(FIL_NAME, 'a');

        // Vérifier si l'ouverture du fichier a réussi
        if ($handle) {
            // Écrire les données dans le fichier
            fwrite($handle, $intitule);

            // Fermer le fichier
            fclose($handle);

            echo "Les données ont été enregistrées avec succès dans le fichier en mode écriture : $filePath";
        } else {
            echo "Impossible d'ouvrir le fichier en mode écriture.";
        }
    }

    //j'ajoute nouvelle item
    header('Location:index.php');
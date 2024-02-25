<?php

$motdepasse = "azertyuiop";

function cherche($motdepasse) {

    $caracteres = 'abcdefghijklmnopqrstuvwxyz';
    $tentative = '';
    $tentatives_testees = [];

    while ($tentative !== $motdepasse) {
        do {
            $tentative = '';
            for ($i = 0; $i < strlen($motdepasse); $i++) {
                $tentative .= $caracteres[rand(0, strlen($caracteres) - 1)];
            }
        } while (in_array($tentative, $tentatives_testees));

        $tentatives_testees[] = $tentative;

        echo "Tentative en cours : $tentative\r";
        echo implode("\n", $tentatives_testees) . "\n";

        if ($tentative === $motdepasse) {
            return "Mot de passe trouvé : $tentative";
        }
    }

    return "Mot de passe non trouvé.";
}

$resultat = cherche($motdepasse);
echo $resultat;


<?php

$PRIVATEKEY = "";

// On vérifie que la méthode POST est utilisée
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // On vérifie si le champ "recaptcha-response" contient une valeur
    if (empty($_POST['recaptcha-response'])) {
        header('Location: index.php');
    } else {
        // On prépare l'URL
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=.$PRIVATEKEY.response={$_POST['recaptcha-response']}";
        $response = file_get_contents($url);

        // On vérifie qu'on a une réponse
        if (empty($response) || is_null($response)) {
            header('Location: index.php');
        } else {
            $data = json_decode($response);
            if ($data->success) {
                if (
                    isset($_POST['nom']) && !empty($_POST['nom']) &&
                    isset($_POST['prenom']) && !empty($_POST['prenom']) &&
                    isset($_POST['email']) && !empty($_POST['email'])

                ) {
                    // On nettoie le contenu
                    $nom = strip_tags($_POST['nom']);
                    $prenom = strip_tags($_POST['prenom']);
                    $email = strip_tags($_POST['email']);


                    // Ici vous traitez voh2/>s données

                    echo "<h2 id='reponse'> Message de {$nom} {$prenom} envoyé <h2/>";
                }
            } else {
                header('Location: index.php');
            }
        }
    }
}

<?php
//Passare come parametri GET name, mail e age e
// verificare (cercando i metodi che non conosciamo nella documentazione) che:
// 1. name sia più lungo di 3 caratteri,
// 2. mail contenga un punto e una chiocciola
// 3. age sia un numero.
// Se tutto è ok stampare “Accesso riuscito”, altrimenti
// “Accesso negato”
// echo 'hello world';

$userName = $_GET["name"];
$userMail = $_GET["mail"];
$userAge = $_GET["age"];

// if (strlen($userName) > 3 && !is_numeric($userName) && ctype_alpha($userName) &&  strpos($userMail, '.') !== false && strpos($userMail, '@') !== false && is_numeric($userAge) ) {
//     echo 'Accesso riuscito';
//
// } else {
//     echo 'Accesso negato';
// }



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Snack-2</title>
    </head>
    <body>
        <h1>
            <?php
            if (strlen($userName) > 3 && !is_numeric($userName) && ctype_alpha($userName) &&  strpos($userMail, '.') !== false && strpos($userMail, '@') !== false && is_numeric($userAge) ) {
                echo 'Accesso riuscito';

            } else {
                echo 'Accesso negato';
            }
            ?>
        </h1>
    </body>
</html>

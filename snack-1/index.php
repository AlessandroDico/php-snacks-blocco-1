<?php

//Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
// Stampiamo a schermo tutte le partite con questo
// schema:
// Olimpia Milano - Cantù | 55 - 60

// echo 'hello world';

$matches = [
    [
        "match" => [
            "casa" => [
                "team" => "milano",
                "punti" => 60
            ],
            "ospiti" => [
                "team" => "cantù",
                "punti" => 40
            ],
        ],
    ],
    [
        "match" => [
            "casa" => [
                "team" => "varese",
                "punti" => 50
            ],
            "ospiti" => [
                "team" => "cantù",
                "punti" => 45
            ],
        ]

    ],
];


// var_dump($matches);

$nuovoArray = [];
for ($i = 0; $i < count($matches); $i++) {

    $nuovoArray[] = $matches[$i]["match"]["casa"]["team"] . ' - ' . $matches[$i]["match"]["ospiti"]["team"] . ' | '. $matches[$i]["match"]["casa"]["punti"] . ' - ' . $matches[$i]["match"]["ospiti"]["punti"];
}

for ($i = 0; $i < count($nuovoArray); $i++) {

    var_dump($nuovoArray[$i]);
    print_r($nuovoArray[$i]);
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Snack-1</title>
    </head>
    <body>
        <p>
            <?php
            for ($i = 0; $i < count($matches); $i++) {
                echo $matches[$i]["match"]["casa"]["team"] . ' - ' . $matches[$i]["match"]["ospiti"]["team"] . ' | ';
                echo $matches[$i]["match"]["casa"]["punti"] . ' - ' . $matches[$i]["match"]["ospiti"]["punti"];
            }
            ?>
            <br>
        </p>
    </body>
</html>

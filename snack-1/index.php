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
                "team" => "Olimpia Milano",
                "punti" => 60
            ],
            "ospiti" => [
                "team" => "Cantù",
                "punti" => 40
            ],
        ],
    ],
    [
        "match" => [
            "casa" => [
                "team" => "Varese",
                "punti" => 50
            ],
            "ospiti" => [
                "team" => "Cantù",
                "punti" => 45
            ],
        ]

    ],
    [
        "match" => [
            "casa" => [
                "team" => "Varese",
                "punti" => 50
            ],
            "ospiti" => [
                "team" => "Virtus Bologna",
                "punti" => 35
            ],
        ]

    ],
    [
        "match" => [
            "casa" => [
                "team" => "Victoria Libertas",
                "punti" => 50
            ],
            "ospiti" => [
                "team" => "Virtus Bologna",
                "punti" => 45
            ],
        ]

    ],
    [
        "match" => [
            "casa" => [
                "team" => "Allianz Trieste",
                "punti" => 50
            ],
            "ospiti" => [
                "team" => "Brescia",
                "punti" => 55
            ],
        ]

    ],
    [
        "match" => [
            "casa" => [
                "team" => "Venezia Reyer",
                "punti" => 50
            ],
            "ospiti" => [
                "team" => "Olimpia Milano",
                "punti" => 60
            ],
        ]

    ],
];


// var_dump($matches);

$nuovoArray = [];
for ($i = 0; $i < count($matches); $i++) {

    $nuovoArray[] = $matches[$i]["match"]["casa"]["team"] . ' - ' . $matches[$i]["match"]["ospiti"]["team"] . ' | '. $matches[$i]["match"]["casa"]["punti"] . ' - ' . $matches[$i]["match"]["ospiti"]["punti"];
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Snack-1</title>
    </head>
    <body>
        <h1>
            Partite torneo 2020
        </h1>
        <span style="margin-right:150px;font-size:35px;">Squadre</span> <span style="font-size:35px;">Risultati</span>
        <p style="font-size:25px;">
            <?php
            for ($i = 0; $i < count($nuovoArray); $i++) {

                echo "<h2 style=\"color:blue;\">" . $nuovoArray[$i] . "</h2>";

            }
            ?>
        </p>
    </body>
</html>
<?php

//SECONDA SOLUZIONE
/*
$matches = [
    [
        "casa" => [
            "team" => "Olimpia Milano",
            "punti" => 60
        ],
        "ospiti" => [
            "team" => "Cantù",
            "punti" => 40
        ],
    ],
    [
        "casa" => [
            "team" => "Varese",
            "punti" => 50
        ],
        "ospiti" => [
            "team" => "Cantù",
            "punti" => 45
        ],
    ],
    [
        "casa" => [
            "team" => "Varese",
            "punti" => 50
        ],
        "ospiti" => [
            "team" => "Virtus Bologna",
            "punti" => 35
        ],
    ],
    [
        "casa" => [
            "team" => "Victoria Libertas",
            "punti" => 50
        ],
        "ospiti" => [
            "team" => "Virtus Bologna",
            "punti" => 45
        ],
    ],
    [
        "casa" => [
            "team" => "Allianz Trieste",
            "punti" => 50
        ],
        "ospiti" => [
            "team" => "Brescia",
            "punti" => 55
        ],
    ],
    [
        "casa" => [
            "team" => "Venezia Reyer",
            "punti" => 50
        ],
        "ospiti" => [
            "team" => "Olimpia Milano",
            "punti" => 60
        ],
    ],
];


$nuovoArray = [];
for ($i = 0; $i < count($matches); $i++) {

    $nuovoArray[] = $matches[$i]["casa"]["team"] . ' - ' . $matches[$i]["ospiti"]["team"] . ' | '. $matches[$i]["casa"]["punti"] . ' - ' . $matches[$i]["ospiti"]["punti"];
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Snack-1-Bis</title>
    </head>
    <body>
        <h1>
            Partite torneo 2020
        </h1>
        <span style="margin-right:150px;font-size:35px;">Squadre</span> <span style="font-size:35px;">Risultati</span>
        <p style="font-size:25px;">
            <?php
            for ($i = 0; $i < count($nuovoArray); $i++) {

                echo "<h2 style=\"color:green;\">" . $nuovoArray[$i] . "</h2>";

            }
            ?>
        </p>
    </body>
</html>
*/

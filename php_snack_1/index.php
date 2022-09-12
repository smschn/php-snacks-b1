<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack_1</title>
</head>
<body>

    <?php
    // creo un array di partite; ogni singola partita è un array associativo: do io i nomi alle chiavi;
    $partite = [
        [
            'squadra_casa' => 'Roma',
            'squadra_ospite' => 'Milan',
            'punti_casa' => 60,
            'punti_opsite' => 80
        ],
        [
            'squadra_casa' => 'Palermo',
            'squadra_ospite' => 'Canicattì',
            'punti_casa' => 75,
            'punti_opsite' => 95
        ],
        [
            'squadra_casa' => 'Fiorentina',
            'squadra_ospite' => 'Juventus',
            'punti_casa' => 120,
            'punti_opsite' => 15
        ],
        [
            'squadra_casa' => 'Molise',
            'squadra_ospite' => 'Italia',
            'punti_casa' => 333,
            'punti_opsite' => 111
        ]
    ]
    ?>

    <ul>
        <?php
            // stampo informazioni delle singole partite ciclando l'array, dentro un tag <li>;
            for ($i = 0; $i < count($partite); $i++) {
                echo '<li>' . $partite[$i]['squadra_casa'] . ' - ' . $partite[$i]['squadra_ospite'] . ': ' . $partite[$i]['punti_casa'] . ' - ' . $partite[$i]['punti_opsite'] . '</li>';
            }
        ?>
    </ul>

</body>
</html>
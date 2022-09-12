<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack_7</title>
</head>
<body>

    <?php
        // creo array con alunni
        $students = [
            [
                'name' => 'Marco',
                'surname' => 'Renio',
                'grades' => [
                    5,
                    7,
                    9
                ]
            ],
            [
                'name' => 'Carlo',
                'surname' => 'Zinco',
                'grades' => [
                    2,
                    4,
                    6
                ]
            ],
            [
                'name' => 'Stefano',
                'surname' => 'Argon',
                'grades' => [
                    2,
                    5,
                    9
                ]
            ],
        ];

        // debug
        var_dump($students);

        // stampo le informazioni attraverso un ciclo
        for ($i = 0; $i < count($students); $i++) {
            echo $students[$i]['name'] . ' - ' . $students[$i]['surname'] . ' - ' . array_sum($students[$i]['grades'])/count($students) . '<br>';
        }
    ?>

</body>
</html>
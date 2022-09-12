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
        // var_dump($students);

        // stampo le informazioni attraverso un ciclo
        for ($i = 0; $i < count($students); $i++) {
            // vecchia sintassi:
            // echo 'Nome: ' . $students[$i]['name'] . '<br>' . 'Cognome: ' . $students[$i]['surname'] . '<br>' . 'Media voti: ' . array_sum($students[$i]['grades'])/count($students) . '<br><br>';
            // nuova sintassi:
            $name = $students[$i]['name'];
            $surname = $students[$i]['surname'];
            $averageGradeLong = array_sum($students[$i]['grades'])/count($students); // calcolo media
            $averageGrade = number_format($averageGradeLong, 2, '.', ''); // accetto solo due cifre decimali della media
            echo 'Nome: ' . $name . '<br>' . 'Cognome: ' . $surname . '<br>' . 'Media voti: ' . $averageGrade . '<br><br>';
        }
    ?>

</body>
</html>
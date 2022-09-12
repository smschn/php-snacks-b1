<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack_4</title>
</head>
<body>

    <?php
        // creo array inizialmente vuoto
        $myArray = [];

        // attraverso un ciclo creo 15 numeri casuali e li pusho nell'array
        while (count($myArray) < 15) {
            $newInteger = rand(1, 100);
            if (!in_array($newInteger, $myArray)) {
                $myArray[] = $newInteger;
            }
        }

        // segue soluzione meno pulita:
        /*
        for ($i = 0; count($myArray) < 15; $i++) {
            $newInteger = rand(1, 100);
            if (!in_array($newInteger, $myArray)) {
                $myArray[] = $newInteger;
            }
        }
        */

        // debug
        var_dump($myArray);
    ?>

</body>
</html>
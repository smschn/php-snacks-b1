<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack_2</title>
</head>
<body>

    <?php
        // url da usare come test: php_snack_2/?name=giovanni&email=ciao@google.com&age=99

        // passo come parametro get i tre dati.
        $myName = $_GET['name'];
        $myEmail = $_GET['email'];
        $myAge = $_GET['age'];

        // verifico le condizioni come da richiesta.
        if (strlen($myName) > 3 && strpos($myEmail, '@') && strpos($myEmail, '.') && is_numeric($myAge)) {
            echo 'Accesso riuscito.';
        } else {
            echo 'Accesso negato.';
        }
    ?>

</body>
</html>
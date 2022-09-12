<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack_5</title>
</head>
<body>

    <?php
        $paragrafo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus numquam laboriosam dolor, tempora velit molestias, ipsum eum aspernatur ex dolore perspiciatis dolores. Officia eligendi molestiae exercitationem at obcaecati possimus blanditiis quam neque. Sequi qui libero nemo aspernatur totam obcaecati eum ea expedita officia ullam rem ducimus, porro itaque fuga sint. Dolorem consequatur, deleniti laborum dolores facere soluta? Illo quas necessitatibus, iusto nostrum dolore aspernatur quaerat libero tenetur nesciunt quam voluptates blanditiis ea, vitae molestias! Perspiciatis, repudiandae quos deleniti, molestiae totam vero illum nihil voluptates dolores molestias cumque? Quibusdam sint, similique rerum totam dolor voluptates exercitationem aut rem perspiciatis nam adipisci.';
        // separo il paragrafo ad ogni punto: explode() crea un array di stringhe.
        $paragrafi_separati = explode('.', $paragrafo);

        // echo var_dump($paragrafi_separati); => per debug: controllo se la variabile è un array di stringhe.
        // ciclo l'array $paragrafi_separati e stampo ciascun paragrafo separato in un tag <p>.
        for ($i = 0; $i < count($paragrafi_separati); $i++) {
            echo "<p>" . $paragrafi_separati[$i] . "</p>";
        }
    ?>

</body>
</html>
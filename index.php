<?php

$paragrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae labore accusantium amet, tempore voluptas magni laboriosam! Non aspernatur dolor suscipit optio a quod, quo veniam officia alias odio, laudantium veritatis? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid explicabo ab, temporibus amet expedita tempore aliquam sapiente distinctio omnis nesciunt molestiae nihil perspiciatis excepturi aspernatur ipsa assumenda quae velit odio.';

$censura = '***';

$paragrafoCensurato = str_replace(strtolower($_GET['parola']), $censura, strtolower($paragrafo));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>

<body>
    <h2>Paragrafo Originale</h2>
    <p>
        <?php

        echo $paragrafo;

        ?>
    <h3>
        Lunghezza Paragrafo:

        <?php

        echo strlen($paragrafo);

        ?>

    </h3>
    </p>

    <h2>
        Paragrafo Modificato
    </h2>

    <p>
        <?php

        echo $paragrafoCensurato;

        ?>
    <h3>
        Lunghezza Paragrafo:

        <?php

        echo strlen($paragrafoCensurato);

        ?>

    </h3>
    </p>

</body>

</html>
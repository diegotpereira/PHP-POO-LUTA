<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combate PHP</title>
</head>

<body>
    <h1>ULTRA EMOJI COMBAT</h1>

    <pre>
        <?php
        require_once 'modelo/Lutador.php';
        require_once 'modelo/Luta.php';

        $lutador = array();

        $lutador[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
        $lutador[1] = new Lutador("PutScript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
        $lutador[2] = new Lutador("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
        $lutador[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
        $lutador[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
        $lutador[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);

        // $lutador[3]->status();
        // $lutador[3]->apresentar();

        // print_r($lutador[0]);

        $UEC01 = new Luta();
        $UEC01->marcarLuta($lutador[0], $lutador[1]);
        $UEC01->lutar();
        ?>
    </pre>
</body>

</html>
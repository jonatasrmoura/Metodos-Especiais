<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Caneta.php';

        $c1 = new Caneta("BIC", "Preto", 0.4);
        print_r($c1);

        echo "<br/><br/>";

        $c2 = new Caneta("Faber", "Verde", 0.5);
        print_r($c2);
    ?>
    </pre>
</body>
</html>
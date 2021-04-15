<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <?php
    $n = isset($_POST["num"]) ? $_POST["num"] : 0;
    $o = isset($_POST["oper"]) ? $_POST["oper"] : 1;
    switch ($o) {
        case 1:
            $r = $n * 2;
            break;
        case 2:
            $r = $n ** 3;
            break;
        case 3:
            $r = sqrt($n);
    }

    echo "O resultado da operação foi $r";

    ?>
    <a href="switch.php">Voltar</a>
</body>

</html>
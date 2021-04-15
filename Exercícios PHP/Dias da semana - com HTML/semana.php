<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $d = isset($_POST["ds"]) ? $_POST["ds"] : 0;
    $dia = $_POST['ds'];
    switch ($d) {
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            echo "Hoje é dia de estudar!";
            break;
        case 7:
        case 8:
            echo "Hoje é dia de descansar!";
            break;
        default:
            echo "Dia da semana inválido";
    }
    ?>
</body>

</html>
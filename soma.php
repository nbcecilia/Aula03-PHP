<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma</title>
</head>
<body>
    <?php
    $cont = 1;
    $ac = 0;
    while ($cont < 4) {
    echo "<form method= 'POST'>";
    echo"<label>Digite um número:</label><br><br>";
    echo "<input type='number' name='num' step='1' required><br><br>";
    echo"<button type='submit'>Responder</button><br><br>";
    $num = $_POST['num']?? 0;
    $cont++;
    $ac = $ac + $num;
    }
    echo "A soma dos números é: $ac";
    ?>
</body>
</html>
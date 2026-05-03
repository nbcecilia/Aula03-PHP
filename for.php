<!DOCTYPE html>
<html lang="en">
<!-- FOR executa a condição até q seja atendida-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOR</title>
</head>

<body>
    <h2>LAÇOS DE REPETIÇÃO - FOR</h2>
    <form method="post">
        <label>Digite um número de 1 a 10:</label>
        <input type="number" name="num" required><br><br>

        <input type="submit" value="enviar"><br><br>
    </form>
    <?php
    $num = $_POST["num"] ?? 0;
for ($cont=1; $cont <= 10 ; $cont++) { // está inicialização do contador + a condição + o incremento entre parentes//
    $soma = $cont + $num;
    echo "$num + $cont = $soma <br>";
}    
?>

</body>
<a href="index.php">Laço de repetição</a><br>

</html>
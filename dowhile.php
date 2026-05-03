<!DOCTYPE html>
<html lang="en">
<!-- DOwhile executa pelo uma vez  até atender a condição-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DO WHILE</title>
</head>

<body>
    <h2>LAÇOS DE REPETIÇÃO - DO WHILE</h2>
    <form method="post">
        <label>Digite um número de 1 a 10:</label>
        <input type="number" name="num" required><br><br>

        <input type="submit" value="enviar"><br><br>
    </form>
    <?php
    $cont = 1; //inicialização//
    $num = $_POST["num"] ?? 0;


    do {
    $soma = $cont + $num;
    echo "$num + $cont = $soma <br>";
    $cont ++; //incremento, decremento//   
    }while($cont <= 10) //condição//
?>
</body>
<a href="index.php">Laço de repetição</a><br>

</html>
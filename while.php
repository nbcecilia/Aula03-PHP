<!DOCTYPE html>
<html lang="pt-br">
<!-- while (enqto) executa a repetição se atender a condção/ $cont = $cont +1;  contador=condição=incremento-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHILE</title>
</head>

<body>
    <h2>LAÇOS DE REPETIÇÃO -WHILE</h2>
    <form method="post">
        <label>Digite um número de 1 a 10:</label>
        <input type="number" name="num" required><br><br>
        <!--  com action posso abrir o php em outra aba(abrindo outro arquivo e colocando dentro do action) -->
        <input type="submit" value="enviar"><br><br>
    </form>
    <?php
    $cont = 1; //inicialização//
    $num = $_POST["num"] ?? 0;


    while($cont < 10){ //condição//
    $soma = $cont + $num;
    echo "$num + $cont = $soma <br>";
    $cont ++; //incremento, decremento//
    
    
}
    ?>
</body>
<a href="index.php">Laço de repetição"while"</a><br>

</html>
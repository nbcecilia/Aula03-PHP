<!DOCTYPE html>
<html lang="en">
    <!-- 02 – FAÇA UM ALGORITMO QUE RECEBA DOIS NÚMEROS E IMPRIMA NA TELA OS NÚMEROS
PARES QUE EXISTEM ENTRE ELES -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 02</title>
</head>
<body>
    <h1>Questão 02</h1> <br><br>
    <form method = "POST">
        <label>Insira o 1º número:</label>
        <input type="number" name= "n1" required> <br><br>
        <label>Insira o 2º número:</label>
        <input type="number" name= "n2" required> <br><br>
        <button type="submit"> Enviar</button>
    </form>

    <?php 
     if($_SERVER["REQUEST_METHOD"] == "POST") { }
    $n1 = $_POST ['n1'] ?? '';
    $n2 = $_POST ['n2'] ?? '';
    $cont = $_POST ['cont'] ?? '';

//$pares = ;$total =; for ($cont=1;  ; $cont++) {  está inicialização do contador + a condição + o incremento entre parentes echo "Existem $total números pares entre $n1 e $n2.";}//

?>

  
</body>
</html>
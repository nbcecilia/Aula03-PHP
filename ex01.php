<!DOCTYPE html>
<html lang="en">
    <!-- 01 - SABENDO QUE A TAXA DE CRESCIMENTO DA POPULAÇÃO MUNDIAL É DE 0,9%, FAÇA UM
PROGRAMA QUE RECEBA O NOME DE UM PAÍS, A SUA POPULAÇÃO E QUE FAÇA UM PROSPECTO
DE CRESCIMENTO EM UM ANO FUTURO TAMBÉM INSERIDO PELO USUÁRIO;  -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 01</title>
</head>
<body>
    <h1>Questão 01</h1>
<form method = "POST">
<label>Insira o nome do país:</label>
<input type="text" name="pais" required ><br> <br>
<label>Insira a população atual:</label>
<input type="number" name="pop" required ><br><br>
<label>Insira os Anos:</label>
<input type="number" name="tempo" required><br><br>
<button type= "submit">Calcular</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$pais= $_POST ['pais'];
$pop = $_POST ['pop'] ?? '';
$taxa = 0.009;
$tempo = $_POST ['tempo'];

$pofut = $pop * pow(1+$taxa, $tempo); 


echo "<br><br> <h1>País: $pais </h1>";
echo "<h1>População futura em $tempo anos = " . number_format($pofut, 2, ',', '.') . "</h1>";
}
 ?>
 <!--  
  -->
</body>
</html>
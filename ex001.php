<!DOCTYPE html>
<html lang="pt-br">
    <!-- 01 - SABENDO QUE A TAXA DE CRESCIMENTO DA POPULAÇÃO MUNDIAL É DE 0,9%, FAÇA UM
PROGRAMA QUE RECEBA O NOME DE UM PAÍS, A SUA POPULAÇÃO E QUE FAÇA UM PROSPECTO
DE CRESCIMENTO EM UM ANO FUTURO TAMBÉM INSERIDO PELO USUÁRIO;  -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 01</title>
</head>
<body>
    <h3>Questão 01</h3>
<form method = "POST">
<label>Insira o nome do país:</label>
<input type="text" name="pais" required ><br> <br>
<label>Insira a população atual:</label>
<input type="number" name="pop" required ><br><br>
<label>Insira ano atual:</label>
<input type="number" name="aa" required><br><br>
<label>Insira ano futuro:</label>
<input type="number" name="af" required><br><br>
<button type= "submit">Calcular</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$pais= $_POST ['pais'];
$pop = $_POST ['pop'] ?? '';
$anoatual = $_POST ['aa'] ?? '';
$anofuturo = $_POST ['af'] ?? '';
$taxa = 0.009;
$ano = $anoatual;
while ($ano < $anofuturo) {
    $pop =  $pop + ($pop * $taxa);
    $ano++;
}
echo " <h3>Resultado</h3>";
echo " <h3>País: $pais </h3>";
echo " <h3>Ano projetado: $anofuturo </h3>";
echo "<h3>População futura: " . number_format($pop, 0, ',', '.') . "</h3>";
}
?>
</body>
</html>
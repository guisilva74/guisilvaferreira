
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $real = $_POST["real"]; // valor em reais inserido pelo usuário
    $cotacao = 5.34; // cotação do euro
    $euro = $real / $cotacao;

    $padrao = 'R$';
    $formatacaoReal = $padrao . number_format($real, 2, ',', '.');

    $padraoEuro = '€';
    $formatacaoEuro = $padraoEuro . number_format($euro, 2, ',', '.');

    echo "Seus {$formatacaoReal} equivalem a {$formatacaoEuro}.";
}
?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    Valor em Real: <input type="text" name="real">
    <input type="submit" value="Converter">
</form>


</main>
    
</body>
</html>

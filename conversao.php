<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php
        /* Desafio-03: Conversor Moedas */
        $cotacao = 5.13; // cotação copiada do Google
        // Quanto $$ você tem?
        $real = $_REQUEST["din"] ?? 0;
        // Equivalência em dólar
        $dolar = $real / $cotacao;
        // Mostrar o resultado
        // echo "Seus R\$$real equivalem a US\$$dolar";
        // echo "Seus R\$" . $real . " equivalem a US\$" . $dolar;
        // echo "Seus R\$" . number_format($real, 2, ",", ".") . " equivalem a US\$" . number_format($dolar, 2);
        // Formatação de moedas com internacionalização!
        // Biblioteca intl (Internallization PHP)
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
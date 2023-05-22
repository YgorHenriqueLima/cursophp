<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>

    <main>
    <?php 
    
        $inicio = date("m-d-y", strtotime("-7 days"));
        $fim = date("m-d-y");
        /*pegando uma url do Banco Central do Brasil, para assim ter os dados corretos dos valores*/
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        /*arquivo de decodificação json para obter url de conteúdo*/
        $dados = json_decode(file_get_contents($url), True/*este true serve para observar o código dump em array, para false o código em Object*/);


        var_dump($dados);

        $cotacao = $dados["value"][0]["cotacaoCompra"];

        echo "a cotação foi de $cotacao";
    

       $real = $_GET["valor"] ?? 0;

       $dolar = $real / 5.17;

       $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

       echo "<p> seus" . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD") . "</p>";
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
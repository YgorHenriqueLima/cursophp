 <pre>   
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
    ?>
 </pre>
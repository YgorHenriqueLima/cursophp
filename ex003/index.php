<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipos primitivos em php</title>
</head>
<body>
    <h1>teste de tipos primitivos </h1>
    <?php 
        #$num = 300; numero inteiro
        #$num = 010; numero binário

        /**0x = hexadecimal 0b = binário = Octal
        $num = 010;
        echo "o valor da variável é $num"**/

        /*tipo integer(int)*/
        $v = 45;
        var_dump($v);

        #tipo float
        $v = 45.2;
        var_dump($v);

        #tipo string
        $v = "João";
        var_dump($v)

        /**$numero = 3e2; // 3 x 10³
        var_dump($numero); **/ 

        # array
        #$vetor = [6, 3, 9, 5];
        #var_dump($vetor);
    ?>
</body>
</html>
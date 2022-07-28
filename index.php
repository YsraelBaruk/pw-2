<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>28-07-22</title>
</head>
<body>
    <?php
        require_once 'class/cliente.php';
        $cliente = new cliente();
        $cliente->nome = 'Israel';
        $cliente->email = 'israel@gmail.com';
        $cliente->senha = '1234';
        $cliente->endereco = 'rua das mamoa das aguas, 646';
        $cliente->imagem = 'asa';
        
        var_dump($cliente->cadastrar());
    ?>
</body>
</html>
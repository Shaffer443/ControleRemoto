<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06 - Encapsulando </title>
</head>
<body>

    <h1>Projeto - Controle Remoto</h1>

    <?php
        // puxando (aenxando) as funções (classes) do objeto criadas:

        require_once 'controleremoto.php';

        // Assim carregará as funções programadas.

        //criando um objeto:

        $controle = new ControleRemoto();

        //ligando tv:

        $controle->ligar();

        //aumentando o volume:

        $controle->maisVolume();
        
        // abrindo o Menu e mostrando as informações acima.
        $controle->abrirMenu();

       


    ?>

</body>
</html>
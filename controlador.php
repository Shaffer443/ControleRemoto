<?php

//Aula 06 - Sobre Encapsulamento

interface Controlador{

    // passo 1: Criar os métodos abstratos 
    // adicionar abstract 
    // Criando a Interface 

    public function ligar();
    public function desligar();
    public function abrirMenu();
    public function fecharMenu();
    public function maisVolume();
    public function menosVolume();
    public function ligarMudo();
    public function desligarMudo();
    public function play();
    public function pause();

    /* OBS: Não precisei por o 'abstract' devido a classe INTERFACE ser
    declarada o VSCode, assim como outros interpretadores, já entendem que
    essas funções publicas são abastradas. ou seja, será programada e configuradas
    em outro local*/

    /* Como as funções nas classes (set e get) são privadas, apenas as funções
    contidas na interface podem ser mexidas pelo usuário */

    


}



?>
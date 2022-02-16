<?php

//Anexando um arquivo programação ao controle remoto:

require_once 'controlador.php';

/* Criando a Classe para aula 06 - Encapsulamento */
//adicionar um "implements" para implementar o controlador a classe controleremoto: 

class ControleRemoto implements Controlador{

    // 1 PASSO - criar os Atributos.
    // Criar privado para não se ter acesso pelo usuário

    private $volume;
    private $ligado;
    private $tocando;

    /* 2 PASSO - Criar o métodos Especiais Get e Set dos Atributos, e protegendo como privado
    para não sofrer alterações. */

    // Método construtor (defaut do objeto)

    function __construct()
    {
        $this -> volume = 50;
        $this -> ligado = false;
        $this -> tocando = false;

        
    }

    // Criando so get's (acessando ou pegando algo(dados, informações, etc)):

    private function getVolume(){

        return $this->volume;
    }

    private function getLigado(){

        return $this->ligado;
    }

    private function getTocando(){

        return $this->tocando;
    }

    // Criando so set's (modificando coisas acessadas, que estão dentro do objeto):
    // set geralmente se passa parâmetros

    private function setVolume($volume){

        $this->volume= $volume;

    }

    private function setLigado($ligado){

        $this->ligado= $ligado;

    }

    private function setTocando($tocando){

        $this->tocando= $tocando;

    }

    /*Os métodos abastratos não são implementados dentro da classe,
    e não implementados na interface. pois lá são declarados como abstratos,
    o que indica que serão programados em outro local, no caso, aqui dentro da classe.
    Por este motivo, vamos coloca-lo e programa-lo aqui nesta classe, sem usar o "abstract". */

    // Declarandoos métodos abstratos do controlador:

    public function ligar(){

        //orientado de forma booleana true(ligado) ou false(desliagdo)

        $this->setLigado (true);


    }
    public function desligar(){

        //orientado de forma booleana true(ligado) ou false(desliagdo)

        $this->setLigado (false);

    }
    public function abrirMenu(){

        echo "<p><h3> Menu </h3></p>";
        // usando um operador ternário (equivalente a if|Else): ($this->getLigado()?"Sim":"Não");

        // passo 1: Quero identificar se está ligado:
        echo "<br>Está ligado?: ".($this->getLigado()?"Sim":"Não");

        // passo 2: Quero identificar se está tocando:
            echo "<br>Está tocando?: ".($this->getTocando()?"Sim":"Não");

        //mostrando identificação de volume (barrinah de volume):   
                echo "<br>Volume: ".$this->getVolume();
                //criando laço for para mostrar o número de barras correspondente ao volume:
                    //getVolume() - pq não sei o parâmetro da contagem.
                for ($i=0; $i<=$this->getVolume(); $i+=10){ // usaso 10, pois o volume vai de 0 a 100, de 10 em 10

                    echo " | ";

                }    

                echo "<br>"; // quebrando linha

    }
    public function fecharMenu(){

        echo "<br> Fechando Menu...";

    }
    public function maisVolume(){

        //condições:
        // 1 - a tv precisa estar ligada:
       
        //pegando informação(get) se está ligada:
        if($this->getLigado() == true){ // como é booleano poderia ter usado apenas  $this->setLigado()
            //setVolume: Acesando e modificando (set) o volume e getVolume: acessando e alterando para um valor ou condição.
            $this->setVolume($this->getVolume()+10); //volume de 10 em 10.

        }else{

            echo "<p><b>Não posso aumentar o Volume com a tv Desligada<b></p>";   
            
        }


    }
    public function menosVolume(){
        //pegando informação(get) se está ligada:
        if($this->getLigado() == true){ // como é booleano poderia ter usado apenas  $this->setLigado()
            //setVolume: Acesando e modificando (set) o volume e getVolume: acessando e alterando para um valor ou condição.
            $this->setVolume($this->getVolume()-10); //volume de 10 em 10.

        }else{

            echo "<p><b>Não posso baixar o Volume com a tv Desligada<b></p>";   

        }

    }
    public function ligarMudo(){
        //condições:
        // 2 - só liga o mudo se a tv estiver ligada e acima de zero
        // 3 - só delisga o mudo se a tv estiver ligada e diferente de zero.

        //pegando informação(get) se está ligada e na condição do volume maior que zero.
        if($this->getLigado() && $this->getVolume()>0){
            //setVolume: Acesando e modificando (set) o volume e colocando em uma condição de (0) zero
            $this->setVolume(0); //deixando o volume mudo (em zero)

        }


    }
    public function desligarMudo(){
        //condições:
        // 2 - só liga o mudo se a tv estiver ligada e acima de zero
        // 3 - só delisga o mudo se a tv estiver ligada e igual a zero.

        if($this->getLigado() && $this->getVolume() == 0){
            //setVolume: Acesando e modificando (set) o volume e colocando em uma condição de (30), volume em 30 como default
            $this->setVolume(30);

        }

    }
    public function play(){
        //condições:
        // 1 - Identificar se ele está ligado
        // 2 - Identificar se não está tocando

        if($this->getLigado() && $this->getTocando == false){
            // liberadno o play, ou seja, modificando o set de false (default do objeto) para true.
            $this->setTocando(true);

        }

    }
    public function pause(){
        //condições:
        // 1 - Identificar se ele está ligado
        // 2 - Identificar se já está tocando

        if($this->getLigado() && $this->getTocando == true){
            // "setando" o play para false, pausando.
            $this->setTocando(false);

        }


    }



}



?>
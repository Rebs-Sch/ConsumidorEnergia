<?php

require_once("IConsumidorEnergia.php");

class  Residencial implements IConsumidorEnergia{
    private int $consumo = 0;
    private float $valor = 1.05;

    public function getFatura(){
        return $this->consumo * $this->valor;
    }

    public function  setConsumo($consumo){
        $this->consumo = $consumo;
    }
}

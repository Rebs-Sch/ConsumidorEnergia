<?php

require_once("IConsumidorEnergia.php");

class Comercial implements IConsumidorEnergia{
    private int $consumo = 0;
    private float $preco1 = 1.45;
    private float $preco2 = 1.60;
    
    public function getFatura(){
        $fatura = 0;

        if ($this->consumo<=100){
            $fatura = $this->consumo * $this->preco1;
        }else if($this->consumo>100){
            $fatura = 100 * $this->preco1;
            $fatura += ($this->consumo - 100) * $this->preco2;
        }

        return $fatura;
    }

    public function  setConsumo($consumo){
        $this->consumo = $consumo;
    }
}
<?php

require_once("IConsumidorEnergia.php");

class Industrial implements IConsumidorEnergia{
    private int $consumo = 0;
    private float $preco1 = 1.80;
    private float $preco2 = 2.30;

    public function getFatura(){
        $fatura = 0;

        if ($this->consumo<=500){
            $fatura = $this->consumo * $this->preco1;
        }else if($this->consumo>500){
            $fatura = 100 * $this->preco1;
            $fatura += ($this->consumo - 100) * $this->preco2;
        }

        return $fatura;
    }

    public function  setConsumo($consumo){
        $this->consumo = $consumo;
    }
}

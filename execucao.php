<?php

require_once("modelo/IConsumidorEnergia.php");
require_once("modelo/Residencial.php");
require_once("modelo/Comercial.php");
require_once("modelo/Industrial.php");

echo"Que tipo de consumidor você é?\n1- Residencial\n2-  Comercial\n3- Industrial\n";
$escolha = readline();

switch($escolha){
    case 1:
        $consumidor = new Residencial();
        $consumidor->setConsumo(readline("Qual foi o seu total de consumo de energia?"));
        echo"\nO valor da sua fatura é de: ".$consumidor->getFatura()."\n";
    
        break;
    case 2:
        $consumidor = new Comercial();
        $consumidor->setConsumo(readline("Qual foi o seu total de consumo de energia?"));
        echo"\nO valor da sua fatura é de: ".$consumidor->getFatura()."\n";

        break;
    case 3:
        $consumidor = new Industrial();
        $consumidor->setConsumo(readline("Qual foi o seu total de consumo de energia?"));
        echo"\nO valor da sua fatura é de: ".$consumidor->getFatura()."\n";

        break;
    default:
        echo "inválido.\n";

        break;
}
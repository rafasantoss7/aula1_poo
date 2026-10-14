<?php

class Celular{
    public string $marca;
    public string $modelo;
    public string $cor;
    public int $bateria;
    public bool $ligado;

public function ligar(){
    if ($this->ligado== false){
        $this->ligado = true;
        echo "Celular ligando... <br>";
    }
}
public function desligar(){
    if ($this->ligado== true){
        $this->ligado = false;
        echo "Celular desligando... <br>";
}
}
public function user($consumo){
    $this -> bateria = $this -> bateria - $consumo;

    if ($this-> bateria < 0){
        $this -> bateria = 0;
    }
    echo "Celular sendo usado! Bateria atual: " . $this-> bateria . "%" . "<br>";
}
public function carregar($carga){
    $this->bateria = $this -> bateria + $carga;

    if ($this-> bateria > 100){
        $this->bateria = 100;
    }
    echo "Celular carregando! Bateria atual: " . $this->bateria . "%" . "<br>";
}
}
$celular1 = new Celular();
$celular1->modelo = 'Iphone 16';
$celular1->cor = 'Preto';
$celular1->marca = 'Apple';
$celular1->bateria = 0;
$celular1->ligado = false;

echo "<p>Modelo do celular: " . $celular1->modelo . "</p>";
echo "<p> Cor do celular: " . $celular1->cor . "</p>";
echo "<p> Marca do celular: " . $celular1->marca . "</p>";
echo "<p> Bateria do celular: " . $celular1->bateria . "%" . "</p>";
// $temTetoSolar = false, ? = if, : = else
echo "<p> Está ligado: " . ($celular1->ligado ? 'Sim, está ligado' : 'Não está ligado.') . "</p>";

$celular1->ligar();
$celular1->carregar(60);
$celular1->user(10);
$celular1->desligar();
?>
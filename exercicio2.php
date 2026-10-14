<?php

class ContaBancaria{
    public string $titular;
    public string $numero;
    public float $saldo;
    public string $tipo;

public function depositar(float $valor){
    $this -> saldo = $this -> saldo + $valor;
    echo "Depósito de " . $valor . " " ." realizado! Saldo atual:" . $this -> saldo . "<br>";
    }
public function sacar(float $valor){
    if ($valor > $this->saldo){
        echo "Saldo insuficiente para realizar o saque.";
} else {
    $this -> saldo -= $valor;
    echo "Saque realizado de " . $valor . " " . "reais! Saldo atual: " . $this-> saldo . "<br>";
}
}
public function consultarSaldo(){
    echo "Titular:{$this->titular} | Conta; {$this->numero} ({$this->tipo})<br>";
    echo "Saldo Atual: R$" . $this -> saldo . "<br>";
}
}
$conta1 = new ContaBancaria();
$conta1->titular = "Maria Silva";
$conta1->numero = "18906-6";
$conta1->tipo = "Corrente";
$conta1->saldo = 700.00;

// Testando os métodos
echo "Teste da Conta Bancária" ;
echo "<br>";

$conta1->consultarSaldo();
echo "<br>";

$conta1->depositar(250.00);
$conta1->consultarSaldo();
echo "<br>";

$conta1->sacar(100.00);
$conta1->consultarSaldo();
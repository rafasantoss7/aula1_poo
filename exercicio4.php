<?php
class Pedido{
    public int $numero;
    public string $cliente;
    public float $valor = 0.0;
    public string $status;

    public function adicionarItem($valor){
        $this->valor += $valor;
    }
    public function cancelar(){
        $this->status = "Cancelado.";
    }
    public function finalizar(){
        $this->status = "Finalizado.";
    }
    public function exibirResumo(){
        echo "Número: " . $this->numero . "<br>";
        echo "Cliente: " . $this -> cliente . "<br>";
        echo "Valor: " . $this-> valor . "<br>";
        echo "Status do pedido: " . $this-> status . "<br><br>";
    }
}
$pedido1 = new Pedido ();
$pedido1->numero= 508;
$pedido1->cliente = "Carla";
$pedido1->adicionarItem(130.00);
$pedido1->adicionarItem(45.50);
$pedido1->finalizar();
$pedido1->exibirResumo();

$pedido2 = new Pedido ();
$pedido2->numero= 509;
$pedido2->cliente = "Carlos";
$pedido2->adicionarItem(170.00);
$pedido2->adicionarItem(78.50);
$pedido2->cancelar();
$pedido2->exibirResumo();
?>
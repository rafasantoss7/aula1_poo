<?php 

class Aula{
    public string $disciplina;
    public string $professor;
    public string $duracao;
    public int $numeroSala;
    public string $bloco;

public function exibirInformacoes(){
    echo "Disciplina:{$this-> disciplina} <br>";
    echo "Professor:{$this-> professor} <br>";
    echo "Duração:{$this-> duracao} <br>";
    echo "Número da sala: {$this-> numeroSala} <br>";
    echo "Bloco:{$this-> bloco} <br>";
}
public function trocarProfessor(string $novoProfessor){
    $this->professor= $novoProfessor;
    }
public function alterarLocal(int $n_sala, string $bloco){
    $this->numeroSala=$n_sala;
    $this->bloco= $bloco;

    }
}
$aula1 = new Aula();
$aula1->disciplina= "Lingua Portuguesa";
$aula1->professor = "Michele";
$aula1->duracao = "50 minutos";
$aula1->numeroSala = 12;
$aula1->bloco= "B";

$aula1->exibirInformacoes();

echo "<hr>";

$aula1->trocarProfessor("Tadeu");
$aula1->alterarLocal(11, "A");

$aula1->exibirInformacoes();
?> 
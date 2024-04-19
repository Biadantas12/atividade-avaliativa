<?php
// Definindo a classe Empregado
class Empregado {
    // Atributos
    private $nome;
    private $sobrenome;
    private $salarioMensal;

    // Construtor
    public function __construct($nome, $sobrenome, $salarioMensal) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->salarioMensal = $salarioMensal;
    }

    // Métodos Getters e Setters
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getSalarioMensal() {
        return $this->salarioMensal;
    }

    public function setSalarioMensal($salarioMensal) {
        $this->salarioMensal = $salarioMensal;
    }

    // Método para calcular o novo salário com base na porcentagem de aumento
    public function calcularNovoSalario($porcentagemAumento) {
        $aumento = $this->salarioMensal * ($porcentagemAumento / 100);
        $novoSalario = $this->salarioMensal + $aumento;
        return $novoSalario;
    }

    // Método para calcular o salário anual
    public function calcularSalarioAnual() {
        return $this->salarioMensal * 12;
    }
}

// Criando dois objetos Empregado
$empregado1 = new Empregado("Carlos", "Silva", 3000);
$empregado2 = new Empregado("Lara", "Santos", 4000);

// Exibindo o salário anual de cada objeto
echo "Salário anual de " . $empregado1->getNome() . " " . $empregado1->getSobrenome() . ": $" . $empregado1->calcularSalarioAnual() . "\n";
echo "Salário anual de " . $empregado2->getNome() . " " . $empregado2->getSobrenome() . ": $" . $empregado2->calcularSalarioAnual() . "\n";

// Dando um aumento de 10% para cada Empregado
$novoSalario1 = $empregado1->calcularNovoSalario(10);
$novoSalario2 = $empregado2->calcularNovoSalario(10);

// Exibindo o novo salário anual de cada Empregado
echo "Novo salário anual de " . $empregado1->getNome() . " " . $empregado1->getSobrenome() . ": $" . ($novoSalario1 * 12) . "\n";
echo "Novo salário anual de " . $empregado2->getNome() . " " . $empregado2->getSobrenome() . ": $" . ($novoSalario2 * 12) . "\n";
?>
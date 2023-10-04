<?php
class Funcionario {
  public $nome;
  public $cpf;
  public $departamento;
  public $dataAdmissao;
  public $salario;
  public $cargo;

  public function alterarSalario() {
    $aumento = $this->salario * 0.15;
    $this->salario += $aumento;
    return "O salário de {$this->nome} foi aumentado em R\$ {$aumento}, passando para R\$ {$this->salario}.";
  }
}

$funcionario1 = new Funcionario();
$funcionario1->nome = "João da Silva";
$funcionario1->cpf = "123.456.789-00";
$funcionario1->departamento = "Financeiro";
$funcionario1->dataAdmissao = "01/01/2021";
$funcionario1->salario = 4000;
$funcionario1->cargo = "Gerente";

echo "Nome: {$funcionario1->nome}<br>";
echo "CPF: {$funcionario1->cpf}<br>";
echo "Departamento: {$funcionario1->departamento}<br>";
echo "Data de Admissão: {$funcionario1->dataAdmissao}<br>";
echo "Salário: R\$ {$funcionario1->salario}<br>";
echo "Cargo: {$funcionario1->cargo}<br><br>";

echo $funcionario1->alterarSalario();

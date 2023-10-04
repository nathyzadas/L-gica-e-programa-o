<?php
class Funcionario
{
    private $nome;
    private $cpf;
    private $departamento;
    private $dataAdmissao;
    private $salario;
    private $cargo;

    public function __construct($nome, $cpf, $departamento, $dataAdmissao, $salario, $cargo)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->departamento = $departamento;
        $this->dataAdmissao = $dataAdmissao;
        $this->salario = $salario;
        $this->cargo = $cargo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getDepartamento()
    {
        return $this->departamento;
    }

    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;
    }

    public function getDataAdmissao()
    {
        return $this->dataAdmissao;
    }

    public function setDataAdmissao($dataAdmissao)
    {
        $this->dataAdmissao = $dataAdmissao;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }

    public function alterarSalario()
    {
        $novoSalario = $this->salario * 1.15;
        return "O novo salário é: " . $novoSalario;
    }
}

$funcionario1 = new Funcionario("John Doe", "12345678900", "Departamento de TI", "01/01/2022", 2500, "Desenvolvedor");

echo "Nome: " . $funcionario1->getNome() . "<br>";
echo "CPF: " . $funcionario1->getCpf() . "<br>";
echo "Departamento: " . $funcionario1->getDepartamento() . "<br>";
echo "Data de Admissão: " . $funcionario1->getDataAdmissao() . "<br>";
echo "Salário: " . $funcion;

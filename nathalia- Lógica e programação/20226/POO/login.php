<?php 
class Login{
    private $Email;
    private $Senha;

    public function getemail(){
        return $this ->Email;
    }

    public function getsenha(){
        return $this ->Senha;
    }

    public function setEmail($e){
        $password = filter_var($e,FILTER_SANITIZE_EMAIL);
        $this ->Email = $e;
    }

    public function setSenha($s){
        $this ->Senha = $s;
    }

    public function realizarLogin(){
        if ($this-> Email == "teste@senac.br"and $this->Senha=="123456"):
            echo "Logado com sucesso";
   
    else:
        echo "Login inválido";
    endif;

}

}

$logar = new Login();
$logar-> setEmail("teste@senac.br");
$logar->setSenha("123456");
$logar->realizarLogin();

echo "<br> E-mail:" .$logar->getEmail();
echo "<br> Senha:"  .$logar->getSenha();

?>
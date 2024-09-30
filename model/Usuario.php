<?php

class Usuario{
    public $nome;
    public $email;
    public $senha;
    public $anoNascimento;
    public $cpf;
    public $cidade;

public function __construct($nome,$email,$senha,$anoNascimento,$cpf,$cidade){
    $this -> nome=$nome;
    $this -> email=$email;
    $this -> senha=$senha;
    $this -> anoNascimento=$anoNascimento;
    $this -> cpf=$cpf;
    $this -> cidade=$cidade;


}

public function conectarBD(){
    $conexao = new mysqli ("localhost","root","","revisaophp");
    return $conexao;
}

public function inserirRegistro(){
    $conexaoBD = $this -> conectarBD();

    
    $sql="insert into usuario(nome,email,senha,anoNascimento,cpf,cidade)
    values ('$this->nome','$this->email','$this->senha','$this->anoNascimento','$this->cpf','$this->cidade');";
    $conexaoBD -> query($sql);
   
    

   
}
public function login($email,$senha){
    session_start();
    $conexaoBD = $this -> conectarBD();
$sql = "select * from usuario where email='$email'and senha='$senha';";
$resultado=$conexaoBD -> query($sql);
$dados_tratados = $resultado->fetch_assoc();

if ($resultado->num_rows > 0) {

$_SESSION['id'] = $dados_tratados['id'];
$_SESSION['nome'] = $dados_tratados['nome'];
$_SESSION['email'] = $dados_tratados['email'];
$_SESSION['senha'] = $dados_tratados['senha'];
$_SESSION['anoNascimento'] = $dados_tratados['anoNascimento'];
$_SESSION['cpf'] = $dados_tratados['cpf'];
$_SESSION['cidade'] = $dados_tratados['cidade'];


$_SESSION['auth'] = true;

return true;
}

else{
return false;
}
}
public function BuscarUsuario($id) {
    $conexaoBD = $this->conectarBD();
    $sql = "SELECT * FROM usuario WHERE id = '$id';";
    $resultado = $conexaoBD->query($sql);
    
    return $resultado->fetch_assoc();
}

public function editarUsuario($id, $nome, $email, $senha, $anoNascimento, $cpf, $cidade) {
    $conexao = $this->conectarBD();
    $sql = "UPDATE usuario SET nome = '$nome', email = '$email', senha = '$senha', anoNascimento = '$anoNascimento', cpf = '$cpf', cidade = '$cidade' WHERE id = '$id'";
    return $conexao->query($sql);
}

public function deletarUmUsuario($id){
    $conexaoBD = $this -> conectarBD();
    
    $sql = "DELETE FROM usuario where id='$id';";
    $conexaoBD -> query($sql);
    
    }


}


?>
<?php
include_once '../model/Usuario.php';

 $email = $_GET['email'];
 $senha = $_GET['senha'];
 $usuarioL = new Usuario('','','','','','');

 $login=$usuarioL -> login($email,$senha);
 if( $login==true){
   echo "logado com sucesso";
   header("Location: ../view/site.php");

}
else{
   echo "senha ou email incorreto";
}

?>
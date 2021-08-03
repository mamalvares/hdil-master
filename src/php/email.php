<?php
if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);
$mensagem = addslashes($_POST['message']);

$to = "contato@hdil.com";
$subject = "Contato HDIL site";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Telefone: ".$telefone. "\r\n".
        "Mensagem: ".$mensagem;
$header = "From: henrique@hdil.com"."\r\n".
        "Reply-To:".$email."\e\n".
        "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

        echo("Email enviado com sucesso!");

}else{
        echo("O Email não pode ser enviado");
}
}
?>
<?php

if(isset($_POST['email']) && !empty($_POST['email']))

$Nome = addcslashes($_POST['name'])
$Sobrenome = addcslashes($_POST['name'])
$Email = addcslashes($_POST['email'])
$Senha = addcslashes($_POST['password'])
$Repita a senha = addcslashes($_POST['password'])
$mensagem = addcslashes($_POST['message'])

$to = "jessicacrodb@gmail.com";
$subject = "Novo registro de contato";
$body = "Nome: ".$Nome . "r/n";
        "Nome: ".$Sobrenome . "r/n".
     "Nome: ".$Email . "r/n".
     "Nome: ".$Senha . "r/n".
     "Nome: ".$Repita . "r/n".
     "Nome: ".$mensagem . "r/n".
     
     $header = "From:jessicamurb.com@gmail.com"."r/n";
     . "Reply.To" .$email. "e/n";
     . "x=Mailer:PHP-" .phpversion();

     if(mail($To, $subject, $body, $header)){

        echo("Enviado com sucesso!");

     } else{
         echo("O email não pôde ser enviado.");
     }

     git remote add origin https://github.com/Jessicacostar/Formul-rio-php-rbm.git
     git branch -M main 
    git push -u origin main

?>
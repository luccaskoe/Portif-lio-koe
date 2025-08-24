<?php
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $mensagem = addslashes($_POST['mensagem']);
    
   $destinatario = "koebyte001@gmail.com";
   $assunto = "Coleta de dados - Inteliogia";
  
   $corpoemail = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."telefone: ".$telefone."mensagem: ".$mensagem;

   $cabeca = "From: luakoe0014@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if (mail($destinatario, $assunto, $corpoemail, $cabeca)) {
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email!");
    }

?>

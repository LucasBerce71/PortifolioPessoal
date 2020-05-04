<?php
if(isset($_POST['email']) && !empty($_POST['email'])){
    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $contact = addslashes($_POST['phone']);
    $message = addslashes($_POST['message']);

    $to = "lucasberce71@gmail.com";
    $subject = "Contato Portifolio";
    $body = "Nome: ".$name."\r\n".
            "Email: ".$email."\r\n".
            "Contato: ".$contact."\r\n".
            "Mensagem: ".$message;
            
    $header = "From:contato@andersonberce.com"."\r\n".
              "Reply-To:".$email."\e\n". 
              "X=Mailer:PHP/".phpversion();

    if(mail($to,$subject,$body,$header)){
        header("Location: index.html");
    }else{
        echo("Não foi possível enviar o email, tente novamente!");
    }
}
?>
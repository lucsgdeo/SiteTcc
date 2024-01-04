<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (isset($_POST['enviar'])) {
     
    $mail = new PHPMailer(true);

    try {
        
        $mail= new PHPMailer;
        $mail->IsSMTP();        
        $mail->SMTPDebug = 0;       // Debugar: 1 = erros e mensagens, 2 = mensagens apenas ( quem mandou, quem recebeu, assunto, etc) , false = email enviado ou não
        $mail->SMTPAuth = true;     
        $mail->SMTPSecure = 'ssl';  
        $mail->Host = 'smtp.gmail.com'; 
        $mail->Port = 465; 
        $mail->Username = 'amaralfelipe150@gmail.com';
        $mail->Password = 'qqtmmiqpfichpjmn';
        $mail->SetFrom('amaralfelipe150@gmail.com', 'Felipe');
        $mail->addAddress($_POST['emailID'],'EMAIL DA PESSOA');                 
        $mail->addReplyTo('amaralfelipe150@gmail.com', 'Information');  

        //Content
        $mail->isHTML(true);                                 
        $mail->Subject = 'FALE CONOSCO - SITE TCC';
        
        $body = "Mensagem enviada do fale conosco TCC:<br>
                Nome: ". $_POST['nomeID']. "<br>
                E-mail: ". $_POST['emailID']. "<br>
                Telefone: ". $_POST['telefoneID']. "<br>
                Mensagem:<br>". $_POST['msg'];
        
        
        $mail->Body    = $body; 
        $mail->send();
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Email enviado com sucesso')
        window.location.href='/siteTCC-6.1.0/repo/contato.html';
        </SCRIPT>");
    } catch (Exception $e) {
        echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
    }

}
else {
    echo "Erro ao enviar o email, acesso não foi via formulário";
}

?>
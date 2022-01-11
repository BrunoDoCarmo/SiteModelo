<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];
    if ( !count($errors) ) {
    #manda email
    include("INC/manda_email.php");
    $formato_msg = '
        <b>Nome:</b>        '.$nome.'
        <b>E-mail:</b>      '.$email.'
        <b>Telefone:</b>    '.$telefone.'
        <b>Mensagem:</b>
        '.$mensagem.'';
        if ( manda_email($formato_msg) == 1 ) {
            header('location:contact-send.php');
            die($result);
        }else{
            header('location:contact-decline.php');
            die($result);
        }
    }
?>
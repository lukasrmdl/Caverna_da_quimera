<?php
//identificação para a chamada da classe

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/SMTP.php";

function enviaEmail($email, $nome, $mensagem, $assunto, $email_resposta=null, $email_quimera='lukas.rmdl@gmail.com')
{



// instanciando a classe
$mail = new PHPMailer();

// habilitando SMTP	
$mail->isSMTP();

// habilitando tranferêcia segura 
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

// Pode ser: 0 = não exibe erros, 1 = exibe erros e mensagens, 2 = apenas mensagens	

$mail->SMTPDebug = 0; // Debug

// habilitando autenticação	
$mail->SMTPAuth = true;

// Configurações para utilização do SMTP do Gmail 

$mail->Host = 'smtp.gmail.com';
$mail->Port = 587; // porta gmail
$mail->SMTPOptions = [
     'ssl' => [
         'verify_peer' => false,
         'verify_peer_name' => false,
         'allow_self_signed' => true,
    ]
];

$mail->Username = 'dawexemplo2014@gmail.com'; ////Usuário para autenticação 
$mail->Password = 'tcycdlrjmtbngpie'; //senha autenticação

// Remetente da mensagem - sempre usar o mesmo usuário da autenticação  
$mail->setFrom('cavernaDaQuimera@gmail.com','Caverna da Quimera');

// Endereço de destino do email
$mail->addAddress($email_quimera, $nome );

$mail->CharSet = "utf-8";

// Endereço para resposta
if($email_resposta)
{
    $mail->addReplyTo($email_resposta);
}
// Assunto e Corpo do email
$mail->Subject = $assunto;

$mail->Body = $mensagem;

$mail->isHTML(true);

$mail->AddEmbeddedImage('../email/logo.png', 'logo_ref');

// Enviando o email
if (!$mail->send()) {
    $retorno=false;
} else {
    $retorno= $mensagem;
}

return $retorno;
}
function enviaEmail2($email, $nome, $mensagem, $assunto, $email_resposta=null)
{



// instanciando a classe
$mail = new PHPMailer();

// habilitando SMTP	
$mail->isSMTP();

// habilitando tranferêcia segura 
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

// Pode ser: 0 = não exibe erros, 1 = exibe erros e mensagens, 2 = apenas mensagens	

$mail->SMTPDebug = 0; // Debug

// habilitando autenticação	
$mail->SMTPAuth = true;

// Configurações para utilização do SMTP do Gmail 

$mail->Host = 'smtp.gmail.com';
$mail->Port = 587; // porta gmail
$mail->SMTPOptions = [
     'ssl' => [
         'verify_peer' => false,
         'verify_peer_name' => false,
         'allow_self_signed' => true,
    ]
];

$mail->Username = 'dawexemplo2014@gmail.com'; ////Usuário para autenticação 
$mail->Password = 'tcycdlrjmtbngpie'; //senha autenticação

// Remetente da mensagem - sempre usar o mesmo usuário da autenticação  
$mail->setFrom('cavernaDaQuimera@gmail.com','Caverna da Quimera');

// Endereço de destino do email
$mail->addAddress($email, $nome );

$mail->CharSet = "utf-8";

// Endereço para resposta
if($email_resposta)
{
    $mail->addReplyTo($email_resposta);
}
// Assunto e Corpo do email
$mail->Subject = $assunto;

$mail->Body = $mensagem;

$mail->isHTML(true);

$mail->AddEmbeddedImage('../email/logo.png', 'logo_ref');

// Enviando o email
if (!$mail->send()) {
    $retorno=false;
} else {
    $retorno= $mensagem;
}

return $retorno;
}


?>
<?php
include("funcoes_db.php");
session_start();
if($_POST['botao']=='enviar'){
	$nome=$_POST['nome_usuario'];
	$sobrenome=$_POST['sobrenome_usuario'];
	$email=$_POST['email_usuario'];
	$endereco=$_POST['endereco_usuario'];
	$logradouro=$_POST['logradouro_usuario'];
	$estado=$_POST['estado_usuario'];
	$cidade= $_POST['cidade_usuario'];
	$cep=$_POST['cep_usuario'];
	$assunto=$_POST['erro_assunto'];
	$erro=$_POST['erro_descricao'];

	$_SESSION["msg"]=''; 


	$array = array($nome, $sobrenome, $email, $endereco, $logradouro, $estado, $cidade, $cep, $assunto, $erro);

	$query ="insert into suporte_envios (nome_usuario, sobrenome_usuario, email_usuario, endereco_usuario, logradouro_usuario, estado_usuario, cidade_usuario, cep_usuario, erro_assunto, erro_descricao) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

	$retorno=fazConsulta($query,$array);		

	$_SESSION["msg"]= "Solicitação enviada com sucesso!";
	header("Location:../index_suporte.php");

}
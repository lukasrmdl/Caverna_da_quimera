<?php
session_start();
include("controllers/funcoes_db.php");
if($_GET['h']){
	$h=$_GET['h'];
    $_SESSION["msg"]=''; //inicializa msg
	

	$array = array($h);

	$query ="select * from redator where md5(email_redator) = ?";

	$linha=ConsultaSelect($query,$array);

	if($linha)
	{

		$array=array($linha['id_redator']);

		$query ="update redator set status=true where id_redator = ?";

		$retorno=fazConsulta($query,$array);
		
		if($retorno)
		{
			
		
			   $_SESSION["msg"]= "Cadastro Validado - Entre com seu email e senha";

		}
		else
		{
			   $_SESSION["msg"]= 'Problema na validação';
			   
		}	
	}

	else
	{
		$_SESSION["msg"]= 'Problema na validação';
	}	

header("Location:index_redator.php");
	
}

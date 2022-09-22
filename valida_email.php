<?php
echo "<link rel='stylesheet' type='text/css' href='css/padrao.css'>";
session_start();
include("email/envia_email.php");
include("email/PHPMailer/src/Exception.php");
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
			
		
			   $_SESSION["msg"]= "Cadastro Validado";

			   $sql = "SELECT * FROM redator WHERE id_redator = ?";

			   $resultados = ConsultaSelectAll($sql);

			   $email=$linha['email_redator'];
			   $nome=$linha['nome_redator'];

				$hash=md5($email);
				  $link="<a href='http://localhost/caverna_da_quimera/index_redator.php'> Clique aqui para navegar para o site </a>";
				 $mensagem="<tr><td style='padding: 10px 0 10px 0;' align='center' color='white' bgcolor='white'>";
				 $mensagem.="<img src='cid:logo_ref' style='display: inline; padding: 0 10px 0 10px;' width='10%' />";
   
				  $mensagem.="<br> Sua solicitação foi aprovada pela nossa equipe, bem vindo!<br>
				  Você já pode fazer login e navegar pela área dos redatores da Caverna da Quimera.<br>

				  ".$link."</td></tr>";
				  $assunto="RE: Solicitação de cadastro como redator";
   
				  $retorno= enviaEmail2($email,$nome,$mensagem,$assunto);
		
	   

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

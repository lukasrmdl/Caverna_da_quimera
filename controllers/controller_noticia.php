<?php
include("funcoes_db.php");
session_start();
if($_POST['botao']=='Cadastrar'){
	$categoria=$_POST['categoria_noticia'];
	$titulo=$_POST['titulo_noticia'];
	$data=$_POST['data_noticia'];
	$descricao=$_POST['desc_noticia'];


    $_SESSION["msg"]=''; 

	$array = array($categoria, $titulo, $data, $descricao);

	$query ="insert into noticias (nomecategoria, titulo, data, descricao) values (?, ?, ?, ?)";

	$retorno=fazConsulta($query,$array);		


	header("Location:../listagem_noticia_editar.php");

	$_SESSION["msg"]= "Noticia Cadastrada com sucesso!";
}

else
{
	header("Location:../form_cad_noticia.php");
}

if($_POST['botao']=='Editar'){


	$categoria=$_POST['categoria_noticia'];
	$titulo=$_POST['titulo_noticia'];
	$data=$_POST['data_noticia'];
	$descricao=$_POST['desc_noticia'];
	$idnoticia= $_POST['idnoticia'];


    $query= "update noticias set nomecategoria= ?, titulo = ?, data = ?, descricao = ? where idnoticia = ?";
    
    $array = array($categoria, $titulo, $data, $descricao, $idnoticia);

	$resultado=fazConsulta($query,$array);
	
	if($resultado)
	{
	   $_SESSION["msg"]="Alteração Efetuada com sucesso";
	}
	else
	{
	   $_SESSION["msg"]="Erro ao alterar";
	}


header("Location:../listagem_noticia_editar.php");

}

 if($_POST['botao']=='Excluir'){

	$idnoticia= $_POST['idnoticia'];

    $query="delete from noticias where idnoticia = ?";


    $array = array($idnoticia);

	$resultado=fazConsulta($query,$array);
	
	if($resultado)
	{
	   $_SESSION["msg"]= "Exclusão Efetuada com sucesso";
	}
	else
	{
	   $_SESSION["msg"]= 'Erro ao excluir <br>';
	}

header("Location:../listagem_noticia_editar.php");

}





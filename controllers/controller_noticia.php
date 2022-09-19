<?php
include("funcoes_db.php");
session_start();
if($_POST['botao']=='Cadastrar'){
	$categoria=$_POST['categoria_noticia'];
	$nomeautor=$_POST['nome_autor'];
	$sobrenomeautor=$_POST['sobrenome_autor'];
	$email=$_POST['email_autor'];
	$titulo=$_POST['titulo_noticia'];
	$subtitulo=$_POST['subtitulo_noticia'];
	$data= date('Y/m/d');
	$texto=$_POST['texto_noticia'];
	$nome_arquivo=$_FILES['arquivo_capa']['name'];  
	$tamanho_arquivo=$_FILES['arquivo_capa']['size']; 
	$arquivo_temporario=$_FILES['arquivo_capa']['tmp_name'];
	
	if (move_uploaded_file($arquivo_temporario, "../imagens_noticias/$nome_arquivo"))
	{
			$_SESSION["msg"]= " Upload do arquivo: ". $nome_arquivo." foi concluído com sucesso <br>";
	}
	else
	{
		$_SESSION["msg"]= "Arquivo não pode ser copiado para o servidor.";
			$nome_arquivo='foto.png';

	}

    $_SESSION["msg"]=''; 

	$array = array($categoria, $nomeautor, $sobrenomeautor, $email, $titulo, $subtitulo, $data, $texto, $nome_arquivo);

	$query ="insert into noticias (nomecategoria, nome, sobrenome, email, titulo, subtitulo, data, texto, capa, nome_capa) values (?, ?, ?, ?, ?, ?, ?, ?, ?, '{$nome_arquivo}')";

	$retorno=fazConsulta($query,$array);		

	$_SESSION["msg"]= "Noticia Cadastrada com sucesso!";
	header("Location:../listagem_noticia_editar.php");

}

if($_POST['botao']=='Editar'){

	$idnoticia =$_POST['idnoticia'];
	$titulo=$_POST['titulo_noticia'];
	$subtitulo=$_POST['subtitulo_noticia'];
	$texto=$_POST['texto_noticia'];


    $query= "update noticias set  nome= ?, sobrenome= ?, email = ?, titulo = ?, subtitulo= ?, texto = ? where idnoticia = ?";

    $array = array($nomeautor, $sobrenomeautor, $email, $titulo, $subtitulo, $texto, $idnoticia);

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

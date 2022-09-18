<?php
require_once("includes/header.php");

echo "<link rel='stylesheet' type='text/css' href='css/padrao.css'>";

echo "<button><a href='form_cad_noticia.php'>Cadastrar novas notícias</a></button>";

echo "<h1> Editar Notícias </h1>";

include("controllers/funcoes_db.php");
$conexao=fazconexao();


echo "<form method='POST' action='pesquisa_edicao.php'>";
        echo "<input type='text' size= '26' name='busca_noticia_editar' id='busca_noticia_editar' placeholder='Buscar notícia para edição'>";
        echo "<input type='submit' value='Buscar'><br><br>";
echo "</form>";

$query_options = "select * from categorias WHERE (1=1)";
$options=ConsultaSelectAll($query_options);

echo "<div id='msg'>";

if(isset($_SESSION['msg']))
{ 
    echo "<br><br>".$_SESSION['msg']."<br><br>";
    unset($_SESSION['msg']);
}

echo "</div>";


$query = "select * from noticias ORDER BY idnoticia;";

$resultados=ConsultaSelectAll($query);


foreach($resultados as $linha) {

?>
<html>
<body>
<section>
<form action="controllers/controller_noticia.php" method="post" enctype="multipart/form-data">
<p>ID: <?php echo $linha['idnoticia']; ?></p>
<?php
echo '<img src="./imagens_noticias/'.$linha['nome_capa'].'">';
?>
<input type ="hidden" name = "idnoticia" value="<?php echo $linha['idnoticia']?>">
<p>Categoria:  <input readonly type="text" name="mostra_categoria" value="<?php echo $linha['nomecategoria']?>"></p>
<p>Nome do autor : <input placeholder="Eduardo" type="text" name="nome_autor" value="<?php echo $linha['nome']?>"></p>
<p>Sobrenome do autor : <input placeholder="Silva" type="text" name="sobrenome_autor" value="<?php echo $linha['sobrenome']?>"></p>
<p>Email do autor : <input placeholder="fulano@hotmail.com" type="email" name="email_autor" value="<?php echo $linha['email']?>"></p>
<p>Título:  <input type="text" name="titulo_noticia" value="<?php echo $linha['titulo']?>"></p>
<p>Subtítulo  : <input placeholder="Trem bala com Brad Pitt" type="text" name="subtitulo_noticia" value="<?php echo $linha['subtitulo']?>"></p>
<textarea id="txtArea" name="texto_noticia" rows="10" cols="70"><?php echo $linha['texto']?></textarea>

<button type="submit" name="botao" value="Editar"> Editar </button>
<button type="submit" name="botao" value="Excluir" onclick = "return confirma_excluir()"> Deletar </button> 
</form>       
</section>
</html>
</body>
<?php
}
?>

<script type="text/javascript">
    function confirma_excluir()
    {
        resp=confirm("Confirma Exclusão?")

        if (resp==true)
        {

            return true;
        }
        else
        {
            return false;

        }

    }

</script>

<?php
require_once("includes/footer.php");
?>


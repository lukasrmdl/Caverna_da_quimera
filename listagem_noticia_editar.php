<?php
require_once("includes/header.php");
echo "<link rel='stylesheet' type='text/css' href='css/padrao.css'>";

echo "<button><a href='form_cad_noticia.php'>Cadastrar novas notícias</a></button>";

echo "<h1> Editar Notícias </h1>";

require("controllers/funcoes_db.php");
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
<script src="funcoes_ajax.js"> </script>

<body>
<section>
<form action="controllers/controller_noticia.php" method="post">
<p>ID: <?php echo $linha['idnoticia']; ?></p>
<?php
echo '<img src="./imagens_noticias/'.$linha['nome_capa'].'">';
?>
<input type ="hidden" name = "idnoticia" value="<?php echo $linha['idnoticia']?>">
<p>Categoria:  <input readonly type="text" name="mostra_categoria" value="<?php echo $linha['nomecategoria']?>"></p>
<select name="categoria_noticia" id="categoria_noticia"> 
        <option>Nova Categoria</option>
        <?php
            foreach($options as $option){       
        ?>
            <option value=<?=$option['nome']?>><?=$option['nome']?></option>
        <?php
            }
        ?>
</select>
<p>Título:  <input type="text" name="titulo_noticia" value="<?php echo $linha['titulo']?>"></p>
<p>Data: <input type ="date" name = "data_noticia" value="<?php echo $linha['data']?>" ?></p>
<label> Descrição: <textarea id="txtArea" name="desc_noticia" rows="10" cols="70"><?php echo $linha['descricao']?></textarea></label>

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


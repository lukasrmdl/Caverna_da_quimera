<?php
require_once("includes/header.php");

echo "<link rel='stylesheet' type='text/css' href='css/padrao.css'>";

include("controllers/funcoes_db.php");
$conexao=fazconexao();

echo "<div class='py-5 text-center'>";
echo "<div class='col-md-7 col-lg-10'>";
echo "<button id='cadastro_nova_noticia' class='btn btn-primary  col-lg-3 col-md-7777'><a href='form_cad_noticia.php'>Cadastrar novas notícias</a></button>";

echo "<h1 class='espaco-titulo col-md-4 col-lg-6'> Editar Notícias </h1>";

echo "</div>";
echo "<form class='espaco-titulo' method='POST' action='pesquisa_edicao.php'>";
        echo "<input type='text' size= '26' name='busca_noticia_editar' id='busca_noticia_editar' placeholder='Buscar notícia para edição'>";
echo "</form>";
echo "</div>";

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
    
    <hr class="featurette-divider">
    
    <div class="row noticia-post d-flex">
      <div class="col-md-77 noticia-post-img">
        <?php echo '<img class="bd-placeholder-img bd-placeholder-img-lg  mx-auto" width="80%" height="100%" src="./imagens_noticias/'.$linha['nome_capa'].'" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" /></img>';?>
      </div>
      <div class="col-md-7 noticia-post-info">
      <form action="controllers/controller_noticia.php" method="POST"  enctype="multipart/form-data">
        <input name="idnoticia" type ="hidden" value="<?php echo $linha['idnoticia']?>">
        <?php echo "<h2 id='id-noticia-editar'>ID : $linha[idnoticia]</h2>";?>
        <h2 class='noticia-post-titulo' name='titulo_noticia'><input class="input-alterar-noticia" type="text" name="titulo_noticia" value="<?php echo $linha['titulo']?>"></h2>
        <h3 name='subtitulo_noticia' class="noticia-post-subtitulo"><input class="input-alterar-noticia" type="text" name="subtitulo_noticia" value="<?php echo $linha['subtitulo']?>"></h3>
        <textarea id="txtArea-editar-noticia" class="noticia-post-texto" name="texto_noticia"><?php echo $linha['texto']?></textarea>
        <?php echo "<p class='noticia-post-autor'>Autor: $linha[nome] $linha[sobrenome], $linha[data]</p>" ?>
        <p id="botao-editar-noticia" class='btn2 btn-primary noticia-post-botao'><input  type="submit" name="botao" value="Editar" ></input></p>
 
        </form>
        </div>
    </div>
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


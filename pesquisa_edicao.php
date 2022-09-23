<?php
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
require("controllers/funcoes_db.php");
require_once("includes/header.php");
echo "<link rel='stylesheet' type='text/css' href='css/padrao.css'>";
$query = "";
$nomeprod = $_POST['busca_noticia_editar'];

$conexao = fazconexao();

$sql = "SELECT * FROM noticias WHERE (1=1) ";


if ($_POST['busca_noticia_editar'] != "") {
    $sql .= " AND titulo LIKE '%{$_POST['busca_noticia_editar']}%' OR texto LIKE '%{$_POST['busca_noticia_editar']}%'" ;
}



$resultados = ConsultaSelectAll($sql);

echo "<div class='py-5 text-center'>";
echo "<div class='col-md-7 col-lg-10'>";
echo "<button id='cadastro_nova_noticia' class='btn btn-primary  col-lg-3 col-md-7777'><a href='form_cad_noticia.php'>Cadastrar novas notícias</a></button>";

echo "<h1 class='espaco-titulo col-md-4 col-lg-6'> Editar Notícias </h1>";

echo "</div>";
echo "<form class='espaco-titulo' method='POST' action='pesquisa_edicao.php'>";
        echo "<input type='text' size= '26' name='busca_noticia_editar' id='busca_noticia_editar' placeholder='Buscar notícia para edição'>";
echo "</form>";
echo "</div>";
foreach($resultados as $linha) {
    ?>
    
    <hr class="featurette-divider">
    
    <div class="row noticia-post d-flex">
      <div class="col-md-77 noticia-post-img">
        <?php echo '<img id="img_acesso_full" class=" mx-auto-2" width="100%" height="auto" src="./imagens_noticias/'.$linha['nome_capa'].'" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" /></img>';?>
      </div>
      <div class="col-md-7 noticia-post-info">
      <form action="controllers/controller_noticia.php" method="POST"  enctype="multipart/form-data">
        <input name="idnoticia" type ="hidden" value="<?php echo $linha['idnoticia']?>">
        <?php echo "<h2 id='id-noticia-editar'>ID : $linha[idnoticia]</h2>";?>
        <h2 class='noticia-post-titulo' name='titulo_noticia'><input class="input-alterar-noticia" type="text" name="titulo_noticia" value="<?php echo $linha['titulo']?>"></h2>
        <h3 name='subtitulo_noticia' class="noticia-post-subtitulo"><input class="input-alterar-noticia" type="text" name="subtitulo_noticia" value="<?php echo $linha['subtitulo']?>"></h3>
        <textarea id="txtArea-editar-noticia" class="noticia-post-texto" name="texto_noticia"><?php echo $linha['texto']?></textarea>
        <?php echo "<p class='noticia-post-autor'>Autor: $linha[nome] $linha[sobrenome], $linha[data]</p>" ?>
        <p id="botao-excluir-noticia" class='btn2 btn-primary noticia-post-botao'><input  type="submit" name="botao" value="Excluir" ></input></p>

        <p id="botao-editar-noticia" class='btn2 btn-primary noticia-post-botao'><input  type="submit" name="botao" value="Editar" ></input></p>
 
        </form>
        </div>
    </div>
    <?php
    }

require_once("includes/footer.php");
?>
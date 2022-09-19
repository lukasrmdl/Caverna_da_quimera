<?php
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

echo "<h1> Resultados para a busca </h1>";

echo "<form method='POST' action='pesquisa_edicao.php'>";
        echo "<input type='text' size= '26' name='busca_noticia_editar' id='busca_noticia_editar' placeholder='Nova busca'>";
        echo "<input type='submit' value='Buscar'><br><br>";
echo "</form>";

foreach($resultados as $linha) {
    ?>
    
    <hr class="featurette-divider">
    
    <div class="row featurette">
    <div class="col-md-7">
    <form action="controllers/controller_noticia.php" method="POST"  enctype="multipart/form-data">
    <input name="idnoticia" type ="hidden" value="<?php echo $linha['idnoticia']?>">
    <?php echo "ID : $linha[idnoticia]";?>
    <h2 class='featurette-heading' name='titulo_noticia'>Alterar título:  <input type="text" name="titulo_noticia" value="<?php echo $linha['titulo']?>"></h2>
    <h3 name='subtitulo_noticia' class="text-muted">Alterar subtítulo:  <input type="text" name="subtitulo_noticia" value="<?php echo $linha['subtitulo']?>"></h3>
    <label>Alterar texto da matéria: </label><textarea id="txtArea" name="texto_noticia"><?php echo $linha['texto']?></textarea>
    <p><input id="reset_form" type="reset" name="botao" value="Resetar" class='btn_secondary2 btn-secondary'>
    <p><input type="submit" name="botao" value="Editar" class='btn2 btn-primary'></input></p>


    <?php echo "<p style='margin-bottom:5em;' class='autor lead'>Autor: $linha[nome] $linha[sobrenome], $linha[data]</p> " ?>
    </form>
    </div>
    <div class="col-md-5">
    
    <?php echo '<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="./imagens_noticias/'.$linha['nome_capa'].'" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" /></img>';?>
    
    </div>
    </div>
    <?php
    }
echo "<button><a href='form_cad_noticia.php'>Cadastrar novas notícias</a></button>";

require_once("includes/footer.php");
?>
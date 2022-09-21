<?php
require("controllers/funcoes_db.php");
require_once("includes/header.php");
$query = "";
$noticia = $_GET['acessa_noticia'];

echo "<link rel='stylesheet' type='text/css' href='css/padrao.css'>";
$conexao = fazconexao();

$sql = "SELECT * FROM noticias WHERE '$noticia' = idnoticia ";


$resultados = ConsultaSelectAll($sql);

foreach($resultados as $linha) {
    ?>

<hr class="featurette-divider">



<div class="row noticia-post-full d-flex">
  <div class="col-md-77 noticia-post-img-full">
    <?php echo '<img class="bd-placeholder-img bd-placeholder-img-lg  mx-auto" width="80%" height="100%" src="./imagens_noticias/'.$linha['nome_capa'].'" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" /></img>';?>
  </div>
  <div class="col-md-7 noticia-post-info">
    <input name="idnoticia" type ="hidden" value="<?php echo $linha['idnoticia']?>">
    <?php echo "<h2 name='titulo_noticia' class='noticia-post-titulo-full'>$linha[titulo]</h2>"?>
    <?php echo "<h3 class='noticia-post-subtitulo-full'>$linha[subtitulo]</h3>"?>
    <?php echo "<textarea disabled class='noticia-post-texto-full'>$linha[texto]</textarea><p>"?>
    <?php echo "<p class='noticia-post-autor'>Autor: $linha[nome] $linha[sobrenome], $linha[data]</p>" ?>
  </div>
</div>
<?php
}
require_once("includes/footer.php");
?>
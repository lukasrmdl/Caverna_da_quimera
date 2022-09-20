<?php
require("controllers/funcoes_db.php");
require_once("includes/header.php");
$query = "";
$nomeprod = $_POST['busca_assunto'];

echo "<link rel='stylesheet' type='text/css' href='css/padrao.css'>";
$conexao = fazconexao();

$sql = "SELECT * FROM noticias WHERE (1=1) ";


if ($_POST['busca_assunto'] != "") {
    $sql .= " AND titulo LIKE '%{$_POST['busca_assunto']}%' OR texto LIKE '%{$_POST['busca_assunto']}%'" ;
}


$resultados = ConsultaSelectAll($sql);

echo "<h1 class='espaco-titulo'> Resultados para a busca </h1>";

foreach($resultados as $linha) {
?>

<hr class="featurette-divider">

<div class="row featurette">
<div class="col-md-7">
<input name="idnoticia" type ="hidden" value="<?php echo $linha['idnoticia']?>">
<?php echo "<h2 name='titulo_noticia' class='featurette-heading'>$linha[titulo]</h2>"?>
<?php echo "<h3 class='text-muted'>$linha[subtitulo]</h3>"?>
<?php echo "<textarea disabled class='lead'>$linha[texto]</textarea><p><a class='btn2 btn-primary' href='http://localhost/caverna_da_quimera/Acesso_noticia.php?acessa_noticia=$linha[idnoticia]'>Acessar</a></p>"?>
<?php echo "<p class='autor lead'>Autor: $linha[nome] $linha[sobrenome],  $linha[data]</p>" ?>

</div>
<div class="col-md-5">

<?php echo '<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="./imagens_noticias/'.$linha['nome_capa'].'" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" /></img>';?>

</div>
</div>
<?php
}
require_once("includes/footer.php");
?>
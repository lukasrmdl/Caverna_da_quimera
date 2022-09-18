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

echo "<h1> Resultados para a busca </h1>";


foreach($resultados as $linha) {

?>
    <section>
        <form class="mostra_noticia" action="controllers/controller_noticia.php" method="post">

            <?php
                echo '<img src="./imagens_noticias/'.$linha['nome_capa'].'">';
            ?>
            <input name="idnoticia" type ="hidden" value="<?php echo $linha['idnoticia']?>">
            <p>Título:  <input readonly type="text" name="titulo_noticia" value="<?php echo $linha['titulo']?>"></p>
            <p>Subtítulo  : <input readonly placeholder="Trem bala com Brad Pitt" type="text" name="subtitulo_noticia" value="<?php echo $linha['subtitulo']?>"></p>
            <textarea disabled style="overflow:hidden; resize:none;" id="txtArea" name="texto_noticia" rows="4" cols="70"><?php echo $linha['texto']?></textarea>
            <p>Nome do autor : <input readonly placeholder="Eduardo" type="text" name="nome_autor" value="<?php echo $linha['nome']?>"></p>
            <p>Sobrenome do autor : <input readonly placeholder="Silva" type="text" name="sobrenome_autor" value="<?php echo $linha['sobrenome']?>"></p>
            <p>Email do autor : <input readonly placeholder="fulano@hotmail.com" type="email" name="email_autor" value="<?php echo $linha['email']?>"></p>

            <button form="mostra_noticia"  onclick="window.location.href = 'http://localhost/caverna_da_quimera/Acesso_noticia.php?acessa_noticia=<?php echo $linha['idnoticia']?>'" type="submit" name="botao" value="Acessar"> Acessar </button>
        </form>
    </section>
<?php
}
require_once("includes/footer.php");
?>
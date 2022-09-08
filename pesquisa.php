<?php
require("controllers/funcoes_db.php");
require_once("includes/header.php");
$query = "";
$nomeprod = $_POST['busca_assunto'];

$conexao = fazconexao();

$sql = "SELECT * FROM noticias WHERE (1=1) ";


if ($_POST['busca_assunto'] != "") {
    $sql .= " AND titulo LIKE '%{$_POST['busca_assunto']}%' OR descricao LIKE '%{$_POST['busca_assunto']}%'" ;
}


$resultados = ConsultaSelectAll($sql);

echo "<h1> Resultados para a busca </h1>";


foreach($resultados as $linha) {

?>
    <section>
        <form action="controllers/controller_noticia.php" method="post">

            <p>Título: <input readonly type="text" name="titulo_noticia" value="<?php echo $linha['titulo'] ?>"></p>
            <p>Categoria: <input readonly type="text" name="titulo_noticia" value="<?php echo $linha['nomecategoria'] ?>"></p>
            <p>Data: <input readonly type="date" name="data_noticia" value="<?php echo $linha['data'] ?>" ?></p>
            <label> Descrição: <textarea readonly id="txtArea" name="desc_noticia" rows="10" cols="70" ><?php echo $linha['descricao'] ?></textarea></label>

            <button type="submit" name="botao" value="Acessar"> Acessar </button>
        </form>
    </section>
<?php
}
require_once("includes/footer.php");
?>
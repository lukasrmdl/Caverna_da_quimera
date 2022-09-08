<?php
require("controllers/funcoes_db.php");
require_once("includes/header.php");
$query = "";
$nomeprod = $_POST['busca_noticia_editar'];

$conexao = fazconexao();

$sql = "SELECT * FROM noticias WHERE (1=1) ";


if ($_POST['busca_noticia_editar'] != "") {
    $sql .= " AND titulo LIKE '%{$_POST['busca_noticia_editar']}%' OR descricao LIKE '%{$_POST['busca_noticia_editar']}%'" ;
}



$resultados = ConsultaSelectAll($sql);

echo "<h1> Resultados para a busca </h1>";

echo "<form method='POST' action='pesquisa_edicao.php'>";
        echo "<input type='text' size= '26' name='busca_noticia_editar' id='busca_noticia_editar' placeholder='Nova busca'>";
        echo "<input type='submit' value='Buscar'><br><br>";
echo "</form>";

foreach ($resultados as $linha) {

?>
    <section>
        <form action="controllers/controller_noticia.php" method="post">
            <p>ID: <?php echo $linha['idnoticia']; ?></p>
            <input type="hidden" name="idnoticia" value="<?php echo $linha['idnoticia'] ?>">
            <p>Categoria: <input readonly type="text" name="mostra_categoria" value="<?php echo $linha['nomecategoria'] ?>"></p>
            <select name="categoria_noticia" id="categoria_noticia">
                <option>Nova Categoria</option>
                <?php
                foreach ($options as $option) {
                ?>
                    <option value=<?= $option['nome'] ?>><?= $option['nome'] ?></option>
                <?php
                }
                ?>
            </select>
            <p>Título: <input type="text" name="titulo_noticia" value="<?php echo $linha['titulo'] ?>"></p>
            <p>Data: <input type="date" name="data_noticia" value="<?php echo $linha['data'] ?>" ?></p>
            <label> Descrição: <textarea id="txtArea" name="desc_noticia" rows="10" cols="70"><?php echo $linha['descricao'] ?></textarea></label>

            <button type="submit" name="botao" value="Editar"> Editar </button>
            <button type="submit" name="botao" value="Excluir" onclick="return confirma_excluir()"> Deletar </button>
        </form>
    </section>
<?php
}
echo "<button><a href='form_cad_noticia.php'>Cadastrar novas notícias</a></button>";

require_once("includes/footer.php");
?>
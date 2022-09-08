<?php     
        include("controllers/funcoes_db.php");
        $conexao=fazconexao();
        $query = "select * from categorias order by nome";
        $resultados=ConsultaSelectAll($query);
?>
<?php
require_once("includes/header.php");
?>

<html>
<script src="funcoes_ajax.js"> </script>
<body>
    <h1> Cadastar nova Notícia </h1>
    <form action="controllers/controller_noticia.php" method="POST" >
        <select name="categoria_noticia" id="categoria_noticia"> 
            <option>Escolha a categoria</option>
        <?php
            foreach($resultados as $linha){
        ?>
            <option value=<?=$linha['nome']?>><?=$linha['nome']?></option>
        <?php
            }
        ?>
        </select>
        <p>Título : <input placeholder="Trem bala com Brad Pitt" type="text" name="titulo_noticia"></p>
        <p>Data: <input type="date" name="data_noticia"></p>
        <label> Descrição: <textarea placeholder="Descrição..." id="txtArea" name="desc_noticia" rows="10" cols="70"></textarea></label>
        <p><input type="reset" name="botao" value="Limpar">
            <input type="submit" name="botao" value="Cadastrar">
        </p>
    </form>
    <?php
    echo "<div id='msg'>";

    if (isset($_SESSION['msg'])) {
        echo "<br><br>" . $_SESSION['msg'] . "<br><br>";
        unset($_SESSION['msg']);
    }
    ?>
</body>

</html>

<?php
require_once("includes/footer.php");
?>
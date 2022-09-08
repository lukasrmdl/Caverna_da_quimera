<?php
require_once("includes/header.php");
?>

<html>

<body>
    <?php
    session_start();

    ?>

    <form action="controllers/controller_redator.php" method="POST">
        Email : <input type="text" name="email">
        Senha : <input type="password" name="senha">
        <input type="submit" name="botao" value="Logar">
        <input type="reset" name="botao" value="Limpar">

    </form>
    <a href="form_cad_redator.php">Novo Redator</a>
    <div id='msg'>
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
    </div>
</body>

</html>

<?php
require_once("includes/footer.php");
?>
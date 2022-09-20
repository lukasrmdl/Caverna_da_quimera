<?php
require_once("includes/header.php");
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/padrao.css">
</head>
<body>
    <h1 class="espaco-titulo"> Cadastro de novos Redatores </h1>
    <form action="controllers/controller_redator.php" method="POST" enctype="multipart/form-data">
        <p>Nome : <input type="text" name="nome"></p>
        <p>Email : <input type="text" name="email"></p>
        <p>Senha: <input type="password" name="senha"></p>
        <p>Foto: <input type="file" name="arquivo"></p>
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
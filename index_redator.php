<?php
require_once("includes/header.php");
echo "<link rel='stylesheet' type='text/css' href='css/padrao.css'>";
?>

<html>
<head>
    <script src="funcoes_ajax.js"> </script>
    <script type="text/javascript">
      function validar(){
      var erro="";

      var email = document.getElementById( "email" );
      if( email.value == ""){
        erro = " O campo do email é de preenchimento Obrigatorio!";
        document.getElementById( "error_para" ).innerHTML = erro;
        return false;
        }
      var senha = document.getElementById( "senha" );
      if( senha.value == ""){
        erro = " O campo da senha é de preenchimento Obrigatorio!";
        document.getElementById( "error_para" ).innerHTML = erro;
        return false;
        }

          else
          {
            return true;
          }
    }

    </script>
</head>
<body>
    <?php
    session_start();

    ?>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="midia/quimera_logo.png" alt="" width="72" height="67">
      <h2>Login</h2>
    </div>
    <form onsubmit="return validar();" action="controllers/controller_redator.php" method="POST">

    <div class="col-md-7 col-lg-5">
        <label for="email" class="form-label">Email</label>
        <input type="text" name="email" class="form-control" id="email" placeholder="redator@quimera.com">

    </div>

    <div class="col-md-7 col-lg-5 espaco-titulo-2">
        <label for="senha" class="form-label">Senha</label>
        <input  type="password" name="senha" class="form-control" id="senha" placeholder="********">

    </div>
    <div class="col-md-77 col-lg-5 espaco-titulo-3">
        <input class="btn btn-primary col-lg-3 " type="submit" name="botao" value="Logar">
        <input class="btn btn-secondary col-lg-3 "  type="reset" name="botao" value="Limpar">
        <a id="link_novoregistro_login" href="form_cad_redator.php" class="botao_novo_cadastro_login btn btn-primary col-lg-55 ">Novo Redator</a>

    </div>

    </form >
    <div id='msg'>
    <p class="erro" id="error_para" ></p>
    </div>
</body>

</html>

<?php
require_once("includes/footer.php");
?>
<?php
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
require_once("includes/header.php");
require("controllers/funcoes_db.php");
echo "<link rel='stylesheet' type='text/css' href='css/padrao.css'>";
$conexao = fazconexao();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">
    <script src="js/funcoes_ajax.js"></script>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="form-validation.css" rel="stylesheet">
    <style>
        .erro {
            font-weight: bold;
            color: black;
            background-color: lightpink;
        }
        
    </style>
    <script src="funcoes_ajax.js"> </script>
    <script type="text/javascript">
      function validar(){
      var erro="";

      var nome = document.getElementById( "firstName" );
      if( nome.value == ""){
        erro = " O campo Primeiro nome é de preenchimento Obrigatorio!";
        document.getElementById( "error_para" ).innerHTML = erro;
        return false;
        }
      var sobrenome = document.getElementById( "lastName" );
      if( sobrenome.value == ""){
        erro = " O campo Sobrenome é de preenchimento Obrigatorio!";
        document.getElementById( "error_para" ).innerHTML = erro;
        return false;
        }
        var nickname = document.getElementById( "username" );
        if( nickname.value == "")
        {
          erro = " O campo Nome de usuário é de preenchimento Obrigatorio ";
          document.getElementById( "error_para" ).innerHTML = erro;
          return false;
        }

          var email = document.getElementById( "email" );
          if( email.value == "" )
          {
            erro = " O campo do email do Usuario é de preenchimento Obrigatorio ";
            document.getElementById( "error_para" ).innerHTML = erro;
            return false;
          }

          var endereco = document.getElementById( "endereco" );
          if( endereco.value == "" )
          {
            erro = " O campo do endereço é de preenchimento Obrigatorio ";
            document.getElementById( "error_para" ).innerHTML = erro;
            return false;
          }
          var endereco = document.getElementById( "endereco" );
          if( endereco.value == "" )
          {
            erro = " O campo do endereço é de preenchimento Obrigatorio ";
            document.getElementById( "error_para" ).innerHTML = erro;
            return false;
          }
          var estado  = document.getElementById( "estados" );
          if( estado.value == "" )
          {
            erro = " O campo do estado é de preenchimento Obrigatorio ";
            document.getElementById( "error_para" ).innerHTML = erro;
            return false;
          }
          var cidade  = document.getElementById( "cidades" );
          if( cidade.value == "" )
          {
            erro = " O campo da cidade é de preenchimento Obrigatorio ";
            document.getElementById( "error_para" ).innerHTML = erro;
            return false;
          }
          var cep  = document.getElementById( "cep" );
          if( cep.value == "" )
          {
            erro = " O campo do cep é de preenchimento Obrigatorio ";
            document.getElementById( "error_para" ).innerHTML = erro;
            return false;
          }
          var cep  = document.getElementById( "cep" );
          if( cep.value == "" )
          {
            erro = " O campo do cep é de preenchimento Obrigatorio ";
            document.getElementById( "error_para" ).innerHTML = erro;
            return false;
          }
          var assunto  = document.getElementById( "erro_assunto" );
          if( assunto.value == "" )
          {
            erro = " O assunto da solicitação é de preenchimento Obrigatorio ";
            document.getElementById( "error_para" ).innerHTML = erro;
            return false;
          }
          var desc  = document.getElementById( "erro_desc" );
          if( desc.value == "" )
          {
            erro = " a descrição do erro é de preenchimento Obrigatorio ";
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
  <body class="bg-dark">
    
<div class="container">
  <main>
    <?php


    echo "<div style='text-align:center; id='msg'>";

    if (isset($_SESSION['msg'])) {
        echo "<br><br>" . $_SESSION['msg'] . "<br><br>";
        unset($_SESSION['msg']);
    }
    echo "</div>";
    ?>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="midia/quimera_logo.png" alt="" width="72" height="67">
      <h2>Entre em contato conosco! </h2>
      <p class="lead">Preencha o formulário abaixo para que a nossa equipe possa receber o seu Feedback.</p>
    </div>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Informações pessoais</h4>
        <form onsubmit="return validar();" action="controllers/controller_suporte.php" method="POST" enctype="multipart/form-data ">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Primeiro nome</label>
              <input name="nome_usuario" type="text" class="form-control" id="firstName" placeholder="Eduardo" value="" required>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Ultimo nome</label>
              <input name="sobrenome_usuario" type="text" class="form-control" id="lastName" placeholder="Lima" value="" required>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Nome de usuário</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" placeholder="Nome de usuário" required>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input name="email_usuario" type="email" class="form-control" id="email" placeholder="voce@exemplo.com">
            </div>

            <div class="col-12">
              <label for="endereco" class="form-label">Endereço</label>
              <input name="endereco_usuario" type="text" class="form-control" id="endereco" placeholder="1234 Main St" required>
            </div>

            <div class="col-12">
              <label for="logradouro" class="form-label">Logradouro <span class="text-muted">(Opcional)</span></label>
              <input name="logradouro_usuario" type="text" class="form-control" id="logradouro" placeholder="Apartamento">
            </div>

            <div class="col-md-5">
              <label for="estado" class="form-label">Estado</label>
              <select name="estado_usuario" class="form-select" id="estados" required>
                <?php
                  echo '<option selected disabled>Selecione o estado</option>';
                  $sql = "SELECT * FROM estados ORDER BY nome ASC";
                  $resultados = ConsultaSelectAll($sql);
                    foreach($resultados as $estados){
                      echo '<option value="'.$estados['id'].'">'.$estados['nome'].'</option>';
                    }
                ?>

              </select>
            </div>

            <div class="col-md-4">
              <label for="cidade" class="form-label">Cidade</label>
              <select name="cidade_usuario" class="form-select" id="cidades" required>
                <option selected disabled value="">-</option>
              </select>
            </div>

            <div class="col-md-3">
              <label for="cep" class="form-label">Cep</label>
              <input name="cep_usuario" type="text" class="form-control" id="cep" placeholder="00000-000" required>
            </div>
          </div>

          <h4 class="mb-4 espaco-titulo-2">Informações pessoais</h4>

          <div class="col-12">
              <label for="erro_assunto" class="form-label">Escolha um Assunto</label>
              <select name="erro_assunto" class="form-select" id="erro_assunto" required>
                <option value="">-</option>
                <option value="lentidao">Estou enfrentando problemas com lag ou lentidão ao carregador os dados no site.</option>
                <option value="css">O design do site está sendo mostrado de maneira incorreta, dificultando minha navegação</option>
                <option value="funcionalidade">Uma função do site não está respondendo aos comandos ou funcionando da maneira correta.</option>
                <option value="outros">Outros.</option>

              </select>
            </div>
          
            <div class="col-12 espaco-titulo-2">
              <label for="erro_desc" class="form-label">Descreva o erro</label>
              <textarea style="border-radius:5px ;" name="erro_descricao" class="form-text" id="erro_desc" required></textarea>
            </div>

          <hr class="my-4">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Salvar informação para a proxima vez</label>
          </div>

          <hr class="my-4">
          <p class="erro" id="error_para" ></p></br>

          <button class="w-100 btn btn-primary btn-lg" value="enviar" name="botao" type="submit">Enviar Solicitação</button>
        </form>
        </div>
      </div>
  </main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
<script>
$("#estados").on("change",function(){
  var idEstado = $("#estados").val();
  $.ajax({
    url:'pega_cidades.php',
    type: 'POST',
    data:{id:idEstado},
    beforeSendo: function(){
      $("#cidades").html("Carregando...");
    },
    success: function(data) {
      $("#cidades").html(data);
    }
  });
});
</script>
<?php
require_once("includes/footer.php");
?>
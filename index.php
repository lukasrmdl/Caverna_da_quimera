<?php
require_once("includes/header.php");
require("controllers/funcoes_db.php");
echo "<link rel='stylesheet' type='text/css' href='css/padrao.css'>";
$conexao = fazconexao();

?>


<html>
    <head>  
        <script src="js/jQuery/jquery_base.js"></script>
        <script src="js/script.js"></script>
        <link rel='stylesheet' type='text/css' href='css/bootstrap/bootstrap.css'>
        <script src="js/bootstrap/bootstrap.min.js"></script>
    </head>


    <body id="home_body">
        <section>

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="100%" src="./midia/carousel/carousel_img1.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%"/></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Últimas notícias sobre os fatos mais importantes do mundo Geek</h1>
            <p>Assine a nossa newsletter, receba nossos conteúdos exclusivos e fique por dentro de tudo sobre o mundo geek e as ultimas novidades sobre a cultura pop!.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Assine hoje</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img class="bd-placeholder-img" width="100%" height="100%" src="./midia/carousel/carousel_img2.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Não perca as novidades!</h1>
            <p>Siga-nos em nossas redes sociais para ficar por dentro das ultimas noticias e não perder nenhuma novidade!.</p>
            <p><a class="btn btn-lg btn-primary" href="#footer_info">Saber mais</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img class="bd-placeholder-img" width="100%" height="100%" src="./midia/carousel/carousel_img3.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%"/></svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Torne-se um redator hoje mesmo</h1>
            <p>Se inscreva para os nossos concursos de redator e concorra a uma vaga para participar da nossa equipe!</p>
            <p><a class="btn btn-lg btn-primary" href="form_cad_redator.php">Saber mais</a></p>
          </div>
        </div>
      </div>
    </div>
    <button id="carousel_prev" class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button id="carousel_next" class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
        <?php
            echo "<link rel='stylesheet' type='text/css' href='css/padrao.css'>";
            $conexao = fazconexao();

            $sql1 = "SELECT * FROM noticias ORDER BY idnoticia DESC LIMIT 15";

            $resultados1 = ConsultaSelectAll($sql1);

            echo "<h1 style='margin-left:0.5em;margin-top:0.2em;'> Ultimas notícias </h1>";

            foreach($resultados1 as $linha) {
        ?>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <input name="idnoticia" type ="hidden" value="<?php echo $linha['idnoticia']?>">
        <?php echo "<h2 name='titulo_noticia' class='featurette-heading'>$linha[titulo]</h2>"?>
        <?php echo "<h3 class='text-muted'>$linha[subtitulo]</h3>"?>
        <?php echo "<textarea disabled class='lead'>$linha[texto]</textarea><p><a class='btn2 btn-primary' href='http://localhost/caverna_da_quimera/Acesso_noticia.php?acessa_noticia=$linha[idnoticia]'>Acessar</a></p>"?>
        <?php echo "<p class='autor lead'>Autor: $linha[nome] $linha[sobrenome], $linha[data]</p>" ?>

      </div>
      <div class="col-md-5">

        <?php echo '<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="./imagens_noticias/'.$linha['nome_capa'].'" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" /></img>';?>

      </div>
    </div>
    <?php
            }
    ?> 


    <hr class="featurette-divider">

    <div class="container marketing">
    
    <h1 style='margin-top:0.2em;'> Sobre nós </h1>


    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle equipeimg" width="130" height="130" src="./midia/equipe/lukas.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
        <h2>Lukas Raphael - Dev</h2>
        <p>Sou de Pelotas e estou aprendendo a programar, Suporte técnico na Globosolution Softwares ERP cursando TSI pelo IFsul.  </p>
        <p><a class="btn btn-secondary" href="https://www.linkedin.com/in/lukas-raphael-mendes-duarte-lourencon-78784b1b9/">Ver mais &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle equipeimg" width="130" height="130" src="./midia/equipe/eduardo.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"></img>

        <h2>Eduardo Teixeira - UX</h2>
        <p>Um programador novo que esta cursando TSI no IFsul e que adorá café!</p>
        <p><a class="btn btn-secondary" href="https://www.geradordepersonas.com.br/result-840OZ-7662BW.html">Ver mais &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle equipeimg" width="130" height="130" src="./midia/equipe/elisa.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"></img>

        <h2>Elisa Oliveira - DBA</h2>
        <p>Uma estudante das artes e da modelagem de banco de dados, viciada em Novels.</p>
        <p><a class="btn btn-secondary" href="#">Ver mais &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

    </body>
</html>
<?php
require_once("includes/footer.php");
?>
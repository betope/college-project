<?php
  $host = "localhost";
  $user = "u653934600_gioia";
  $password = "@Gioia2021";
  $dbname = "u653934600_gioiaprodutos";

  $mysqli = new mysqli($host, $user, $password, $dbname);
  if ($mysqli->connect_errno)
    echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;

  $consult = "SELECT * FROM produtos WHERE id = 1";
  $linguica = $mysqli->query($consult) or die ($mysqli->error);

  $consult = "SELECT * FROM produtos WHERE id = 2";
  $mortadela = $mysqli->query($consult) or die ($mysqli->error);

  $consult = "SELECT * FROM produtos WHERE id = 3";
  $salame = $mysqli->query($consult) or die ($mysqli->error);

  $consult = "SELECT * FROM produtos WHERE id = 4";
  $cotechino = $mysqli->query($consult) or die ($mysqli->error);
?>

<!DOCTYPE html>
  <html lang="pt-br" dir="ltr">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/info-prod.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
      <title>Sobre nossos produtos - Salumeria Gioia</title>
    </head>
    <body>
      <header class="header">
        <div class="navbar">
          <a class="logo" href="index.html"><img src="img/logo.jpg" alt="Logo Salumeria Gioia" width="100"></a>
          <nav class="navigation">
            <ul class="menu">
              <li class="nav-item"><a class="m-nav-link" href="index.html">home</a></li>
              <li class="nav-item"><a class="m-nav-link" href="sobre-prod.php">produtos</a></li>
              <li class="nav-item"><a class="m-nav-link" href="sobre.html">quem somos</a></li>
              <li class="nav-item"><a class="m-nav-link" href="faq.html">FAQ</a></li>
              <li class="nav-item"><a class="m-nav-link" href="contato.html">contato</a></li>
            </ul>
          </nav>
        </div>
      </header>
        <section class="produtos-info container">
          <header class="section-header">
            <h2 class="center-text">Saiba mais sobre nossos produtos</h2>
            <p class="center-text">Saiba mais sobre os ingredientes que são usados para fabricar os nossos produtos.</p>
          </header>
          <div class="info-prod">
            <div class="produto">
              <img class="resp-img" src="img/linguica.jpg" alt="Placeholder image">
              <div class="prod-desc">
                <?php while($dados = $linguica->fetch_array()){?>
                <h3><?php echo $dados["nome"]; ?></h3>
                <p>
                  <strong><span class="desc">Descrição do produto</span> </strong>
                  <br>
                  <?php echo $dados["descricao"]; ?>
                </p>
                <br>
                <p><strong>Ingredientes: </strong><?php echo $dados["ingredientes"]; ?></p>
                <?php }?>
              </div>
            </div>
            <hr>
            <div class="produto">
              <img class="resp-img" src="img/mortadela.jpg" alt="Placeholder image">
              <div class="prod-desc">
                <?php while($dados = $mortadela->fetch_array()){?>
                <h3><?php echo $dados["nome"]; ?></h3>
                <p>
                  <strong><span class="desc">Descrição do produto</span> </strong>
                  <br>
                  <?php echo $dados["descricao"]; ?>
                </p>
                <br>
                <p><strong>Ingredientes: </strong><?php echo $dados["ingredientes"]; ?></p>
                <?php }?>
              </div>
            </div>
            <hr>
            <div class="produto">
              <img class="resp-img" src="img/salame.jpg" alt="Placeholder image">
              <div class="prod-desc">
                <?php while($dados = $salame->fetch_array()){?>
                <h3><?php echo $dados["nome"]; ?></h3>
                <p>
                  <strong><span class="desc">Descrição do produto</span> </strong>
                  <br>
                  <?php echo $dados["descricao"]; ?>
                </p>
                <br>
                <p><strong>Ingredientes: </strong><?php echo $dados["ingredientes"]; ?></p>
                <?php }?>
              </div>
            </div>
            <hr>
            <div class="produto">
              <img class="resp-img" src="img/cotechino.jpg" alt="Placeholder image">
              <div class="prod-desc">
                <?php while($dados = $cotechino->fetch_array()){?>
                <h3><?php echo $dados["nome"]; ?></h3>
                <p>
                  <strong><span class="desc">Descrição do produto</span> </strong>
                  <br>
                  <?php echo $dados["descricao"]; ?>
                </p>
                <br>
                <p><strong>Ingredientes: </strong><?php echo $dados["ingredientes"]; ?></p>
                <?php }?>
              </div>
            </div>
          </div>
        </section>
        <footer class="footer">
          <div class="modal">
            <div class="modal-content">
              <span class="close-modal">X</span>
              <h3>TROCAS E DEVOLUÇÕES</h3>
              <ul class="troca">
                <li>O prazo para efetuar troca de produtos adquiridos pela loja online da Riachuelo é de trinta dias corridos, a contar da data do recebimento do produto. Durante o período de pandemia, estendemos o prazo para noventa dias corridos;</li>
                <li>Realizamos a troca do produto ou emitimos um vale troca para ser utilizado no site ou em nossas lojas.</li>
                <li>O prazo de devolução por arrependimento de produtos adquiridos pela loja online da Riachuelo é de sete dias corridos, a contar da data do recebimento do produto, conforme determina o código de defesa do consumidor;</li>
                <li>Nos casos de devolução, podemos emitir um vale troca para ser utilizado em nosso site ou em nossas lojas, ou a devolvemos o valor pago por meio de reembolso para pedidos pagos com cartão de débito ou boleto ou estorno para pedidos pagos com cartões de crédito ou cartões Riachuelo.</li>
                <li>O frete para a primeira troca ou devolução é por conta da Riachuelo; o frete para trocas ou devoluções sucessivas do mesmo pedido será cobrado.</li>
                <li>Para a sua segurança não realizamos trocas de lingerie, biquínis e sungas.</li>
                <li>Celulares, eletrônicos, eletroportáteis, relógios, perfumes e beleza adquiridos em nossa loja online, serão trocados somente pela Canal de atendimento. Este processo não será realizado em loja física. Para mais detalhes, clique aqui.</li>
              </ul>
              <h3>FORMAS DE PAGAMENTO</h3>
              <ul>
                <li>Boleto</li>
                <li>PIX</li>
                <li>Crédito e Débito <br><br>
                  <img class="resp-img" src="img/payment.png" alt="Bandeira de cartões de crédito." width="450">
                </li>
              </ul>
            </div>
          </div>
            <div class="wrapper-footer-lists">
              <ul class="footer-list">
                <h3>institucional</h3>
                <li><a class="f-link" href="sobre.html">Quem somos</a></li>
                <li><a class="f-link" href="sobre-prod.php">Sobre os produtos</a></li>
              </ul>
              <ul class="footer-list">
                <h3>produtos</h3>
                <li><a class="f-link" href="#">Linguiça</a></li>
                <li><a class="f-link" href="#">Salame</a></li>
                <li><a class="f-link" href="#">Mortadela</a></li>
              </ul>
              <ul class="footer-list">
                <h3>informações</h3>
                <li><a class="f-link ftroca" href="#">Troca e devolução</a></li>
                <li><a class="f-link fpay" href="#">Formas de pagamento</a></li>
                <li><a class="f-link" href="privacidade.html">Privacidade</a></li>
                <li><a class="f-link" href="termos-uso.html">Termos de uso</a></li>
              </ul>
              <ul class="footer-list social-icons">
                <h3>redes sociais</h3>
                <li><a class="f-link" href="#" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a></li>
                <li><a class="f-link" href="https://www.instagram.com/salumeriagioia/" target="_blank"><i class="fab fa-instagram-square fa-2x"></i></a></li>
                <li><a class="f-link" href="#" target="_blank"><i class="fab fa-youtube fa-2x"></i></a></li>
              </ul>
            </div>
            <p class="copyright center-text">&copy; 2021 <a href="index.html">Salumeria Gioia</a>. Todos os direitos reservados.</p>
      </footer>
      <script src="js/script.js"></script>
      <script src="http://localhost:35729/livereload.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js" async=""></script>
    </body>
  </html>

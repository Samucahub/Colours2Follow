<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COLOURS2FOLLOW</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f9fa;
    }

    header {
      background-color: #66CDAA;
      color: #fff;
      padding: 1em;
      text-align: center;
      align-items: center;
    }
    header img{
      width: 50px;
      height: auto;
      margin-right: 10px;
    }

    header h1{
      margin: 0;
    }

    nav {
      background-color: #e9ecef;
      padding: 1em;
    }

    nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        nav li {
            margin: 0 15px;
            font-weight: bold;
        }

        nav a {
            text-decoration: none;
            color: #333;
        }

    section {
      padding: 40px 0;
    }

    footer {
      background-color: #66CDAA;
      color: #fff;
      text-align: center;
      padding: 1em 0;
    }
	  
    .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo a {
            text-decoration: none;
            color: #333;
        }

        .main-navigation {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .main-navigation li {
            margin: 0 15px;
        }

        .main-navigation a {
            text-decoration: none;
            color: #333;
        }

        /* Additional styling for the menu toggle */
        .menu-toggle {
            display: none;
        }

        @media (max-width: 768px) {
            .main-navigation {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                left: 0;
                width: 100%;
                background-color: #e9ecef;
            }

            .main-navigation.show {
                display: flex;
            }

            .main-navigation li {
                margin: 0;
                text-align: center;
                padding: 10px 0;
            }

            .menu-toggle {
                display: block;
                cursor: pointer;
	    }
	}
  </style>
</head>
<body>

  <header>
  <img src="GitHub.png" alt="Logo" />
    <h1>COLOURS2FOLLOW</h1>
  </header>

	<div class="row">
    <div class="top-bar">
        <a class="menu-toggle" href="#"><span>Menu</span></a>

        <div class="logo">
            <a href="Colours2followpagina.php">Menu</a>
        </div>

        <nav id="main-nav-wrap">
            <ul class="main-navigation">
                <li class="current"><a class="smoothscroll" href="#intro" title="">Início</a></li>
                <li><a class="smoothscroll" href="#about" title="">Sobre mim</a></li>
                <li><a class="smoothscroll" href="#resume" title="">Resumo</a></li>
                <li><a class="smoothscroll" href="#portfolio" title="">Portofólio</a></li>
                <li><a class="smoothscroll" href="#services" title="">Serviços</a></li>
                <li><a class="smoothscroll" href="#contact" title="">Contacto</a></li>
            </ul>
        </nav>
    </div>
</div>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul>
        <li class="nav-item">
            <a class="navbar-brand" href="Colours2followpagina.php" style="font-weight: bold;">Início</a>
        </li>
        <li class="nav-item">
            <a class="navbar-brand" href="Colours2followLoja.php">Loja</a>
        </li>
        <li class="nav-item">
            <a class="navbar-brand" href="Colours2followFormulario.php">Formulário</a>
        </li>
        <li class="nav-item">
            <a class="navbar-brand" href="Colours2followLocal.php">Local</a>
        </li>
    </ul>
</nav>

  <section id="home">
    <div class="container">
      <h2>Seção Inicial</h2>
      <p>Bem-vindo à nossa página profissional.</p>
    </div>
  </section>

  <section id="shop">
    <div class="container">
      <h2>Nossa Loja</h2>
      <p>Explore nossa loja e descubra ótimos produtos.</p>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <h2>Entre em Contato</h2>
      <p>Entre em contato conosco para mais informações.</p>
    </div>
  </section>

  <section id="address">
    <div class="container">
      <h2>Nossa Morada</h2>
      <p>Nossa localização física.</p>
    </div>
  </section>

  <footer>
    <div class="container">
      &copy; 2023 COLOURS2FOLLOW. Todos os direitos reservados.
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>

<?php 
include('funciones-tiempo.php');

function definirHtml() {
	print '
	<!DOCTYPE HTML>
	<html>';
}

function escribirHead() {
	print 
	'<head>	
	    <title>La Manzana Roja</title>
	    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	    <meta name="description" content="" />
	    <meta name="keywords" content="" />
	    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
	    <script src="js/jquery.min.js"></script>
	    <script src="js/jquery.dropotron.min.js"></script>
	    <script src="js/jquery.scrollgress.min.js"></script>
	    <script src="js/jquery.scrolly.min.js"></script>
	    <script src="js/jquery.slidertron.min.js"></script>
	    <script src="js/skel.min.js"></script>
	    <script src="js/skel-layers.min.js"></script>
	    <script src="js/init.js"></script>
	    <noscript>
	    <link rel="stylesheet" href="css/skel.css" />
	    <link rel="stylesheet" href="css/style.css" />
	    <link rel="stylesheet" href="css/style-xlarge.css" />
	    </noscript>
	    <!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
  	</head>';
}

function escribirCabecera() {
	print '
  <body class="landing">
    <!-- Header -->
    <header id="header" class="skel-layers-fixed">
      <div id="header-blur">&nbsp;</div>
      <h1>La Manzana Roja</h1>
      <nav id="nav">
        <ul>
          <li><a href="index.php" class="icon fa-home">Inicio</a></li>
          <li><a href="buscar.php" class="icon fa-search">Buscar Receta</a></li>
          <li><a href="ver.php" class="icon fa-eye">Ver Recetas</a></li>
          <li><a href="about.php" class="icon fa-question-circle">About</a></li>
          <li>
            <a href="http://openweathermap.org/city/3106672" class="icon fa-sun-o">El Tiempo</a>';
              mostarTiempo(); 
  print '
          </li>
        </ul>
      </nav>
    </header>';
}

function escribirPie() {
	print '
  <footer id="footer">
        <ul class="icons">
          <li>
            <a href="https://twitter.com/ddmontal" class="icon fa-twitter">
              <span class="label">Twitter</span>
            </a>
          </li>
          <li>
            <a href="#" class="icon fa-facebook">
              <span class="label">Facebook</span>
            </a>
          </li>
          <li>
            <a href="https://es.linkedin.com/in/ddmontal" class="icon fa-linkedin">
              <span class="label">LinkedIn</span>
            </a>
          </li>
          <li>
            <a href="mailto:ddmontal@gmail.com" class="icon fa-envelope">
              <span class="label">Envelope</span>
            </a>
          </li>
        </ul>
        <ul class="menu">
        </ul>
        <span class="copyright">
          <p>
            Design by <a href="http://www.html5webtemplates.co.uk">Responsive Web Templates</a>.<br>
            Under a <a href="http://creativecommons.org/licenses/by/3.0">Creative Commons Attribution 3.0</a> license.<br>
            Adaptado por David Montalvillo como trabajo sobre desarrollo web con PHP y XML del módulo "Lenguajes de Marcas", C.F.G.S.
            Administración de Sistemas Informáticos en Red.
          </p>
        </span>
      </footer>
    </body>
  	';
}
	function finHtml() {
		echo '</html>';
	}
  function darBienvenida() {
    print '<section id="banner">
        <div class="inner">
          <h2>Bienvenido</h2>
          <p>En esta página web encontrará una gran variedad de recetas para hacer.</p>
          <ul class="actions">
            <li><a href="ver.php" class="button big">Comience</a></li>
          </ul>
        </div>
      </section>';
  }
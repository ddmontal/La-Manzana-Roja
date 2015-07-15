<?php
include('php/funciones-html.php');

definirHtml();
escribirHead();
escribirCabecera();
?>

<section id="banner">
	<div class="inner">
	  <h2>Bienvenido</h2>
	  <p>En esta página web encontrará una gran variedad de recetas para hacer.</p>
	  <ul class="actions">
	    <li><a href="ver.php" class="button big">Comience</a></li>
	  </ul>
	</div>
</section>

<?php
escribirPie();
finHtml();
?>

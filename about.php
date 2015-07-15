<?php
include('php/funciones-html.php');

definirHtml();
escribirHead();
escribirCabecera();
?>

<section id="main" class="wrapper style1">
  <header class="major">
    <h2>Acerca de</h2>
    <p></p>
  </header>
  <div class="container">
    <div class="row 150%">
      <div class="4u 12u$(2)">

        <!-- Sidebar -->
          <section id="sidebar">
            <section>
              <h3>Un equipo apasionado</h3>
              <p>"No todo lo que cuenta puede ser cuantificado, y no todo lo que puede ser cuantificado cuenta".</p>
              <p>Albert Einstein</p>
            </section>
          </section>

      </div>
      <div class="8u 12u$(2) important(2)">

        <!-- Content -->
          <section id="content">
            <a href="#" class="image fit"><img src="images/red-apples.jpg" alt="" /></a>
          </section>

      </div>
    </div>
  </div>
</section>

<?php
escribirPie();
finHtml();
?>

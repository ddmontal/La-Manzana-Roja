<?php
include('php/funciones-html.php');

definirHtml();
escribirHead();
escribirCabecera();

$recetas = simplexml_load_file('xml/recetas.xml');
?>
<section id="tabla" class="wrapper style2 full-height">
      <div class="inner">
        <header class="major">
          <h2>Seleccione la receta que quiera ver</h2>
          <table class="table-wrapper">
            <tr>
              <th>Nombre</th>
              <th>Comensales</th>
              <th>Tiempo (Min.)</th>
              <th>Dificultad</th>
            </tr>
            <?php
            foreach ($recetas as $r) {
              if (!is_null($r->id) && $r->id != "") {?>
                <tr>
                  <td>
                    <a href="<?php print '#'.$r->id ?>" class="scrolly"><?php print $r->nombre ?></a>
                  </td>
                  <td>
                    <?php print $r->informacion_general->comensales ?>
                  </td>
                  <td>
                    <?php print $r->informacion_general->tiempo?>
                  </td>
                  <td>
                    <?php print ucfirst(trim($r->informacion_general->dificultad))?>
                  </td>
                </tr>
                <?php
              }
            }
            ?>

         </table>
        </header>
      </div>
    </section>
<?php
    foreach ($recetas as $r) {
      if (!is_null($r->id) && $r->id != "") { ?>
        <section id="<?php print $r->id ?>" class="wrapper style1">
        <header class="major">
          <h2><?php print $r->nombre ?></h2>
          <p><?php print $r->informacion_general->descripcion ?></p>
        </header>
        <div class="container align-center">
          <section id="content">
            <div class="">
              <a href="#" class="image fit">
                <img src="<?php print 'images/'.$r->informacion_general->foto ?>"
                 alt= <?php print '"Imágen de' . $r->nombre . '"' ?>
               /></a>
            </div>
            <h3 class="">Ingredientes</h3>
            <table class="table-wrapper">
              <tr>
                <th>Ingrediente</th>
                <th>Cantidad</th>
              </tr>
          <?php
          foreach ($r->ingredientes->ingrediente as $i) {
            echo '
                  <tr>
                  ';
            if ($i->attributes()['cantidad'] != '') {
                echo '<td>'.ucfirst(trim($i)).'</td>';
                echo '<td>'.$i->attributes()['cantidad'].' '.ucfirst(trim($i->attributes()['unidad']));
            } else {
                echo '<td colspan="2">'.ucfirst(trim($i));
            }

            print '</td>
                  </tr>
            ';
          }
          print '
                </table>
                <h3 class="">Preparación</h3>
                ';

          foreach ($r->preparacion->paso as $p) {
            print '<p>'.$p.'</p>';
          }

          ?>
        </section>
        </div>
      </section>
      <section id="cta" class="wrapper style3">
        <h2></h2>
        <ul class="actions">
          <li><a href="#tabla" class="button small scrolly">Volver al inicio</a></li>
        </ul>
      </section>
<?php
      }
    }

    escribirPie();
    finHtml();
?>

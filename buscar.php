<?php
include('php/funciones-html.php');

definirHtml();
escribirHead();
escribirCabecera();

if (isset($_POST['nombre'])) {
  $recetas = simplexml_load_file('xml/recetas.xml');
}
?>
    <section id="one" class="wrapper style2">
      <div class="container">
        <header class="major">
          <h2>Buscador de recetas</h2>
        </header>
        <form action="buscar.php" method="post" class="form_buscador">

          <label for="txtNombre">Nombre de la receta:</label>
          <input type="text" id="nombre" name="nombre" value="<?php
            if (isset($_POST['buscar'])) { print $_POST['nombre']; }?>"
         />

          <br>
          Mostrar:
          Ingredientes
          <input type="radio" name="rbTipo" value="ing"
            <?php
            if (isset($_POST['buscar']) && $_POST['rbTipo'] == "ing") { print "checked"; }
            elseif (!isset($_POST['buscar'])) { print "checked"; }
            ?>
          />
          Preparación
          <input type="radio" name="rbTipo" value="prep"
            <?php if (isset($_POST['buscar']) && $_POST['rbTipo'] == "prep") { print "checked"; } ?>
          />
          <br>
          <br>
          <input type="submit" class="button" name="buscar" value="Buscar" />
          <br>
          <?php
           if (isset($_POST['buscar'])) {
            print '<h3>'.$_POST['nombre'].'</h3>';

            print '
            <table class="table-wrapper">';
             if ($_POST['rbTipo'] == "ing") {
                print '<tr>
                  <th>Ingrediente</th>
                  <th>Cantidad</th>
                </tr>';

                  $ingredientes = $recetas->xpath('//receta[nombre="'.$_POST['nombre'].'"]/ingredientes/ingrediente');

                  if (count($ingredientes) > 0) {
                    foreach ($ingredientes as $i) {
                      echo '
                        <tr>
                        ';
                    if ($i->attributes()['cantidad'] != '') {
                        echo '<td>'.ucfirst(trim($i)).'</td>';
                        echo '<td>'.$i->attributes()['cantidad'].' '.ucfirst(trim($i->attributes()['unidad']));
                    } else {
                        echo '<td colspan="2">'.ucfirst(trim($i));
                    }

                    echo '</td>
                          </tr>
                    ';
                    }
                  } else {
                    print 'La receta no existe o no tiene ingredientes';
                  }
                } else  {
                $prep = $recetas->xpath('//receta[nombre="'.$_POST['nombre'].'"]/preparacion/paso');

                if (count($prep) > 0) {
                  foreach ($prep as $p) {
                    echo '<p>'.$p.'</p>';
                  }
                } else {
                  print 'La receta no existe o no tiene preparación';
                }
              }
            print '</table>';
          }
        print '</form>
      </div>
    </section>';

escribirPie();
finHtml();
?>

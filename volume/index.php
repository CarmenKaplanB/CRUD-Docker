<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ETIQUETAS REQUERIDAS -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- OBTENCION DE ESTILOS - BULMA -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
    <title>Kaplan B. Inicio</title>
    <link rel="shortcut icon" href="https://raw.githubusercontent.com/MariaDelCarmenHernandezDiaz/Recursos-Test/main/Personal%20B/Kaplan-B.-_1_.ico">
    
</head>

<center>
  <br>
  <figure class="image is-128x128">
    <img class="is-rounded is-success" src="https://github.com/MariaDelCarmenHernandezDiaz/Recursos-Test/blob/main/Personal%20B/Kaplan%20B.gif?raw=true" alt="Kaplan B. Logo">
  </figure>
  <br>
</center>

<!-- MENU - ESTILO:TABS -->

<div class="tabs is-centered is-boxed">
  <ul>
    <li class="">
      <a href="./index.php">
        <span class="icon is-small"><i class="fas fa-home" aria-hidden="false"></i></span>
        <span class="link is-info">Inicio</span>
      </a>
    </li>
    <li>
      <a href="./insert.php">
        <span class="icon is-small"><i class="fas fa-train" aria-hidden="false"></i></span>
        <span>Agrega un registro</span>
      </a>
    </li>
    
  </ul>
</div>

<!-- HERO - CABECERA -->

<section class="hero is-small" style="background-color: #6567C6">
  <div class="hero-body">
    <div class="columns">
      <div class="column"></div>
      <div class="column is-four-fifths">
        <p class="title" style="color:#FFFFFF">
          Bienvenido
        </p>
        <p class="subtitle" style="color:#FFFFFF">
          ¡Visualicemos los datos!
        </p>
      </div>
      <div class="column"></div>
    </div>
    </div>
  </div>
</section>



<!-- HERO - CONTENT -->
  <section class="hero is-light is-small">
  <div class="hero-body">
    <div class="columns">     
    <div class="table-container">
        <table class="table is-striped is-fullwidth">
          <thead>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
          </thead>
    
          <tbody>
          <?php
            $mysql = new SQLite3('agenda.db');
            $select = 'SELECT * from personas;';
            $resultado = $mysql->query('SELECT * from personas;');   
          ?>
              <?php while($row = $resultado->fetchArray(SQLITE3_ASSOC)){ ?>
                <tr>
                  <td><?php echo $row["nombre"] ?></td>
                  <td><?php echo $row["email"] ?></td>
                  <td><?php echo $row["telefono"] ?></td>
                </tr>
              <?php }?>
            </tbody>
          </table>
      </div>

    </div>
  </div>

</section>

<!-- PIE DE PAGINA -->

<footer class="footer is-white" style="background-color: #6567C6">
    <nav class="content is-fullwidth has-text-centered">
        
          <!-- HIPERVINCULO HACIA LA PAGINA OFICIAL -->

          <div class="columns">
            
            <div class="column is-three-fifths">
              <a class="has-text-weight-bold" href="/index">
                <img src="https://github.com/MariaDelCarmenHernandezDiaz/Recursos-Test/blob/main/Personal%20B/Kaplan%20B.%20V..gif?raw=true" width="180" height="180" alt="Kaplan B. Logo">
              </a>
            </div>
            
            <div class="column" style="color:#FFFFFF">
              Plataforma creada con 
              <b><a href="https://bulma.io/" style="color:#FFFFFF">Bulma.<br></a></b>
              Hernandez Diaz Maria del Carmen 
              <br> Matricula: <b>1718110389</b>
              <br> Actividad: 1.6 Docker
              <br> Correo electronico: 1718110389@utectulancingo.edu.mx
            </div>
            
            <div class="column"></div>
          </div>

            
    </nav>
</footer>

</html>
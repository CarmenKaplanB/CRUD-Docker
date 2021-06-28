<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ETIQUETAS REQUERIDAS -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- OBTENCION DE ESTILOS - BULMA -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
    <title>Kaplan B. Docker</title>
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
      <a href="./insert.php" class="navbar-item">
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
          Agrega un nuevo registro
        </p>
        <p class="subtitle" style="color:#FFFFFF">
          ¡Insertalo!
        </p>
      </div>
      <div class="column"></div>
    </div>
    </div>
  </div>
</section>


<!-- HERO - CONTENT -->

<!-- SECCION FORMULARIO -->

<section class="hero is-bold">
  <nav class="hero-body">
      <nav class="columns is-centered">
          <nav class="column is-half">
          
          <form action="salvar.php" method="POST">
                <div class="field">
                  <label class="label">Nombre</label>
                  <div class="control">
                    <input class="input is-info is-rounded" type="text" name="nombre" id="nombre" placeholder="Carmen" required>
                  </div>
                </div>
                <div class="field">
                  <label class="label">Email</label>
                  <div class="control">
                    <input class="input is-info is-rounded" type="text" name="email" id="email"  placeholder="kaplan@gmail.com" required>
                  </div>
                </div>
                <div class="field">
                  <label class="label">Teléfono</label>
                  <div class="control">
                    <input class="input is-info is-rounded" type="number" name="telefono" id="telefono" placeholder="7752016567" required> 
                  </div>
                </div>
                <div class="field is-grouped">
                  <div class="control">
                    <button class="button is-primary is-rounded is-fullwidth">Guardar</button>
                  </div>
                </div>
              </form>
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
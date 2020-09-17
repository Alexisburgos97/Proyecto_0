<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Alexis Burgos 😉</title>
    <style>
      html{
          scroll-behavior: smooth;
      }
    </style>
  </head>
  <body>
    <header class="container-fluid">
      <h1>Alexis Burgos</h1>
      <h4>Developer</h4>
    </header>

    <nav class="container-fluid">
      <ul>
        <a href="#home"><li>Home</li></a>
        <a href="#estudio" ><li>¿Dónde estudio?</li></a>
        <a href="#skills" ><li>Skills</li></a>
        <a href="#contacto" ><li>Contacto</li></a>
      </ul>
    </nav>

  <main>
    <section class="container mt-5" id="home">
      <h2 style="text-align: center;">Alexis Burgos</h2>
        <div class="row">
          <div class="col col-xl-4 col-lg-5 col-xs-12">
            <img src="images/foto.jpg" alt="Foto de alexis">
          </div>
          <div class="col col-xl-6 col-lg-5 col-xs-12 caja mt-5">
            <p>Soy un apasionado por la informatica desde mi infancia, eso me llevo a ser autodidacta en muchas areas entre ellas la programación.</p>
            <p>Me destaco por mi capacidad de adaptarme a situaciones muy cambiantes. La responsabilidad, la eficiencia y la ética son los pilares mas importantes que tengo en cuenta a la hora de desarrollarme.</p>
            <p><b>Actualmente me encuentro en el último año de la carrera, realizando un proyecto web que tenga tanto Front-end como Back-end</b></p>
          </div>
        </div>
    </section>

    <section id="estudio" >
      <h2 class="mt-5" style="text-align: center;">¿Dónde estudio?</h2>
      <div class="container mt-5">
        <div class="row2">
          <div class="col col-xl-6 col-lg-6 col-xs-12 caja">
            <h3>Instituto de Formación Técnica Superior N°21</h3>
            <p>Son 3 años de formación para el título de Técnico Superior en Analista de sistemas</p>
          </div>
          <div class="col col-xl-4 col-lg-4 col-xs-12 ">
            <address>
              Carlos Spegazzini 450
            </address>
            <img src="images/ifts.jpg" style="width: 150px; height: 150px;" alt="Imagen del instuto de formacion tecnica Superior n°21">
          </div>
        </div>
      </div>
    </section>

    <section class="container" id="skills">
      <h2 class="mt-5" style="text-align: center;">Skills</h2>
        <div class="row3 mt-5">
          <div class="col col-xl-6 col-md-6 col-xs-12 mr-3 caja">
            <img src="images/java .png" class="img img:hover" alt="Imagen de JAVA">
            <p>JAVA</p>
            <ul>
              <li>POO - (Eclipse)</li>
            </ul>
          </div>
          <div class="col col-xl-6 col-md-6 col-xs-12 caja">
            <img src="images/javascript1.png" class="img img:hover" alt="Imagen de Javascript">
            <p>JAVASCRIPT</p>
            <ul>
              <li>Básico - Intermedio</li>
            </ul>
          </div>

        </div>
        <div class="row3 mt-2 ">
          <div class="col col-xl-6 col-md-6 col-xs-12 mr-3 caja">
            <img src="images/html.png" class="img img:hover" alt="Imagen de HTML5">
            <p>HTML5</p>
            <ul>
              <li>Básico - Intermedio</li>
            </ul>
          </div>
          <div class="col col-xl-6 col-md-6 col-xs-12 caja" >
            <img src="images/css.png" class="img img:hover" alt="Imagen de CSS3">
            <p>CSS3</p>
            <ul>
              <li>Básico - Intermedio</li>
              <li>Framework => Bootstrap</li>
            </ul>
          </div>
        </div>
        <div class="row3 mt-2">
          <div class="col col-xl-6 col-md-6 col-xs-12 mr-3 caja">
            <img src="images/php.png" class="img img:hover" alt="Imagen de PHP">
            <p>PHP</p>
            <ul>
              <li>Básico - Intermedio</li>
            </ul>
          </div>
          <div class="col col-xl-6 col-md-6 col-xs-12 caja">
            <img src="images/mysql.png" class="img img:hover" alt="Imagen de Mysql">
            <p>MYSQL</p>
            <ul>
              <li>Básico - Intermedio</li>
            </ul>
          </div>
          </div>
        <div class="row3 mt-2">
            <div class="col col-xl-6 col-md-6 col-xs-12 mr-3 caja">
              <img src="images/cplus.png" style="width:50px; height:30px;" class="img img:hover" alt="Imagen de c++">
              <p>C++</p>
              <ul>
                <li>Básico</li>
              </ul>
            </div>
            <div class="col col-xl-6 col-md-6 col-xs-12 caja">
              <img src="images/access.png" class="img img:hover" alt="Imagen de access">
              <p>ACCESS</p>
              <ul>
                <li>Básico</li>
              </ul>
            </div>
          </div>
    </section>

    <section class="container" id="contacto">
      <h2 class="mt-5" style="text-align: center;">Contactame</h2>
      <div>
        <form action="backend/contacto.php" method="post">
          <div>
            <span>Nombre Completo: </span>
            <input type="text" class="form-control" name="nombreCompleto" placeholder="Ingrese su nombre completo" required>
          </div>
          <div>
            <span>Email: </span>
            <input type="email" class="form-control" name="email" placeholder="Ingrese su email" required>
          </div>
          <div>
            <span>Motivo:</span>
            <select name="motivo" class="form-control">
              <option>Contactarse</option>
              <option>Mensaje</option>
            </select>
          </div>
          <span>Mensaje: </span>
          <div>
            <textarea name="mensaje" class="form-control" rows="8" cols="80"></textarea>
          </div>
          <button type="submit" class="mt-3">Enviar</button>
        </form>
      </div>
    </section>

  </main>

    <footer class="footer mt-5">
      <div class="container">
        <p class="parrafo-footer"><b>Red social</b></p>
        <div class="row4">
          <div class="col2 col-xl-6 col-md-6 col-xs-12">
            <a href="https://www.linkedin.com/in/alexis-burgos-7392b919a/" target="_blank"><img src="images/linkedin.png" class="img img:hover" alt="Imagen de Linkedin"></a>
            <p>Linkedin</p>
          </div>
          <div class="col2 col-xl-6 col-md-6 col-xs-12">
            <a href="https://github.com/Alexisburgos97" target="_blank"><img src="images/github.png" class="img img:hover" alt="Imagen de GitHub"></a>
            <p>GitHub</p>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>

<?php include 'conexion.php'; ?>
<?php $conexion = new conexion();
 /*$sql = "SELECT * FROM `proyectos`";
 $datos = $conexion->consultar($sql);*/
 $proyectos= $conexion->consultar("SELECT * FROM `proyectos`");
 ?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/estilos.css">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./assets/img/favicon.png" rel="icon">

     <!-- Font icons pulled from remix icon CDN (Content delivery network) -->
     <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kalam">

     <script src="2d.js"></script>
 
    <title>Mi Portfolio</title>
</head>
<body>
  <section class="cardHorizontal bg-dark">
    <div class="card  bg-dark">
      <div class="row g-1 bg-dark">
        <div class="col-md-6">
          <div class="card-body text-white posTxt">
            <p class="card-title text-white bg-dark formFont">Hola!!!</p>
            <h3>Yo soy:</h3>
            <h1><a href="" class="typewrite text-white nomFormato" data-period="2000" data-type='[ "Roberto C. Montenegro" ]'></a> </h1>
            <p class="subName">FullStack Developer PHP Trainee</p>
            <div class="icons-wrapper">
              <!-- 
              Font icons. They are being pulled by class names from the remix icon CDN stylesheet.
              Visit https://remixicon.com for the full list of icons and documentation.
              The last icon class is my personal class for selecting all icons at once.
              -->
              <a href="https://www.instagram.com/"><i class="ri-instagram-line icon"></i></a>
              <a href="https://www.facebook.com/"><i class="ri-facebook-circle-line icon"></i></a>
              <a href="https://web.whatsapp.com/"><i class="ri-whatsapp-line icon"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 posFoto">
          <div class="circular--portrait">
            <img src="./assets/img/rober2.jpg" alt="Foto de Roberto Montenegro" loading=lazy/>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="bg-dark">
    <div class="container bg-dark">
      <h2 class="text-white formProy">Mi portfolio</h2>
      <div class ="row row-cols-1 row-cols-md-3 g-4 text-white border border-danger border-4 rounded espDown">
        <?php #leemos proyectos 1 por 1
            foreach($proyectos as $proyecto){ 
            ?>
              <div class="col">
                <div class="card border border-3 shadow w-100">
                  <a>
                  <img class="card-img-top" width="100" src="imagenes/<?php echo $proyecto['imagen'];?>" alt="">
                  </a>
                  <div class="card-body">
                    <h5 class="card-title text-white">
                      <?php echo $proyecto['nombre'];?>
                    </h5>
                    <p class="card-text text-dark">
                      <?php echo $proyecto['descripcion'];?>
                    </p>
                  </div>
                </div>
              </div>
          <?php
            } 
        ?>
      </div>
    </div>
</div>

<div id="contact" class="formuContacto text-center bg-dark text-white ">
  <header>
    <h2>Contactame</h2>
  </header>
  <div class="container d-flex justify-content-center border border-danger border-4 rounded espDown">
      <div class="border-3 col-8" >
          <form action="enviar.php" method='post' >
              <div class="mb-3 formuContacto">
                  <input type="text" class="form-control" id="name" placeholder="Nombre" required>
                  <br>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required>
                  <br>
                  <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
                  </div>
                  <div class="mb-3">
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Motivo" required>
                      <br>
                      <textarea class="form-control" name="contenido" id="contenido" cols="10" rows="5" placeholder="Mensaje" required></textarea>
                  </div>

                  <button class="btn btn-light" ><a  id='WSP'  href="" Target="_blank">Enviar Whatsapp</a></button>
                  <button type="submit" class="btn btn-primary"> Enviar Mail </button>
            </form>
        </div>
    </div>
</div>
        
<footer>
    <ul class="nav justify-content-center bg-dark">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Diseño en proceso... by RCM</a>
      </li>
    </ul>
</footer>
    
      <script src="./js/bootstrap.bundle.min.js"></script>
      <script src="./js/script.js"></script>
      <script src="./js/bootstrap.bundle.min.js.map"></script>
      <script src="js.js"></script>
      <script src="envio.js"></script>
</body>
</html>
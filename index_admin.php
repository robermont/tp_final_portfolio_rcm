<?php include 'header.php';?>
<?php $conexion = new conexion();# es un objeto de tipo conexion,
      $proyectos= $conexion->consultar("SELECT * FROM `proyectos`"); ?>

<div class="p-5 bg-dark text-white fst-italic  ">
    <div class="container">
        <h1 class="fs-1 fw-bold text-white formContainer">Administrador de Portfolio Personal</h1>
      <!--  <p class="lead">Proyectos Cargados en la base de datos</p> !-->
        <hr class="my-2 text-danger">
        <p class="lead" style="font-size:1.5rem;"><br>En ABM podra:  <br> Dar de Alta un nuevo proyecto <br> Dar de Baja un proyecto <br> Modificar un proyecto <br>
        Cualquier duda <a href="mailto:robermon@hotmail.com">Click para enviar email</a></p>
    </div>
</div>

<div class ="container bg-dark">
    <p class="lead text-white text-center fs-4 fw-bold formTitu">Proyectos Cargados en la base de datos</p>
    <div class="row row-cols-1 row-cols-md-3 g-4 bg-dark p-2 text-white bg-opacity-75 border border-danger border-4 rounded ">
        <?php #leemos proyectos 1 por 1
            foreach($proyectos as $proyecto){ ?>
                <div class="col">
                    <div class="card border border-3 shadow">
                        <img class="card-img-top" style="object-fit:cover;" src="imagenes/<?php echo $proyecto['imagen'];?>" alt="" width="300">
                        <div class="card-body">
                            <h5 class="card-title text-white"><?php echo $proyecto['nombre'];?></h5>
                            <p class="card-text"><?php echo $proyecto['descripcion'];?></p>
                        </div>
                    </div>
                </div>
        <?php } ?>
    </div>
</div>
<?php include 'footer.php'; ?>

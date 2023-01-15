<footer class="container-fluid mt-5 bg-dark">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarsExample03">
                <ul class="navbar-nav ms-auto mb-2 mb-sm-0">
                    <li class="nav-item">
                    <div class="p-3 d-flex">
                        <img src="./assets/img/portfolio.gif" style="width:40px;height:40px"/>
                        <a class="nav-link active" aria-current="page"  href="index.php">Ir al PortFolio</a>
                    </div>  
                    </li>

                    <li class="nav-item">
                        <div class="p-3 d-flex">
                            <img src="./assets/img/folder-proyectos.gif" style="width:40px;height:40px"/>
                            <a class="nav-link active" aria-current="page"  href="index_admin.php">Ver proyectos</a>
                        </div>  
                    </li>

                    <li class="nav-item">
                        <div class="p-3 d-flex">
                            <img src="./assets/img/abm.gif" style="width:55px;height:55px"/>
                            <a class="nav-link active" aria-current="page"  href="galeria.php">ABM</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <div class="p-3 d-flex">
                            <img src="./assets/img/exit.gif" style="width:50px;height:50px"/>
                            <a class="nav-link active" href="cerrar.php">Cerrar Sesión de User: <span><?php echo $_SESSION['usuario']; ?></span>  </a> 
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</footer>


<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="envio.js"></script>
</body>
</html>
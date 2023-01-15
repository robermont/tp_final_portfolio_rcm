<?php ob_start(); ?>
<?php session_start();
    #validar datos
    if ($_POST){
      #conexion a la base
      #mail
      #contraseña
      #es_admin s o n 
      /*
      select mail, pass
      from usuarios where
      es_admin = 'S';*/
      /* USUARIOS["mail"] */
        if( ($_POST['email']=="administrador") && ($_POST['pass']=='cac') ){
          $_SESSION['usuario']="Admin";
          $_SESSION['logueado']='S';
          #redirecciono porque ingreso ok 
          header("location:index_admin.php");
          die();
         // exit;
        }
        else{
           echo '<script> alert("Usuario y/o Contraseña incorrecta");</script>';
           header("location:index.php");
          
           die();
        }
    }
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
    <link href="./assets/img/acceso.png" rel="icon">

    <title>Acceso Portfolio</title>
</head>

<body>
    <div class="contenedor">
        <div class="login">
                <div class="row bgCont">
                    <div class="contSup">
                        <img src="./assets/img/crud.png" alt="Crud" loading=lazy/>
                    </div>
                </div>

                <div class="contInf text-center text-white bgCont d-flex flex-column mb-3">
                    <h2>Acceso PortFolio</h2>
                    <form action="login.php" method="post">
                        <div class="formLog">
                            <img src="./assets/img/user.gif" alt="Gif user" loading=lazy width="35" height="35"/>
                            <input type="text" name="email" id="email" class="field" placeholder="Usuario" required>
                        </div>
                        <div class="formLog inPass">
                            <img src="./assets/img/pass2.gif" alt="Password user" loading=lazy width="35" height="35"/>
                            <input type="password" name="pass" id="subject" class="field" placeholder="Password" required>
                        </div>
                        <input type="submit" value="Login" class="formBtn">
                    </form>
                </div>
        </div>
    </div>
</body>
</html>


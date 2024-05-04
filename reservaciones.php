<!DOCTYPE html>
<html lang="en">
<header>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservaciones</title>
    <link rel="stylesheet" href="estilosGrande.css">
    <link rel="stylesheet" href="estilosChicos.css">
    <link rel="stylesheet" href="estilosGrande.css">
    
    <img src="https://www.zarla.com/images/zarla-k-1x1-2400x2400-20211119-y8r6jygpdqy7qwr4bhcp.png?crop=1:1,smart&width=250&dpr=2" alt="" width="100" height="100" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f93008f47f.js" crossorigin="anonymous"></script>
</header>
<body>
    <div>
        <ul class="menu">
            <li><a href="index.html">Inicio</a></li>
            <li><a href="historia.html">Historia de corea del sur</a></li>
            <li><a href="atractivos.html">Servicios</a></li>
            <li><a href="testimonios.html">Testimonios de visitantes</a></li>
            <li><a href="reservaciones.php">Reservaciones</a></li>
            <li><a href="choques.html">Choques culturales</a></li>
        </ul>
    </div>

    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST" action="alta.php">
            <h3 class="text-center text-secondary">Registro de personas</h3>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre">
            
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">apellidos</label>
                <input type="text" class="form-control" name="apellidos">
              
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">correo</label>
                <input type="text" class="form-control" name="correo">
              
              </div>
            
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>


          </form>


            <div class="col-8 p-4">
                <table class="table">
                    <thead class="bg-info">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Coreo</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                    
                    
                      <?php
                        include"conexion.php";
                        $conexion=conectarBaseDatos();
                        $sql=$conexion->query("select * from registros");
                        while($datos=$sql->fetch_object()){ 

                          echo "<tr>";
                          echo "<td>".$datos->IDregistros."</td>";
                          echo "<td>".$datos->nombres."</td>";
                          echo "<td>".$datos->apellidos."</td>";
                          echo "<td>".$datos->correo."</td>";
                          
                          echo "<td>
                              <a href='editar.php?id=".$datos->IDregistros."' class='btn btn-small btn-warning'><i class='fa-solid fa-pen-to-square'></i></a>
                              <a href='baja.php?id=".$datos->IDregistros."' class='btn btn-small btn-danger'><i class='fa-solid fa-trash'></i></a>
                              </td>
                          </tr>";
                        }
                        $conexion->close();

                      ?>


                      
                      
                    </tbody>
                  </table>
            </div>

    </div>
    



    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


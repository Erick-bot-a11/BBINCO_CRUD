

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/styles.css">
    <title>Admin Panel - Login</title>
    <!-- Incluir Bootstrap CSS desde CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Incluir Font Awesome para los iconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body style="margin: 20px;">

<h1><center>Sistema de Gestión de Tareas BBINCO</center></h1>

  <h5 class="offcanvas-title" id="sidebarMenuLabel">Opciones BBINCO</h5>

  <button id="crearRegistro" type="submit" class="btn btn-outline-secondary">Crear Registro</button>

  <!-- <button id="actualizarRegistro" type="submit" class="btn btn-outline-primary">Actualizar Registro</button>

 <button type="submit" class="btn btn-outline-success">Ver Registro</button>

  <button type="submit" class="btn btn-outline-danger">Eliminar Registro</button> -->

  <div>
    <form id="formRegistro" style=" margin-top:60px;">
    <h3>Ingresa los campos correspondientes</h3>
        <div class="form-row">

            <div class="col-md-4 mb-3" hidden>
            <label for="validationServer01">id</label>
            <input type="text" class="form-control " id="idbook" placeholder="Ejem: La voz del Toro" >
            </div>


            <div class="col-md-4 mb-3">
            <label for="validationServer01">Título</label>
            <input type="text" class="form-control " id="titulo" placeholder="Ejem: La voz del Toro" >
            </div>

            <div class="col-md-4 mb-3">
            <label for="validationServer02">Descripción</label>
            <input type="text" class="form-control" id="descripcion" placeholder="Libro bonito"  required>
            </div>

            <div class="col-md-4 mb-3">
            <label for="validationServer02">Fecha de Vencimiento</label>
            <input type="date" class="form-control" id="vencimiento"  required>
            </div>

            <div class="col-md-4 mb-3">
            <label for="validationServer02">Completada</label>
            <input type="checkbox" id="completada" name="suscripcion" value="">
            </div>
        </div>
        
        <button id="btnSub" class="btn btn-primary" type="submit">Registrar</button>
        </form>
    </div>
      <table class="table table-hover" style="width: 90%;margin:20px auto;">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Título</th>
      <th scope="col">Descripción</th>
      <th scope="col">Fecha de Vencimiento</th>
      <th scope="col">Completado</th>
      <th scope="col">Opciones</th>
      
    </tr>
  </thead>
  <tbody id="idbody">
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody> 
</table>

    </div>


    

  </div>
</div>


<!-- <button type="submit" class="btn btn-primary">Cerrar sesión</button> -->
    <!-- Incluir Bootstrap JS y dependencias desde CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
     <script src="./src/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
</body>
</html>




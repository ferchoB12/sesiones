<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


    <title>Datos del Estudiante</title>
</head>
<body class="bg-dark d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="container bg-white rounded shadow p-4 col-x1-4 col-lg-6">
        <h2>Registro de Estudiantes</h2>
        <hr>
        <form id="formulario" method="POST" action="/sesiones/inicio">
        

            <div class="mb-3">
                <input type="text"  class="form-control"  id="nombre" name="nombre" placeholder="Ingrese el nombre" required="">
            </div>

            <div class="mb-3">
                <input type="email"  class="form-control"  id="email" name="email" placeholder="Ingrese su correo electronico" required="">   
            </div>

            <div class="mb-3">
                <input type="password"  class="form-control"  id="password" name="password" placeholder="Ingrese password" required="">
            </div>

            <div>
                <input type="submit" name="enviar" values="enviar">  

            </div>
        </form>
    </div>
</body>
</html>

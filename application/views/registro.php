<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

    <title>Registro</title>
</head>
<body>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">ASI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="registro">Registro <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="buscarConferencista">Conferencistas <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="buscarCongresista">Congresistas <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="buscarCortesia">Cortesias <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

<div class="container h-100">
<br>
    <div class="row align-items-center justify-items-center">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 align-self-center bg-light">
            <form action="http://localhost/asi/index.php/registro/registrar" method="post">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input id="nombre" class="form-control" type="text" name="nombre">
                </div>
                <div class="form-group">
                    <label for="institucion">Empresa/Institucion</label>
                    <input id="institucion" class="form-control" type="text" name="institucion">
                </div>
                <div class="form-group">
                    <label for="correo">correo</label>
                    <input id="correo" class="form-control" type="text" name="correo">
                </div>
                <div class="form-group">
                    <label for="telefono">Telefono1</label>
                    <input id="telefono" class="form-control" type="number" name="telefono">
                </div>
                <div class="form-group">
                    <label for="telefono2">Telefono2</label>
                    <input id="telefono2" class="form-control" type="number" name="telefono2">
                </div>
                <div class="form-group">
                    <label for="conferencista">Es Conferencista?</label>
                    <input type="checkbox" id="conferencista" name="conferencista" data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">

                </div>
                
                <!--Esto es solo si el asistente al evento es un Congresista    -->
                <div class="form-group">
                    <label for="pais">Pais</label>
                    <input id="pais" class="form-control" type="text" name="pais">
                </div>
                <div class="form-group">
                    <label for="tematica">Tematica de Conferencia</label>
                    <input id="tematica" class="form-control" type="text" name="tematica">
                </div>
                <!--                                                           -->
                <div class="row justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary">Registrar</button>    
                </div>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
    
    <script src="./js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

</body>
</html>
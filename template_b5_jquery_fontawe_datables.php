<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <!-- B5 CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- FONTAWESOME CDN -->
    <script src="https://kit.fontawesome.com/3e07f7d7b0.js" crossorigin="anonymous"></script>
    <!-- Material+Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
    <!-- Sweetalert2 -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- DATATABLES CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
</head>

<body>
    <div class="container shadow">
        <div class="row">
            <div class="col-lg 12">
                <h2>Usuario</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg 12">
                <button class="btn btn-success">Nuevo</button>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg 12">
                <table id="tablaUsuario" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- JQUERY CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <!-- B5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- DATATABLES JS -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <script src="mainCrudUsuario.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <script src="public/js/bootstrap.min.js"></script>
    <title> Listado</title>
</head>
<body>
    <h1>Listado de Usuarios</h1>
    <table class="table table-bordered">
        <tr class= "encabezado-tabla">
            <td>Id</td>
            <td>Name</td>
            <td>LastName</td>
            <td>Action</td>
        </tr>
        <?php foreach ($users as $user) { ?>
        <tr>
            <td><?= $user['id']; ?></td>
            <td><?= $user['Name']; ?></td>
            <td><?= $user['lastname']; ?></td>
            <td><a href="app/views/editar.php?id=<?= $user['id']; ?>" class="btn btn-warning">Editar</a> |
             <a href="app/views/eliminar.php?id=<?= $user['id']; ?>" class="btn btn-danger">Eliminar</a></td>
        </tr>
    <?php } ?>
    </table>
    <a href="app/views/agregar.php" 
    class="btn btn-success" tabindex="-1" role="button" 
    aria-disabled="true">Nuevo +</a>
</body>
</html>
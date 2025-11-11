<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="/app/views/estilos/css/bootstrap.min.css">
    <link rel="stylesheet" href="/app/views/estilos/css/estilos.css">
    <title> Listado</title>
</head>
<body>
    <h1>Listado de Usuarios</h1>
    <a href="/../crud-senati-mvc/app/views/agregar.php" 
    class="btn btn-primary" tabindex="-1" role="button" 
    aria-disabled="true">Nuevo +</a>
    <table class="table table-striped">
        <tr>
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
            <td>Editar | Eliminar</td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>
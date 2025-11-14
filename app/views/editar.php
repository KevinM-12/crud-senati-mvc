<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/estilos.css">
    <script src="../../public/js/bootstrap.min.js"></script>
    <title>.: Editar :.</title>
</head>
<body>
    <div class="form-page">
    <h1>Editar Usuario</h1>

    <form method="POST" action="update.php">
        <div class="mb-3">
            <label for="inputID" class="form-label">Id</label>
            <input type="text" class="form-control" id="inputID" name="id" value="<?php echo $_GET['id']; ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="inputName" class="form-label">Name</label>
            <input type="text" class="form-control" id="inputName" name="Name">
        </div>
        <div class="mb-3">
            <label for="inputLastName" class="form-label">LastName</label>
            <input type="text" class="form-control" id="inputLastName" name="lastname">
        </div>
        <button type="submit" class="btn btn-usuarios">Submit</button>
    </form>
    </div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include __DIR__ . '/../../includes/bootstrap.php';
    ?>
    <title>.: Editar :.</title>
</head>
<body>
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
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>


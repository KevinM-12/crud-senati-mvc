<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.: Agregar :.</title>
</head>
<body>
    <h1>Nuevo Usuario</h1>

    <form method="post">
        <div class="mb-3">
            <label for="inputID" class="form-label">Id</label>
            <input type="text" class="form-control" id="inputID">
        </div>
        <div class="mb-3">
            <label for="inputName" class="form-label">Name</label>
            <input type="text" class="form-control" id="inputName">
        </div>
        <div class="mb-3">
            <label for="inputLastName" class="form-label">LastName</label>
            <input type="text" class="form-control" id="inputLastName">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>
</html>
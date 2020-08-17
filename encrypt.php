<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encriptar mensaje</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">
        Encriptar mensaje
    </h1>
    <form action="/encryptionRequest.php" method="POST" class="pt-5">

        <div id="app" class="row justify-content-center">
            <div class="col-6">
                <label for="encryption_key">Llave</label>
                <textarea class="form-control" name="encryption_key" required></textarea>                
                <label class="mt-5" for="encryption_key">Mensaje</label>
                <textarea class="form-control" name="message" id="" required></textarea>
                <button type="submit" class="btn btn-success mt-2 float-right">Encriptar</button>
            </div>
        </div>
    </form>
</body>

</html>
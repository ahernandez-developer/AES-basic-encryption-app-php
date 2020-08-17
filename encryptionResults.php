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
        Mensaje encriptado
    </h1>
    <form action="{{url('decrypt')}}" method="POST" class="pt-5">
        @csrf
        <div id="app" class="row justify-content-center">
            <div class="col-6">
                <label for="encryption_key">Llave de encriptación utilizada</label>
                <textarea class="form-control" name="encryption_key" required>{{$key}}</textarea>
                <label class="mt-5" for="encryption_key">Mensaje encriptado</label>
                <textarea class="form-control" name="message" id="" required> {{$encryptedMessage}}</textarea>
                <button type="submit" class="btn btn-success mt-2 float-right">Desencriptar mensaje</button>
            </div>
        </div>
    </form>
</body>

</html>
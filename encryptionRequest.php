<?php include 'AES.php';
$inputText = $_POST["message"];
$inputKey = $_POST["encryption_key"];
$blockSize = 256;
$aes = new AES($inputText, $inputKey, $blockSize);
$enc = $aes->encrypt();

?>
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

    <div id="app" class="row justify-content-center">
        <div class="col-6">
            <label for="encryption_key">Llave de encriptación utilizada</label>
            <textarea class="form-control" name="encryption_key" required> <?php echo $inputKey ?></textarea>
            <label class="mt-5" for="encryption_key">Mensaje encriptado</label>
            <textarea class="form-control" name="message" id="" required> <?php echo $enc ?> </textarea>
            <div class="row justify-content-center">
                <a href="/" class="btn btn-success mt-2 ">Home</a>
            </div>
        </div>
    </div>

</body>

</html>
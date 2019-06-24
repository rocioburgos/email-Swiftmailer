<!DOCTYPE html>
<html lang="en">
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Swiftmailer</title>
</head>
<body>
<?php session_start();?>
    <div class='container'>
    <h1>Send Email</h1>
        <div>
            <?php if(isset($_SESSION['exito'])): ?>
                <div class="alert alert-success" role="alert"><strong>Mensaje enviado</strong>. Su mensaje fue enviado con exito</div>
            <?php elseif(isset($_SESSION['error'])): ?>
                <div class="alert alert-danger" role="alert"><strong>No se pudo enviar el mensaje</strong>. Hubo un problema al enviar su mensaje</div>
            <?php endif;?>
        </div>
        
        <?php session_destroy();?>

        <form action="Email.php" method='post' class=''>
            <div class="form-group">
                <label for="name" >Nombre</label>
                <input type="text" name='name' class="form-control" placeholder="Ingrese su nombre" aria-describedby="basic-addon1">
            </div>
            <div class="form-group">
                <label for="asunto">Asunto</label>
                <input type="text" name='asunto' class="form-control" placeholder="Ingrese el asunto" aria-describedby="basic-addon1">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Ingrese su email" aria-describedby="basic-addon1">
            </div>

            <div class="form-group">
                <label for="msj">Mensaje</label>
                <textarea name="msj" id="" cols="30" rows="10" class="form-control" placeholder="Ingrese el mensaje" aria-describedby="basic-addon1"></textarea>
            </div>

            <div class='form-group'>
                <button type='submit' class='btn btn-success btn-lg col-md-10 col-md-push-1 '>Enviar</button>
            </div>
        </form>

    </div>
</body>
</html>
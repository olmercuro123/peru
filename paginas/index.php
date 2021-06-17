<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enviar</title>
    <link rel="stylesheet" type="text/css" href="../css/contacto.css">
</head>


<body>
   
<?php 
$myemail = 'olmertkm1@gmail.com';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>
 <center>
        <h1> CONTACTO</h1>
        <form action="enviarp.php">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="Email" placeholder="Email">
            <br>
            <textarea name="text" id="" cols="30" rows="10" name="Mensaje" placeholder="MENSAJE"></textarea>
            <br>
            <input type="text" name="Submit" placeholder="Enviar">
        </form>
    </center>
</body>

</html>
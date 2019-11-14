<?php
//Que esté vacío el campo de seguridad y el mensaje diga algo
if(isset($_POST) & !empty($_POST)){

    // Guardar los datos recibidos en variables:
    $nombrehome = $_POST['nombrehome'];
    $correohome = $_POST['correohome'];
    $telefonohome = $_POST['telefonohome'];
    $observacioneshome = $_POST['observacioneshome'];

    $dest = "delta@seguridadprivadadelta.com.mx"; 
    
    //$headers = "From: $nombre <$email>\r\n";  
    $headers = "From: <delta@seguridadprivadadelta.com.mx>\r\n" ;

    $headers .= "X-Mailer: PHP5\n";
    $headers .= 'MIME-Version: 1.0' . "\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
     
    $asunto .= "Contacto - Delta";
    $cuerpo .= "<strong>Nombre:</strong> ".$nombrehome."<br>";
    $cuerpo .= "<strong>Email:</strong> ".$correohome."<br>";
    $cuerpo .= "<strong>Tel:</strong> ".$telefonohome."<br>";
    $cuerpo .= "<strong>Comentarios:</strong> ".$observacioneshome."<br>";
     
    if($nombrehome != '' && $correohome != '' && $telefonohome != ''){
        mail($dest,$asunto,$cuerpo,$headers); //ENVIAR!
    }
}
?>
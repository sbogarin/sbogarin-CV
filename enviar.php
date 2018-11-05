<?php
  $destino="sbogarin@sbgproyectosweb.com";
  $nombre =$_POST["name"];
  $correo = $_POST["e-mail"];
  $telefono =$_POST["phone"];
  $mensaje = $_POST["message"];
  
  $contenido = "Name: " . $nombre ."\nE-mail: " . $correo  ."\nPhone: " . $telefono .  "\nMessage: " . $mensaje;
	mail($destino,"Contacto",$contenido);
    echo "<script>
                alert('Su mensaje se ha enviado correctamente');
                window.location= 'index.html'
    </script>"	
//	header("location:index.html");
?>
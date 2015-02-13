
 <?php
	/*  -.-!! */
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$sunto = $_POST['asunto'];
    $comentario = $_POST['comentario'];
	echo "Su mensaje se ha enviado satisfactoriamente!";
	$receptor="vcaballeroc@usmp.pe";
	$email_RS = "RS@usmp.pe";
	
		$asunto = "Consulta Responsabilidad Social[Web]";
		$mensaje  = "Nombres : $nombre \n";
		$mensaje .= "Asunto: $sunto \n";
		$mensaje .= "Email : $correo \n";
		$mensaje .= "Consulta : $comentario \n";
		
$direccion="http://www.usmp.edu.pe/responsabilidadSocial/";
	$rep =	mail($receptor,$asunto, $mensaje, "From:$correo");
	
	if($rep == 'true'){
	    //$nombre = ucfirst($nombre);
		$mensaje = 
		"Estimado Sr. /Sra./Srta. le agradecemos su consulta remitida a nosotros el día " . date('d/m/Y', time()).". Hemos registrado debidamente el contenido de su consulta y se respondera a la brevedad. Saludos cordiales, USMP -  Responsabilidad Social."."\n";
		
		mail($correo,'Responsabilidad Social',$mensaje,"From:$email_RS");
		echo 'Mensaje enviado correctamente';
		
		header('Location:http://www.usmp.edu.pe/responsabilidadSocial/');
	}else{
		header('Location:http://www.usmp.edu.pe/responsabilidadSocial/');
	}	
	
	echo "<script>
		location.href='$direccion';
		</script>	";
		
?>
    

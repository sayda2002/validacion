<?php 
$documento = htmlentities($_POST['dni']);
echo $documento;
if ($documento==null) {
	header('localtion:alerta.php?tipo=error');
}else{
	header('localtion:alerta.php?tipo=success');
}
 ?>
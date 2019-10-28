<?php 
$asunto = $_REQUEST['asunto'];
$comentario = $_REQUEST['comentario'];
?>

<form name='comentariorelleno' method="GET">
		Tema <br>
		<textarea name="asunto" rows="1" cols="50"><?php echo $asunto; ?></textarea>
		<br>Comentario<br>
		<textarea name="comentario" rows="4" cols="50" maxlength="300"><?php echo $comentario; ?></textarea><br>
		<input type="submit" name="orden" value="Nueva opinión">
		<input type="submit" name="orden" value="Detalles">
		<input type="submit" name="orden" value="Terminar">
	</form>
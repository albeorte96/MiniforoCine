<?php 
function numPalabras ($comentario){
	$espacios = 0;
	for($i=0;$i<strlen($comentario);$i++){
		if($comentario[$i] == ' '){
			$espacios++;
		}
	}
	$palabras = $espacios + 1;
	return $palabras;
}

function longitud ($comentario){
	$longitud = strlen($comentario);
	return $longitud;
}

function letraMasRepetida ($comentario){
	$max = 0;
	$letra = null;
	$repetido = null;
	for($i=0;$i<strlen($comentario);$i++){
		$letra = $comentario[$i];
		if($letra != ' ' && substr_count($comentario, $letra) > $max){
			$max = substr_count($comentario, $letra);
			$repetido = $letra;
		}
	}
	return $repetido;
}

function palabraMasRepetida ($comentario){
    $max = 0;
    $palabra = null;
    $repetido = null;
    for($i=0;$i<strlen($comentario);$i++){
        if($comentario[$i] != ' ' && $comentario[$i] != ','){
            $palabra = $palabra.$comentario[$i];
        }else{
            if(substr_count($comentario, $palabra) > $max){
                $max = substr_count($comentario, $palabra);
                $repetido = $palabra;
            }
            $palabra = null;
        }
    }
    return $repetido;
}

echo "<br><b>Detalles: </b>";
echo "<table>";
echo "<tr><td>Longitud: </td>";
echo "<td>".longitud($_REQUEST['comentario']),"</td></tr>";
echo "<tr><td>Número de palabras: </td>";
echo "<td>".numPalabras($_REQUEST['comentario']),"</td></tr>";
echo "<tr><td>Letra más repetida: </td>";
echo "<td>".letraMasRepetida($_REQUEST['comentario']),"</td></tr>";
echo "<tr><td>Palabra más repetida: </td>";
echo "<td>".palabraMasRepetida($_REQUEST['comentario']),"</td></tr>";
echo "</table>";

?>

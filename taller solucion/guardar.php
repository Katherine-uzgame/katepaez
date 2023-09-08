<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $cancion = $_POST['cancion'];
    $artista = $_POST['artista'];

    
    $archivo = 'datos.csv';
    $linea = "$nombre,$cancion,$artista\n";
    file_put_contents($archivo, $linea, FILE_APPEND);
}


header('Location: index.html');
?>

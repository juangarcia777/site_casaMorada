<?php

$arquivo= $_POST['doc'];

header('Content-Description: File Transfer');
header('Content-Disposition: attachment; filename="'.$arquivo.'"');
header('Content-Type: application/octet-stream');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($arquivo));
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Expires: 0');

// Envia o arquivo para o cliente
readfile('documentos/'.$arquivo);

 ?>

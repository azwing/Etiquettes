<?php
$file_path = '/dev/shm/sortie.pdf';
$download_name = 'etiquettes.pdf'; // Customize download filename

if (!file_exists($file_path)) {
    die('File not found.');
}

header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . $download_name . '"');
header('Content-Length: ' . filesize($file_path));
readfile($file_path);
exit;
?>

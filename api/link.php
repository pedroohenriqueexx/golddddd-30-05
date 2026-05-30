<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Cache-Control: no-store, no-cache, must-revalidate');

// ============================================================
// COLOQUE O LINK DE DESTINO AQUI
$url = 'https://SEU-LINK-AQUI.com';
// ============================================================

echo json_encode(['u' => $url]);

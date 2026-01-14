<?php

header('Access-Control-Allow-Origin: https://arturo-lang.io');
header('Content-Type: application/json');

// Get the real path that the 'stable' symlink points to
$stablePath = '/usr/local/www/arturo/main/versions/stable';
$realPath = realpath($stablePath);

if ($realPath === false) {
    // symlink doesn't exist or can't be resolved
    http_response_code(500);
    echo json_encode(['error' => 'Could not resolve stable version']);
    exit;
}

// Extract just the version number from the path
$version = basename($realPath);

// Return as JSON
header('Content-Type: application/json');
echo json_encode(['version' => $version]);
?>
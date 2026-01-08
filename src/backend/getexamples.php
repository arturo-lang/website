<?php
header('Access-Control-Allow-Origin: https://arturo-lang.io');
header('Content-Type: application/json');

$examples_dir = __DIR__ . '/../examples/src/rosetta';
$files = glob($examples_dir . '/*.art');

$examples = array_map(function($file) {
    return basename($file, '.art');
}, $files);

sort($examples);

echo json_encode($examples);
?>
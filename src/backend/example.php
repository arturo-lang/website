<?php
header('Access-Control-Allow-Origin: https://arturo-lang.io');
header('Content-Type: application/json');

$rest_json = file_get_contents("php://input");
$_POST = json_decode($rest_json, true);

// Validate JSON decode
if (!is_array($_POST)) {
    $_POST = [];
}

$example_name = $_POST['i'] ?? '';

if (empty($example_name)) {
    echo json_encode(["text" => "# No example name provided"]);
    exit;
}

// SECURITY: Use basename to prevent path traversal
// This removes any directory components (../, /, etc.)
$example_name = basename($example_name);

// Additional safety: ensure we're not trying to traverse up
if ($example_name === '.' || $example_name === '..' || empty($example_name)) {
    echo json_encode(["text" => "# Invalid example name"]);
    exit;
}

// Construct the file path
$example_file = __DIR__ . '/../examples/src/rosetta/' . $example_name . '.art';

// Verify the resolved path is within our examples directory
$examples_dir = realpath(__DIR__ . '/../examples/src/rosetta');
$resolved_path = realpath(dirname($example_file));

if ($resolved_path === false || strpos($resolved_path, $examples_dir) !== 0) {
    echo json_encode(["text" => "# Invalid example path"]);
    exit;
}

$txt = "";
if (file_exists($example_file)) {
    $txt = file_get_contents($example_file);
} else {
    $txt = "# Example not found: " . htmlspecialchars(urldecode($example_name));
}

echo json_encode(["text" => $txt]);
?>
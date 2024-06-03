<?php
// Define a secret token for verification
$secret_token = "junaidbhattiToken1109";

// Verify the request
$headers = getallheaders();
if (!isset($headers['X-Hub-Signature']) || !isset($_POST['payload'])) {
    http_response_code(400);
    exit("Invalid request");
}

$payload = $_POST['payload'];
$expected_signature = 'sha1=' . hash_hmac('sha1', $payload, $secret_token);
$received_signature = $headers['X-Hub-Signature'];
if (!hash_equals($expected_signature, $received_signature)) {
    http_response_code(403);
    exit("Invalid signature");
}

// Execute git pull to fetch the latest changes from the repository
$output = shell_exec('git pull');
echo $output;

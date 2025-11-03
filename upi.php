<?php
/**
 * Razorpay UPI (VPA) Validation - CLI Tool
 * Usage: php validate_upi.php <key_id> <key_secret> <vpa>
 */

if ($argc < 4) {
    echo "Usage: php " . $argv[0] . " <key_id> <key_secret> <vpa>\n";
    exit(1);
}

$key_id     = 'rzp_test_Rb7s9D1IOUHnPu';
$key_secret = 'TPdmtCgm1eeQGHogvV8tFDBM';
$vpa        = 'adminrajeev@ybl';

$url = 'https://api.razorpay.com/v1/payments/validate/vpa';
$payload = json_encode(['vpa' => $vpa]);

$ch = curl_init($url);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERPWD => $key_id . ':' . $key_secret,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $payload,
    CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
    CURLOPT_TIMEOUT => 20,
]);

$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$error = curl_error($ch);
curl_close($ch);

if ($error) {
    echo "❌ cURL error: $error\n";
    exit(1);
}

echo "HTTP Status: $http_code\n";
echo "Raw Response: $response\n\n";

$data = json_decode($response, true);

if (json_last_error() !== JSON_ERROR_NONE) {
    echo "❌ Failed to parse JSON: " . json_last_error_msg() . "\n";
    exit(1);
}

if (isset($data['success'])) {
    if ($data['success'] === true) {
        echo "✅ VPA is valid!\n";
        echo "VPA: " . $data['vpa'] . "\n";
        if (!empty($data['customer_name'])) {
            echo "Account Holder: " . $data['customer_name'] . "\n";
        }
    } else {
        echo "❌ Invalid or non-existent VPA.\n";
        echo "VPA: " . $data['vpa'] . "\n";
    }
} elseif (isset($data['error'])) {
    echo "⚠️ API Error: " . ($data['error']['description'] ?? 'Unknown error') . "\n";
} else {
    echo "⚠️ Unexpected response format.\n";
}

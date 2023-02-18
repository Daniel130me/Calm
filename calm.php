<?php

$api_key = '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';
$model = 'davinci';
$url = 'https://api.openai.com/v1/completions';

$data = [
    'model' => $model,
    'prompt' => 'Hello, my name is John and I',
    'temperature' => 0.7,
    'max_tokens' => 50,
    'top_p' => 1,
    'frequency_penalty' => 0,
    'presence_penalty' => 0,
];

$data_string = json_encode($data);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $api_key,
]);

$response = curl_exec($ch);

if (curl_error($ch)) {
    echo 'Error: ' . curl_error($ch);
} else {
    echo $response;
}

curl_close($ch);

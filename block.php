$apiKey = 'YOUR_API_KEY';
$wallets = [];

for ($i = 0; $i < 10; $i++) {
    $label = "wallet_label_$i";
    $postData = http_build_query([
        'password' => 'your_wallet_password',
        'api_code' => $apiKey,
        'label' => $label,
    ]);

    $ch = curl_init('https://blockchain.info/api/v2/create_wallet');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    $wallets[] = json_decode($response, true);
}

print_r($wallets);

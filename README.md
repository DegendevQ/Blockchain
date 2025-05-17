
# Blockchain

Auto-create wallets using Blockchain.info API with PHP

---

## Overview

This project provides a simple PHP script to automatically create Bitcoin wallets in bulk using the Blockchain.info Wallet API. It demonstrates how to interact with the Blockchain.info service to programmatically generate wallet addresses and manage them.

---

## Features

- Bulk creation of Bitcoin wallets.
- Uses Blockchain.info Wallet API.
- Simple PHP implementation.
- Easy to customize wallet labels and passwords.

---

## Requirements

- PHP 7.0 or higher
- cURL enabled in PHP
- Blockchain.info API key (get it from [Blockchain.info](https://www.blockchain.com/api))

---

## Installation

1. Clone the repository:

```
git clone https://github.com/Julianhornero/Blockchain.git
cd Blockchain
```

2. Ensure PHP and cURL are installed on your system.

---

## Usage

Edit the `block.php` file to add your Blockchain.info API key, wallet password, and customize the number of wallets to create.

Example snippet to create wallets in bulk:

```
 $password,
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
```

Run the script:

```
php block.php
```

---

## Notes

- This script creates Bitcoin wallets using Blockchain.info's API.
- Keep your API key and wallet passwords secure.
- This project is for educational and development purposes.
- For production use, consider additional security measures and error handling.

---

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---


<?php

use CodeIgniter\Controller;
use CodeIgniter\Encryption\Encryption;

class Enecrypt extends Controller
{
    public function encryptUrl()
    {
        $encryption = \Config\Services::encryption();

        // Data yang ingin dienkripsi, misalnya URL login
        $url = "http://localhost:8080/login";

        // Enkripsi data
        $encryptedUrl = $encryption->encrypt($url);

        // Outputkan hasil enkripsi
        echo "Encrypted URL: " . base64_encode($encryptedUrl);
    }

    public function decryptUrl($encryptedUrl)
    {
        $encryption = \Config\Services::encryption();

        // Decode data yang telah dienkripsi
        $decodedUrl = base64_decode($encryptedUrl);

        // Dekripsi data
        $decryptedUrl = $encryption->decrypt($decodedUrl);

        // Outputkan hasil dekripsi
        echo "Decrypted URL: " . $decryptedUrl;
    }
}
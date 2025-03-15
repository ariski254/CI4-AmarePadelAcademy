<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Halaman Tidak Ditemukan</title>
    <style>
    /* Global Styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Arial', sans-serif;
        background-color: #f0f4f8;
        color: #333;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        padding: 0 20px;
    }

    .container {
        max-width: 600px;
        width: 100%;
        text-align: center;
    }

    h1 {
        font-size: 150px;
        color: black;
        margin-bottom: 20px;
    }

    h2 {
        font-size: 24px;
        color: #555;
        margin-bottom: 15px;
    }

    p {
        font-size: 18px;
        color: #666;
        margin-bottom: 20px;
    }

    a {
        font-size: 18px;
        color: #3498db;
        text-decoration: none;
        padding: 10px 20px;
        border: 2px solid #3498db;
        border-radius: 30px;
        transition: all 0.3s ease;
    }

    a:hover {
        background-color: #3498db;
        color: white;
        border-color: #2980b9;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        h1 {
            font-size: 120px;
        }

        h2 {
            font-size: 20px;
        }

        p {
            font-size: 16px;
        }

        a {
            font-size: 16px;
            padding: 8px 16px;
        }
    }

    @media (max-width: 480px) {
        h1 {
            font-size: 100px;
        }

        h2 {
            font-size: 18px;
        }

        p {
            font-size: 14px;
        }

        a {
            font-size: 14px;
            padding: 8px 15px;
        }
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>404</h1>
        <h2>Halaman Tidak Ditemukan</h2>
        <p>Maaf, halaman yang Anda cari tidak dapat ditemukan. Mungkin URL yang Anda masukkan salah.</p>
        <p><a href="<?= base_url(); ?>">Kembali ke Halaman Utama</a></p>
    </div>
</body>

</html>
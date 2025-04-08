<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semua Kegiatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .body-bg {
        background-color: #f8f9fa;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .header-title {
        font-weight: 700;
        color: #0d6efd;
    }

    .kegiatan-section {
        padding-top: 3rem;
        padding-bottom: 3rem;
    }

    .kegiatan-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        background-color: #fff;
        transition: transform 0.2s ease-in-out;
        padding: 2rem;
        margin-bottom: 3rem;
    }

    .kegiatan-card:hover {
        transform: translateY(-5px);
    }

    .kegiatan-title {
        font-weight: 600;
        font-size: 1.5rem;
        color: #333;
    }

    .kegiatan-date {
        font-size: 0.9rem;
        color: #6c757d;
    }

    .kegiatan-description {
        margin-top: 10px;
        color: #555;
    }

    .kegiatan-images img {
        height: 180px;
        object-fit: cover;
        border-radius: 10px;
        width: 100%;
        margin-bottom: 15px;
        transition: all 0.3s;
    }

    .kegiatan-images img:hover {
        transform: scale(1.03);
    }

    .btn-back {
        margin-bottom: 30px;
    }

    .all_portfolio {
        background-color: #f8f9fa;
    }

    @media (max-width: 576px) {
        .kegiatan-title {
            font-size: 1.25rem;
        }

        .kegiatan-images img {
            height: 150px;
        }
    }
    </style>
</head>

<body class="body-bg">
    <section class="all_portfolio kegiatan-section container">

        <!-- Tombol Kembali -->
        <div class="text-start">
            <a href="<?= base_url('/') ?>" class="btn btn-outline-primary btn-back">
                ← Kembali ke Beranda
            </a>
        </div>

        <h1 class="mb-5 text-center header-title">Daftar Kegiatan</h1>

        <?php if (!empty($kegiatan)): ?>
        <?php foreach ($kegiatan as $item): ?>
        <div class="kegiatan-card">
            <div class="row">
                <div class="col-12">
                    <h2 class="kegiatan-title"><?= esc($item->title) ?></h2>
                    <p class="kegiatan-date"><?= esc($item->date) ?></p>
                    <p class="kegiatan-description"><?= esc($item->description) ?></p>
                </div>

                <?php if (!empty($images[$item->id])): ?>
                <div class="kegiatan-images row mt-3">
                    <?php foreach ($images[$item->id] as $img): ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <img src="<?= base_url('assets/imgs/kegiatan/' . $img->image) ?>" class="img-fluid shadow-sm">
                    </div>
                    <?php endforeach ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endforeach; ?>
        <?php else: ?>
        <div class="alert alert-secondary text-center">
            Belum ada kegiatan yang ditambahkan.
        </div>
        <?php endif; ?>
    </section>
</body>

</html>
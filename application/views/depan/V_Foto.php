<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Foto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">
    <h1 style="text-align: center;">Galeri Foto</h1>
    <style>
        /* Tambahkan gaya CSS di sini */
        .container {
            max-width: 1200 px;
            padding: 50px;
            background: linear-gradient(45deg, #B784B7, #A94438, #74E291, #A94438);
            border-radius: 5px;
            background-size: 400% 400%;
            animation: gradientBG 5s linear infinite;
        }

        @keyframes gradientBG {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }


        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }
        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            cursor: pointer; /* Menambahkan cursor pointer */
            margin-bottom: 20px; /* Menambahkan margin antar kartu */
            background: #EE99C2; /* Warna latar belakang kartu */
        }
        .card img {
            max-width: 100%;
            height: auto;
            object-fit: cover;
            vertical-align: middle;
        }

        .card-body {
            padding: 15px;
        }
        .card-title {
            margin-bottom: 10px;
            font-size: 18px;
            font-weight: bold;
        }
        .card-text {
            margin-bottom: 10px;
        }
        .text-muted {
            font-size: 14px;
        }
        .row-cols-1 {
            column-gap: 20px; /* Jarak antar kolom */
            column-count: 3; /* Jumlah kolom */
        }
        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #007bff;
            color: #fff;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            transition: opacity 0.3s ease;
            z-index: 999;
        }
        .back-to-top:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row row-cols-1 g-4" id="gallery">
            <!-- HTML untuk menampilkan galeri foto -->
            <?php foreach($DataFoto as $ReadDS): ?>
            <div class="card" onclick="showPhotoDetails('<?= $ReadDS->UserID ?>', '<?= $ReadDS->TanggalUnggah ?>', '<?= $ReadDS->TanggalUnggah ?>')">
                <img src="<?= base_url('/uploads/' . $ReadDS->LokasiFile) ?>" class="card-img-top" alt="<?= $ReadDS->JudulFoto ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $ReadDS->JudulFoto ?></h5>
                    <p class="card-text"><small class="text-muted">Tanggal Unggah: <?= $ReadDS->TanggalUnggah ?></small></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div id="preloader"></div>
    <a href="<?= site_url('Home') ?>" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-left"></i>
    </a>

    <script>
        function showPhotoDetails(UserID, TanggalUnggah) {
            alert("UserID: " + UserID + "\nTanggal Unggah: " + TanggalUnggah);
            // Anda dapat menyesuaikan cara menampilkan data foto (misalnya, dengan menggunakan modals)
        }
    </script>
</body>
</html>

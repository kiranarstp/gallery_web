<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        .card {
        background-color: #EE99C2;
    }
    </style>
</head>
<br><br><br><br><br>
<body>
<div class="container-fluid mt-4">
    <h2 class="text-center">Data Album</h2>
    <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#exampleModal">
        <i class="bi bi-plus-circle"></i> 
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Album</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="createForm" action="<?php echo site_url('Welcome/addDataAlbum'); ?>" method="post">
                        <label for="AlbumID" class="form-label" hidden>ID Album</label>
                        <input type="hidden" class="form-control" id="AlbumID" name="AlbumID"
                            placeholder="Masukkan ID Album">
                        <div class="mb-3">
                            <label for="NamaAlbum" class="form-label">Nama Album</label>
                            <input type="text" class="form-control" id="NamaAlbum" name="NamaAlbum"
                                placeholder="Masukkan Nama Album" required>
                        </div>
                        <div class="mb-3">
                            <label for="Deskripsi" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" id="Deskripsi" name="Deskripsi"
                                placeholder="Masukkan Deskripsi" required>
                        </div>
                        <div class="mb-3">
                            <label for="TanggalDibuat" class="form-label">Tanggal Dibuat</label>
                            <input type="date" class="form-control" id="TanggalDibuat" name="TanggalDibuat"
                                placeholder="Masukkan Tanggal Dibuat" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                    <div id="pesan" class="alert" style="display: none;"></div>
                </div>
            </div>
        </div>
    </div>


    <!-- Tampilan card -->
    <div class="row">
        <?php
        if (!empty($DataAlbum)) {
            foreach ($DataAlbum as $ReadDS) {
        ?>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $ReadDS->NamaAlbum; ?></h5>
                    <p class="card-text"><?php echo $ReadDS->Deskripsi; ?></p>
                    <p class="card-text"><strong>Tanggal Dibuat:</strong> <?php echo $ReadDS->TanggalDibuat; ?></p>
                    <p class="card-text"><strong>ID User:</strong> <?php echo $ReadDS->UserID; ?></p>
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModal_<?php echo $ReadDS->AlbumID; ?>"><i class="fa-solid fa-pen-to-square"></i>
                    </button>
                    <a href="<?php echo site_url('Welcome/deleteDataAlbum/' . $ReadDS->AlbumID) ?>"
                        class="btn btn-danger" onclick="return confirmDelete(<?php echo $ReadDS->AlbumID; ?>)"><i class="fa-solid fa-trash"></i>
                    </a>
                    <a href="<?php echo site_url('Welcome/albumDetail/' . $ReadDS->AlbumID) ?>"
                        class="btn btn-warning"><i class="fa-solid fa-eye"></i>
                    </a>
                    <div class="modal fade" id="exampleModal_<?php echo $ReadDS->AlbumID; ?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <!-- Konten modal -->
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data Album</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= site_url('Welcome/updateDataAlbum/' . $ReadDS->AlbumID) ?>"
                                            method="post">
                                            <label for="AlbumID" class="form-label" hidden>ID Album</label>
                                            <input type="hidden" class="form-control" id="AlbumID" name="AlbumID"
                                                value="<?= $ReadDS->AlbumID; ?>" readonly>
                                            <div class="mb-3">
                                                <label for="NamaAlbum" class="form-label">Nama Album</label>
                                                <input type="text" class="form-control" id="NamaAlbum" name="NamaAlbum"
                                                    value="<?= $ReadDS->NamaAlbum; ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="Deskripsi" class="form-label">Deskripsi</label>
                                                <input type="text" class="form-control" id="Deskripsi" name="Deskripsi"
                                                    value="<?= $ReadDS->Deskripsi; ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="TanggalDibuat" class="form-label">Tanggal Dibuat</label>
                                                <input type="date" class="form-control" id="TanggalDibuat"
                                                    name="TanggalDibuat" value="<?= $ReadDS->TanggalDibuat; ?>"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="UserID" class="form-label">ID User</label>
                                                <input type="text" class="form-control" id="UserID" name="UserID"
                                                    value="<?= $ReadDS->UserID; ?>" required>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </form>
                                        <!-- Akhir formulir -->
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir konten modal -->

                        </div>
                        <!-- Akhir Modal Edit -->
                </div>
            </div>
        </div>
        <?php
            }
        }
        ?>
    </div>
    <!-- Akhir tampilan card -->
</div>
</body>
</html>

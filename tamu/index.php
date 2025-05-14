<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <title>GuestBook - Aplikasi Buku Tamu</title>
</head>

<body>
    <header class="mx-auto" style="max-width: 1200px;">
        <nav class="navbar navbar-expand-lg px-4 rounded-bottom" style="background-color: var(--bs-indigo);">
            <a class="navbar-brand" href="index.php">
                <h2 class="d-flex align-items-center gap-2 fs-3 text-light">
                    <i class="bi bi-person-vcard"></i>
                    GuestBook
                </h2>
            </a>
        </nav>
    </header>

    <main class="mx-auto" style="max-width: 1200px;">
        <div class="my-3">
            <div class="row">
                <div class="col-md-2">
                    <div class="card card-custom">
                        <div class="card-body">
                            <div class="mb-3">
                                <a href="../" class="text-decoration-none btn-indigo w-100 rounded-3">
                                    <i class="bi bi-speedometer2"></i>
                                    Dashboard
                                </a>
                            </div>
                            <div>
                                <a href="index.php" class="text-decoration-none btn-indigo active w-100 text-dark rounded-3">
                                    <i class="bi bi-person-fill"></i>
                                    Tamu
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-10">
                    <div class="card card-custom">
                        <div class="card-body d-inline-flex justify-content-between align-items-center">
                            <h3 class="fs-4 fw-bold" style="color:var(--bs-indigo)">Tamu</h3>
                            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalAdd">
                                <i class="bi bi-plus-circle"></i>
                                Tambah Data
                            </button>

                            <div class="modal modal-lg fade" id="modalAdd" tabindex="-1" aria-labelledby="modalAddLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="modalAddLabel">Tambah Data</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="tambah.php" method="post" id="form-submit">
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama..." required>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="instansi" class="form-label">Instansi <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="instansi" name="instansi" placeholder="Masukkan Instansi..." required>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="tujuan" class="form-label">Tujuan <span class="text-danger">*</span></label>
                                                    <textarea name="tujuan" id="tujuan" rows="5" class="form-control" placeholder="Masukkan Tujuan..." required></textarea>
                                                </div>

                                                <div class="text-end">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-success" id="btn-submit">
                                                        <div class="spinner-border text-light d-none" id="spinner-submit" style="width:16px;height:16px;" role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div>
                                                        <span id="text-submit">Simpan</span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-custom mt-3">
                        <div class="card-body">
                            <?php if (isset($_GET['error'])) { ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?= htmlspecialchars($_GET['error']) ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php } ?>
                            <?php
                            include_once 'table.php';
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <footer class="mx-auto" style="max-width: 1200px;">
        <div class="py-3 text-end">
            <p class="text-muted mb-0">&copy;<?= date("Y") ?> GuestBook. All rights reserved.</p>
            <p class="text-muted">Created by <a href="#">Ariel Gema Wardana</a></p>
        </div>
    </footer>

    <script src="../assets/js/app.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>
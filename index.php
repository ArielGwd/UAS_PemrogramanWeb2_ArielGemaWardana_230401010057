<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="icon" href="assets/img/favicon.png" type="image/png">
    <title>GuestBook - Aplikasi Buku Tamu</title>
</head>

<body>
    <header class="mx-auto" style="max-width: 1200px;">
        <nav class="navbar navbar-expand-lg px-4 rounded-bottom" style="background-color: var(--bs-purple);">
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
                <div class="col-md-3">
                    <div class="card card-custom h-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <a href="index.php" class="text-decoration-none btn-indigo active w-100 rounded-3">
                                    <i class="bi bi-speedometer2"></i>
                                    Dashboard
                                </a>
                            </div>
                            <div>
                                <a href="tamu/" class="text-decoration-none btn-indigo w-100 text-dark rounded-3">
                                    <i class="bi bi-person-fill"></i>
                                    Tamu
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="card card-custom h-100">
                        <div class="card-body">
                            <h3 class="fs-4 fw-bold" style="color:var(--bs-purple)">Dashboard</h3>
                            <p class="text-muted">Welcome to the dashboard.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="mx-auto" style="max-width: 1200px;">
        <div class="py-3 text-end">
            <p class="text-muted mb-0">&copy;<?= date("Y") ?> GuestBook. All rights reserved.</p>
            <p class="text-muted">Created by <a target="_blank" href="https://github.com/ArielGwd/UAS_PemrogramanWeb2_ArielGemaWardana_230401010057">Ariel Gema Wardana</a></p>
        </div>
    </footer>


    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
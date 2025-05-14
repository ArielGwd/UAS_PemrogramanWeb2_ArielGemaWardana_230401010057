<table class="table table-striped table-hover mt-3" id="tamuTable">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Instansi</th>
            <th scope="col">Tujuan</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Waktu</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
        include_once '../koneksi.php';

        $nomor = 1;
        $guest_books = $koneksi->query("SELECT * FROM buku_tamu ORDER BY id DESC");
        while ($guest_book = $guest_books->fetch_object()) { ?>
            <tr>
                <th scope="row"><?= $nomor++ ?></th>
                <td><?= $guest_book->nama ?></td>
                <td><?= $guest_book->instansi ?></td>
                <td><?= $guest_book->tujuan ?></td>
                <td><?= date('d M Y', strtotime($guest_book->tanggal)) ?></td>
                <td><?= date('H:i', strtotime($guest_book->waktu)) ?></td>
                <td>
                    <button type="button" class="btn btn-sm btn-indigo-update" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $guest_book->id ?>">
                        <i class="bi bi-pencil-square"></i>
                        <span class="visually-hidden">Edit</span>
                    </button>

                    <div class="modal modal-lg fade" id="modalEdit<?= $guest_book->id ?>" tabindex="-1" aria-labelledby="modalEditLabel<?= $guest_book->id ?>" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="modalEditLabel<?= $guest_book->id ?>">Edit Data</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <?php
                                $guest_book = $koneksi->query("SELECT * FROM buku_tamu WHERE id = '$guest_book->id'")->fetch_object();
                                ?>

                                <div class="modal-body">
                                    <form action="edit.php" method="post" class="form-submit">
                                        <input type="hidden" name="id" value="<?= $guest_book->id ?>">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama..." required value="<?= htmlspecialchars($guest_book->nama) ?>">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="instansi" class="form-label">Instansi <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="instansi" name="instansi" placeholder="Masukkan Instansi..." required value="<?= htmlspecialchars($guest_book->instansi) ?>">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="tujuan" class="form-label">Tujuan <span class="text-danger">*</span></label>
                                            <textarea name="tujuan" id="tujuan" rows="5" class="form-control" placeholder="Masukkan Tujuan..." required><?= htmlspecialchars($guest_book->tujuan) ?></textarea>
                                        </div>

                                        <div class="text-end">
                                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-sm btn-indigo-update d-inline-flex align-items-center gap-1 btn-submit">
                                                <div class="spinner-border text-light spinner-submit d-none" style="width:16px;height:16px;" role="status">
                                                    <span class="visually-hidden">Loading...</span>
                                                </div>
                                                <span class="text-submit">Simpan Perubahan</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- button delete -->
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete<?= $guest_book->id ?>">
                        <i class="bi bi-trash"></i>
                        <span class="visually-hidden">Hapus</span>
                    </button>

                    <div class="modal fade" id="modalDelete<?= $guest_book->id ?>" tabindex="-1" aria-labelledby="modalDeleteLabel<?= $guest_book->id ?>" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="modalDeleteLabel<?= $guest_book->id ?>">Hapus Data</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah Anda yakin ingin menghapus data ini?</p>
                                    <p><strong>Nama:</strong> <?= htmlspecialchars($guest_book->nama) ?></p>
                                    <p><strong>Instansi:</strong> <?= htmlspecialchars($guest_book->instansi) ?></p>
                                    <p><strong>Tujuan:</strong> <?= htmlspecialchars($guest_book->tujuan) ?></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                                    <form action="hapus.php" method="post" class="form-submit">
                                        <input type="hidden" name="id" value="<?= $guest_book->id ?>">
                                        <button type="submit" class="btn btn-danger btn-sm btn-submit">
                                            <div class="spinner-border text-light spinner-submit d-none" style="width:16px;height:16px;" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                            <span class="text-submit">Iya, Hapus</span>
                                        </button>
                                    </form>
                                    <span class="visually-hidden">Hapus</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<table class="table table-striped table-hover mt-3" id="tamuTable">
    <thead>
        <tr>
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
        $guest_books = $koneksi->query("SELECT * FROM buku_tamu ORDER BY id DESC");
        while ($guest_book = $guest_books->fetch_object()) { ?>
            <tr>
                <td><?= $guest_book->nama ?></td>
                <td><?= $guest_book->instansi ?></td>
                <td><?= $guest_book->tujuan ?></td>
                <td><?= date('d M Y', strtotime($guest_book->tanggal)) ?></td>
                <td><?= date('H:i', strtotime($guest_book->waktu)) ?></td>
                <td>
                    <a href="edit.php?id=<?= $guest_book->id ?>" class="btn btn-warning btn-sm">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <a href="hapus.php?id=<?= $guest_book->id ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                        <i class="bi bi-trash"></i>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
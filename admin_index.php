<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<div class="container">

    <h2>Admin Artikel</h2>

    <!-- Tombol -->
    <div class="top-action">

        <a href="<?= base_url('index.php/admin/artikel/add'); ?>" class="btn-add">
            + Tambah Artikel
        </a>

        <a href="<?= base_url('index.php/artikel'); ?>" class="btn-back">
            ← Kembali
        </a>

        <a href="<?= base_url('user/logout'); ?>" class="btn-logout">
            Logout
        </a>

    </div>

    <!-- Form Pencarian -->
    <form method="get" class="form-search">

        <input type="text"
               name="q"
               value="<?= $q; ?>"
               placeholder="Cari judul artikel">

        <button type="submit" class="btn-search">
            Cari
        </button>

    </form>

    <!-- Notifikasi -->
    <?php if (session()->getFlashdata('success')): ?>

        <div class="alert-success">
            <?= session()->getFlashdata('success'); ?>
        </div>

    <?php endif; ?>

    <!-- Tabel -->
    <table class="table">

        <thead>
<tr>
    <th width="50">No</th>
    <th>Judul</th>
    <th width="100">Status</th>
    <th width="180">Aksi</th>
</tr>
</thead>
        <tbody>

        <?php if (!empty($artikel)): ?>

            <?php $no = 1; ?>

            <?php foreach ($artikel as $row): ?>

            <tr>

                <td><?= $no++; ?></td>

                <td><?= esc($row['judul']); ?></td>

                <td>
                    <?= $row['status'] ? 'Aktif' : 'Draft'; ?>
                </td>

                <td>

                    <a href="<?= base_url('index.php/admin/artikel/edit/'.$row['id']); ?>"
                       class="btn-edit">
                        Ubah
                    </a>

                    <a href="<?= base_url('index.php/admin/artikel/delete/'.$row['id']); ?>"
                       class="btn-delete"
                       onclick="return confirm('Yakin ingin menghapus artikel ini?')">
                        Hapus
                    </a>

                </td>

            </tr>

            <?php endforeach; ?>

        <?php else: ?>

            <tr>

                <td colspan="4" style="text-align:center;">
                    Data artikel tidak ditemukan.
                </td>

            </tr>

        <?php endif; ?>

        </tbody>

    </table>

   <!-- Pagination -->
<div class="pagination-wrapper">

    <?= $pager->only(['q'])->links(); ?>

</div>
</div>

<?= $this->endSection() ?>
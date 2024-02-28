<div class="container my-3">
    <div>

        <h1><?= $judul; ?></h1>
        <hr>

        <div class="row">
            <div class="col-md-12 d-flex">
                <div class="me-3 mb-3">
                    <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary p-3">Tambah Data Mahasiswa</a>
                </div>
                <?php if ($this->session->flashdata('query')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= $this->session->flashdata('query'); ?> data <strong>Berhasil!</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <ul class="list-group">
                    <?php foreach ($mahasiswa as $data) : ?>
                        <li class="list-group-item d-flex justify-content-between">
                            <?= $data['nama']; ?>
                            <a href="<?= base_url() ?>mahasiswa/hapus/<?= $data['id']; ?>" class="badge text-bg-danger link-underline link-underline-opacity-0" onclick="return confirm('yakin ?');">Hapus</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

    </div>
</div>


<!-- <div class="container">
    <?php var_dump($mahasiswa); ?>
</div> -->
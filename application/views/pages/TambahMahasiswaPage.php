<div class="container">
    <div class="row mt-3">
        <div class="col-lg-6">

            <div class="card">
                <div class="card-header">
                    Tambah Data Mahasiswa
                </div>
                <div class="card-body pb-0">

                    <form action="" method="POST">
                        <input type="text" class="form-control mb-3 is-<?= (form_error('nama')) ? 'invalid' : '' ?>" name="nama" id="nama" placeholder="Nama">
                        <div id="nama" class="<?= (form_error('nama')) ? 'invalid' : '' ?>-feedback">
                            <?= form_error('nama'); ?>
                        </div>
                        <input type="text" class="form-control mb-3 is-<?= (form_error('nim')) ? 'invalid' : '' ?>" name="nim" placeholder="NIM" id="nim">
                        <div id="nim" class="<?= (form_error('nim')) ? 'invalid' : '' ?>-feedback">
                            <?= form_error('nim'); ?>
                        </div>
                        <input type="email" class="form-control mb-3 is-<?= (form_error('email')) ? 'invalid' : '' ?>" name="email" placeholder="Email" id="email">
                        <div id="email" class="<?= (form_error('email')) ? 'invalid' : '' ?>-feedback">
                            <?= form_error('email'); ?>
                        </div>
                        <select class="form-select mb-3 is-<?= (form_error('jurusan')) ? 'invalid' : '' ?>" name="jurusan" id="jurusan">
                            <option selected disabled>Jurusan</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknik Elektro">Teknik Elektro</option>
                        </select>
                        <div id="jurusan" class="<?= (form_error('jurusan')) ? 'invalid' : '' ?>-feedback">
                            <?= form_error('jurusan'); ?>
                        </div>
                        <input type="text" class="form-control mb-3 is-<?= (form_error('gambar')) ? 'invalid' : '' ?>" name="gambar" placeholder="Gambar" id="gambar"> 
                        <div id="gambar" class="<?= (form_error('gambar')) ? 'invalid' : '' ?>-feedback">
                            <?= form_error('gambar'); ?>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-end mb-3">Tambah Data</button>
                    </form>

                </div>
            </div>

        </div>

        <div class="col-lg-6">
            <?= validation_errors(); ?>
        </div>

    </div>
</div>
<div class="container my-3">
    <h1><?= $judul; ?></h1><hr>
    <ul class="list-group">
        <?php foreach($mahasiswa as $data) : ?>
        <li class="list-group-item">
            <?= $data['nama']; ?>
        </li>
        <?php endforeach; ?>
    </ul>
</div>


<div class="container">
    <?php var_dump($mahasiswa); ?>
</div>

<div class="col-md-12">
    <h3>
        Daftar Matakuliah
    </h3>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Matakuliah</th>
                <th>Jurusan</th>
                <th>SKS</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($list_mt as $mt) {
            ?>
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $mt->nama_matkul ?></td>
                    <td><?= $mt->jurusan ?></td>
                    <td><?= $mt->sks ?></td>
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>
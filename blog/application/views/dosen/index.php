<div class="col-md-12">
    <h3>
        Daftar Dosen
    </h3>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>NIDN</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Bidang Keahlian</th>
                <th>Web</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($list_ds as $ds) {
            ?>
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $ds->nidn ?></td>
                    <td><?= $ds->nama ?></td>
                    <td><?= $ds->email ?></td>
                    <td><?= $ds->bidang_keahlian ?></td>
                    <td><?= $ds->web ?></td>
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>
<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
<div class="container">
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href = "<?= base_url('/user/create')?>" style="margin-top:20px;">Tambah Data</a>
        </div>
    <h3 class="mt-3">Tugas Table List User :</h3>
    <table class="table table-white">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($users as $user){
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $user['nama'] ?></td>
                    <td><?= $user['npm'] ?></td>
                    <td><?= $user['nama_kelas'] ?></td>

                    <td>
                        <a class="btn btn-primary" href="<?= base_url('user/'.$user['id'])?>">Detail</a>
                        <a href="<?= base_url('user/' . $user['id']. '/edit') ?>">Edit</a>
                        <!-- <a class="btn btn-warning" href="">Edit</a> -->
                        <form action="<?=base_url('user/' . $user['id'])?>" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <?= csrf_field() ?>
                <input type="submit" class="btn btn-danger" value="Delete" style="width: 80px; height: 40px;">
            </form>

                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
</table>
<?= $this->endSection()?>
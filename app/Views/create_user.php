<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
  
    <form action="<?=base_url('user/store')?>" method="post">
    <div class="d-flex justify-content-center align-items-center flex-column" style="height:100vh;width:100%;">
    <div class="rounded" style="padding: 20px; border:5px solid green;">
         <table>
         <tr>
             <td>Nama</td>
             <td>:</td>
             <td><input type="text" class="form-control mt-2 <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>" id="floatingName" placeholder="Nama" name="nama" value="<?= old('nama') ?>"></td>
             <td><?php if (session('validation') && session('validation')->hasError('nama')) : ?>
          <div class="invalid-feedback">
            <?= session('validation')->getError('nama'); ?>
          </div>
        <?php endif; ?>
      </td>
         </tr>
         <tr>
             <td>NPM</td>
             <td>:</td>
             <td><input type="number" class="form-control mt-2 <?= session('validation') ? 'is-invalid' : '' ?>" id="floatingNpm" placeholder="NPM" name="npm" value="<?= old('npm') ?>"></td>
             <td><?php if (session('validation') && session('validation')->hasError('npm')) : ?>
          <div class="invalid-feedback">
            <?= session('validation')->getError('npm'); ?>
          </div>
        <?php endif; ?></td>
         </tr>
         <tr>
             <td>Kelas</td>
             <td>:</td>
             <td>
             <select name ="kelas" id="kelas">
            <?php
            foreach ($kelas as $item){
            ?>
                <option value="<?= $item['id']?>">
                    <?= $item['nama_kelas'] ?>
            </option>
            <?php
            }
            ?>
             </td>
         </tr>
         <tr>
             <td>Alamat</td>
             <td>:</td>
             <td><input type="text" name="alamat"></td>
         </tr>
         <tr>
             <td><input type="submit" value="Simpan"></td>
         </tr>
     </form>
</body>
</html>
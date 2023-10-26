<!-- <!DOCTYPE html> -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<!-- </head> -->

 <!-- <body> -->
    <?= $this->extend('layouts/app')?>
    <?= $this->section('content')?>
  
    <form action="<?=base_url('user/store')?>" method="post" enctype="multipart/form-data">
    <div class="d-flex justify-content-center align-items-center flex-column" style="height:100vh;width:100%;height:100vh; background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 25%, rgba(0,212,255,1) 100%);
      ">
    <div class="rounded" style="padding: 50px; border:5px solid black;background:#fffdfb;">
         <table>
          
         <div class="txt_field pb-3">
         <label for="file" class="file-label pb-1">Upload Foto :</label>
         <br>
         <input type="file" id="file" name="foto" class="form-control mt-2 file-upload" onchange="updatePlaceholder()" />
  
            <span></span>
          <div>
         <tr>
             <td>Nama</td>
             <td>:</td>
             <td><input type="text" style="margin:10px;" class="form-control mt-2 <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>" id="floatingName" placeholder="Nama" name="nama" value="<?= old('nama') ?>"></td>
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
             <td><input type="number" style="margin:10px;" class="form-control mt-2 <?= session('validation') ? 'is-invalid' : '' ?>" id="floatingNpm" placeholder="NPM" name="npm" value="<?= old('npm') ?>"></td>
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
             <select  style="margin:10px;" class="form-control mt-2" name ="kelas" id="kelas">
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
             <td><input style="margin:10px;" class="form-control mt-2" type="text" name="alamat"></td>
         </tr>
         <tr>
             <td><input class="btn btn-success mt-3" type="submit" value="Simpan"></td>
         </tr>
     </form>
     <?=$this->endSection()?>
<!-- </body> -->
<!-- </html> -->
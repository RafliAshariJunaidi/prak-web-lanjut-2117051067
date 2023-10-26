<!-- <!DOCTYPE html> -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web lanjut rafli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
   <style>
        .custom-container .itm{
            border:7px solid black;
            background:none;
            border-radius:15px;
        }
        .custom-container .btn{
            width:20vh;
            font-weight:bold;
             
        }
    </style>
<!-- </head> -->
<!-- <body> -->
    <?= $this->extend('layouts/app')?>
    <?= $this->section('content')?>
    
    <div class ="custom-container container-fluid d-flex justify-content-center align-items-center flex-column" style="height:100vh; background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 25%, rgba(0,212,255,1) 100%);
      ">
        <div class="d-flex justify-content-center align-items-center flex-column" style="border:7px solid black;width:50%;height:80%;box-shadow:10px 10px black;border-radius:15px;">
        <div class ="profil p-3 br-50 mb-3">
            <img src="<?=$user['foto']?>" alt=" " style="width:25vh;height:25vh;border-radius:50%;border:7px solid black;">
        </div>
    <div class="itm nama p-2 m-2 text-center">
            <button type="button" class = "btn btn-white " style="color:white;">Nama :<?= $user['nama']?></buton>
    </div>
   
    <div class="itm Kelas p-2 m-2 text-center">
            <button type="button" class = "btn btn-white d" style="color:white;">Kelas :<?= $user['nama_kelas']?></buton>
    </div>
   
    <div class="itm NPM p-2 m-2 text-center">
            <button type="button" class = "btn btn-white " style="color:white;">NPM :<?= $user['npm']?></buton>
    </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<?=$this->endSection()?>
    
<!-- </body>
</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$title?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

</head>

<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="height:10vh;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://avatars.githubusercontent.com/u/92414621?v=4" alt="Avatar Logo" style="width:40px;" class="rounded-pill"> 
    </a>
    <ul class="navbar-nav">
      <div class="d-flex flex-row" style="position:relative">
     <li class="nav-item" style="position:fixed;top:15px;left:87%;">
     <a class="nav-link <?= $title == 'List User' || $title == 'Create User' || $title == 'Edit User' || $title == 'Profile'  ? 'active' : '' ?>" href="<?= base_url('/user') ?>">
        <i class="nav-link"></i> <span class="ms-1 d-none d-sm-inline">User</span>
      </li>
      <li class="nav-item" style="position:fixed;top:0px;left:92%">
        
      <a class="nav-link <?= $title == 'List Kelas' || $title == 'Create kelas' || $title == 'List anggota kelas' || $title == 'Edit Kelas' ? 'active' : '' ?>" href="<?= base_url('/kelas'); ?>">
        <i class="nav-link"></i> <span class="ms-1 d-none d-sm-inline">Kelas</span> </a>
       
      </li>
    </div>
    </ul>
  </div>
</nav>

  <?= $this->renderSection('content') ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

</head>

<body>

  <?= $this->renderSection('content') ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>STT NF</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">SAS-STTNF</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Home</div>
                            <a class="nav-link">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Home
                            </a>
                            <div class="sb-sidenav-menu-heading">Nilai</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                My acitvity
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                        
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                My score
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Azzam
                    </div>
                </nav>
            </div>
            
                        
                        
<div id="layoutSidenav_content">
    <div class="container-fluid px-4">             
<?php
    include_once "atas.php";
?>
    <h1>Welcome Home !!! </h1>
</div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div  class="container">
  <div class="py-5 text-lelf">
    <h2>Form Nilai Siswa</h2>
  </div>
    <form method="POST">
     <div class="form-group row">
      <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label> 
        <div class="col-8">
         <input id="nama_lengkap" name="nama_lengkap" placeholder="nama lengkap" type="text" class="form-control">
        </div>
    </div>
      <div class="form-group row">
       <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
      <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasar- dasar Pemograman</option>
        <option value="BDI">Basis Data I</option>
        <option value="WEB1">Pemograman Web</option>
      </select>
      </div>
      </div>
      <div class="form-group row">
       <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
        <div class="col-8">
          <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
      </div>
     </div>
      <div class="form-group row">
        <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
          <div class="col-8">
           <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
        </div>
      </div>
    <div class="form-group row">
      <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
        <div class="col-8">
          <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
        </div>
    </div> 
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
</form>
<?php 
    include ("def.php");
    include ("abc.php");
    include  ("libfungsi.php");
    $nama_lengkap = isset ($_POST['nama_lengkap']) ? $_POST['nama_lengkap'] : '';
    $matkul = isset ($_POST['matkul']) ? $_POST['matkul'] : '';
    $nilai_uts = isset ($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
    $nilai_uas = isset ($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
    $nilai_tugas = isset ($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';
    $nilai_total = ((int)$nilai_uts+(int)$nilai_uas+(int)$nilai_tugas)/3;
  
  
    
  
    echo 'Nama Lengkap : '.$nama_lengkap;
    echo '<br/>Mata Kuliah : '.$matkul;
    echo '<br/>Nilai UTS : '.$nilai_uts;
    echo '<br/>Nilai UAS : '.$nilai_uas;
    echo '<br/>Nilai Tugas : '.$nilai_uas;
    echo '<br/>Nilai Total : '.$nilai_total;
    $lulus = posisi($nilai_total);
    $total = kampus ($nilai_total);
    $hasil = kelulusan($nilai_total);
    echo '<br/> nilai : '.$total;
    echo '<br/> grade : '.$lulus;
    echo '<br/> Dinyatakan : '.$hasil;
  ?>

<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
<?php
    require_once "bawah.php";
?>
    </div>
    </div>
</footer>

    </body>
</html>


 
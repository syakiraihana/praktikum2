<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form Control Logika</title>
  </head>
  <body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sistem Penilaian</a>
        </div>
    </nav>

    <nav class="navbar navbar-light">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Form Nilai Siswa</span>
        </div>
    </nav>

    <form class="px-5 form-horizontal" method="POST" action="nilai_siswa.php">
    <div class="form-group row">
        <label for="text" class="col-2 col-form-label">Nama Lengkap</label> 
        <div class="col-10">
            <input id="text" name="nama" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="Pilih" class="col-2 col-form-label">Mata Kuliah</label> 
        <div class="col-10">
        <select id="Pilih" name="matkul" class="custom-select">
        <option value="DDP">Dasar - Dasar Pemrograman</option>
        <option value="PW">Pemrograman Web</option>
        <option value="BDI">Basis Data I</option>
        </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-2 col-form-label">Nilai UTS</label> 
        <div class="col-10">
        <input id="" name="nilaiuts" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="text1" class="col-2 col-form-label">Nilai UAS</label> 
        <div class="col-10">
        <input id="text1" name="nilaiuas" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="text2" class="col-2 col-form-label">Nilai Tugas/Praktikum</label> 
        <div class="col-10">
        <input id="text2" name="nilaitugas" type="text" class="form-control">
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-2 col-10">
        <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
    </form>

    <div class="container pt-5 mt-5">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      </a>
      <span class="text-muted">Develop by Syakira Raihana &copy; 2022</span>
    </div>
    </footer>
    </div>

    <?php
    $proses = $_POST['proses'];
    $nama_siswa = $_POST['nama'];
        echo "Nama Lengkap : " .$nama_siswa;
    $mata_kuliah = $_POST['matkul'];
        echo "<br> Mata Kuliah : $mata_kuliah <br>" ;

    $nilai_uts = $_POST['nilaiuts'];
    if ($nilai_uts >= 0 and $nilai_uts <= 35) {
        echo "Nilai Anda : $nilai_uts <br>";
        echo "Grade : E <br>";
        echo "Predikat : Sangat Kurang <br>";
    } else if ($nilai_uts >= 36 and $nilai_uts <= 55) {
        echo "Nilai Anda : $nilai_uts <br>";
        echo "Grade : D <br>";
        echo "Predikat : Kurang <br>";
    } else if ($nilai_uts >= 56 and $nilai_uts <= 69) {
        echo "Nilai Anda : $nilai_uts <br>";
        echo "Grade : C <br>";
        echo "Predikat : Cukup <br>";
    } else if ($nilai_uts >= 70 and $nilai_uts <= 84) {
        echo "Nilai Anda : $nilai_uts <br>";
        echo "Grade : B <br>";
        echo "Predikat : Memuaskan <br>";
    } else if ($nilai_uts >= 85 and $nilai_uts <= 100) {
        echo "Nilai Anda : $nilai_uts <br>";
        echo "Grade : A <br>" ;
        echo "Predikat : Sangat Memuaskan <br>";
    } else {
        echo "Nilai Anda : $nilai_uts <br>";
        echo "Grade : I <br>";
        echo "Predikat : Tidak Ada <br>";
    }

    $nilai_uas = $_POST['nilaiuas'];
    if ($nilai_uas >= 0 and $nilai_uas <= 35) {
        echo "Nilai Anda : $nilai_uas <br>";
        echo "Grade : E <br>";
        echo "Predikat : Sangat Kurang <br>";
    } else if ($nilai_uas >= 36 and $nilai_uas <= 55) {
        echo "Nilai Anda : $nilai_uas <br>";
        echo "Grade : D <br>";
        echo "Predikat : Kurang <br>";
    } else if ($nilai_uas >= 56 and $nilai_uas <= 69) {
        echo "Nilai Anda : $nilai_uts <br>";
        echo "Grade : C <br>";
        echo "Predikat : Cukup <br>";
    } else if ($nilai_uas >= 70 and $nilai_uas <= 84) {
        echo "Nilai Anda : $nilai_uas <br>";
        echo "Grade : B <br>";
        echo "Predikat : Memuaskan <br>";
    } else if ($nilai_uas >= 85 and $nilai_uas <= 100) {
        echo "Nilai Anda : $nilai_uas <br>";
        echo "Grade : A <br>";
        echo "Predikat : Sangat Memuaskan <br>";
    } else {
        echo "Nilai Anda : $nilai_uas <br>";
        echo "Grade : I";
        echo "Predikat : Tidak Ada <br>";
    }

    $nilai_tugas = $_POST['nilaitugas'];
    if ($nilai_tugas >= 0 and $nilai_tugas <= 35) {
        echo "Nilai Anda : $nilai_tugas <br>";
        echo "Grade : E <br>";
        echo "Predikat : Sangat Kurang <br>";
    } else if ($nilai_tugas >= 36 and $nilai_tugas <= 55) {
        echo "Nilai Anda : $nilai_tugas <br>";
        echo "Grade : D <br>";
        echo "Predikat : Kurang <br>";
    } else if ($nilai_tugas >= 56 and $nilai_tugas <= 69) {
        echo "Nilai Anda : $nilai_tugas <br>";
        echo "Grade : C <br>";
        echo "Predikat : Cukup <br>";
    } else if ($nilai_tugas >= 70 and $nilai_tugas <= 84) {
        echo "Nilai Anda : $nilai_tugas <br>";
        echo "Grade : B <br>";
        echo "Predikat : Memuaskan <br>";
    } else if ($nilai_tugas >= 85 and $nilai_tugas <= 100) {
        echo "Nilai Anda : $nilai_tugas <br>";
        echo "Grade : A <br>";
        echo "Predikat : Sangat Memuaskan <br>";
    } else {
        echo "Nilai Anda : $nilai_tugas <br>";
        echo "Grade : I <br>";
        echo "Predikat : Tidak Ada <br>";
    }
    ?>

 <!-- if(!empty($proses)) {
     echo 'Proses : ' .$proses;
     echo '<br/>Nama : ' .$nama_siswa;
     echo '<br/>Mata Kuliah : ' .$mata_kuliah;
     echo '<br/>Nilai UTS : ' .$nilai_uts;
     echo '<br/>Nilai UAS : ' .$nilai_uas;
     echo '<br/>Nilai Tugas Praktikum : ' .$nilai_tugas; } -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
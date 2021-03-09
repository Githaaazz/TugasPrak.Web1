<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
       <?php
       $nama_lengkap = $_GET['nama_lengkap'];
       $nim = $_GET['nim'];
       $mata_kuliah = $_GET['mata_kuliah'];
       $nilai_uts = $_GET['nilai_uts'];
       $nilai_uas = $_GET['nilai_uas'];
       $nilai_tugas = $_GET['nilai_tugas'];
       ?>       
  <div class="container">    
    <form class="form-horizontal p-5 shadow" style="background-color:#f1f2f6;" method="GET" action="belajar1.php">

      <div class="text-center">
        <h3 class="mb-5 text-primary text-mg">Input Nilai Mahasiswa</h3>
      </div>
      <!------------>
        <div class="form-group row">
          <label for="nama_lengkap" class="col-sm-3 col-form-label"><b>Nama Lengkap</b></label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="nama_lengkap" required>
          </div>
        </div>
        <br>

      <!------------>
        <div class="form-group row">
          <label for="nim" class="col-sm-3 col-form-label"><b>NIM</b></label>
          <div class="col-sm-5">
            <input type="number" class="form-control" name="nim" required>
          </div>
        </div>
        <br>

      <!------------>
        <div class="form-group row">
          <label for="matakuliah" class="col-sm-3 col-form-label"><b>Mata Kuliah</b></label>
          <div class="col-sm-7">
            <select name="mata_kuliah" class="form-control">
              <option value="?">Lainnya</option>
              <option value="UI">UI/UX</option>
              <option value="BD">Basis Data</option>
              <option value="PW">Pemrograman Web</option>
            </select>
          </div>
        </div>
        <br>

      <!------------>
        <div class="form-group row">
          <label for="nilaiuts" class="col-sm-3 col-form-label"><b>Nilai UTS</b></label>
          <div class="col-sm-5">
            <input type="number" class="form-control" name="nilai_uts" required>
          </div>
        </div>
        <br>

      <!------------>
        <div class="form-group row">
            <label for="nilaiuas" class="col-sm-3 col-form-label"><b>Nilai UAS</b></label>
            <div class="col-sm-5">
              <input type="number" class="form-control " name="nilai_uas" required>
            </div>
        </div>
        <br>

      <!------------>
        <div class="form-group row">
          <label for="nilaitugas" class="col-sm-3 col-form-label"><b>Nilai Tugas/Praktikum</b></label>
          <div class="col-sm-5">
            <input type="number" class="form-control" name="nilai_tugas" required>
          </div>
        </div>
        <br>

      <!------------>
        <div class="text-center">
          <input class="btn btn-primary" type="submit" value="Simpan" name="proses__"/>
        </div>
    </form>
  </div>
  <?php

  echo '<br/>nama lengkap : '. $nama_lengkap;
  echo '<br/>nim : '. $nim;
  echo '<br/>mata kuliah : '. $mata_kuliah;
  echo '<br/>nilai uts :'. $nilai_uts;
  echo '<br/>nilai uas :'. $nilai_uas;
  echo '<br/>nilai tugas '. $nilai_tugas;


  ?>

</body>
</html>
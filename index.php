<?php

$sumber = 'https://api.quran.gading.dev/';
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);
//var_dump($data);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tes Programer YAB-Asep Wibowo</title>
  </head>
  <body>
    <h1 class="text-center m-3">API AL-QURAN YAB</h1>
    <div class="container">
        <div class="row">
            <div class="col-3">
            <h4> Ayat :</h4><select class="form-select form-select-lg mb-3 shadow-lg" aria-label=".form-select-lg example">
                <option selected>Silahkan Pilih Ayat</option>
                <?php foreach ($data as $row){
                echo "<option value='" . $row['spesificAyahInSurah'] . "'>" . $row['pattern'] . "</option>";
                }?>
              </select>
              
              <h4> Surah :</h4><select class="form-select form-select-sm shadow-lg" aria-label=".form-select-sm example">
              <option selected>Silahkan Pilih Surah</option>
             <?php foreach ($data as $row){
                echo "<option value='" . $row['Surah'] . "'>" . $row['listSurah'] . "</option>";
                }?>
              </select>
              </select>
              </div>
             
            <h4 class="text-Right m-3"> Arab :</h4>

            <h4 class="text-Right m-3"> Terjemahan Indonesia :</h4>

        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
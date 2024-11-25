<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
     <link rel="icon" href="images.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Penggajihan Yayasan Assalaam</title>
  </head>
  <body>
    <font face="arial">
      <center>
          <img src="images.png" alt="">
          <h2><b>Penggajihan<br>Guru/karyawan Yayasan Assalaam</b></h2>
          <br>
          <div class="card" style="width: 40rem;">
            <div class="card-header" align="left">
              Data Penggajihan
            </div>
              <div class="card-body" align="left">
                <form action="" method="post">
                <label for="">No</label>
                <input type="text" class="form-control" placeholder="No" name="no">
                <label for="" style="margin-top: 15px">Nama</label>
                <input type="text" class="form-control" placeholder="Nama" name="nama">
                <label for="" style="margin-top: 15px">Unit Pendidikan</label>
                <select name="unit" id="" class="form-select">
                  <option value="">Pilih Unit Pendidikan</option>
                  <option value="TK">TK</option>
                  <option value="SD">SD</option>
                  <option value="MTS">MTS</option>
                  <option value="SMP">SMP</option>
                  <option value="SMA">SMA</option>
                  <option value="SMK">SMK</option>
                  <option value="MA">MA</option>
                </select>
                <label for="" style="margin-top: 15px">Tanggal Gaji</label>
                <input type="date" class="form-control" name="tanggal">
                <table width="100%" align="center" style="margin-top: 15px">
                  <tr>
                    <td align="center" width="50%"><h5>Gaji</h5></td>
                    <td align="center"><h5>Potongan</h5></td>
                  </tr>
                  <tr>
                    <td>
                    <label for="">Jabatan</label>
                    <select name="jabatan" id="" class="form-select" style="width: 95%">
                      <option value="">Pilih Jabatan</option>
                      <option value="Karyawan">Karyawan</option>
                      <option value="Guru">Guru</option>
                      <option value="Wakasek">Wakasek</option>
                      <option value="Kepala Sekolah">Kepala Sekolah</option>
                    </select>
                    </td>
                    <td>
                      <label for="">BPJS</label>
                      <input type="number" class="form-control" name="bpjs" placeholder="BPJS">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label for="" style="margin-top: 15px">Lama Kerja</label>
                      <input type="text" class="form-control" name="lamaker" style="width: 95%" placeholder="Lama Kerja">
                    </td>
                    <td>
                      <label for="" style="margin-top: 15px">Pinjaman</label>
                      <input type="number" placeholder="Pinjaman" name="pinjaman" class="form-control">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label for="" style="margin-top: 15px">Status Kerja</label>
                      <select name="status" id="" class="form-select" style="width: 95%">
                        <option value="">Pilih Status Kerja</option>
                        <option value="Tetap">Tetap</option>
                        <option value="Kontrak">Kontrak</option>
                      </select>
                    </td>
                    <td>
                      <label for="" style="margin-top: 15px">Cicilan</label>
                      <input type="number" name="cicilan" class="form-control" placeholder="Cicilan">
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>
                      <label for="" style="margin-top: 15px">Infaq</label>
                      <input type="number" name="infaq" placeholder="Infaq" class="form-control">
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center">
                      <input type="submit" style="margin-top: 10px" name="proses" value="Proses" class="btn btn-primary">
                    </td>
                  </tr>
                </table>
                </form>
              </div>
          </div>
<?php
if(isset($_POST['proses'])){
  $no = $_POST['no'];
  $nama = $_POST['nama'];
  $unit = $_POST['unit'];
  $tanggal = $_POST['tanggal'];
  $jabatan = $_POST['jabatan'];
  $bpjs = $_POST['bpjs'];
  $lama_kerja = $_POST['lamaker'];
  $pinjaman = $_POST['pinjaman'];
  $status = $_POST['status'];
  $cicilan = $_POST['cicilan'];
  $infaq = $_POST['infaq'];

  if ($bpjs == null){
    $bpjs = 0;
  }
  if ($pinjaman == null){
    $pinjaman = 0;
  }
  if ($cicilan == null){
    $cicilan = 0;
  }
  if ($infaq == null){
    $infaq = 0;
  }

  $gaji = "0";
  $bonus = "0";
  
  if ($jabatan == "Kepala Sekolah") {
    $gaji = 10000000;
  } elseif ($jabatan == "Wakasek") {
    $gaji = 7000000;
  } elseif ($jabatan == "Guru") {
    $gaji = 5000000;
  } elseif ($jabatan == "Karyawan") {
    $gaji = 2500000;
  }

  if ($status == "Tetap"){
    $bonus = 1000000;
  } elseif ($status == "Kontrak") {
    $bonus = 0;
  }

  class Gaji{
    public $gaji_bersih;

    public function Keterangan($no2,$nama2,$unit2,$tanggal2,$jabatan2,$gaji2,$lama_kerja2,$status2,$bonus2,$bpjs2,$pinjaman2,$cicilan2,$infaq2){
      $this->gaji_bersih = ($gaji2 + $bonus2) - ($bpjs2 + $pinjaman2 + $cicilan2 + $infaq2);
      ?>
      <div class="container mt-4">
        <div class="card" style="width: 40rem;">
          <div class="card-header">
            <?php echo $nama2; ?>
          </div>
          <h4 class="text-primary mt-4"><b>Struk Gaji</b></h4>
          <div class="card-body">
            <table class="text-primary">
              <tr>
                <td>No</td>
                <td>:</td>
                <td><?php echo $no2; ?></td>
              </tr>
              <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $nama2; ?></td>
              </tr>
              <tr>
                <td>Unit Pendidikan</td>
                <td>:</td>
                <td><?php echo $unit2; ?></td>
              </tr>
              <tr>
                <td>Tanggal Gaji</td>
                <td>:</td>
                <td><?php echo $tanggal2; ?></td>
              </tr>
              <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><?php echo $jabatan2; ?></td>
              </tr>
              <tr>
                <td>Gaji</td>
                <td>:</td>
                <td><?php echo number_format($gaji2 ,0, '.', '.'); ?></td>
              </tr>
              <tr>
                <td>Lama Kerja</td>
                <td>:</td>
                <td><?php echo $lama_kerja2; ?></td>
              </tr>
              <tr>
                <td>Status Kerja</td>
                <td>:</td>
                <td><?php echo $status2; ?></td>
              </tr>
              <tr>
                <td>Bonus</td>
                <td>:</td>
                <td><?php echo number_format($bonus2 ,0, '.', '.'); ?></td>
              </tr>
              <tr>
                <td>BPJS</td>
                <td>:</td>
                <td><?php echo number_format($bpjs2 ,0, '.', '.'); ?></td>
              </tr>
              <tr>
                <td>Pinjaman</td>
                <td>:</td>
                <td><?php echo number_format($pinjaman2 ,0, '.', '.'); ?></td>
              </tr>
              <tr>
                <td>Cicilan</td>
                <td>:</td>
                <td><?php echo number_format($cicilan2 ,0, '.', '.'); ?></td>
              </tr>
              <tr>
                <td>Infaq</td>
                <td>:</td>
                <td><?php echo number_format($infaq2 ,0, '.', '.'); ?></td>
              </tr>
              <tr>
                <td>Gaji Bersih</td>
                <td>:</td>
                <td><?php echo number_format($this->gaji_bersih ,0, '.', '.'); ?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <?php
    }
  }

  $cetak = new Gaji();
  echo $cetak->Keterangan($no,$nama,$unit,$tanggal,$jabatan,$gaji,$lama_kerja,$status,$bonus,$bpjs,$pinjaman,$cicilan,$infaq);
}
?>

      </center>
    </font>


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
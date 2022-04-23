<?php
include_once 'header.php';
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body> -->
<div class="content-wrapper">
<section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Hitung BMI Anda!</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Layout</a></li>
                  <li class="breadcrumb-item active">Hitung BMI</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <!-- Default box -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Hitung BMI</h3>

                    <div class="card-tools">
                      <button
                        type="button"
                        class="btn btn-tool"
                        data-card-widget="collapse"
                        title="Collapse"
                      >
                        <i class="fas fa-minus"></i>
                      </button>
                      <button
                        type="button"
                        class="btn btn-tool"
                        data-card-widget="remove"
                        title="Remove"
                      >
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                  <form  method = "post" class = "mb-5">
  <div class="form-group row">
    <label for="tanggal" class="col-3 col-form-label">Tanggal Periksa</label> 
    <div class="col-6">
      <input id="tanggal" name="tanggal" placeholder="masukkan tanggal hari ini" type="date" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="kode" class="col-3 col-form-label">Kode Pasien</label> 
    <div class="col-6">
      <input id="kode" name="kode" placeholder="contoh : P001" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-3 col-form-label">Nama</label> 
    <div class="col-6">
      <input id="nama" name="nama" placeholder="masukkan nama" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-3">Gender</label> 
    <div class="col-6">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="gender" id="gender_0" type="checkbox" class="custom-control-input" value="Laki-laki"> 
        <label for="gender_0" class="custom-control-label">Laki-laki</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="gender" id="gender_1" type="checkbox" class="custom-control-input" value="Perempuan" > 
        <label for="gender_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <label for="berat" class="col-3 col-form-label">berat</label> 
    <div class="col-6">
      <input id="berat" name="berat" placeholder="masukkan berat badan" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggi" class="col-3 col-form-label">Tinggi</label> 
    <div class="col-6">
      <input id="tinggi" name="tinggi" placeholder="masukkan tinggi badan" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-3 col-6">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<br>

<?php
require_once 'class_pasien.php';
require_once 'class_BMI.php';
require_once 'class_BMIpasien.php';

//objek pasien
//pasien satu
$ps1 = new Pasien();
$ps1->kode = 'P001';
$ps1->nama = 'Dewi Fathimatuzzahro';
$ps1->gender = 'Perempuan';
//pasien dua
$ps2 = new Pasien();
$ps2->kode = 'P002';
$ps2->nama = 'Muhammad Syauqi';
$ps2->gender = 'Laki-laki';
//pasien tiga
$ps3 = new Pasien();
$ps3->kode = 'P003';
$ps3->nama = 'Ananda Nadia Syakira';
$ps3->gender = 'Perempuan';
//pasien empat
$ps4 = new Pasien();
$ps4->kode = $_POST['kode'];
$ps4->nama = $_POST['nama'];
$ps4->gender = $_POST['gender'];

//objek bmi
//BMI satu
$bmi1 = new BMI(55, 165);


//BMI dua
$bmi2 = new BMI(60, 165);

//BMI tiga
$bmi3 = new BMI(50, 165);

//BMI empat
$bmi4 = new BMI($_POST['berat'], $_POST['tinggi']);

//objek hasil bmi
//hasil BMI satu
$bp1 = new BMIpasien($bmi1, '2022-06-10', $ps1);
//hasil BMI dua
$bp2 = new BMIpasien($bmi2, '2022-08-17', $ps2);
//hasil BMI tiga
$bp3 = new BMIpasien($bmi3, '2022-03-25', $ps3);
//hasil BMI empat
$bp4 = new BMIpasien($bmi4, $_POST['tanggal'], $ps4);


$ar_bmi = [$bp1, $bp2, $bp3, $bp4];
?>


<!-- <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal Periksa</th>
      <th scope="col">Kode Pasien</th>
      <th scope="col">Nama Pasien</th>
      <th scope="col">Gender</th>
      <th scope="col">Berat (kg)</th>
      <th scope="col">Tinggi (cm)</th>
      <th scope="col">Nilai BMI</th>
      <th scope="col">Status BMI</th>
    </tr>
  </thead>
  <tbody>
       
      <?php
        $nomor=1;
        foreach ($ar_bmi as $obj){
            ?>
       
    <tr>
      <td><?=$nomor?></td>
      <td><?=$obj->tanggal?></td>
      <td><?=$obj->pasien->kode?></td>
      <td><?=$obj->pasien->nama?></td>
      <td><?=$obj->pasien->gender?></td>
      <td><?=$obj->bmi->berat?></td>
      <td><?=$obj->bmi->tinggi?></td>
      <td><?=$obj->bmi->nilaiBMI()?></td>
      <td><?=$obj->bmi->statusBMI()?></td>
    </tr>
   <?php
$nomor++;    
}
    ?>
  </tbody>
</table> -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">Footer</div>
                  <!-- /.card-footer-->
                </div>
                <!-- /.card -->
              </div>
            </div>
          </div>
        </section>


</div>
<!-- </body>
</html> -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Tabel BMI</h1>
              </div>
              
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <!-- Default box -->
                <div class="card">
                  <div class="card-header">
                  

                    <div class="card-tools">
                    <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal Periksa</th>
      <th scope="col">Kode Pasien</th>
      <th scope="col">Nama Pasien</th>
      <th scope="col">Gender</th>
      <th scope="col">Berat (kg)</th>
      <th scope="col">Tinggi (cm)</th>
      <th scope="col">Nilai BMI</th>
      <th scope="col">Status BMI</th>
    </tr>
  </thead>
  <tbody>
       
      <?php
        $nomor=1;
        foreach ($ar_bmi as $obj){
            ?>
       
    <tr>
      <td><?=$nomor?></td>
      <td><?=$obj->tanggal?></td>
      <td><?=$obj->pasien->kode?></td>
      <td><?=$obj->pasien->nama?></td>
      <td><?=$obj->pasien->gender?></td>
      <td><?=$obj->bmi->berat?></td>
      <td><?=$obj->bmi->tinggi?></td>
      <td><?=$obj->bmi->nilaiBMI()?></td>
      <td><?=$obj->bmi->statusBMI()?></td>
    </tr>
   <?php
$nomor++;    
}
    ?>
  </tbody>
</table>
                  </div>
                  <!-- /.card-body -->
                  
                </div>
                <!-- /.card -->
              </div>
            </div>
          </div>
        </section>
        <!-- /.content -->
      </div>
      
<?php
include_once 'footer.php';
?>
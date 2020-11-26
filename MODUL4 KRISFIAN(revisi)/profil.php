<!doctype html>
<?php
    session_start();
  $Email = $_SESSION["email"];
  $sql = "SELECT * FROM user WHERE email='$Email'";
    include_once("config.php");
             $result = mysqli_query($mysqli, $sql);
            $user = mysqli_fetch_array($result);
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Profil</title>
  </head>
  <body>
  <div class = "container pt-5">
  <div class = "row align-items-center">
  <div class="col-6">
  <div class="card p-5">
  
  <form method= "post" action="register.php">
  <center>
  <h1>Profil</h1>
  </center>

        <div class= "form-group">
            <label for="NAMA">Nama</label>
            <input name= "nama" type="text" class="form-control" id="nama" value="<?php echo $user['nama']; ?>" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name= "email" type="email" class="form-control" id="exampleInputEmail1"  value="<?php echo $user['email']; ?>" >
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class= "form-group">
            <label for="no_hp">No Handphone</label>
            <input name= "no_hp" type="number" class="form-control" id="nohp"  value="<?php echo $user['no_hp']; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Kata Sandi</label>
            <input name= "kata_sandi" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Konfirmasi Kata Sandi</label>
            <input name= "kks" type="password" class="form-control" id="exampleInputPassword2">
        </div>
        <div class="form-group form-check">
            <input name= "check" type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <center>
        <button name="Submit" type="submit" class="btn btn-primary">Submit</button>
        <button name="Submit" type="submit" class="btn btn-primary"href= "halaman_awal.php">Cancel</button>
        
        </center>
    </form>
  </div>
  </div>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
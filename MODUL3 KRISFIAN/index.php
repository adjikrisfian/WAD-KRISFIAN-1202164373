<!DOCTYPE html>
<html lang="en">
<head>
  <title>EVENT WAD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">EAD EVENTS</a>
    </div>
    <ul class="navbar-inverse">
     <center> <li ><a href="index.php?p=home">Home</a></li></center>
     <a href="index.php?p=home"> <h4 style="text-align: right;">Buat Event</h4>
    </ul>
  </div>
</nav>

<div class="container">
<center><div class=""><h2>Welcome To Event WAD</h2></center>
  <?php
        $pages_dir = 'hal'; //pages merupakan nama folder
        if(!empty($_GET['p'])){ 
        $pages = scandir($pages_dir, 0);
        unset($pages[0], $pages[1]);
                            
        $p = $_GET['p'];
        if(in_array($p.'.php', $pages)){
          include($pages_dir.'/'.$p.'.php');
        } else {
          echo "Halaman tidak ditemukan!";       
          }
       // } else {
         // include($pages_dir.'/welcome.php');
        }
    ?>
</div>
<!-- end kode untuk konten -- >
</body>
</html>
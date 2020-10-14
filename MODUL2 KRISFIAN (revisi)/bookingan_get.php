<!DOCTYPE html>
<html>
<head>
<title>Bookingan</title>
</head>
<body>

<?php
 $nama = $_GET['nama'];
 $tgl = $_GET['tgl'];
 $duration = $_GET['duration'];
 $room = $_GET['room'];
 $service = $_GET['service'];
 $nomor = $_GET['nomor'];





 ?>
 <div class="container-sm">
     <h2 style = "text-align: center;"> Bookingan (GET)</h2>
     <fieldset>
         <table class="table">
             <tr>
                 <td>Nama: </td>
                 <td><?= $nama ?> </td>
</tr>
<tr>
                 <td>Tanggal Lahir: </td>
                 <td><?= $tgl ?> </td>
</tr>
<tr>
                 <td>Duration: </td>
                 <td><?= $duration ?> </td>
</tr>
<tr>
                 <td>Room Type: </td>
                 <td><?= $room ?> </td>
</tr>
<tr>
                 <td>Servie: </td>
                 <td><?= $service ?> </td>
</tr>
<tr>
                 <td>Phone Number: </td>
                 <td><?= $nomor ?> </td>
</tr>

</table>
<div style = "text-align: center;">
    <a href="Booking.php" class="btn btn-primary mb-2"> Kembali</a>
</fieldset>
</div>
</body>
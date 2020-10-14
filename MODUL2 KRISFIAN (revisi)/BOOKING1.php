<!DOCTYPE html>
<html>
<head>
<title>Booking</title>
</head>
<body>
    <div class = "containe-sm">
        <h2 style= "text-align: center;"> Booking (GET)</h2>
        <br>
        <form action="bookingan_get.php" method="get">
            <fieldset class="form-group">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class= "col-sm-10">
                        <input type="text" class="form-control" placeholder="Nama" name="nama">
</div>
<div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class= "col-sm-10">
                        <input type="date" name="tgl">
</div>
<div class="form-group row">
                    <label class="col-sm-2 col-form-label">Duration</label>
                    <div class= "col-sm-10">
                        <input type="text" name="duration">
</div>
<div class="form-group row">
                    <label class="col-sm-2 col-form-label">Room Type</label>
                    <div class= "col-sm-10">
                        <div class="form-check">
                        <select class="form-control" name="room">
                            <option value="standar">Standar</option>
                            <option value="twin">Twin</option>
                            <option value="luxury">Luxury</option>
</select>
</div>
<div class="form-group row">
                    <label class="col-sm-2 col-form-label">Service</label>
                    <div class= "col-sm-10">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="service" value="Room Service">
                            <label class="form-check-label">
                                Room Service </label>
</div>
                    <div class="form-check">
                            <input type="radio" class="form-check-input" name="service" value="Breakfast">
                            <label class="form-check-label">
                                Breakfast </label>
</div>
<div class="form-group row">
                    <label class="col-sm-2 col-form-label">Phone Number</label>
                    <div class= "col-sm-10">
                        <input type="text" class="form-control" placeholder="" name="nomor">
</div>
</div>
</div>
            <div style="text-align: center;">
            <input type="submit" value="booking" class="btn btn-primary mb-2">
</fieldset>
</form>
</div>
</body>
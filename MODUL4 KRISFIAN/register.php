<?php

        if (isset($_POST['Submit'])) {
            $Nama = $_POST['nama'];
            $Email = $_POST['email'];
            $NoHP = $_POST['no_hp'];
            $kata_sandi = $_POST['kata_sandi'];
            $KKS = $_POST['kks'];
            // $check = $_POST['check'];

            

            $sql = "INSERT INTO user(nama, email, no_hp, pasword) VALUES('$Nama', '$Email', '$NoHP', '$kata_sandi')";
            include_once("config.php");
            $result = mysqli_query($mysqli, $sql);
            if ($result > 0) {
                header('Location:tampilan%201.php');
            } else {
                echo 'Failed : ' . $mysqli->error;
            }
        }
        
        if (isset($_POST['masukan'])) {
            
            $Email = $_POST['email'];
            $Pass = $_POST['pass'];

            
            
            // // $check = $_POST['check'];
            
             $sql = "SELECT * FROM user WHERE email='$Email' and pasword='$Pass'";
             include_once("config.php");
             $result = mysqli_query($mysqli, $sql);
             
            if (mysqli_num_rows($result) > 0 ) {
                session_start();
                $user = mysqli_fetch_array($result) ;
                $_SESSION["email"] = $user['email'];
                 header('Location:halaman_awal.php');
            } else {
                // echo '<script language="javascript">';
                // echo 'alert(message successfully sent)';  //not showing an alert box.
                // echo '</script>';
            }
        }

        ?>
<?php
require 'koneksi.php';
$user=$_POST['username'];
$pass=$_POST['password'];
$sql=mysqli_query($koneksi,"SELECT * from admin where username='$user' and password='$pass' ");
$cek=mysqli_num_rows($sql);

     if ($cek>0) // jika ketemu
     {
         $data=mysqli_fetch_array($sql);
         if ($data['level']=="admin")
         {
         session_start();
         $_SESSION['id_admin']=$data['id_admin'];
         $_SESSION['user']=$user;      
         $_SESSION['nama']=$data['nama']; 
         $_SESSION['level']=$data['level'];
         header('location:admin/admin.php');
         }
        
        }
     
     else {
        ?>
        <script type="text/javascript">
            alert ('Username Atau Password Tidak Di Temukan');
            window.location="index2.php";
        </script>
        <?php   
     }
     ?> 
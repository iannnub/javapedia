<?php
require '../koneksi.php';  
$id = $_POST['id_pubg'];
$st=$_POST['status'];

$sql=mysqli_query($koneksi,"UPDATE  data_pubg set status='$st' where id_pubg ='$id' ");


if ($sql)
{
    ?>
    <script type="text/javascript">
          
            window.location="data_pubg.php";
        </script>
        <?php   
}
?>

<?php
require '../koneksi.php';
$id=$_GET['id'];

$sql=mysqli_query($koneksi, "delete from data_pubg where id_pubg='$id' ");
 
if ($sql) 
{
    ?>
    <script type="text/javascript">
       
        window.location='data_pubg.php';
        </script>
        <?php
}
?>
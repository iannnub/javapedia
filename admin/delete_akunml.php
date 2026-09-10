<?php
require '../koneksi.php';
$id=$_GET['id'];

$sql=mysqli_query($koneksi, "delete from data_ml where id_ml='$id' ");
 
if ($sql) 
{
    ?>
    <script type="text/javascript">
       
        window.location='dataml.php';
        </script>
        <?php
}
?>
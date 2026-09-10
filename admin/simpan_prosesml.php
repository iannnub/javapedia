<?php
require '../koneksi.php';  
$id = $_POST['id_ml'];
$st=$_POST['status'];

$sql=mysqli_query($koneksi,"UPDATE  data_ml set status='$st' where id_ml ='$id' ");


if ($sql)
{
    ?>
    <script type="text/javascript">
          
            window.location="dataml.php";
        </script>
        <?php   
}
?>

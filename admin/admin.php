<?php
session_start();
if (!isset($_SESSION['nama'])) {
    die("Anda Belum Login");
}
if ($_SESSION['level'] != "admin") {
    die("Anda bukan admin");
}
?>
<?php
require '../includes2/header.php';
require '../includes2/sidebar.php';
require '../includes2/navbar.php';

?>
<style>
    .welcome-section {
        text-align: center;
        padding: 50px;
        background-color: #f4f4f4;
    }

    .welcome-image {
        max-width: 50%; 
        height: auto;
        border-radius: 10px;
        margin-top: 20px;
        margin-bottom: 20px; 
        display: block; 
        margin-left: auto; 
        margin-right: auto; 
    }

    .welcome-text {
        margin-top: 20px;
        color: #333;
        font-family: 'Times New Roman', Times, serif;
    }
</style>


<!-- Begin Page Content -->
<div class="container-fluid">

<h1>Selamat Datang <?php echo $_SESSION['nama']; ?> Di JAVAPEIDA!</h1>
                <img class="welcome-image" src="../assets/javapedia.png" alt="Welcome Image">
                <p class="welcome-text">Di JAVAPEDIA, Merupakan website no 1 jasa joki 

                    .</p>
</div>
<!-- /.container-fluid -->


<?php
require '../includes2/footer.php'; 
?>
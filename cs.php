<?php
include "koneksi/koneksi.php";
include "koneksi/function.php";
session_start();
error_reporting(0);
if (!isset($_SESSION['username'])) {
    header('location:index.php');
} 
elseif ($_SESSION['akses'] != "Cs")
{
    echo "<script>alert('Maaf Anda tidak berhak mengakses halaman ini')</script>";
    echo "<script>window.history.back();</script>";

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php include "_partial/head.php"; ?>
    <link rel="stylesheet" href="assets/style.css">
    <!-- modernizr JS
        ============================================ -->
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <?php include "_partial/header.php"; ?>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <?php include "_partial/navbar_mobile_cs.php"; ?>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <?php include "_partial/navbar_desktop_cs.php"; ?>
    <!-- Main Menu area End-->
    <!-- Breadcomb area Start-->
    <!-- Breadcomb area End-->
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php
                    include 'koneksi/koneksi.php';

                    // Dashboard
                    if (!isset($_GET['halaman'])) {
                        error_reporting(0);
                    }
                    if ($_GET['halaman'] == 'dashboard') {
                        include "dashboard/dashboard_cs.php";
                    }
                    // Tutup Dashboard

                    // Parsing halaman Data Customer
                    if ($_GET['halaman'] == 'v_customer') {
                        include "master/customer/tampil.php";
                    }
                    if ($_GET['halaman'] == 'add_customer') {
                        include "master/customer/tambah.php";
                    }
                    if ($_GET['halaman'] == 'edit_customer') {
                        include "master/customer/edit.php";
                    }

                    // Parsing halaman Jenis Barang
                    if ($_GET['halaman'] == 'v_jenisPegawai') {
                        include "master/jenis_pegawai/tampil.php";
                    }
                    if ($_GET['halaman'] == 'add_jenisPegawai') {
                        include "master/jenis_pegawai/tambah.php";
                    }
                    if ($_GET['halaman'] == 'edit_jenisPegawai') {
                        include "master/jenis_pegawai/edit.php";
                    }

                    // WORK ORDER
                    if ($_GET['halaman'] == 'add_work_order') {
                        include "transaksi/work_order/tambah.php";
                    }
                    if ($_GET['halaman'] == 'laporan_transaksi') {
                        include "transaksi/laporan_transaksi/tampil.php";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <a href="whatsapp://send?text=Hello&phone=+6283813970559" target="_blank" class="link" > <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
  </svg><i class="bi bi-whatsapp"></i></a>
    <!-- Data Table area End-->
    <!-- Start Footer area-->
    <?php include "_partial/footer.php"; ?>
    <!-- End Footer area-->
    <!-- jquery
        ============================================ -->
    <?php include "_partial/javascript.php"; ?>
</body>

</html>
<?php
$query_customer =  mysqli_query($koneksi,"SELECT COUNT(*) as jumlah_customer FROM customer");
$data_customer = mysqli_fetch_array($query_customer);

?>
      <div class="jumbotron jumbotron-fluid">
        <h1 class="display-4">Selamat datang dibengkel kami</h1>
        <p class="lead">Kami melayani 24jam dan juga cepat tidak lama</p>
      </div>
<!-- Icon Cards-->
<div class="row">
      <a style="color:black" href="?halaman=v_customer">
      <div style="margin-bottom: 30px;" class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <div class="contact-inner">
        <div class="contact-inner">
          <h2><span class="counter"><?= $data_customer['jumlah_customer'] ?></span></h2>
          <span><strong>JUMLAH DATA CUSTOMER</strong></span>
        </div>
        </div>
      </div>
      </a>
  </div>

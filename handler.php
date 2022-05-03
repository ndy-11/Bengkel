<?php
    $selisih_jam = $since_start->h;
            if ($selisih_jam == 0) {

              // validasi menit
              $selisih_menit = $since_start->i;
              if ($selisih_menit >= 5) {

                // jika lebih dari 20 menit maka akan berhasil login

                # berhasil login dan update last_login

                $_SESSION['username'] = $data['username'];
                $_SESSION['akses'] = $data['nama_jenis_p'];
                $_SESSION['kode_pegawai'] = $data['kode_pegawai'];

                // mengambil session_id
                $_SESSION['session_id'] = session_id();

                mysqli_query($koneksi, "UPDATE pegawai SET status_login='1' , session_id = '$session_id' , last_login = '$now_login' WHERE kode_pegawai='$kode_pegawai'");

                if ($_SESSION['akses'] == "Admin") {
                  header("location:admin.php?halaman=dashboard");
                } else if ($_SESSION['akses'] == "Kasir") {
                  header("location:kasir.php?halaman=dashboard");
                } else if ($_SESSION['akses'] == "Gudang") {
                  header("location:gudang.php?halaman=dashboard");
                } else if ($_SESSION['akses'] == "Cs") {
                  header("location:cs.php?halaman=dashboard");
                }
              } else {

                # gagal dan melakukan logout
                echo "<script>alert('Akun anda sedang digunakan / Anda lupa logout (tunggu 1 menit)'); window.location = 'index.php'</script>";
              }
            } else {

              // jika pada jam yang berbeda maka akan berhasil login

              # berhasil login dan update last_login

              $_SESSION['username'] = $data['username'];
              $_SESSION['akses'] = $data['nama_jenis_p'];
              $_SESSION['kode_pegawai'] = $data['kode_pegawai'];

              // mengambil session_id
              $_SESSION['session_id'] = session_id();

              mysqli_query($koneksi, "UPDATE pegawai SET status_login='1' , session_id = '$session_id' , last_login = '$now_login' WHERE kode_pegawai='$kode_pegawai'");

              if ($_SESSION['akses'] == "Admin") {
                header("location:admin.php?halaman=dashboard");
              } else if ($_SESSION['akses'] == "Kasir") {
                header("location:kasir.php?halaman=dashboard");
              } else if ($_SESSION['akses'] == "Gudang") {
                header("location:gudang.php?halaman=dashboard");
              } else if ($_SESSION['akses'] == "Cs") {
                header("location:cs.php?halaman=dashboard");
              }
            }
          }
        }
      } else {
        echo "<script>alert('password anda salah'); window.location = 'index.php'</script>";
      }
    } else {
      echo "<script>alert('usernmae anda salah'); window.location = 'index.php'</script>";
    }
  }
} 
?>
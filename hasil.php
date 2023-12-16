<html>
  <head>
    <title>Input Penjualan</title>
  </head>
    <form action=" " method="post">
        <label for="transaksi">No Transaksi</label>
        <input type="number" id="transaksi" name="transaksi" min="0" required /><br /><br/>

      <label for="nama">Nama Pembeli:</label>
      <input type="text" id="nama" name="nama" required /><br /><br />

      <label for="judul">judul buku:</label>
      <input type="text" id="judul" name="judul" required /><br /><br />

      <label for="jumlah_buku">jumlah buku:</label>
      <input type="number" id="jumlah_buku" name="jumlah_buku" required /><br /><br />

      <label for="harga">Harga Buku:</label>
      <input type="number"id="harga" name="harga" min="0" required/>
      <br /><br />

      <input type="submit" value="Submit" />
    
    <?php
    if ($_POST['transaksi'] <= 50) {
        $diskontraksaksi = $_POST['harga'] * 5 / 100;
    } else {
        $diskontraksaksi = 0;
    }

    $hargatotalbuku = $_POST['jumlah_buku'] * $_POST['harga'] ;
    $diskonbelanja = $hargatotalbuku * 10 / 100;
    $totalbayar = $_POST['harga'] * $_POST['jumlah_buku'] - $diskontraksaksi - $diskonbelanja;
    $totalbayar2 = $_POST['harga'] * $_POST['jumlah_buku'] - $diskontraksaksi;
    ?>

    <h1>Rincian Pembelian</h1>
    <p>No Transaksi :
        <?php echo $_POST['transaksi'];
        ?>

    </p>
    <p>Nama Pembeli:
        <?php echo $_POST['nama']; ?>
    </p>
    <p>Harga Buku:
        <?php echo $_POST['harga']; ?>
    </p>
    <p>Jumlah Buku:
        <?php echo $_POST['jumlah_buku']; ?>
    </p>
    <p>Diskon Belanja : 
        <?php
        if ($hargatotalbuku >= 150000) {
            echo " (10%) = " . $diskonbelanja ."<br>";
        }else {
            echo "(tidak ada diskon)";
        }
        ?>
    </p>
    <p> Diskon Transaksi
        <?php
        echo "= " . $diskontraksaksi . "<br>";
        ?>
    </p>
    <p>Total Bayar :
        <?php
         if ($_POST['transaksi'] >= 50) {
            echo " " . $totalbayar;
        }else {
            echo " " . $totalbayar2;
        }
        ?>
    </p>
    <a href="index.html">Kembali</a>
</body>
<?php

?>
    </form>
</html>
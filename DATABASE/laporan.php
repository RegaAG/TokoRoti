<?php

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <title>Laporan</title>
  </head>
  <body>
    <div class="container">
      <section>
        <h3>DATA CUSTOMER</h3>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Code Customer</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Username</th>
              <th scope="col">No HP</th>
            </tr>
          </thead>
          <tbody>
          <?php
          // buat koneksi ke database
          $conn = mysqli_connect("localhost", "root", "", "toko_app");
  
          // buat query untuk mengambil data
          $query = "SELECT * FROM customer";
  
          // jalankan query
          $result = mysqli_query($conn, $query);
          // loop untuk memunculkan data
          while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['kode_customer'] . "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['telp'] . "</td>";
            echo "</tr>";
            }?>
            </tbody>
        </table>
      </section>
      <br>
      <br>
      <br>
      <section class="my-5">
        <h3>DATA PRODUKSI</h3>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Invoice</th>
              <th scope="col">Kode Produk</th>
              <th scope="col">Nama Produk</th>
              <th scope="col">QTY</th>
              <th scope="col">Harga</th>
              <th scope="col">Tanggal</th> 
              <th scope="col">Provinsi</th> 
              <th scope="col">Kota</th>
              <th scope="col">Alamat</th>
              <th scope="col">Kode Pos</th>
            </tr>
          </thead>
          <tbody>
          <?php
          // buat koneksi ke database
          $conn = mysqli_connect("localhost", "root", "", "toko_app");
  
          // buat query untuk mengambil data
          $query = "SELECT * FROM produksi";
          
          // jalankan query
          $result = mysqli_query($conn, $query);
          // loop untuk memunculkan data
          while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['invoice'] . "</td>";
            echo "<td>" . $row['kode_produk'] . "</td>";
            echo "<td>" . $row['nama_produk'] . "</td>";
            echo "<td>" . $row['qty'] . "</td>";
            echo "<td>" . $row['harga'] . "</td>";
            echo "<td>" . $row['tanggal'] . "</td>";
            echo "<td>" . $row['provinsi'] . "</td>";
            echo "<td>" . $row['kota'] . "</td>";
            echo "<td>" . $row['alamat'] . "</td>";
            echo "<td>" . $row['kode_pos'] . "</td>";
            echo "</tr>";
          }?>
          </tbody>
        </table>
      </section>
      <br>
      <br>
      <br>
      <section class="my-5">
        <h3>DATA PRODUK</h3>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Kode Produk</th>
              <th scope="col">Nama</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Harga</th>
            </tr>
          </thead>
          <tbody>
          <?php
          // buat koneksi ke database
          $conn = mysqli_connect("localhost", "root", "", "toko_app");
  
          // buat query untuk mengambil data
          $query = "SELECT * FROM produk";
          
          // jalankan query
          $result = mysqli_query($conn, $query);
          // loop untuk memunculkan data
          while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['kode_produk'] . "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['deskripsi'] . "</td>";
            echo "<td>" . $row['harga'] . "</td>";
            echo "</tr>";
          }?>
          </tbody>
        </table>
      </section>
      <button class="btn btn-secondary" onclick="printPage()">Cetak Halaman</button>
      <script src="main.js"></script>

      <br>
      <br>
      <br>
    </div>
  </body>
</html>
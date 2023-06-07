<?php include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <!-- Akhir Bootstrap Icons -->

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

    <title>Perpustakaan</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
  </head>
  <body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Perpustakaan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#buku">Buku</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#members">Members</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#peminjaman">Peminjaman</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center">
      <img src="img/logo1.jpeg" alt="Perpustakaan" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">Perpustakaan</h1>
      <p class="lead">SMK Negeri 2 Semarang</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,128L34.3,144C68.6,160,137,192,206,181.3C274.3,171,343,117,411,96C480,75,549,85,617,122.7C685.7,160,754,224,823,218.7C891.4,213,960,139,1029,122.7C1097.1,107,1166,149,1234,170.7C1302.9,192,1371,192,1406,192L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- Buku -->
    <section id="buku">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
          <h2>Daftar Buku</h2>
    <table>
        <tr>
            <th>ID Buku</th>
            <th>Judul</th>
            <th>Pengarang</th>
        </tr>
        <?php
        // Koneksi ke database
        $conn = mysqli_connect("localhost", "root", "", "perpustakaan");
        
        // Periksa koneksi
        if (!$conn) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }
        
        // Query untuk mengambil data buku
        $query = "SELECT * FROM books";
        $result = mysqli_query($conn, $query);
        
        // Tampilkan data buku ke dalam tabel
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['book_id']."</td>";
                echo "<td>".$row['title']."</td>";
                echo "<td>".$row['author']."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Tidak ada data buku</td></tr>";
        }
        
        // Tutup koneksi
        mysqli_close($conn);
        ?>
    </table>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#e2edff"
          fill-opacity="1"
          d="M0,256L34.3,229.3C68.6,203,137,149,206,138.7C274.3,128,343,160,411,176C480,192,549,192,617,160C685.7,128,754,64,823,80C891.4,96,960,192,1029,213.3C1097.1,235,1166,181,1234,170.7C1302.9,160,1371,192,1406,208L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Buku -->

    <!-- Member -->
    <section id="members">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
          <h2>Daftar Member</h2>
    <table>
        <tr>
            <th>ID Member</th>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>
        <?php
        // Koneksi ke database
        $conn = mysqli_connect("localhost", "root", "", "perpustakaan");
        
        // Periksa koneksi
        if (!$conn) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }
        
        // Query untuk mengambil data member
        $query = "SELECT * FROM members";
        $result = mysqli_query($conn, $query);
        
        // Tampilkan data member ke dalam tabel
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['member_id']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['address']."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Tidak ada data member</td></tr>";
        }
        
        // Tutup koneksi
        mysqli_close($conn);
        ?>
    </table>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,64L34.3,85.3C68.6,107,137,149,206,160C274.3,171,343,149,411,149.3C480,149,549,171,617,176C685.7,181,754,171,823,154.7C891.4,139,960,117,1029,106.7C1097.1,96,1166,96,1234,101.3C1302.9,107,1371,117,1406,122.7L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Member -->

    <!-- Peminjaman -->
    <?php 
    $query = mysqli_query($link, "SELECT Peminjaman.peminjaman_id, Books.title, Members.name, Peminjaman.tgl_pinjam
    FROM Peminjaman JOIN Books ON Peminjaman.book_id = Books.book_id
    JOIN Members ON Peminjaman.member_id = Members.member_id");
    
    ?>
    <section id="peminjaman">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
          <h1>Daftar Peminjaman Buku</h1>
    <table border="1px">
        <th>Id Peminjaman</th>
        <th>Judul Buku</th>
        <th>Nama Siswa</th>
        <th>Tanggal Pinjam</th>
        <th></th>

    <?php while ($data = mysqli_fetch_array($query)) :?>
        <tr>
            <td><?php echo $data['peminjaman_id']; ?></td>
            <td><?php echo $data['title']; ?></td>
            <td><?php echo $data['name']; ?></td>
            <td><?php echo $data['tgl_pinjam']; ?></td>
        </tr>
        <?php endwhile ?>
    </table>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#0d6efd"
          fill-opacity="1"
          d="M0,128L34.3,138.7C68.6,149,137,171,206,181.3C274.3,192,343,192,411,192C480,192,549,192,617,176C685.7,160,754,128,823,138.7C891.4,149,960,203,1029,224C1097.1,245,1166,235,1234,202.7C1302.9,171,1371,117,1406,90.7L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Peminjaman -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
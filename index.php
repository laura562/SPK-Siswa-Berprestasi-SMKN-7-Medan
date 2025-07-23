<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SPK Siswa Berprestasi - SMKN 7 Medan</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <style>
    .navbar-custom {
      background-color: #3a3a70ff; /* merah tua */
      padding: 20px 0;
    }

    .form-section {
      margin-top: 40px; /* Spasi antara navbar dan form */
      margin-bottom: 40px;
    }

    .card {
      box-shadow: 0 0 15px rgba(255, 255, 255, 1);
      border-radius: 10px;
    }
  </style>
</head>

<body class="bg-light">
  <!-- Banner Merah -->
  <div class="container-fluid navbar-custom">
    <div class="container d-flex justify-content-between align-items-center">
      <img src="img/logo3.png" alt="Logo Sekolah" height="70">
       <div>
      <h5 class="mb-0 fw-bold text-white">SMK NEGERI 7 MEDAN</h5>
      <small class="text-uppercase text-white">SMK BISA, UNGGUL, DAN BERKARAKTER</small>
    </div>
      <a href="https://smkn7medan.sch.id/" class="text-white text-decoration-none">Website</a>
    </div>
  </div>

  <!-- Form Input dengan Spasi -->
  <div class="container form-section">
    <div class="card shadow-lg p-4">
        <h2 class="mb-4">Input Penilaian Siswa Berprestasi</h2>
        <form action="proses.php" method="post">
            <div class="mb-3">
                <label>Nama Siswa</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Nilai Akademik (1-100)</label>
                <input type="number" name="akademik" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Nilai Sikap/Perilaku (1-100)</label>
                <input type="number" name="sikap" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Keaktifan Ekstrakurikuler (1-100)</label>
                <input type="number" name="ekskul" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Prestasi Non-Akademik (1-100)</label>
                <input type="number" name="nonakademik" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Proses</button>
        </form>
    </div>
</div>

  <!-- FOOTER -->
<footer class="bg-dark text-white pt-5">
  <div class="container">
    <!-- Bagian Atas Footer: 3 Kolom -->
    <div class="row text-center text-md-start">
      <!-- Kolom 1 -->
      <div class="col-md-4 mb-4">
        <div class="p-3" style="background-color: #e74c3c;">
          <h5><i class="bi bi-house-door-fill me-2"></i>SMK NEGERI 7 MEDAN</h5>
          <p class="small">SMK BISA, UNGGUL, DAN BERKARAKTER</p>
        </div>
      </div>

      <!-- Kolom 2 -->
      <div class="col-md-4 mb-4">
        <div class="p-3" style="background-color: #1abc9c;">
          <h5><i class="bi bi-geo-alt-fill me-2"></i>Alamat</h5>
          <p class="small">Jl.STM No.12E Desa/Kelurahan Siti Rejo I<br>Kecamatan Medan Amplas Kabupaten Medan</p>
        </div>
      </div>

      <!-- Kolom 3 -->
      <div class="col-md-4 mb-4">
        <div class="p-3 bg-primary-subtle">
          <h5><i class="bi bi-person-circle me-2"></i>INFORMASI PENDAFTARAN (PPDB)</h5>
          <a href="https://smkn7medan.sch.id/read/9/ppdb" class="btn btn-warning mt-2 fw-bold">KLIK DISINI</a>
        </div>
      </div>
    </div>

    <!-- Garis Batas -->
    <hr class="border-light">

    <!-- Bagian Bawah Footer -->
    <div class="row text-center text-md-start">
      <!-- Hubungi Kami -->
      <div class="col-md-4 mb-4">
        <h6 class="fw-bold text-uppercase">Hubungi Kami</h6>
        <hr class="border-info" style="width: 50px;">
        <p><i class="bi bi-telephone-fill me-2"></i>081277856077</p>
        <p><i class="bi bi-printer-fill me-2"></i>-</p>
        <p><i class="bi bi-envelope-fill me-2"></i>admin@smkn7medan.sch.id</p>
      </div>

      <!-- Sosial Media -->
      <div class="col-md-4 mb-4">
        <h6 class="fw-bold text-uppercase">Ikuti Kami</h6>
        <hr class="border-success" style="width: 50px;">
        <div class="d-flex gap-2">
          <a href="https://www.facebook.com/p/SMK-Negeri-7-Medan-Official-100076220792674/" class="btn btn-primary btn-sm rounded-circle"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/smkn7medan" class="btn btn-success btn-sm rounded-circle"><i class="bi bi-instagram"></i></a>
          <a href="https://www.youtube.com/@SMKN7MEDAN" class="btn btn-danger btn-sm rounded-circle"><i class="bi bi-youtube"></i></a>
        </div>
      </div>
    </div>

    <!-- Copyright -->
    <div class="text-center mt-3 border-top pt-2 small">
      COPYRIGHT © 2022-2025 SMK NEGERI 7 MEDAN (BY Febi Laura)
    </div>
  </div>
</footer>

</body>
</html>

<?php
include 'config.php';

$nama = $_POST['nama'];
$akademik = $_POST['akademik'];
$sikap = $_POST['sikap'];
$ekskul = $_POST['ekskul'];
$nonakademik = $_POST['nonakademik'];

$sql = "INSERT INTO siswa (nama, akademik, sikap, ekskul, nonakademik)
        VALUES ('$nama', '$akademik', '$sikap', '$ekskul', '$nonakademik')";
mysqli_query($conn, $sql);

$result = mysqli_query($conn, "SELECT * FROM siswa");
$data = [];
$nama_siswa = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = [$row['akademik'], $row['sikap'], $row['ekskul'], $row['nonakademik']];
    $nama_siswa[] = $row['nama'];
}

$bobot = [0.4, 0.3, 0.2, 0.1];
$normal = [];
for ($j = 0; $j < 4; $j++) {
    $max = max(array_column($data, $j));
    foreach ($data as $i => $val) {
        $normal[$i][$j] = $val[$j] / $max;
    }
}

$skor = [];
foreach ($normal as $i => $row) {
    $skor[$i] = 0;
    foreach ($row as $j => $nilai) {
        $skor[$i] += $nilai * $bobot[$j];
    }
}

arsort($skor);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil SPK Siswa Berprestasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-5 bg-light">
<div class="container">
    <div class="alert alert-success shadow-sm">✅ Data berhasil diproses! Berikut hasil perhitungan SAW:</div>
    <div class="card shadow-lg">
        <div class="card-body">
            <h4 class="card-title mb-4">Ranking Siswa Berprestasi</h4>
            <table class="table table-bordered table-striped">
                <thead><tr><th>Nama</th><th>Skor</th></tr></thead>
                <tbody>
                <?php
                foreach ($skor as $index => $nilai) {
                    echo "<tr><td>{$nama_siswa[$index]}</td><td>" . round($nilai, 4) . "</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>

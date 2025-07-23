
CREATE DATABASE IF NOT EXISTS spk_siswa_prestasi;
USE spk_siswa_prestasi;

CREATE TABLE siswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    akademik INT,
    sikap INT,
    ekskul INT,
    nonakademik INT
);

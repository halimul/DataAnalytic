DROP TABLE IF EXISTS sekolah.siswa;

CREATE TABLE sekolah.siswa (
    id_siswa VARCHAR(255),
    nama_siswa VARCHAR(255),
    kelas_siswa VARCHAR(255)
);

INSERT INTO
    siswa (id_siswa, nama_siswa, kelas_siswa)
VALUES
    ('3211', 'Putri', 'XII IPS 1'),
    ('3213', 'Ferdi', 'XI TKJ 1');
    
SELECT * FROM sekolah.siswa;
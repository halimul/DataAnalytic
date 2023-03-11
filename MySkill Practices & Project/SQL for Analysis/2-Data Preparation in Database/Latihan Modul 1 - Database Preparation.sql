/* Untuk memberikan komentar,
 Anda bisa menggunakan tanda -- untuk komentar satu baris */
 
-- atau menggunakan tanda /* [komentar] */ untuk memberikan komentar multibaris 

-- Membuat tabel
CREATE TABLE mahasiswa (
    id_mahasiswa varchar(10),
    nama_mahasiswa varchar(50),
    nilai_ujian integer
);

-- Memasukkan data

INSERT INTO
    mahasiswa (id_mahasiswa, nama_mahasiswa, nilai_ujian)
VALUES
    ('13217073', 'Aruman', 80),
    ('13216012', 'Ashari', 90),
    ('13217011', 'Diana', 75),
    ('13216001', 'Nadia', 60);

-- Mendapatkan data

SELECT
    *
FROM
    mahasiswa;

-- Memasukkan data

INSERT INTO
    mahasiswa (id_mahasiswa, nama_mahasiswa, nilai_ujian)
VALUES
    ('13216002', 'Utami', 95);
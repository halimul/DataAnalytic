-- Studi Kasus 3---

-- Intruksi 1---
-- 1.1 Membuat Database perpustakaan---
CREATE DATABASE perpustakaan;

-- 1.2 Membuat Tabel buku---
CREATE TABLE buku(
	id_buku VARCHAR (255) NOT NULL PRIMARY KEY,
    judul_buku VARCHAR (255) NOT NULL,
    nama_penulis VARCHAR (255) NULL,
    jumlah VARCHAR (255) NULL
);
-- 1.3 Cek Tabel Buku
SELECT * FROM buku

-- Intruksi 2---
-- 2.1 Menambahkan kolom Lokasi Buku---
ALTER TABLE buku ADD lokasi VARCHAR(255);

-- Cek Perubahan Tabel---
SELECT * FROM buku

-- Intruksi 3---
-- 3.1 Membuat Tabel peminjaman---

CREATE TABLE peminjaman (
	no_peminjaman VARCHAR (255) NOT NULL PRIMARY KEY,
    nama_peminjam VARCHAR (255) NOT NULL,
    id_buku VARCHAR (255) NOT NULL,
    jumlah_buku VARCHAR (255) NOT NULL,
    tgl_pinjam DATE NOT NULL,
    tgl_ekspetasi_kembali DATE NULL,
    tgl_actual_kembali DATE NULL,
    FOREIGN KEY (id_buku) REFERENCES buku (id_buku)
);

-- Lakukan pengecekan apakah Tabel Peminjaman sudah terbentuk
SELECT * FROM peminjaman;

-- Jawaban 1
EXPLAIN peminjaman;
/* Primary key dan foreign key akan terbentuk setelah instruksi 1, 2 dan 3 dijalankan*/

-- Jawaban 2
-- Periksa apakah data sudah masuk dengan menggunakan query berikut:
SELECT * FROM perpustakaan.buku;

-- Jawaban 3
-- Periksa apakah data sudah masuk dengan menggunakan query berikut:
SELECT * FROM perpustakaan.peminjaman;

-- Jawaban 4 
INSERT INTO
    perpustakaan.peminjaman (
        no_peminjaman,
        nama_peminjam,
        id_buku,
        jumlah_buku,
        tgl_pinjam,
        tgl_ekspetasi_kembali,
        tgl_actual_kembali
    )
VALUES
    (
        'A0000000004',
        'Adi',
        'A234133',
        1,
        '2022-10-10',
        '2022-10-17',
        NULL
    );
    
-- Query ditolak / data tidak berhasil masuk ke dalam tabel
-- Penyebabnya adalah karena id_buku yang dimasukkan tidak ada di tabel buku
-- id_buku itu sendiri merupakan foreign key yang merefer ke tabel buku pada kolom id_buku

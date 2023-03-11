--1. Create new database with name SDM
CREATE DATABASE sdm;

--2. Create new table bernama Karyawan
CREATE TABLE sdm.karyawan (
	nik VARCHAR (16),
	nama_karyawan VARCHAR (50),
	level_jabatan INTEGER,
	tanggal_lahir DATE
);

--3.1 Insert Value kedalam Tabel (Cara Pertama)
INSERT INTO sdm.karyawan VALUES (
	"AO1",
    "Andi",
    2,
    "1997-09-08"
    );

--3.2 Insert Value kedalam Tabel (Cara Kedua)
INSERT INTO karyawan (nik, nama_karyawan, level_jabatan, tanggal_lahir)
VALUES (
	"A04",
    "Fulanah",
    3, 
    "1995-08-09"
);

--4. Mendapatkan Data atau menampilkan data
SELECT * FROM karyawan

--5. Menampilkan kolom tertentu
SELECT nik FROM sdm.karyawan

--6. Alias (Mengganti nama Kolom)
SELECT nik AS ID_Karyawan
FROM
sdm.karyawan

--7 Tidak dapat memasukan nilai yang tidak konsisten dengan Defenisi Tabel
INSERT INTO karyawan(
VALUES (
	"ABCDEFGHJIKLM123456789",
    "Rifa",
    2,
    "1990-09-20"
);

--8. Memasukan tipe data ENUM
DROP TABLE sdm.karyawan;

CREATE TABLE sdm.karyawan(
	nik VARCHAR(16),
    nama_karyawan VARCHAR(50),
    level_jabatan INTEGER,
    tanggal_lahir DATE,
    gol_darah ENUM ("A","B","AB","O")
);

--9 Masukan Nilai 
INSERT INTO sdm.karyawan VALUES(
	"A01",
    "Halim",
    2,
    "2000-04-19",
    "A"
);

INSERT INTO sdm.karyawan VALUES(
	"A02",
    "Hakim",
    3,
    "2001-05-18",
    "AB"
);



    

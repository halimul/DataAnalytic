---1.RELATIONSHIP TABLE---
---1.1 Membuat Database universitas---
CREATE DATABASE universitas;

---1.2 Membuat tabel untuk Dosen---
CREATE TABLE dosen (
	id_dosen VARCHAR(50),
    nama_dosen VARCHAR(100),
    program_studi VARCHAR(100),
    PRIMARY KEY (id_dosen)
);

---1.3 Menulis Primary Key di Id Dosen---
CREATE TABLE dosen (
	id_dosen VARCHAR(50) PRIMARY KEY,
    nama_dosen VARCHAR(100),
    program_studi VARCHAR(100)
);

---1.4 Menampilkan Tabel Dosen---
DESCRIBE dosen;

---1.5 Menghapus Tabel Dosen---
DROP TABLE dosen;

---1.6 Membuat Tabel Mahasiswa---
CREATE TABLE mahasiswa (
	id_mhs VARCHAR(50),
    nama_mhs VARCHAR(100),
    program_studi VARCHAR(100),
    id_dosen_wali VARCHAR(50),
    FOREIGN KEY (id_dosen_wali) REFERENCES dosen (id_dosen)
);
    
---1.7 Menampilkan tabel mahasiswa---
DESCRIBE mahasiswa;

---2. SINTAKS ALTER TABLE---

---2.1 Memasukan Data Pada tabel dosen---
INSERT INTO dosen (
	id_dosen, 
    nama_dosen, 
    program_studi)
VALUES
    ('A1001', 'Mali, Ph.D', 'Teknik Industri'),
    ('A1003', 'Dr. Margareta', 'Matematika'),
    ('A1004', 'Adi, S.E., MBA', 'Manajemen'),
    ('A1005', 'Mali, Ph.D', 'Manajemen');
    
---2.2 Cek Tabel dosen---
SELECT * FROM dosen;

---2.3 Menambahkan Kolom---
ALTER TABLE dosen ADD golongan_darah VARCHAR(3); 

---2.4 Menghapus Kolom---
ALTER TABLE dosen DROP COLUMN golongan_darah;

---2.3 Mengubah Nama Kolom pada Tabel---
ALTER TABLE dosen CHANGE COLUMN id_dosen nomor_induk_dosen VARCHAR (50);

---2.4 Mengubah Tipe Data pada Tabel---
DESCRIBE dosen;
ALTER TABLE dosen MODIFY COLUMN nama_dosen VARCHAR(200);
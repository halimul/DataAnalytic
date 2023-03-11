-- Jawaban Studi Kasus Modul 2
CREATE DATABASE bimbel;
CREATE TABLE bimbel.siswa (
	id_siswa VARCHAR(255) NOT NULL,
    nama_siswa VARCHAR (255) NOT NULL,
    alamat_siswa VARCHAR (255) NULL,
    tanggal_lahir_siswa DATE NULL,
    kelas_siswa VARCHAR (255) NOT NULL,
    sekolah_siswa VARCHAR (255) NULL
);
SELECT * FROM bimbel.siswa;
INSERT INTO bimbel.siswa (
		id_siswa,
        nama_siswa,
        alamat_siswa,
        tanggal_lahir_siswa,
        kelas_siswa,
        sekolah_siswa
    )
VALUES (
		'A000000001',
        'Rizka',
        'Jalan Pegangsaan No. 800 Jakarta',
        '2004-10-10',
        '12',
        'SMA Myskill ID'
    ),
    (
		'A000000002',
        'Nandang',
        'Jalan Nasional No. 900 Penajam Paser Utara, Kalimantan Timur',
        NULL,
        '11',
        'SMA Nasional Indonesia Raya'
    );
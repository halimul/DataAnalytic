-- Latihan Basic SQL
-- Dataset yang digunakan Jumlah Usaha Mikro Kecil Menengah (UMKM) Berdasarkan Kabupaten/Kota dan Kategori Usaha di Jawa Barat 
-- Sumber Dataset : OpenJabar

-- Membuat Database umkm
CREATE DATABASE umkm;

-- Import Dataset Melalui Table Data Import 

-- Check tabel umkm_jabar
SELECT 
	* 
FROM 
	umkm_jabar;

-- 1. Tunjukan data umkm di kota bandung
SELECT 
	* 
FROM 
	umkm_jabar 
WHERE 
	nama_kabupaten_kota = "KOTA BANDUNG";

-- 2. Tunjukan data umkm dari tahun 2019 dan disusun berdasarkan kategori_usaha :
SELECT 
	* 
FROM 
	umkm_jabar
WHERE 
	tahun >= 2019
ORDER BY 
	kategori_usaha, 
    tahun;

-- 2.1 Kondisi 3 dibatasi barisnya hanya 10 
SELECT 
	* 
FROM 
	umkm_jabar
WHERE 
	tahun >= 2019
ORDER BY 
	kategori_usaha, 
	tahun
LIMIT 10 ;

-- 3. kategori_usaha apa saja yang tersedia di dalam dataset (Tidak ada data berulang)
SELECT 
	DISTINCT kategori_usaha 
FROM 
	umkm_jabar;
    
-- Advance WHERE command

-- 4. Tunjukan seluruh data hanya kategori_usaha FASHION dan MAKANAN
SELECT 
	* 
FROM 
	umkm_jabar
WHERE 
	kategori_usaha IN ("FASHION","MAKANAN");

-- 4.1 Menggunakan OR 
SELECT
	* 
FROM 
	umkm_jabar
WHERE 
	kategori_usaha = "FASHION" 
	OR kategori_usaha= "MAKANAN";

-- 5. Tunjukkan seluruh data dengan kategori usaha FASHION di Kabupaten Karawang dari tahun 2017 hingga 2021!
SELECT
	* 
FROM 
	umkm_jabar
WHERE 
	kategori_usaha = "FASHION" 
    AND nama_kabupaten_kota = "KABUPATEN KARAWANG"
ORDER BY
	tahun ASC;

-- 6. Tunjukkan kabupaten/kota yang memiliki usaha Kuliner atau FASHION!
SELECT
    nama_kabupaten_kota,
    kategori_usaha,
    jumlah_umkm,
    satuan,
    tahun
FROM
    umkm_jabar
WHERE
    kategori_usaha = "KULINER"
    OR kategori_usaha = "FASHION";
    
-- 7. Tunjukan seluruh data selain kategor usaha KULINER, MAKANAN & MINUMAN
SELECT 
	* 
FROM 
	umkm_jabar
WHERE 
	kategori_usaha 
    NOT IN ("KULINER","MAKANAN","MINUMAN");

-- 8. Apakah terdapat id yang memiliki jumlah_umkm yang tidak diketahui (NULL)?
SELECT
    *
FROM
    umkm_jabar
WHERE
    jumlah_umkm IS NULL;
    
-- 9. Dari tahun 2018 s.d 2019, Bagaimanan trend jumlah umkm di Kabupaten Tasikmalaya untuk kategor usaha Batik
SELECT -- nama_kabupaten_kota, kategori_usaha, jumlah_umkm, satuan, tahun 
	*
FROM 
	umkm_jabar 
WHERE 
	tahun <=2020 
    AND tahun >=2018 
    AND nama_kabupaten_kota ="KABUPATEN TASIKMALAYA" 
    AND kategori_usaha="BATIK"
ORDER BY 
	jumlah_umkm ASC;
    
-- 10. Diantara kota Bandung, Kabupaten Bandung dan Kabupaten Bandung Barat,
-- Dimanakan umkm kuliner terpusat pada tahun 2021 (umkm paling banyak)?
SELECT
	* 
FROM 
	umkm_jabar 
WHERE 
	nama_kabupaten_kota LIKE "%BANDUNG%"
	AND kategori_usaha = "KULINER"
    AND tahun = 2021
ORDER BY
	jumlah_umkm DESC;

-- 11. Kabupaten/kota mana saja yang memiliki angka 7 pada digit ke 3 kode tersebut?
SELECT DISTINCT
	kode_kabupaten_kota,
    nama_kabupaten_kota
FROM
	umkm_jabar
WHERE
	kode_kabupaten_kota LIKE "__7%";




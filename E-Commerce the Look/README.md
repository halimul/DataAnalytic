# Prediksi Keuntungan Penjualan Menggunakan Model Machine Learning
## Latar Belakang
Untuk meningkatkan performa bisnis dari perusahaan maka Departemen Sales ditugaskan untuk menemukan insight bisnis menggunakan Machine Learning, sehingga nantinya informasi yang ditemukan dapat membantu Tim Looker dalam mengambil keputusan bisnis yang adaptif di masa depan.

Departemen Sales memutuskan untuk menggunakan Model Machine Learning agar dapat melakukan prediksi trend profit (Keuntungan) dari penjualan situs E-Commerce the Look. Pada proyek ini Model Machine Learning yang digunakan yaitu
  
1. fbProphet
2. SARIMAX
3. Holtwinter

## Dataset
Dataset yang sudah diolah menggunakan SQL merupakan hasil join dari 3 tabel yaitu Order Item, Order, dan Inventori item. Tabel hasil join terdiri dari 124512 kolom dan 12 baris. Dataset dapat diakses disini [here](https://drive.google.com/drive/folders/1qHf8R6PV6TP7id31S_de5pl8d7_o772t?usp=sharing). Berikut informasi dari Dataset

| Column        | Description |
|:-------------|:-----|   
|order_id|  ID Order (tabel)|
|user_id|  ID User (tabel)
|product_id|  ID Product (tabel)
|inventory_item_id|  ID Inventory Item (tabel)
|status|  Status Order
|created_at|  Waktu yang dicatat saat order dipesan
|shipped_at|  Waktu yang dicatat saat  order dikemas
|delivered_at|  Waktu yang dicatat saat  order dikirim
|returned_at|  Waktu yang dicatat saat order dikembalikan oleh User
|sale_price|  Harga jual barang ($)
|num_of_item|  Jumlah item yang dipesan
|cost|  Harga produk saat produksi


## Metode
Secara garis besar tahapan yang kami lakukan sebagai berikut :
1. Business Understanding
2. Data Understanding
3. Data Preparation
4. Modeling
5. Evaluation

## Hasil
### Sarimax
![alt text](/E-Commerce%20the%20Look/images/sarimax.png) 

### Holtwinter
![alt text](/E-Commerce%20the%20Look/images/Picture4.png)

### fbProphet
![alt text](/E-Commerce%20the%20Look/images/fbprophet.png)

## Rekomendasi Bisnis
1. Keuntungan (Profit) yang diperoleh oleh Tims Lookers dari tahun 2019–2022 memiliki trend naik
2. Parameter Profit (Keuntungan) Memiliki hubungan dengan jumlah stok produksi dan customer id pembeli.
3. Dari hubungan tersebut dapat ditentukan strategi, dimana produk yang menghasilkan Profit tertinggi dapat menjadi produk unggulan, sehingga dapat menjadi pertimbangan bagi Tim Looker agar dapat membuat manajemen yang baik terhadap ketersedian stok produk tersebut serta mengantisipasi resiko kekurangan stok di masa depan,
4. Tidak hanya itu hal ini dapat menjadi rekomendasi bagi Departemen Produk dalam penentuan strategi bagi produk yang memiliki jumlah penjualan terendah, diantaranya menggunakan diskon atau memberikan harga lebih rendah sehingga lebih dilirik oleh customer.
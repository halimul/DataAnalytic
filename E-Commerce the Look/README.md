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
![alt text](D:\Magang & Kerja\Resume, Cover Letter, Portofolio\Portofolio\Data Analytic\DataAnalytic\E-Commerce the Look\images\sarimax.png)
* During the holiday period, both hotels have more guests, with the City Hotel having more than the Resort Hotel.
* In Indonesia, most schools have holidays from June through July. Typically, a lot of families would travel together at that time. This explains why June and July saw an increase in visitors at both hotels. This can be used as one of the reasons for the timing of marketing implementation.
* From August to September, City Hotel's guest number decreases significantly. 
It's because of the school period. so that the number of guests has decreased from the school holiday period.
* The lowest value of average number of booking at March (for both hotel types).

### Holtwinter
![alt text](/Investigate%20Hotel%20Business%20using%20Data%20Visualization/images/case%202.png)
* The longer the total number of nights booked, the higher the cancellation rate (positive trend); City hotels have a steeper trend than Resort hotels.
* The higher cancellation rate for both hotels; city hotel on >21 days stay duration (87.23%) and resort hotel on 15-21 days stay duration (46.75%)
* To prevent this from happening, the hotels should implement a cancellation policy. The longer the total number of nights booked, the higher the cancellation fee.

### fbProphet
![alt text](/Investigate%20Hotel%20Business%20using%20Data%20Visualization/images/case%203.png)
* Both hotel types has lowest cancellation rate of bookings on 1 month lead time; city hotel (22.47%) and resort 
hotel (13.11%).
* When booking more than 9 months, city hotels have a high percentage of cancellations reaching more than 70%.
* Resort Hotel has quite stagnant (in around 40%).
* Significant growth of cancellation rate for city hotels each month from around 20% to around 70%, also it 
happens for resort hotels each month from around 10% to around 40%.
* This growth of cancellation rate could be happened because customer vacation plan canceled or the customer forgets to have booked a hotel. In order to prevent them from canceling their reservations, the hotel could send them reminders. Additionally, the hotel could prevent this by making the cancellation policy applicable to all bookings.

## Business Recommendation
Based on the visualization and insight gained, the following businesses can be recommended to the hospitality industry:
1. Hospitality can implement a penalty system to the cancellation of hotel bookings carried out by the order to be able to reduce the cancellation rate of ordering.
2. Hospitality can apply the maximum term or order distance of no more than 3 months in order to reduce the cancellation rate.  
3. Hospitality can implement a reminder system, especially on the order that makes an order for a long time from the time of order.
4. The hotel can carry out marketing or offer products/or services in June-July and November-December where there are many customers.
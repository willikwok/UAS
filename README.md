Nama : Willi
StudentID : 03081200028
1.Tambahkan satu buah table pada web aplikasi kemudian buatlah halaman CRUD dengan menggunakan CRUD generator, serta tambahkan menu untuk mengakses tabletersebut pada sidebar(30poin).
Penjelasan : 
CRUD yang saya tambahkan
php artisan crud:generate pembayaran --fields='deskripsi_produk#string;jumlah_pembelian#integer;total_harga#integer;id_transaksi#integer' --controller-namespace=App\Http\Controllers\Admin --route-group=admin --form-helper=html
didalam CRUD terdapat kolom tambahan yaitu deskripsi dari produk, jumlah dari pembelian, total harga dari jumlah pembelian kemudian data disesuaikan dengan id transaksi dalam view 'cekout'




2.Buatlahsebuah view untuk melakukan analisis data yang relevan dengan topik final project anda, simpan queryview tersebut kedalam file queryUAS.sql(20poin)
Penjelasan :
view yang saya tambahkan
CREATE VIEW Cekout AS
SELECT WK.Transactionnumber as id_transaksi, ling.total_harga as total_harga 
FROM form_transactions WK
LEFT JOIN pembayarans ling on ling.id_transaksi = WK.Transactionnumber
menambahkan file queryUAS.sql


3.Buatlah sebuah antarmuka untuk menampilkan view pada soal 2, kemudian tambahkan tombol untuk mencetaknyakedalam format laporan pdf. Sertakan logo UPH dan nama berserta studentID anda pada header laporan (30)
Penjelasan :
yang pertama ialah membuat tampilan.blade.php untuk memunculkan tampilan dari data yang diinput di database yang juga menampilkan data saya dan logo dari uph, kemudian membuat tampilanpdf.blade.php sebagai tampilan baru untuk dapat mencetak laporan dalam bentuk pdf dengan menambahkan button.
kemudian membuat controller untuk tampilan dan tampilanpdf LaporanController.php dan menambahkan query.php


4.Buat validasi data untuk halaman insert dan update soal nomor 1 (10 Poin)

5.Simpan kode program beserta queryUAS.sqlke public repository github, tambahkan file readme.mdyang  berisikan (10 Poin):
o Nama dan StudentID
o Soaldanpenjelasan solusi untuk setiap soal beserta nama file yang berubah.
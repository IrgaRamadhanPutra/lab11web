Nama    : Irga Ramadhan Putra

Kelas   : TI.20.D1

NIM     : 312010067

Matkul  : Pemograman Web

Untuk mengaktifkan ekstentsi tersebut, melalu XAMPP Control Panel, pada bagian 
Apache klik Config -> PHP.ini

![image](https://user-images.githubusercontent.com/101645216/172682171-f83123b3-09b6-46e9-9776-219c3414f77d.png)

![image](https://user-images.githubusercontent.com/101645216/172682353-478d2d3b-7935-4dda-a865-0288546f3db0.png)

Unduh Codeigniter dari website https://codeigniter.com/download
Extrak file zip Codeigniter ke direktori htdocs/lab11_ci.
Ubah nama direktory framework-4.x.xx menjadi ci4.
Buka browser dengan alamat http://localhost/lab11_ci/ci4/public

![image](https://user-images.githubusercontent.com/101645216/172682588-d7f6581f-ad42-49eb-956b-669ad51420c0.png)

Menjalankan CLI (Command Line Interface)
Codeigniter 4 menyediakan CLI untuk mempermudah proses development. Untuk 
mengakses CLI buka terminal/command prompt. 

![image](https://user-images.githubusercontent.com/101645216/172682730-2055ea75-523e-4d6c-9117-aa3efadaca24.png)

Arahkan lokasi direktori sesuai dengan direktori kerja project dibuat 
(xampp/htdocs/lab11_ci/ci4/) 
Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah:
php spark

![image](https://user-images.githubusercontent.com/101645216/172682842-7ee98867-0d2f-4bba-af8d-2940239d1898.png)



Semua jenis error akan ditampilkan sama. Untuk memudahkan mengetahui jenis 
errornya, maka perlu diaktifkan mode debugging dengan mengubah nilai konfigurasi 
pada environment variable CI_ENVIRINMENT menjadi development.

![image](https://user-images.githubusercontent.com/101645216/172683073-3fe275f5-a71b-4fa4-bce7-04089b79d8fc.png)

![image](https://user-images.githubusercontent.com/101645216/172683553-17f8551c-aeff-43ab-8374-9bb52501bbd8.png)

Contoh error yang terjadi. Untuk mencoba error tersebut, ubah kode pada file 
app/Controller/Home.php hilangkan titik koma pada akhir kode.

![image](https://user-images.githubusercontent.com/101645216/172683711-cc5e5188-e8de-4e82-bc40-0a2066d2c54e.png)


Struktur Direktori
Untuk lebih memahami Framework Codeigniter 4 perlu mengetahui struktur direktori 
dan file yang ada. Buka pada Windows Explorer atau dari Visual Studio Code -> 
Open Folder.


![image](https://user-images.githubusercontent.com/101645216/172683940-79f4cb1f-a9e4-4467-9559-9cd465e8cd89.png)


Router terletak pada file app/config/Routes.php


![image](https://user-images.githubusercontent.com/101645216/172684112-60d0c4c1-9615-4735-af18-0db2134f1caf.png)


Membuat Route Baru.
Tambahkan kode berikut di dalam Routes.php
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');


![image](https://user-images.githubusercontent.com/101645216/172684281-cb7fce81-48f1-4a32-a8d5-ffcd7749504f.png)

php spark routes

![image](https://user-images.githubusercontent.com/101645216/172684347-78559ec1-3cb8-4920-948c-350617732b30.png)


![image](https://user-images.githubusercontent.com/101645216/172684668-e8d506c4-8c84-4cbd-a8a9-593d2a03e684.png)


Membuat Controller


![image](https://user-images.githubusercontent.com/101645216/172684870-ad6dd10d-36bb-47c0-8bdc-473a0cbe6127.png)


Hasil browser 

![image](https://user-images.githubusercontent.com/101645216/173799474-df457441-0dd9-4d82-a3f6-ee9a6da9b14d.png)


Tambahkan method baru pada Controller Page seperti berikut.

![image](https://user-images.githubusercontent.com/101645216/172686664-698be1a4-575c-4b50-8a62-70bd850d5a46.png)

Hasil Browsee


![image](https://user-images.githubusercontent.com/101645216/173799676-5796ef35-e703-41eb-b417-454927317fbe.png)

Membuat View
Selanjutnya adalam membuat view untuk tampilan web agar lebih menarik. Buat file 
baru dengan nama about.php pada direktori view (app/view/about.php) kemudian isi 
kodenya seperti berikut.

![image](https://user-images.githubusercontent.com/101645216/172686147-c4dc606d-954f-43b9-9650-112cbab9a0c4.png)

Ubah method about pada class Controller Page menjadi seperti berikut:

![image](https://user-images.githubusercontent.com/101645216/172686336-96045a86-6b5f-4962-94f8-d9d5a63a9bf3.png)

Hasil browser 

![image](https://user-images.githubusercontent.com/101645216/173800155-548604c1-91dc-4eba-8c10-4ea1a42a92c7.png)


Buat file css pada direktori public dengan nama style.css (copy file dari praktikum 
lab4_layout. Kita akan gunakan layout yang pernah dibuat pada praktikum 4.

![image](https://user-images.githubusercontent.com/101645216/172687341-c58a5d55-661a-4871-809c-17af2f369ffb.png)

Kemudian buat folder template pada direktori view kemudian buat file header.php dan 
footer.php
File app/view/template/header.php

![image](https://user-images.githubusercontent.com/101645216/172687422-39eb2b90-4143-4334-ae0d-bacfd3378fd9.png)

File app/view/template/footer.php

![image](https://user-images.githubusercontent.com/101645216/172687498-4acfc86d-0fe5-43b5-a1d7-7e470c847ce9.png)

Hasil browser

![image](https://user-images.githubusercontent.com/101645216/173800501-5d804763-e17e-4756-819d-d94309277adb.png)


Pertanyaan dan Tugas
Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.

- About

![image](https://user-images.githubusercontent.com/101645216/172710266-19959c82-232a-480f-9c72-d228b70971ea.png)

Hasil browser
![image](https://user-images.githubusercontent.com/101645216/172711935-35087aa3-bd33-4342-bc53-2e4262de0c4c.png)

Membuat Database: Studi Kasus Data Artikel

Membuat Database

CREATE DATABASE lab_ci4

Membuat Tabel

![image](https://user-images.githubusercontent.com/101645216/173198146-9dd93805-7da0-47a4-948e-80983fc7b3fb.png)

Konfigurasi koneksi database
Selanjutnya membuat konfigurasi untuk menghubungkan dengan database server. 
Konfigurasi dapat dilakukan dengan du acara, yaitu pada file app/config/database.php
atau menggunakan file .env. Pada praktikum ini kita gunakan konfigurasi pada file .env.


![image](https://user-images.githubusercontent.com/101645216/173198278-16d260a6-0fae-4398-b02c-58d6bd544cd8.png)

Membuat Model
Selanjutnya adalah membuat Model untuk memproses data Artikel. Buat file baru pada 
direktori app/Models dengan nama ArtikelModel.php

![image](https://user-images.githubusercontent.com/101645216/173198511-3a19e209-cd57-417f-835e-edbc892271ce.png)

Membuat Controller
Buat Controller baru dengan nama Artikel.php pada direktori app/Controllers.

![image](https://user-images.githubusercontent.com/101645216/173198580-ae62900a-ee2c-4179-976a-125bc9c2e884.png)

Membuat View
Buat direktori baru dengan nama artikel pada direktori app/views, kemudian buat file 
baru dengan nama index.php.

![image](https://user-images.githubusercontent.com/101645216/173299306-a5232f75-2f17-465e-9703-300bd923aa42.png)


Hasil browser

![image](https://user-images.githubusercontent.com/101645216/173299191-4bc09d79-be8b-4223-9a89-b22e9911ba7e.png)

Belum ada data yang diampilkan. Kemudian coba tambahkan beberapa data pada 
database agar dapat ditampilkan datanya

![image](https://user-images.githubusercontent.com/101645216/173299468-99fc2de4-9af8-4f99-bd05-3ef35fbe4a46.png)
  
Hasil browser

![image](https://user-images.githubusercontent.com/101645216/173304367-4583b049-055e-45bf-8900-0034f9992bdd.png)



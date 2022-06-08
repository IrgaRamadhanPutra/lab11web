# lab11web

Untuk mengaktifkan ekstentsi tersebut, melalu XAMPP Control Panel, pada bagian 
Apache klik Config -> PHP.ini

![image](https://user-images.githubusercontent.com/101645216/172644051-43665a23-cce8-4860-ad93-aec6c3888386.png)

Pada bagian extention, hilangkan tanda ; (titik koma) pada ekstensi yang akan 
diaktifkan. Kemudian simpan kembali filenya dan restart Apache web server.

![image](https://user-images.githubusercontent.com/101645216/172644233-6b662e61-4d09-4b80-9f18-810a5ad3d4d5.png)

Instalasi Codeigniter 4
Untuk melakukan instalasi Codeigniter 4 dapat dilakukan dengan dua cara, yaitu cara 
manual dan menggunakan composer. Pada praktikum ini kita menggunakan cara 
manual.
• Unduh Codeigniter dari website https://codeigniter.com/download
• Extrak file zip Codeigniter ke direktori htdocs/lab11_ci.
• Ubah nama direktory framework-4.x.xx menjadi ci4.
• Buka browser dengan alamat http://localhost/lab11_ci/ci4/public/

![image](https://user-images.githubusercontent.com/101645216/172645084-b4b029d9-48f9-46a1-a38c-2bffd786385f.png)

Menjalankan CLI (Command Line Interface)
Codeigniter 4 menyediakan CLI untuk mempermudah proses development. Untuk 
mengakses CLI buka terminal/command prompt. 

![image](https://user-images.githubusercontent.com/101645216/172645311-fae754f6-c9c0-487c-a7ea-b52ec5170ddd.png)

Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah:
php spark

![image](https://user-images.githubusercontent.com/101645216/172645452-b5ca5b1e-d49f-449b-ae33-fc0f84878033.png)

Semua jenis error akan ditampilkan sama. Untuk memudahkan mengetahui jenis 
errornya, maka perlu diaktifkan mode debugging dengan mengubah nilai konfigurasi 
pada environment variable CI_ENVIRINMENT menjadi development.

![image](https://user-images.githubusercontent.com/101645216/172645697-3b4d31dc-1a5a-4c7b-849f-2c5ee6ea5d95.png)


Hasil Browser 

![image](https://user-images.githubusercontent.com/101645216/172645893-2d627dc4-78da-40a6-bb59-67e4bcf70728.png)

Contoh error yang terjadi. Untuk mencoba error tersebut, ubah kode pada file 
app/Controller/Home.php hilangkan titik koma pada akhir kode.

![image](https://user-images.githubusercontent.com/101645216/172646212-09266d47-01af-491e-a2a0-9aff3f1b1e56.png)

![image](https://user-images.githubusercontent.com/101645216/172646965-02987eaf-c6d2-45bd-b202-a99c2914ff42.png)

Membuat Route Baru.
Tambahkan kode berikut di dalam Routes.php

![image](https://user-images.githubusercontent.com/101645216/172648087-ab933466-c71a-4b8a-b806-288cd2cde8d9.png)

Untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan jalankan 
perintah berikut.
php spark routes

![image](https://user-images.githubusercontent.com/101645216/172648224-3061c3a8-de72-4a46-9d86-177da9e6fb8c.png)

Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat url 
http://localhost:8080/about

![image](https://user-images.githubusercontent.com/101645216/172650040-9b107a8d-5685-4030-8837-394c683e3a40.png)

Membuat Controller
Selanjutnya adalah membuat Controller Page. Buat file baru dengan nama page.php 
pada direktori Controller kemudian isi kodenya seperti berikut.

![image](https://user-images.githubusercontent.com/101645216/172652093-16a2b932-64b6-4589-9c40-36d3d6244c32.png)

Hasil browser 

![image](https://user-images.githubusercontent.com/101645216/172654157-085f1653-07a7-4aa5-8c1a-39bbdebdf05b.png)


Ubah method about pada class Controller Page menjadi seperti berikut:

![image](https://user-images.githubusercontent.com/101645216/172664209-be05775c-69ef-417a-959f-4f4125e4a3f9.png)


Kemudian lakukan refresh pada halaman tersebut.

![image](https://user-images.githubusercontent.com/101645216/172664309-9c62a197-7073-455e-8b0f-115eb27c0401.png)

Membuat Layout Web dengan CSS
Pada dasarnya layout web dengan css dapat diimplamentasikan dengan mudah pada codeigniter. Yang perlu diketahui adalah, pada Codeigniter 4 file yang menyimpan asset css dan javascript terletak pada direktori public.

Buat file css pada direktori public dengan nama style.css (copy file dari praktikum lab4_layout. Kita akan gunakan layout yang pernah dibuat pada praktikum 4.


![image](https://user-images.githubusercontent.com/101645216/172669582-c5a31af7-4941-41f1-8742-3c65b7f8299f.png)

Kemudian buat folder template pada direktori view kemudian buat file header.php dan 
footer.php

File app/view/template/header.php


![image](https://user-images.githubusercontent.com/101645216/172673637-bea5d39d-52e1-42df-8aef-9f1b8df8cccc.png)


File app/view/template/footer.php


![image](https://user-images.githubusercontent.com/101645216/172673904-88d0e5fc-adb4-4c5a-9794-cccd5403291c.png)

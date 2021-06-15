# Praktikum 11 (Pemrograman Web)
## Dimas Reza Nugraha
## 311910431
## TI.19.A.2
## Universitas Pelita Bangsa

## Langkah-Langkah Praktikum
Sebelum memulai menggunakan **Framework Codeigniter**, perlu dilakukan konfigurasi pada webserver. Beberapa ekstensi **PHP** perlu diaktifkan untuk kebutuhan pengembangan **Codeigniter 4**.

* **php-json** ekstension untuk bekerja dengan **JSON;**
* **php-mysqlnd** native driver untuk **MySQL;**
* **php-xml** ekstension untuk bekerja dengan **XML;**
* **php-intl** ekstensi untuk membuat aplikasi **multibahasa;**
* **libcurl** (opsional), jika ingin pakai **Curl**

### Langkah 1
#### Mengaktifkan Ekstensi
Aktifkan ekstensi tersebut melalui **XAMPP Control Panel** pada bagian **Apache** dengan cara klik **Config** -> **PHP.ini** seperti berikut.

![SS LANGKAH 1](https://user-images.githubusercontent.com/56240719/122015374-3fb80d00-cdea-11eb-8bbc-fcc4e8791281.png)

Lalu pada bagian **extention**, hilangkan tanda ; (titik koma) pada ekstensi yang akan diaktifkan seperti berikut. Kemudian simpan kembali filenya dan restart **Apache** web server.
![SS LANGKAH 1 (TAMBAHAN)](https://user-images.githubusercontent.com/56240719/122016937-b7d30280-cdeb-11eb-8525-200dc49feb2b.png)

### Langkah 2
#### Instalasi CodeIgniter 4
* **Codeigniter** dapat didownload dari website https://codeigniter.com/download
* Extrak file zip **Codeigniter** ke direktori **htdocs/lab11_php_ci**.
* Ubah nama directory **framework-4.x.xx** menjadi **ci4**.
* Buka browser dengan alamat http://localhost/lab11_php_ci/ci4/public/
Untuk melakukan instalasi **Codeigniter 4** dapat dilakukan dengan dua cara, yaitu cara manual dan menggunakan  ***composer***. Pada praktikum ini kita menggunakan  cara manual seperti berikut.
![SS LANGKAH 2](https://user-images.githubusercontent.com/56240719/122050220-76ebe580-ce0d-11eb-8129-b984a4fb1ab8.png)

### Langkah 3
#### Menjalankan CLI (Command Line Interface)
**Codeigniter 4** menyediakan **CLI** untuk mempermudah proses **development**. Untuk mengakses **CLI** buka **terminal/command prompt**, lalu arahkan lokasi direktori sesuai dengan direktori kerja project dibuat **(C:\xampp\htdocs\Lab11_php_ci\ci4).** Kemudian setelah itu jalankan perintah untuk memanggil **CLI Codeigniter** seperti berikut.
![SS LANGKAH 3](https://user-images.githubusercontent.com/56240719/122075274-25028a00-ce24-11eb-9c88-27ff43f70731.png)

### Langkah 4
#### Mengaktifkan Mode Debugging
**Codeigniter 4** menyediakan fitur **debugging** untuk memudahkan **developer** untuk mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program. Secara default fitur ini belum aktif. Ketika terjadi error pada aplikasi akan ditampilkan pesan kesalahan seperti berikut.
![SS LANGKAH 4](https://user-images.githubusercontent.com/56240719/122084376-f7b9da00-ce2b-11eb-8860-9d6718fad6c7.png)

Semua jenis error akan ditampilkan sama. Untuk memudahkan mengetahui jenis errornya, maka perlu mengaktifkan mode **debugging** dengan mengubah nilai konfigurasi pada environment variable **CI_ENVIRONMENT** menjadi **development.** Kemudian mengubah nama file **env** menjadi **.env** lalu setelah itu  buka  file  tersebut  dan  ubah  nilai  variable **CI_ENVORNMENT** menjadi **development.** Setelah mengubah nilai konfigurasi pada environment variable **CI_ENVIRONMENT** menjadi **development.** maka hapus tanda tagar **(#)** pada awal baris **CI_ENVIRONMENT.** Dan yang terakhir, ubah kode pada file **app/Controller/Home.php** kemudian hilangkan titik koma **(;)** pada akhir kode seperti berikut.
![SS LANGKAH 4 (Tambahan 1)](https://user-images.githubusercontent.com/56240719/122088232-bf1bff80-ce2f-11eb-8e16-37b089e50d13.png)

Maka hasilnya akan terjadi error seperti berikut. 
![SS LANGKAH 4 (Tambahan 2)](https://user-images.githubusercontent.com/56240719/122105698-49219380-ce43-11eb-8161-78f221bc8bba.png)

### Langkah 5
#### Membuat Route Baru.
Menambahkan kode di dalam **Routes.php** seperti berikut.
![SS LANGKAH 5](https://user-images.githubusercontent.com/56240719/122092856-9ba78380-ce34-11eb-9623-3e28a50902d4.png)

Untuk mengetahui **route** yang ditambahkan sudah benar, buka **CLI** dan jalankan perintah berikut.
![SS LANGKAH 5 (TAMBAHAN)](https://user-images.githubusercontent.com/56240719/122093214-0953af80-ce35-11eb-9d3f-9869d00ef84a.png)

Selanjutnya coba akses **route** yang telah dibuat dengan mengakses alamat url http://localhost:8080/about seperti berikut. Maka hasilnya akan terjadi error, yang artinya file/page tersebut tidak ada. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih dahulu **Contoller** yang sesuai dengan **routing** yang dibuat yaitu **Contoller Page.**
![SS LANGKAH 5 (Tambahan 2)](https://user-images.githubusercontent.com/56240719/122094634-93e8de80-ce36-11eb-8d80-1f6e9cbf8e9e.png)

### Langkah 6
#### Membuat Controller
Selanjutnya adalah membuat **Controller Page.**  Buat **file** baru dengan nama **page.php** pada direktori **Controller** kemudian isi kodenya seperti berikut.
![SS LANGKAH 6](https://user-images.githubusercontent.com/56240719/122095683-e1b21680-ce37-11eb-9c6b-dc885c4b0b8c.png)

### Langkah 7
#### Auto Routing
Secara default fitur *autoroute* pada **Codeiginiter** sudah aktif. Untuk mengubah status *autoroute* dapat mengubah nilai variabelnya. Untuk menonaktifkan ubah nilai **true** menjadi **false.**
Kemudian tambahkan method baru pada **Controller Page** seperti berikut.
Method ini belum ada pada **routing**, sehingga cara mengaksesnya dengan menggunakan alamat: http://localhost:8080/page/tos
![SS LANGKAH 7](https://user-images.githubusercontent.com/56240719/122097697-2939a200-ce3a-11eb-9b6d-505642200b14.png)

### Langkah 8
#### Membuat View
Selanjutnya adalah membuat **view** untuk tampilan web agar lebih menarik. Buat file baru dengan nama **about.php** pada direktori view **(app/view/about.php)** kemudian isi kodenya seperti berikut.
Kemudian ubah method **about** pada class **Controller Page** menjadi seperti berikut.
![SS LANGKAH 8](https://user-images.githubusercontent.com/56240719/122099246-fbedf380-ce3b-11eb-8e72-6ac1cead56c0.png)
Maka hasilnya akan seperti berikut.
![SS LANGKAH 8 (TAMBAHAN)](https://user-images.githubusercontent.com/56240719/122099455-335ca000-ce3c-11eb-93a5-78f4d9324ea6.png)

### Langkah 9
### Membuat Layout Web dengan CSS
Pada dasarnya layout web dengan **css** dapat diimplementasikan dengan mudah pada **Codeigniter.** Yang perlu diketahui adalah pada **Codeigniter 4** file yang menyimpan asset **css** dan **javascript** terletak pada direktori public. Buat file **css** pada direktori public dengan nama **style.css** seperti berikut.
![SS LANGKAH 9](https://user-images.githubusercontent.com/56240719/122100366-4cb21c00-ce3d-11eb-846d-662dcec93cee.png)

Kemudian buat folder **template** pada direktori **view** kemudian buat file **header.php** dan **footer.php** seperti berikut.
![SS LANGKAH 9 (TAMBAHAN)](https://user-images.githubusercontent.com/56240719/122100733-b16d7680-ce3d-11eb-97a2-9892e2c78661.png)

Maka hasilnya seperti berikut.
![SS LANGKAH 9 (TAMBAHAN 2)](https://user-images.githubusercontent.com/56240719/122101546-a109cb80-ce3e-11eb-8adc-67e46d713885.png)


## Pertanyaan dan Tugas
Lengkapi kode program untuk menu lainnya yang ada pada **Controller Page**, sehingga semua **link** pada **navigasi header** dapat menampilkan tampilan dengan layout yang sama.

## Hasilnya
![SS JAWABAN](https://user-images.githubusercontent.com/56240719/122105421-f3e58200-ce42-11eb-976d-d013cc0d30b2.png)
![SS JAWABAN 2](https://user-images.githubusercontent.com/56240719/122105443-fa73f980-ce42-11eb-8c8d-72399685595d.png)




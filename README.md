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

Kemudian buat folder **template** pada direktori **view** ke mudian buat file **header.php** dan **footer.php** seperti berikut.
![SS LANGKAH 9 (TAMBAHAN)](https://user-images.githubusercontent.com/56240719/122100733-b16d7680-ce3d-11eb-97a2-9892e2c78661.png)

Maka hasilnya seperti berikut.
![SS LANGKAH 9 (TAMBAHAN 2)](https://user-images.githubusercontent.com/56240719/122101546-a109cb80-ce3e-11eb-8adc-67e46d713885.png)


## Pertanyaan dan Tugas
Lengkapi kode program untuk menu lainnya yang ada pada **Controller Page**, sehingga semua **link** pada **navigasi header** dapat menampilkan tampilan dengan layout yang sama.

## Hasilnya
![SS JAWABAN](https://user-images.githubusercontent.com/56240719/122105421-f3e58200-ce42-11eb-976d-d013cc0d30b2.png)
![SS JAWABAN 2](https://user-images.githubusercontent.com/56240719/122105443-fa73f980-ce42-11eb-8c8d-72399685595d.png)

# Praktikum 12: Framework Lanjutan (CRUD) - Pemrograman Web
## Langkah-langkah Praktikum
### Persiapan
Untuk memulai membuat aplikasi CRUD sederhana, yang perlu disiapkan adalah database server menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan melalui XAMPP seperti berikut.
![SS XAMPP](https://user-images.githubusercontent.com/56240719/122888019-a483e200-d36b-11eb-8eab-73740d9e6e86.png)

### Langkah 1
Membuat database kemudian membuat Tabel dan masukkan kode pada database query seperti berikut.
![SS LANGKAH 1](https://user-images.githubusercontent.com/56240719/122888714-4c011480-d36c-11eb-8781-24651e1e6dd5.png)

### Langkah 2
#### Konfigurasi koneksi database
Selanjutnya membuat konfigurasi untuk menghubungkan dengan database server. Kemudian melakukan konfigurasi dengan cara mengubah beberapa kode pada file `htdocs\lab11_php_ci\ci4\.env.` Lalu cari pada line **DATABASE** dan hilangkan tanda pagar (`#`) didepan seperti berikut ini. 
![SS LANGKAH 2](https://user-images.githubusercontent.com/56240719/122949560-f47f9a80-d3a5-11eb-9223-cee1b01ed023.png)

### Langkah 3
#### Membuat Model
Selanjutnya adalah membuat Model untuk memproses data **Artikel**. Buat file baru pada direktori **app/Models** dengan nama **ArtikelModel.php** lalu masukkan kode seperti berikut.
![SS LANGKAH 3](https://user-images.githubusercontent.com/56240719/122951544-8d62e580-d3a7-11eb-9c66-d7f26404f903.png)

### Langkah 4
#### Membuat Controller
Buat `Controller` baru dengan nama **Artikel.php** pada direktori **app/Controllers** lalu masukkan kode seperti berikut. 
![SS LANGKAH 4](https://user-images.githubusercontent.com/56240719/122952356-30b3fa80-d3a8-11eb-9975-c7da435e93c7.png)

### Langkah 5
#### Membuat View
Buat folder baru dengan nama **artikel** pada direktori **app/views**, kemudian buat file baru dengan nama **index.php** seperti berikut.
![SS LANGKAH 5](https://user-images.githubusercontent.com/56240719/122953089-a5873480-d3a8-11eb-87e3-9125aa82c0ef.png)

Selanjutnya buka browser kembali, dengan mengakses url http://localhost:8080/artikel maka hasilnya akan seperti berikut.
![SS LANGKAH 5 (TAMBAHAN)](https://user-images.githubusercontent.com/56240719/122953334-d5363c80-d3a8-11eb-9ca2-7e19b982353a.png)

Terlihat belum ada data yang diampilkan. Kemudian coba tambahkan beberapa data pada database query agar dapat ditampilkan datanya seperti berikut.
![SS LANGKAH 5 (TAMBAHAN 2)](https://user-images.githubusercontent.com/56240719/122955416-4b876e80-d3aa-11eb-8231-062bcbabee5c.png)

Lalu refresh kembali browser, sehingga akan ditampilkan hasilnya seperti berikut.
![SS LANGKAH 5 (TAMBAHAN 3)](https://user-images.githubusercontent.com/56240719/122955891-b9cc3100-d3aa-11eb-88d6-e917603ef5b7.png)

### Langkah 6
#### Membuat Tampilan Detail Artikel
Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. Tambahkan fungsi baru pada **Controller Artikel** dengan nama **view()** seperti berikut.
![SS LANGKAH 6](https://user-images.githubusercontent.com/56240719/122958662-1cbec780-d3ad-11eb-8462-af13a1beab01.png)

### Langkah 7
#### Membuat View Detail
Buat view baru untuk halaman detail dengan nama **app/views/artikel/detail.php** seperti berikut.
![SS LANGKAH 7](https://user-images.githubusercontent.com/56240719/122957224-edf42180-d3ab-11eb-8d6d-00b9268f3676.png)

### Langkah 8
#### Membuat Routing untuk artikel detail
Buka kembali file **app/config/Routes.php**, kemudian tambahkan `routing` untuk `artikel detail` maka hasilnya akan seperti berikut.
![SS LANGKAH 8](https://user-images.githubusercontent.com/56240719/122960792-f9484c80-d3ad-11eb-9b3c-64e52ef8895b.png)

### Langkah 9
#### Membuat Menu Admin
Menu `admin` adalah untuk proses `CRUD` data `artikel`. Buat method baru pada **Controller Artikel** dengan nama **admin_index()** seperti berikut.
![SS LANGKAH 9](https://user-images.githubusercontent.com/56240719/122967930-3237ef80-d3b5-11eb-9983-6fd69bb26db9.png)

Selanjutnya buat `view` untuk tampilan `admin` dengan nama **admin_index.php** seperti berikut.
![SS LANGKAH 9 (TAMBAHAN)](https://user-images.githubusercontent.com/56240719/122969149-898a8f80-d3b6-11eb-8e7b-ec3a2c1c726d.png)
![SS LANGKAH 9 (TAMBAHAN 2)](https://user-images.githubusercontent.com/56240719/122969183-914a3400-d3b6-11eb-94a0-d3d9ff880e9c.png)

Setelah itu tambahkan **routing** untuk menu `admin` seperti berikut.
![SS LANGKAH 9 (TAMBAHAN 3)](https://user-images.githubusercontent.com/56240719/122969531-f3a33480-d3b6-11eb-91d8-4beb016125bd.png)

Setelah itu buat `template header dan footer` baru untuk `Halaman Admin.` Kemudian buat file baru dengan nama **admin_header.php** pada direktori app/view/template seperti berikut.
![TAMBAHAN 1](https://user-images.githubusercontent.com/56240719/122972401-4df1c480-d3ba-11eb-85f8-5fa5b3b21457.png)

Lalu buat file baru lagi dengan nama **admin_footer.php** pada direktori **app/view/template** seperti berikut.
![TAMBAHAN 2](https://user-images.githubusercontent.com/56240719/122972608-86919e00-d3ba-11eb-9033-c1770c1ebe33.png)

Dan yang terakhir buat file baru lagi dengan nama **admin.css** pada direktori **ci4/public** untuk memperindah tampilan Halaman Admin seperti berikut.
![TAMBAHAN 3](https://user-images.githubusercontent.com/56240719/122973184-2818ef80-d3bb-11eb-906d-77079cedf5ad.png)
![TAMBAHAN 4](https://user-images.githubusercontent.com/56240719/122973209-2ea76700-d3bb-11eb-954f-d91c3dac3e0c.png)

Kemudian akses menu admin dengan url http://localhost:8080/admin/artikel seperti berikut.
![SS LANGKAH 9 (TAMBAHAN 4)](https://user-images.githubusercontent.com/56240719/122969690-20574c00-d3b7-11eb-9e46-083de84cbb76.png)


### Langkah 10
#### Menambah Data Artikel
Tambahkan fungsi/method baru pada **Controller Artikel** dengan nama **add()** seperti berikut.
![SS LANGKAH 10](https://user-images.githubusercontent.com/56240719/122969914-6b715f00-d3b7-11eb-90a7-84f367a3f685.png)

Kemudian buat `view` untuk form tambah dengan nama **form_add.php** seperti berikut.
![SS LANGKAH 10 (TAMBAHAN)](https://user-images.githubusercontent.com/56240719/122970228-d6229a80-d3b7-11eb-9847-803140827d04.png)

Setelah itu, lalu klik **Tambah Artikel** pada menu **Halaman Admin** Maka hasilnya akan seperti berikut.
![SS LANGKAH 10 (TAMBAHAN 2)](https://user-images.githubusercontent.com/56240719/122970590-50531f00-d3b8-11eb-9753-1042ef352757.png)

### Langkah 11
#### Mengubah Data
Tambahkan fungsi/method baru pada **Controller Artikel** dengan nama **edit()** seperti berikut.
![SS LANGKAH 10 (TAMBAHAN 3)](https://user-images.githubusercontent.com/56240719/122970873-98724180-d3b8-11eb-910b-4b8e21dd7e3e.png)

Kemudian buat `view` untuk form tambah dengan nama **form_edit.php**
![SS LANGKAH 10 (TAMBAHAN 4)](https://user-images.githubusercontent.com/56240719/122971032-c8b9e000-d3b8-11eb-95bd-5d99fc0a788b.png)

Setelah itu, lalu klik **Ubah** pada salah satu judul artikel, maka hasilnya akan seperti berikut.
![SS LANGKAH 10 (TAMBAHAN 5)](https://user-images.githubusercontent.com/56240719/122971416-3960fc80-d3b9-11eb-9639-18f9a2c95bb8.png)

### Langkah 12
#### Menghapus Data
Tambahkan fungsi/method baru pada **Controller Artikel** dengan nama **delete()** seperti berikut.  
![SS LANGKAH 11](https://user-images.githubusercontent.com/56240719/122971723-8ba21d80-d3b9-11eb-8257-adefaa1006a4.png)

# Praktikum 13: Framework Lanjutan (Modul Login)
## Langkah-langkah Praktikum
### Persiapan
Untuk memulai membuat modul Login, yang perlu dipersiapkan adalah database server menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan melalui XAMPP seperti berikut.
![SS XAMPP](https://user-images.githubusercontent.com/56240719/123578693-8b15e680-d800-11eb-98c5-6c1af43575a7.png)

### Langkah 1
#### Membuat Tabel User
Membuat tabel user pada database `lab_ci4` seperti berikut.
![SS LANGKAH 1](https://user-images.githubusercontent.com/56240719/123579110-6e2de300-d801-11eb-99fd-fa62130f696d.png)

### Langkah 2
#### Membuat Model User
Selanjutnya adalah membuat Model untuk memproses data Login. Buat file baru pada direktori **app/Models** dengan nama **UserModel.php** dan masukkan kode seperti berikut. 
![SS LANGKAH 2](https://user-images.githubusercontent.com/56240719/123579535-4723e100-d802-11eb-8962-e1b0ea98645a.png)

### Langkah 3
#### Membuat Controller User
Buat Controller baru dengan nama **User.php** pada direktori **app/Controllers**. Kemudian tambahkan method **index()** untuk menampilkan daftar user, dan method **login()** untuk proses login dan masukkan kode seperti berikut.
![SS LANGKAH 3](https://user-images.githubusercontent.com/56240719/123580549-4a1fd100-d804-11eb-83c1-0698c089cc75.png)
![SS LANGKAH 3 (TAMBAHAN)](https://user-images.githubusercontent.com/56240719/123580577-57d55680-d804-11eb-8406-d08228861f14.png)

### Langkah 4
#### Membuat View Login
Buat folder baru dengan nama **user** pada direktori **app/views**, kemudian buat file baru dengan nama **login.php** dan masukkan kode seperti berikut.
![SS LANGKAH 4](https://user-images.githubusercontent.com/56240719/123580877-e649d800-d804-11eb-8e18-0e34da366f2a.png)

### Langkah 5
#### Membuat Database Seeder
Database seeder digunakan untuk membuat data dummy. Untuk keperluan ujicoba modul login, kita perlu memasukkan data user dan password kedalam database. Untuk itu buat database seeder untuk tabel user. Buka **CLI**, kemudian ketik perintah berikut:
![SS LANGKAH 5](https://user-images.githubusercontent.com/56240719/123581354-e8606680-d805-11eb-8806-7cb4c6373eb1.png)

Selanjutnya, buka file **UserSeeder.php** yang berada di lokasi direktori **/app/Database/Seeds/UserSeeder.php** kemudian isi dengan kode berikut:
![SS LANGKAH 5 (TAMBAHAN)](https://user-images.githubusercontent.com/56240719/123581573-66247200-d806-11eb-8bd2-4e85b68e793b.png)

Selanjutnya buka kembali CLI dan ketik perintah berikut:
![SS LANGKAH 5 (TAMBAHAN 2)](https://user-images.githubusercontent.com/56240719/123581919-14301c00-d807-11eb-8e9b-6d15ba670e43.png)

Selanjutnya buka url http://localhost:8080/user/login seperti berikut:
![SS LANGKAH 5 (TAMBAHAN 3)](https://user-images.githubusercontent.com/56240719/123582957-f663b680-d808-11eb-90a9-787b2311d96a.png)

Namun sebelum mengakses urlnya, pastikan untuk menjalankan perintah **php spark serve** terlebih dahulu untuk menjalankan program **ci4** di **port 8080** dengan cara membuka **CLI** kemudian ketik perintah berikut:
![SS LANGKAH 5 (TAMBAHAN 4)](https://user-images.githubusercontent.com/56240719/123583414-c10b9880-d809-11eb-8e3d-2a8532c23002.png)

### Langkah 6
#### Menambahkan Auth Filter
Selanjutnya membuat filter untuk halaman admin. Buat file baru dengan nama **Auth.php** pada direktori **app/Filters** dan masukkan kode seperti berikut.
![SS LANGKAH 6](https://user-images.githubusercontent.com/56240719/123584406-80ad1a00-d80b-11eb-9021-5744ec926008.png)

Selanjutnya buka file **app/Config/Filters.php** tambahkan kode berikut:
![SS LANGKAH 6 (TAMBAHAN)](https://user-images.githubusercontent.com/56240719/123584581-ce298700-d80b-11eb-84d0-635c6506e0fb.png)

Selanjutnya buka file **app/Config/Routes.php** dan sesuaikan kodenya seperti berikut.
![SS LANGKAH 6 (TAMBAHAN 2)](https://user-images.githubusercontent.com/56240719/123584761-206aa800-d80c-11eb-92fd-56b545a67986.png)

### Langkah 7
### Fungsi Logout
Tambahkan method logout pada **Controller User** dan masukkan kode seperti berikut:
![SS LANGKAH 7](https://user-images.githubusercontent.com/56240719/123586106-72acc880-d80e-11eb-803c-e5c32601a6df.png)

### Langkah 8
### Tombol Logout
Menambahkan tombol **Logout** pada menu **header admin** dengan cara ke direktori **app\view\template** lalu buka file **admin_header.php** dan masukkan kode seperti berikut.
![SS LANGKAH 8](https://user-images.githubusercontent.com/56240719/123586662-42b1f500-d80f-11eb-83e9-0d48c28d3375.png)

Selanjutnya, tambahkan route logout dengan cara ke direktori **app\Config\Routes.php** dan masukkan kode seperti berikut.
![SS LANGKAH 8 (TAMBAHAN)](https://user-images.githubusercontent.com/56240719/123586866-945a7f80-d80f-11eb-8859-86e47548977f.png)

Setelah semuanya selesai, maka lakukan percobaan untuk mengakses menu admin dengan cara buka url dengan alamat http://localhost:8080/admin/artikel ketika alamat tersebut diakses, maka akan muncul halaman login seperti berikut.
![SS LANGKAH 8 (TAMBAHAN 2)](https://user-images.githubusercontent.com/56240719/123587200-25315b00-d810-11eb-86c3-7f404b5eb13f.png)

Berikut adalah halaman utama (menu admin) yang sudah ditambahkan tombol **Logout** untuk keluar dari menu ini dan kembali ke menu **Login**.
![SS LANGKAH 8 (TAMBAHAN 3)](https://user-images.githubusercontent.com/56240719/123587453-85280180-d810-11eb-8136-fa3f6880ef7f.png)



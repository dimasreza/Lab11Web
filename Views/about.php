<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <?= $this->include('template/header'); ?>
    <section id="about">
        <div class="row">
            <img src="Dimas.PNG" title="Dimas Reza Nugraha" alt="Dimas Reza Nugraha" class="image-circle" width="200" style="float: left; border: 2px solid black;">
            <h1>Dimas Reza Nugraha</h1>
            <p>Hai, Perkenalkan nama saya Dimas Reza Nugraha. Umur Saya 20 tahun. Saya adalah seorang mahasiswa Universitas Pelita Bangsa Jurusan Teknik Informatika. Saya lahir di Kebumen, 22 Januari 2001. Saat ini saya tinggal di Tegal Gede, Cikarang Selatan, Kabupaten Bekasi.
            </p>
        </div>
    </section>
    <?= $this->include('template/footer'); ?>
</body>
</html>
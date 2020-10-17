<html>

<head>
    <title>Luwe Food</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/HOME.css'); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <!--NAVBAR-->

    <div class="topnav" id="myTopnav">
        <img src="<?= base_url('assets/img/logo02.png'); ?>" width="60" height="60" alt="..">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <div class="navbar float-right">
            <span class="mr-2 text-primary"><?= $user['name']; ?></span>
            <img class="img-profile rounded-circle" width="50" height="50" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
        </div>
    </div>

    <!--NAVBAR IMAGE-->
    <section id=" horizontal_image">
        <div class="container-fluid">
            <div class="diagonal" id="d0">
                <img src="Picture/bakso%20presiden.jpg" />
                <p class="overlay">
                    TEST
                </p>
            </div>
            <div class="diagonal" id="d1">
                <img src="Picture/pia%20mangkok.jpg" />
                <p class="overlay">
                </p>
            </div>

            <div class="diagonal" id="d2">
                <img src="Picture/Ketan-Susu-Legenda-Batu-Malang-Tampak-Luar.jpg" />
                <p class="overlay">
                </p>
            </div>
            <div class="diagonal" id="d3">
                <img src="Picture/bebek.jpg" />
                <p class="overlay">
                    TEST
                </p>
            </div>
        </div>
    </section>
    <!--Introduction---->
    <section id="about">
        <div classs="container">
            <div class="row no-gutters">
                <div class="col-12 col-sm-6 col-md-8">
                    <div class="about-title">
                        <h2>APA ITU LUWE.COM?</h2>
                    </div>
                    <div class="about-content">
                        Luwe.com adalah sebuah website yang menyediakan berbagai informasi tentang kuliner terutama di kota Malang. Kami memberikan informasi rekomendasi kuliner di kota Malang hingga yang paling jarang disorot, informasi promo dan diskon bagi kalian yang ingin berhemat dan tempat oleh-oleh untuk kerabat di kampung halaman. Selain itu kami juga menyediakan artikel tentang kuliner yang gak ketinggalan zaman.
                    </div>
                </div>
                <img src="Picture/monas.png" class="img-fluid" alt="Responsive image">
            </div>
        </div>
    </section>



    <!----Rekomendasi---->
    <section id="services">
        <div class="container">
            <h1>Rekomendasi</h1>
            <div class="row row-cols-2 row-cols-md-4">
                <div class="col mb-4">
                    <div class="card">
                        <a href="#">
                            <img src="Picture/bakso%20presiden.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Bakso Presiden</h5>
                                <p class="card-text">Bakso Boraks Mantap Mantap</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card">
                        <a href="#">
                            <img src="Picture/pia-mangkok.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pia Mangkok</h5>
                                <p class="card-text">Pia mantap</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card">
                        <a href="#">
                            <img src="Picture/Mie-Gajah-Mada.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Mie Gajah Mada</h5>
                                <p class="card-text">Mie Panjang-panjang</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card">
                        <a href="#">
                            <img src="Picture/rsz_bakso.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Bakso</h5>
                                <p class="card-text">Bakso Sapi</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!---PROMO TEMPAT MAKAN-->
    <section id="rec_promo">
        <div class="container">
            <h1>DOMPET LAPAR, PERUT JANGAN</h1>
            <p>Cashback berbagai merchant menantimu</p>
            <div class="row row-cols-1 row-cols-md-4">
                <div class="col mb-4">
                    <div class="card" id="01">
                        <a href="#">
                            <img src="Picture/cashback dana.png" class="card-img-top" alt="...">
                            <div class="card01-body">
                                <h5 class="card-title">Dana Anniversary 2tahun</h5>
                                <p class="card-text">..</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card">
                        <a href="#">
                            <img src="Picture/ovo cb.jpg" class="card-img-top" alt="...">
                            <div class="card01-body">
                                <h5 class="card-title">Promo Hari nasional</h5>
                                <p class="card-text">..</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card">
                        <a href="#">
                            <img src="Picture/cashback shopepay.png" class="card-img-top" alt="...">
                            <div class="card01-body">
                                <h5 class="card-title">Shopepay Cashback makan</h5>
                                <p class="card-text">..</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card">
                        <a href="#">
                            <img src="Picture/cbb gopay.png" class="card-img-top" alt="...">
                            <div class="card01-body">
                                <h5 class="card-title">Memperingati 5 tahun gojek</h5>
                                <p class="card-text">..</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Artikel-->
    <section id="artikel">
        <div class="container">
            <h1>Artikel</h1>
            <div class="row row-cols-1 row-cols-md-1">
                <div class="col mb-1">
                    <div class="content-box">
                        <img src="Picture/bili1.jpg" class="card-img-top" alt="...">
                        <div class="content">
                            <h5 style="font-size: 3vw;">Billie Halim</h5>
                            <p style="font-size: 1.5vw;">Setelah makan bakso boraks saya bisa fly</p>
                        </div>
                    </div>
                    <div class="content-box">
                        <img src="Picture/harya2.jpg" class="card-img-top" alt="...">
                        <div class="content">
                            <h5 style="font-size: 3vw;">Harrya</h5>
                            <p style="font-size: 1.5vw;">Pia Mangkok Malang mantap-mantap</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>


</body>

</html>
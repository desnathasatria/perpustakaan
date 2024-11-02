    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center bg-primary">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->

    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item bg-primary">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-start">
                                <h4 class="text-white text-uppercase fw-bold mb-4">Selamat Datang di Perpustakaan Kota Kediri</h4>
                                <h1 class="text-white display-4 mb-4">Temukan Dunia Pengetahuan & Kesenangan Membaca!</h1>
                                <p class="text-white mb-4">Nikmati koleksi buku yang beragam, ruang baca yang nyaman, dan berbagai kegiatan literasi yang menarik untuk semua kalangan. Jadikan Perpustakaan Kota Kediri tujuan utama Anda untuk inspirasi dan ilmu pengetahuan!</p>
                                <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="https://youtu.be/E1d3NGh_fCE?si=QJoAU7_NKVRiH1tX">
                                        <i class="fas fa-play-circle me-2"></i> Lihat Video Perpustakaan
                                    </a>
                                    <a class="btn btn-outline-light rounded-pill py-3 px-4 px-md-5" href="https://inlislite.perpusnas.go.id/">Jelajahi Galeri</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 animated fadeInRight">
                            <div class="carousel-img" style="object-fit: cover;">
                                <img src="<?= base_url() ?>assets/img/logo.png" class="img-fluid w-100" alt="Perpustakaan Kota Kediri">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Start Gallery Section -->
    <div class="container-fluid gallery py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Galeri Perpustakaan</h4>
                <h1 class="display-4 mb-4">Dokumentasi Galeri</h1>
                <p class="mb-0">Berikut adalah dokumentasi galeri yang telah dilaksanakan di Perpustakaan Kota Kediri.</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="<?= base_url() ?>assets/img/ruang3.jpg" class="img-fluid w-100 rounded" alt="Ruang Literasi" data-bs-toggle="modal" data-bs-target="#imageModal" data-img-src="<?= base_url() ?>assets/img/ruang3.jpg" data-img-title="Kegiatan Literasi">
                        </div>
                        <div class="gallery-content p-4">
                            <h4 class="mb-2">Ruang Literasi</h4>
                            <p class="mb-2">Berikut merupakan Ruang Listerasi yang terdapat pada Perpustakaan Kota Kediri</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="<?= base_url() ?>assets/img/lobby.jpg" class="img-fluid w-100 rounded" alt="Lobby" data-bs-toggle="modal" data-bs-target="#imageModal" data-img-src="<?= base_url() ?>assets/img/lobby.jpg" data-img-title="Lobyy">
                        </div>
                        <div class="gallery-content p-4">
                            <h4 class="mb-2">Lobby</h4>
                            <p class="mb-2">Berikut merupakan Lobby yang terdapat pada Perpustakaan Kota Kediri</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="<?= base_url() ?>assets/img/pelayanan.jpg" class="img-fluid w-100 rounded" alt="Bagian Pelayanan" data-bs-toggle="modal" data-bs-target="#imageModal" data-img-src="<?= base_url() ?>assets/img/pelayanan.jpg" data-img-title="Pelayanan">
                        </div>
                        <div class="gallery-content p-4">
                            <h4 class="mb-2">Bagian Pelayanan</h4>
                            <p class="mb-2">Berikut merupakan Bagian Pelayanan yang terdapat pada Perpustakaan Kota Kediri</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="<?= base_url() ?>assets/img/rakbuku2.jpg" class="img-fluid w-100 rounded" alt="Rak Buku" data-bs-toggle="modal" data-bs-target="#imageModal" data-img-src="<?= base_url() ?>assets/img/rakbuku2.jpg" data-img-title="Rak Buku">
                        </div>
                        <div class="gallery-content p-4">
                            <h4 class="mb-2">Rak Buku</h4>
                            <p class="mb-2">Berikut merupakan Rak Buku yang terdapat pada Perpustakaan Kota Kediri</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="<?= base_url() ?>assets/img/depan.jpg" class="img-fluid w-100 rounded" alt="Halaman Depan" data-bs-toggle="modal" data-bs-target="#imageModal" data-img-src="<?= base_url() ?>assets/img/depan.jpg" data-img-title="Halaman Depan">
                        </div>
                        <div class="gallery-content p-4">
                            <h4 class="mb-2">Halaman Depan</h4>
                            <p class="mb-2">Berikut merupakan Halaman Depan yang terdapat pada Perpustakaan Kota Kediri</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="<?= base_url() ?>assets/img/mobil.jpg" class="img-fluid w-100 rounded" alt="Mobil Perpustakaan Keliling" data-bs-toggle="modal" data-bs-target="#imageModal" data-img-src="<?= base_url() ?>assets/img/mobil.jpg" data-img-title="Perppustakaan Kelilinh">
                        </div>
                        <div class="gallery-content p-4">
                            <h4 class="mb-2">Mobil Perpustakaan Keliling</h4>
                            <p class="mb-2">Berikut merupakan Mobil Perpustakaan Keliling yang terdapat pada Perpustakaan Kota Kediri</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery Section -->

    <!-- Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="" class="img-fluid w-100" id="modalImage" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Service Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Kegiatan Perpustakaan Umum Kota Kediri</h4>
                <h1 class="display-4 mb-4">Dokumentasi Kegiatan</h1>
                <p class="mb-0">Berikut adalah dokumentasi kegiatan yang telah dilaksanakan di Perpustakaan Kota Kediri
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="<?= base_url() ?>assets/img/keliling.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="<?= base_url("Front_page/kegiatan_1") ?>" class="d-inline-block h4 mb-4">Perpustakaan Keliling</a>
                                <p class="mb-4">Kegiatan Perpustakaan Keliling yang dilakukan oleh Perpustakaan Kota Kediri</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="<?= base_url() ?>assets/img/literasi.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="<?= base_url("Front_page/kegiatan_2") ?>"" class=" d-inline-block h4 mb-4">Literasi Buku Bersama</a>
                                <p class="mb-4">Kegiatan Listerasi Buku bersama yang dilakukan oleh Perpustakaan Kota Kediri</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="<?= base_url() ?>assets/img/lomba.jpeg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="<?= base_url("Front_page/kegiatan_3") ?>"" class=" d-inline-block h4 mb-4">Lomba</a>
                                <p class="mb-4">Kegiatan Lomba yang dilakukan oleh Perpustakaan Kota Kediri</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="<?= base_url() ?>assets/img/pentas.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="<?= base_url("Front_page/kegiatan_4") ?>"" class=" d-inline-block h4 mb-4">Pentas Seni</a>
                                <p class="mb-4">Kegiatan Pentas Seni yang dilakukan oleh Perpustakaan Kota Kediri</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var imageModal = document.getElementById('imageModal');
            imageModal.addEventListener('show.bs.modal', function(event) {
                var button = event.relatedTarget;
                var imgSrc = button.getAttribute('data-img-src');
                var imgTitle = button.getAttribute('data-img-title');
                var modalTitle = imageModal.querySelector('.modal-title');
                var modalImage = document.getElementById('modalImage');

                modalTitle.textContent = imgTitle;
                modalImage.src = imgSrc;
            });
        });
    </script>
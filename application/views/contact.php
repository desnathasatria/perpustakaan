<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Kontak</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active text-primary">Kontak</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Contact Start -->
<div class="container-fluid contact bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Kontak</h4>
            <h1 class="display-4 mb-4">Jika ada pertanyaan silahkan kirim pesan sekarang</h1>
        </div>
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="contact-img d-flex justify-content-center">
                    <div class="contact-img-inner">
                        <img src="<?= base_url() ?>assets/img/perpustakaan.jpeg" class="img-fluid w-100" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <div>
                    <h4 class="text-primary">Kirim pesan anda</h4>
                    <form id="contactForm">
                        <div class="row g-3">
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="nama_pengirim" name="nama_pengirim" placeholder="Nama Lengkap">
                                    <label for="nama_pengirim">Nama Lengkap</label>
                                </div>
                                <small class="text-danger pl-1 mb-1" id="error-nama_pengirim"></small>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0" id="email_pengirim" name="email_pengirim" placeholder="Email">
                                    <label for="email_pengirim">Email</label>
                                </div>
                                <small class="text-danger pl-1 mb-1" id="error-email_pengirim"></small>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0" placeholder="Leave a message here" id="pesan" name="pesan" style="height: 120px"></textarea>
                                    <label for="pesan">Pesan</label>
                                </div>
                                <small class="text-danger pl-1 mb-1" id="error-pesan"></small>
                            </div>
                            <div class="col-12">
                                <button type="button" class="btn btn-primary w-100 py-3" onclick="insert_message()">Kirim Pesan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 wow fadeInUp" data-wow-delay="0.2s">
                <div class="rounded">
                    <iframe class="rounded w-100"
                        style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.792088774346!2d112.01468981335377!3d-7.811820588437099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78573d779b34b3%3A0x401551f038d17616!2sPublic%20Library%20of%20Kediri%20City!5e0!3m2!1sen!2sid!4v1722348036179!5m2!1sen!2sid"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<!-- Kritik dan Saran Start -->
<div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-primary mb-4">Kritik dan Saran</h2>
            </div>
        </div>
        <div class="row" id="data_kritik_saran">
        </div>
        <div class="row">
            <div class="col-lg-12">
                <center>
                    <button type="button" id="btn_tampil_data" class="btn btn-primary">Tampilkan lebih banyak</button>
                </center>
            </div>
        </div>
    </div>
<!-- Kritik dan Saran End -->

<script>
    var base_url = '<?php echo base_url() ?>';
    var _controller = '<?= $this->router->fetch_class() ?>';
</script>
<script src="<?= base_url() ?>assets/js-custom/message.js"></script>
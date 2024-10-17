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
                    <?php echo form_open('front_page/insert_message', ['id' => 'contactForm']); ?>
                        <div class="row g-3">
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="nama_pengirim" name="nama_pengirim" placeholder="Nama Lengkap">
                                    <label for="nama_pengirim">Nama Lengkap</label>
                                </div>
                                <small class="text-danger pl-1 mb-1"><?php echo form_error('nama_pengirim'); ?></small>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0" id="email_pengirim" name="email_pengirim" placeholder="Email">
                                    <label for="email_pengirim">Email</label>
                                </div>
                                <small class="text-danger pl-1 mb-1"><?php echo form_error('email_pengirim'); ?></small>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0" placeholder="Leave a message here" id="pesan" name="pesan" style="height: 120px"></textarea>
                                    <label for="pesan">Pesan</label>
                                </div>
                                <small class="text-danger pl-1 mb-1"><?php echo form_error('pesan'); ?></small>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100 py-3">Kirim Pesan</button>
                            </div>
                        </div>
                    <?php echo form_close(); ?>
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
        <?php if(empty($kritik_saran)): ?>
            <p>Tidak ada kritik dan saran.</p>
        <?php else: ?>
            <?php foreach($kritik_saran as $item): ?>
                <div class="col-lg-6 mb-4">
                    <div class="p-4 bg-light rounded">
                        <h5><?php echo $item->name; ?></h5>
                        <p class="mb-1"><?php echo $item->message; ?></p>
                        <p class="text-muted">Tanggal: <?php echo $item->date_send; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <?php if(count($kritik_saran) < $total_count): ?>
        <div class="row">
            <div class="col-lg-12">
            </div>
        </div>
    <?php endif; ?>
</div>
<!-- Kritik dan Saran End -->

<script>
    var base_url = '<?php echo base_url() ?>';
    var _controller = '<?= $this->router->fetch_class() ?>';
</script>
<script src="<?= base_url() ?>assets/js-custom/message.js"></script>
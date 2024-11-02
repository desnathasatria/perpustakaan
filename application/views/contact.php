<!-- Contact Start -->
<div class="container-fluid contact bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Kontak</h4>
            <h1 class="display-4 mb-4">Jika ada pertanyaan silahkan kirim pesan sekarang</h1>
        </div>
        <div class="row g-5">
            <!-- Contact Form Section -->
            <div class="col-12 col-md-6 wow fadeInRight" data-wow-delay="0.4s">
                <div>
                    <h4 class="text-primary">Kirim pesan anda</h4>
                    <?php echo form_open_multipart('front_page/insert_message', ['id' => 'contactForm']); ?>
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
                            <div class="form-group">
                                <label for="image">Gambar (Optional)</label>
                                <input type="file" class="form-control border-0" id="image" name="image" accept="image/*">
                                <small class="text-muted">Format yang diizinkan: JPG, JPEG, PNG. Max size: 2MB</small>
                            </div>
                            <?php if (isset($error_upload)): ?>
                                <small class="text-danger pl-1 mb-1"><?php echo $error_upload; ?></small>
                            <?php endif; ?>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary w-100 py-3">Kirim Pesan</button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>

            <!-- Kritik dan Saran Display Section -->
            <div class="col-12 col-md-6" id="data_kritik_saran">
                <?php if (empty($kritik_saran)): ?>
                    <p>Tidak ada kritik dan saran.</p>
                <?php else: ?>
                    <?php foreach ($kritik_saran as $item): ?>
                        <div class="col-12 mb-4">
                            <div class="p-4 bg-light rounded">
                                <h5><?php echo $item->name; ?></h5>
                                <?php if (!empty($item->image)): ?>
                                    <div class="message-image mb-3 text-center">
                                        <img src="<?php echo base_url('uploads/messages/' . $item->image); ?>" class="img-fluid rounded" alt="Uploaded Image" style="max-width: 150px; max-height: 150px;">
                                    </div>
                                <?php endif; ?>
                                <p class="mb-1"><?php echo $item->message; ?></p>
                                <p class="text-muted">Tanggal: <?php echo $item->date_send; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<script>
    var base_url = '<?php echo base_url() ?>';
    var _controller = '<?= $this->router->fetch_class() ?>';
</script>
<script src="<?= base_url() ?>assets/js-custom/message.js"></script>

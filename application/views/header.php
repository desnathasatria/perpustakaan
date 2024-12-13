<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Warung Bureso</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <link href="<?= base_url('assets/img/logo.png') ?>" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/lib/animate/animate.min.css"/>
        <link href="<?= base_url() ?>assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>


        <!-- Customized Bootstrap Stylesheet -->
        <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
    </head>
    <body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid topbar px-0 px-lg-4 bg-light py-2 d-none d-lg-block">
        <div class="container">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <div class="ps-3">
                            <a href="mailto:example@gmail.com" class="text-muted small"><i class="fas fa-envelope text-primary me-2"></i>bureso@gmail.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex justify-content-end">
                        <div class="d-flex border-end border-primary pe-3">
                            <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

<!-- Navbar & Hero Start -->
<div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="#" class="navbar-brand p-0">
                <table>
                    <tr>
                        <td>
                            <img src="<?= base_url() ?>assets/img/logo.png" alt="Logo">
                        </td>
                        <td>
                            <h1 class="text-primary mb-0">Warung Bureso</h1>
                        </td>
                    </tr>
                </table>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-0 mx-lg-auto">
                    <a href="<?= base_url() ?>" class="nav-item nav-link <?= $this->uri->segment(1) == '' ? 'active' : '' ?>">Home</a>
                    <a href="<?= base_url("Front_page/profile") ?>" class="nav-item nav-link <?= $this->uri->segment(2) == 'profile' ? 'active' : '' ?>">Profil</a>
                    <a href="<?= base_url("Front_page/contact") ?>" class="nav-item nav-link <?= $this->uri->segment(2) == 'contact' ? 'active' : '' ?>">Kontak</a>
                </div>
            </div>
            <div class="d-none d-xl-flex flex-shrink-0 ps-4">
                <a href="#" class="btn btn-light btn-lg-square rounded-circle position-relative wow tada" data-wow-delay=".9s">
                    <i class="fa fa-phone-alt fa-2x"></i>
                    <div class="position-absolute" style="top: 7px; right: 12px;">
                        <span><i class="fa fa-comment-dots text-secondary"></i></span>
                    </div>
                </a>
                <div class="d-flex flex-column ms-3">
                    <span>Hubungi Kami</span>
                    <a href="tel: +6281252776657"><span class="text-dark">081252776657</span></a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar & Hero End -->
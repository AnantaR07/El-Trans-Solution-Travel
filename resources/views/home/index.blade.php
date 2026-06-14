@extends('layouts.app')

@section('content')


<section class="hero text-white">

    <div class="container">

        <div class="row align-items-center min-vh-100">

            <div class="col-lg-6">
                <span class="badge bg-warning text-dark px-3 py-2 mb-3">
                    ✈🚐 Travel • Wisata • Antar Jemput Bandara
                </span>

<h1 class="hero-title fw-bold mb-3">
    Jelajahi Madura
    <span class="text-warning">
        Bersama El Trans Solution Travel
    </span>
</h1>

                <p class="lead text-light opacity-75 mb-4">
                    Melayani perjalanan dari seluruh wilayah Sumenep menuju
                    Bandara Juanda Surabaya serta paket wisata ke destinasi
                    terbaik di Pulau Madura.
                </p>



            </div>

           <div class="col-lg-6 mt-5 mt-lg-0">

<div class="hero-info-card">

    <div class="hero-card-header">

        <span class="hero-badge">
            🚐 El Trans Solution TRAVEL
        </span>

        <h3 class="fw-bold mt-3 mb-2">
            Solusi Perjalanan Terbaik Anda
        </h3>

        <p class="text-muted mb-0">
            Travel reguler, private carter, dan tour wisata dengan armada nyaman dan pelayanan profesional.
        </p>

    </div>

<div class="hero-services mt-4">

    <a href="#booking" class="service-box text-decoration-none text-dark">
        <div class="service-icon">🚐</div>
        <div>
            <strong>Travel Reguler</strong>
            <small>Antar Kota & Bandara</small>
        </div>
    </a>

    <a href="#booking" class="service-box text-decoration-none text-dark">
        <div class="service-icon">🚗</div>
        <div>
            <strong>Private Carter</strong>
            <small>Fleksibel 24 Jam</small>
        </div>
    </a>

    <a href="#booking" class="service-box text-decoration-none text-dark">
        <div class="service-icon">🏝️</div>
        <div>
            <strong>Tour Wisata</strong>
            <small>Destinasi Terbaik Madura</small>
        </div>
    </a>

</div>

</div>
</div>

            </div>

        </div>

    </div>

</section>

<section id="booking" class="container search-box py-5">

    <div class="search-card">

        <div class="text-center mb-5">

            <span class="search-badge">
                🚐 Booking Travel Online
            </span>

            <h2 class="fw-bold mt-3 mb-2">
                Cari Perjalanan Impian Anda
            </h2>

<p class="text-muted mb-4">
    Layanan travel antar kota dan antar jemput bandara terpercaya.
</p>

            <div class="row g-3 justify-content-center">

                <div class="col-md-3 col-6">
                    <div class="mini-stat">
                        <h4>10</h4>
                        <span>Titik Jemput</span>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="mini-stat">
                        <h4>3</h4>
                        <span>Layanan Travel</span>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="mini-stat">
                        <h4>24 Jam</h4>
                        <span>Private Carter</span>
                    </div>
                </div>

            </div>

        </div>

        <div class="row g-4 justify-content-center align-items-end">

            <!-- Kecamatan Asal -->
<div class="col-lg-3">

<select id="asal" class="form-select form-select-lg custom-select" required>
    <option value="" disabled selected hidden>
        Titik Jemput
    </option>

    <option value="Sumenep">Sumenep</option>
    <option value="Pamekasan">Pamekasan</option>
    <option value="Sampang">Sampang</option>
    <option value="Bangkalan">Bangkalan</option>
    <option value="Surabaya">Surabaya</option>
    <option value="Sidoarjo">Sidoarjo</option>
    <option value="Mojokerto">Mojokerto</option>
    <option value="Malang">Malang</option>
    <option value="Pasuruan">Pasuruan</option>
    <option value="Gresik">Gresik</option>
    <option value="Lamongan">Lamongan</option>
</select>

</div>
            <!-- Tujuan -->
<div class="col-lg-3">

<select id="tujuan" class="form-select form-select-lg custom-select">
    <option value="" selected disabled>
        Pilih Tujuan
    </option>
</select>

</div>

            <!-- Tanggal -->
<div class="col-lg-2">


    <input
        type="date"
        class="form-control form-control-lg custom-input"
        value="{{ date('Y-m-d') }}"
        min="{{ date('Y-m-d') }}"
        name="tanggal">

</div>


            <!-- Button -->
            <div class="col-lg-3">

                <label class="form-label opacity-0">
                    Cari
                </label>

<button
    type="button"
    id="btnCari"
    class="btn btn-search btn-lg w-100">

    🔍 Cari Travel

</button>

            </div>
   </div>

        <hr class="my-5">
<!-- HASIL PENCARIAN -->
<div id="hasilPencarian" class="mt-5" style="display:none;">

    <div class="card border-0 shadow-lg rounded-4">

        <div class="card-header bg-primary text-white py-3">

            <h4 class="mb-0">
                🚐 Detail Perjalanan
            </h4>

        </div>

        <div class="card-body p-4">

            <div class="row">

                <div class="col-md-6 mb-3">

                    <h6 class="text-muted">
                        Lokasi Penjemputan
                    </h6>

                    <h5 id="hasilAsal" class="fw-bold">
                        -
                    </h5>

                </div>

                <div class="col-md-6 mb-3">

                    <h6 class="text-muted">
                        Tujuan
                    </h6>

                    <h5 id="hasilTujuan" class="fw-bold">
                        -
                    </h5>

                </div>

            </div>

            <hr>

            <h6 class="fw-bold mb-3">
                🕒 Pilih Jam Keberangkatan
            </h6>

           <div class="row g-3" id="jadwalContainer">

                <div class="col-md-3">
                    <button class="btn btn-outline-primary w-100 jam-btn">
                        06:00
                    </button>
                </div>

                <div class="col-md-3">
                    <button class="btn btn-outline-primary w-100 jam-btn">
                        09:00
                    </button>
                </div>

                <div class="col-md-3">
                    <button class="btn btn-outline-primary w-100 jam-btn">
                        13:00
                    </button>
                </div>

                <div class="col-md-3">
                    <button class="btn btn-outline-primary w-100 jam-btn">
                        18:00
                    </button>
                </div>

            </div>

            <input type="hidden" id="jamTerpilih">

            <div class="mt-4">

<button class="btn-booking w-100" id="btnPesan" class="btn-booking w-100">
    <div class="d-flex align-items-center justify-content-center gap-3">
        <div class="icon-circle">
            🚐
        </div>

        <div class="text-start">
            <div class="fw-bold fs-5">
                Pesan Sekarang
            </div>
            <small>
                Pilih jadwal & konfirmasi perjalanan
            </small>
        </div>

        <div class="ms-auto fs-4">
            →
        </div>
    </div>
</button>

            </div>

        </div>

    </div>

</div>

<div class="text-center mt-4 mb-4">

    <button
        type="button"
        id="btnPrivateCar"
        class="btn btn-success btn-lg px-5 py-4 shadow-lg rounded-4">

<div class="private-car-banner" id="btnPrivateCar">

    <div class="private-car-icon">
        🚗
    </div>

    <div class="private-car-content">

        <span class="badge bg-warning text-dark mb-2">
            TERSEDIA 24 JAM
        </span>

        <h4 class="fw-bold mb-2">
            Carter / Private Car
        </h4>

        <p class="mb-0">
            Antar Kota • Bandara • Wisata • Acara Keluarga • Perjalanan Bisnis
        </p>

    </div>

    <div class="private-car-arrow">
        →
    </div>

</div>

    </button>

</div>

<p class="text-center text-muted small mb-0 mt-3">
    Tidak menemukan lokasi tujuan yang Anda cari? Jangan khawatir, Anda dapat langsung menghubungi admin untuk pemesanan tiket serta konsultasi rute perjalanan.
</p> 
    </div>

</section>

<section class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <span class="badge bg-primary px-3 py-2 mb-3">
                ⭐ Keunggulan Kami
            </span>

            <h2 class="fw-bold display-6">
                Kenapa Memilih El Trans Solution Travel & Tour?
            </h2>

            <p class="text-muted fs-5">
                Memberikan pengalaman perjalanan yang aman, nyaman, dan terpercaya.
            </p>

        </div>

        <div class="row g-4">

            <!-- Armada -->
            <div class="col-lg-3 col-md-6">

                <div class="feature-card">

                    <div class="feature-icon">
                        🚐
                    </div>

                    <h5 class="fw-bold mt-4">
                        Armada Nyaman
                    </h5>

                    <p class="text-muted mb-0">
                        Armada bersih, full AC, kursi nyaman, dan rutin dalam perawatan.
                    </p>

                </div>

            </div>

            <!-- Tepat Waktu -->
            <div class="col-lg-3 col-md-6">

                <div class="feature-card">

                    <div class="feature-icon">
                        ⏰
                    </div>

                    <h5 class="fw-bold mt-4">
                        Tepat Waktu
                    </h5>

                    <p class="text-muted mb-0">
                        Jadwal keberangkatan teratur dan penjemputan sesuai waktu yang ditentukan.
                    </p>

                </div>

            </div>

            <!-- Wisata -->
            <div class="col-lg-3 col-md-6">

                <div class="feature-card">

                    <div class="feature-icon">
                        🏝️
                    </div>

                    <h5 class="fw-bold mt-4">
                        Tour Wisata
                    </h5>

                    <p class="text-muted mb-0">
                        Menjelajahi destinasi wisata populer Madura bersama tim berpengalaman.
                    </p>

                </div>

            </div>

            <!-- Support -->
            <div class="col-lg-3 col-md-6">

                <div class="feature-card">

                    <div class="feature-icon">
                        📞
                    </div>

                    <h5 class="fw-bold mt-4">
                        Support 24 Jam
                    </h5>

                    <p class="text-muted mb-0">
                        Customer service siap membantu pemesanan dan informasi kapan saja.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>
<section id="rute-tarif" class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <span class="badge bg-primary px-4 py-2 rounded-pill mb-3">
                🚐 Layanan El Trans Solution Travel
            </span>

            <h2 class="fw-bold display-6">
                Pilih Layanan Perjalanan Anda
            </h2>

            <p class="text-muted col-lg-7 mx-auto">
                Nikmati perjalanan yang aman, nyaman, dan terpercaya untuk kebutuhan bisnis, wisata, maupun perjalanan keluarga.
            </p>

        </div>

        <div class="row g-4">

            <!-- Travel Antar Kota -->
            <div class="col-lg-4">

                <div class="service-card service-blue h-100">

                    <div class="service-icon">
                        🚐
                    </div>

                    <span class="service-badge">
                        Travel Reguler
                    </span>

                    <h3>
                        Travel Antar Kota
                    </h3>

                    <p>
                        Keberangkatan setiap hari dengan sistem jemput langsung dari lokasi Anda.
                    </p>

                    <div class="service-list">

                        <div>📍 Sumenep</div>
                        <div>📍 Pamekasan</div>
                        <div>📍 Sampang</div>
                        <div>📍 Bangkalan</div>
                        <div>📍 Surabaya</div>
                        <div>📍 Sidoarjo</div>
                         <div>📍 Mojokerto</div>
                        <div>📍 Malang</div>
                        <div>📍 Pasuruan</div>
                        <div>📍 Gresik</div>
                        <div>📍 Lamongan</div>

                    </div>

                </div>

            </div>

            <!-- Carter -->
            <div class="col-lg-4">

                <div class="service-card service-green h-100">

                    <div class="service-icon">
                        🚗
                    </div>

                    <span class="service-badge">
                        Fleksibel 24 Jam
                    </span>

                    <h3>
                        Private Carter Mobil
                    </h3>

                    <p>
                        Armada eksklusif dengan jadwal keberangkatan yang dapat disesuaikan kebutuhan Anda.
                    </p>

                    <div class="service-list">

                        <div>✅ Antar Jemput Bandara</div>
                        <div>✅ Dalam Kota</div>
                        <div>✅ Luar Kota</div>
                        <div>✅ Acara Keluarga</div>

                    </div>

                </div>

            </div>

            <!-- Wisata -->
<!-- Wisata -->
<div class="col-lg-4">

    <div class="service-card service-orange h-100">

        <div class="service-icon">
            🏝️
        </div>

        <span class="service-badge">
            Destinasi Favorit
        </span>

        <h3>
            Tour Wisata
        </h3>

        <p>
            Nikmati perjalanan wisata yang nyaman dan menyenangkan ke berbagai destinasi pilihan bersama tim profesional dan armada terbaik kami.
        </p>

        <div class="service-list">

            <div>🏖️ Wisata Pantai</div>
            <div>⛰️ Wisata Alam</div>
            <div>🏛️ Wisata Sejarah</div>
            <div>🌆 City Tour</div>
            <div>🎡 Wisata Keluarga</div>
            <div>📸 Destinasi Favorit Pilihan Anda</div>

        </div>

    </div>

</div>
        </div>

    </div>

</section>
<section class="py-5 bg-light">

    <div class="container">



        <div class="text-center mb-5">

                        <span class="badge bg-primary px-4 py-2 rounded-pill mb-3">
                🏝️ Destinasi Wisata
            </span>

            <h2 class="fw-bold">
                Destinasi Wisata Populer Madura
            </h2>

            <p class="text-muted">
                Jelajahi keindahan alam dan budaya Pulau Madura.
            </p>

        </div>

    </div>

<div class="slider-wrapper">

    <div class="slider-track">

        <!-- Gili Labak -->
        <div class="destination-card">
               <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31666.687723053856!2d114.02467807916396!3d-7.202456811929499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd751568c329c7b%3A0xe84550a57916d41f!2sGiri%20LaBaK!5e0!3m2!1sid!2sid!4v1781102632989!5m2!1sid!2sid"
        width="100%"
        height="250"
        style="border:0;"
        loading="lazy"
        allowfullscreen=""
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
            <div class="p-3">
                <h5 class="fw-bold">Gili Labak Tour</h5>
                <p class="text-muted mb-0">
                    Pulau eksotis dengan air laut jernih dan spot snorkeling terbaik.
                </p>
            </div>
        </div>

        <!-- Pantai Lombang -->
        <div class="destination-card">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15843.087856200675!2d114.05476777846265!3d-6.917843437664791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd9f7276ab8c685%3A0xe6566e3638889a6!2sPantai%20Lombang!5e0!3m2!1sid!2sid!4v1781102758582!5m2!1sid!2sid" 
            width="100%" 
            height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="p-3">
                <h5 class="fw-bold">Pantai Lombang</h5>
                <p class="text-muted mb-0">
                    Pantai berpasir putih dengan pohon cemara udang yang unik.
                </p>
            </div>
        </div>

        <!-- Pantai Slopeng -->
        <div class="destination-card">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31688.30303402758!2d113.77174327883384!3d-6.886066352699677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd9ea23fabac2df%3A0x8550176773c06614!2sPantai%20Slopeng!5e0!3m2!1sid!2sid!4v1781102963053!5m2!1sid!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="p-3">
                <h5 class="fw-bold">Pantai Slopeng</h5>
                <p class="text-muted mb-0">
                    Hamparan pasir luas dengan panorama laut yang memukau.
                </p>
            </div>
        </div>

        <!-- Keraton -->
        <div class="destination-card">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.0099357237295!2d113.86029097379219!3d-7.008112268641919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd9e42b1170c777%3A0x392c4cc621a3b3cd!2sMuseum%20Keraton%20Sumenep!5e0!3m2!1sid!2sid!4v1781103015971!5m2!1sid!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="p-3">
                <h5 class="fw-bold">Keraton Sumenep</h5>
                <p class="text-muted mb-0">
                    Wisata sejarah dan budaya khas Kerajaan Sumenep.
                </p>
            </div>
        </div>

        <!-- Bukit Jaddih -->
        <div class="destination-card">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.37649315893!2d112.75696467379338!3d-7.082277669420982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd8045eb0acb79d%3A0x4a24af02fd796f55!2sWisata%20Bukit%20Jaddhih!5e0!3m2!1sid!2sid!4v1781103055785!5m2!1sid!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="p-3">
                <h5 class="fw-bold">Bukit Jaddih</h5>
                <p class="text-muted mb-0">
                    Bukit kapur putih dengan pemandangan yang instagramable.
                </p>
            </div>
        </div>

        <!-- Arosbaya -->
        <div class="destination-card">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5234756817003!2d112.85695907379122!3d-6.94740726801093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd8118ccaeea079%3A0x9e3453cf20842409!2sBukit%20Pelalangan%20Arosbaya!5e0!3m2!1sid!2sid!4v1781103118909!5m2!1sid!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="p-3">
                <h5 class="fw-bold">Arosbaya</h5>
                <p class="text-muted mb-0">
                    Menjelajahi Bukit Kapur Arosbaya yang unik dan artistik.
                </p>
            </div>
        </div>

        <!-- Pantai Sembilan -->
        <div class="destination-card">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.5737904802077!2d113.91924097379487!3d-7.175164970409305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd759ba4659b12b%3A0x5818009169d7abb7!2sPantai%20Sembilan%20Sumenep!5e0!3m2!1sid!2sid!4v1781103273414!5m2!1sid!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="p-3">
                <h5 class="fw-bold">Pantai Sembilan</h5>
                <p class="text-muted mb-0">
                    Pantai cantik di Pulau Gili Genting dengan pasir putih bersih.
                </p>
            </div>
        </div>

        <!-- City Tour -->
        <div class="destination-card">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31679.984210808398!2d113.83769927896134!3d-7.0095138561398675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd9e681188ea6e3%3A0x4027a76e3cdb720!2sSumenep%2C%20Dalem%20Anyar%2C%20Bangselok%2C%20Kec.%20Kota%20Sumenep%2C%20Kabupaten%20Sumenep%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1781103342028!5m2!1sid!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="p-3">
                <h5 class="fw-bold">City Tour Sumenep</h5>
                <p class="text-muted mb-0">
                    Jelajahi ikon kota, kuliner, dan destinasi favorit Sumenep.
                </p>
            </div>
        </div>



    </div>

</div>

</section>

<section class="py-5 bg-primary text-white">

    <div class="container">

        <div class="row g-4 align-items-center">

            <!-- Info Pembayaran -->
            <div class="col-lg-6">

                <div class="bg-white text-dark rounded-4 p-4 shadow-lg h-100">

                    <div class="d-flex align-items-center mb-3">
                        <div class="fs-1 me-3">💳</div>

                        <div>
                            <h4 class="fw-bold mb-1">
                                Pembayaran Mudah & Aman
                            </h4>

                            <small class="text-muted">
                                Transfer Bank atau Cash On Arrival
                            </small>
                        </div>
                    </div>

                    <p class="mb-0 text-muted">
                        Nikmati kemudahan bertransaksi bersama
                        <strong>El Trans Solution Travel & Tour</strong>.
                        Pembayaran dapat dilakukan melalui secara langsung (Cash On Arrival) kepada driver
                        setelah Anda tiba dengan aman di lokasi tujuan.
                    </p>

                </div>

            </div>

            <!-- CTA -->
            <div class="col-lg-6 text-center">

                <span class="badge bg-warning text-dark px-3 py-2 mb-3">
                    🚐 Booking Travel 24 Jam
                </span>

                <h2 class="fw-bold display-5">
                    Siap Memulai Perjalanan?
                </h2>

                <p class="lead mt-3 mb-4">
                    Pesan travel antar kota, antar jemput bandara,
                    maupun layanan carter dengan mudah dan cepat.
                </p>

                <a href="https://wa.me/6287863951959"
                   class="btn btn-warning btn-lg px-5 py-3 shadow rounded-pill">
                    🚐 Pesan Sekarang
                </a>

                <div class="mt-4">

                    <small class="text-light opacity-75">
                        Customer Service siap melayani Anda 24 jam
                        untuk informasi jadwal, tarif, dan pemesanan.
                    </small>

                </div>

            </div>

        </div>

    </div>

</section><script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('asal').selectedIndex = 0;
    document.getElementById('tujuan').value = '';
    const btnCari = document.getElementById('btnCari');
    const jadwalContainer = document.getElementById('jadwalContainer');
    const asalSelect = document.getElementById('asal');
    const tujuanSelect = document.getElementById('tujuan');
document.getElementById('btnPrivateCar')
.addEventListener('click', function () {

    const asal =
        document.getElementById('asal').value || 'Belum Dipilih';

    const pesan =
`Halo Admin El Trans Solution Travel 👋

Saya tertarik menggunakan layanan *Carter / Private Car*.

Informasi Penjemputan:
- Lokasi: ${asal}

Mohon informasi mengenai:
- Tarif perjalanan
- Armada yang tersedia
- Jadwal keberangkatan
- Tujuan yang dapat dilayani

Terima kasih.`;
document.getElementById('hasilPencarian').style.display = 'none';
    window.open(
        `https://wa.me/6287863951959?text=${encodeURIComponent(pesan)}`,
        '_blank'
    );

});
    // =========================
    // DATA WILAYAH
    // =========================

    const kota = [
        "Sumenep","Pamekasan","Sampang","Bangkalan","Surabaya",
        "Sidoarjo","Mojokerto","Malang","Pasuruan","Gresik","Lamongan"
    ];

    // =========================
    // FILTER TUJUAN
    // =========================
function filterTujuan(asal) {

    tujuanSelect.innerHTML =
        '<option value="" selected disabled>Pilih Tujuan</option>';

    kota.forEach(item => {
        if (item !== asal) {
            tujuanSelect.innerHTML += `
                <option value="${item}">
                    ${item}
                </option>
            `;
        }
    });

}asalSelect.addEventListener('change', function () {
    filterTujuan(this.value);
});

// isi tujuan saat halaman pertama kali dibuka
filterTujuan('');

    // =========================
    // GET JADWAL
    // =========================
function getJadwal(asal, tujuan) {

    if (tujuan === "Carter / Private Car") {
        return ["BEBAS"];
    }

    // Keberangkatan dari Sumenep
    if (asal === "Sumenep") {
        return [
            "02:00 WIB",
            "05:00 WIB",
            "09:00 WIB"
        ];
    }

    // Arah balik ke Sumenep
    return [
        "13:00 WIB",
        "17:00 WIB",
        "20:00 WIB"
    ];
}
// =========================
// TAMPILKAN JADWAL
// =========================
function tampilkanJadwal(asal, tujuan) {

    const jadwal = getJadwal(asal, tujuan);

    jadwalContainer.innerHTML = '';

    jadwal.forEach(jam => {

        jadwalContainer.innerHTML += `
            <div class="col-md-4">
                <button type="button"
                        class="btn btn-outline-primary w-100 jam-btn py-3">
                    ${jam}
                </button>
            </div>
        `;
    });

    document.querySelectorAll('.jam-btn').forEach(btn => {

        btn.addEventListener('click', function () {

            document.querySelectorAll('.jam-btn').forEach(b => {
                b.classList.remove('btn-primary');
                b.classList.add('btn-outline-primary');
            });

            this.classList.remove('btn-outline-primary');
            this.classList.add('btn-primary');

            document.getElementById('jamTerpilih').value =
                this.innerText;
        });

    });
} // =========================
    // CARI TRAVEL
    // =========================
    btnCari.addEventListener('click', function () {

        let asal = asalSelect.value;
        let tujuan = tujuanSelect.value;

if (!asal || !tujuan) {

    Swal.fire({
        icon: 'info',
        title: '🚐 Cari Perjalanan',
        text: 'Silakan pilih keberangkatan dan tujuan terlebih dahulu.'
    });

    return;
}

        document.getElementById('hasilAsal').innerText = asal;
        document.getElementById('hasilTujuan').innerText = tujuan;

        tampilkanJadwal(asal, tujuan);

        document.getElementById('hasilPencarian').style.display = 'block';
        document.getElementById('hasilPencarian').scrollIntoView({
            behavior: 'smooth'
        });
    });

});

// =========================
// PESAN WHATSAPP
// =========================
document.getElementById('btnPesan').addEventListener('click', function () {

    const asal = document.getElementById('asal').value;
    const tujuan = document.getElementById('tujuan').value;
    const tanggal = document.querySelector('input[name="tanggal"]').value;
    const jam = document.getElementById('jamTerpilih').value;

    if (!jam) {
        Swal.fire({
            icon: 'warning',
            title: 'Pilih Jadwal',
            text: 'Silakan pilih jam keberangkatan terlebih dahulu.'
        });
        return;
    }

    const pesan =
`Halo Admin El Trans Solution Travel

Saya ingin melakukan pemesanan:

- Penjemputan: ${asal}
- Tujuan: ${tujuan}
- Tanggal: ${tanggal}
- Jam: ${jam}

Terima kasih.`;
document.getElementById('hasilPencarian').style.display = 'none';
    window.open(
        `https://wa.me/6287863951959?text=${encodeURIComponent(pesan)}`,
        '_blank'
    );
});
</script>
@endsection


@extends('layouts.app')

@section('content')


<section class="py-5 bg-white">

    <div class="container">

        <div class="row g-5 align-items-center mt-4">

            <div class="col-lg-6">

                <img src="{{ asset('../img/Logo_Full.png') }}"
                     class="img-fluid rounded-4 shadow"
                     alt="Tim El Trans solution Travel">

            </div>

            <div class="col-lg-6">

                <h2 class="fw-bold mb-4">
                    Siapa Kami?
                </h2>

                <p class="text-muted" style="text-align:justify;">
                    El Trans solution Travel & Tour merupakan penyedia layanan perjalanan
                    yang berfokus pada kenyamanan, keamanan, dan kepuasan pelanggan.
                    Dengan armada yang terawat dan pengemudi berpengalaman,
                    kami siap mengantarkan Anda menuju berbagai tujuan dengan aman.
                </p>

                <p class="text-muted" style="text-align:justify;">
                    Selain melayani rute travel menuju Bandara Juanda Surabaya,
                    kami juga menyediakan berbagai paket wisata menarik untuk
                    menjelajahi keindahan Pulau Madura.
                </p>

            </div>

        </div>

    </div>

</section>

<section class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                Visi & Misi
            </h2>

            <p class="text-muted">
                Menjadi layanan travel dan wisata pilihan masyarakat Madura.
            </p>

        </div>

        <div class="row g-4">

            <div class="col-lg-6">

                <div class="card border-0 shadow h-100">

                    <div class="card-body p-4">

                        <h4 class="fw-bold text-primary mb-3">
                            Visi
                        </h4>

                        <p class="text-muted mb-0 ">
                            Menjadi perusahaan travel dan wisata terpercaya
                            yang memberikan pelayanan terbaik, aman, nyaman,
                            dan profesional bagi seluruh pelanggan.
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="card border-0 shadow h-100">

                    <div class="card-body p-4">

                        <h4 class="fw-bold text-warning mb-3">
                            Misi
                        </h4>

                        <ul class="text-muted mb-0">

                            <li>Memberikan pelayanan terbaik kepada pelanggan.</li>
                            <li>Mengutamakan keselamatan dan kenyamanan perjalanan.</li>
                            <li>Menyediakan armada yang bersih dan terawat.</li>
                            <li>Mendukung pariwisata Madura melalui paket wisata berkualitas.</li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                Mengapa Memilih Kami?
            </h2>

        </div>

        <div class="row g-4">

            <div class="col-md-3">

                <div class="card border-0 shadow h-100 text-center">

                    <div class="card-body p-4">

                        <div style="font-size:50px;">🚐</div>

                        <h5 class="fw-bold mt-3">
                            Armada Nyaman
                        </h5>

                        <p class="text-muted">
                            Kendaraan bersih, nyaman dan terawat.
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card border-0 shadow h-100 text-center">

                    <div class="card-body p-4">

                        <div style="font-size:50px;">🛡️</div>

                        <h5 class="fw-bold mt-3">
                            Aman
                        </h5>

                        <p class="text-muted">
                            Pengemudi profesional dan berpengalaman.
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card border-0 shadow h-100 text-center">

                    <div class="card-body p-4">

                        <div style="font-size:50px;">⏰</div>

                        <h5 class="fw-bold mt-3">
                            Tepat Waktu
                        </h5>

                        <p class="text-muted">
                            Jadwal perjalanan yang teratur setiap hari.
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card border-0 shadow h-100 text-center">

                    <div class="card-body p-4">

                        <div style="font-size:50px;">🏝️</div>

                        <h5 class="fw-bold mt-3">
                            Paket Wisata
                        </h5>

                        <p class="text-muted">
                            Menjelajahi destinasi terbaik di Madura.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="py-5 bg-primary text-white text-center">

    <div class="container">

        <h2 class="fw-bold">
            Siap Berwisata Bersama Kami?
        </h2>

        <p class="mt-3">
            Nikmati perjalanan nyaman dan pengalaman wisata terbaik
            bersama El Trans solution Travel & Tour.
        </p>

<div class="maps-wrapper mt-4">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.0963706199213!2d113.92799157379207!3d-6.9979315685356775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd9e5a95710d2ff%3A0xf859aa5e94bacd66!2sJl.%20Raya%20Gapura%2C%20Kabupaten%20Sumenep%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1781112608770!5m2!1sid!2sid"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>
    </div>

</section>

@endsection
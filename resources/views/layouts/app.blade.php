<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>El Trans solution | Travel & Tour Madura</title>

<link rel="icon" type="image/png" href="{{ asset('../img/Logo.png') }}">
<link rel="shortcut icon" href="{{ asset('../img/Logo.png') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>

        *{
            font-family:'Poppins',sans-serif;
        }

        body{
            background:#f8fafc;
            overflow-x:hidden;
        }

        html{
    scroll-behavior: smooth;
}
html,
body{
    overflow-x:hidden;
    width:100%;
}
.custom-select option:first-child {
    display: none;
}
.private-car-banner{
    background: linear-gradient(135deg,#16a34a,#22c55e);
    color:white;
    border-radius:24px;
    padding:25px;
    display:flex;
    align-items:center;
    gap:20px;
    cursor:pointer;
    transition:.3s;
    box-shadow:0 15px 35px rgba(34,197,94,.25);
    margin-bottom:25px;
}

.private-car-banner:hover{
    transform:translateY(-5px);
    box-shadow:0 20px 45px rgba(34,197,94,.35);
}

.private-car-icon{
    width:80px;
    height:80px;
    background:rgba(255,255,255,.15);
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:40px;
}

.private-car-content{
    flex:1;
}

.private-car-content h4{
    color:#fff;
}

.private-car-content p{
    color:rgba(255,255,255,.85);
}

.private-car-arrow{
    font-size:40px;
    font-weight:bold;
}

@media(max-width:768px){

    .private-car-banner{
        flex-direction:column;
        text-align:center;
    }

    .private-car-arrow{
        display:none;
    }

}
.hero{
    min-height:100vh;
    padding-top:40px;
    padding-bottom:60px;
    display:flex;
    align-items:center;
    background:
        linear-gradient(
            rgba(0,0,0,.55),
            rgba(0,0,0,.55)
        ),
        url('../img/travel.png');
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;
    color:white;
}

        .hero img{
    width:100%;
    height:300px;
}

    .hero h1{
        font-size:2rem !important;
    }

        .hero p{
        font-size:1rem !important;
    }

    .hero-buttons{
    display:flex;
    gap:15px;
}

.search-section{
    margin-top:-80px;
    position:relative;
    z-index:10;
}
.hero-info-card{
    background:#fff;
    border-radius:24px;
    padding:22px;
    box-shadow:0 12px 30px rgba(0,0,0,.12);
    position:relative;
    overflow:hidden;
    margin-top:6%;
width: 100%;
        transform:scale(.9);
    transform-origin:center;
}

.hero-info-card::before{
    content:'';
    position:absolute;
    top:-60px;
    right:-60px;
    width:130px;
    height:130px;
    background:rgba(255,193,7,.12);
    border-radius:50%;
}

.hero-badge{
    background:#ffc107;
    color:#000;
    padding:6px 14px;
    border-radius:25px;
    font-size:12px;
    font-weight:600;
}

.hero-card-header h3{
    color:#1d3557;
    font-size:1.35rem;
}

.hero-card-header p{
    font-size:.9rem;
    line-height:1.5;
}

.hero-services{
    display:flex;
    flex-direction:column;
    gap:10px;
    margin-top:20px !important;
}

.service-box{
    display:flex;
    align-items:center;
    gap:12px;
    padding:12px;
    border-radius:14px;
    background:#f8f9fa;
    transition:.3s;
}

.service-box:hover{
    transform:translateX(5px);
    background:#fff7e6;
}

.service-icon{
    width:42px;
    height:42px;
    border-radius:12px;
    background:#ffc107;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:18px;
    flex-shrink:0;
}

.service-box strong{
    display:block;
    color:#1d3557;
    font-size:.95rem;
}

.service-box small{
    color:#6c757d;
    font-size:.75rem;
}
.search-card{
    background:#fff;
    padding:40px;
    border-radius:30px;
    box-shadow:0 15px 40px rgba(0,0,0,.08);
    margin-top:-80px;
    position:relative;
    z-index:10;
}

.search-badge{
    display:inline-block;
    background:rgba(13,110,253,.1);
    color:#0d6efd;
    padding:8px 18px;
    border-radius:50px;
    font-weight:600;
}

.custom-select,
.custom-input{
    border-radius:15px;
    border:2px solid #eef2f7;
    min-height:58px;
    transition:.3s;
}

.custom-select:focus,
.custom-input:focus{
    border-color:#0d6efd;
    box-shadow:0 0 0 0.25rem rgba(13,110,253,.15);
}

.btn-search{
    height:58px;
    border:none;
    border-radius:15px;
    background:linear-gradient(
        135deg,
        #0d6efd,
        #4f8cff
    );
    color:white;
    font-weight:700;
    transition:.3s;
}

.btn-search:hover{
    transform:translateY(-3px);
    box-shadow:0 10px 25px rgba(13,110,253,.35);
}

@media(max-width:991px){

    .search-card{
        margin-top:0;
        padding:25px;
    }

}



.hero-stats{
    display:flex;
    justify-content:space-between;
    text-align:center;
    margin-top:25px;
}

.stat-item h2{
    font-weight:700;
    color:#0d6efd;
    margin-bottom:0;
}

.stat-item span{
    font-size:13px;
    color:#6c757d;
}

.travel-search-card{
    background:#fff;
    border-radius:30px;
    padding:40px;
    box-shadow:
        0 20px 60px rgba(0,0,0,.12);
}

.search-badge{
    background:#fff3cd;
    color:#856404;
    padding:8px 18px;
    border-radius:50px;
    font-size:14px;
    font-weight:600;
}

.form-select,
.form-control{
    border-radius:15px;
    border:2px solid #eef2f7;
    height:60px;
}

.form-select:focus,
.form-control:focus{
    border-color:#0d6efd;
    box-shadow:none;
}

.btn-search{
    height:60px;
    border:none;
    border-radius:15px;
    font-size:18px;
    font-weight:700;
    color:white;
    background:linear-gradient(
        135deg,
        #0d6efd,
        #4f46e5
    );
    transition:.3s;
}

.btn-search:hover{
    transform:translateY(-3px);
    box-shadow:
        0 15px 30px rgba(13,110,253,.35);
}

@media(max-width:768px){

    .travel-search-card{
        padding:25px;
        border-radius:20px;
    }

}

   .feature-card{
    background:#fff;
    border-radius:25px;
    padding:35px 25px;
    text-align:center;
    height:100%;
    transition:.4s;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
    border:1px solid rgba(0,0,0,.05);
}

.feature-card:hover{
    transform:translateY(-10px);
    box-shadow:0 20px 45px rgba(13,110,253,.18);
}

.feature-icon{
    width:90px;
    height:90px;
    margin:auto;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:42px;
    background:linear-gradient(
        135deg,
        #0d6efd,
        #4da3ff
    );
    color:white;
}

.feature-card h5{
    color:#212529;
}

.feature-card p{
    line-height:1.7;
}

.feature-card:hover .feature-icon{
    transform:scale(1.1) rotate(8deg);
    transition:.4s;
}
        .search-box{
    margin-top:-80px;
    position:relative;
    z-index:100;
    margin-top: 3%;
}

.travel-card{
    transition:all .3s ease;
}

.travel-card:hover{
    transform:translateY(-8px);
}

.travel-card .card-header{
    background:linear-gradient(
        135deg,
        #0d6efd,
        #0dcaf0
    ) !important;
}

.btn-booking{
    border:none;
    width:100%;
    padding:18px 25px;
    border-radius:20px;
    background:linear-gradient(135deg,#0d6efd,#00b4ff);
    color:white;
    transition:.3s;
    box-shadow:0 10px 30px rgba(13,110,253,.25);
}

.btn-booking:hover{
    transform:translateY(-4px);
    box-shadow:0 15px 35px rgba(13,110,253,.4);
}

.icon-circle{
    width:55px;
    height:55px;
    border-radius:50%;
    background:rgba(255,255,255,.2);
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:24px;
}

.btn-booking small{
    color:rgba(255,255,255,.8);
}

.section-title{
    font-weight:800;
    letter-spacing:-1px;
}

.section-badge{
    padding:10px 22px;
    border-radius:50px;
    font-size:.9rem;
}

.section-desc{
    max-width:700px;
    margin:auto;
    font-size:1.1rem;
    color:#6c757d;
}




.glass-card{
    background:white;
    border-radius:25px;
    padding:30px;
    box-shadow:0 20px 50px rgba(0,0,0,.12);

}

.route-item{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:15px 0;
    border-bottom:1px solid #eee;
    transition:.3s;
}

.route-item:last-child{
    border-bottom:none;
}

.route-item:hover{
    padding-left:10px;
    color:#0d6efd;
}

.route-item strong{
    font-size:1.1rem;
    color:#0d6efd;
}

.card{
    overflow:hidden;
}

.destination-card{
    border:none;
    overflow:hidden;
    border-radius:20px;
    transition:.4s;
}

.destination-card img{
    height:220px;
    object-fit:cover;
}

.destination-card:hover{
    transform:translateY(-12px);
}

.icon-circle{
    width:70px;
    height:70px;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:50%;
    background:linear-gradient(135deg,#0d6efd,#00c6ff);
    font-size:30px;
    margin:auto;
    color:white;
}

.payment-card{
    background:linear-gradient(
        135deg,
        rgba(255,255,255,.20),
        rgba(255,255,255,.08)
    );

    backdrop-filter:blur(15px);

    border:1px solid rgba(255,255,255,.15);

    border-radius:20px;

    padding:20px;

    cursor:pointer;

    transition:.3s;

    position:relative;

    overflow:hidden;
}

.payment-card::before{
    content:'';
    position:absolute;
    width:120px;
    height:120px;
    border-radius:50%;
    background:rgba(255,255,255,.08);
    right:-40px;
    top:-40px;
}

.payment-card:hover{
    transform:translateY(-8px);
    box-shadow:0 15px 30px rgba(0,0,0,.2);
}

.bank-icon{
    font-size:2rem;
}

.rekening-box{
    background:white;
    color:#222;
    border-radius:15px;
    padding:15px;
}

.rekening-number{
    font-size:1.3rem;
    font-weight:700;
    color:#0d6efd;
    letter-spacing:2px;
}

.bank-icon{
    width:100px;
    height:60px;
    display:flex;
    align-items:center;
    justify-content:center;
}

.bank-icon img{
    width:100%;
    height:100%;
    object-fit:contain;
}

.booking-check{
    width:100%;
}

.booking-check .card{
    background:rgba(255,255,255,.95);
    backdrop-filter:blur(10px);
    border-radius:20px;
}

.booking-check h5{
    color:#0d6efd;
}

.booking-check .form-control{
    border-radius:12px 0 0 12px;
    border:none;
    background:#f8f9fa;
}

.booking-check .btn{
    border-radius:0 12px 12px 0;
    font-weight:600;
}

.booking-check .card:hover{
    transform:translateY(-3px);
    transition:.3s;
}

.service-card{
    background:#fff;
    border-radius:30px;
    padding:35px;
    box-shadow:0 15px 40px rgba(0,0,0,.08);
    transition:.4s;
    position:relative;
    overflow:hidden;
}

.service-card:hover{
    transform:translateY(-10px);
    box-shadow:0 25px 60px rgba(0,0,0,.15);
}

.service-icon{
    width:80px;
    height:80px;
    border-radius:20px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:40px;
    margin-bottom:20px;
}

.service-blue .service-icon{
    background:rgba(13,110,253,.1);
}

.service-green .service-icon{
    background:rgba(25,135,84,.1);
}

.service-orange .service-icon{
    background:rgba(255,193,7,.15);
}

.service-card h3{
    font-weight:700;
    margin-bottom:10px;
}

.service-card p{
    color:#6c757d;
    margin-bottom:20px;
}

.service-list div{
    padding:10px 0;
    border-bottom:1px solid #eee;
    font-weight:500;
}

.service-list div:last-child{
    border:none;
}

.service-badge{
    display:inline-block;
    padding:8px 16px;
    background:#f3f6ff;
    border-radius:50px;
    font-size:13px;
    font-weight:600;
    margin-bottom:15px;
}



/* =========================
   NAVBAR
========================= */

.navbar{
    background:rgba(13,27,42,.92);
    backdrop-filter:blur(12px);
    padding:12px 0;
}

/* Logo */
.logo-navbar{
    width:55px;
    height:55px;
    object-fit:contain;
    flex-shrink:0;
}

.payment-info{
    background: #ffffff;
    padding: 18px 22px;
    border-radius: 15px;
    border-left: 5px solid #0d6efd;
    box-shadow: 0 5px 15px rgba(0,0,0,.08);
}

.payment-info p{
    color:#6c757d;
    line-height:1.7;
    text-align: center;
}

/* Text Logo */
.brand-text{
    line-height:1.1;
}

.brand-title{
    font-size:1.3rem;
    font-weight:800;
    letter-spacing:2px;
    color:#fff;
    text-transform:uppercase;
}

.brand-subtitle{
    font-size:.70rem;
    color:rgba(255,255,255,.75);
    letter-spacing:1px;
}

.destination-card{
    min-width:240px;
    max-width:240px;
    border-radius:16px;
}

.destination-card img{
    width:100%;
    height:160px;
    object-fit:cover;
}

.destination-card h5{
    font-size:1rem;
    margin-bottom:8px;
}

.destination-card p{
    font-size:.85rem;
    line-height:1.4;
}

.slider-track{
    display:flex;
    gap:25px;
    width:max-content;
    animation:scrollSlider 35s linear infinite;
}

.slider-track:hover{
    animation-play-state:paused;
}

.destination-card{
    min-width:320px;
    max-width:320px;
    background:#fff;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,.12);
    transition:.3s;
}

.destination-card:hover{
    transform:translateY(-10px);
}

.destination-card img{
    width:100%;
    height:220px;
    object-fit:cover;
}

@keyframes scrollSlider{
    from{
        transform:translateX(0);
    }
    to{
        transform:translateX(-50%);
    }
}

/* Menu */
.nav-link{
    color:white !important;
    font-weight:500;
    transition:.3s;
}

.nav-link:hover{
    color:#ffc107 !important;
}

.btn-pesan{
    border-radius:12px;
    font-weight:600;
    padding:10px 22px;
}
.input-group .form-control{
    font-size:14px;
}

.input-group .btn{
    font-size:14px;
}
.footer{
    background:#111827;
    color:white;
}

.footer p{
    color:rgba(255,255,255,.75);
}

.footer-menu li{
    margin-bottom:10px;
}

.footer-menu a{
    color:rgba(255,255,255,.8);
    text-decoration:none;
    transition:.3s;
    display:inline-block;
}

.footer-menu a:hover{
    color:#ffc107;
    transform:translateX(8px);
}

        footer{
            background:#111827;
            color:white;
        }

        .maps-wrapper{
    max-width: 800px;
    margin: 0 auto;
}

.maps-wrapper iframe{
    width: 100%;
    height: 400px;
    border: 0;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,.2);
}

option[style*="display: none"] {
    display: none !important;
}

@media (max-width: 768px){

    .maps-wrapper{
        max-width: 320px;
    }

    .maps-wrapper iframe{
        height: 220px;
        border-radius: 15px;
    }

}


/* =========================
   TABLET
========================= */

@media (max-width:991px){

    .navbar-brand{
        max-width:75%;
    }

    .logo-navbar{
        width:50px;
        height:50px;
    }

    .brand-title{
        font-size:1.1rem;
    }

    .brand-subtitle{
        font-size:.65rem;
    }

    .navbar-collapse{
        margin-top:15px;
        background:rgba(255,255,255,.05);
        border-radius:15px;
        padding:15px;
    }

    .navbar-nav{
        align-items:flex-start !important;
    }

    .navbar-nav .nav-item{
        width:100%;
    }

    .navbar-nav .btn-pesan{
        width:100%;
        margin-top:10px;
    }

        .hero{
        min-height:auto;
        text-align:center;
        padding-top:140px;
        padding-bottom:50px;
    }

    .hero h1{
        font-size:3rem !important;
    }

    .hero .lead{
        font-size:1.05rem;
    }

    .hero .col-lg-6:last-child{
        margin-top:40px !important;
    }

    .booking-check{
        margin-top:25px;
    }
        .hero-buttons{
        flex-direction:column;
        align-items:center;
        justify-content:center;
    }

    .hero-buttons .btn{
        width:250px;
    }

        .footer{
        text-align:center;
    }

    .footer-brand{
        justify-content:center;
    }

      .destination-card{
        min-width:260px;
        max-width:260px;
    }

    .slider-track{
        animation-duration:25s;
    }

    
    .contact-buttons{
        justify-content:center;
        align-items:center;
    }

    .contact-buttons .btn{
        width:100%;
        max-width:280px;
    }
}

/* =========================
   MOBILE
========================= */

@media (max-width:576px){

    .logo-navbar{
        width:42px;
        height:42px;
    }

    .brand-title{
        font-size:1rem;
        letter-spacing:1px;
    }

    .brand-subtitle{
        font-size:.55rem;
        letter-spacing:.5px;
    }
    .hero{
        padding-top:120px;
        padding-bottom:40px;
    }

    .hero .badge{
        font-size:.75rem;
        white-space:normal;
    }

    .hero h1{
        font-size:2.2rem !important;
        line-height:1.2;
    }

    .hero .lead{
        font-size:.95rem;
    }

    .hero .d-flex{
        flex-direction:column;
        width:100%;
    }

    .hero .btn{
        width:100%;
    }

    .hero img{
        border-radius:20px !important;
    }

    .booking-check .input-group{
        flex-direction:column;
    }

    .booking-check .form-control{
        width:100%;
        border-radius:12px;
        margin-bottom:10px;
    }

    .booking-check .btn{
        width:100%;
        border-radius:12px;
    }

    .booking-check h5{
        font-size:1.1rem;
    }

    .hero-buttons{
        flex-direction:column;
        align-items:center;
        justify-content:center;
    }

    .hero-buttons .btn{
        width:250px;
    }
    .footer{
        text-align:center;
    }

    .footer-brand{
        justify-content:center;
        margin-bottom:15px;
    }

    .footer .brand-title{
        font-size:1rem;
    }

    .footer .brand-subtitle{
        font-size:.6rem;
    }

    .footer h5{
        margin-top:10px;
    }

    .footer-menu{
        padding-left:0;
    }

    .footer-menu a:hover{
        transform:none;
    }

    .footer hr{
        margin:25px 0;
    }

      .destination-card{
        min-width:260px;
        max-width:260px;
    }

    .slider-track{
        animation-duration:25s;
    }

    
    .contact-buttons{
        justify-content:center;
        align-items:center;
    }

    .contact-buttons .btn{
        width:100%;
        max-width:280px;
    }

}



    </style>
</head>
<body>

@include('components.navbar')

@yield('content')

@include('components.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
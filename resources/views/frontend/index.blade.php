<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- FullCalendar CSS -->
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css' rel='stylesheet' />
    <style>
        @keyframes moveLeft {
            0% {
                transform: translateX(0%);
            }
            100% {
                transform: translateX(-100%);
            }
        }

        @keyframes moveRight {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(0%);
            }
        }

        .animate-marquee {
            display: flex;
            animation: moveLeft 20s linear infinite;
        }

        .animate-marquee:hover {
            animation-play-state: paused;
        }

        .move-left {
            display: flex;
            gap: 1rem;
        }

        html {
            scroll-padding-top: 75px;
        }

        #home {
            scroll-margin-top: 100px;
        }
        #about{
            scroll-margin-top: 20px;
        }
        #berita{
            scroll-margin-top: 10px;
        }

        .container-fluid {
            background-image: url("{{(asset('assets/images/home3.jpg'))}}");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .gallery {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .gallery__item {
            margin: 0 10px;
            margin-bottom: 1rem;
        }

        .gallery__img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .bg-success {
            background-color: #198754;
        }

        #calendar {
            font-size: 0.5rem;
            font-weight: bold;
        }

        .fc-daygrid-event {
            font-size: 0.8rem;
        }
    </style>
    <title>Gereja</title>
</head>
<body>
        <div class="container-fluid">
            <div class="offset-lg-2">
                <div class="container sticky-top">
                    <div class="row">
                        <div class="col-12 col-lg-10">
                            <nav class="navbar navbar-expand-lg bg-secondary bg-gradient px-3 mb-3">
                                <a class="navbar-brand text-white" href="#">Navbar</a>

                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav mx-auto">
                                        <li class="nav-item">
                                            <a class="nav-link text-white" href="#home">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white" href="#about">Tentang Kami</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Blog</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#berita">Berita</a></li>
                                                <li><a class="dropdown-item" href="#artikel">Artikel</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white" href="#kegiatan">Kegiatan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white" href="#gallery">Gallery</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>

                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-10 mb-3 mt-3">
                            <section class="bg-body-tertiary px-3 p-5 rounded-2 position-relative overflow-hidden">
                                <div class="position-absolute top-0 start-0 w-100 h-100 bg-cover bg-fixed"
                                     style="background-image: url('{{ asset('assets/images/gereja-bg.jpg') }}'); opacity: 0.5; z-index: 0;">
                                </div>
                                <div class="d-flex flex-column gap-5 text-center position-relative" style="z-index: 1;">
                                    <div class="d-flex flex-column gap-2">
                                        <a id="home" class="text-decoration-none text-dark fs-5">
                                            Selamat datang di gereja kami, tempat untuk tumbuh dalam iman.
                                        </a>
                                        <h1 class="mb-0 display-2 fw-bold">
                                            <span>Bergabunglah dalam Iman</span>
                                            <span class="text-primary" data-strings="Ibadah, Komunitas, Pelayanan, Kasih, Iman"></span>
                                            <div>Gereja Kami</div>
                                        </h1>
                                    </div>
                                    <div class="d-flex flex-column gap-3">
                                        <div class="gap-2 d-flex flex-wrap justify-content-center">
                                            <a href="#" class="btn btn-tag btn-sm">Ibadah</a>
                                            <a href="#" class="btn btn-tag btn-sm">Komunitas</a>
                                            <a href="#" class="btn btn-tag btn-sm">Pelayanan</a>
                                            <a href="#" class="btn btn-tag btn-sm">Kelas Katekisasi</a>
                                            <a href="#" class="btn btn-tag btn-sm">Kelompok Doa</a>
                                            <a href="#" class="btn btn-tag btn-sm">Kegiatan Anak</a>
                                            <a href="#" class="btn btn-tag btn-sm">Kegiatan Remaja</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="position-relative d-flex overflow-x-hidden py-lg-4 pt-4">
                                    <div class="animate-marquee d-flex gap-3">
                                        <a href="#" class="bg-body-transparent text-center shadow-sm text-wrap rounded-4 w-100 border card-lift border" style="width: 200px !important">
                                            <div class="p-3">
                                                <img src="../assets/images/mentor/mentor-img-2.jpg" alt="mentor 1" class="avatar avatar-xl rounded-circle" />
                                                <div class="mt-3">
                                                    <h3 class="mb-0 h4">Pdt. Andrew Lupien</h3>
                                                    <span class="text-gray-800">Pendeta Senior</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#!" class="bg-body-transparent text-center shadow-sm text-wrap rounded-4 w-100 border card-lift border" style="width: 200px !important">
                                            <div class="p-3">
                                                <img src="../assets/images/mentor/mentor-img-3.jpg" alt="mentor 2" class="avatar avatar-xl rounded-circle" />
                                                <div class="mt-3">
                                                    <h3 class="mb-0 h4">Ibu Bernice Perry</h3>
                                                    <span class="text-gray-800">Guru Katekisasi</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#!" class="bg-body-transparent text-center shadow-sm text-wrap rounded-4 w-100 border card-lift border" style="width: 200px !important">
                                            <div class="p-3">
                                                <img src="../assets/images/mentor/mentor-img-4.jpg" alt="mentor 3" class="avatar avatar-xl rounded-circle" />
                                                <div class="mt-3">
                                                    <h3 class="mb-0 h4">Pdt. Patrice Long</h3>
                                                    <span class="text-gray-800">Pemimpin Kelompok Doa</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#!" class="bg-body-transparent text-center shadow-sm text-wrap rounded-4 w-100 border card-lift border" style="width: 200px !important">
                                            <div class="p-3">
                                                <img src="../assets/images/mentor/mentor-img-5.jpg" alt="mentor 4" class="avatar avatar-xl rounded-circle" />
                                                <div class="mt-3">
                                                    <h3 class="mb-0 h4">Bapak Akshay Sharma</h3>
                                                    <span class="text-gray-800">Pengurus Gereja</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#!" class="bg-body-transparent text-center shadow-sm text-wrap rounded-4 w-100 border card-lift border" style="width: 200px !important">
                                            <div class="p-3">
                                                <img src="../assets/images/mentor/mentor-img-6.jpg" alt="mentor 5" class="avatar avatar-xl rounded-circle" />
                                                <div class="mt-3">
                                                    <h3 class="mb-0 h4">Ibu Jessica Lupien</h3>
                                                    <span class="text-gray-800">Pengurus Kegiatan Anak</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#!" class="bg-body-transparent text-center shadow-sm text-wrap rounded-4 w-100 border card-lift border" style="width: 200px !important">
                                            <div class="p-3">
                                                <img src="../assets/images/mentor/mentor-img-7.jpg" alt="mentor 6" class="avatar avatar-xl rounded-circle" />
                                                <div class="mt-3">
                                                    <h3 class="mb-0 h4">Cathy Diehl</h3>
                                                    <span class="text-gray-800">Pengurus Remaja</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-10 mt-5">
                            <section class="py-lg-16 py-8 bg-white position-relative scrollspy-example bg-body-secondary p-3 rounded-2">
                                <div class="container position-relative">
                                    <a id="about" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%"
                                       data-bs-smooth-scroll="true"
                                       class="text-uppercase text-dark pb-3 fw-semibold ls-md d-block text-center text-md-center"
                                       style="font-size: larger; text-decoration: underline;">
                                        Tentang Kami
                                    </a>
                                    <div class="row align-items-center">
                                        <div class="col-md-6 text-center text-md-start">
                                            <h2 data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%"
                                                data-bs-smooth-scroll="true"
                                                class="h2 fw-bold mt-3 mb-2">
                                                Gereja Kami: Tempat untuk Tumbuh dalam Iman
                                            </h2>
                                            <p class="mb-4 fs-4">
                                                Kami adalah komunitas yang percaya pada kekuatan iman, kasih, dan pelayanan. Gereja kami
                                                adalah tempat untuk tumbuh bersama dalam kehidupan rohani dan berbagi kasih kepada sesama.
                                            </p>
                                        </div>

                                        <div class="col-md-6 text-center">
                                            <img src="assets/images/gereja-bg.jpg" alt="Gereja" class="img-fluid rounded-2 shadow">
                                        </div>
                                    </div>
                                    <div class="text-end pt-3">
                                        <a href="#aboutall" class="btn btn-outline-primary border-secondary text-dark hover-link">
                                            Lihat Selengkapnya
                                        </a>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>

{{--                <div class="border-bottom border-secondary m-5" style="width: 75%;"></div>--}}

                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12 col-lg-6 mb-3">
                            <div data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-secondary p-2 p-3 rounded-2" tabindex="0">
                                <h4 id="berita">Berita</h4>
                                <hr class="flex-grow-1 border-secondary" style="height: 2px; border-width: 5px;margin-left: 75px; margin-top: -20px; margin-bottom: 25px;">
                                <div class="row pb-3">
                                    <div class="col-12">
                                        <div class="card border border-0 shadow">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 pt-2">
                                                        <img src="{{('assets/images/home.jpg')}}" alt="berita 1" class="img-fluid rounded-2 shadow">
                                                    </div>
                                                    <div class="col-12 col-lg-6" style="overflow: hidden; max-height: 200px;">
                                                        <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 6; -webkit-box-orient: vertical;">
                                                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col-12">
                                        <div class="card border border-0 shadow">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 pt-2">
                                                        <img src="{{('assets/images/home.jpg')}}" alt="berita 1" class="img-fluid rounded-2 shadow">
                                                    </div>
                                                    <div class="col-12 col-lg-6" style="overflow: hidden; max-height: 200px;">
                                                        <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 6; -webkit-box-orient: vertical;">
                                                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col-12">
                                        <div class="card border border-0 shadow">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 pt-2">
                                                        <img src="{{('assets/images/home.jpg')}}" alt="berita 1" class="img-fluid rounded-2 shadow">
                                                    </div>
                                                    <div class="col-12 col-lg-6" style="overflow: hidden; max-height: 200px;">
                                                        <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 6; -webkit-box-orient: vertical;">
                                                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col-12">
                                        <div class="card border border-0 shadow">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 pt-2">
                                                        <img src="{{('assets/images/home.jpg')}}" alt="berita 1" class="img-fluid rounded-2 shadow">
                                                    </div>
                                                    <div class="col-12 col-lg-6" style="overflow: hidden; max-height: 200px;">
                                                        <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 6; -webkit-box-orient: vertical;">
                                                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col-12">
                                        <div class="card border border-0 shadow">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 pt-2">
                                                        <img src="{{('assets/images/home.jpg')}}" alt="berita 1" class="img-fluid rounded-2 shadow">
                                                    </div>
                                                    <div class="col-12 col-lg-6" style="overflow: hidden; max-height: 200px;">
                                                        <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 6; -webkit-box-orient: vertical;">
                                                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-12 d-flex justify-content-center">
                                        <a href="#aboutall" class="btn btn-outline-primary border-secondary text-dark w-100">
                                            Lihat Selengkapnya
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-12 col-lg-4">
                            <div class="bg-success p-2 text-dark bg-opacity-10">
                                <h4 id="artikel" class="bg-success text-center text-white mb-3" style="position: sticky; top: 0; z-index: 1;">Artikel</h4>
                                <div class="p-2" style="height: 400px; overflow-y: scroll; overflow-x: hidden;">
                                    <div class="row pb-3">
                                        <div class="col-12">
                                            <div class="card border bg-success text-dark bg-opacity-25 border-0 shadow">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-6 pt-2">
                                                            <img src="{{('assets/images/home.jpg')}}" alt="berita 1" class="img-fluid rounded-2 shadow">
                                                        </div>
                                                        <div class="col-12 col-lg-6" style="overflow: hidden; max-height: 100px;">
                                                            <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">
                                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col-12">
                                            <div class="card border bg-success text-dark bg-opacity-25 border-0 shadow">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-6 pt-2">
                                                            <img src="{{('assets/images/home.jpg')}}" alt="berita 1" class="img-fluid rounded-2 shadow">
                                                        </div>
                                                        <div class="col-12 col-lg-6" style="overflow: hidden; max-height: 100px;">
                                                            <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">
                                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col-12">
                                            <div class="card border bg-success text-dark bg-opacity-25 border-0 shadow">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-6 pt-2">
                                                            <img src="{{('assets/images/home.jpg')}}" alt="berita 1" class="img-fluid rounded-2 shadow">
                                                        </div>
                                                        <div class="col-12 col-lg-6" style="overflow: hidden; max-height: 100px;">
                                                            <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">
                                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col-12">
                                            <div class="card border bg-success text-dark bg-opacity-25 border-0 shadow">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-6 pt-2">
                                                            <img src="{{('assets/images/home.jpg')}}" alt="berita 1" class="img-fluid rounded-2 shadow">
                                                        </div>
                                                        <div class="col-12 col-lg-6" style="overflow: hidden; max-height: 100px;">
                                                            <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">
                                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col-12">
                                            <div class="card border bg-success text-dark bg-opacity-25 border-0 shadow">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-6 pt-2">
                                                            <img src="{{('assets/images/home.jpg')}}" alt="berita 1" class="img-fluid rounded-2 shadow">
                                                        </div>
                                                        <div class="col-12 col-lg-6" style="overflow: hidden; max-height: 100px;">
                                                            <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">
                                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col-12">
                                            <div class="card border bg-success text-dark bg-opacity-25 border-0 shadow">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-6 pt-2">
                                                            <img src="{{('assets/images/home.jpg')}}" alt="berita 1" class="img-fluid rounded-2 shadow">
                                                        </div>
                                                        <div class="col-12 col-lg-6" style="overflow: hidden; max-height: 100px;">
                                                            <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">
                                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col-12">
                                            <div class="card border bg-success text-dark bg-opacity-25 border-0 shadow">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-6 pt-2">
                                                            <img src="{{('assets/images/home.jpg')}}" alt="berita 1" class="img-fluid rounded-2 shadow">
                                                        </div>
                                                        <div class="col-12 col-lg-6" style="overflow: hidden; max-height: 100px;">
                                                            <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">
                                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col-12">
                                            <div class="card border bg-success text-dark bg-opacity-25 border-0 shadow">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-6 pt-2">
                                                            <img src="{{('assets/images/home.jpg')}}" alt="berita 1" class="img-fluid rounded-2 shadow">
                                                        </div>
                                                        <div class="col-12 col-lg-6" style="overflow: hidden; max-height: 100px;">
                                                            <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">
                                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="kegiatan" class="bg-primary p-2 text-dark bg-opacity-10 pt-3" style="position: sticky; top: 80px; margin-top: 20px">
                                <h4 class="bg-primary text-center text-white mb-3 pb-1" style="position: sticky; top: 0; z-index: 1;">Kalender Kegiatan</h4>
                                <div class="card border bg-primary text-dark bg-opacity-10 border-0 shadow">
                                    <div class="card-body">
                                        <div id="calendar">
                                        </div>
                                        <br>
                                        <h5 class="ext-start">Kegiatan Mendatang</h5>
                                        <div class="row">
                                            <div class="col-12 col-lg-12">
                                                <div class="text-start">Nama Kegiatan: Pembagian Buku Alkitab</div>
                                                <div class="text-start">Tanggal: 1 Januari 2023</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-10 mt-4">
                            <div class="bg-body-secondary p-2">
                                <h4 id="gallery" class="bg-secondary text-center text-white mb-3" style="position: sticky; top: 0; z-index: 1;">Gallery</h4>
                                <div class="p-2">
                                    <div class="row">
                                        <div class="col-12 col-lg-4 mb-3">
                                            <figure class="gallery__item">
                                                <img src="{{ asset('/assets/images/home.jpg') }}" alt="Gallery image 1" class="gallery__img rounded-3">
                                            </figure>
                                        </div>
                                        <div class="col-12 col-lg-4 mb-3">
                                            <figure class="gallery__item">
                                                <img src="{{ asset('/assets/images/home.jpg') }}" alt="Gallery image 1" class="gallery__img rounded-3">
                                            </figure>
                                        </div>
                                        <div class="col-12 col-lg-4 mb-3">
                                            <figure class="gallery__item">
                                                <img src="{{ asset('/assets/images/home.jpg') }}" alt="Gallery image 1" class="gallery__img rounded-3">
                                            </figure>
                                        </div>
                                        <div class="col-12 col-lg-4 mb-3">
                                            <figure class="gallery__item">
                                                <img src="{{ asset('/assets/images/home.jpg') }}" alt="Gallery image 1" class="gallery__img rounded-3">
                                            </figure>
                                        </div>
                                        <div class="col-12 col-lg-4 mb-3">
                                            <figure class="gallery__item">
                                                <img src="{{ asset('/assets/images/home.jpg') }}" alt="Gallery image 1" class="gallery__img rounded-3">
                                            </figure>
                                        </div>
                                        <div class="col-12 col-lg-4 mb-3">
                                            <figure class="gallery__item">
                                                <img src="{{ asset('/assets/images/home.jpg') }}" alt="Gallery image 1" class="gallery__img rounded-3">
                                            </figure>
                                        </div>

                                        <div class="col-12 ms-2">
                                            <a href="#aboutall" class="btn btn-outline-primary border-secondary text-dark hover-link">
                                                Lihat Selengkapnya
                                            </a>
                                        </div>

                                        {{--Bisa digunakan untuk pagination nanti dibagian
                                        controller di ubah atau ditambah jumlah yang ingin ditampilkan--}}
                                        {{-- <div class="d-flex justify-content-center">
                                            {{ $products->links() }}
                                        </div> --}}
                                    </div>
                                </div>
                            </div>

                            <!-- footer -->
                            <footer class="bg-dark text-white pt-5 pb-4">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 mb-4">
                                            <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=300&amp;height=320&amp;hl=en&amp;q=Universitas Kristen Immanuel Yogyakarta&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://sprunkin.com/">Sprunki Game</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:320px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:320px;}.gmap_iframe {height:320px!important;}</style></div>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <h5 class="fw-bold mb-3">Tautan Cepat</h5>
                                            <ul class="list-unstyled">
                                                <li><a href="#home" class="text-decoration-none text-white">Beranda</a></li>
                                                <li><a href="#about" class="text-decoration-none text-white">Tentang Kami</a></li>
                                                <li><a href="#berita" class="text-decoration-none text-white">Berita</a></li>
                                                <li><a href="#artikel" class="text-decoration-none text-white">Artikel</a></li>
                                                <li><a href="#gallery" class="text-decoration-none text-white">Galeri</a></li>
                                            </ul>
                                            <h5 class="fw-bold mt-4 mb-3">Sosial Media</h5>
                                            <div class="d-flex gap-3">
                                                <a href="#" class="text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                                                    </svg>
                                                </a>
                                                <a href="#" class="text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                                                    </svg>
                                                </a>
                                                <a href="#" class="text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                                                    </svg>
                                                </a>
                                                <a href="#" class="text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                                        <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <h5 class="fw-bold mb-3">Jadwal Ibadah</h5>
                                            <ul class="list-unstyled">
                                                <li><strong>Minggu Pagi:</strong> 08.00 - 10.00 WIB</li>
                                                <li><strong>Minggu Sore:</strong> 17.00 - 19.00 WIB</li>
                                                <li><strong>Kelas Katekisasi:</strong> Sabtu, 09.00 - 11.00 WIB</li>
                                                <li><strong>Kelompok Doa:</strong> Rabu, 19.00 - 21.00 WIB</li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');

                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay'
                    },
                    events: '/api/jadwal-ibadah'
                });

                calendar.render();
            });
        </script>

        {{--Bootstrap JS--}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- FullCalender JS -->
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js'></script>
</body>
</html>




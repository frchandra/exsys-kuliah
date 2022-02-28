<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bismillah "A"</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>

    <style>
        input[type=checkbox]
        {
        /* Double-sized Checkboxes */
        -ms-transform: scale(1.2); /* IE */
        -moz-transform: scale(1.2); /* FF */
        -webkit-transform: scale(1.2); /* Safari and Chrome */
        -o-transform: scale(1.2); /* Opera */
        transform: scale(1.2);
        padding: 10px;
        }

        input[type=radio]
        {
        /* Double-sized Checkboxes */
        -ms-transform: scale(1.2); /* IE */
        -moz-transform: scale(1.2); /* FF */
        -webkit-transform: scale(1.2); /* Safari and Chrome */
        -o-transform: scale(1.2); /* Opera */
        transform: scale(1.2);
        padding: 10px;
        }

        /* Might want to wrap a span around your checkbox text */
        .checkboxtext
        {
        /* Checkbox text */
        font-size: 110%;
        display: inline;
        }
    </style>


    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="/">Home</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Sumber Literasi / Informasi Diare</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Tentang Website</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">               
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Result</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-stethoscope"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

                <span class="rounded-lg container d-flex align-items-left flex-column border border-light py-5 px-5" style="background-color:DarkSlateGray">
                    <h3 class="masthead-subheading font-weight-light mb-0">Berikut Adalah Rekomendasi Kami : </h3>
                    <br>
                    <br>


                    @foreach ($response as $res)
                        @if ($res === "A")
                            <h5>Terapi cairan oral: untuk semua kasus, hidrasi melalui asupan cairan dan garam</h5>
                            <h5>Makanan: sup, kaldu, biskuit bergara, makanan yang dipanggang dan dibakar</h5>
                            <br>
                            <br>

                        @elseif ($res === "B")
                            <h5>Anda memerlukan banyak minum</h5>
                            <h5>Anda dapat menggunakan loperamide 4 mg untuk mengendalikan Buang Air Besar</h5>
                            <br>
                            <br>

                        @elseif ($res === "C")
                            <h5>Anda memerlukan terapi antibiotik, konsultasikan kepada tenaga kesehatan profesional</h5>
                            <br>
                            <br>

                        @elseif ($res === "D")
                            <h5>Pertimbangkan terapi loperamide selama kurang dari 48 jam</h5>
                            <br>
                            <br>

                        @elseif ($res === "E")
                            <h5>Penilaian mikrobiologi, maka agen anti-mikroba diarahkan menyebabkan kasus untuk semua kecuali infeksi STEC (informasi ini dikutip langsung dari : ygi.or.id/ketahui-penanganan-diare-akut-yang-tepat/2/) </h5>
                            <br>
                            <br>

                        @elseif ($res === "F")
                            <h5>Anda perlu mempertimbangkan penilaian mikrobiologi</h5>
                            <br>
                            <br>

                        @elseif ($res === "G")
                            <h5>Anda perlu pengobatana empiris, Azithromycin 1 gram dosis tunggal atau 500 mg sekali sehari selama 3 hari</h5>
                            <br>
                            <br>

                        @else
                            I don't have any records!
                        @endif
                    @endforeach
                    @if ($caution === true)
                    <h5>Anda orang yang tergolong rentan dan memerlukan evaluasi yang ketat</h5>
                    <br>
                    <br>
                    @elseif ($caution === false)
                        <h5>Selesai. Hanya ini yang dapat kami perloeh</h5>
                        <br>
                        <br>

                    @endif

                    <br>
                    <br>
                    <br>
                    <br>
                    <h5>*)informasi ini dikutip langsung dari : ygi.or.id/ketahui-penanganan-diare-akut-yang-tepat/2/</h5>
                    <br>

                </span>
            </div>
            <br>   
        </header>

        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
        <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-dark">Sumber Literasi dan Informasi </h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-dark">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-stethoscope"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->

                <h4 class="text-center text-dark">Sistem di website ini dikembangkan berdasarkan pada informasi dan artikel berikut ini : </h4>
                <h6 class="text-center text-dark">ACG Clinical Guideline Diagnosis Treament & Prevention of Acute Diarrhea Infection, 2016</h6>
                <h6 class="text-center text-dark">Ketahui Penanganan Diare Akut yang Tepat,  dr. Virly Nanda Muzellina, SpPD</h6>
                   

                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-dark" href="https://ygi.or.id/ketahui-penanganan-diare-akut-yang-tepat/2/">
                    <i class="fas fa-external-link-alt"></i>
                        Kunjungi Sumber Informasi
                    </a>
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Tentang Website</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-stethoscope"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <h4 class="text-center text-dark">Expert System Core : </h4>
                <h6 class="text-center text-dark">Python3 Programming Language</h6>
                <h6 class="text-center text-dark">"Experta" : CLIPS Based Python's Expert System Library</h6>
                <br>
                <h4 class="text-center text-dark">Backend Core Interaction : </h4>
                <h6 class="text-center text-dark">PHP 8 Programming Language</h6>
                <h6 class="text-center text-dark">Apache Web Server</h6>
                <h6 class="text-center text-dark">Laravel 8 Framework</h6>
                <br>
                <h4 class="text-center text-dark">Frontend and Web Theme : </h4>
                <h6 class="text-center text-dark">HTML5</h6>
                <h6 class="text-center text-dark">Bootstrap</h6>
                <h6 class="text-center text-dark">Freelancer</h6>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-dark" href="/#about">
                    <i class="fas fa-external-link-alt"></i>
                        Repo Github
                    </a>
                </div>
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-stethoscope"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <h6 class="text-center text-dark">nismara.chandra@mail.ugm.ac.id</h6>
                <h6 class="text-center text-dark">Nismara Chandra Herdiputra | 20/456374/TK/50504 | TIF</h6>

            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            Yogyakarta
                            <br />
                            Indonesia
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">About Freelancer</h4>
                        <p class="lead mb-0">
                            Freelance is a free to use, MIT licensed Bootstrap theme created by
                            <a href="http://startbootstrap.com">Start Bootstrap</a>
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; frchandra 2022</small></div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>


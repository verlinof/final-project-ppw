<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- link css boot strap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <!-- link style.css -->
    <link rel="stylesheet" href="./style.css" />
    <!-- link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet" />
    <!-- Informasi Website -->
    <title>Web Portofolio</title>
    <link rel="website icon" type="png" href="src/website-logo.png">
</head>

<body>
    <!-- Awal navbar -->
    <nav class="navbar navbar-light bg-light container-fluid navbar-expand-lg bg-light fixed-top shadow rounded">
        <div class="container-lg px-sm-5">
            <a class="navbar-brand" href="#">Verlino<span class="fajri">Fajri</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse align-items-center container-fluid w-100 navbar-responsive shadow-sm shadow-none rounded-4 bg-white"
                id="navbarNavAltMarkup">
                <div class="navbar-nav ms-md-auto">
                    <a id="nav-about" class="nav-link px-lg-3 py-sm-3 text-md-start text-center" aria-current="page"
                        href="#about-me">About</a>
                    <a class="nav-link px-lg-3 py-sm-3 text-md-start text-center" href="#my-projects">Projects</a>
                    <a class="nav-link px-lg-3 py-sm-3 text-md-start text-center" href="#skill">Skill</a>
                    <a class="nav-link px-lg-3 py-sm-3 text-md-start text-center" href="#comment">Comments</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir navbar -->
    <!-- Awal jumbotron -->
    <section id="about-me" class="jumbotron text-center p-0 pt-5 mt-5">
        <img src="src/Ellipse.png" alt="Gambar profil" width="250" class="py-5" />
        <h3 class="fw-bold">Verlino Raya Fajri</h3>
        <p class="lead fw-bold">
            Software Engineer | Undergraduate student at UGM | Programming
            Enthusiast
        </p>
        <svg id="about-me" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#7ce0f4" fill-opacity="1"
                d="M0,192L48,202.7C96,213,192,235,288,229.3C384,224,480,192,576,197.3C672,203,768,245,864,240C960,235,1056,181,1152,160C1248,139,1344,149,1392,154.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- Akhir jumbotron -->
    <!-- About me -->
    <section class="container-fluid about-me pb-0 pt-lg-5 m-0 p-0">
        <div class="container-md p-0">
            <div class="row justify-content-sm-center m-0 justify-content-lg-around container-fluid align-items-center">
                <h1 class="text-center fw-bold">About me</h1>
                <img src="src/karakter.png" alt=""
                    class="karakter-about ms-sm-auto me-sm-auto col-sm-12 col-md-12 col-lg-4 mx-auto" />
                <p class="col-sm-12 col-md-12 col-lg-6 text-about fw-semibold">
                    &nbsp; &nbsp; Saya adalah mahasiswa yang sekarang sedang menempuh
                    pendidikan sebagai Software Engineer Technology Sekolah Vokasi
                    Universitas Gadjah Mada, menurut saya dunia IT adalah dunia yang
                    menarik, dikarenakan kita dapat dengan bebas membuat aplikasi yang
                    kita inginkan atau butuhkan dengan membuatnya dalam sebuah codingan.
                    Saya memiliki harapan yaitu saya bisa sukses di dalam dunia
                    informatika ini, agar dapat membuat bangga orang tua saya. Salam
                    kenal semuanya. <br />
                    &nbsp;&nbsp; Saya adalah mahasiswa yang sekarang sedang menempuh
                    pendidikan sebagai Software Engineer Technology Sekolah Vokasi
                    Universitas Gadjah Mada, menurut saya dunia IT adalah dunia yang
                    menarik, dikarenakan kita dapat dengan bebas membuat aplikasi yang
                    kita inginkan atau butuhkan dengan membuatnya dalam sebuah codingan.
                    Saya memiliki harapan yaitu saya bisa sukses di dalam dunia
                    informatika ini, agar dapat membuat bangga orang tua saya. Salam
                    kenal semuanya!!
                </p>
            </div>
        </div>
        <svg id="my-projects" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffff" fill-opacity="1"
                d="M0,192L48,202.7C96,213,192,235,288,229.3C384,224,480,192,576,197.3C672,203,768,245,864,240C960,235,1056,181,1152,160C1248,139,1344,149,1392,154.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- Akhir about me -->
    <!-- Project -->
    <section class="projects pt-lg-5 pb-0 container-fluid p-0">
        <div class="container">
            <div class="row d-flex align-items-center">
                <h1 class="text-center fw-bold">My Projects</h1>
            </div>
            <div
                class="row row-cols-1 row-cols-lg-4 row-cols-md-2 projects-items d-flex pt-4 justify-content-md-start justify-content-sm-center mx-sm-auto flex-sm-wrap g-4">
                <?php
                include "connect.php";
                $sql = mysqli_query($conn,"SELECT * FROM data_web");
                foreach($sql as $value){
                    echo " 
                <div class='card col-sm-12 col-md-6 mx-auto d-block' style='width: 15rem'>
                    <img class='card-img-top img-fluid' src='".$value['img']."'
                        alt='Card image cap' />
                    <div class='card-body'>
                        <p class='fw-bold'>".$value['heading']."</p>
                        <p class='card-text'>
                            ".$value['description']."
                        </p>
                    </div>
                </div>";
                };
                ?>
            </div>
        </div>
        <svg id="skill" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#7ce0f4" fill-opacity="1"
                d="M0,192L48,176C96,160,192,128,288,144C384,160,480,224,576,218.7C672,213,768,139,864,117.3C960,96,1056,128,1152,154.7C1248,181,1344,203,1392,213.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- akhir project -->
    <!-- awal skill -->
    <section class="skills pt-lg-5 pb-0 container-fluid">
        <div class="container">
            <div class="row py-4">
                <h1 class="text-center fw-bold">My Skills</h1>
            </div>
            <!-- Awal isi  -->
            <div class="row g-5 pt-3 px-lg-5 py-5 justify-content-md-start">
                <?php
                include "connect.php";
                $sql = mysqli_query($conn, "SELECT * FROM skill_data");
                
                foreach($sql as $value){
                    echo "
                <div class='border border-black bg-white p-3 col-lg-4 col-sm-12 d-flex rounded-4'>
                    <img src='".$value['img']."' class='lp-logo p-2' alt='' />
                    <div class='pl-description p-2 ms-auto'>
                        <h3 class='fw-bold'>".$value['languages']."</h3>
                        <p>".$value['skill']."</p>
                    </div>
                </div>";
                }
                ?>
                <!-- Akhir isi -->
            </div>
        </div>
    </section>
    <svg id="comment" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#7ce0f4" fill-opacity="1"
            d="M0,64L48,58.7C96,53,192,43,288,69.3C384,96,480,160,576,170.7C672,181,768,139,864,133.3C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
    </svg>
    <!-- akhir skill -->

    <!-- Awal Comments -->
    <section class="comments pb-0 pt-lg-5 container-fluid">
        <div class="container">
            <div class="row">
                <h1 class="fw-bold text-center">Comments</h1>
            </div>
            <div class="row py-3">
                <!-- awal input komentar -->
                <form id="form-comment" method="post">
                    <div class="name-section pb-3">
                        <label for="name">
                            <h4>Your Name</h4>
                        </label>
                        <input type="text" id="name-input" name="name" class="container-fluid border-1 rounded-4"
                            required />
                    </div>
                    <div class="comment-section pb-3">
                        <label for="comment">
                            <h4>Comment</h4>
                        </label>
                        <textarea name="comment" id="comment-input"
                            class="container-fluid comment-input border-1 rounded-4" required></textarea>
                    </div>
                    <input type="submit" name="submit" value="Submit" class="submit-btn" />
                </form>
            </div>
            <!-- akhir input komentar -->
            <!-- awal isi komentar -->
            <div id="list-comment" class="row py-3">
                <h3 class="py-3">Comment Section</h3>
                <swiper-container class="mySwiper pb-3" space-between="30" centered-slides="true" autoplay-delay="2500"
                    autoplay-disable-on-interaction="false">
                    <?php
                include "connect.php";
                $sql = mysqli_query($conn,"SELECT * FROM comments");
                
                foreach($sql as $value){
                        echo "     
                    <swiper-slide class='card rounded-3 p-2'>
                        <div class='card-header fw-bold'>".$value['nama']."</div>
                        <div class='card-body'>
                            <p class='card-text'>".$value['comment']."</p>
                        </div>
                    </swiper-slide>";
                    };
                    ?>
                </swiper-container>
            </div>
        </div>
    </section>
    <!-- Akhir Comments -->

    <!-- Awal footer -->
    <div class="container-fluid footer shadow-lg rounded-1 border border-1">
        <div class="container-md container-fluid d-flex">
            <div class="col py-4">
                <h5 class="fw-bold" href="#">Verlino<span class="fajri">Fajri</span><span class="fw-light">
                        © 2023</span>
                </h5>
            </div>
            <div class="col py-4 d-flex justify-content-end">
                <a class="px-1 socmed-logo" href="https://www.instagram.com/aji_koko_/?hl=en"><img
                        src="src/instagram-logo.png" class="socmed-logo" alt="Instagram"></a>
                <a class="px-1 socmed-logo" href="https://www.linkedin.com/in/verlino-raya-fajri-12064624a"><img
                        src="src/linkedin-logo .png" class="socmed-logo" alt="Linkedin"></a>
                <a class="px-1 socmed-logo" href="https://github.com/verlinof"><img src="src/github-logo.png"
                        class="socmed-logo" alt="Github"></a>
            </div>
        </div>
    </div>
    <!-- Akhir footer -->

    <!-- Link javascript sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Link javaScript swiperjs -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    <!-- link bootstrap javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <!-- link javascript -->
    <script src="script.js"></script>
</body>

</html>
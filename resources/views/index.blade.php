<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    {{-- My CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>My Portofolio | Vincentius Leonanda</title>
  </head>
  <script>
    function toggleSection(id) {
    const sections = ["aboutText", "achivmentInformatics", "portofolio", "achivmentHuman"];
    const foto = document.getElementById("fotoSection");
    const target = document.getElementById(id);

    // Jika target sedang tampil → klik lagi = kembali ke foto
    if (target.style.display === "block") {
        // Sembunyikan semua section
        sections.forEach(s => document.getElementById(s).style.display = "none");
        foto.style.display = "block";
        return;
    }

    // Jika target belum tampil → tampilkan target saja
    sections.forEach(s => document.getElementById(s).style.display = "none");
    foto.style.display = "none";
    target.style.display = "block";
}
    function showAbout() {
        document.getElementById("fotoSection").style.display = "none";
        document.getElementById("achivmentInformatics").style.display = "none";
        document.getElementById("portofolio").style.display = "none";
        document.getElementById("achivmentHuman").style.display = "none";
        document.getElementById("aboutText").style.display = "block";
    }
        function showPortofolio() {
        document.getElementById("fotoSection").style.display = "none";
        document.getElementById("achivmentInformatics").style.display = "none";
        document.getElementById("portofolio").style.display = "block";
        document.getElementById("achivmentHuman").style.display = "none";
        document.getElementById("aboutText").style.display = "none";
    }
        function showInformatics() {
        document.getElementById("fotoSection").style.display = "none";
        document.getElementById("achivmentInformatics").style.display = "block";
        document.getElementById("portofolio").style.display = "none";
        document.getElementById("achivmentHuman").style.display = "none";
        document.getElementById("aboutText").style.display = "none";
    }
        function showHuman() {
        document.getElementById("fotoSection").style.display = "none";
        document.getElementById("achivmentInformatics").style.display = "none";
        document.getElementById("portofolio").style.display = "none";
        document.getElementById("achivmentHuman").style.display = "block";
        document.getElementById("aboutText").style.display = "none";
    }
        function showFoto() {
        document.getElementById("fotoSection").style.display = "block";
        document.getElementById("achivmentInformatics").style.display = "none";
        document.getElementById("portofolio").style.display = "none";
        document.getElementById("achivmentHuman").style.display = "none";
        document.getElementById("aboutText").style.display = "none";
    }

</script>

  <body>
<section id="About">
    <div class="container-fluid">
        <div class="row full-height">

            <!-- Kolom Kiri -->
           <!-- KOLUM KIRI -->
            <div class="col-md-6 p-0 col-kiri-scroll">

                <!-- FOTO -->
                <div id="fotoSection">
                    <img src="{{ asset('img/Vincentius.png') }}" alt="foto" class="img-kiri">
                </div>

                <!-- ABOUT -->
                <div id="aboutText" class="p-4 text-white" style="display:none; height:100vh; background:#363333;">
                    <h2 class="mb-3">About Me</h2>
                    <p class="lh-base" style="text-align: justify;">Hai, saya Vincentius! <br>
                        Saya seseorang yang sangat tertarik dengan data dan teknologi. Saya memiliki latar belakang di bidang informatika dan telah mengembangkan keterampilan dalam analisis data, pemrograman, dan pengembangan web.
                        Saya senang belajar hal-hal baru dan selalu berusaha untuk meningkatkan diri saya dalam bidang teknologi.</p>
                    <p class="lh-base" style="text-align: justify;">
                        Selain itu, saya juga seorang pecinta basket. Saya adalah seorang yang masih aktif bermain basket, dan bahkan saya bekerja sebagai pelatih basket diluar jam perkuliahan.
                        Saya percaya bahwa kombinasi antara minat saya dalam data dan teknologi serta kecintaan saya terhadap olahraga membuat saya menjadi individu yang unik dan bersemangat untuk terus berkembang.</p>
                    <p class="lh-base" style="text-align: justify;">
                        Lewat perkuliahan dan kecintaan saya dengan data saya mengembangkan kemampuan teknis saya dalam data science dan web development.
                        Lewat permainan basket dan kegiatan melatih saya mengembangkan soft skill saya seperti leadership, teamwork, dan communication.
                        Saya sangat antusias untuk terus belajar dan berkontribusi dalam dunia teknologi dan data.
                    </p>
                </div>

                <!-- ACHIVEMENT INFORMATICS -->
                <div id="achivmentInformatics" class="p-4 text-white" style="display:none; height:100vh; background:#363333;">
                    <h2>Achievement Informatics</h2>
                    <p>Konten Informatics...</p>
                </div>

                <!-- PORTOFOLIO -->
                <div id="portofolio" class="p-4 text-white" style="display:none; height:100vh; background:#363333;">
                    <h2>Portofolio</h2>
                    <p>Konten Portofolio...</p>
                </div>

                <!-- ACHIVEMENT HUMAN -->
                <div id="achivmentHuman" class="p-4 text-white" style="display:none; height:100vh; background:#363333;">
                    <h2>Achievement as Human</h2>
                    <p>Konten Human...</p>
                </div>

            </div>


           <!-- Kolom Kanan -->
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center text-center col-kanan-fixed">

                <h2>Vincentius Leonanda Prabowo</h2>
                <p>Data Loverz | Data Science | Web Developer | Basketball Lovers</p>


               <a onclick="toggleSection('aboutText')" class="btn btn-outline-secondary w-50 mb-2">About</a>
                <a onclick="toggleSection('achivmentInformatics')" class="btn btn-outline-secondary w-50 mb-2">Achievement Informatics</a>
                <a onclick="toggleSection('portofolio')" class="btn btn-outline-secondary w-50 mb-2">Portofolio</a>
                <a onclick="toggleSection('achivmentHuman')" class="btn btn-outline-secondary w-50 mb-2">Achievement Human</a>


                <!-- BARIS IKON SOSMED -->
                <div class="d-flex gap-3 mt-2">

                    <a href="https://www.kaggle.com" target="_blank" class="social-icon">
                        <i class="bi bi-bar-chart-fill"></i>
                    </a>

                    <a href="https://www.linkedin.com" target="_blank" class="social-icon">
                        <i class="bi bi-linkedin"></i>
                    </a>

                    <a href="https://github.com" target="_blank" class="social-icon">
                        <i class="bi bi-github"></i>
                    </a>

                    <a href="https://www.instagram.com" target="_blank" class="social-icon">
                        <i class="bi bi-instagram"></i>
                    </a>

                    <a href="mailto:email@gmail.com" target="_blank" class="social-icon">
                        <i class="bi bi-envelope-fill"></i>
                    </a>
                </div>
            </div>
    </div>
</section>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>

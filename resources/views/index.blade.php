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
    function openFoto(img) {
    // buat elemen wrapper
    const wrapper = document.createElement("div");
    wrapper.classList.add("fullscreen");

    // duplikasi foto
    const bigImg = document.createElement("img");
    bigImg.src = img.src;

    // klik area gelap untuk close
    wrapper.onclick = () => wrapper.remove();

    wrapper.appendChild(bigImg);
    document.body.appendChild(wrapper);
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
                    <h2 class="mb-3">Achievement Informatics</h2>



                    <div class="achievements-scroll">
                        <div class="card youtube-card mb-3">
                            <img src="{{ asset('img/UIUX.png') }}" alt="kucing" class="youtube-thumb" style="height: 100%" onclick="openFoto(this)">
                            <div class="card-body">
                               <h5 class="card-title fw-bold" style="color: #363333">Best Inovation UI/UX Design Techomfest</h5>
                                <p class="card-text text-muted">Upgrade : <br> - UI/UX Design Skills.<br> - Strong ability to collaborate effectively within a team environment <br> - Ability to Present Work to Users</p>
                            </div>
                        </div>
                        <div class="card youtube-card mb-3">
                            <img src="{{ asset('img/SertifAI.png') }}" alt="sertifAI" class="youtube-thumb" style="height: 100%" onclick="openFoto(this)">
                            <div class="card-body">
                               <h5 class="card-title fw-bold" style="color: #363333">AI Ready ASEAN</h5>
                                <p class="card-text text-muted">Upgrade : Understanding how Artificial Intelligence (AI) operates</p>
                            </div>
                        </div>
                        <div class="card youtube-card mb-3">
                            <img src="{{ asset('img/JatimDevelop.png') }}" alt="kucing" class="youtube-thumb" style="height: 50%"  onclick="openFoto(this)">
                            <div class="card-body">
                               <h5 class="card-title fw-bold" style="color: #363333">Jatim Developer Day Malang</h5>
                                <p class="card-text text-muted">Upgrade : Knowledge of technology and the concept of Quality Assurance.</p>
                            </div>
                        </div>
                        <div class="card youtube-card mb-3">
                            <img src="{{ asset('img/scholltech.png') }}" alt="kucing" class="youtube-thumb" onclick="openFoto(this)" style="height: 50%">
                            <div class="card-body">
                               <h5 class="card-title fw-bold" style="color: #363333">Scholltech Intern as System Analist</h5>
                                <p class="card-text text-muted">Upgrade : <br> - in system analysis / System Analyst competencies.<br> - Understanding how to collaborate efficiently within a group</p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- PORTOFOLIO -->
                <div id="portofolio" class="p-4 text-white" style="display:none; height:100vh; background:#363333;">
                    <h2>Portofolio</h2>
                    <div class="achievements-scroll">
                        <div class="card youtube-card mb-3">
                            <a href="https://colab.research.google.com/drive/1JJgbPumFso6LWlm1yXdHr8KbwzSg3lP1?usp=sharing" target="_blank">
                                <img src="{{ asset('img/PCVK.png') }}" alt="Project" class="youtube-thumb">
                            </a>
                            <div class="card-body">
                               <h5 class="card-title fw-bold" style="color: #363333">Project : Identification of a person’s identity when wearing a mask</h5>
                                <p class="card-text text-muted">Technical skills in computer vision and image processing</p>
                            </div>
                        </div>
                        <div class="card youtube-card mb-3">
                            <a href="https://github.com/Leonanda1013/Pembelajaran_Mesin" target="_blank">
                                <img src="{{ asset('img/ML.png') }}" alt="Project" class="youtube-thumb">
                            </a>

                            <div class="card-body">
                               <h5 class="card-title fw-bold" style="color: #363333">Mechine Learning</h5>
                                <p class="card-text text-muted">Technical skills in machine learning</p>
                            </div>
                        </div>
                        <div class="card youtube-card mb-3">
                            <a href="https://github.com/Leonanda1013/PCVK_Ganjil_2025" target="_blank">
                                <img src="{{ asset('img/PCVK1.png') }}" alt="Project" class="youtube-thumb">
                            </a>
                            <div class="card-body">
                               <h5 class="card-title fw-bold" style="color: #363333">Computer vision image processing</h5>
                                <p class="card-text text-muted">Technical skills in computer vision and image processing</p>
                            </div>
                        </div>
                        <div class="card youtube-card mb-3">
                            <a href="https://simantap.dbsnetwork.my.id/" target="_blank">
                                <img src="{{ asset('img/SIMANTAP.png') }}" alt="Project" class="youtube-thumb">
                            </a>
                            <div class="card-body">
                               <h5 class="card-title fw-bold" style="color: #363333">Poject as System Analist</h5>
                                <p class="card-text text-muted">SIMANTAP : Sistem Pelaporan Cepat Tanggap</p>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- ACHIVEMENT HUMAN -->
                <div id="achivmentHuman" class="p-4 text-white" style="display:none; height:100vh; background:#363333;">
                    <h2>Achievement as Human</h2>
                    <div class="achievements-scroll">
                    <div class="card youtube-card mb-3">
                        <video class="youtube-video" controls>
                            <source src="{{ asset('video/melatih1.mp4') }}" type="video/mp4">
                        </video>
                        <div class="card-body">
                            <h5 class="card-title fw-bold" style="color: #363333">Basketball Coach 2024-Present</h5>
                            <p class="card-text text-muted">Upgrade : The ability to communicate complex knowledge in simple, easy-to-understand language</p>
                        </div>
                    </div>
                     <div class="card youtube-card mb-3">
                            <img src="{{ asset('img/1B.png') }}" alt="kucing" class="youtube-thumb" onclick="openFoto(this)">
                            <div class="card-body">
                               <h5 class="card-title fw-bold" style="color: #363333">Class Leader in the First Year</h5>
                                <p class="card-text text-muted">Upgrade : Leadership, Communication skills, management skills</p>
                            </div>
                    </div>
                     <div class="card youtube-card mb-3">
                            <img src="{{ asset('img/2A.png') }}" alt="kucing" class="youtube-thumb" onclick="openFoto(this)">
                            <div class="card-body">
                               <h5 class="card-title fw-bold" style="color: #363333">Class Leader in the Second Year</h5>
                                <p class="card-text text-muted">Upgrade : Leadership, Communication skills, management skills</p>
                            </div>
                    </div>
                     <div class="card youtube-card mb-3">
                            <img src="{{ asset('img/3D.png') }}" alt="kucing" class="youtube-thumb" onclick="openFoto(this)">
                            <div class="card-body">
                               <h5 class="card-title fw-bold" style="color: #363333">Class Leader in the Third Year</h5>
                                <p class="card-text text-muted">Upgrade : Leadership, Communication skills, management skills</p>
                            </div>
                    </div>
                                         <div class="card youtube-card mb-3">
                            <img src="{{ asset('img/Jualan.png') }}" alt="kucing" class="youtube-thumb" onclick="openFoto(this)">
                            <div class="card-body">
                               <h5 class="card-title fw-bold" style="color: #363333">Selling Ramadan snacks (takjil)</h5>
                                <p class="card-text text-muted">Upgrade : Communication skills, Management skills, Entrepreneurship skills</p>
                            </div>
                    </div>
                            <div class="card youtube-card mb-3">
                            <img src="{{ asset('img/Barista.png') }}" alt="kucing" class="youtube-thumb" onclick="openFoto(this)">
                            <div class="card-body">
                               <h5 class="card-title fw-bold" style="color: #363333">Barista Koldjen Djaja 2023</h5>
                                <p class="card-text text-muted">Upgrade : Communication skills, Management skills, Entrepreneurship skills</p>
                            </div>
                    </div>
                    <div class="card youtube-card mb-3">
                        <video class="youtube-video" controls>
                            <source src="{{ asset('video/KMK.mp4') }}" type="video/mp4">
                        </video>
                        <div class="card-body">
                            <h5 class="card-title fw-bold" style="color: #363333">KMK Organization as Media Leader</h5>
                            <p class="card-text text-muted">Upgrade : Leadership, Communication Skill</p>
                        </div>
                    </div>



                    </div>
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

                    <a href="http://kaggle.com/vincentius1013" target="_blank" class="social-icon">
                        <i class="bi bi-bar-chart-fill"></i>
                    </a>

                    <a href="https://www.linkedin.com/in/vincentius-leonanda-prabowo-952a88292/" target="_blank" class="social-icon">
                        <i class="bi bi-linkedin"></i>
                    </a>

                    <a href="https://github.com/Leonanda1013" target="_blank" class="social-icon">
                        <i class="bi bi-github"></i>
                    </a>

                    <a href="https://www.instagram.com/vncttiooo_/" target="_blank" class="social-icon">
                        <i class="bi bi-instagram"></i>
                    </a>

                    <a href="mailto:leonandaprabowo@gmail.com" target="_blank" class="social-icon">
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

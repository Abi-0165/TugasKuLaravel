<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas-Ku</title>
    <link rel="stylesheet" href="LandingPage.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">Tugas-Ku</div>
        <ul class="nav-links">
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Fitur</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Bantuan</a></li>
        </ul>
        <button class="login-btn"><a href="{{ url('/loginpage') }}">Login</a></button>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
    <div class="container">
        <div class="hero-text">
            <h1>ATUR JADWAL <br> 
                <span class="highlight">JADI LEBIH</span> 
                <br><span class="white">ASIK</span> & <span class="white">SERU</span>
            </h1>
            <p>Aplikasi manajemen tugas dan jadwal belajar untuk siswa dan mahasiswa. 
               Dengan fitur Streak, pencatatan tugas dan reminder belajar akan lebih teratur dan menyenangkan!</p>
            
        </div>
        <div class="buttons">
                <button class="btn-light">Buka di browser anda</button>
                <button class="btn-dark"><img src="Icon.png" > Download di Play Store</button>
            </div>
        
        <div class="hero-image">
            <img src="Desain tanpa judul-2.png" alt="Mockup Aplikasi" style="width:1000px">
        </div>
    </div>
</section>



    <!-- Streak Section -->
    <section class="streak">
        <h1>JAGA <span class="highlight">STREAK</span> APIMU <br>
        JANGAN SAMPAI PADAM!</h1>
        <p>Selesaikan tugas kamu setiap hari agar Streak tetap menyala. Semakin lama Streak mu bertahan, semakin besar motivasi untuk tetap produktif. Jangan biarkan apinya padam!</p>
        <!-- masukin gambar api -->
        <div class="Streak-image">
            <img src="flame-icon.png" alt="Mockup Aplikasi" class="streakk">
        </div>
        <h3 class="textMemo"><img src="Memoji takut.png" alt="Memoji" class="MemojiScared">Kamu memiliki <span class="highlight2">27</span> Streaks!</h3>
        
    </section>

    <!-- Kategori Section -->
     <section class="kategori">
        <div class="text">
            <h2>KATEGORIKAN TUGASMU AGAR LEBIH MUDAH</h2>
            <p>Pilah tugas berdasarkan jenisnya, seperti Tugas, Ujian, atau Meeting agar lebih terorganisir. Temukan dan kelola tugas dengan mudah tanpa perlu mencari satu per satu!</p>
        </div>
        <div class="Category image">
            <img src="Category.png" alt="Mockup Aplikasi">
        </div>
     </section>

    <section class="Deadline">
        <div class="Calendar image">
            <img src="Mockup Calendar Page.png" alt="Mockup Aplikasi">
        </div>
         <div class="text">
            <h2>LIHAT TUGAS BERDASARKAN <span class="highlight">DEADLINE </span>NYA</h2>
            <P>Cek tugas yang harus diselesaikan lewat <span class="italic">Calendar View</span>. Lihat jadwal harian atau mingguanmu dalam sekali lihat agar lebih mudah mengatur waktu belajar.</P>
         </div>
    </section>

    <!-- Call to action -->
    <section class="cta">
        <h2>TUNGGU APA LAGI? YUK CATAT TUGASMU SEKARANG!</h2>
        <button class="btn-light">Buka di browser anda</button>
        <h1 class="cta-title">Tugas<span>Ku</span></h1>
        <div class="Banner image">
            <img src="Banner illustration.png" alt="Mockup Aplikasi" style="width:100px">
        </div>
    </section>
</body>
</html>

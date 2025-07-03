<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman User</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
   
</head>
<body>
    <!-- Header Section -->

        <header class="sticky-top py-2 border-bottom bg-white">
            <div class="container d-flex align-items-center justify-content-between">

                 <div class="d-flex align-items-center">
                    <img src="{{ asset('image/logo.png') }}" alt="Logo" style="height: 50px;">
                    <span class="ms-2 fw-bold">PERPUS</span> 
                </div>

                <nav>
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="#beranda" class="nav-link">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a href="#fitur" class="nav-link">Fitur</a>
                        </li>
                        <li class="nav-item">
                            <a href="#koleksi" class="nav-link">Koleksi</a>
                        </li>
                        <li class="nav-item">
                            <a href="#tentang" class="nav-link">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a href="#kontak" class="nav-link">Kontak</a>
                        </li>
                    </ul>
                </nav>
                
                <div class="d-flex align-items-center">
                     <form class="d-flex" role="search">
                         <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                         <button class="btn" style="background-color: #23afac; color: white;" type="submit">
                             Search
                         </button>
                     </form>

                     <form action="{{ route('logout') }}" method="POST" class="ms-3">
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin kleuar dari apliksi?')">
                                <i class="fa fa-sign-out"></i> Logout
                            </button>
                        </form>
                    </div>
               
            </div>
          </header>
          
          <main>
            <section class="hero" id="beranda">
              <div id="beranda">
                <h1 id="Apotek"><span  style="text-decoration: underline">NF Library</span> </h1>
                <p style="text-align:center; text-decoration: underline">Baca Buku Kesukaanmu Dimanapun dan Kapanpun!</p><br>
              </div>
              <div id="image">
                <img src="./image/perpus 3d.png"  alt="Pharmacist">
              </div>
            </section>
          </main>
    
    <!-- Picks Section -->
    <section class="picks" id="fitur">
        <h2>Pilih Topik yang Kamu Sukai!</h2>
        <div class="categories">
            <section class="categories" style="display: flex; align-items: center; justify-content: center; text-decoration: none;" >
                <div class="category-item">
                    <img src="./image/non fiksi.png" alt="Non fiksi" style="width: 150px; height: 150px; ">
                    <p style="text-align: center; text-decoration: none;"><a href="#Non-Fiksi">Non-Fiksi</a></p>
                </div>
                <div class="category-item">
                    <img src="./image/fiksi.png" alt="Fiksi" style="width: 150px; height: 150px;">
                    <p style="text-align: center;"><a href="#Fiksi">Fiksi</a></p>
                </div> 
            </section>


            
            <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
                <h2 style="text-align:left; font-weight:bold; text-decoration:underline;">NF Library </h2><br>
                <blockquote style="text-align: left; font-size: 20px; font-weight: 400; line-height: 1.5; color: #333; font-family: 'Arial', sans-serif;">
                NF Library adalah sebuah platform perpustakaan digital modern yang dirancang untuk memberikan kemudahan akses terhadap koleksi buku dan informasi literasi secara online. Website ini dikembangkan dengan tujuan utama untuk mendukung budaya membaca di kalangan pelajar, mahasiswa, dan masyarakat umum dengan pendekatan teknologi yang ramah pengguna. Melalui antarmuka yang sederhana namun elegan, pengguna dapat menjelajahi berbagai fitur seperti pencarian buku, melihat daftar koleksi terbaru, mengetahui informasi peminjaman, serta mendapatkan profil singkat dari setiap buku yang tersedia. NF Library juga menyediakan menu navigasi lengkap seperti Beranda, Fitur, Koleksi, Tentang, dan Kontak, yang semuanya disusun dalam satu halaman landing page yang responsif dan mudah digunakan baik di desktop maupun perangkat mobile. Dengan desain antarmuka yang dinamis dan navigasi yang mulus, pengguna dapat berpindah dari satu bagian ke bagian lainnya cukup dengan mengklik tombol menu — sistem akan secara otomatis menggulir ke bagian yang dituju. Hal ini menjadikan pengalaman pengguna lebih efisien dan intuitif. Di sisi teknis, NF Library dibangun menggunakan teknologi web modern berbasis Laravel Blade dan CSS yang ringan namun powerful, memastikan performa tetap optimal. Struktur layout disusun agar informasi penting mudah ditemukan, dan komponen seperti header, hero section, serta footer didesain dengan mempertimbangkan kenyamanan pengguna. Lebih dari sekadar sistem katalog buku digital, NF Library juga diharapkan menjadi wadah untuk meningkatkan literasi digital dan keterhubungan antar pembaca. Dengan adanya fitur kontak dan informasi tentang pengembang, NF Library membuka ruang interaksi untuk kolaborasi dan pengembangan berkelanjutan.
                </blockquote>
            </div>
  

             <!-- Under $25 Section -->
        <section class="under-25" id="koleksi" style="margin-bottom: 80px;">
        <h2 id="Fiksi" alt="Fiksi" style="text-decoration: underline;">Fiksi</h2>
        <div class="product-carousel">
            <div class="product-item" onclick="showBookModal('Filosofi Teras', 'Henry Manampiring', 'Buku pengantar filsafat stoik, mengajarkan cara berpikir tenang dan rasional.', '{{ asset('image/teras.png') }}', 5, 'https://drive.google.com/example1')">
                <img src="./image/teras.png" alt="Filosofi Teras">
                <p style="font-size: medium;"> Filosofi Teras</p>
                <h3 style="margin-top: 70px;"> Henry Manampiring </h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item" onclick="showBookModal('Nanti Juga Sembuh Sendiri', 'HeloBagas', 'Buku motivasi untuk menghadapi masalah hidup dengan sabar.', '{{ asset('image/Sembuh.png') }}', 5, 'https://drive.google.com/example2')">
                <img src="./image/Sembuh.png" alt="Nanti Juga Sembuh Sendiri">
                <p style="font-size: medium; ;">Nanti Juga Sembuh Sendiri</p>
                <h3 style="margin-top: 20px;">HeloBagas</h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item" onclick="showBookModal('Stop Overthiking', 'Nick Treton', 'Panduan mengatasi overthinking dan kecemasan.', '{{ asset('image/overthinking.png') }}', 5, 'https://drive.google.com/example3')">
                <img src="./image/overthinking.png" alt="Stop Overthiking">
                <p style="font-size: medium;">Stop Overthiking</p>
                <h3 style="margin-top: 60px;">Nick Treton</h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item" onclick="showBookModal('Berdamai Dengan Emosi', 'Asti Musman', 'Tips mengelola emosi dan kesehatan mental.', '{{ asset('image/Emosi.png') }}', 5, 'https://drive.google.com/example4')">
                <img src="./image/Emosi.png" alt="Berdamai Dengan Emosi">
                <p style="font-size: medium;">Berdamai Dengan Emosi</p>
                <h3 style="margin-top: 50px;">Asti Musman</h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item" onclick="showBookModal('Trik Memikat & Mempengaruhi Lawan Bicara', 'Yoga Pratama', 'Teknik komunikasi efektif untuk memikat lawan bicara.', '{{ asset('image/memikat.png') }}', 5, 'https://drive.google.com/example5')">
                <img src="./image/memikat.png" alt="Trik Memikat & Mempengaruhi Lawan Bicara">
                <p style="font-size: medium;">Trik Memikat & Mempengaruhi Lawan Bicara</p>
                <h3>Yoga Pratama</h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item" onclick="showBookModal('Berani Tidak Disukai', 'Ichiro Kishimi & Fumitake Koga', 'Buku pengembangan diri tentang keberanian menjadi diri sendiri.', '{{ asset('image/Berani (1).png') }}', 5, 'https://drive.google.com/example6')">
                <img src="./image/Berani (1).png" alt="Berani Tidak Disukai">
                <p style="font-size: medium;">Berani Tidak Disukai </p>
                <h3 style="margin-top: 40px;">Ichiro Kishimi & Fumitake Koga</h3>
                <span>★★★★★</span>
            </div>
            <p style="text-align:center; margin-top:20px;">
                <a href="{{ url('/fiksi') }}" class="btn-selengkapnya">Selengkapnya</a>
            </p>
        </div>
    </section>

    <!-- Modal Pop Up -->
    <div class="modal fade" id="bookModal" tabindex="-1" aria-labelledby="bookModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="bookModalLabel">Judul Buku</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center">
            <img id="bookModalCover" src="" alt="Cover Buku" style="max-width: 200px; margin-bottom: 20px;">
            <h6 id="bookModalAuthor"></h6>
            <div id="bookModalRating"></div>
            <p id="bookModalDesc"></p>
            <a id="bookModalDrive" href="#" target="_blank" class="btn btn-info mt-2">Lihat Buku (Drive)</a>
          </div>
        </div>
      </div>
    </div>

    <script>
      function showBookModal(title, author, desc, cover, rating, drive) {
        document.getElementById('bookModalLabel').innerText = title;
        document.getElementById('bookModalAuthor').innerText = 'Penulis: ' + author;
        document.getElementById('bookModalDesc').innerText = desc;
        document.getElementById('bookModalCover').src = cover;
        document.getElementById('bookModalDrive').href = drive;
        // Show rating as stars
        let stars = '';
        for (let i = 0; i < rating; i++) stars += '<i class="fa fa-star text-warning"></i>';
        document.getElementById('bookModalRating').innerHTML = '<div>Rating: ' + stars + '</div>';
        var myModal = new bootstrap.Modal(document.getElementById('bookModal'));
        myModal.show();
      }
    </script>

    <section class="under-25">
        <h2  id="Non-Fiksi" alt="Nonfiksi" style="text-decoration: underline;">Non-Fiksi</h2>
        <div class="product-carousel">
            <div class="product-item" onclick="showBookModal('30 Hari Jago Jualan', 'Dewa Eka Prayoga', 'Panduan praktis untuk meningkatkan penjualan dalam 30 hari.', '{{ asset('image/30 haei.png') }}', 5, 'https://drive.google.com/nonfiksi1')">
                <img src="./image/30 haei.png" alt="30 Hari Jago Jualan">
                <p style="font-size: medium;">30 Hari Jago Jualan</p>
                <h3 style=" margin-top: 70px;">Dewa Eka Prayoga </h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item" onclick="showBookModal('365 Tips Sehat ala Rasulullah', 'dr. Mohammad Ali Toha Assegaf', 'Tips kesehatan berdasarkan sunnah Rasulullah.', '{{ asset('image/365.png') }}', 5, 'https://drive.google.com/nonfiksi2')">
                <img src="./image/365.png" alt="365 Tips Sehat ala Rasulullah">
                <p style="font-size: medium; ;">365 Tips Sehat ala Rasulullah</p>
                <h3 style=" margin-top: 70px;"> dr. Mohammad Ali Toha Assegaf</h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item" onclick="showBookModal('Pengantar Statistik', 'Hotniar Sorongoringo & Rachmat Agus Nursamsi', 'Buku pengantar statistik untuk pemula.', '{{ asset('image/statistik.png') }}', 5, 'https://drive.google.com/nonfiksi3')">
                <img src="./image/statistik.png" alt="Pengantar statistik">
                <p style="font-size: medium;">Pengantar statistik</p>
                <h3 style="margin-top: 50px;">Hotniar Sorongoringo & Rachmat Agus Nursamsi</h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item" onclick="showBookModal('Think and Grow Rich', 'Napoleon Hill', 'Buku motivasi klasik tentang kesuksesan dan kekayaan.', '{{ asset('image/think.png') }}', 5, 'https://drive.google.com/nonfiksi4')">
                <img src="./image/think.png" alt="Think and Grow Rich">
                <p style="font-size: medium;">Think and Grow Rich</p>
                <h3 style=" margin-top: 60px;">Napoleon Hill</h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item" onclick="showBookModal('Keajaiban Asmaul Husna', 'Ardi Gunawan', 'Mengenal keutamaan dan keajaiban Asmaul Husna.', '{{ asset('image/husna (1).png') }}', 5, 'https://drive.google.com/nonfiksi5')">
                <img src="./image/husna (1).png" alt="Keajaiban Asmaul Husna">
                <p style="font-size: medium;">Keajaiban Asmaul Husna</p>
                <h3 style=" margin-top: 45px;">Ardi Gunawan</h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item" onclick="showBookModal('Keajaiban Istiqamah', 'Imam Sibawaih El Hasany', 'Kisah dan inspirasi tentang istiqamah dalam kehidupan.', '{{ asset('image/istiqamah.png') }}', 5, 'https://drive.google.com/nonfiksi6')">
                <img src="./image/istiqamah.png" alt="Keajaiban Istiqamah">
                <p style="font-size: medium;">Keajaiban Istiqamah </p>
                <h3 style="margin-top: 50px;">Imam Sibawaih El Hasany</h3>
                <span>★★★★★</span>
            </div>
            <p style="text-align:center; margin-top:20px;">
                <a href="{{ url('/nonfiksi') }}" class="btn-selengkapnya">Selengkapnya</a>
            </p>
        </div>
    </section>
    

    <!-- Promo Banners -->
    <section class="promo-banners" id="tentang">
        <div class="promo-item autumn-skincare">
            <img src="../P8_Landing Page Apotik/Image/Gratis Ongkir.jpg" alt="">
        </div>
    </section>

    <section id="about-us">
        <div class="overlay">
            <div class="container">
                <h1 style="text-align: left; text-decoration: underline;">About Us</h1>
                <p style="text-align: left; font-size: 20px; font-weight: 400; line-height: 1.5; color: #333; font-family: 'Arial', sans-serif; color: white; text-align: justify;">
                 NF Library adalah platform perpustakaan digital yang dikembangkan untuk mempermudah akses masyarakat terhadap koleksi buku dan literasi berbasis teknologi. Kami percaya bahwa membaca adalah pintu gerbang menuju ilmu pengetahuan, dan melalui NF Library, kami berkomitmen untuk menjadikannya lebih mudah, cepat, dan menyenangkan. Dengan tampilan antarmuka yang sederhana dan ramah pengguna, NF Library menghadirkan berbagai fitur penting seperti pencarian koleksi buku, tampilan ringkasan informasi buku, serta sistem navigasi yang terintegrasi dalam satu halaman. Semua ini dirancang untuk menciptakan pengalaman membaca digital yang nyaman dan efisien. Website ini dibangun menggunakan teknologi Laravel Blade dan CSS modern, yang memungkinkan sistem berjalan dengan ringan namun tetap responsif di berbagai perangkat. Kami juga memastikan bahwa tampilan antar menu seperti Beranda, Fitur, Koleksi, Tentang, dan Kontak dapat diakses dengan lancar dan intuitif. NF Library bukan hanya tempat untuk mencari buku, tetapi juga menjadi jembatan penghubung antara pengetahuan dan pembacanya. Kami membuka ruang untuk kolaborasi, saran, serta pengembangan lebih lanjut, demi menjadikan NF Library sebagai ekosistem literasi digital yang terus bertumbuh.
                </p>
            </div>
        </div>
    </section>

    <!-- Bagian Kontak  -->
    <footer class="footer" id="kontak">
        <div class="footer-container">
            <div class="footer-column">
                <div class="penulis">
                        <img src="../P8_Landing Page Apotik/Image/FOTO TUGAS.jpeg" alt="" style="width:90px ;">    
                        <div class="info-penulis">
                            <h3>Group 01</h3>
                            <p style="font-size: 15px;">- muhammad ihsan<br>- Anis Adriyani<br>- Ali Mahbub<br>- Fadhil Muhammad Zain<br>- Zaidaan Salman<br>- Silva Nurzanatul Dahmalena<br>- Muhammad Zaidan Syah.......</p><br>
                        </div>
                    </div>
                </div>
                <div class="footer-column">

                    <h3 style="color: white; text-decoration: underline;">Tentang</h3>
                    <ul>
                        <li> <a href="#tentangpada">Tentang Kita</a></li>
                        <li> <a href="#"></a></li>
                        <li> <a href="#"></a></li>
                        <li ><a href="#"></a></li>
                    </ul>
                </div>
                <div class="footer-column">

                    <h3 style="color: white; text-decoration: underline;">Layanan</h3>
                    <ul>
                        <li><a href="#koleksi" >Baca Buku</a></li>
                        <li><a href="#Mom" ></a></li>
                        <li><a href="#p3k" ></a></li>
                    </ul>
                </div>   
            
        </div>
        <div class="footer-socials">
            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" aria-label="Discord"><i class="fab fa-instagram"></i></a>
            <a href="#" aria-label="Web"><i class="fa-brands fa-facebook-f"></i></a>
          </div>
          <p class="footer-copyright">
            <h4>&copy; Copyright by Library - 2025</h4>
          </p>
          <div class="footer-links">
            <a href="#">Cookies</a>
            <a href="#">Security</a>
            <a href="#">Terms of Service</a>
            <a href="#">Privacy Statement</a>
          </div>
        </div>
    </footer>
    
                    
        
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>   
</body>
</html>

<style>
body {
    background: linear-gradient(120deg, #f8fafc 0%, #e0f7fa 100%);
    font-family: 'Segoe UI', Arial, sans-serif;
    color: #222;
}
header {
    box-shadow: 0 2px 8px rgba(35,175,172,0.08);
    background: #fff;
}
.hero {
    background: linear-gradient(90deg, #23afac 60%, #138a87 100%);
    color: #fff;
    border-radius: 18px;
    margin: 30px auto 40px auto;
    padding: 40px 0 30px 0;
    box-shadow: 0 4px 24px rgba(35,175,172,0.10);
    text-align: center;
}
.product-carousel {
    display: flex;
    flex-wrap: wrap;
    gap: 28px;
    justify-content: center;
    margin-top: 30px;
}
.product-item {
    background: #fff;
    border-radius: 18px;
    box-shadow: 0 4px 16px rgba(35,175,172,0.10);
    padding: 18px 18px 12px 18px;
    width: 180px;
    transition: transform 0.2s, box-shadow 0.2s;
    cursor: pointer;
    text-align: center;
    position: relative;
}
.product-item:hover {
    transform: translateY(-8px) scale(1.04);
    box-shadow: 0 8px 32px rgba(35,175,172,0.18);
    background: #e0f7fa;
}
.product-item img {
    width: 100px;
    height: 140px;
    object-fit: cover;
    border-radius: 10px;
    margin-bottom: 10px;
    box-shadow: 0 2px 8px rgba(35,175,172,0.10);
}
.product-item h3, .product-item p {
    margin: 0;
    color: #138a87;
}
.btn-selengkapnya {
    display: inline-block;
    background: linear-gradient(90deg, #23afac 60%, #138a87 100%);
    color: #fff !important;
    font-weight: bold;
    font-size: 1.1em;
    padding: 8px 28px;
    border-radius: 25px;
    text-decoration: none !important;
    box-shadow: 0 2px 8px rgba(35,175,172,0.12);
    transition: background 0.2s, color 0.2s, box-shadow 0.2s;
    margin: 0 auto;
}
.btn-selengkapnya:hover, .btn-selengkapnya:focus {
    background: linear-gradient(90deg, #138a87 60%, #23afac 100%);
    color: #fff !important;
    box-shadow: 0 4px 16px rgba(35,175,172,0.18);
    text-decoration: none !important;
}
footer {
    background: linear-gradient(90deg, #138a87 60%, #23afac 100%);
    color: #fff;
    padding: 40px 0 10px 0;
    margin-top: 60px;
    border-radius: 18px 18px 0 0;
    box-shadow: 0 -2px 16px rgba(35,175,172,0.10);
}
.footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 30px;
    max-width: 1100px;
    margin: 0 auto;
}
.footer-column {
    flex: 1 1 220px;
    min-width: 200px;
    margin-bottom: 20px;
}
.footer-column h3 {
    color: #fff;
    margin-bottom: 12px;
    font-weight: bold;
    text-decoration: underline;
}
.footer-column ul {
    list-style: none;
    padding: 0;
}
.footer-column ul li a {
    color: #fff;
    text-decoration: none;
    transition: color 0.2s;
}
.footer-column ul li a:hover {
    color: #ffd700;
    text-decoration: underline;
}
.penulis img {
    border-radius: 50%;
    border: 3px solid #fff;
    margin-bottom: 10px;
    box-shadow: 0 2px 8px rgba(35,175,172,0.18);
}
.info-penulis {
    color: #fff;
    font-size: 15px;
    margin-top: 8px;
    white-space: pre-line;
}
.footer-copyright {
    text-align: center;
    margin-top: 20px;
    color: #fff;
}
@media (max-width: 900px) {
    .footer-container {
        flex-direction: column;
        align-items: center;
    }
    .product-carousel {
        flex-direction: column;
        align-items: center;
    }
}
</style>
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
            <div class="product-item">
                <img src="./image/teras.png" alt="Filosofi Teras">
                <p style="font-size: medium;"> Filosofi Teras</p>
                <h3 style="margin-top: 70px;"> Henry Manampiring </h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item">
                <img src="./image/Sembuh.png" alt="Nanti Juga Sembuh Sendiri">
                <p style="font-size: medium; ;">Nanti Juga Sembuh Sendiri</p>
                <h3 style="margin-top: 20px;">HeloBagas</h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item">
                <img src="./image/overthinking.png" alt="Stop Overthiking">
                <p style="font-size: medium;">Stop Overthiking</p>
                <h3 style="margin-top: 60px;">Nick Treton</h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item">
                <img src="./image/Emosi.png" alt="Berdamai Dengan Emosi">
                <p style="font-size: medium;">Berdamai Dengan Emosi</p>
                <h3 style="margin-top: 50px;">Asti Musman</h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item">
                <img src="./image/memikat.png" alt="Trik Memikat & Mempengaruhi Lawan Bicara">
                <p style="font-size: medium;">Trik Memikat & Mempengaruhi Lawan Bicara</p>
                <h3>Yoga Pratama</h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item">
                <img src="./image/Berani (1).png" alt="Berani Tidak Disukai">
                <p style="font-size: medium;">Berani Tidak Disukai </p>
                <h3 style="margin-top: 40px;">Ichiro Kishimi & Fumitake Koga</h3>
                <span>★★★★★</span>
            </div>
            <p style="color:black; text-decoration: none;"><a href="./Fiksi.html">Selengkapnya</a></p>
        </div>
    </section>

    <section class="under-25">
        <h2  id="Non-Fiksi" alt="Nonfiksi" style="text-decoration: underline;">Non-Fiksi</h2>
        <div class="product-carousel">
            <div class="product-item">
                <img src="./image/30 haei.png" alt="30 Hari Jago Jualan">
                <p style="font-size: medium;">30 Hari Jago Jualan</p>
                <h3 style=" margin-top: 70px;">Dewa Eka Prayoga </h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item">
                <img src="./image/365.png" alt="365 Tips Sehat ala Rasulullah">
                <p style="font-size: medium; ;">365 Tips Sehat ala Rasulullah</p>
                <h3 style=" margin-top: 70px;"> dr. Mohammad Ali Toha Assegaf</h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item">
                <img src="./image/statistik.png" alt="Pengantar statistik">
                <p style="font-size: medium;">Pengantar statistik</p>
                <h3 style="margin-top: 50px;">Hotniar Sorongoringo & Rachmat Agus Nursamsi</h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item">
                <img src="./image/think.png" alt="Think and Grow Rich">
                <p style="font-size: medium;">Think and Grow Rich</p>
                <h3 style=" margin-top: 60px;">Napoleon Hill</h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item">
                <img src="./image/husna (1).png" alt="Keajaiban Asmaul Husna">
                <p style="font-size: medium;">Keajaiban Asmaul Husna</p>
                <h3 style=" margin-top: 45px;">Ardi Gunawan</h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item">
                <img src="./image/istiqamah.png" alt="Keajaiban Istiqamah">
                <p style="font-size: medium;">Keajaiban Istiqamah </p>
                <h3 style="margin-top: 50px;">Imam Sibawaih El Hasany</h3>
                <span>★★★★★</span>
            </div>
            <p style="color:black; text-decoration: none;"><a href="./Non fiksi.html">Selengkapnya</a></p>
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
                        <img src="../P8_Landing Page Apotik/Image/FOTO TUGAS.jpeg" alt="Foto Silva Nurzanatul Dahmalena" style="width:90px ;">    
                        <div class="info-penulis">
                            <h3>Silva Nurzanatul Dahmalena</h3>
                            <p style="font-size: 15px;">Silva, yang lebih akrab disapa Sil, adalah Mahasiswa semester 1 Prodi Teknik Informatika yang sedang menempuh pendidikan di kampus STT Terpadu NurulFikri.
                                Ia suka menonton film, mendengarkan musik dan membuat Landing Page sederhana seperti website apotek ini contohnya.
                                Melalui landing page ini , Silva ingin berbagi informasi dan membantu dalam pembelian obat secara online. 
                                Kenali Silva lebih dekat dengan klik logo dibawah ini.</p><br>
                                <div class="sosmed">
                                    <a href="https://Instagram.com/ysxlvy_">
                                        <i class="fa-brands fa-instagram"></i><br>
                                      </a>
                                      <a href="https://youTube.com/silvadahmalena9059">
                                        <i class="fa-brands fa-youtube"></i><br>
                                      </a>
                                      <a href="https://Github.com/Silva-TI">
                                        <i class="fa-brands fa-github"></i><br>
                                        </a>
                                 </div>
                        </div>
                    </div>
                </div>
                <div class="footer-column">

                    <h3 style="color: white; text-decoration: underline;">About</h3>
                    <ul>
                        <li> <a href="#about-us">About Us</a></li>
                        <li> <a href="#Apotek">Online Medicine Orders </a></li>
                        <li> <a href="#Sale">Promo</a></li>
                        <li ><a href="#Home">Home Pharmacy</a></li>
                    </ul>
                </div>
                <div class="footer-column">

                    <h3 style="color: white; text-decoration: underline;">Our Products</h3>
                    <ul>
                        <li><a href="#Remaja Jompo" >Remaja Jompo</a></li>
                        <li><a href="#Mom" >Mom and Baby</a></li>
                        <li><a href="#p3k" >P3K</a></li>
                    </ul>
                </div>   
            
        </div>
        <div class="footer-socials">
            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" aria-label="Discord"><i class="fab fa-instagram"></i></a>
            <a href="#" aria-label="Web"><i class="fa-brands fa-facebook-f"></i></a>
          </div>
          <p class="footer-copyright">
            <h4>&copy; Copyright by Silva - 2024</h4>
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
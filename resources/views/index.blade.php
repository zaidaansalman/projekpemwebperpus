<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plusplus Pharmacy</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
   
</head>
<body>
    <!-- Header Section -->

        <header>
            <div class="navbar" id="Home">
                <div class="logo">
                    <img src="Image/logoo.jpg" alt="Logo">
                </div>
                <nav id="mainNav" style="text-align: center;">
                <ul>
                    <li><a href="#home">Beranda</a></li>
                    <li><a href="#features">Fitur</a></li>
                    <li><a href="#books">Koleksi</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#contact">Kontak</a></li>
                    <li><a href="#" class="cta-button" style="color: white;">Login</a></li>
                </ul>
            </nav>
                
                    <div class="d-flex justify-content-end mb-3" style="justify-content: flex-end;">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                            <button class="btn btn-outline-white" style="background-color: #23afac; color: white;" type="submit">Search</button>
                        </form>
                    </div>
              
             
            
            <div id="popup" class="popup">
              <h2>Login</h2>
              <form>
                <i class="fa-solid fa-user"></i>  <input type="text" placeholder="Username"><br>
                <i class="fa-solid fa-key"></i>  <input type="password" placeholder="Password"><br>
                <button type="submit" ><a href="../P8_Landing Page Apotik/LP.html">Login</a></button>
              </form> 
            </div>
          
        

            </div>
          </header>
          
          <main>
            <section class="hero">
              <div class="content">
                <h1 id="Apotek"><span>  NF </span> Library </h1>
                <p style="text-align:center">Baca Buku Kesukaanmu Dimanapun Kapanpun!</p><br>
              
              </div>
              <div class="image">
                <img src="./image/perpus 3d.png"  alt="Pharmacist">
              </div>
            </section>
          </main>
          <footer>
           
            </footer>

    
    <!-- Picks Section -->
    <section class="picks">
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
                <h2 style="text-align: left;">  NF Library </h2>
                <p>
                    Plusplus Pharmacy adalah Perusahaan di bidang kesehatan yang berdiri sejak tahun 2019 dan telah terjamin paling lengkap menyediakan berbagai macam keperluan,seperti starpack remaja jompo, keperluan mom & baby juga P3K. Kami berdedikasi untuk menyediakan layanan berkualitas tinggi kepada pelanggan, serta berfokus pada efisiensi dan kepuasan pelanggan. 
                </p>
            </div>
  

             <!-- Under $25 Section -->
    <section class="under-25" style="margin-bottom: 80px;">
        <h2 id="Fiksi" alt="Fiksi">Fiksi</h2>
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
        <h2  id="Non-Fiksi" alt="Nonfiksi">Non-Fiksi</h2>
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
                <p style="font-size: medium;"">Keajaiban Istiqamah </p>
                <h3 style="margin-top: 50px;">Imam Sibawaih El Hasany</h3>
                <span>★★★★★</span>
            </div>
            <p style="color:black; text-decoration: none;"><a href="./Non fiksi.html">Selengkapnya</a></p>
        </div>
    </section>
    

    <!-- Promo Banners -->
    <section class="promo-banners">
        <div class="promo-item autumn-skincare">
            <img src="../P8_Landing Page Apotik/Image/Gratis Ongkir.jpg" alt="">
        </div>
    </section>

    <section id="about-us">
        <div class="overlay">
            <div class="container">
                <h1 style="text-align: left;">About Us</h1>
                <p>
                    Plusplus Pharmacy adalah Perusahaan di bidang kesehatan yang berdiri sejak tahun 2019 dan telah terjamin paling lengkap menyediakan berbagai macam keperluan,seperti starpack remaja jompo, keperluan mom & baby juga P3K. Kami berdedikasi untuk menyediakan layanan berkualitas tinggi kepada pelanggan, serta berfokus pada efisiensi dan kepuasan pelanggan. 
                </p>
            </div>
        </div>
    </section>
    <footer class="footer">
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

                    <h3 style="color: white;">About</h3>
                    <ul>
                        <li> <a href="#about-us">About Us</a></li>
                        <li> <a href="#Apotek">Online Medicine Orders </a></li>
                        <li> <a href="#Sale">Promo</a></li>
                        <li ><a href="#Home">Home Pharmacy</a></li>
                    </ul>
                </div>
                <div class="footer-column">

                    <h3>Our Products</h3>
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
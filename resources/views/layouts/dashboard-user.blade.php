<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('image/logo.png') }}" type="image/png">
    <title>Landing Page</title>
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

                     <a href="{{ route('logout') }}" class="btn btn-danger ms-3" onclick="return confirm('Anda yakin kleuar dari apliksi?')">
                        <i class="fa fa-sign-out"></i> Logout
                    </a>
                    </div>
               
            </div>
          </header>
          
          <main>
            <section class="hero" id="beranda">
              <div id="beranda">
                <h1 id="Apotek" style="margin-left:24px;"><span style="text-decoration: underline">Perpusih</span></h1>
                <p class="hero-subtitle" style="margin-left:55px; padding-left:0; text-align:left; text-decoration:none; font-weight:400; color:#fff;">Baca Buku Kesukaanmu Dimanapun dan Kapanpun!</p>
                <br>
              </div>
              <div id="image" class="animated-hero-image">
                <img src="./image/perpus 3d.png" alt="Pharmacist" class="hero-img-animate">
              </div>
            </section>
          </main>
    
    <!-- Picks Section -->
    <section class="picks" id="fitur">
        <h2>Pilih Topik yang Kamu Sukai!</h2>
        <div class="categories animated-categories">
            <section class="categories" style="display: flex; align-items: center; justify-content: center; text-decoration: none;" >
                <div class="category-item animated-category">
                    <img src="./image/non fiksi.png" alt="Non fiksi" style="width: 150px; height: 150px; ">
                    <p style="text-align: center; text-decoration: none;"><a href="#Non-Fiksi">Non-Fiksi</a></p>
                </div>
                <div class="category-item animated-category">
                    <img src="./image/fiksi.png" alt="Fiksi" style="width: 150px; height: 150px;">
                    <p style="text-align: center;"><a href="#Fiksi">Fiksi</a></p>
                </div> 
            </section>
        </div>


            
            <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
                <h2 style="text-align:left; font-weight:bold; text-decoration:underline;">Perpusih </h2><br>
                <blockquote style="text-align: left; font-size: 20px; font-weight: 400; line-height: 1.5; color: #333; font-family: 'Arial', sans-serif;">
               Perpusih adalah sebuah platform perpustakaan digital modern berbasis web yang dirancang untuk memudahkan akses online terhadap koleksi buku. Tujuannya adalah untuk mendukung budaya membaca di kalangan pelajar dan masyarakat umum melalui antarmuka yang ramah pengguna.
                </blockquote>
            </div>
  

             <!-- Under $25 Section -->
        <section class="under-25" id="koleksi" style="margin-bottom: 80px;">
        <h2 id="Fiksi" alt="Fiksi" style="text-decoration: underline;">Fiksi</h2>
        <div class="product-carousel">
            <div class="product-item" onclick="showBookModal('Filosofi Teras', 'Henry Manampiring', 'Buku pengantar filsafat stoik, mengajarkan cara berpikir tenang dan rasional.', '{{ asset('image/teras.png') }}', 5, 'https://drive.google.com/file/d/1YvhG12Y4ybauOALnOKV4j59Zkkq01Ntm/view?usp=sharing')">
                <img src="./image/teras.png" alt="Filosofi Teras">
                <p style="font-size: medium;"> Filosofi Teras</p>
                <h3> Henry Manampiring </h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item" onclick="showBookModal('Nanti Juga Sembuh Sendiri', 'HeloBagas', 'Buku motivasi untuk menghadapi masalah hidup dengan sabar.', '{{ asset('image/Sembuh.png') }}', 4, 'https://drive.google.com/file/d/11SnXD29Lu2U0sCaF8QGQtCJi4k_AvK09/view?usp=sharing')">
                <img src="./image/Sembuh.png" alt="Nanti Juga Sembuh Sendiri">
                <p style="font-size: medium; ;">Nanti Juga Sembuh Sendiri</p>
                <h3>HeloBagas</h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item" onclick="showBookModal('Stop Overthiking', 'Nick Treton', 'Panduan mengatasi overthinking dan kecemasan.', '{{ asset('image/overthinking.png') }}', 3, 'https://drive.google.com/file/d/1Z0Lub5LjmWPcT98N1Eodk88Q7q40y4mH/view?usp=sharing')">
                <img src="./image/overthinking.png" alt="Stop Overthiking">
                <p style="font-size: medium;">Stop Overthiking</p>
                <h3>Nick Treton</h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item" onclick="showBookModal('Berdamai Dengan Emosi', 'Asti Musman', 'Tips mengelola emosi dan kesehatan mental.', '{{ asset('image/Emosi.png') }}', 5, 'https://drive.google.com/file/d/12Jj0fgriLICpuOlxpjAMzQ0_ixjCqga8/view?usp=sharing')">
                <img src="./image/Emosi.png" alt="Berdamai Dengan Emosi">
                <p style="font-size: medium;">Berdamai Dengan Emosi</p>
                <h3>Asti Musman</h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item" onclick="showBookModal('Trik Memikat & Mempengaruhi Lawan Bicara', 'Yoga Pratama', 'Teknik komunikasi efektif untuk memikat lawan bicara.', '{{ asset('image/memikat.png') }}', 4, 'https://drive.google.com/file/d/1_D7Z038zxq3a8tlpJcqQzO-KoNYhOhwX/view?usp=sharing')">
                <img src="./image/memikat.png" alt="Trik Memikat & Mempengaruhi Lawan Bicara">
                <p style="font-size: medium;">Trik Memikat & Mempengaruhi Lawan Bicara</p>
                <h3>Yoga Pratama</h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item" onclick="showBookModal('Berani Tidak Disukai', 'Ichiro Kishimi & Fumitake Koga', 'Buku pengembangan diri tentang keberanian menjadi diri sendiri.', '{{ asset('image/Berani (1).png') }}', 5, 'https://drive.google.com/file/d/1YqJoPmDwr3sE61pVSB3Kam2HwwE1ee6p/view?usp=sharing')">
                <img src="./image/Berani (1).png" alt="Berani Tidak Disukai">
                <p style="font-size: medium;">Berani Tidak Disukai </p>
                <h3>Ichiro Kishimi & Fumitake Koga</h3>
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

      // Pencarian buku berdasarkan judul + suggestion list realtime
      document.addEventListener('DOMContentLoaded', function() {
        const searchForm = document.querySelector('form[role="search"]');
        const searchInput = searchForm.querySelector('input[type="search"]');
        // --- SUGGESTION LIST ---
        // Kumpulan judul buku dari Fiksi & NonFiksi (harus sama persis dengan yang di halaman)
        const books = [
          // Fiksi
          { title: 'Filosofi Teras', section: 'Fiksi' },
          { title: 'Nanti Juga Sembuh Sendiri', section: 'Fiksi' },
          { title: 'Stop Overthiking', section: 'Fiksi' },
          { title: 'Berdamai Dengan Emosi', section: 'Fiksi' },
          { title: 'Trik Memikat & Mempengaruhi Lawan Bicara', section: 'Fiksi' },
          { title: 'Berani Tidak Disukai', section: 'Fiksi' },
          // NonFiksi
          { title: '30 Hari Jago Jualan', section: 'Non-Fiksi' },
          { title: '365 Tips Sehat ala Rasulullah', section: 'Non-Fiksi' },
          { title: 'Pengantar statistik', section: 'Non-Fiksi' },
          { title: 'Think and Grow Rich', section: 'Non-Fiksi' },
          { title: 'Keajaiban Asmaul Husna', section: 'Non-Fiksi' },
          { title: 'Keajaiban Istiqamah', section: 'Non-Fiksi' },
        ];
        // Buat suggestion list element
        let suggestionList = document.createElement('ul');
        suggestionList.className = 'search-suggestion-list';
        suggestionList.style.display = 'none';
        suggestionList.style.position = 'absolute';
        suggestionList.style.zIndex = '1000';
        suggestionList.style.width = searchInput.offsetWidth + 'px';
        searchForm.style.position = 'relative';
        searchForm.appendChild(suggestionList);

        // Update suggestion list per-huruf
        searchInput.addEventListener('input', function() {
          const keyword = searchInput.value.trim().toLowerCase();
          suggestionList.innerHTML = '';
          if (!keyword) {
            suggestionList.style.display = 'none';
            return;
          }
          // Filter judul
          const filtered = books.filter(b => b.title.toLowerCase().includes(keyword));
          if (filtered.length === 0) {
            suggestionList.style.display = 'none';
            return;
          }
          filtered.forEach(b => {
            const li = document.createElement('li');
            li.textContent = b.title + ' [' + b.section + ']';
            li.className = 'suggestion-item';
            li.tabIndex = 0;
            li.onclick = function() {
              // Cek apakah buku ada di halaman (dashboard)
              const items = document.querySelectorAll('.product-item');
              let found = false;
              items.forEach(item => {
                const title = item.querySelector('p, .product-title, p a')?.innerText?.toLowerCase() || '';
                if (title === b.title.toLowerCase()) {
                  item.scrollIntoView({behavior: 'smooth', block: 'center'});
                  item.classList.add('highlighted-book');
                  setTimeout(() => item.classList.remove('highlighted-book'), 1200);
                  found = true;
                }
              });
              if (!found) {
                // Redirect ke halaman fiksi/nonfiksi dengan query
                if (b.section === 'Fiksi') {
                  window.location.href = '/fiksi?search=' + encodeURIComponent(b.title);
                } else {
                  window.location.href = '/nonfiksi?search=' + encodeURIComponent(b.title);
                }
              }
              suggestionList.style.display = 'none';
            };
            suggestionList.appendChild(li);
          });
          suggestionList.style.display = 'block';
        });
        // Hide suggestion jika klik di luar
        document.addEventListener('click', function(e) {
          if (!searchForm.contains(e.target)) suggestionList.style.display = 'none';
        });
        // --- END SUGGESTION ---

        // Pencarian submit (filtering di halaman)
        searchForm.addEventListener('submit', function(e) {
          e.preventDefault();
          const keyword = searchInput.value.trim().toLowerCase();
          const items = document.querySelectorAll('.product-item');
          let found = false;
          items.forEach(item => {
            const title = item.querySelector('p, .product-title, p a')?.innerText?.toLowerCase() || '';
            if (title.includes(keyword) || keyword === '') {
              item.style.display = '';
              found = true;
            } else {
              item.style.display = 'none';
            }
          });
          // Optional: scroll ke koleksi jika hasil ditemukan
          if (found && keyword !== '') {
            const koleksi = document.getElementById('koleksi');
            if (koleksi) koleksi.scrollIntoView({behavior: 'smooth'});
          }
        });
      });
    </script>

    <section class="under-25">
        <h2  id="Non-Fiksi" alt="Nonfiksi" style="text-decoration: underline;">Non-Fiksi</h2>
        <div class="product-carousel">
            <div class="product-item" onclick="showBookModal('30 Hari Jago Jualan', 'Dewa Eka Prayoga', 'Panduan praktis untuk meningkatkan penjualan dalam 30 hari.', '{{ asset('image/30 haei.png') }}', 5, 'https://drive.google.com/file/d/1bkc0wts8Iay0-KijJQ4toCjhwTIQ5G5x/view')">
                <img src="./image/30 haei.png" alt="30 Hari Jago Jualan">
                <p style="font-size: medium;">30 Hari Jago Jualan</p>
                <h3>Dewa Eka Prayoga </h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item" onclick="showBookModal('365 Tips Sehat ala Rasulullah', 'dr. Mohammad Ali Toha Assegaf', 'Tips kesehatan berdasarkan sunnah Rasulullah.', '{{ asset('image/365.png') }}', 5, 'https://drive.google.com/file/d/1Xl3RLtVcusQ-3G6HfzvT25nEy9Yj-LUn/view')">
                <img src="./image/365.png" alt="365 Tips Sehat ala Rasulullah">
                <p style="font-size: medium; ;">365 Tips Sehat ala Rasulullah</p>
                <h3> dr. Mohammad Ali Toha Assegaf</h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item" onclick="showBookModal('Pengantar Statistik', 'Hotniar Sorongoringo & Rachmat Agus Nursamsi', 'Buku pengantar statistik untuk pemula.', '{{ asset('image/statistik.png') }}', 5, 'https://drive.google.com/drive/folders/1SWeAMFIbAe_KWeRzzr1D9Tej65F2UlNK')">
                <img src="./image/statistik.png" alt="Pengantar statistik">
                <p style="font-size: medium;">Pengantar statistik</p>
                <h3>Hotniar Sorongoringo & Rachmat Agus Nursamsi</h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item" onclick="showBookModal('Think and Grow Rich', 'Napoleon Hill', 'Buku motivasi klasik tentang kesuksesan dan kekayaan.', '{{ asset('image/think.png') }}', 5, 'https://drive.google.com/file/d/1_xRaV7mTgLVNAW-ziL_8Bbxrpm2Fk0qO/view')">
                <img src="./image/think.png" alt="Think and Grow Rich">
                <p style="font-size: medium;">Think and Grow Rich</p>
                <h3>Napoleon Hill</h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item" onclick="showBookModal('Keajaiban Asmaul Husna', 'Ardi Gunawan', 'Mengenal keutamaan dan keajaiban Asmaul Husna.', '{{ asset('image/husna (1).png') }}', 5, 'https://drive.google.com/drive/folders/1TpyMA5rxPg0Dvf36LGIwG1r3a-jzGxuY')">
                <img src="./image/husna (1).png" alt="Keajaiban Asmaul Husna">
                <p style="font-size: medium;">Keajaiban Asmaul Husna</p>
                <h3>Ardi Gunawan</h3>
                <span>★★★★★</span>
            </div>
            <div class="product-item" onclick="showBookModal('Keajaiban Istiqamah', 'Imam Sibawaih El Hasany', 'Kisah dan inspirasi tentang istiqamah dalam kehidupan.', '{{ asset('image/istiqamah.png') }}', 5, 'https://drive.google.com/file/d/1Xg6a-ViYzDjVx6iyopUsQ9f4GlABgpxq/view')">
                <img src="./image/istiqamah.png" alt="Keajaiban Istiqamah">
                <p style="font-size: medium;">Keajaiban Istiqamah </p>
                <h3>Imam Sibawaih El Hasany</h3>
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
                <h1 style="text-align: left; text-decoration: underline;">Tentang Kita</h1>
                <p style="text-align: left; font-size: 20px; font-weight: 400; line-height: 1.5; color: #333; font-family: 'Arial', sans-serif; color: white; text-align: justify;">
                Perpusih adalah platform perpustakaan digital yang dikembangkan untuk mempermudah akses Mahasiswa terhadap koleksi buku dan literasi berbasis teknologi. Diaplikasi ini kami memberikan kemudahan bagi pengguna untuk membaca buku secara online, mencari koleksi buku yang diinginkan, dan mendapatkan rekomendasi buku sesuai minat. Dengan antarmuka yang sederhana dan intuitif,  Perpusih bertujuan untuk meningkatkan minat baca Mahasiswa, terutama di kalangan Mahasiswa.
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
.hero-subtitle {
  text-align: left !important;
  text-decoration: none !important;
  font-weight: 400 !important;
  font-size: 1.25rem;
  padding-left: 0;
  margin-left: 0;
  margin-top: 10px;
  margin-bottom: 0;
  color: #fff;
}
.product-carousel {
    display: flex;
    flex-wrap: wrap;
    gap: 28px;
    justify-content: center;
    margin-top: 30px;
}
.product-item {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
  background: #fff;
  border-radius: 18px;
  box-shadow: 0 4px 16px rgba(35,175,172,0.10);
  padding: 18px 18px 16px 18px;
  width: 180px;
  min-height: 340px;
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
.product-item p {
  font-size: 1.05em;
  font-weight: 600;
  margin: 8px 0 0 0;
  color: #138a87;
  min-height: 36px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}
.product-item h3 {
  font-size: 0.98em;
  font-weight: 400;
  color: #333;
  margin: 4px 0 4px 0;
  min-height: 32px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}
.product-item span {
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0;
  font-size: 1.1em;
  text-align: center;
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
.search-suggestion-list {
  position: absolute;
  top: 100%;
  left: 0;
  right: 0;
  background: #fff;
  border: 1px solid #23afac;
  border-radius: 0 0 10px 10px;
  box-shadow: 0 4px 16px rgba(35,175,172,0.10);
  max-height: 220px;
  overflow-y: auto;
  margin: 0;
  padding: 0;
  list-style: none;
  z-index: 1000;
}
.suggestion-item {
  padding: 10px 18px;
  cursor: pointer;
  color: #138a87;
  font-weight: 500;
  transition: background 0.15s, color 0.15s;
}
.suggestion-item:hover, .suggestion-item:focus {
  background: #23afac;
  color: #fff;
}
.highlighted-book {
  outline: 3px solid #23afac;
  box-shadow: 0 0 0 6px #e0f7fa;
  transition: outline 0.2s, box-shadow 0.2s;
}
.animated-categories .animated-category {
  opacity: 0;
  transform: translateY(40px) scale(0.95);
  animation: fadeUpScale 0.7s cubic-bezier(.4,1.6,.4,1) forwards;
}
.animated-categories .animated-category:nth-child(1) {
  animation-delay: 0.1s;
}
.animated-categories .animated-category:nth-child(2) {
  animation-delay: 0.35s;
}
@keyframes fadeUpScale {
  to {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}
.animated-category:hover {
  transform: scale(1.08) translateY(-8px) !important;
  box-shadow: 0 8px 32px rgba(35,175,172,0.18);
  transition: transform 0.25s, box-shadow 0.25s;
  z-index: 2;
}
.animated-hero-image .hero-img-animate {
  opacity: 0;
  transform: scale(0.85) rotate(-8deg);
  animation: heroImgFadeIn 1.1s cubic-bezier(.4,1.6,.4,1) 0.5s forwards;
  transition: transform 0.35s cubic-bezier(.4,1.6,.4,1), box-shadow 0.25s;
  box-shadow: 0 4px 24px rgba(35,175,172,0.13);
}
.animated-hero-image .hero-img-animate:hover {
  transform: scale(1.04) rotate(2deg);
  box-shadow: 0 12px 36px rgba(35,175,172,0.22);
}
@keyframes heroImgFadeIn {
  to {
    opacity: 1;
    transform: scale(1) rotate(0deg);
  }
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
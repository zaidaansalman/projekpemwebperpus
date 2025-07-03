<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Non Fiksi | NF Library</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <section class="under-25">
            <div class="position-relative mb-4" style="min-height:56px;">
                <a href="{{ url('/dashboard-anggota') }}" class="btn-back position-relative z-2" style="float:left;"> <i class="fa fa-arrow-left"></i> Kembali ke Beranda</a>
                <h2 id="NonFiksi" alt="NonFiksi" class="mb-0 text-center position-absolute top-50 start-50 translate-middle-x" style="left:50%;transform:translate(-50%,-50%);width:max-content;">Koleksi Buku Non Fiksi</h2>
            </div>
            <div class="product-carousel">
                <div class="product-item" onclick="showBookModal('30 Hari Jago Jualan', 'Dewa Eka Prayoga', 'Panduan praktis meningkatkan penjualan dalam 30 hari.', './image/30 haei.png', 5, 'https://drive.google.com/nonfiksi1')">
                    <img src="./image/30 haei.png" alt="30 Hari Jago Jualan">
                    <p><a href="#">30 Hari Jago Jualan</a></p>
                    <h3>Dewa Eka Prayoga</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('365 Tips Sehat ala Rasulullah', 'dr. Mohammad Ali Toha Assegaf', 'Tips kesehatan berdasarkan sunnah Rasulullah.', './image/365.png', 5, 'https://drive.google.com/nonfiksi2')">
                    <img src="./image/365.png" alt="365 Tips Sehat ala Rasulullah">
                    <p>365 Tips Sehat ala Rasulullah</p>
                    <h3>dr. Mohammad Ali Toha Assegaf</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Pengantar Statistik', 'Hotniar Sorongoringo & Rachmat Agus Nursamsi', 'Dasar-dasar statistik untuk pemula.', './image/statistik.png', 5, 'https://drive.google.com/nonfiksi3')">
                    <img src="./image/statistik.png" alt="Pengantar statistik">
                    <p>Pengantar Statistik</p>
                    <h3>Hotniar Sorongoringo & Rachmat Agus Nursamsi</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Think and Grow Rich', 'Napoleon Hill', 'Buku motivasi klasik tentang kesuksesan dan kekayaan.', './image/think.png', 5, 'https://drive.google.com/nonfiksi4')">
                    <img src="./image/think.png" alt="Think and Grow Rich">
                    <p>Think and Grow Rich</p>
                    <h3>Napoleon Hill</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Trik Memikat & Mempengaruhi Lawan Bicara', 'Yoga Pratama', 'Teknik komunikasi efektif untuk memikat lawan bicara.', './image/memikat.png', 5, 'https://drive.google.com/nonfiksi5')">
                    <img src="./image/memikat.png" alt="Trik Memikat & Mempengaruhi Lawan Bicara">
                    <p>Trik Memikat & Mempengaruhi Lawan Bicara</p>
                    <h3>Yoga Pratama</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Keajaiban Istiqamah', 'Imam Sibawaih El Hasany', 'Kisah dan motivasi untuk istiqamah dalam hidup.', './image/istiqamah.png', 5, 'https://drive.google.com/nonfiksi6')">
                    <img src="./image/istiqamah.png" alt="Keajaiban Istiqamah">
                    <p>Keajaiban Istiqamah</p>
                    <h3>Imam Sibawaih El Hasany</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Dasar Dasar Rekayasa Transportasi', 'C. Jotin Khisty & B Kent Lall', 'Dasar-dasar rekayasa transportasi untuk mahasiswa teknik.', './image/dasar.png', 5, 'https://drive.google.com/nonfiksi7')">
                    <img src="./image/dasar.png" alt="Dasar Dasar Rekayasa Transportasi">
                    <p>Dasar Dasar Rekayasa Transportasi</p>
                    <h3>C. Jotin Khisty & B Kent Lall</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Buku Putih Tiktok Affiliate', 'Suwandi Baskara', 'Strategi sukses menjadi affiliate di TikTok.', './image/tiktok.png', 5, 'https://drive.google.com/nonfiksi8')">
                    <img src="./image/tiktok.png" alt="Buku Putih Tiktok Affiliate">
                    <p>Buku Putih Tiktok Affiliate</p>
                    <h3>Suwandi Baskara</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('10 juta Pertama dari Menulis', 'Indari Mastuti', 'Cara menghasilkan uang dari menulis.', './image/10.png', 5, 'https://drive.google.com/nonfiksi9')">
                    <img src="./image/10.png" alt="10 juta Pertama dari Menulis">
                    <p>10 juta Pertama dari Menulis</p>
                    <h3>Indari Mastuti</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Instrumentasi & Alat Ukur', 'Poerwanti, Juliza Hidayanti, & Anizar', 'Buku referensi tentang instrumentasi dan alat ukur.', './image/inst.png', 5, 'https://drive.google.com/nonfiksi10')">
                    <img src="./image/inst.png" alt="Instrumentasi & Alat Ukur">
                    <p>Instrumentasi & Alat Ukur</p>
                    <h3>Poerwanti, Juliza Hidayanti, & Anizar</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Instrumentasi & Alat Ukur', 'E.M Wilson', 'Pembahasan lanjutan tentang instrumentasi dan alat ukur.', './image/hidrologi.png', 5, 'https://drive.google.com/nonfiksi11')">
                    <img src="./image/hidrologi.png" alt="Instrumentasi & Alat Ukur">
                    <p>Instrumentasi & Alat Ukur</p>
                    <h3>E.M Wilson</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Pengantar Teknik Fondasi', 'Ir. Rudy Gunawan', 'Dasar-dasar teknik fondasi untuk teknik sipil.', './image/fondasi.png', 5, 'https://drive.google.com/nonfiksi12')">
                    <img src="./image/fondasi.png" alt="Pengantar Teknik Fondasi">
                    <p>Pengantar Teknik Fondasi</p>
                    <h3>Ir. Rudy Gunawan</h3>
                    <span>★★★★★</span>
                </div>
            </div>
        </section>
    </div>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
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
</body>
</html>
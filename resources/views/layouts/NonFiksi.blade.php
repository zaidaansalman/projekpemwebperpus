<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('image/logo.png') }}" type="image/png">
    <title>Non Fiksi | NF Library</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: #f8f9fa;
            font-family: 'Segoe UI', Arial, sans-serif;
        }
        .under-25 {
            margin: 40px auto 80px auto;
            max-width: 1200px;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(35,175,172,0.08);
            padding: 32px 24px;
        }
        .under-25 h2 {
            text-align: center;
            font-weight: bold;
            color: #23afac;
            margin-bottom: 32px;
            text-decoration: underline;
        }
        .product-carousel {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 32px;
            justify-items: center;
            margin: 0 auto;
            max-width: 1000px;
        }
        .product-item {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 2px 12px rgba(35,175,172,0.10);
            padding: 18px 12px 24px 12px;
            text-align: center;
            transition: transform 0.18s, box-shadow 0.18s;
            cursor: pointer;
        }
        .product-item:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 8px 32px rgba(35,175,172,0.18);
        }
        .product-item img {
            width: 120px;
            height: 170px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 12px;
            box-shadow: 0 2px 8px rgba(35,175,172,0.10);
        }
        .product-item p {
            font-size: 1.08em;
            font-weight: 500;
            margin: 8px 0 0 0;
            color: #138a87;
        }
        .product-item h3 {
            font-size: 1em;
            font-weight: 400;
            margin: 12px 0 0 0;
            color: #444;
        }
        .product-item span {
            color: #ffc107;
            font-size: 1.1em;
            margin-top: 8px;
            display: block;
        }
        .btn-back {
            display: inline-block;
            margin: 0 0 24px 0;
            background: linear-gradient(90deg, #23afac 60%, #138a87 100%);
            color: #fff;
            font-weight: bold;
            border-radius: 25px;
            padding: 8px 28px;
            text-decoration: none;
            transition: background 0.2s;
        }
        .btn-back:hover {
            background: linear-gradient(90deg, #138a87 60%, #23afac 100%);
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <section class="under-25">
            <div class="position-relative mb-4" style="min-height:56px;">
                <a href="{{ url('/dashboard-anggota') }}" class="btn-back position-relative z-2" style="float:left;"> <i class="fa fa-arrow-left"></i> Kembali ke Beranda</a>
                <h2 id="NonFiksi" alt="NonFiksi" class="mb-0 text-center position-absolute top-50 start-50 translate-middle-x" style="left:50%;transform:translate(-50%,-50%);width:max-content;">Koleksi Buku Non Fiksi</h2>
            </div>
            <div class="product-carousel">
                <div class="product-item" onclick="showBookModal('30 Hari Jago Jualan', 'Dewa Eka Prayoga', 'Buku ini berisi rahasia jualan laris tanpa harus mengemis-ngemis.', './image/30 haei.png', 5, 'https://drive.google.com/file/d/1bkc0wts8Iay0-KijJQ4toCjhwTIQ5G5x/view')">
                    <img src="./image/30 haei.png" alt="30 Hari Jago Jualan">
                    <p><a href="#">30 Hari Jago Jualan</a></p>
                    <h3>Dewa Eka Prayoga</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('365 Tips Sehat ala Rasulullah', 'dr. Mohammad Ali Toha Assegaf', ' Buku ini membahas tentang upaya memelihara kesehatan secara Islami yang sederhana dan mudah diamalkan, namun menghendaki kebersihan fisik dan mental, serta merupakan bagian tak terpisahkan dalam totalitas kehidupan sehari-hari seorang Muslim.', './image/365.png', 5, 'https://drive.google.com/file/d/1Xl3RLtVcusQ-3G6HfzvT25nEy9Yj-LUn/view')">
                    <img src="./image/365.png" alt="365 Tips Sehat ala Rasulullah">
                    <p>365 Tips Sehat ala Rasulullah</p>
                    <h3>dr. Mohammad Ali Toha Assegaf</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Pengantar Statistik', 'Hotniar Sorongoringo & Rachmat Agus Nursamsi', 'Dasar-dasar statistik untuk pemula.', './image/statistik.png', 5, 'https://drive.google.com/drive/folders/1SWeAMFIbAe_KWeRzzr1D9Tej65F2UlNK')">
                    <img src="./image/statistik.png" alt="Pengantar statistik">
                    <p>Pengantar Statistik</p>
                    <h3>Hotniar Sorongoringo & Rachmat Agus Nursamsi</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Think and Grow Rich', 'Napoleon Hill', ' Buku legendaris ini adalah buku terlaris sepanjang masa yang telah terjual lebih dari 15 juta eksemplar di seluruh dunia.', './image/think.png', 5, 'https://drive.google.com/file/d/1_xRaV7mTgLVNAW-ziL_8Bbxrpm2Fk0qO/view')">
                    <img src="./image/think.png" alt="Think and Grow Rich">
                    <p>Think and Grow Rich</p>
                    <h3>Napoleon Hill</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Trik Memikat & Mempengaruhi Lawan Bicara', 'Yoga Pratama', 'Teknik komunikasi efektif untuk memikat lawan bicara.', './image/memikat.png', 5, 'https://drive.google.com/drive/folders/1TolEIK-TMyINaOximUnGTX1-8tMs7z_3')">
                    <img src="./image/memikat.png" alt="Trik Memikat & Mempengaruhi Lawan Bicara">
                    <p>Trik Memikat & Mempengaruhi Lawan Bicara</p>
                    <h3>Yoga Pratama</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Keajaiban Istiqamah', 'Imam Sibawaih El Hasany', ' Istiqamah adalah anugerah dari Yang Mahaawal dan Mahaakhir, serta proses berkesinambungan bagi seorang Salik untuk terus berada di jalan lurus.', './image/istiqamah.png', 5, 'https://drive.google.com/file/d/1Xg6a-ViYzDjVx6iyopUsQ9f4GlABgpxq/view')">
                    <img src="./image/istiqamah.png" alt="Keajaiban Istiqamah">
                    <p>Keajaiban Istiqamah</p>
                    <h3>Imam Sibawaih El Hasany</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Dasar Dasar Rekayasa Transportasi', 'C. Jotin Khisty & B Kent Lall', 'Dasar-dasar rekayasa transportasi untuk mahasiswa teknik.', './image/dasar.png', 5, 'https://drive.google.com/drive/folders/1SWeAMFIbAe_KWeRzzr1D9Tej65F2UlNK')">
                    <img src="./image/dasar.png" alt="Dasar Dasar Rekayasa Transportasi">
                    <p>Dasar Dasar Rekayasa Transportasi</p>
                    <h3>C. Jotin Khisty & B Kent Lall</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Buku Putih Tiktok Affiliate', 'Suwandi Baskara', ' Buku ini berisi panduan mengenai TikTok Affiliate.', './image/tiktok.png', 5, 'https://drive.google.com/file/d/1bhZl7MFPlUX2ZEhs27w_h2LvnS9Gb81o/view')">
                    <img src="./image/tiktok.png" alt="Buku Putih Tiktok Affiliate">
                    <p>Buku Putih Tiktok Affiliate</p>
                    <h3>Suwandi Baskara</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('10 juta Pertama dari Menulis', 'Indari Mastuti', 'Cara menghasilkan uang dari menulis.', './image/10.png', 5, 'https://drive.google.com/file/d/1eB_OEn88UwbxPjZh6LFSiDQnZmMmG5Wh/view')">
                    <img src="./image/10.png" alt="10 juta Pertama dari Menulis">
                    <p>10 juta Pertama dari Menulis</p>
                    <h3>Indari Mastuti</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Instrumentasi & Alat Ukur', 'Poerwanti, Juliza Hidayanti, & Anizar', 'Buku ini membahas tentang instrumentasi dan alat ukur yang mungkin relevan dengan bidang teknik, meskipun detail sinopsis tidak tersedia.', './image/inst.png', 5, 'https://drive.google.com/file/d/1kTbO2bpMuDnwMGO1uuBxtuUaFBaCUVj5/view')">
                    <img src="./image/inst.png" alt="Instrumentasi & Alat Ukur">
                    <p>Instrumentasi & Alat Ukur</p>
                    <h3>Poerwanti, Juliza Hidayanti, & Anizar</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Hidrologi Teknik', 'E.M Wilson', 'Meskipun sinopsis spesifik tidak tersedia, judul menunjukkan bahwa buku ini membahas tentang hidrologi dari sudut pandang teknik.', './image/hidrologi.png', 5, 'https://drive.google.com/drive/folders/1SWeAMFIbAe_KWeRzzr1D9Tej65F2UlNK')">
                    <img src="./image/hidrologi.png" alt="Hidrologi Teknik">
                    <p>Hidrologi Teknik</p>
                    <h3>E.M Wilson</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Pengantar Teknik Fondasi', 'Ir. Rudy Gunawan', 'Dasar-dasar teknik fondasi untuk teknik sipil.', './image/fondasi.png', 5, 'https://drive.google.com/drive/folders/1SWeAMFIbAe_KWeRzzr1D9Tej65F2UlNK')">
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
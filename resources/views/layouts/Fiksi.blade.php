<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiksi | NF Library</title>
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
                <h2 id="Fiksi" alt="Fiksi" class="mb-0 text-center position-absolute top-50 start-50 translate-middle-x" style="left:50%;transform:translate(-50%,-50%);width:max-content;">Koleksi Buku Fiksi</h2>
            </div>
            <div class="product-carousel">
                <div class="product-item" onclick="showBookModal('Filosofi Teras', 'Henry Manampiring', 'Buku pengantar filsafat stoik, mengajarkan cara berpikir tenang dan rasional.', './image/teras.png', 5, 'https://drive.google.com/file/d/1YvhG12Y4ybauOALnOKV4j59Zkkq01Ntm/view?usp=sharing')">
                    <img src="./image/teras.png" alt="Filosofi Teras">
                    <p><a href="#">Filosofi Teras</a></p>
                    <h3>Henry Manampiring</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Nanti Juga Sembuh Sendiri', 'HeloBagas', 'Buku motivasi untuk menghadapi masalah hidup dengan sabar.', './image/Sembuh.png', 4, 'https://drive.google.com/file/d/11SnXD29Lu2U0sCaF8QGQtCJi4k_AvK09/view?usp=sharing')">
                    <img src="./image/Sembuh.png" alt="Nanti Juga Sembuh Sendiri">
                    <p>Nanti Juga Sembuh Sendiri</p>
                    <h3>HeloBagas</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Stop Overthiking', 'Nick Treton', 'Panduan mengatasi overthinking dan kecemasan.', './image/overthinking.png', 3, 'https://drive.google.com/file/d/1Z0Lub5LjmWPcT98N1Eodk88Q7q40y4mH/view?usp=sharing')">
                    <img src="./image/overthinking.png" alt="Stop Overthiking">
                    <p>Stop Overthiking</p>
                    <h3>Nick Treton</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Berdamai Dengan Emosi', 'Asti Musman', 'Tips mengelola emosi dan kesehatan mental.', './image/Emosi.png', 5, 'https://drive.google.com/file/d/12Jj0fgriLICpuOlxpjAMzQ0_ixjCqga8/view?usp=sharing')">
                    <img src="./image/Emosi.png" alt="Berdamai Dengan Emosi">
                    <p>Berdamai Dengan Emosi</p>
                    <h3>Asti Musman</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Trik Memikat & Mempengaruhi Lawan Bicara', 'Yoga Pratama', 'Teknik komunikasi efektif untuk memikat lawan bicara.', './image/memikat.png', 4, 'https://drive.google.com/file/d/1_D7Z038zxq3a8tlpJcqQzO-KoNYhOhwX/view?usp=sharing')">
                    <img src="./image/memikat.png" alt="Trik Memikat & Mempengaruhi Lawan Bicara">
                    <p>Trik Memikat & Mempengaruhi Lawan Bicara</p>
                    <h3>Yoga Pratama</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Berani Tidak Disukai', 'Ichiro Kishimi & Fumitake Koga', 'Buku pengembangan diri tentang keberanian menjadi diri sendiri.', './image/Berani (1).png', 5, 'https://drive.google.com/file/d/1YqJoPmDwr3sE61pVSB3Kam2HwwE1ee6p/view?usp=sharing')">
                    <img src="./image/Berani (1).png" alt="Berani Tidak Disukai ">
                    <p>Berani Tidak Disukai</p>
                    <h3>Ichiro Kishimi & Fumitake Koga</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('The Master Book Of Personal Branding', 'Farco Siswiyanto Raharjo', 'Seni Membangun Merek Diri dengan Teknik Berbicara.', './image/Branding.png', 4, 'https://drive.google.com/file/d/1_L0MRLuKpKY76TrOMs1X0y_oBtYgN7R-/view?usp=sharing')">
                    <img src="./image/Branding.png" alt="The Master Book Of Personal Branding">
                    <p>The Master Book Of Personal Branding</p>
                    <h3>Farco Siswiyanto Raharjo</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Mencari Teman & Memengaruhi Orang', 'Christiana Weni', '101 Langkah Menjadi Pribadi yang Disenangi & Berpengaruh.', './image/Cari teman.png', 5, 'https://drive.google.com/file/d/1ZdxROBStN2XatWL1bkAaU9TX2jbqw_oB/view?usp=sharing')">
                    <img src="./image/Cari teman.png" alt="Mencari Teman & Memengaruhi Orang">
                    <p>Mencari Teman & Memengaruhi Orang</p>
                    <h3>Christiana Weni</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('MINDSET', 'DR CAROL S DWECK', 'Changing the way you think to fulfil your potential.', './image/mindset.png', 5, 'https://drive.google.com/file/d/1_7a3Y059G5AcfnmRJxyUi9m1tU7YNQId/view?usp=sharing')">
                    <img src="./image/mindset.png" alt="MINDSET">
                    <p>MINDSET</p>
                    <h3>DR CAROL S DWECK</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Aku yang lebih Kuat dari kemarin', 'Farah Via Rahmawati', 'Buku ini memotivasi pembaca agar bangkit dari luka, menjadi lebih kuat, dan mencintai diri sendiri.', './image/Lebih Kuat.png', 4, 'https://drive.google.com/file/d/11zGu3DNZMRUjXRPboUUG1i2OqxjKOizW/view?usp=sharing')">
                    <img src="./image/Lebih Kuat.png" alt="Aku yang lebih Kuat dari kemarin">
                    <p>Aku yang lebih Kuat dari kemarin</p>
                    <h3>Farah Via Rahmawati</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Buku Antimalas dan Suka Menunda', 'Choi Myeong Gi', 'Buku ini berisi tips agar tidak malas dan berhenti menunda, supaya hidup lebih produktif.', './image/antimalas.png', 5, 'https://drive.google.com/file/d/1aWojxYP3cE-puSWpaxfOt0GJFSu7OtSu/view?usp=sharing')">
                    <img src="./image/antimalas.png" alt="Buku Antimalas dan Suka Menunda">
                    <p>Buku Antimalas dan Suka Menunda</p>
                    <h3>Choi Myeong Gi</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Anatomic Habits', 'James Clear', 'Cara Mudah dan Terbukti untuk Membentuk Kebiasaan Baik dan Menghilangkan Kebiasaan Buruk.', './image/habits.png', 4, 'https://drive.google.com/file/d/1ZC3vlGnj2-9-MDVlnyHVYaNc9SQnAvaS/view?usp=sharing')">
                    <img src="./image/habits.png" alt="Anatomic Habits">
                    <p>Anatomic Habits</p>
                    <h3>James Clear</h3>
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
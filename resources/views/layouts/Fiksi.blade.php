<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiksi | NF Library</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <section class="under-25">
            <div class="position-relative mb-4" style="min-height:56px;">
                <a href="{{ url('/dashboard-anggota') }}" class="btn-back position-relative z-2" style="float:left;"> <i class="fa fa-arrow-left"></i> Kembali ke Beranda</a>
                <h2 id="Fiksi" alt="Fiksi" class="mb-0 text-center position-absolute top-50 start-50 translate-middle-x" style="left:50%;transform:translate(-50%,-50%);width:max-content;">Koleksi Buku Fiksi</h2>
            </div>
            <div class="product-carousel">
                <div class="product-item" onclick="showBookModal('Filosofi Teras', 'Henry Manampiring', 'Buku pengantar filsafat stoik, mengajarkan cara berpikir tenang dan rasional.', './image/teras.png', 5, 'https://drive.google.com/example1')">
                    <img src="./image/teras.png" alt="Filosofi Teras">
                    <p><a href="#">Filosofi Teras</a></p>
                    <h3>Henry Manampiring</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Nanti Juga Sembuh Sendiri', 'HeloBagas', 'Buku motivasi untuk menghadapi masalah hidup dengan sabar.', './image/Sembuh.png', 5, 'https://drive.google.com/example2')">
                    <img src="./image/Sembuh.png" alt="Nanti Juga Sembuh Sendiri">
                    <p>Nanti Juga Sembuh Sendiri</p>
                    <h3>HeloBagas</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Stop Overthiking', 'Nick Treton', 'Panduan mengatasi overthinking dan kecemasan.', './image/overthinking.png', 5, 'https://drive.google.com/example3')">
                    <img src="./image/overthinking.png" alt="Stop Overthiking">
                    <p>Stop Overthiking</p>
                    <h3>Nick Treton</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Berdamai Dengan Emosi', 'Asti Musman', 'Tips mengelola emosi dan kesehatan mental.', './image/Emosi.png', 5, 'https://drive.google.com/example4')">
                    <img src="./image/Emosi.png" alt="Berdamai Dengan Emosi">
                    <p>Berdamai Dengan Emosi</p>
                    <h3>Asti Musman</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Trik Memikat & Mempengaruhi Lawan Bicara', 'Yoga Pratama', 'Teknik komunikasi efektif untuk memikat lawan bicara.', './image/memikat.png', 5, 'https://drive.google.com/example5')">
                    <img src="./image/memikat.png" alt="Trik Memikat & Mempengaruhi Lawan Bicara">
                    <p>Trik Memikat & Mempengaruhi Lawan Bicara</p>
                    <h3>Yoga Pratama</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item" onclick="showBookModal('Berani Tidak Disukai', 'Ichiro Kishimi & Fumitake Koga', 'Buku pengembangan diri tentang keberanian menjadi diri sendiri.', './image/Berani (1).png', 5, 'https://drive.google.com/example6')">
                    <img src="./image/Berani (1).png" alt="Berani Tidak Disukai ">
                    <p>Berani Tidak Disukai</p>
                    <h3>Ichiro Kishimi & Fumitake Koga</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item">
                    <img src="./image/Branding.png" alt="The Master Book Of Personal Branding">
                    <p>The Master Book Of Personal Branding</p>
                    <h3>Farco Siswiyanto Raharjo</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item">
                    <img src="./image/Cari teman.png" alt="Mencari Teman & Memengaruhi Orang">
                    <p>Mencari Teman & Memengaruhi Orang</p>
                    <h3>Christiana Weni</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item">
                    <img src="./image/mindset.png" alt="MINDSET">
                    <p>MINDSET</p>
                    <h3>DR CAROL S DWECK</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item">
                    <img src="./image/Lebih Kuat.png" alt="Aku yang lebih Kuat dari kemarin">
                    <p>Aku yang lebih Kuat dari kemarin</p>
                    <h3>Farah Via Rahmawati</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item">
                    <img src="./image/antimalas.png" alt="Buku Antimalas dan Suka Menunda">
                    <p>Buku Antimalas dan Suka Menunda</p>
                    <h3>Choi Myeong Gi</h3>
                    <span>★★★★★</span>
                </div>
                <div class="product-item">
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
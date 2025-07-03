<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Hidden City - Free Ebooks</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background: #fff;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      color: #333;
    }
    a {
      color: #1a56db;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
    .rating {
      color: #facc15; /* yellow-400 */
    }
    .breadcrumb a {
      color: #0c4a6e; /* blue-900 */
      font-size: 0.875rem;
    }
    .breadcrumb {
      font-size: 0.875rem;
      margin-bottom: 1rem;
    }
    .btn-read {
      background-color: #23afac;
      color: white;
      padding: 0.5rem 1.25rem;
      font-weight: 600;
      border-radius: 0.25rem;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      transition: background-color 0.3s ease;
    }
    .btn-read:hover {
      background-color: #23afac;
    }
    .btn-add-library {
      color: #0c4a6e;
      font-weight: 600;
      margin-left: 1rem;
      display: inline-flex;
      align-items: center;
      gap: 0.25rem;
      cursor: pointer;
    }
    .btn-add-library:hover {
      text-decoration: underline;
    }
    .btn-preview {
      background-color: #1446a0;
      color: white;
      font-weight: 600;
      padding: 0.25rem 0.5rem;
      border-radius: 0.25rem 0 0.25rem 0;
      position: absolute;
      bottom: 0.8rem;
      left: 0;
      cursor: pointer;
      box-shadow: 1px 1px 3px rgb(0 0 0 / 0.3);
      font-size: 0.85rem;
      display: flex;
      align-items: center;
      gap: 0.35rem;
      user-select: none;
    }
    .btn-preview svg {
      width: 1rem; height: 1rem; 
      fill: white;
    }
    .book-cover-wrapper {
      position: relative;
      max-width: 200px;
    }
    
    .container {
      max-width: 1140px;
      margin-left: auto;
      margin-right: auto;
      padding: 0 1rem;
    }
     
    main {
      margin-top: 1.5rem;
      display: flex;
      gap: 2rem;
      justify-content: space-between;
      flex-wrap: wrap;
    }
    .book-info {
      flex-grow: 2;
      min-width: 300px;
      max-width: 720px;
    }
    .book-title {
      font-size: 1.8rem;
      font-weight: 700;
      color: #23afac;
      margin-bottom: 0.25rem;
    }
    .book-meta a {
      font-weight: 700;
      color: #23afac;
    }
    .book-meta span {
      font-weight: 600;
      margin-left: 0.25rem;
      color: #333;
    }
    .book-meta {
      font-size: 0.9rem;
      margin-bottom: 1.25rem;
      line-height: 1.5;
    }
    .book-description {
      margin-top: 3rem;
      font-size: 1rem;
      line-height: 1.55;
      max-width: 720px;
      color: #333;
      
    }
    @media (max-width: 900px) {
      main {
        flex-direction: column;
      }
      .sidebar-box {
        max-width: 100%;
        margin-top: 2rem;
      }
      .book-info {
        max-width: 100%;
      }
    }
  </style>
</head>
<body>
  <!-- Header -->
  
  <div class="container">
    <main>
      <!-- Left content book info -->
      <section class="book-info" aria-label="Book information">
        <h1 class="book-title">30 Hari Jago Jualan</h1>
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="index.html" tabindex="0">Home</a> / <a href="/sci-fi-fantasy" tabindex="0">Non Fiksi Bisnis</a> /
        </nav>

        <div style="display:flex;gap:1.5rem;align-items:flex-start;">
          <div class="book-cover-wrapper" style="flex-shrink:0;">
            <img 
              src="./image/30 haei.png" 
              alt="30 Hari" 
              width="180" height="260"
              loading="lazy"
              onerror="this.style.display='none'"
            />
            <button class="btn-preview" aria-label="Click to preview the book Hidden City" type="button">
              <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                <path d="M21 21l-6-6m0-5a6 6 0 11-12 0 6 6 0 0112 0z" />
              </svg>
              Best Seller
            </button>
          </div>
          <div>
            <p><strong>Penulis:</strong> <a href="#" tabindex="0">Ardi Gunawan</a></p>
            <p><strong>Penerbit:</strong> <span>Elex Media Komputindo</span></p>
            <p><strong>Pages:</strong> <span>175</span></p>
            <p class="rating" aria-label="Rating 4 out of 5 stars">
              <strong>Rating:</strong> 
              <span aria-hidden="true">★ ★ ★ ★ ☆</span> 
            <div style="margin-top: 1rem;">
              <button class="btn-read" aria-label="Download Hidden City book">
                Read <svg fill="none" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" height="20" width="20" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M4 17v2a2 2 0 002 2h12a2 2 0 002-2v-2"/><polyline points="7 11 12 16 17 11"/><line x1="12" y1="16" x2="12" y2="4"/></svg>
              </button>
            </div>
            <h3 style="font-weight:700; font-size:1.2rem; margin-top:10px;">Book Description</h3>
      <p>
        Buku "30 Hari Jago Jualan" merupakan panduan praktis bagi siapa pun yang ingin menguasai keterampilan penjualan dalam waktu singkat. Dewa Eka Prayoga, seorang ahli di bidang sales dan marketing, merancang program 30 hari yang sistematis untuk membantu pembaca meningkatkan kemampuan menjual—baik produk, jasa, maupun ide.
        </p>
          </div>
        </div>
      </section>

      <!-- Right sidebar form -->
      
    <!-- Book Description -->
    
      
   

  <script>
    // Preview button click
    document.querySelector('.btn-preview').addEventListener('click', () => {
      alert('Preview functionality is not implemented in this demo.');
    });

    // Download button click
    document.querySelector('.btn-download').addEventListener('click', () => {
      alert('Download functionality is not implemented in this demo.');
    });

    // Handle free book form submission
    function handleFormSubmit(event) {
      event.preventDefault();
      const emailInput = document.getElementById('emailInput');
      const email = emailInput.value.trim();
      if (!email) {
        alert('Please enter your email address to continue.');
        emailInput.focus();
        return false;
      }
      // Simple email validation regex
      const emailRegex = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
      if (!emailRegex.test(email)) {
        alert('Please enter a valid email address.');
        emailInput.focus();
        return false;
      }
      alert('Thank you for signing up! You can now download one free book.');
      emailInput.value = '';
      return false;
    }
  </script>
</body>
</html>


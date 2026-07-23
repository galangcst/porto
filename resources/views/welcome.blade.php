<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Galang Cikal Sugiantoro — Fullstack Developer. Membangun aplikasi web yang cepat dan andal."
    />
    <title>Galang Cikal Sugiantoro — Fullstack Developer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
  </head>
  <body>
    <!-- Left fixed: socials -->
    <aside class="side side-left">
      <ul>
        <li>
          <a
            href="https://github.com"
            target="_blank"
            rel="noreferrer"
            aria-label="GitHub"
            >GH</a
          >
        </li>
        <li>
          <a
            href="https://linkedin.com"
            target="_blank"
            rel="noreferrer"
            aria-label="LinkedIn"
            >IN</a
          >
        </li>
        <li>
          <a
            href="https://twitter.com"
            target="_blank"
            rel="noreferrer"
            aria-label="Twitter"
            >TW</a
          >
        </li>
        <li>
          <a
            href="https://instagram.com"
            target="_blank"
            rel="noreferrer"
            aria-label="Instagram"
            >IG</a
          >
        </li>
      </ul>
      <div class="side-line"></div>
    </aside>

    <!-- Right fixed: email -->
    <aside class="side side-right">
      <a href="mailto:galang@example.com">galang@example.com</a>
      <div class="side-line"></div>
    </aside>

    <!-- Nav -->
    <header id="header">
      <a href="#hero" class="logo" aria-label="home">G</a>
      <nav>
        <ol>
          <li>
            <a href="#about">tentang</a>
          </li>
          <li>
            <a href="#experience">pengalaman</a>
          </li>
          <li>
            <a href="#work">proyek</a>
          </li>
          <li>
            <a href="#contact">kontak</a>
          </li>
        </ol>
        <a class="btn resume-btn" href="{{ asset('cv.pdf') }}" target="_blank" rel="noreferrer"
          >CV</a
        >
      </nav>
      <button id="menu-toggle" aria-label="menu">
        <span></span><span></span><span></span>
      </button>
    </header>

    <!-- Mobile menu -->
    <div id="mobile-menu">
      <nav>
        <ol>
          <li>
            <a href="#about"><span></span> tentang</a>
          </li>
          <li>
            <a href="#experience"><span>02.</span> pengalaman</a>
          </li>
          <li>
            <a href="#work"><span>03.</span> proyek</a>
          </li>
          <li>
            <a href="#contact"><span>04.</span> kontak</a>
          </li>
        </ol>
        <a class="btn" href="{{ asset('cv.pdf') }}" target="_blank" rel="noreferrer">CV</a>
      </nav>
    </div>

    <main>
      <!-- Hero -->
      <section id="hero" class="hero">
        <p class="tag">Halo, nama saya</p>
        <h1 class="big name">Galang Cikal Sugiantoro.</h1>
        <h2 class="big sub">Saya membangun aplikasi web.</h2>
        <p class="hero-desc">
          Saya seorang Fullstack Developer yang fokus membangun aplikasi web
          yang cepat, rapi, dan mudah dipakai — dari sisi tampilan sampai server
          dan basis data.
        </p>
        <a class="btn big-btn" href="#work">Lihat proyek saya</a>
      </section>

      <!-- About -->
      <section id="about" class="section">
        <h3 class="section-title">
          <span class="num">01.</span> tentang saya <span class="rule"></span>
        </h3>
        <div class="about-grid">
          <div>
            <p>
              Halo! Nama saya <span class="hl">Galang</span> dan saya suka
              membangun hal-hal yang berjalan di internet. Ketertarikan saya
              pada teknologi tumbuh sambil kuliah dan mengerjakan proyek nyata.
            </p>
            <p>
              Saat ini saya bekerja sebagai
              <span class="hl">operator sekolah</span> sekaligus aktif sebagai
              <span class="hl">freelance web developer</span>. Fokus saya
              membangun aplikasi web yang rapi, cepat, dan bermanfaat.
            </p>
            <p>Beberapa teknologi yang sering saya pakai:</p>
            <ul class="tech-list">
              <li>JavaScript</li>
              <li>TypeScript</li>
              <li>React</li>
              <li>Node.js</li>
              <li>Python</li>
              <li>Go</li>
              <li>Java</li>
              <li>Firebase</li>
              <li>Bash / Linux</li>
            </ul>
          </div>
          <div class="about-photo">
            <div class="photo-frame">
              <img src="{{ asset('images/glg.jpeg') }}" alt="portrait" />
            </div>
          </div>
        </div>
      </section>

      <!-- Experience -->
      <section id="experience" class="section narrow">
        <h3 class="section-title">
          <span class="num">02.</span> pengalaman
          <span class="rule"></span>
        </h3>
        <div class="jobs">
          <div class="tabs" role="tablist">
            <button class="tab active" data-tab="0">Operator Sekolah</button>
            <button class="tab" data-tab="1">Freelance</button>
            <button class="tab" data-tab="2">Universitas</button>
          </div>
          <div class="panels">
            <div class="panel active">
              <h4>Operator Sekolah <span class="at">@ Sekolah</span></h4>
              <p class="range">2022 – 2026</p>
              <ul class="bullets">
                <li>Mengelola data sekolah dan sistem administrasi harian.</li>
                <li>Membuat dan merapikan laporan agar data lebih akurat.</li>
                <li>Membantu proses digitalisasi kebutuhan sekolah.</li>
              </ul>
            </div>
            <div class="panel">
              <h4>Web Developer <span class="at">@ Freelance</span></h4>
              <p class="range">2021 – Sekarang</p>
              <ul class="bullets">
                <li>
                  Membangun website dan aplikasi web sesuai kebutuhan klien.
                </li>
                <li>Mengerjakan proyek dari desain sampai rilis.</li>
                <li>Membuat REST API dan integrasi basis data.</li>
              </ul>
            </div>
            <div class="panel">
              <h4>Mahasiswa <span class="at">@ Universitas</span></h4>
              <p class="range">2021 – 2025</p>
              <ul class="bullets">
                <li>Belajar dasar pemrograman dan rekayasa perangkat lunak.</li>
                <li>Mengerjakan berbagai proyek kuliah berbasis web.</li>
                <li>Menyelesaikan tugas akhir bertema aplikasi web.</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- Featured work -->
      <section id="work" class="section">
        <h3 class="section-title">
          <span class="num">03.</span> proyek unggulan
          <span class="rule"></span>
        </h3>

        <div class="feature">
          <div class="feature-img">
            <a href="#" class="feature-img-link">
              <img
                src="https://coresg-normal.trae.ai/api/ide/v1/text_to_image?prompt=web%20application%20dashboard%20for%20thesis%20guidance%20system%2C%20dark%20navy%20ui%2C%20teal%20accents%2C%20clean%20modern%20design%2C%20rest%20api&image_size=landscape_4_3"
                alt="Pratinjau Sistem Bimbingan Skripsi"
              />
            </a>
          </div>
          <div class="feature-text">
            <p class="feature-label">Proyek Unggulan</p>
            <h4 class="feature-title">
              <a href="#">Sistem Bimbingan Skripsi</a>
            </h4>
            <div class="feature-desc">
              <p>
                Aplikasi web berbasis REST API untuk mengelola proses bimbingan
                skripsi antara mahasiswa dan dosen. Fitur pengajuan bimbingan,
                catatan revisi, dan pemantauan progres secara online.
              </p>
            </div>
            <ul class="feature-tech">
              <li>React</li>
              <li>Node.js</li>
              <li>REST API</li>
              <li>MySQL</li>
            </ul>
            <div class="feature-links">
              <a href="#" aria-label="GitHub">
                <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
                  <path d="M12 2C6.48 2 2 6.58 2 12.25c0 4.53 2.87 8.37 6.84 9.73.5.1.68-.22.68-.49 0-.24-.01-.88-.01-1.73-2.78.62-3.37-1.37-3.37-1.37-.45-1.18-1.11-1.5-1.11-1.5-.91-.64.07-.62.07-.62 1 .07 1.53 1.06 1.53 1.06.89 1.57 2.34 1.12 2.91.85.09-.66.35-1.12.63-1.38-2.22-.26-4.56-1.14-4.56-5.07 0-1.12.39-2.03 1.03-2.75-.1-.26-.45-1.3.1-2.71 0 0 .84-.28 2.75 1.05a9.4 9.4 0 0 1 2.5-.34c.85 0 1.71.12 2.5.34 1.91-1.33 2.75-1.05 2.75-1.05.55 1.41.2 2.45.1 2.71.64.72 1.03 1.63 1.03 2.75 0 3.94-2.34 4.81-4.57 5.06.36.32.68.95.68 1.92 0 1.39-.01 2.51-.01 2.85 0 .27.18.6.69.49A10.02 10.02 0 0 0 22 12.25C22 6.58 17.52 2 12 2z"/>
                </svg>
              </a>
              <a href="#" aria-label="External Link">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="20" height="20">
                  <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                  <polyline points="15 3 21 3 21 9"/>
                  <line x1="10" y1="14" x2="21" y2="3"/>
                </svg>
              </a>
            </div>
          </div>
        </div>

        <div class="feature reverse">
          <div class="feature-img">
            <a href="#" class="feature-img-link">
              <img
                src="https://coresg-normal.trae.ai/api/ide/v1/text_to_image?prompt=room%20booking%20and%20guidance%20management%20web%20app%2C%20dark%20navy%20dashboard%2C%20teal%20accents%2C%20schedule%20table%2C%20clean%20modern%20ui&image_size=landscape_4_3"
                alt="Pratinjau Sistem Bimbingan Ruangan"
              />
            </a>
          </div>
          <div class="feature-text">
            <p class="feature-label">Proyek Unggulan</p>
            <h4 class="feature-title">
              <small><a href="#">Sistem Bimbingan Ruangan</a></small>
            </h4>
            <div class="feature-desc">
              <p>
                Aplikasi web untuk mengatur jadwal dan penggunaan ruangan
                bimbingan. Memudahkan pemesanan ruang, melihat ketersediaan, dan
                mengelola jadwal agar tidak bentrok.
              </p>
            </div>
            <ul class="feature-tech">
              <li>React</li>
              <li>Firebase</li>
              <li>TypeScript</li>
            </ul>
            <div class="feature-links">
              <a href="#" aria-label="GitHub">
                <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
                  <path d="M12 2C6.48 2 2 6.58 2 12.25c0 4.53 2.87 8.37 6.84 9.73.5.1.68-.22.68-.49 0-.24-.01-.88-.01-1.73-2.78.62-3.37-1.37-3.37-1.37-.45-1.18-1.11-1.5-1.11-1.5-.91-.64.07-.62.07-.62 1 .07 1.53 1.06 1.53 1.06.89 1.57 2.34 1.12 2.91.85.09-.66.35-1.12.63-1.38-2.22-.26-4.56-1.14-4.56-5.07 0-1.12.39-2.03 1.03-2.75-.1-.26-.45-1.3.1-2.71 0 0 .84-.28 2.75 1.05a9.4 9.4 0 0 1 2.5-.34c.85 0 1.71.12 2.5.34 1.91-1.33 2.75-1.05 2.75-1.05.55 1.41.2 2.45.1 2.71.64.72 1.03 1.63 1.03 2.75 0 3.94-2.34 4.81-4.57 5.06.36.32.68.95.68 1.92 0 1.39-.01 2.51-.01 2.85 0 .27.18.6.69.49A10.02 10.02 0 0 0 22 12.25C22 6.58 17.52 2 12 2z"/>
                </svg>
              </a>
              <a href="#" aria-label="External Link">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="20" height="20">
                  <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                  <polyline points="15 3 21 3 21 9"/>
                  <line x1="10" y1="14" x2="21" y2="3"/>
                </svg>
              </a>
            </div>
          </div>
        </div>

        <div class="feature">
          <div class="feature-img">
            <a href="#" class="feature-img-link">
              <img
                src="https://coresg-normal.trae.ai/api/ide/v1/text_to_image?prompt=personal%20developer%20portfolio%20website%20dark%20navy%20theme%2C%20teal%20accents%2C%20clean%20modern%20layout%2C%20hero%20section&image_size=landscape_4_3"
                alt="Pratinjau Web Portofolio"
              />
            </a>
          </div>
          <div class="feature-text">
            <p class="feature-label">Proyek Unggulan</p>
            <h4 class="feature-title"><a href="#">Web Portofolio Ini</a></h4>
            <div class="feature-desc">
              <p>
                Website portofolio pribadi yang kamu lihat sekarang. Dibuat
                dengan HTML, CSS, dan JavaScript murni, dengan tema gelap yang
                rapi dan animasi halus.
              </p>
            </div>
            <ul class="feature-tech">
              <li>HTML</li>
              <li>CSS</li>
              <li>JavaScript</li>
            </ul>
            <div class="feature-links">
              <a href="#" aria-label="GitHub">
                <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
                  <path d="M12 2C6.48 2 2 6.58 2 12.25c0 4.53 2.87 8.37 6.84 9.73.5.1.68-.22.68-.49 0-.24-.01-.88-.01-1.73-2.78.62-3.37-1.37-3.37-1.37-.45-1.18-1.11-1.5-1.11-1.5-.91-.64.07-.62.07-.62 1 .07 1.53 1.06 1.53 1.06.89 1.57 2.34 1.12 2.91.85.09-.66.35-1.12.63-1.38-2.22-.26-4.56-1.14-4.56-5.07 0-1.12.39-2.03 1.03-2.75-.1-.26-.45-1.3.1-2.71 0 0 .84-.28 2.75 1.05a9.4 9.4 0 0 1 2.5-.34c.85 0 1.71.12 2.5.34 1.91-1.33 2.75-1.05 2.75-1.05.55 1.41.2 2.45.1 2.71.64.72 1.03 1.63 1.03 2.75 0 3.94-2.34 4.81-4.57 5.06.36.32.68.95.68 1.92 0 1.39-.01 2.51-.01 2.85 0 .27.18.6.69.49A10.02 10.02 0 0 0 22 12.25C22 6.58 17.52 2 12 2z"/>
                </svg>
              </a>
              <a href="#" aria-label="External Link">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="20" height="20">
                  <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                  <polyline points="15 3 21 3 21 9"/>
                  <line x1="10" y1="14" x2="21" y2="3"/>
                </svg>
              </a>
            </div>
          </div>
        </div>

        <div class="feature reverse">
          <div class="feature-img">
            <a href="{{ asset('app/tte/index.html') }}" class="feature-img-link">
              <img src="{{ asset('images/tte.png') }}" alt="Pratinjau AUTO TTE" />
            </a>
          </div>
          <div class="feature-text">
            <p class="feature-label">Proyek Unggulan</p>
            <h4 class="feature-title">
              <a href="{{ asset('app/tte/index.html') }}">AUTO TTE</a>
            </h4>
            <div class="feature-desc">
              <p>
                Aplikasi otomatisasi Tanda Tangan Elektronik (TTE) pada dokumen.
                Mempercepat proses penandatanganan berkas secara massal,
                sehingga lebih cepat, rapi, dan minim kesalahan.
              </p>
            </div>
            <ul class="feature-tech">
              <li>Python</li>
              <li>Automation</li>
              <li>PDF</li>
            </ul>
            <div class="feature-links">
              <a href="#" aria-label="GitHub">
                <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
                  <path d="M12 2C6.48 2 2 6.58 2 12.25c0 4.53 2.87 8.37 6.84 9.73.5.1.68-.22.68-.49 0-.24-.01-.88-.01-1.73-2.78.62-3.37-1.37-3.37-1.37-.45-1.18-1.11-1.5-1.11-1.5-.91-.64.07-.62.07-.62 1 .07 1.53 1.06 1.53 1.06.89 1.57 2.34 1.12 2.91.85.09-.66.35-1.12.63-1.38-2.22-.26-4.56-1.14-4.56-5.07 0-1.12.39-2.03 1.03-2.75-.1-.26-.45-1.3.1-2.71 0 0 .84-.28 2.75 1.05a9.4 9.4 0 0 1 2.5-.34c.85 0 1.71.12 2.5.34 1.91-1.33 2.75-1.05 2.75-1.05.55 1.41.2 2.45.1 2.71.64.72 1.03 1.63 1.03 2.75 0 3.94-2.34 4.81-4.57 5.06.36.32.68.95.68 1.92 0 1.39-.01 2.51-.01 2.85 0 .27.18.6.69.49A10.02 10.02 0 0 0 22 12.25C22 6.58 17.52 2 12 2z"/>
                </svg>
              </a>
              <a href="#" aria-label="External Link">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="20" height="20">
                  <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                  <polyline points="15 3 21 3 21 9"/>
                  <line x1="10" y1="14" x2="21" y2="3"/>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- Other projects -->
      <section class="section other">
        <h3 class="other-title">Proyek Lainnya</h3>
        <a class="archive-link" href="#">lihat arsip</a>
        <ul class="work-grid" id="cards">
          <li class="card">
            <div class="card-top">
              <span class="folder">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="36" height="36">
                  <path d="M3 7a2 2 0 0 1 2-2h5l2 2h7a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7z"/>
                </svg>
              </span>
              <span class="card-links">
                <a href="#" aria-label="GitHub"><svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"><path d="M12 2C6.48 2 2 6.58 2 12.25c0 4.53 2.87 8.37 6.84 9.73.5.1.68-.22.68-.49 0-.24-.01-.88-.01-1.73-2.78.62-3.37-1.37-3.37-1.37-.45-1.18-1.11-1.5-1.11-1.5-.91-.64.07-.62.07-.62 1 .07 1.53 1.06 1.53 1.06.89 1.57 2.34 1.12 2.91.85.09-.66.35-1.12.63-1.38-2.22-.26-4.56-1.14-4.56-5.07 0-1.12.39-2.03 1.03-2.75-.1-.26-.45-1.3.1-2.71 0 0 .84-.28 2.75 1.05a9.4 9.4 0 0 1 2.5-.34c.85 0 1.71.12 2.5.34 1.91-1.33 2.75-1.05 2.75-1.05.55 1.41.2 2.45.1 2.71.64.72 1.03 1.63 1.03 2.75 0 3.94-2.34 4.81-4.57 5.06.36.32.68.95.68 1.92 0 1.39-.01 2.51-.01 2.85 0 .27.18.6.69.49A10.02 10.02 0 0 0 22 12.25C22 6.58 17.52 2 12 2z"/></svg></a>
                <a href="#" aria-label="External Link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="20" height="20"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg></a>
              </span>
            </div>
            <h4><a href="#">Berusaha Tetap Normal</a></h4>
            <p>
              Proyek pribadi untuk terus belajar dan menjaga semangat ngoding di
              sela kesibukan sehari-hari.
            </p>
            <ul class="card-tech">
              <li>JavaScript</li>
              <li>React</li>
            </ul>
          </li>
          <li class="card">
            <div class="card-top">
              <span class="folder">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="36" height="36">
                  <path d="M3 7a2 2 0 0 1 2-2h5l2 2h7a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7z"/>
                </svg>
              </span>
              <span class="card-links">
                <a href="#" aria-label="GitHub"><svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"><path d="M12 2C6.48 2 2 6.58 2 12.25c0 4.53 2.87 8.37 6.84 9.73.5.1.68-.22.68-.49 0-.24-.01-.88-.01-1.73-2.78.62-3.37-1.37-3.37-1.37-.45-1.18-1.11-1.5-1.11-1.5-.91-.64.07-.62.07-.62 1 .07 1.53 1.06 1.53 1.06.89 1.57 2.34 1.12 2.91.85.09-.66.35-1.12.63-1.38-2.22-.26-4.56-1.14-4.56-5.07 0-1.12.39-2.03 1.03-2.75-.1-.26-.45-1.3.1-2.71 0 0 .84-.28 2.75 1.05a9.4 9.4 0 0 1 2.5-.34c.85 0 1.71.12 2.5.34 1.91-1.33 2.75-1.05 2.75-1.05.55 1.41.2 2.45.1 2.71.64.72 1.03 1.63 1.03 2.75 0 3.94-2.34 4.81-4.57 5.06.36.32.68.95.68 1.92 0 1.39-.01 2.51-.01 2.85 0 .27.18.6.69.49A10.02 10.02 0 0 0 22 12.25C22 6.58 17.52 2 12 2z"/></svg></a>
                <a href="#" aria-label="External Link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="20" height="20"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg></a>
              </span>
            </div>
            <h4><a href="#">Pekerjaan Kantoran</a></h4>
            <p>
              Berbagai tool dan skrip kecil untuk membantu mempermudah pekerjaan
              administrasi harian di kantor.
            </p>
            <ul class="card-tech">
              <li>Python</li>
              <li>Bash</li>
            </ul>
          </li>
          <li class="card">
            <div class="card-top">
              <span class="folder">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="36" height="36">
                  <path d="M3 7a2 2 0 0 1 2-2h5l2 2h7a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7z"/>
                </svg>
              </span>
              <span class="card-links">
                <a href="#" aria-label="External Link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="20" height="20"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg></a>
              </span>
            </div>
            <h4><a href="#">Cari Uang</a></h4>
            <p>
              Kumpulan proyek freelance kecil untuk klien, dari landing page
              sampai aplikasi web sederhana.
            </p>
            <ul class="card-tech">
              <li>Node</li>
              <li>Firebase</li>
              <li>TypeScript</li>
            </ul>
          </li>
          <li class="card">
            <div class="card-top">
              <span class="folder">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="36" height="36">
                  <path d="M3 7a2 2 0 0 1 2-2h5l2 2h7a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7z"/>
                </svg>
              </span>
              <span class="card-links">
                <a href="#" aria-label="GitHub"><svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"><path d="M12 2C6.48 2 2 6.58 2 12.25c0 4.53 2.87 8.37 6.84 9.73.5.1.68-.22.68-.49 0-.24-.01-.88-.01-1.73-2.78.62-3.37-1.37-3.37-1.37-.45-1.18-1.11-1.5-1.11-1.5-.91-.64.07-.62.07-.62 1 .07 1.53 1.06 1.53 1.06.89 1.57 2.34 1.12 2.91.85.09-.66.35-1.12.63-1.38-2.22-.26-4.56-1.14-4.56-5.07 0-1.12.39-2.03 1.03-2.75-.1-.26-.45-1.3.1-2.71 0 0 .84-.28 2.75 1.05a9.4 9.4 0 0 1 2.5-.34c.85 0 1.71.12 2.5.34 1.91-1.33 2.75-1.05 2.75-1.05.55 1.41.2 2.45.1 2.71.64.72 1.03 1.63 1.03 2.75 0 3.94-2.34 4.81-4.57 5.06.36.32.68.95.68 1.92 0 1.39-.01 2.51-.01 2.85 0 .27.18.6.69.49A10.02 10.02 0 0 0 22 12.25C22 6.58 17.52 2 12 2z"/></svg></a>
                <a href="#" aria-label="External Link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="20" height="20"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg></a>
              </span>
            </div>
            <h4><a href="#">Eksperimen Go</a></h4>
            <p>
              Latihan membuat aplikasi dan API kecil menggunakan Go untuk
              belajar backend yang cepat dan ringan.
            </p>
            <ul class="card-tech">
              <li>Go</li>
              <li>REST API</li>
            </ul>
          </li>
          <li class="card">
            <div class="card-top">
              <span class="folder">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="36" height="36">
                  <path d="M3 7a2 2 0 0 1 2-2h5l2 2h7a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7z"/>
                </svg>
              </span>
              <span class="card-links">
                <a href="#" aria-label="GitHub"><svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"><path d="M12 2C6.48 2 2 6.58 2 12.25c0 4.53 2.87 8.37 6.84 9.73.5.1.68-.22.68-.49 0-.24-.01-.88-.01-1.73-2.78.62-3.37-1.37-3.37-1.37-.45-1.18-1.11-1.5-1.11-1.5-.91-.64.07-.62.07-.62 1 .07 1.53 1.06 1.53 1.06.89 1.57 2.34 1.12 2.91.85.09-.66.35-1.12.63-1.38-2.22-.26-4.56-1.14-4.56-5.07 0-1.12.39-2.03 1.03-2.75-.1-.26-.45-1.3.1-2.71 0 0 .84-.28 2.75 1.05a9.4 9.4 0 0 1 2.5-.34c.85 0 1.71.12 2.5.34 1.91-1.33 2.75-1.05 2.75-1.05.55 1.41.2 2.45.1 2.71.64.72 1.03 1.63 1.03 2.75 0 3.94-2.34 4.81-4.57 5.06.36.32.68.95.68 1.92 0 1.39-.01 2.51-.01 2.85 0 .27.18.6.69.49A10.02 10.02 0 0 0 22 12.25C22 6.58 17.52 2 12 2z"/></svg></a>
                <a href="#" aria-label="External Link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="20" height="20"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg></a>
              </span>
            </div>
            <h4><a href="#">Belajar Java</a></h4>
            <p>
              Proyek latihan dasar pemrograman Java, dari konsep OOP sampai
              aplikasi konsol sederhana.
            </p>
            <ul class="card-tech">
              <li>Java</li>
            </ul>
          </li>
          <li class="card">
            <div class="card-top">
              <span class="folder">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="36" height="36">
                  <path d="M3 7a2 2 0 0 1 2-2h5l2 2h7a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7z"/>
                </svg>
              </span>
              <span class="card-links">
                <a href="#" aria-label="External Link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="20" height="20"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg></a>
              </span>
            </div>
            <h4><a href="#">Dan Lain-lain</a></h4>
            <p>
              Berbagai proyek iseng dan eksperimen kecil lainnya yang saya buat
              sambil belajar teknologi baru.
            </p>
            <ul class="card-tech">
              <li>Linux</li>
              <li>Bash</li>
            </ul>
          </li>
        </ul>
      </section>

      <!-- Contact -->
      <section id="contact" class="section contact">
        <p class="contact-num"><span class="num">04.</span> selanjutnya?</p>
        <h3 class="contact-title">Hubungi Saya</h3>
        <p class="contact-desc">
          Kotak masuk saya selalu terbuka. Kalau ada pertanyaan, ide proyek,
          atau sekadar mau menyapa, saya usahakan untuk membalas.
        </p>
        <a class="btn big-btn" href="mailto:galang@galangcs.my.id">Sapa Saya</a>
      </section>
    </main>

    <footer>
      <p>
        Dibuat oleh Galang Cikal Sugiantoro &middot; <span id="year"></span>
      </p>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>

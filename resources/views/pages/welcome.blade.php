<!-- ADINDA CITRA SULISTIYO -->
<!-- 4123010051 -->
@extends('layouts.app')

@section('content')

  <!-- HERO -->
<section class="hero-section">
  <div class="overlay">
    <div class="hero-content">
      <h2>INGIN KULIAH DAN BERKARIR <br> DI LUAR NEGERI?</h2>
      <a href="#" class="btn-hero">SELENGKAPNYA<i class="fas fa-chevron-down ms-2"></i></a>
    </div>
  </div>
</section>


  <!-- TENTANG -->
  <section id="tentang" class="section about">
    <h2 class="section-title">TENTANG KAMI</h2>
    <p class="lead">
      INAKLUG adalah Konsultan Pendidikan Internasional di Indonesia yang sudah memberangkatkan lebih dari 3000 mahasiswa Indonesia yang ingin kuliah, perjalanan wisata dan berkarir di negara maju di dunia.
    </p>
  </section>

  <!-- LAYANAN -->
  <section id="layanan" class="section layanan">
    <h2 class="section-title">LAYANAN KAMI</h2>

    <div class="cards">
      <article class="card">
        <img src="{{ asset('images/images/bachelor.png') }}" alt="Bachelor">
        <div class="card-overlay">
          <div class="card-line"></div>
          <h3>Studi S1 - Bachelor</h3>
        </div>
      </article>

      <article class="card">
        <img src="{{ asset('images/images/master.png') }}" alt="Master">
        <div class="card-overlay">
          <div class="card-line"></div>
          <h3>Studi S2 - Master</h3>
        </div>
      </article>

      <article class="card">
        <img src="{{ asset('images/images/phd.jpg') }}" alt="PhD">
        <div class="card-overlay">
          <div class="card-line"></div>
          <h3>Studi S3 - Ph.D</h3>
        </div>
      </article>

      <article class="card">
        <img src="{{ asset('images/images/kursus.png') }}" alt="Kursus">
        <div class="card-overlay">
          <div class="card-line"></div>
          <h3>Kursus Bahasa Asing</h3>
        </div>
      </article>

      <article class="card">
        <img src="{{ asset('images/images/studytour.png') }}" alt="Study Tour">
        <div class="card-overlay">
          <div class="card-line"></div>
          <h3>Study Tour</h3>
        </div>
      </article>

      <article class="card">
        <img src="{{ asset('images/images/ausbildung.jpg') }}" alt="Ausbildung">
        <div class="card-overlay">
          <div class="card-line"></div>
          <h3>Ausbildung</h3>
        </div>
      </article>
    </div>
  </section>

  <!-- MITRA -->
  <section class="section mitra">
    <h3 class="section-title">MITRA KAMI</h3>
    <div class="partners">
      <div class="partner-card"><img src="{{ asset('images/images/aviation.jpg') }}" alt="Inaklug"></div>
      <div class="partner-card"><img src="{{ asset('images/images/adrew.png') }}" alt="HTW"></div>
      <div class="partner-card"><img src="{{ asset('images/images/htw.png') }}" alt="Gates Cambridge"></div>
      <div class="partner-card"><img src="{{ asset('images/images/studygroup.png') }}" alt="Partner"></div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <section class="section cta">
    <div class="cta-inner">
      <div class="cta-text">
        <h3>GRATIS KONSELING STUDI DI LUAR NEGERI !!!</h3>
        <p>Konsultasi seputar kuliah / bekerja di Luar Negeri</p>
      </div>
      <a class="cta-btn" href="#hubungi">MULAI KONSULTASI ▾</a>
    </div>
  </section>

  <!-- ARTIKEL -->
  <section id="artikel" class="section artikel">
    <h2 class="section-title">ARTIKEL TERBARU</h2>
    <div class="article-grid">
      <article class="article-card">
        <img src="{{ asset('images/images/studijerman.png') }}" alt="">
        <h4>5 Fakta yang Harus Kamu Ketahui Sebelum Studi ke Jerman</h4>
      </article>
      <article class="article-card">
        <img src="{{ asset('images/images/korona.png') }}" alt="">
        <h4>Uni Eropa Menghadapi Virus Corona</h4>
      </article>
      <article class="article-card">
        <img src="{{ asset('images/images/bahasajerman.png') }}" alt="">
        <h4>Belajar Bahasa Jerman Bersama Goethe Institut</h4>
      </article>
      <article class="article-card">
        <img src="{{ asset('images/images/gatescambride.png') }}" alt="">
        <h4>Apa Itu Gates Cambridge? Yuk Cari Tahu</h4>
      </article>
    </div>
  </section>

  <!-- HUBUNGI KAMI -->
  <section class="hubungi-section" id="hubungi">
    <h2>HUBUNGI KAMI</h2>
    <h3>KANTOR PUSAT</h3>
    <p>
      Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat<br>
      Phone : (+62 21) 398 38706 - Fax: (+62 21) 316 1701<br>
    </p>
    <div class="btn-group">
      <button class="btn-gradient-oval">LOKASI KAMI</button>
      <button class="btn-gradient-oval">KIRIM PESAN</button>
    </div>
  </section>

@endsection
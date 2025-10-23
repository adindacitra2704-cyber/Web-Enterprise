@extends('layouts.app')

@section('content')

  <!-- HERO SLIDE -->
<section class="layanan-hero d-flex text-white">
  <div class="overlay-layanan"></div>
  <div class="container position-relative">
    <h1 class="fw-bold">LAYANAN KAMI</h1>
  </div>
</section>

  <!-- LAYANAN -->
  <section id="layanan" class="section-layanan">
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
      <button class="btn-gradient-oval" style="background: none; border: 2px solid #5b1b6d; color: #5b1b6d;">KIRIM PESAN</button>
    </div>
  </section>

  @endsection
@extends('layouts.app')

@section('content')

  <!-- HERO SLIDE -->
  <!-- ===== SECTION: HERO TENTANG KAMI ===== -->
<section class="tentang-hero d-flex text-white">
  <div class="overlay"></div>
  <div class="container position-relative">
    <h1 class="fw-bold">TENTANG KAMI</h1>
  </div>
</section>

<!-- ===== SECTION PROFIL ===== -->
<section class="tentang-profil py-5">
  <div class="container">
    <!-- PROFIL -->
    <div class="mb-5">
      <h2 class="fw-bold text-secondary mb-3">Profil</h2>
      <p class="text-muted">
        Didirikan pada tahun 2018, ini membuktikan bahwa INAKLUG merupakan konsultan pendidikan internasional
        yang berpengalaman, terbesar, terpercaya, dan juga memiliki jam terbang tinggi untuk melayani para anak-anak muda
        Indonesia untuk menuntut ilmu di berbagai negara maju dunia.
      </p>
    </div>

    <!-- GAMBAR 2 SISI -->
    <div class="row g-4 mb-5">
      <div class="col-md-6">
        <img src="{{ asset('images/images/misi.png') }}" alt="Tim Inaklug" class="img-fluid rounded shadow-sm">
      </div>
      <div class="col-md-6">
        <img src="{{ asset('images/images/visi.png') }}" alt="Virtual Learning" class="img-fluid rounded shadow-sm">
      </div>
    </div>

    <!-- VISI & MISI -->
    <div class="row text-start mt-4">
      <div class="col-md-6">
        <h3 class="fw-semibold text-secondary mb-3">Visi</h3>
        <p class="text-muted">
          Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara internasional untuk menghadapi
          persaingan di era globalisasi serta membangun karakter pemimpin Indonesia masa depan yang tangguh, mandiri, dan
          profesional.
        </p>
      </div>
      <div class="col-md-6">
        <h3 class="fw-semibold text-secondary mb-3">Misi</h3>
        <p class="text-muted">
          Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara internasional untuk menghadapi
          persaingan di era globalisasi serta membangun karakter pemimpin Indonesia masa depan yang tangguh, mandiri, dan
          profesional.
        </p>
      </div>
    </div>
  </div>
</section>


  <!-- LAYANAN -->
  <section class="layanan-section" id="layanan">
  <div class="btn-group">
    <button class="btn-outline-oval">LAYANAN KAMI</button>
  </section>

 <!-- HUBUNGI KAMI -->
<section class="hubungi-section" id="hubungi">
    <h2>Hubungi Kami</h2>
    <h3>Kantor Pusat</h3>
    <p>
        Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat<br>
        Phone : (+62 21) 398 38706 - Fax: (+62 21) 316 1701<br>
    </p>

    <div class="btn-group hubungi-btn">
        <button class="btn-gradient-oval">LOKASI KAMI</button>
        <button class="btn-gradient-oval">KIRIM PESAN</button>
    </div>
</section>

@endsection
@extends('layouts.app')

@section('title')
Bidang Minat dan Bakat | Kabinet {{env('KABINET');}}
@endsection

@section('content')
<!-- Content-bem -->
  <section id="content-bem" class="content-bem mt-5">

    <div class="container" data-aos="fade-up">

      <header class="section-header mt-5 fw-bold">
        <p>Bidang Minat & Bakat</p>
      </header>

      <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-4 mb-5">
          <img src="{{ url('frontend/assets/img/foto_profile/kelompok/minbat.png') }}" alt="" width="400px" height="230px" class="img-thumbnail">
        </div>
        <div class="col-md-6">
          <p>Bidang yang mewadahi serta memfasilitasi minat dan bakat
          mahasiswa FASILKOM UNSIKA.</p>
        </div>
      </div>

      <div class="row mt-5 justify-content-center text-center m-5">
        
        
      <x-koordinator-card bidang="Minat dan Bakat" :pengurus="$pengurus" />

        

        {{-- <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h4>Koordinator Bidang</h4>
              <p>Herwinda K.</p>
            </div>
          </div>
        </div> --}}

      </div>

      <div class="row justify-content-center">
        <div class="col-md-10">
          <p>Departemen yang ada dalam Bidang Minat & Bakat:</p>
        </div>

        <div class="row justify-content-center text-center align-text-bottom mt-5 mb-5">

          <div class="col-md-3">
            <a href="{{ route('keilmuan') }}">
              <div class="card">
                <div class="card-body d-flex align-items-center justify-content-center">
                  <h4>Departemen Keilmuan</h4>
                </div>
              </div>
            </a>
          </div>
  
          <div class="col-md-3">
            <a href="{{ route('olahraga') }}">
              <div class="card">
                <div class="card-body d-flex align-items-center justify-content-center">
                  <h4>Departemen Olahraga</h4>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-3">
            <a href="{{ route('senbud') }}">
              <div class="card">
                <div class="card-body d-flex align-items-center justify-content-center">
                  <h4>Departemen Seni Budaya</h4>
                </div>
              </div>
            </a>
          </div>

        </div>

      </div>

    </div>

  </section>
<!-- End Content-bem -->
@endsection
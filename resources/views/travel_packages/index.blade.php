@extends('layouts.frontend')

@section('content')
 <!--==================== HOME ====================-->
 <section>
        <div class="swiper-container gallery-top">
          <div class="swiper-wrapper">
            <section class="islands swiper-slide">
              <img src="{{ asset('frontend/assets/img/bali.jpg') }}" alt="" class="islands__bg" />

              <div class="islands__container container">
                <div class="islands__data">
                  <h2 class="islands__subtitle">Jelajahi</h2>
                  <h1 class="islands__title">Paket Wisata</h1>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>

      <!--==================== Tata Cara Pemesanan Tiket ====================-->
      <section class="section" id="Tutorial">
        <div class="container">
          <span class="section__subtitle" style="text-align: center">Informasi</span>
          <h2 class="section__title" style="text-align: center">
            Tata Cara Pemesanan Paket Wisata
          </h2>
          <div class="img_tut">
            <img src="{{ asset('frontend/assets/img/travel-1.png') }}" alt="">
          </div>
          

        </div>
      </section>

      <!--==================== POPULAR ====================-->
      <section class="section" id="popular">
        <div class="container">
          <span class="section__subtitle" style="text-align: center">SEMUA</span>
          <h2 class="section__title" style="text-align: center">
            Paket Wisata
          </h2>

          <div class="popular__all">
            @foreach($travel_packages as $travel_package)
                <article class="popular__card">
                <a href="{{ route('travel_package.show', $travel_package->slug) }}">
                    <img
                    src="{{ Storage::url($travel_package->galleries->first()->images) }}"
                    alt=""
                    class="popular__img"
                    />
                    <div class="popular__data">
                    <h2 class="popular__price"><span>Rp </span>{{ number_format($travel_package->price,3) }} <span>/ Pax</span></h2>
                    <h3 class="popular__title">{{ $travel_package->location }}</h3>
                    <p class="popular__description">{{ $travel_package->type }}</p>
                    </div>
                </a>
                </article>
            @endforeach
          </div>
        </div>
      </section>
@endsection
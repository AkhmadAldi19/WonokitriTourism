@extends('layouts.frontend')

@section('content')
<!--==================== HOME ====================-->
<section>
        <div class="swiper-container gallery-top">
          <div class="swiper-wrapper">
            <!--========== ISLANDS 1 ==========-->
            <section class="islands swiper-slide">
              <img
                src="{{ asset('frontend/assets/img/contact-hero.jpg') }}"
                alt=""
                class="islands__bg"
              />
              <div class="bg__overlay">
                <div class="islands__container container">
                  <div class="islands__data">
                    <h2 class="islands__subtitle">Butuh Perjalanan</h2>
                    <h1 class="islands__title">Hubungi Kami</h1>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>
      <!--==================== CONTACT ====================-->
      <section class="contact section" id="contact">
        <div class="contact__container container grid">
          <div class="contact__images">
            <div class="contact__orbe"></div>

            <div class="contact__img">
              <img src="{{ asset('frontend/assets/img/contact.jpg') }}" alt="" />
            </div>
          </div>

          <div class="contact__content">
            <div class="contact__data">
              <span class="section__subtitle">Butuh Bantuan</span>
              <h2 class="section__title">Jangan ragu untuk menghubungi kami</h2>
              <p class="contact__description">
                Apakah ada masalah dalam menemukan tempat untuk perjalanan 
                Anda berikutnya? Butuh panduan di perjalanan 
                pertama atau butuh konsultasi seputar traveling? cukup hubungi kami.
              </p>
            </div>

            <div class="contact__card">
              <div class="contact__card-box">
                <div class="contact__card-info">
                  <i class="bx bxs-message-rounded-dots"></i>
                  <div>
                    <h3 class="contact__card-title">Whatsapp</h3>
                    <p class="contact__card-description">+62 822-2983-3757</p>
                  </div>
                </div>

                <a target="_blank" href="https://api.whatsapp.com/send?phone=6282229833757&text=I want to booking" class="button contact__card-button"> <center>Pesan Sekarang</center></a>
              </div>
              <div class="contact__card-box">
                <div class="contact__card-info">
                  <i class="bx bxs-video"></i>
                  <div>
                    <h3 class="contact__card-title">Telepon</h3>
                    <p class="contact__card-description">+62 822-2983-3757</p>
                  </div>
                </div>

                <a target="_blank" href="tel:+6282229833757" class="button contact__card-button"> <center>Telepon Sekarang</center></a>
              </div>
              <div class="contact__card-box">
                <div class="contact__card-info">
                  <i class="bx bxs-chat"></i>
                  <div>
                    <h3 class="contact__card-title">Email</h3>
                    <p class="contact__card-description">desaedelweiswonokitri <br>@gmail.com</p>
                  </div>
                </div>

                <a target="_blank" href="mailto:desaedelweiswonokitri@gmail.com" class="button contact__card-button"> <center>Email Sekarang</center></a> 
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--==================== VALUE ====================-->
<section class="value section" id="value">
  <div class="value__container container grid">
      <div class="value__images">
          <div class="value__orbe"></div>

          <div class="value__img">
              <img src="{{ asset('frontend/assets/img/team1.jpg') }}" alt="" />
          </div>
      </div>

      <div class="value__content">
          <div class="value__data">
              <span class="section__subtitle">Pertanyaan Yang sering diajukan</span>
              <h2 class="section__title">
                  Frequently Asked Questions
              </h2>
              <p class="value__description">
                Daftar pertanyaan dari pengguna WonokitriTourism yang
                sering ditanyakan beserta jawabannya.
              </p>
          </div>

          <div class="value__accordion">
              <div class="value__accordion-item">
                  <header class="value__accordion-header">
                      <i
                          class="bx bxs-shield-x value-accordion-icon"
                      ></i>
                      <h3 class="value__accordion-title">
                          Bagaimana Cara Memesan Paket Wisata ?
                      </h3>
                      <div class="value__accordion-arrow">
                          <i class="bx bxs-down-arrow"></i>
                      </div>
                  </header>

                  <div class="value__accordion-content">
                      <p class="value__accordion-description">
                        Tutorial pemesanan paket wisata dapat dilihat di halaman "Paket Wisata" / "Informasi".
                      </p>
                  </div>
              </div>
              <div class="value__accordion-item">
                  <header class="value__accordion-header">
                      <i
                          class="bx bxs-x-square value-accordion-icon"
                      ></i>
                      <h3 class="value__accordion-title">
                          Persyaratan Apa Saja Yang Perlu dibawa saat Hari Perjalanan ?
                      </h3>
                      <div class="value__accordion-arrow">
                          <i class="bx bxs-down-arrow"></i>
                      </div>
                  </header>

                  <div class="value__accordion-content">
                      <p class="value__accordion-description">
                        Pastikan untuk membawa KTP,dan Bukti Pembayaran Paket wisata yang telah anda pesan (bila anda sudah memesan Paket wisata).
                      </p>
                  </div>
              </div>
              <div class="value__accordion-item">
                  <header class="value__accordion-header">
                      <i
                          class="bx bxs-bar-chart-square value-accordion-icon"
                      ></i>
                      <h3 class="value__accordion-title">
                          Apakah Rombongan melebihi kapasitas <br> 
                          maksimal paket wisata diharuskan submit <br>
                          form berulang-ulang<br>
                          
                      </h3>
                      <div class="value__accordion-arrow">
                          <i class="bx bxs-down-arrow"></i>
                      </div>
                  </header>

                  <div class="value__accordion-content">
                      <p class="value__accordion-description">
                          Untuk Pengunjung Yang Melebihi kapasitas maksimal paket wisata bisa langsung
                          Menghubungi admin WonokitriTourism yang tercantum Pada Halaman Kontak 
                      </p>
                  </div>
              </div>
              </div>
          </div>
      </div>
  </div>
</section>

@endsection
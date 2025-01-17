<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('build/assets/logo/logo12.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('build/assets/style.css') }}" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script
      src="https://kit.fontawesome.com/f5ed80d948.js"
      crossorigin="anonymous"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="../components/header-bar.js"></script>
    <script src="../components/footer-bar.js"></script>
    <script src="../utils/views-search.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>BudayaKu</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    @include('layouts.navigasifull')
  </nav>
    
    <div class="container-xxl">
      <main>
        <div data-aos="fade-down">
          <article>
            <div class="about-us__page">
              <h1>BudayaKu: Eksplorasi Tradisi, Seni, dan Warisan</h1>
              <p>
                BudayaKu adalah sebuah platform yang bertujuan untuk
                mendokumentasikan, mempromosikan, dan melestarikan budaya dan
                kekayaan sosial masyarakat Indonesia. Proyek ini
                dilatarbelakangi oleh keinginan untuk menjaga warisan budaya
                yang beragam di Indonesia, seperti senjata tradisional, adat
                istiadat, rumah adat, seni, bahasa, dan banyak lagi.
              </p>
              <p>
                Mengapa BudayaKu? Indonesia memiliki begitu banyak budaya yang
                beragam dan kaya. Sayangnya, banyak dari budaya ini terancam
                punah atau tidak terdokumentasi dengan baik. BudayaKu akan
                menjadi platform yang menghubungkan komunitas budaya,
                menginspirasi generasi muda untuk menjaga warisan budaya, dan
                memberikan penghargaan kepada para pelaku budaya.
              </p>
            </div>
          </article>
        </div>
        <div data-aos="fade-up">
          <article>
            <h2 class="title-team">Team Capstone Project</h2>
            <div class="about-us__creator">
              <div class="about-us__card">
                <img
                  src="{{ asset('build/assets/images/Raden.jpg') }}"
                  alt="" />
                <div class="about-us__body">
                  <p>Raden Akbar</p>
                  <p>Front-End Developer</p>
                </div>
              </div>
              <div class="about-us__card">
                <img
                  src="{{ asset('build/assets/images/Aji.jpg') }}"
                  alt="" />
                <div class="about-us__body">
                  <p>Aji Putra Ramadhan</p>
                  <p>Back-End Developer</p>
                </div>
              </div>
              <div class="about-us__card">
                <img
                  src="{{ asset('build/assets/images/Matien.jpg') }}"
                  alt="" />
                <div class="about-us__body">
                  <p>Matien Hakim Falahudin Bachtiar</p>
                  <p>Front-End Developer</p>
                </div>
              </div>
              <div class="about-us__card">
                <img
                  src="{{ asset('build/assets/images/Izwah.jpg') }}"
                  alt="" />
                <div class="about-us__body">
                  <p>Izwatulhusna Amatulmuiz</p>
                  <p>Front-End Developer</p>
                </div>
              </div>
              <div class="about-us__card">
                <img
                  src="https://www.clipartkey.com/mpngs/m/152-1520367_user-profile-default-image-png-clipart-png-download.png"
                  alt="" />
                <div class="about-us__body">
                  <p>Vinsensius Saputra Jemahan</p>
                  <p>Front-End Developer</p>
                </div>
              </div>
            </div>
          </article>
    <hr>
          <div class="about-us__card" >
            <p>Website ini masih dalam tahap pengembangan jika anda menemukan Bug atau masalah lain mohon di maklumi</p>
            <h4>Salam Hangat Dev BudayaKu :)</h4>
          </div>
        </div>
      </main>
    </div>
    <div class="container-fluid">
      @include('layouts.footer')
    </div>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        var elms = document.getElementsByClassName('splide');

        for (var i = 0; i < elms.length; i++) {
          new Splide(elms[i], {
            autoWidth: true,
            perPage: 7,
            focus: 0,
          }).mount();
        }
      });
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>

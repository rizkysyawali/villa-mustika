@extends('layout.app')

@section('title',  'Villa Mustika Ciwidey')
    
@section('content')
            <!-- Navigation -->
            <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
                <div class="container">
    
                    <!-- Image Logo -->
                    <a class="navbar-brand logo-image" href="/"><img src="./assets/images/logo.png" alt="alternative"></a>
    
                    <!-- Text Logo - Use this if you don't have a graphic logo -->
                    <a class="navbar-brand logo-text bouncer home_text" href="/"> <strong>Villa Mustika Ciwidey</strong> </a>
    
                    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault" >
                        <ul class="navbar-nav ms-auto navbar-nav-scroll">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#header">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">Tentang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services">Fasilitas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#gallery">Galeri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Kontak</a>
                            </li>
                        </ul>
                    </div> <!-- end of navbar-collapse -->
                </div> <!-- end of container -->
            </nav> <!-- end of navbar -->
            <!-- end of navigation -->
    
    
        <!-- Home -->
        <section class="home pt-10  d-flex align-items-center" id="header">
            <div class="container text-light py-5 "  data-aos="fade-right"> 
                
                <h1 class="headline">The Best <span class="green">Villa</span><br>in Ciwidey Bandung</h1>
                <h4 class="highlight-text"></h4>
                <p class="para para-light py-3"></p>
                <div class="d-flex align-items-center">
                    <p class="p-2"><i class="fas fa-shopping-basket fa-lg"></i></p>
                    <p>Strawberry Farm</p>  
                </div>
                <div class="d-flex align-items-center">
                    <p class="p-2"><i class="fas fa-wifi fa-lg"></i></p>
                    <p>Free Wifi</p>  
                </div>
            </div> <!-- end of container -->
        </section> <!-- end of home -->
    
    
        <!-- Information -->
        <section class="information">
            <div class="container-fluid">  
                <div class="row text-light">
                    <div class="col-lg-4 text-center text-dark p-5" data-aos="zoom-in">
                        <i class="fas fa-road fa-3x p-2"></i>
                        <h4 class="py-3">Lokasi</h4>
                        <p class="para-light">Lokasi yang sangat terjangkau hanya 45 menit dari pintu Tol Soroja Bandung.</p>
                    </div>
                    <div class="col-lg-4 text-center text-dark p-5"  data-aos="zoom-in">
                        <i class="fas fa-tree fa-3x p-2"></i>
                        <h4 class="py-3">View</h4>
                        <p class="para-light">Kami menyajikan pemandangan pegunungan yang hijau yang dapat memanjakan mata Anda. </p>
                    </div>
                    <div class="col-lg-4 text-center text-dark p-5"  data-aos="zoom-in"> 
                        <i class="fas fa-users  fa-3x p-2"></i>
                        <h4 class="py-3">Area </h4>
                        <p class="para-light">Area yang luas sangat cocok untuk acara gathering kantor mapun kumpul bersama keluarga tercinta.</p>
                    </div>
                </div>
            </div> <!-- end of container -->
        </section> <!-- end of information -->
        
    
        <!-- About -->
        <section class="about d-flex align-items-center text-light py-5" id="about">
            <div class="container" >
                <div class="row d-flex align-items-center">
                    <div class="col-lg-7" data-aos="fade-right">
                        <h1 class="mt-5 green">Villa Bernuansa Alam</h1>
                        <p class="py-2 para-light">Villa Mustika Ciwidey merupakan salah satu villa berkonsepkan alam hijau yang dapat memanjakan mata dengan halaman yang luas.</p>
                        <p class="py-2 para-light">Lokasinya yang berdekatan dengan tempat wisata Ciwidey, menjadikan Villa Mustika Ciwidey menjadi salah satu tempat favorit wisatawan.</p>
                    </div>
                    <div class="col-lg-5 text-center py-4 py-sm-0" data-aos="fade-down"> 
                        <img class="img-fluid" src="./assets/images/about.jpg" alt="about" >
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section> <!-- end of about -->
    
    
        <!-- Services -->
        <section class="services d-flex align-items-center pt-20 pb-20" id="services">
            <div class="container text-light">
                <div class="text-center pb-4" >
                    <p data-aos="zoom-in">FASILITAS</p> 
                    <h2 class="py-2" data-aos="zoom-in">Jelajahi fasilitas di area sekitar</h2>
                    <p class="para-light" data-aos="zoom-in">Selain pemandangan yang indah, Villa Mustika Ciwidey juga menyediakan fasilitas-fasilitas yang dapat Anda nikmati di halaman sekitar secara gratis bersama keluarga tercinta. Villa Mustika CIwidey memberikan pengalaman menarik untuk Anda nikmati. </p>
                </div>
                <div class="row gy-4 py-2" data-aos="zoom-in">
                    <div class="col-lg-4">
                        <div class="card bg-transparent">
                            <i class="fas fa-home fa-2x"></i>
                            <h4 class="py-2">JOGGING TRACK</h4>Bagi Anda yang gemar berolahraga lari pagi, kami menyediakan arena Joging Track yang dapat Anda gunakan.
                            <p class="para-light"></p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card bg-transparent">
                            <i class="fas fa-wifi fa-2x"></i>
                            <h4 class="py-2"> HOME WIFI</h4>
                            <p class="para-light">Nikmati hari-hari Anda dengan bermedia sosial atapun streaming Youtube dengan Wifi gratis yang telah kami sediakan. </p>
                        </div>                    
                    </div>
                    <div class="col-lg-4">
                        <div class="card bg-transparent">
                            <i class="fas fa-phone fa-2x"></i>
                            <h4 class="py-2">STRAWBERRY FARM</h4>
                            <p class="para-light">Untuk Anda pecinta buah strawberry, Anda dapat memetik sendiri di kebun strawberi yang telah kami sediakan untuk Anda.</p>
                        </div>                    
                    </div>
                    <div class="col-lg-4">
                        <div class="card bg-transparent">
                            <i class="fas fa-mobile fa-2x"></i>
                            <h4 class="py-2">PRIVATE POOL</h4>
                            <p class="para-light">Fasilitas Kolam Renang pribadi yang tersedia di Area sekitar Villa yang dapat Anda nikmati bersama keluarga Anda.</p>
                        </div>                    
                    </div>
                    <div class="col-lg-4">
                        <div class="card bg-transparent">
                            <i class="fas fa-home fa-2x"></i>
                            <h4 class="py-2">SECURITY</h4>
                            <p class="para-light">Selain memberikan kenyamanan, kami juga memberikan keamanan untuk Anda dengan menyediakan keamanan 24 jam.</p>
                        </div>                    
                    </div>
                    <div class="col-lg-4">
                        <div class="card bg-transparent">
                            <i class="fas fa-tv fa-2x"></i>
                            <h4 class="py-2">FISHING AREA</h4>
                            <p class="para-light">Bagi Anda yang hobi mancing, kami sediakan kolam ikan yang dapat Anda gunakan untuk memancing ikan.</p>
                        </div>                    
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section> <!-- end of services -->
    
    
        <!-- Plans -->
        <section class="plans d-flex align-items-center py-5" id="gallery">
            <div class="container text-light" >
                <div class="text-center pb-4">
                    <p data-aos="zoom-in">GALERI</p>
                    <h4 class="py-2" data-aos="zoom-in">Abadikan pengalaman Anda bersama kami dengan keindahan alam di sekitar.</h4>
                </div>
                <div class="row gy-4" data-aos="zoom-in">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                               data-image="./assets/images/gallery/vm2.jpg"
                               data-target="#image-gallery">
                                <img class="img-thumbnail"
                                     src="./assets/images/gallery/vm2.jpg"
                                     alt="Villa Mustika Ciwidey">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                               data-image="./assets/images/gallery/vm3.jpg"
                               data-target="#image-gallery">
                                <img class="img-thumbnail"
                                     src="./assets/images/gallery/vm3.jpg"
                                     alt="Villa Mustika Ciwidey">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                               data-image="./assets/images/gallery/vm4.jpg"
                               data-target="#image-gallery">
                                <img class="img-thumbnail"
                                     src="./assets/images/gallery/vm4.jpg"
                                     alt="Villa Mustika Ciwidey">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                               data-image="./assets/images/gallery/vm5.jpg"
                               data-target="#image-gallery">
                                <img class="img-thumbnail"
                                     src="./assets/images/gallery/vm5.jpg"
                                     alt="Villa Mustika Ciwidey">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                               data-image="./assets/images/gallery/vm6.jpg"
                               data-target="#image-gallery">
                                <img class="img-thumbnail"
                                     src="./assets/images/gallery/vm6.jpg"
                                     alt="Villa Mustika Ciwidey">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                               data-image="./assets/images/gallery/vm7.jpg"
                               data-target="#image-gallery">
                                <img class="img-thumbnail"
                                     src="./assets/images/gallery/vm7.jpg"
                                     alt="Villa Mustika Ciwidey">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                               data-image="./assets/images/gallery/vm20.jpg"
                               data-target="#image-gallery">
                                <img class="img-thumbnail"
                                     src="./assets/images/gallery/vm20.jpg"
                                     alt="Villa Mustika Ciwidey">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                               data-image="./assets/images/gallery/vm9.jpg"
                               data-target="#image-gallery">
                                <img class="img-thumbnail"
                                     src="./assets/images/gallery/vm9.jpg"
                                     alt="Villa Mustika Ciwidey">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                               data-image="./assets/images/gallery/vm19.jpg"
                               data-target="#image-gallery">
                                <img class="img-thumbnail"
                                     src="./assets/images/gallery/vm19.jpg"
                                     alt="Villa Mustika Ciwidey">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                               data-image="./assets/images/gallery/vm15.jpg"
                               data-target="#image-gallery">
                                <img class="img-thumbnail"
                                     src="./assets/images/gallery/vm15.jpg"
                                     alt="Villa Mustika Ciwidey">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                               data-image="./assets/images/gallery/vm16.jpg"
                               data-target="#image-gallery">
                                <img class="img-thumbnail"
                                     src="./assets/images/gallery/vm16.jpg"
                                     alt="Villa Mustika Ciwidey">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                               data-image="./assets/images/gallery/vm17.jpg"
                               data-target="#image-gallery">
                                <img class="img-thumbnail"
                                     src="./assets/images/gallery/vm17.jpg"
                                     alt="Villa Mustika Ciwidey">
                            </a>
                        </div>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section> <!-- end of plans -->    
    
        <!-- Location -->
        <section class="location text-light" id="contact">
            <div class="container-fluid" data-aos="zoom-in">
                <div class="row">
                    <div class="col-lg-4 d-flex justify-item-center text-dark p-5">
                        <div class="p-2"><i class="far fa-map fa-3x"></i></div>
                        <div class="ms-2">
                            <h6>Alamat</h6>
                            <p>Jl. Citiwu Kp Cikoneng No.25, Alamendah, Kec. Ciwidey Kabupaten Bandung</p>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex justify-item-center text-dark p-5" >
                        <div class="px-4"><i class="fas fa-mobile-alt fa-3x"></i></div>
                        <div class="ms-2">
                            <h6>Informasi dan Pemesanan</h6>
                            <p>0812-3450-5677</p>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex justify-item-center text-dark p-5" >
                        <div class="px-3"><i class="far fa-envelope fa-3x"></i></div>
                        <div class="ms-2">
                            <h6>Email</h6>
                            <p>support@javateknologi.com</p>
                        </div>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section> <!-- end of location -->
    
    
        <!-- Footer -->
        <section class="footer text-light">
            <div class="container">
                <div class="row" data-aos="fade-right">
                    <div class="col-lg-4 py-4 py-md-5">
                        <div class="d-flex align-items-center">
                            <h4 class="green px-2">Villa Mustika Ciwidey</h4>
                        </div>
                        <p class="py-3 px-2 para-light">Nikmati hari libur Anda bersama Villa Mustika Ciwidey dengan keindahan alam yang dapat memanjakan mata, serta memberikan kesejukan disetiap moment Anda. Dengan area yang luas Anda dapat menikmatilah berbagai fasilitas yang telah kami sediakan. Jangan lewatkan hari libur Anda bersama Villa Mustika Ciwidey.</p>
                    </div> <!-- end of col -->

                    <div class="col-lg-4 py-4 py-md-5">
                        
                    </div> <!-- end of col -->
    
                    <div class="col-lg-4 py-4 py-md-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-number mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                                <h4 class="green mb-4">Sosial Media</h4>
                                <a href="" target="_blank" class="zocial facebook">Facebook</a><br>
                                <a href="https://www.instagram.com/villamustikaciwidey/" target="_blank" class="zocial instagram">Instagram</a><br>
                            </div>
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section> <!-- end of footer -->
    
    
        <!-- Bottom -->
        
        <div class="bottom py-2 text-light" >
            <div class="container ">
                <div class="row ">
                    <div class="col-xl-12 col-lg-8">
                        <div class="text-center d-flex justify-content-center">
                            <p class="text-center">Copyright&copy;<script>document.write(new Date().getFullYear());</script> - Villa Mustika Ciwidey</p> 
                        </div>
                    </div>
                </div>
            </div> <!-- end of container -->
        </div> <!-- end of bottom -->
        
        <!-- Back To Top Button -->
        <button onclick="topFunction()" id="myBtn">
            <img src="assets/images/up-arrow.png" alt="alternative">
        </button>
        <!-- end of back to top button -->
    
        <div id="wa-contact" >
            <a title="Go to WA" href="http://wa.me/6281234505677" target=”_blank”> <i class="fab fa-whatsapp"></i></a>
        </div>
        
@endsection
@push('script')

<script>
    let modalId = $('#image-gallery');

$(document)
  .ready(function () {

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
        .show();
      if (counter_max === counter_current) {
        $('#show-next-image')
          .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
          .hide();
      }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;

      $('#show-next-image, #show-previous-image')
        .click(function () {
          if ($(this)
            .attr('id') === 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }

          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });

      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
          .text($sel.data('title'));
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }

      if (setIDs == true) {
        $('[data-image-id]')
          .each(function () {
            counter++;
            $(this)
              .attr('data-image-id', counter);
          });
      }
      $(setClickAttr)
        .on('click', function () {
          updateGallery($(this));
        });
    }
  });

// build key actions
$(document)
  .keydown(function (e) {
    switch (e.which) {
      case 37: // left
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
          $('#show-previous-image')
            .click();
        }
        break;

      case 39: // right
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
          $('#show-next-image')
            .click();
        }
        break;

      default:
        return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
  });
</script>
    
@endpush
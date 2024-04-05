<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" /><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <title>Petology</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min
    " />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="">
            <span>
              WITH PET
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.html">CAFE </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pet.html">HOSPITAL</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="clinic.html">RESTARUANT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">SALON</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="buy.html">CULTURE</a>
                </li>
              </ul>

              <div class="ml-auto"> <!-- ml-auto 클래스를 사용하여 오른쪽 정렬 -->
            <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
    <!-- 로그인한 사용자에게 보이는 내용 -->
    <span class="navbar-text">
      <?php 
      // 강아지 이름이 설정되어 있을 경우 환영 메시지에 포함
      if(isset($_SESSION['dog_name'])) {
          echo htmlspecialchars($_SESSION['dog_name']) . "님 환영합니다.";
      } else {
          // 강아지 이름이 설정되지 않았을 경우 기본 메시지
          echo "환영합니다.";
      }
      ?>
    </span>
    <a href="logout.php" class="btn btn-outline-success my-2 my-sm-0 ml-2" type="button">로그아웃</a>
    <a href="user_info_edit.php" class="btn btn-outline-secondary btn-custom my-2 my-sm-0 ml-2">회원정보수정</a>


            <?php else: ?>
            
                <!-- 로그인하지 않은 사용자에게 보이는 내용 -->
                <a href="LOGIN.html" class="btn btn-outline-success my-2 my-sm-0" type="button">로그인</a>
            <?php endif; ?>
        </div>
    </div>
    <div class="quote_btn-container d-flex justify-content-center mt-3 mt-lg-0">
        <a href="tel:+8201082655717">
            Call: +82 01082655717
        </a>
    </div>
</div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-2">
                  <div class="slider_detail-box">
                    <h1>
                      애견동반
                      <span>
                       시설
                      </span>
                    </h1>
                    <p>
                      어서오세요
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Buy now
                      </a>
                      <a href="" class="btn-2">
                        Contact
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-2">
                  <div class="slider_detail-box">
                    <h1>
                     WTIH PET
                      <span>
                    
                      </span>
                    </h1>
                    <p>
                     WITH PET이란 애견과 함꼐하자
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Buy now
                      </a>
                      <a href="" class="btn-2">
                        Contact
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-2">
                  <div class="slider_detail-box">
                    <h1>
                      Professional
                      <span>
                        Care Your Pet
                      </span>
                    </h1>
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry.
                      Lorem Ipsum has been the industry's standard dummy text ever
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Buy now
                      </a>
                      <a href="" class="btn-2">
                        Contact
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-2">
                  <div class="slider_detail-box">
                    <h1>
                      Professional
                      <span>
                        Care Your Pet
                      </span>
                    </h1>
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry.
                      Lorem Ipsum has been the industry's standard dummy text ever
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Buy now
                      </a>
                      <a href="" class="btn-2">
                        Contact
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <h2 class="custom_heading">
              About Our Pets
              <span>
                Clinic
              </span>
            </h2>
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
              industry's standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and
              typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
            </p>
            <div>
              <a href="">
                About More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 



 




  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2019 All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
          lat: 40.645037,
          lng: -73.880224
        },
      });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 40.645037,
          lng: -73.880224
        },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- google map js -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <!-- end google map js -->
</body>
</body>

</html>

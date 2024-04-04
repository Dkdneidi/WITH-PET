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
  <meta name="author" content="" />

  <title>Login - Petology</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- Responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
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
                  <li class="nav-item">
                    <a class="nav-link" href="LOGIN.html">LOGIN</a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                </form>
              </div>
              <div class="quote_btn-container  d-flex justify-content-center">
                <a href="">
                  Call: +82 82655717
                </a>
              </div>
            </div>
          </nav>
        </div>

  <!-- about section -->
  
        <!-- Login form -->


  <!-- Login section -->
 <!-- Login section -->
  <section class="login_section layout_padding">
    <div class="container">
      <h2>로그인 실패</h2>
      <!-- 로그인 실패 메시지 -->
      <p class="text-danger">아이디 또는 비밀번호가 틀렸습니다. 다시 시도해주세요.</p>
      <form action="process_login.php" method="POST">
        <div class="form-group">
          <label for="username">아이디</label>
          <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="password">비밀번호</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">로그인</button>
      </form>
      <div>
        <!-- 회원가입 페이지로 이동하는 버튼 -->
        <a href="register.html" class="btn btn-secondary">회원가입</a>
        <!-- 비회원으로 계속하기 -->
        <a href="index.php" class="btn btn-info">비회원으로 계속하기</a>
      </div>
    </div>
  </section>

  <!-- Image section -->
  <section class="image_section">
    <div class="container">
      <img src="images/강아지.jpg" alt="Cute Dog" class="img-fluid" style="max-width: 50%;">
    </div>
  </section>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>
</body>
</html>





 <!-- Image section -->
<section class="image_section">
    <div class="container">
        <img src="images\강아지.jpg" alt="Cute Dog" class="img-fluid" style="max-width: 50%;">
    </div>
</section>
<!-- End image section -->



  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

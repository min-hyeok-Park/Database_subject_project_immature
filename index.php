<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yang & Parks</title>

  <!--components css file-->
  <!-- reset css link-->
  <!--<link href="/components/reset.css" rel="stylesheet">-->
  <!--basic css link-->
  <link href="/components/basic.css" rel="stylesheet">
  <!--header css link-->
  <link href="/components/header.css" rel="stylesheet">
  <!--main css link-->
  <link href="/components/main.css" rel="stylesheet">
  <!--product css link-->
  <link href="/components/product.css" rel="stylesheet">
  <!--about css link-->
  <link href="/components/about.css" rel="stylesheet">
  <!--insta css link-->
  <link href="/components/insta.css" rel="stylesheet">
  <!-- footer css link-->
  <link href="/components/footer.css" rel="stylesheet">
  <!-- font Awesome cdn script-->
  <script src="https://kit.fontawesome.com/b9698447d7.js" crossorigin="anonymous"></script>
</head>
<body>
  <!-- header start-->
  <header class = "header">

    <a href="#" class="logo">
      <span id="logo-font">Yang & Parks</span>
    </a>

    <nav class="navbar">
      <a href="#main">메인</a>
      <a href="#about">소개</a>
      <a href="#menu">메뉴</a>
      <a href="#instar">#인스타</a>
    </nav>

    <div class="action">
      <a href="/login.php" alt="#">로그인</a>
      <a href="/cart.php"><div class="iconbox"><i class="fas fa-cart-plus fa"></i></div></a>
    </div>
  </header>
  <!-- header end-->

  <!-- main start-->
  <section class="main" id="main">
    <div class="content">
      <video muted autoplay loop>
        <source src="images/video/main.mp4" type="video/mp4">
        <strong> 죄송합니다. 비디오를 불러올 수 없습니다.</strong>
      </video>
      <div class="video-text">
        <p>정왕동 1등 카페</p>
        <p>감성 카페</p>
        <p>#인스타 #감성 #정왕 #Best</span>
      </div>
    </div>
  </section>
  <!--main end-->
  <!-- intro start--> <!--introduce-->
  <section class="about" id="about">
    <h1 class="heading"> about <span>Yang & Parks</span></h1>
      <div class="intro-box">
        <div class="content">
          <p>따듯한 감성 커피숍 </p>
          <p>브라질산 1등 원두</p>
          <p>Yang&Parks 만의 특별함</p>
          <p>지역사회와 함께 나아가는 커피</p>
        </div>
      
        <div class="image">
          <img src="images/Why Number One.png" alt="이미지 작업중입니다">
        </div>
      </div>
  </section>

  <!--menu start-->
  <section class="menu" id ="menu">
    <h1 class="heading>"> Yang & Parks <span>menu</span></h1>

    <div id="menubox-container">

      <div class="box">
        <img src="images/americano.jpg" alt="이미지 작업중입니다!">
        <p>아메리카노 (HOT)</p>
        <div class="price"><div>3500</div>
          <span>회원가</span> <span>3000</span>
        </div>
      </div>

      <div class="box">
        <img src="images/drop.jpg" alt="이미지 작업중입니다!">
        <p>드랍커피 (HOT)</p>
        <div class="price"><div>5500</div>
          <span>회원가</span> <span>5000</span>
        </div>
      </div>

      <div class="box">
        <img src="images/espresso.jpg" alt="이미지 작업중입니다!">
        <p>에스프레소 (HOT)</p>
        <div class="price"><div>3500</div>
          <span>회원가</span> <span>3000</span>
        </div>
      </div>

      <div class="box">
        <img src="images/hot-latte.jpg" alt="이미지 작업중입니다!">
        <p>커피라떼 (HOT)</p>
        <div class="price"><div>4300</div>
          <span>회원가</span> <span>4000</span>
        </div>
      </div>

      <div class="box">
        <img src="images/ice-latte.jpg" alt="이미지 작업중입니다!">
        <p>커피라떼 (ICE)</p>
        <div class="price"><div>4300</div>
          <span>회원가</span> <span>4000</span>
        </div>
      </div>

      <div class="box">
        <img src="images/cafuchino.jpg" alt="이미지 작업중입니다!">
        <p>카푸치노 (HOT)</p>
        <div class="price">
          <div>4500</div>
          <span>회원가</span> <span>4000</span> 
        </div>
      </div>
    </div>
  </section>
  <!-- menu end-->
  <!-- insta start-->
  <div id="instar" class="insta">
    <!--insta api-->
    <h1 class="heading>"> #Yang & Parks 
      <span>#Insta</span><span>#Best</span>
      <span>#Coffee</span><span>#KPU</span>
    </h1>
    
    <div class="insta-image">
      <div class="box">
        <img src="images/insta/insta-1.jpg">
      </div>
      <div class="box">
        <img src="images/insta/insta-2.jpg">
      </div>
      <div class="box">
        <img src="images/insta/insta-3.jpg">
      </div>
      <div class="box">
        <img src="images/insta/insta-4.jpg">
      </div>
    </div>
  </div>
  <!--insta end-->
  <!-- footer start-->
  <footer id="footer" class="footer">
    <div class="devel">
      <p>문의사항</p>
      <p>
        프론트 - 양세진 worksejin@naver.com
      </p>
      <p>
        백엔드 - 박민혁 alsgur84265@naver.com
      </p>
    </div>
    <div class="devel">
      <p>DB수업을 위해 개발된 페이지입니다.</p>
      <p>문의사항이 있으시다면 옆에 메일로 보내주시길 바랍니다.</p>
    </div>
  </footer>
</body>

</html>
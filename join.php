<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yang & Parks Join</title>
  <link href="/components/join.css" rel="stylesheet">
  <link href="/components/header.css" rel="stylesheet">
  <link href="/components/basic.css" rel="stylesheet">
</head>
<body>
  <header class="header">
  
    <a href="#" class="logo">
      <span id="logo-font">Yang & Parks</span>
    </a>
  
    <div class="action">
      <a href="/index.php" alt="#">메인페이지로 돌아가기</a>
    </div>
  </header>

  <section id="join">

    <div class="jointitle">
      <span>회원 가입</span>
    </div>

    <form action="/joincom.php" method="post">
      <div class="container">
        <div class="join_box">
          <input type="text" name="M_num" id="M_num" placeholder="UserId">
          <div class="war_be">
            <span> ID : 6 ~ 12 </span>
          </div>
        </div>

          <div class="join_box">
            <input type="text" name="M_name" id="M_name" placeholder="UserName">
            <div class="war_be">
              <span> 이름을 입력해주세요 </span>
            </div>
          </div>

        <div class="join_box">
            <input type="password" name="M_password" id="M_password" placeholder="UserPass">
          <div class="war_be">
            <span> Password : 8~12 + 영문,숫자가 적어도 한개이상 들어가야합니다.</span>
          </div>
        </div>

        <div class="join_box">
          <input type="password" name="password2" id="password2" placeholder="check Pass">
          <div class="war_be">
            <span> 비밀번호를 한번더 입력해주세요! </span>
          </div>
        </div>

        <div class="join_box">
          <div class="join_box__map">
            <img src="/images/map/map.PNG">
            <!--
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6344.023442297392!2d126.7224809995038!3d37.34223119868934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b71100d08b537%3A0x781e027339698a6c!2z6rK96riw64-EIOyLnO2dpeyLnCDsoJXsmZXrj5kg7IKw6riw64yA7ZWZ66Gc!5e0!3m2!1sko!2skr!4v1637976559104!5m2!1sko!2skr"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            -->
          </div>
          <div class="join_box__add">
            <input type="text" name="M_address1" id="M_address1" placeholder="집주소">
            <input type="text" name="M_address2" id="M_address2" placeholder="상세주소">
            <div id="join_add_ch">
              <button type="submit" onclick="checkadd()">Check</button>
            </div>
          </div>
        </div>

      </div>
      <button class="join_btn"type="submit">회원가입</button>
    </form>

  </section>
  <script src="js/join.js"></script>
</body>
</html>
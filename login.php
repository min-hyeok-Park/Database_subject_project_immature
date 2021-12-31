<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yang&Parks login</title>
    <link href="/components/login.css" rel="stylesheet">
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

  <!--login start-->
  <div id="login">

    <!-- title start-->
    <section class="login__title">
      <h1><span>Hello! </span>Yang & Parks</h1>
    </section>
    <!-- title end-->

    <!-- login form start-->
    <section class="login__form">
        <!--<form action="#" method="post">-->
        <form name="singIn" action="./signIn.php" method="post" onsubmit="return checkSubmit()">

          <div class="login__area">
            <input type="text" name="U_id" id="U_id"
            autocomplete="address-level1" required>
            
          </div>

          <div class="login__area">
            <input type="password" name="U_pass" id="U_pass" autocomplete="off" required>
            
          </div>

          <div class="login__btn">
            <button id = "U_btn"type="submit" onclick="cheackValue()">로그인</button>
          </div>

        </form>
    </section>

    <div class="login__add">
      <a href="/join.php">
        <span class="login__bold">Yang & Parks</span> 의 <span class="login__bold">Member</span>가 되어 혜택을 누리세요!
    </a>
      <!--아이디 비번찾기 추가할 거면 하기-->
      <p>아이디/비밀번호를 잊으셨나요?</p>
    </div>
    <!-- login form end-->
  </div>
<script src="/js/login.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yang & Parks Admin Page</title>
  <link href="/components/basic.css" rel="stylesheet">
  <link href="/components/header.css" rel="stylesheet">
  <link href="/components/adminmain.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
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

  <section class="main" id="main">
    <div class="admin" id="admin-member">
      <a href="/admin/adminMember.php" class="animate__flash">회원 조회</a>
    </div>
    <div class="admin" id="admin-worker">
      <a href="/admin/adminWorker.php">직원 가입</a>
    </div>
    <div class="admin"  class="admin-statistics">
      <a href="/admin/adminStatic.php">통계 확인</a>
    </div>
  </section>
</body>
</html>
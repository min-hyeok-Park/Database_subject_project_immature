<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete</title>
    <link href="/components/basic.css" rel="stylesheet">
    <link href="/components/delete.css" rel="stylesheet">
</head>
<body>
  <section id="mem-delete" class="mem-delete">
    <div class="mem-delete-title">회원 탈퇴</div>

    <div class="mem-delete-check">
      <span class="mem-delete-check-title">비밀번호를 입력해주세요</span>
      <input type="password" class="mem-delete-check-pass">
    </div>

    <div class="mem-delete-check">
      <form action="Edelete.php" method="post">
        <input type="text" placeholder="ID를 입력해주세요">
        <div class="mem-delete-check-pan">
          <p>Yang & Parks Coffee는 회원제로 운영되는 커피숍으로 탈퇴 후 정상적인 주문이 어려울 수 있습니다.</p>
          <p>그럼에도 삭제하시겠습니까?</p>
          <div class="pancheck">
          <a href="indexLogin.php"> 돌아가기</a>
          </div>
          <!-- <button type="button" id="mem-delete-check-btn">회원탈퇴</button> -->
          <button type="subit"> 회원탈퇴</button>
      </form>
    </div>
    </div>
  </section>
</body>
</html>
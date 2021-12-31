<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="/components/header.css" rel="stylesheet">
  <link href="/components/basic.css" rel="stylesheet">
  <link href="/components/adminStatic.css" rel="stylesheet">
</head>
<body>
    <header class="header">
    
      <a href="#" class="logo">
        <span id="logo-font">Yang & Parks</span>
      </a>
    
      <div class="action">
        <a href="/indexLogin.php" alt="#">메인페이지로 돌아가기</a>
      </div>
    </header>

    <section id ="static" class="static">
      <div class="static-container">
        <div class="static-title">일일결산</div>
        <div class="static-content">

          <div class="static-info">
            <span>날짜</span>
            <span>총 주문 수</span>
            <span>총액</span>
          </div>
          
          <!--day-time start-->
          <div class="static-container-box-content">
          <?php
                $conn = mysqli_connect(
                  'localhost',
                  'root',
                  '111111',
                  'coffee'
                );
                $sql = "SELECT DATE(`O_date`) AS `Date`, COUNT(MemId) AS '총 주문 수', SUM(O_price) AS Total FROM orders GROUP BY `date`";
          
                $result = mysqli_query($conn, $sql);
                if ($result) {
                  while ($row = mysqli_fetch_row($result)) {
                    //static-day-time은
                    echo "<div class="static-day-time"> <span>. $row[0] . "</span><span>" . $row[1] . "</span><span>" . $row[2] . "</span>"</div>;  
                  }
                }
          ?>
          </div>
          <!--day time end-->
        </div>
      </div>
      <div class="static-containerM">
        <div class="static-container-box">
          <div class="static-container-box-title">
            <span>총 결산</span>
          </div>

          <div class="static-container-box-content">
          <?php
                $conn = mysqli_connect(
                  'localhost',
                  'root',
                  '111111',
                  'coffee'
                );
                $sqlAll = "SELECT COUNT(MemId) AS '총 주문 수', SUM(O_price) AS Total_sales FROM orders";
          
                $resultAll = mysqli_query($conn, $sqlAll);
                if ($resultAll) {
                  while ($rowAll = mysqli_fetch_row($resultAll)) {
                    echo "<div class="content-total-time"><p class="total-price">".$rowAll[1]."</p><span class="total-count">".$rowAll[0]."</span></div>"
                  }
                }
            ?>
          </div>
            <div class="static-container-box">
              <div class="static-container-box-title">
                <span>월별결산</span>
                <div class="static-info">
                  <span>월</span>
                  <span>월 주문 수</span>
                  <span>총액</span>
                </div>
            
                <div class="static-container-box-content">
                  <?php
                      $conn = mysqli_connect(
                      'localhost',
                      'root',
                        '111111',
                        'coffee'
                          );
                        $sqlMonth = "SELECT MONTH(`O_date`) AS `Date`, COUNT(MemId) AS '총 주문 수',
                          sum(`O_price`) AS Total
                              FROM orders GROUP BY `date`";
                                    
                          $resultMonth = mysqli_query($conn, $sqlMonth);
                          if ($resultMonth) {
                                  while ($rowMonth = mysqli_fetch_row($resultMonth)) {
                                      echo "<div class="static-day-time"><span>. $rowMonth[0] . "</span><span>" . $rowMonth[1] . "</span><span>" . $rowMonth[2] . "</span>"</div>;
                                }
                              }
                        ?>
                </div>
            
            
              </div>
            </div>
            </div>
        </div>
        
    </section>



    <div class="static-ex"><span>2021:08:06</span> <span> 45</span> <span> 8000000 </span></div>
    <div class="static-day-time"> <span>. $row[0] . "</span><span>" . $row[1] . "</span><span>" . $row[2] . "</span>" </div>
    <!--이거는 아래 css작업해놓은것 DB가없어서 값이 정확히 어떻게 뜨는지 알 수 가없음 -->
    <!-- ex처럼 echo 뒤에 div에서 잘나오면 문제없는 것 -->
    <!-- static-ex랑 static-day-time이랑 다르게 생겼으면 의도한대로 안나온거니 나한테 말해주셈-->

    <div class="exstatic-day-time">
      <p> 총결산 예</p>
      <p class="total-price">6000000</p><span class="total-count">400</span>
    </div>

</body>
</html>
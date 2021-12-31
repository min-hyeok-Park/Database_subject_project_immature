<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yang & Parks Join</title>
  <link href="/components/cart.css" rel="stylesheet">
  <link href="/components/header.css" rel="stylesheet">
  <link href="/components/basic.css" rel="stylesheet">
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
  
  <section class="coffee-container">
    <div class="coffee-box">

      <div class="coffee-item">
        <img class="coffee-item-image" src="/images/hot-latte.jpg"><p></p>
        <span class="coffee-item-title">커피라떼(HOT)</span>
        <div class="coffee-item-details">
          <span class="coffee-item-price">4000</span>
          <button class="btn btn-primary shop-item-button" type="button">추가</button>
        </div>
      </div>

      <div class="coffee-item">
        <img class="coffee-item-image" src="/images/americano.jpg"><p></p>
        <span class="coffee-item-title">아메리카노(HOT)</span>
        <div class="coffee-item-details">
          <span class="coffee-item-price">3000</span>
          <button class="btn btn-primary shop-item-button" type="button">추가</button>
          
        </div>
      </div>

      <div class="coffee-item">
        <img class="coffee-item-image" src="/images/drop.jpg"><p></p>
        <span class="coffee-item-title">드랍커피(HOT)</span>
        <div class="coffee-item-details">
          <span class="coffee-item-price">5000</span>
          <button class="btn btn-primary shop-item-button" type="button">추가</button>
        </div>
      </div>

      <div class="coffee-item">
          <img class="coffee-item-image" src="/images/espresso.jpg"><p></p>
          <span class="coffee-item-title">에스프레소(HOT)</span>
          <div class="coffee-item-details">
            <span class="coffee-item-price">3000</span>
            <button class="btn btn-primary shop-item-button" type="button">추가</button>
          </div>
      </div>

      <div class="coffee-item">
            <img class="coffee-item-image" src="/images/ice-latte.jpg"><p></p>
            <span class="coffee-item-title">커피라떼(Ice)</span>
            <div class="coffee-item-details">
              <span class="coffee-item-price">4000</span>
              <button class="btn btn-primary shop-item-button" type="button">추가</button>
            </div>
      </div>

      <div class="coffee-item">
              <img class="coffee-item-image" src="/images/cafuchino.jpg"><p></p>
              <span class="coffee-item-title">카푸치노(HOT)</span>
              <div class="coffee-item-details">
                <span class="coffee-item-price">4000</span>
                <button class="btn btn-primary shop-item-button" type="button">추가</button>
              </div>
      </div>
    </div>
  </section>
  <form action="/purchase.php" method="post">
    <section class="container content-section">
      <div class="cart-row">
        <span class="cart-item cart-header cart-column">커피</span>
        <!--
        <span class="cart-price cart-header cart-column">가격</span>
        <span class="cart-quantity cart-header cart-column">갯수</span>
        -->
      </div>
      <div class="cart-items">
      </div>

      <div class="cart-total">
        <strong class="cart-total-title">총가격</strong>
        <span id="cart-total-price" class="cart-total-price"></span>
      </div>
      <input type="text" name="price" id="price" placeholder="결제 금액을 확인해주세요"/>
      <button class="btn btn-primary btn-purchase" type="button">
        
      <button class="join_btn"type="submit">주문하기</button>
      </button>
    </section>
  </form>  
  <script src="/js/store.js"></script>
  
</body>

</html>
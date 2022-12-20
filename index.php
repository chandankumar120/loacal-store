<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/f4ea66db59.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/9a65bf148d.js" crossorigin="anonymous"></script>
  <script src="/ItemsRetrieve.js"></script>
  <title>Local-Store</title>
</head>
<body>
  <nav class="navbar">
    <div class="navbar-left">
      <picture>
        <img src="./logo.png" class="logo" alt="logo">
      </picture>
    </div>
    <div class="navbar-right">
      <ul>
        <li><a href="#">home</a></li>
        <li class="products"><a href="#section2">products </a>
        </li>
        <li><a href="#"><i class="fa-solid fa-map-location-dot"></i> location</a></li>
        <li><a href="#"><i class="fa-solid fa-phone"></i> contact us</a></li>
      </ul>
    </div>
    <div class="navbar-right">
      <ul>
        <li><a href="login.html">Login</a></li>
        <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
      </ul>
    </div>
  </nav>
  <div class="section1" id="section1">
  <div class="left-part">
    <h1>Free Home Delivery</h1>
    <a href="#section2"><img src="./shop-now-giphy.gif" alt="shop_now" class="button"></a>
  </div>
  <div class="right-part">

    <img src="./banner-image.jpg" alt="shop_now" class="banner-image">
  </div>
  </div>
  <div id="section2" class="section2">
    <div class="container">
      <div class="items">
        <div class="img img1"><img src="https://images.pexels.com/photos/1464625/pexels-photo-1464625.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""></div>
        <div class="name">SHOES</div>
        <div class="price">$5</div>
        <div class="info">Lorem ipsum dolor sit amet consectetur.</div>
        <input class="cart" type="button" value="Add to Cart" onclick="alert()">
      </div>
    </div>
  </div>
  <footer>
    <div class="main-footer">
    <div class="left-part">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti dolor facilis nulla animi consectetur quisquam voluptas reiciendis pariatur a blanditiis, placeat debitis in modi porro minus similique maxime error? Sequi officiis ipsam nobis culpa nulla.</div>
    <div class="center-part">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, nulla libero consectetur distinctio nemo sit! Aliquid qui beatae dicta asperiores! Minus ratione quia aperiam voluptatum ad accusantium amet quod mollitia, excepturi, molestias, beatae esse nemo?</div>
    <div class="right-part">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia impedit quos sed accusantium, tempora consectetur? Provident vel adipisci voluptate omnis? Itaque accusantium consectetur sequi a harum dolore, iste cum sed officia minima eos laborum officiis?</div>
    </div>
    <em>©️ All Rights Reserved.</em>
  </footer>
</body>
</html>
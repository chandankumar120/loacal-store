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
      <!-- <input type="text"> -->
    </div>
    <div class="navbar-right">
      <ul>
        <li><a href="#">home</a></li>
        <li class="products"><a href="#section2">products </a>
        </li>
        <li><a href="./login.html">login</a></li>
        <li><a href="#"><i class="fa-solid fa-map-location-dot"></i> location</a></li>
        <li><a href="#"><i class="fa-solid fa-phone"></i> contact us</a></li>
      </ul>
    </div>
    <div class="navbar-right">
      <ul>
        <li><a href="/login.html">Login</a></li>
        <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
      </ul>
    </div>
  </nav>
  <div class="section1" id="section1">

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

</body>

</html>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="{{ asset('Assets\style.css') }}">
  <title>InterTech Computers</title>
</head>
<body>
  <header>
    <h1>InterTech Computers</h1>
    <div class="search-bar">
      <input type="text" placeholder="Search...">
    </div>
  </header>

  <div class="product-buttons">
    <button>Today's Deals</button>
    <button>AMD Parts</button>
    <button>Intel Parts</button>
    <button>VR</button>
    <button>Storage</button>
    <button>Memory</button>
    <button>Networking</button>
    <button>PC Accessories 1</button>
    <button>Laptops</button>
    <button>Speakers</button>
    <button>Apple Products</button>
    <button><span class="NavBar" onclick="openNav()">More</span></button>
  </div>

  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="Index.html">Home</a>
    <br>
    <a href="#">Account</a>
    <br>
    <a href="#">Categories</a>
    <br>
    <a href="#">Contact Us</a>
  </div>

  <div class="container">
    <div class="animate fadeInBottom">
      <div class="top-left">The best place for</div>
      <div class="left-centre">your computing needs</div>
    </div>
    <img src="{{ asset('/images/desktop1.jpg') }}" alt="" width="100%">
  </div>
  <div id="main"></div>
  <div class="cards-container">
    <div class="card">
      <div class="card-content">
        <img class="card-image" src="{{ asset('/images/keeb2.png') }}" alt="Product 1">
        <h3 class="card-title">Keyboards</h3>
      </div>
    </div>
    <div class="card">
      <div class="card-content">
        <img class="card-image" src="{{ asset('/images/vr1.png') }}" alt="Product 2">
        <h3 class="card-title">VR Headset</h3>
      </div>
    </div>
    <div class="card">
      <div class="card-content">
        <img class="card-image" src="{{ asset('/images/headph.png') }}" alt="Product 3">
        <h3 class="card-title">Headphones</h3>
      </div>
    </div>
    <div class="card">
      <div class="card-content">
        <img class="card-image" src="{{ asset('/images/mouse.png') }}" alt="Product 4">
        <h3 class="card-title">Gaming Mouse</h3>
      </div>
    </div>
  </div>

  <div class="deals-section">
    <h1>TODAY'S BEST DEALS</h1>
    <br>
    <div class="deals-container">
      <div class="deal-card">
        <div class="deal-card-content">
          <img class="deal-card-image1" src="{{ asset('/images/Lenovo.png') }}" alt="Deal 1">
          <h3 class="deal-card-title">Lenovo ThinkPad with Intel i5</h3>
          <p class="deal-card-price">$449.99</p>
        </div>
        <br>
      </div>
      <div class="deal-card">
        <div class="deal-card-content">
          <img class="deal-card-image" src="{{ asset('/images/hdd.png') }}" alt="Deal 2">
          <h3 class="deal-card-title">Seagate Barracuda 5TB</h3>
          <p class="deal-card-price">$79.99</p>
        </div>
        <br>
      </div>
      <div class="deal-card">
        <div class="deal-card-content">
          <img class="deal-card-image2" src="{{ asset('/images/.png') }}" alt="Deal 3">
          <h3 class="deal-card-title">Samsung Evo 860</h3>
          <p class="deal-card-price">$69.99</p>
        </div>
      </div>
    </div>
  </div>
</div>
  <footer>
    &copy; 2023 InterTech - PC Parts Shop. All rights reserved.
  </footer>
</body>

<script src="{{ asset('Assets\script.js') }}"></script>

</html>

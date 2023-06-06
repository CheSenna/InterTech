<x-master>
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
          <img class="deal-card-image2" src="{{ asset('/images/860.png') }}" alt="Deal 3">
          <h3 class="deal-card-title">Samsung Evo 860</h3>
          <p class="deal-card-price">$69.99</p>
        </div>
      </div>
    </div>
  </div>


</x-master>
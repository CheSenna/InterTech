<x-master>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])

<!-- Styles -->
@livewireStyles

<div class="container">
  <div class="animate fadeInBottom">
    <div class="top-left">The best place for</div>
    <div class="left-centre">your computing needs</div>
  </div>
  <img src="{{ asset('/images/desktop1.jpg') }}" alt="" width="100%">
</div>

<!-- <div id="main">
  <div id="popular content-center">
    <h1 class="text-center font-bold text-3xl">POPULAR CATEGORIES</h1>
  </div>
<div class="cards-container">
  <div class="card">
    <div class="card-content">
      <img class="object-contain" src="{{ asset('/images/keeb2.png') }}" alt="Product 1">
      <h3 class="card-title text-center">Keyboards</h3>
    </div>
  </div>
  <div class="card">
    <div class="content-center">
      <img class="card-image" src="{{ asset('/images/vr1.png') }}" alt="Product 2">
      <h3 class="card-title text-center">VR Headset</h3>
    </div>
  </div>
  <div class="card">
    <div class="content-center">
      <img class="card-image " src="{{ asset('/images/headph.png') }}" alt="Product 3">
      <h3 class="card-title text-center">Headphones</h3>
    </div>
  </div>
  <div class="card">
    <div class="content-center">
      <img class="card-image" src="{{ asset('/images/mouse.png') }}" alt="Product 4">
      <h3 class="card-title text-center">Gaming Mouse</h3>
    </div>
  </div>
</div> -->

<div class="deals-section">
  <h1 class="text-center font-bold text-3xl">POPULAR CATEGORIES</h1>
  <br>
  <div class="cards-container">
  <div class="card">
    <div class="card-content">
      <img class="object-contain" src="{{ asset('/images/keeb2.png') }}" alt="Product 1">
      <h3 class="card-title text-center">Keyboards</h3>
    </div>
  </div>
  <div class="card">
    <div class="content-center">
      <img class="card-image" src="{{ asset('/images/vr1.png') }}" alt="Product 2">
      <h3 class="card-title text-center">VR Headset</h3>
    </div>
  </div>
  <div class="card">
    <div class="content-center">
      <img class="card-image " src="{{ asset('/images/headph.png') }}" alt="Product 3">
      <h3 class="card-title text-center">Headphones</h3>
    </div>
  </div>
  <div class="card">
    <div class="content-center">
      <img class="card-image" src="{{ asset('/images/mouse.png') }}" alt="Product 4">
      <h3 class="card-title text-center">Gaming Mouse</h3>
    </div>
  </div>
</div>
</div>

<div class="deals-section">
  <h1 class="text-center font-bold text-3xl">TODAY'S BEST DEALS</h1>
  <br>
  <div class="deals-container flex items-stretch">
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
        <img class="items-center" src="{{ asset('/images/860.png') }}" alt="Deal 3">
        <h3 class="deal-card-title">Samsung Evo 860</h3>
        <p class="deal-card-price">$69.99</p>
      </div>
    </div>
  </div>
</div>
</div>
</x-master>

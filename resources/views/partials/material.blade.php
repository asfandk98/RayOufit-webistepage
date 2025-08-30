  <style>
    body {
      font-family: 'Montserrat', sans-serif;
    }
    .aluminium-section h2 {
      font-size: 30px;
      font-weight: 500;
    }
    .aluminium-section p {
      font-size: 16px;
      font-weight: 400;
      color: #8C8C8C;
    }
    .aluminium-card h4 {
      font-size: 24px;
      font-weight: 400;
      text-transform: uppercase;
      margin-top: 15px;
    }
    .aluminium-card img {
      width: 100%;
      height: 337px;       /* matches your spec */
      object-fit: cover;
    }
    .aluminium-card {
  opacity: 0;
  transform: translateY(50px);
  transition: all 0.8s ease-in-out;
}

.aluminium-card.show {
  opacity: 1;
  transform: translateY(0);
}
  </style>
</head>
<body>

<section class="aluminium-section container py-5 text-center">
  <!-- Heading -->
  <h2 class="mb-2">OUR ALUMINIUM SYSTEMS</h2>
  <p class="mb-5">Expert craftsmanship in aluminium systems, offering fit your unique space.</p>

  <!-- First row -->
  <div class="row mb-4">
    <div class="col-md-4 aluminium-card">
      <img src="{{ asset('images/door.jpg') }}" alt="Doors" class="img-fluid">
      <h4>Doors</h4>
    </div>
    <div class="col-md-4 aluminium-card">
      <img src="{{ asset('images/window.png') }}" alt="Windows" class="img-fluid">
      <h4>Windows</h4>
    </div>
    <div class="col-md-4 aluminium-card">
      <img src="{{ asset('images/partition.png') }}" alt="Partitions" class="img-fluid">
      <h4>Partitions</h4>
    </div>
  </div>

  <!-- Second row -->
  <div class="row">
    <div class="col-md-4 aluminium-card">
      <img src="{{ asset('images/pergola.png') }}" alt="Pergolas" class="img-fluid">
      <h4>Pergolas</h4>
    </div>
    <div class="col-md-4 aluminium-card">
      <img src="{{ asset('images/bullet.png') }}" alt="Bullet Resistant Windows" class="img-fluid">
      <h4>Bullet Resistant Windows</h4>
    </div>
    <div class="col-md-4 aluminium-card">
      <img src="{{ asset('images/curtains.png') }}" alt="Curtain Walls & Facades" class="img-fluid">
      <h4>Curtain Walls & Facades</h4>
    </div>
  </div>
</section>


<script>
  document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll(".aluminium-card");

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("show");
          observer.unobserve(entry.target); // animate only once
        }
      });
    }, { threshold: 0.2 });

    cards.forEach(card => {
      observer.observe(card);
    });
  });
</script>
<style>
    .section-card {
      position: relative;
      overflow: hidden;
      height: 574px;  /* matches your design */
    }
    .section-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .section-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      font-family: 'Montserrat', sans-serif;
      font-weight: 500;
      font-size: 22px;
      text-transform: uppercase;
      text-align: center;
      letter-spacing: 0;
    }
     /* Overlay effect */
  .section-card::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.2);
    opacity: 0;
    transition: opacity 0.5s ease;
    z-index: 1;
  }

  /* Hover effects */
  .section-card:hover img {
    transform: scale(1.1);
  }

  .section-card:hover::after {
    opacity: 1;
  }

  .section-card:hover .section-text {
    transform: translate(-50%, -50%) scale(1.1);
    opacity: 1;
  }
  </style>


<section class="aluminium-section container py-5 text-center">
  <div class="row g-4">
    <!-- Card 1 -->
    <div class="col-md-4">
      <div class="section-card">
        <img src="{{ asset('images/profile.png') }}" alt="Modern Profiles">
        <div class="section-text">Modern Profiles</div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-4">
      <div class="section-card">
        <img src="{{ asset('images/integration.jpg') }}" alt="Integration">
        <div class="section-text">Integration</div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-4">
      <div class="section-card">
        <img src="{{ asset('images/modularity.jpg') }}" alt="Modularity">
        <div class="section-text">Modularity</div>
      </div>
    </div>
  </div>
</section>

<style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Montserrat', sans-serif;
    }

    .materials-section {
      padding: 60px 0;
    }

    .materials-subtitle {
      font-weight: 500;
      font-size: 18px;
      text-transform: uppercase;
      line-height: 126%;
      margin-bottom: 20px;
      color: #777;
    }

    .materials-description {
      font-weight: 400;
      font-size: 20px;
      line-height: 126%;
      margin-bottom: 40px;
      color: #000;
    }

    .materials-description strong {
      font-weight: 600;
    }

    .view-btn {
      display: inline-block;
      border: 1px solid #000;
      color: #000;
      font-weight: 600;
      font-size: 18px;
      padding: 10px 20px;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .view-btn:hover {
      background: #000;
      color: #fff;
    }

    .materials-image {
      width: 100%;
      height: auto;
      object-fit: cover;
    }
  </style>

 <section class="materials-section">
    <div class="container">
      <div class="row align-items-center">
        
        <!-- Left Content -->
        <div class="col-lg-5">
          <p class="materials-subtitle">Materials</p>
          <p class="materials-description">
            Unlike plastics, <strong>aluminum is 100% recyclable</strong>. Moreover, approximately <strong>70% of it produced is still in use.</strong>
          </p>
          <a href="#" class="view-btn">VIEW PROJECTS →</a>
        </div>

        <!-- Right Image -->
        <div class="col-lg-7">
          <img src="{{ asset('images/materialss.png') }}" alt="Materials" class="materials-image img-fluid">
        </div>

      </div>
    </div>
  </section>
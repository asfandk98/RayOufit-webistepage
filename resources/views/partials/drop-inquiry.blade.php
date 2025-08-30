<style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
    }
    .hero-section-1 {
      position: relative;
      height: 880px; /* match figma */
      background: url({{ asset('images/drop-inquiry-img.jpg') }}) no-repeat center center/cover;
      color: #fff;
      display: flex;
      align-items: center;
      padding: 0 60px;
    }
    .hero-content {
      max-width: 721px;
    }
    .hero-subtitle {
      font-family: 'Montserrat', sans-serif;
      font-weight: 400;
      font-size: 18px;
      text-transform: uppercase;
      line-height: 126%;
      margin-bottom: 15px;
    }
    .hero-title {
      font-family: 'Montserrat', sans-serif;
      font-weight: 600;
      font-size: 32px;
      text-transform: uppercase;
      line-height: 126%;
      margin: 0;
    }
    .inquiry-btn {
      border: 1px solid #fff;
      color: #fff;
      font-family: 'Montserrat', sans-serif;
      font-weight: 600;
      font-size: 20px;
      padding: 23px 33px;
      text-transform: uppercase;
      text-decoration: none;
      transition: all 0.3s ease;
    }
    .inquiry-btn:hover {
      background: #fff;
      color: #000;
    }
  </style>
<section class="hero-section-1 d-flex justify-content-between align-items-center">
    <div class="hero-content">
      <p class="hero-subtitle">Seamless Integration</p>
      <h1 class="hero-title">Bespoke Systems,<br>Custom Made For Your Space</h1>
    </div>
    <a href="#" class="inquiry-btn">Drop An Inquiry →</a>
  </section>
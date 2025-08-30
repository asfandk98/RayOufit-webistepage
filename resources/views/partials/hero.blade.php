
  
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #fff;
    }
    /* Navbar */
    .navbar {
      padding: 1rem 2rem;
    }
    .navbar-brand {
      font-weight: 600;
      font-size: 20px;
    }
    /* Hero section */
    .hero-section {
      position: relative;
      background: url('images/hero.jpg') center/cover no-repeat;
      color: #fff;
      padding: 855px 50px 100px;
    }
    .breadcrumb-custom {
      font-size: 16px;
      font-weight: 400;
      text-transform: uppercase;
      margin-bottom: 10px;
    }
    .hero-title {
      font-size: 50px;
      font-weight: 500;
      text-transform: uppercase;
      margin-bottom: 10px;
    }
    .hero-subtitle {
      font-size: 20px;
      font-weight: 500;
      margin-bottom: 30px;
    }
    /* Content block */
    .content-section {
      
      color: #333;
      padding: 40px 50px;
      font-size: 16px;
      line-height: 1.5;
      text-align: justify;
    }
    /* Animation for navbar hide/show */
.navbar {
  transition: transform 0.4s ease, opacity 0.4s ease;
}

.navbar-hide {
  transform: translateY(-100%);
  opacity: 0;
}
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Rayfitout</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarNav" aria-controls="navbarNav" 
            aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="#">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Systems</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero-section">
  <div class="breadcrumb-custom">Services / Aluminum Systems</div>
  <h1 class="hero-title">Aluminum Systems</h1>
  <h4 class="hero-subtitle">Contemporary Systems, Seamless Integration</h4>
</section>

<!-- Content -->
<section class="content-section">
  <div class="container">
    <p>
      Our aluminum joinery collection is designed not merely as functional elements, but as architectural statements. 
      Every door, partition, and wardrobe system reflects a deliberate interplay of proportion, material, and technology—
      where nothing is exposed, yet everything is experienced. Our aluminum joinery collection is designed not merely as 
      functional elements, but as architectural statements. Every door, partition, and wardrobe system reflects a deliberate 
      interplay of proportion, material, and technology—where nothing is exposed, yet everything is experienced. Our aluminum 
      joinery collection is designed not merely as functional elements, but as architectural statements. Every door, partition, 
      and wardrobe system reflects a deliberate interplay of proportion, material, and technology—where nothing is exposed, 
      yet everything is experienced.
    </p>
  </div>
</section>


<script>
  let lastScrollTop = 0;
  const navbar = document.querySelector(".navbar");

  window.addEventListener("scroll", function () {
    let currentScroll = window.scrollY;

    if (currentScroll > lastScrollTop) {
      // Scrolling Down -> Hide navbar
      navbar.classList.add("navbar-hide");
    } else {
      // Scrolling Up -> Show navbar
      navbar.classList.remove("navbar-hide");
    }

    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Avoid negative scroll
  });
</script>













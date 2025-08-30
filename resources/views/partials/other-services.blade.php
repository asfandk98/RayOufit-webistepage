<section class="py-4 bg-white">
  <div class="container px-0" style="max-width:1372px;">
    <!-- Title -->
    <h2 class="text-left text-uppercase fw-medium mb-4"
        style="font-family:'Mont',sans-serif; font-size:30px; line-height:1.26;">
      OTHER SERVICES
    </h2>

    <!-- Grid (3 columns, 23px gap) -->
    <div class="row g-0 justify-content-between" style="--bs-gutter-x:23px;">
      
      @foreach ([
        ['img' => 'images/interior-outfit.jpg', 'label' => 'INTERIOR FIT OUT'],
        ['img' => 'images/interior-outfit.jpg', 'label' => 'INTERIOR DESIGN'],
        ['img' => 'images/arcitecture-design.jpg', 'label' => 'ARCHITECTURE DESIGN'],
      ] as $service)
        <div class="col-12 col-md-4 d-flex justify-content-center">
          <div class="service-card position-relative overflow-hidden" 
               style="width:429px; height:429px; cursor:pointer;">

            <!-- Image -->
            <img src="{{ asset($service['img']) }}" alt="{{ $service['label'] }}"
                 class="img-fluid w-100 h-100 service-img" style="object-fit:cover; transition: transform 0.5s ease;">

            <!-- Overlay -->
            <div class="overlay position-absolute top-0 start-0 w-100 h-100"
                 style="background: rgba(0,0,0,.40); transition: background 0.5s ease;"></div>

            <!-- Centered Text -->
            <div class="position-absolute top-50 start-50 translate-middle text-white text-uppercase text-center"
                 style="font-family:'Mont',sans-serif; font-weight:500; font-size:24px; line-height:1;">
              {{ $service['label'] }}
            </div>
          </div>
        </div>
      @endforeach

    </div>
  </div>
</section>

<!-- Custom CSS -->
<style>
  .service-card:hover .service-img {
    transform: scale(1.1);
  }
  .service-card:hover .overlay {
    background: rgba(0,0,0,0.6);
  }
</style>

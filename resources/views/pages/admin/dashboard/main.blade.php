<x-app-layout title="Dashboard">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" style="height: 65vh;">
                    <img src="{{ asset('img/slide1.png') }}" class="d-block w-100" alt="..." style="height: 65vh;">
                  </div>
                  <div class="carousel-item" style="height: 65vh;">
                    <img src="{{ asset('img/slide2.jpg') }}" class="d-block w-100" alt="..." style="height: 65vh;">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="text-white">Lokerku</h1>
                        <p class="fs-1"style="font-family: Brush Script MT">Best preparation for tomorrow is doing your best today</p> 
                    </div>
                  </div>
                  <div class="carousel-item" style="height: 65vh;">
                    <img src="{{ asset('img/slide3.jpg') }}" class="d-block w-100" alt="..." style="height: 65vh;">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="text-white">Lokerku</h1>
                        <p class="fs-1" style="font-family: Brush Script MT">Best preparation for tomorrow is doing your best today</p> 
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div>
</x-app-layout>
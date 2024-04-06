@extends('layout.app')



@section('contents')
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/portfolio-header.jpg');">
  <div class="container position-relative d-flex flex-column align-items-center">

    <h2>Portfolio</h2>
    <ol>
      <li><a href="index.html">Home</a></li>
      <li>Portfolio</li>
    </ol>

  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">

    <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">


      <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="300">



      @foreach($cars as $car)
      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
    <img src="{{ asset('storage/carscontainer/' . $car->image) }}" class="img-fluid" alt="" style="height: 250px; width: auto;">          <div class="portfolio-info">
            <h4>{{ $car->model_name }}</h4>
            <p>Take the wheel and drive your dreams.</p>
            <a href="{{asset('storage/carscontainer/' . $car->image)}}"  data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="{{route('cardetail', ['id' => $car->inventory_id])}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div><!-- End Portfolio Item -->

      @endforeach
        

      </div><!-- End Portfolio Container -->

    </div>

  </div>
</section><!-- End Portfolio Section -->

</main><!-- End #main -->



@endsection
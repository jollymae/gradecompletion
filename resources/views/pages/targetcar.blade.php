@extends('layout.app')

@section('contents')

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/portfolio-header.jpg');">
  <div class="container position-relative d-flex flex-column align-items-center">
    <h2>Portfolio Details</h2>
    <ol>
      <li><a href="index.html">Home</a></li>
      <li>Portfolio Details</li>
    </ol>

  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
  <div class="container" data-aos="fade-up">

    <div class="row gy-4">

      <div class="col-lg-8">
        <div class="slides-1 portfolio-details-slider swiper">
          <div class="swiper-wrapper align-items-center">

            <div class="swiper-slide">
              <img src="{{asset('storage/carscontainer/' . $car->image)}}" alt="">
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-info">
          <h3>Project information</h3>
          <ul>
          <div class="summary-list">
                <ul class="list">

                  <li class="d-flex justify-content-between">
                    <strong>VIN:</strong>
                    <strong>{{$car->vin}}</strong>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Vehicle:</strong>
                    <strong>{{$car->model_name}}</strong>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Brand:</strong>
                    <strong>{{$car->brand_name}}</strong>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Model:</strong>
                    <strong>{{$car->model_name}} </strong>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Color:</strong>
                    <strong>{{$car->color}} </strong>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Engine:</strong>
                    <strong>{{$car->engine}} </strong>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Transmission:</strong>
                    <strong>{{$car->transmission}}</strong>
                  </li>
                </ul>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

</main><!-- End #main -->


@endsection
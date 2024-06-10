
@extends('layouts.app')
    @section('content')
      <section id="banner" style="background: #F9F3EC;">
        <div class="container">
          <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="1000">
                <div class="swiper-slide py-5">
                  <div class="row banner-content align-items-center">
                    <div class="img-wrapper col-md-5">
                      <img src={{asset('storage/images/banner-img.png')}} class="img-fluid" style="min-height: 658.8px">
                    </div>
                    <div class="content-wrapper col-md-7 p-5 mb-5">
                      <div class="secondary-font text-primary text-uppercase mb-4">Save 10 - 20 % off</div>
                      <h2 class="banner-title display-1 fw-normal">Best destination for <span class="text-primary">your
                          pets</span>
                      </h2>
                      <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                        shop now
                        <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                          <use xlink:href="#arrow-right"></use>
                        </svg></a>
                    </div>
          
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="swiper-slide py-5">
                  <div class="row banner-content align-items-center">
                    <div class="img-wrapper col-md-5">
                      <img src={{asset('storage/images/banner-img2.png')}} class="img-fluid" style="min-height: 658.8px">
                    </div>
                    <div class="content-wrapper col-md-7 p-5 mb-5">
                      <div class="secondary-font text-primary text-uppercase mb-4">Save 10 - 20 % off</div>
                      <h2 class="banner-title display-1 fw-normal">Best destination for <span class="text-primary">your
                          pets</span>
                      </h2>
                      <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                        shop now
                        <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                          <use xlink:href="#arrow-right"></use>
                        </svg></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="swiper-slide py-5">
                  <div class="row banner-content align-items-center">
                    <div class="img-wrapper col-md-5">
                      <img src={{asset('storage/images/banner-img3.png')}} class="img-fluid" style="min-height: 658.8px">
                    </div>
                    <div class="content-wrapper col-md-7 p-5 mb-5">
                      <div class="secondary-font text-primary text-uppercase mb-4">Save 10 - 20 % off</div>
                      <h2 class="banner-title display-1 fw-normal">Best destination for <span class="text-primary">your
                          pets</span>
                      </h2>
                      <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                        shop now
                        <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                          <use xlink:href="#arrow-right"></use>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      @include('components/categories/app')
      @include('components/clothings/app')
      @include('components/foodies/app')
      @include('components/salling/app')
      
    @endsection
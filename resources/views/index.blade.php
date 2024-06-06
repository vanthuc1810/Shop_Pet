
@extends('layouts.app')
    @section('content')
    <section id="banner" style="background: #F9F3EC;">
        <div class="container">
          <div class="swiper main-swiper">
            <div class="swiper-wrapper">
    
              <div class="swiper-slide py-5">
                <div class="row banner-content align-items-center">
                  <div class="img-wrapper col-md-5">
                    <img src={{asset('storage/images/banner-img.png')}} class="img-fluid">
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
              <div class="swiper-slide py-5">
                <div class="row banner-content align-items-center">
                  <div class="img-wrapper col-md-5">
                    <img src={{asset('storage/images/banner-img2.png')}} class="img-fluid">
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
              <div class="swiper-slide py-5">
                <div class="row banner-content align-items-center">
                  <div class="img-wrapper col-md-5">
                    <img src={{asset('storage/images/banner-img3.png')}} class="img-fluid">
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
    
            <div class="swiper-pagination mb-5 swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
              <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span>
              <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2" aria-current="true"></span>
              <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span>
            </div>
          </div>
        </div>
      </section>
    @endsection
</body>

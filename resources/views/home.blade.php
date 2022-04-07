@extends('layouts.app')

@section('title-block')Home @endsection

@section('content')

<!-- <img src="img/main.jpg" alt="main-img" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina=""> -->
<section class="py-0" id="home">
        <div class="bg-holder d-none d-md-block" style="background-image:url(/img/main.jpg);background-position:right bottom; height: 100%; width: 100%;">
        </div>

        <div class="container">
          <div class="row align-items-center min-vh-md-75">
            <div class="col-md-7 col-lg-6 py-6 text-sm-start text-center">
              <h1 class="mt-6 mb-sm-4 display-4 fw-semi-bold lh-sm fs-4 fs-lg-6 fs-xxl-7">Find your favorites</h1>
              <p class="mb-4 fs-1">A fan-created, fan-run, nonprofit, noncommercial archive for transformative fanworks </p>
              <div class="pt-3">
                <form>
                  <div class="input-group w-xl-75 w-xxl-50 d-flex flex-end-center">
                    <input class="form-control rounded-pill border-0 font-base" id="formGroupExampleInput" type="text" placeholder="Search books, articles, keywords"><img class="input-box-icon me-3" src="/img/search.png" width="18" alt="">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="fandoms_row ">
<div class="row mb-2">
  @include('inc.categories')
  </div>
</div>
@endsection
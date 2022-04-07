@extends('layouts.app')

@section('title-block')Works @endsection

@section('content')
<div class="container">
<div class="works">
  <div class="wrap-works">
    <div class="line" style="margin-right:60px; "><h1>Works</h1></div>
    <div class="line"><form>
      <div class="input-group w-xl-75 w-xxl-50 d-flex flex-end-center">
        <input class="form-control rounded-pill border-0 font-base" id="formGroupExampleInput" type="text" placeholder="Search books, articles, keywords"><img class="input-box-icon me-3" src="/img/search.png" width="18" alt="">
      </div>
    </form></div>
  </div>
</div> 
  <div class="row" style="margin-top:20px;">
    <div class="col-md-2" style="padding-top:30px; margin-bottom:10px; background-color:white; margin-right: 10px; text-align:center; ">
      <p><a class="link" href="{{ route('more') }}">Fandom</a>
      <p><a class="link" href="{{ route('more') }}">Fandom</a>
      <p><a class="link" href="{{ route('more') }}">Fandom</a>
      <p><a class="link" href="{{ route('more') }}">Fandom</a>
    </div>
    <div class="col" style="padding:0;background-color: transparent; " >
        @include('inc.work')
        @include('inc.work')
        @include('inc.work')
    </div>
  </div>
</div>


@endsection
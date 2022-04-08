@extends('layouts.app')

@section('title-block')Works @endsection

@section('content')
<div class="container">
  <div class="works">
 
    <div class="row" style="margin-top:20px;">
      <div class="col-md-2" style="padding-top:30px; margin-bottom:10px; background-color:white; margin-right: 10px; text-align: left; height:350px;">
        <h4 style="margin-bottom:20px;">Category</h4>
        <p><a class="link" href="{{ route('more') }}">Fandom</a>
        <p><a class="link" href="{{ route('more') }}">Fandom</a>
        <p><a class="link" href="{{ route('more') }}">Fandom</a>
        <p><a class="link" href="{{ route('more') }}">Fandom</a>
      </div>
      <div class="col" style="padding:0;background-color: transparent; " >
        <div class="line">
          <h1>Recent works</h1>
          <h6>tags:</h6> 
          <div class="mb-3"><select class="js-example-basic-multiple" name="states[]" multiple="multiple" style="width:300px;">
            <option value="AL">Alabama</option>
            <option value="WY">Wyoming</option>
            <option value="WY">Wyoming</option>

          </select></div>
          <!-- https://select2.org/getting-started/basic-usage -->
        </div>
        @include('inc.work')
        @include('inc.work')
        </div>
      </div> 
    </div>
</div>


@endsection
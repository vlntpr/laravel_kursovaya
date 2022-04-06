@extends('layouts.app')

@section('title-block')Fandoms @endsection

@section('content')
<div class="fandoms_row ">
<div class="row mb-2">
  @include('inc.categories')
  </div>
</div>
@endsection
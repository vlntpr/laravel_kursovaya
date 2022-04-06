@extends('layouts.app')

@section('title-block')Works @endsection

@section('content')
<div class="works">
    <h1>Fandom</h1>
<div class="col-md-12 ">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" id="test">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">Name</h3>
          <p class="card-text mb-auto">Description</p>
          <a href="{{ route('more') }}" class="stretched-link">Read</a>
          <div class="mb-1 text-muted">Nov 11</div>
        </div>
      </div>
    </div>
</div>
@endsection
@extends('layouts.master')
@section('title', $movie->movie_name)
@section('content')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-6">
      <div class="card border-danger shadow-lg">
        <div class="card-header bg-dark text-light">
          <h5 class="card-title mb-0">{{ $movie->movie_name }}</h5>
        </div>
        <div class="card-body">
          <p class="card-text mb-2"><strong>Description: </strong>{{ $movie->movie_description }}</p>
          <p class="card-text mb-2"><strong>Genre: </strong>{{ $movie->movie_gener }}</p>
        </div>
        <div class="card-footer text-center">
          <a href="{{ route('movies.index') }}" class="btn btn-outline-danger">Back to Index</a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
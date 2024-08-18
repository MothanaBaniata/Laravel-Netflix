@extends('layouts.master')
@section('title', $movie->movie_name)
@section('content')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-6">
      <div class="card border-danger shadow-lg">
        <div class="card-header bg-dark text-light">
          <h5 class="card-title mb-0">Update Movie</h5>
        </div>
        <div class="card-body">
          <form action="{{ route('movies.update', $movie->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="movie_name">Movie Name</label>
              <input type="text" class="form-control" id="movie_name" name="movie_name"
                value="{{ $movie->movie_name }}" required>
            </div>
            <div class="form-group">
              <label for="movie_description">Description</label>
              <textarea class="form-control" id="movie_description" name="movie_description" rows="3" required>{{ $movie->movie_description }}</textarea>
            </div>
            <div class="form-group">
              <label for="movie_gener">Movie Genre</label>
              <input type="text" class="form-control" id="movie_gener" name="movie_gener"
                value="{{ $movie->movie_gener }}" required>
            </div>
            <div class="d-flex justify-content-between mt-4">
              <a href="{{ route('movies.index') }}" class="btn btn-outline-danger">Back to Home</a>
              <button type="submit" class="btn btn-danger">Update Movie</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
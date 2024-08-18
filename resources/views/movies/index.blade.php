@extends('layouts.master')
@section('content')

<div class="container mt-5">
  <div class="row">
    @foreach ($movies as $movie)
    <div class="col-sm-12 col-md-6 col-lg-4 mb-4 opacity-75">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">{{ $movie->movie_name }}</h5>
        </div>
        <div class="card-body flex-fill">
          <p class="card-text"><strong>Description: </strong>{{ $movie->movie_description }}</p>
          <p class="card-text"><strong>Genre: </strong>{{ $movie->movie_gener }}</p>
        </div>
        <div class="card-footer">
          <div class="d-flex justify-content-between">
            <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-info btn-sm">View Details</a>
            <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-primary btn-sm">Edit</a>
            <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" class="mb-0">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

@endsection
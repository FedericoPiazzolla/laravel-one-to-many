@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
      <h2 class="text-center">Insert a new Projects</h2>

      <form class="mt-5" action="{{ route('admin.projects.store') }}" method="POST">
        @csrf 

        <div class="mb-3 has-validation">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
          
          @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="content" class="form-label">Content</label>
          <textarea class="form-control" id="content" rows="3" name="content">{{ old('content') }}</textarea>
        </div>

        <button class="btn btn-success" type="submit">Save</button>
      </form>
    </div>
@endsection
@extends('layouts.admin')

@section('content')

  <div class="container-mt-5">
    <div class="d-flex justify-content-between my-5">
      <h2 class="flex-grow-1">Edit Page</h2>
      <a class="btn btn-success" href="{{ route('admin.projects.edit', ['project' => $project->slug]) }}">Back to Originial Project</a>
    </div>
    

    <form action="{{ route('admin.projects.update', ['project' => $project->slug]) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="mb-3 has-validation">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $project->title) }}">

        @error('title')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea class="form-control" name="content" id="content" rows="3">{{ old('content', $project->content) }}</textarea>
      </div>

      <button class="btn btn-warning" type="submit">Modify</button>
    </form>
  </div>

@endsection
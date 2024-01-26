@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
      <h2>{{ $project->title }}</h2>

      <div>
        <p>{{ $project->content }}</p>

        <ul class="list-unstyled">
          <li>Data: {{ $project->created_at }}</li>
          <li>Slug: {{ $project->slug }}</li>
        </ul>

      </div>

    </div>
@endsection
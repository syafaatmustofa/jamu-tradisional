@extends('layouts.app')

@section('content')
<div class="container">
        @foreach ($data as $item)
        <div class="bg-light p-5 rounded">
            <h1>{{ $item->judul }}</h1>
            <a class="btn btn-lg btn-primary" href="{{ route('post.show', $item->id) }}" role="button">Detail</a>
          </div>

        @endforeach
    </div>
</div>

@endsection
@extends('layouts.main')
@section('container')
    <div class="container mt-4">
        <h1 class="mb-5">Post Categories</h1>

        <div class="container">
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-md-4">
                        <a href="/posts?category={{ $category->slug }}">
                            <div class="card text-bg-dark">
                                <img src="https://source.unsplash.com/1000x1000?{{ $category->name }}" class="card-img"
                                    alt="{{ $category->name }}">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">{{ $category->name }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

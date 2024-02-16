@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Posts</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ttitle</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <th>{{ $post->title }}</th>
                        <th>{{ $post->category->name }}</th>
                        <th>
                            <a href="/dashboard/posts/{{ $post->slug }}"><i class="bi bi-eye-fill"></i></a>
                            <a href="/dashboard/posts/{{ $post->slug }}/edit"><i class="bi bi-pen-fill"></i></a>
                            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="border-0" onclick="return confirm('Are you sure?')"><i
                                        class="bi bi-trash-fill"></i></button>
                            </form>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

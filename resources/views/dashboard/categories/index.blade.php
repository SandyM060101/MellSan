@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Post Categories</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-6" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-6">
        <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create New Category</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <th>{{ $category->name }}</th>
                        <th>
                            <a href="/dashboard/categories/{{ $category->slug }}"><i class="bi bi-eye-fill"></i></a>
                            <a href="/dashboard/categories/{{ $category->slug }}/edit"><i class="bi bi-pen-fill"></i></a>
                            <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="d-inline">
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

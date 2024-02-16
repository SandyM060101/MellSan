@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome, {{ auth()->user()->name }} </h1>
    </div>
    <div>
        <div class="content">
            <h1><span class="changecontent"></span></h1>
            <p>Masih Dalam Tahap Pengembangan Team</p>
        </div>
    </div>
@endsection

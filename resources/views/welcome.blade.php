@extends('layouts.front')

@section('banner')

{{-- <div class="container"> --}}
    <div class="card-header">
        <h1>Join VenomForum Community</h1>
        <p>Help and get help</p>
        <p>
            <a class="btn btn-primary btn-lg">Learn More</a>
        </p>
        {{-- </div> --}}
    </div>

@endsection
@section('heading', 'Threads')

{{-- @endsection --}}
@section('content')

    @include('thread.partials.thread-list')

@endsection

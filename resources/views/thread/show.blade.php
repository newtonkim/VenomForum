@extends('layouts.front')

@section('content')
    <h4>{{ $thread->subject }}</h4>
    <hr>

    <div class="thread-details py-2">
        {{ $thread->thread }}
    </div>

    <div class="d-inline p-2">
        <a href="{{ route('thread.edit', $thread->id) }}" class="btn btn-info">Edit</a>
        {{-- delete form --}}
        <form action="{{ route('thread.destroy', $thread->id) }}" method="POST">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" class="btn btn-danger" value="Delete">
        </form>
    </div>

@endsection

@extends('layouts.front')


@section('content')

    @include('layouts.partials.errors')

    @include('layouts.partials.success')
    <form action="{{ route('thread.update', $thread->id) }}" method="POST">
        @csrf
        {{ method_field('PUT') }}
        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" value="{{ $thread->subject }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $thread->type }}">
        </div>
        <div class="mb-3">
            <label for="thread" class="form-label">Thread</label>
            <textarea class="form-control" id="thread" name="thread">{{$thread->thread }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>


@endsection

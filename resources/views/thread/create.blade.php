@extends('layouts.front')


@section('content')

    @include('layouts.partials.errors')

    @include('layouts.partials.success')

    <form action="{{ route('thread.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" value="{{ old('subject') }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}">
        </div>
        <div class="mb-3">
            <label for="thread" class="form-label">Thread</label>
            <textarea class="form-control" id="thread" name="thread" value="{{ old('thread') }}">
                        </textarea>


        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection

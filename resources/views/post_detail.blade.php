@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->content }}</p>
                    <p class="card-text"><small class="text-muted">By {{ $post->author }}</small></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h3>Comments</h3>
            <hr>
            <div class="mb-3">
                @if (Auth::check())
                <form method="post" action="{{ route('comments.store') }}">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <div class="form-group">
                        <textarea class="form-control" name="body" rows="3" placeholder="Leave a comment..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                @else
                <a href="{{ route('login') }}" class="btn btn-primary">Login to leave a comment</a>
                @endif
            </div>

            <div class="comments-list">
                @foreach($comments as $comment)
                <div class="card mb-3">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">By {{ $comment->user->name }}</h6>
                        <p class="card-text">{{ $comment->content }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

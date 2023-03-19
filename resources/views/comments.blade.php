@if(count($comments) > 0)
    <div class="comments-section">
        <h4>Comments</h4>
        @foreach($comments as $comment)
            <div class="comment">
                <div class="comment-meta">
                    <strong>{{ $comment->user->name }}</strong>
                    <span class="comment-date">{{ $comment->created_at->diffForHumans() }}</span>
                </div>
                <div class="comment-content">
                    {!! $comment->content !!}
                </div>
                @if(count($comment->replies) > 0)
                    <div class="replies">
                        @foreach($comment->replies as $reply)
                            <div class="comment reply">
                                <div class="comment-meta">
                                    <strong>{{ $reply->user->name }}</strong>
                                    <span class="comment-date">{{ $reply->created_at->diffForHumans() }}</span>
                                </div>
                                <div class="comment-content">
                                    {!! $reply->content !!}
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                @auth
                    <a class="reply-btn" href="#comment-{{ $comment->id }}">Reply</a>
                @endauth
            </div>
        @endforeach
    </div>
@endif

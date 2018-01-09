@extends ('layouts.master')

@section ('content')
    <div class="col-sm-8">
        <h2 class="blog-post-title">{{ $post->title }}</h2>
        <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString()}}
            <!-- by<a href="#">Chris</a></p> -->

        <p>{{ $post->body }}</p>

        <hr />

        <div class="comments">
            <ul class="list-group">
                @foreach ($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>
                            {{$comment->created_at->diffForHumans()}}:&nbsp;
                        </strong>

                        {{$comment->body}}
                    </li>

                @endforeach
            </ul>

        </div>
    </div>

@endsection

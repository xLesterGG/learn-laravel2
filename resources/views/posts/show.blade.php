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

        <hr/>

        <div class="card">
            <div class="card-block">
                <form action="/posts/{{$post->id}}/comments" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <textarea name="body" class="form-control" placeholder="Your comment here" required></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add comment</button>
                    </div>

                </form>
            </div>
        </div>

        @include ('layouts.errors')
    </div>

@endsection

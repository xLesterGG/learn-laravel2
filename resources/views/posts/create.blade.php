@extends ('layouts.master')

@section('content')
    <div class="col-sm-8">
        <h1>Publish a post</h1>
        <hr />

        <form method="POST" action="/posts">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Body</label>
                <textarea id="body" class="form-control" name="body"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Publish</button>
        </form>
    </div>



@endsection

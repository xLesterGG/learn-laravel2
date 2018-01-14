@extends ('layouts.master')

@section ('content')
    <div class="col-md-8">
        <h1>Sign In</h1>


        <form action="/login" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" >
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>

            @include('layouts.errors')

        </form>
    </div>
@endsection

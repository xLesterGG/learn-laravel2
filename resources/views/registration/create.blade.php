@extends('layouts.master')


@section('content')

    <div class="col-sm-8">
        <h1>Register</h1>

        <form action="/register" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" required>
            </div>


            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="text" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Password Confirmation</label>
                <input class="form-control" type="password" name="password_confirmation" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

            @include ('layouts.errors')


        </form>
    </div>

@endsection

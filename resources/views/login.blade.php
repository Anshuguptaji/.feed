@extends('layout.auth', ['title' => 'Feed — Login'])
@section('login')
    <div class="container mx-5">
        <div class="row">
            <div class="col-md-2">
                {{-- blank --}}
            </div>
            <div class="col-md-7">
                <form action="{{url('/postLogin')}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
                    </div>
                    <div class="form-group mt-4">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                    </div>
                    <button type="submit" class="btn mt-3 btn-primary btn-sm btn-login">Login</button>
                  </form>
            </div>
        </div>
    </div>
@endsection
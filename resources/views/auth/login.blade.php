@extends('layouts.app')

@section('title')
    Login
    @parent
@stop

@section('content')
<div style="height:30px;"></div>

<div class="container">
    <div class="row">
        <form action="/login" method="post" class="col s12 m8 offset-m2 gc_form z-depth-5">
            {{ csrf_field() }}
            
            <div class="row">
                <div class="col s12" align="center">
                    <h1>Login</h1>
                </div>
                <div class="col s12">
                    @include('partials.errors')
                </div>
                <div class="input-field col s12">
                    <input type="email" name="email" placeholder=" " class="validate">
                    <label>Email</label>
                </div>
                <div class="input-field col s12">
                    <input type="password" name="password" placeholder=" " class="validate">
                    <label>Password</label>
                </div>
                <div class="input-field col s6">
                    <p>
                        <label>
                            <input type="checkbox" name="remember"/>
                            <span>Keep me logged in</span>
                        </label>
                    </p>
                </div>
                <div class="input-field col s6">
                    <p>
                        <label>
                            <a href="{{ route('password.request') }}">Forgot Password</a>
                        </label>
                    </p>
                </div>
                <div class="input-field col s12">
                    <input type="submit" class="btn btn_theme_outline" value="Login">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
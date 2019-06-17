@extends('layouts.app')

@section('title')
    Password Reset
    @parent
@stop

@section('content')
<div style="height:30px;"></div>

<div class="container">
    <div class="row">
        <form action="{{ route('password.email') }}" method="post" class="col s12 m8 offset-m2 gc_form z-depth-5">

            {{ csrf_field() }}
            
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="row">
                <div class="col s12" align="center">
                    <h1>Reset Password</h1>
                </div>
                <div class="col s12">
                    @include('partials.errors')
                </div>
                <div class="input-field col s12">
                    <input type="password" name="password" placeholder=" " class="validate">
                    <label>New Password</label>
                </div>
                <div class="input-field col s12">
                    <input type="password" name="password_confirmation" placeholder=" " class="validate">
                    <label>Confirm Password</label>
                </div>
                <div class="input-field col s12">
                    <input type="submit" class="btn btn_theme_outline" value="Save">
                </div>
            </div>
        </form>
    </div>
</div>
@stop
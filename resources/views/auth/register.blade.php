@extends('layouts.app')

@section('title')
    Register
    @parent
@stop

@section('content')
<div style="height:30px;"></div>

<div class="container">
    <div class="row">
        <form action="/register" method="post" class="col s12 m8 offset-m2 gc_form z-depth-5">
            {{ csrf_field() }}
            
            <div class="row">
                <div class="col s12" align="center">
                    <h1>Register</h1>
                </div>
                <div class="col s12">
                    @include('partials.errors')
                </div>
                <div class="input-field col s12 m6">
                    <input type="text" name="first_name" placeholder=" " class="validate">
                    <label>First Name</label>
                </div>
                <div class="input-field col s12 m6">
                    <input type="text" name="last_name" placeholder=" " class="validate">
                    <label>Last Name</label>
                </div>
                <div class="input-field col s12">
                    <input type="email" name="email" placeholder=" " class="validate">
                    <label>Email</label>
                </div>
                <div class="input-field col s6">
                    <p>
                        <label>
                            <input type="checkbox" name="terms" v-model="terms">
                            <span class="text-success" v-if="terms">I Accept</span>
                            <span class="cursor-pointer text-info" @click="show_terms">Terms and Conditions</span>
                        </label>
                    </p>
                </div>
                <div class="input-field col s6">
                    <p>
                        <label>
                            <a href="{{ route('login') }}">Already registered</a>
                        </label>
                    </p>
                </div>
                <div class="input-field col s12">
                    <input type="submit" class="btn btn_theme_outline" value="Register">
                </div>
            </div>
        </form>
    </div>
</div>
@stop

@section('page_scripts')
<script>
var app = new Vue({
  el: '#app',
  
  data: {
    terms: false,
  },
  methods: {
    show_terms: function(){
        $('#terms_modal').modal('open');
    }
  }
});    
</script>
@endsection
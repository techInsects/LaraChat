@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m12">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Email Verification</span>
                <p>
                    @if(session('resent'))
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    @endif
                    <br>
                    {{ __('Before proceeding, please check your email for a verification link.') }} <br>
                    {{ __('If you did not receive the email') }}, 
                </p>
            </div>
            <div class="card-action">
              <a href="/">Home</a>
              <a href="{{ route('auth.verify') }}">{{ __('click here to request another') }}</a>.
            </div>
          </div>
        </div>
    </div>
</div>
@endsection

@section('page_scripts')
<script>
     M.toast({html: 'Your Email is not verified!!'})
</script>
@endsection

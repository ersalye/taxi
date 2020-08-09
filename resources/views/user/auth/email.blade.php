@extends('user.layout.auth')

@section('content')
<?php $login_user = asset('asset/img/login-user-bg.jpg'); ?>
<div class="container-fluid">
    <div class="col-md-12">
        <a class="log-blk-btn" href="{{url('login')}}">ALREADY HAVE AN ACCOUNT?</a>
        <h3>Reset Password</h3>
    </div>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form role="form" method="POST" action="{{ url('/password/email') }}">
        {{ csrf_field() }}

        <div class="col-md-12" style="margin-top: 30px;">
            <input type="email" class="form-control" name="email" placeholder="Email Address" value="{{ old('email') }}">

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif                        
        

            <div class="facebook_btn">
                <button value="submit" class="btn btn-default btn-arrow-left">SEND PASSWORD RESET LINK </button>
                <figure><img src="/img/btn_arrow.png" alt="img"/></figure>
            </div>  
        </div>  
    
    </form>     
 </div>






@endsection

@extends('user.layout.auth')

@section('content')

<!-- <div class="signin_page"> -->
            <div class="container">
                <h3>Sign In</h3> 
                    
                    <form role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}  
                        <label>Email</label>
                        <input id="email" name="email" class="form-control" type="text" placeholder="Email" value="{{ old('email') }}" required > 

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                        <label>Password</label> 
                        <input id="password" name="password" class="form-control" type="password" placeholder="Password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                        <div class="facebook_btn">
                            <a href="{{ url('provider/auth/facebook') }}"><button value="submit" class="btn btn-default btn-arrow-left">next </button>
                            <figure><img src="img/btn_arrow.png" alt="img"/></figure></a>
                        </div>    
                        <p>Don't have an account? <a href="{{ url('/register') }}">sign up</a></p>
                        <p class="helper"><a href="{{ url('/password/reset') }}">Forgot Your Password?</a></p>
                        <h4>or</h4>
                       
                        <div class="facebook_btn">
                            <a href="{{ url('/auth/facebook') }}"><button value="submit" class="btn btn-default btn-arrow-left" style="background: #3B5998;">facebook</button></a>
                        <figure><img src="img/btn_arrow.png" alt="img"/></figure>
                        </div>

                        <div class="facebook_btn">
                            <a href="{{ url('/auth/google') }}"><button value="submit" class="btn btn-default btn-arrow-left" style="background: #d34836;">Google+</button></a>
                        <figure><img src="img/btn_arrow.png" alt="img"/></figure>
                        </div>
                    </form>                               
            </div>
        <!-- </div> -->
@endsection

@include('backend.loginHeaderLink')
<body>
 <!-- LOGIN FORM SECTION -->
<section class="login-form d-flex align-items-center">
    <div class="container">
        <div class="login-form-title text-center">
            <figure class="login-page-logo">
                    <a class="navbar-brand mr-0 p-0" href="index.html"><img src="./assets/images/sencare-logo2.png" alt="" class="img-fluid"></a>
            </figure>
            <h2>Welcome Back !</h2>
        </div>
        <div class="login-form-box">
            <div class="login-card">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>                       
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input class="input-field form-control" name="email" :value="old('email')" type="email" id="exampleInputEmail1" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input  class="input-field form-control" name="password" :value="__('Password')" type="password" id="exampleInputPassword1" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary hover-effect">{{ __('Log in') }}</button>
                    <div>
                        <label class="font-weight-normal mb-0" style="cursor: pointer;">
                        <input class="checkbox" type="checkbox" name="userRememberMe">
                        Remember me
                        </label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="forgot-password float-right">{{ __('Forgot your password?') }}</a>
                        @endif
                    </div>
                </form>
            </div>
            <div class="join-now-outer text-center">
                <a href="{{route('register')}}">Join now, create your FREE account</a>
            </div>
        </div>   
    </div>
</section>
    <script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
    <script src="assets/js/animations.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/custom-script.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/text-animations.js"></script>
    <script src="./assets/js/carousel.js"></script>
</body>
</html>
    
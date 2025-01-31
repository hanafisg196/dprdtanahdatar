<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="icon" href="/dist/assets/compiled/jpg/logotanahdatar.png" type="image/x-icon">
    <link rel="stylesheet" href="/dist/assets/compiled/css/app.css">
    <link rel="stylesheet" href="/dist/assets/compiled/css/auth.css">
</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <h1 class="auth-title">Login</h1>
                    @if (session()->has('error'))
                        <div class="row">
                            <div class="alert alert-danger col-sm-12 " role="alert">
                                {{ session('error') }}
                            </div>
                        </div>
                    @endif
                    <form method="post" action="{{route('doLogin')}}" id="loginForm">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl  @error('email') is-invalid @enderror"
                            value="{{ old('email') }}" placeholder="Username" name="email">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                             @enderror
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl @error('password') is-invalid @enderror" placeholder="Password" name="password">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                             @enderror
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <label for="captcha">Captcha</label>
                           <div class="mb-2">
                            {!! captcha_img('math') !!}
                           </div>
                            <input type="text" class="form-control  @error('captcha') is-invalid @enderror" placeholder="captcha" name="captcha" id="captcha">
                            @error('captcha')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                             @enderror
                        </div>

                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5" id="submitButton">Login</button>
                    </form>

                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                </div>
            </div>
        </div>

    </div>
    <script>
        document.getElementById("loginForm").addEventListener("submit", function() {
            let submitButton = document.getElementById("submitButton");
            submitButton.innerHTML = `<span class="spinner-border spinner-border-sm"></span> Loading...`;
            submitButton.disabled = true;
        });
    </script>
</body>

</html>

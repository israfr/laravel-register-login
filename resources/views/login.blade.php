<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    @if(session()->has('success'))
    <div class="notif">
        <div class="notif-card notif-success">
            {{ session('success') }}
        </div>
    </div>
    @endif

    @if(session()->has('failed'))
    <div class="notif">
        <div class="notif-card notif-danger">
            {{ session('failed') }}
        </div>
    </div>
    @endif

    <section id="login">
        <div class="form-card">
            <form action="{{ Route('loginaccount') }}" method="post">
                @csrf
                <div class="form-top">
                    <h1>LOGIN FORM</h1>
                </div>

                <div class="form-center">
                    <div class="form-group">
                        <div class="form">
                            <label for="" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" value="{{ old('username') }}">

                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password">

                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <p>
                        Didn't have an account? <a href="{{ Route('register') }}">Register</a> here
                    </p>
                </div>

                <div class="form-bottom">
                    <button class="cust-button blue-button" type="submit">Login</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
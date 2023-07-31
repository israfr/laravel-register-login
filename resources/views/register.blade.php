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
    <section id="register">
        <div class="form-card">
            <form action="{{ Route('registeraccount') }}" method="post">
                @csrf
                <div class="form-top">
                    <h1>REGISTER FORM</h1>
                </div>

                <div class="form-center">
                    <div class="form-group">
                        <div class="form">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

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
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                            @error('email')
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

                        <div class="form">
                            <label for="" class="form-label">Confrim Password</label>
                            <input type="password" class="form-control @error('password_confirmation') is-invalid
                                @enderror" name="password_confirmation">

                            @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <p>
                        Already have an account? <a href="{{ Route('login') }}">Login</a> here
                    </p>
                </div>

                <div class="form-bottom">
                    <button class="cust-button blue-button" type="submit">Register</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
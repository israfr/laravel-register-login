<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <link rel="stylesheet" href="/css/style.css">

    <!-- Captain Icon -->
    <link rel="stylesheet" href="/captain-icons/dist/captain-icons.css">
</head>

<body>
    <div class="logout-wrapper">
        <div class="text-wrapper">
            <p>Hello, welcome {{ auth()->user()->name }}. You have successfully logged in !</p>
        </div>

        <form action="{{ Route('logoutaccount') }}" method="post">
            @csrf
            <button class="cust-button red-button" type="submit">Logout</button>
        </form>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login</title>

</head>
<style>
    body {
        background-image: url("storage/1.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }

    form {
        background-color: rgba(0, 0, 0, 0.5);
        padding: 30px;
        border-radius: 5px;
        color: #fff;
    }

    form {
        width: 350px;
        border: 1px solid #ccc;
        padding: 15px;
        border-radius: 15px;
        margin: 300px auto;

    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;

    }

    input[type="text"],
    input[type="password"],
    input[type="email"] {
        width: 100%;
        padding: 5px;
        border: none;
        background-color: #222;
        color: #fff;
        border-radius: 3px;
        margin-bottom: 10px;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        margin-left: 38%
    }

    h1 {
        text-align: center;
    }

    input[type="text"]:focus+label,
    input[type="password"]:focus+label {
        top: -5px;
        font-size: 0.8em;
        color: #fff;
    }

    .alert ul {
        margin: 0;
        padding: 0;
        list-style-type: none;
    }

    .text-danger {
        color: #dc3545;
        font-size: 0.875rem;
    }
</style>

<body>
    <form action="{{ route('userlogin') }}" method="POST">
        @csrf
        <h1>User Login</h1>

        <label for="">Email</label>
        <input type="text" name="email" value="{{ old('email') }}">
        @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
        <br><br>
        <label for="password">Password</label>
        <input type="password" name="password">
        @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
        <br><br>
        <input type="submit">
    </form>
</body>

</html>

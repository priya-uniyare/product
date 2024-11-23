<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Form</title>
    <style>
        * {}
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="text-muted">
        <h1>Product</h1>
    </div>
    <div> <a href="/mylogin" class="btn btn-primary">Login</a></div>
    <div class="">
        <form action="{{ route('register.store') }}" method="post" class="">
            @csrf
            <div class="container text-info">
                <h1 class="">Register</h1>
                <div class="form-group">
                    <x-input type="text" class="form-control" name="name" label="Name" />
                </div>
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>

                <div class="form-group">
                    <x-input type="email" class="form-control" name="email" label="Email" />
                </div>
                <span class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                </span>
                <div class="form-group">
                    <x-input type="password"  class="form-control" name="password" label="password" />
                </div>
                <span class="text-danger">
                    @error('password')
                    {{$message}}
                    @enderror
                    <br>
                    <button class="btn btn-primary">submit</button>
            </div>
            <br>
            @if(session('success'))
            <div>{{ session('success') }}</div>
            @endif

        </form>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Login</title>
</head>

<body>
    <div class="text-muted">
        <h1>Product</h1>
    </div>
    <div></div>
    <div> <a href="/register" class="btn btn-primary">Register</a></div>

    <div class="card border border-primary ">
        <div class="container text-info">
            <h1>Login</h1>
            <form action="{{ url('/mylogin') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                </div>
                <br>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <br>
                
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>

    </div>
</body>

</html>
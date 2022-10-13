<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 9 | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<style>
    .login-box {
        border: solid 1px;
        width: 500px;
        padding: 20px;
        box-sizing: border-box;
        box-shadow: 5px 8px;
        border-radius: 25px;

    }
</style>
<body>

    <div class="vh-100 d-flex justify-content-center align-items-center flex-column">
        @if (Session::has('status'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('message') }}
        </div>
            
        @endif
        <p class="text-center">Login di sini ya Biar jodoh mu Ikut Login</p>
        <div class="login-box">
            <form action="" method="POST">
                @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-lable">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="mb-3">
                <button class="btn btn-secondary form-control" type="submit">Login</button>
            </div>
        </form>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
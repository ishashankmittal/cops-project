<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    

    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;

}

body {
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #499eff;
}
.container {
    width: 360px;
    height: min-content;
    padding: 20px;
    border-radius: 12px;
    background: #ffffff;
}
.container h4 {
    font-size: 36px;
    margin-bottom: 25px;
}

.container form {
    font-size: 20px;
}

.container form .form-group {
    margin-bottom: 12px;
}

</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div  style="margin-top:20px;">
                <h4 class="text-center">Login</h4>
            <form action="{{route('login-user')}}" method="post">
            @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                @csrf
            <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <input type="text" class="form-control" placeholder="Enter Email"
                    name="email" value="{{old('email')}}">
                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <input type="text" class="form-control" placeholder="Enter Password"
                    name="password" value="{{old('password')}}">
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                </div>
                <div class="form-group">
                    <button class="btn btn-block btn-primary" type="submit">Login</button>
                </div>
                <br>
                <a href="registration">New User!! Register Here.</a>
            </form>
            </div>
        </div>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>
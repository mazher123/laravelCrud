<!doctype html>
<html>
<head>
    
    
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    
</head>

    
    <body>
    
    <form method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="simple-login-container">
    <h2>Login Form</h2>
    <div class="row">
        <div class="col-md-12 form-group">
            <input type="text" class="form-control" placeholder="Username" name="uname">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 form-group">
            <input type="password" placeholder="Enter your Password" class="form-control" name="upass">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 form-group">
            <input type="submit" class="btn btn-block btn-login" value="login"  >
        </div>
    </div>
   
</div>
    
        </form>
    
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/jquery-3.1.1.min.js')}}"></script>

    </body>


</html>



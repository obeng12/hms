<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Instania</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style media="screen">
body {
    /*height: 100%;*/
}

 .login_login {

    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 200px;
    margin-bottom: 200px;
    margin-left: auto;
    margin-right: auto;
    opacity: 0.9;
width: 400px;
    -webkit-box-shadow: inset 4px -3px 5px 0px rgba(97,91,97,0.11);
  -moz-box-shadow: inset 4px -3px 5px 0px rgba(97,91,97,0.11);
  box-shadow: inset 4px -3px 5px 0px rgba(97,91,97,0.11);
background-color:#ecf0f1;
padding: 16px;
padding-top: 30px;
border-radius: 8px;
}
.log{
  width: 100%;
  height: 100%;
}
.err{
  color:#c0392b;

}
</style>
  </head>
  <body style="background:url(https://static1.squarespace.com/static/5849f8e2c534a52d6102c1d9/585c09c8c534a5bfb0d996a0/58a12187893fc0b6d3de864e/1491326710941/healthcare-bg.jpg?format=2500w)">
    <div class="container">
      <div class="login_login">


<form class="log" action="{{route('log_in')}}" method="post">
  @if(count($errors)>0)
  <div class="alert alert-daner">
    @foreach($errors->all() as $error )
    <p class="err">{{$error}}</p>
    @endforeach
  </div>
  @endif
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" value="" class="form-control" placeholder="example@gmail.com">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" value="" class="form-control" placeholder="password">
  </div>
  <a href="#">Forget Password</a>
<button type="submit" name="submit" class="btn btn-success pull-right"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</button>
  {{csrf_field()}}

</form>
</div>
  </div>
    <script
  src="http://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>

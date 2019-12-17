<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    -->

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Griya Homestay</title>
  </head>
<body>
<style>
    body{
      background-image: url(images/bglogin.jpg);
    }
    .fom{
      position: absolute;
      width: 400px;
      margin-top:12%;
      margin-left:23%;
      background-color: white;
    }
    #fomm{
      width: 320px;
      margin: auto;
      padding: 20px 0px 20px 0px;
    }
    .centered {
        position: absolute;
        top: 20%;
        left: 44%;
        color: black;
    }
    #btnlogin{
      width: 320px;
      background-color: #286aad;
      color: white;
    }
    .centered{
      color: #ffffff;
    }
</style>

<div class="centered">
<p class="text-center font-weight-bold" align="center"><h1 id="txtlogin">Login Now</p></h1>
</div>

<div class="container">
<div class="mt-5">
<table class="fom">
<tr>
<td>
<form id="fomm">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div>
  <button type="submit" class="btn font-weight-bold" id="btnlogin">&nbsp Login</button>
</form>
</td>
</tr>
</table>
</div>
</div>
</body>
</html>
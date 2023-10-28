<!DOCTYPE html> <html lang="en"> <head>
<meta charset="UTF-8" /> <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
<link rel="stylesheet" type="text/css" href="app.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.js"></script>
<link href="sign-in.css" rel="stylesheet" />
<title>Document</title>
</head>

<body>
  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    @if(isset($error))
    <div class="row">
      <div class="alert alert-danger" role="alert">
        {{$error}}
      </div>
    </div>
    @endif
    <!-- Icon disamping kiri -->
    <div>
      <img class="img_icon" alt="" src="pertamina.jpg" />
    </div>

    <!-- Foto diatas Login -->
    <div>
      <img class="img_1" alt="" src="logopertamina.png" />
    </div>

    <div>
      <div>
        <h1>Login</h1>
        <h5>Please enter your login details to sign in.</h5>
      </div>
      <div class="form-floating" method="post" action="/login">

        <input type="user" class="form-control" id="user" placeholder="name@example.com" />
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="password" placeholder="Password" />
        <label for="floatingPassword">Password</label>
      </div>
    </div>

    <!--  Checkbox Remember  -->
    <div class="remember-forgot">
      <label><input type="checkbox" />Remember me</label>
      <a href="#">Forgot Password? </a>
    </div>

    <!-- Button Login -->
    <div class="btn_login d-grid gap-2 col-6 mx-40px">
      <button class="btn btn-danger" type="button">Login</button>
    </div>
</body>

</html>
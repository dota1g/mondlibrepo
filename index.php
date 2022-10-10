<!DOCTYPE html>
<html lang="en">
<head>
  <title>KOF Online Library Reservation Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
  body {
 background-image: url("bg.jpg");
 background-repeat: no-repeat;
 background-size: cover;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
  </style>

</style>
      <script type="text/javascript">
        var opacity = 0;
        var intervalID = 0;
        window.onload = fadeIn;
  
        function fadeIn() {
            setInterval(show, 200);
        }
  
        function show() {
            var body = document.getElementById("body");
            opacity = Number(window.getComputedStyle(body)
                             .getPropertyValue("opacity"));
            if (opacity < 1) {
                opacity = opacity + 0.1;
                mainui.style.opacity = opacity
            } else {
                clearInterval(intervalID);
            }
        }
    </script>

<body>

  <div class="container-fluid  text-white text-center" >
  <img src="koflib.png" width="40%" height="40%" class="center">
  </div>
    
  <div class="container mt-5">
    <div class="row">
    <div class="col-sm-4">

    </div>
    <div id ="mainui" class="col-sm-4" style="background: #edebe4; border-radius: 25px; padding: 50px;" style="opacity:0;" >
      <h3 class="text-center">Login</h3>
    <p></p>
      
    <form action="/action_page.php" class="was-validated">
      <div class="mb-3 mt-3">
        <label for="uname" class="form-label">Username:</label>
        <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
        <div class="valid-feedback"></div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="mb-3">
        <label for="pwd" class="form-label">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
        <div class="valid-feedback"></div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" id="myCheck"  name="remember" required>
        <label class="form-check-label" for="myCheck">I agree on blabla.</label>
        <div class="valid-feedback"></div>
      </div>
      <div class="mb-3">
      </div>
    <input type="submit" value="Log in" class="btn btn-primary center"><br>
    <p style="text-align:center;">Not yet a member? <a href="register.php">Register here!</a></p>
    </form>
      </div>
    </div>
    <div class="col-sm-4">

    </div>
  </div>
</div>

</body>
</html>

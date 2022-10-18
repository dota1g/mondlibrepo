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
.error {color: #FF0000;}
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

    <?php 
    session_start();
          //login
      $username = $password = "";
      //register
      $fname = $lname = $email = $regusern = $regpass = "";
      //error codes
      $fnameErr = $lnameErr = $emailErr = $reguserErr = $regpassErr = "";


      if($_SERVER["REQUEST_METHOD"]=="POST"){
          
        $valid = true;

              $fname = test_input($_POST["fname"]);
              if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)){
              $valid = false;
              $fnameErr = "Special characters are not allowed!";
            }
          

              $lname = test_input($_POST["lname"]);
              if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)){
              $valid = false;
              $fnameErr = "Special characters are not allowed!";
            }
            
              $email = test_input($_POST["email"]);
              if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $valid = false;
              $emailErr = "Invalid email format";
              }
          
        
            $regusern = test_input($_POST["regusern"]);
            if (!preg_match('/^[a-z\d_]{2,20}$/i', $regusern)) {
            $valid = false;
            $reguserErr = "Invalid username format";
            }

            $regpass = test_input($_POST["regpass"]);
            
            if($valid){
              $_SESSION['fname'] = $fname;
              $_SESSION['lname'] = $lname;
              $_SESSION['email'] = $email;
              $_SESSION['regusern'] = $regusern;
              $_SESSION['regpass'] = $regpass;
              header('location:registerconfirm.php');
              exit();
          }

      }

      function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
              }
    
    ?>

<body>

  <div class="container-fluid  text-white text-center" >
  <img src="koflib.png" width="40%" height="40%" class="center">
  </div>

    </div>
    <div id ="mainui" class="col-sm-4 center" style="background: #edebe4; border-radius: 25px; padding: 50px;" style="opacity:0;"  >
      <h3 class="text-center">Register</h3>
    <p></p>
      
    <form action="" class="was-validated" method="POST">
      <div class="mb-3 mt-3">
        <label for="fname" class="form-label">First name:</label>
        <input type="text" class="form-control" id="fname" placeholder="Enter first name" name="fname" autocomplete="off" required>
        <!-- <div class="invalid-feedback">First name is required.</div> -->
        <span class="error"> <?PHP echo $fnameErr; ?> </span>
        <div class="valid-feedback"></div>
      </div>
      <div class="mb-3 mt-3">
        <label for="fname" class="form-label">Last name:</label>
        <input type="text" class="form-control" id="lname" placeholder="Enter last name" name="lname" autocomplete="off" required>
        <!-- <div class="invalid-feedback">Last name is required.</div> -->
        <span class="error"> <?PHP echo $fnameErr; ?> </span>
        <div class="valid-feedback"></div>
        
      </div>
      <div class="mb-3 mt-3">
        <label for="fname" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" autocomplete="off" required>
        <!-- <div class="invalid-feedback">Email is required.</div> -->
        <span class="error"> <?PHP echo $emailErr; ?> </span>
        <div class="valid-feedback"></div>
      </div>
      <div class="mb-3 mt-3">
        <label for="fname" class="form-label">Username</label>
        <input type="text" class="form-control" id="uname" placeholder="Username must contain 2-20 characters, a-z and/or underscore." name="regusern" autocomplete="off" required>
        <!-- <div class="invalid-feedback">Username is required.</div> -->
        <span class="error"> <?PHP echo $reguserErr; ?> </span>
        <div class="valid-feedback"></div>
      </div>
      <div class="mb-3">
        <label for="pwd" class="form-label">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="regpass" autocomplete="off" required>
        <!-- <div class="invalid-feedback">Password is required.</div> -->
        <span class="error"> <?PHP echo $regpassErr; ?> </span>
        <div class="valid-feedback"></div>
      </div>
      <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" id="myCheck"  name="remember" required>
        <label class="form-check-label" for="myCheck">I agree on KOF Library Terms and Conditions.</label>
        <div class="valid-feedback"></div>
      </div>
      <div class="mb-3">
      <label for="pwd" class="form-label">Already a member? <a href="index.php">Login here!</a></label>
      </div>
    <button type="submit" class="btn btn-primary">Register</button>
    </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>

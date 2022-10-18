<?php
session_start();

//login
$username = $password = "";
//register
$fname = $lname = $email = $regusern = $regpass = "";
//error codes
$fnameErr = $lnameErr = $emailErr = $reguserErr = $regpassErr = "";


if($_SERVER['REQUEST_METHOD']=="POST"){
    $valid = false;

    if (empty($_POST["fname"])) {
      $valid = false;
      $fnameErr = "First name is required!";
    } else {
        $fname = test_input($_POST["fname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)){
        $valid = false;
        $fnameErr = "Special characters are not allowed!";
      }
    }

    if (empty($_POST["lname"])) {
        $valid = false;
        $fnameErr = "First name is required!";
      } else {
          $lname = test_input($_POST["lname"]);
          if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)){
          $valid = false;
          $fnameErr = "Special characters are not allowed!";
        }
      }

    if (empty($_POST["email"])) {
        $valid = false;
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $valid = false;
        $emailErr = "Invalid email format";
        }
    }
}

function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }

        //Reminder that use actual variable so script won't get in OMEGALUL
        if($valid){
            $_SESSION['fname'] = $fname;
            $_SESSION['lname'] = $lname;
            $_SESSION['email'] = $email;
            $_SESSION['regusern'] = $regusern;
            $_SESSION['regpass'] = $regpass;
            header('location:index.php');
        }

?>
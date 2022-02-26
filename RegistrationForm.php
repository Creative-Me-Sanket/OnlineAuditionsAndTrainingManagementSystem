<?php
session_start();
include_once('DBConnect.php')
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Calibri, Helvetica, sans-serif;
      background-color: pink;
    }

    .container {
      padding: 50px;
      background-color: lightblue;
    }

    input[type=text],
    input[type=password],
    textarea {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=password]:focus {

      background-color: orange;
      outline: none;
    }

    div {
      padding: 10px 0;
    }

    hr {
      border: 1px solid #f1f1f1;
      margin-bottom: 25px;
    }

    .registerbtn {
      background-color: #4CAF50;
      color: white;
      padding: 16px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }

    .registerbtn:hover {
      opacity: 1;
    }

    .phone {

      size: 25px;
    }
  </style>
</head>

<body>
  <form method="POST" action="RegistrationForm.php">
    <div class="container">
      <center>
        <h1> Registration Form</h1>
      </center>
      <hr>
      <label> Full Name </label>
      <input type="text" name="fullname" placeholder="Full Name" size="15" required />

      <div>
        <label>
          Type :
        </label>

        <select name="type">
          <option value="Artist">Artist</option>
          <option value="Production House">Production House</option>
          <option value="Teachers">Teacher</option>
          <option value="student">Student</option>
        </select>
      </div>

      <div>
        <label>
          Gender :
        </label><br>
        <input type="radio" value="M" name="gender" checked> Male
        <input type="radio" value="F" name="gender"> Female
        <input type="radio" value="Other" name="gender"> Other

      </div>
      <label for="psw"><b>Height</b></label>
      <input type="number" placeholder="Height" name="height" required>
      <label for="psw"><b>Weight</b></label>
      <input type="number" placeholder="Weight" name="weight" required>
      <label>
        Phone :
      </label>
      <input type="text1" name="country code" placeholder="Country Code" value="+91" size="2" />
      <input type="text1" name="phone" placeholder="phone no." size="10" required> <br><br>
      Current Address :
      <textarea cols="80" rows="5" placeholder="Current Address" name="address" required>
</textarea>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="email"><b>Date of Birth</b></label>
      <input type="date" name="dob" required>

      <label for="psw"><b><br><br>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Re-type Password</b></label>
      <input type="password" placeholder="Retype Password" name="psw-repeat" required>
      <button name="submit" type="submit" class="registerbtn">Register</button>
  </form>
</body>

</html>
<?php
if (isset($_POST["submit"])) {
  $name = $_POST["fullname"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $dob = $_POST["dob"];
  $height = $_POST["height"];
  $weight = $_POST["weight"];
  $password = $_POST["psw"];
  $type = $_POST["type"];
  $gender = $_POST["gender"];
  $address = $_POST["address"];
  echo "$dob<br>$name <br>$email<br> $phone<br><br> $height<br> $weight<br> $password <br>$type<br> $gender <br>$address <br>";
  $conn = mysqli_connect("localhost","root","","project") or die("failed to connect");
  $que = "insert into users(name,email,phone,password,dob,intrest,type,gender,address,height,weight) values('$name','$email',$phone,'$password','$dob','$type','$type','$gender','$address',$height,$weight)";
  $result = mysqli_query($conn,$que);
   //$query = "";
   //$result = mysqli_query($conn,"insert into users(id,name) values(4,'abcd')");

   //$result = mysqli_query($conn,"Insert into newuser values($phone,'$name')");
  var_dump($result);
  if($result){
    echo "<script>alert('Registered successfully, Please login :) ')</script>";
  }
  else{
    echo "<script>alert('Something went wrong :(')</script>";
  }
}
?>
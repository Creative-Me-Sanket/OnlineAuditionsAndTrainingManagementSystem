<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="enrollCourse.css" rel="stylesheet" media="all">
  <title>Enroll Now</title>
</head>

<body>
  <h1>
    Enroll for the course
  </h1>

  <div>
    <form method="POST">
      <input type="text" name="name" class="formStyle" value="<?php echo "$_SESSION[name]" ?>" required />
      <input type="email" name="email" class="formStyle" value="<?php echo "$_SESSION[email]" ?>" required />
      <input type="text" name="phone" class="formStyle" value="<?php echo "$_SESSION[phone]" ?>" required />
      <button class="formButton" name="submit" type="submit">Enroll Now</button>
    </form>
  </div>
</body>

</html>

<?php
if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $conn = mysqli_connect("localhost", "root", "", "project") or die("failed to connect");
  $que = "insert into applied_courses(name,uid,cid,email,contact) values('$name',$_SESSION[uid],$_GET[id],'$email',$phone)";
  $result = mysqli_query($conn, $que);
  //$query = "";
  //$result = mysqli_query($conn,"insert into users(id,name) values(4,'abcd')");

  //$result = mysqli_query($conn,"Insert into newuser values($phone,'$name')");
  var_dump($result);
  if ($result) {
    echo "<script>alert('Applied successfully, Best of luck')</script>";
  } else {
    echo "<script>alert('Something went wrong :(')</script>";
  }
}
?>
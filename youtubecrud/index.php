<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bootstrap 4 example</title>
    <?php
            include 'links.php';
    ?>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="container">
    <div class="left">
      <h2>Welcome</h2>
      <p>Please fill all the details carefully. This form can change your life.</p>
      <a href="display.php" style="color:white;">Check Form</a>
    </div>
    <div class="right">
      <h2>Apply for Web Developer Post</h2>
      <form method="POST">
      <input type="text" name="name" placeholder="Enter your name *" required />
        <input type="text" name="degree" placeholder="Enter your qualification *" required />
        <input type="text" name="mobile" placeholder="Mobile number *" required />
        <input type="email" name="email" placeholder="Email ID *" required />
        <input type="text" name="refer" placeholder="Any references *" />
        <input type="text" name="jobprofile" value="Web Developer" readonly />


        <button type="submit" name = "submit" class="submit-btn">Register</button>
      </form>

    </div>
  </div>
</body>
</html>


<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $degree = $_POST['degree'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $refer = $_POST['refer'];
    $jobprofile = $_POST['jobprofile'];
 // Now this works because it's readonly

 $insertquery = "INSERT INTO jobregistration(name, degree, mobile, email, refer, `job post`)
 VALUES ('$name', '$degree', '$mobile', '$email', '$refer', '$jobprofile')";

    $res = mysqli_query($con, $insertquery);

    if ($res) {
        echo "<script>alert('Data inserted properly');</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
    }
}
?>





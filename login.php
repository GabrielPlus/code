<?php
include("connection.php");

if(isset($_POST['submit'])){
  // Check if the required fields are set
  if(isset($_POST['name'], $_POST['age'], $_POST['email'], $_POST['county'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $county = mysqli_real_escape_string($conn, $_POST['county']);

    $qry = "INSERT INTO `data` (`name`, `age`, `email`, `county`) VALUES ('$name', '$age', '$email', '$county')";
    $result = mysqli_query($conn, $qry); // Assign the result of the query to $result

    if($result){
      header("location: welcome.php");
    } else {
      echo "Error: " . mysqli_error($conn);
    }
  } else {
    echo "Please fill in all the required fields.";
  }
}
?>
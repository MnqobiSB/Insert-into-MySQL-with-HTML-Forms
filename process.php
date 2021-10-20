<?php include('database.php'); ?>

<?php
  //Assign post variables
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $department = $_POST['department'];
  $email = $_POST['email'];

  mysqli_query($connect, "INSERT INTO employees (first_name, last_name, department, email)
  VALUES ('$first_name', '$last_name', '$department', '$email')");

  if(mysqli_affected_rows($connect) > 0) {
    echo "<p>Employee Added Successfully</p>";
    echo "<a href=\"index.php\">Go Back</a>";
  } else {
    echo "Employee NOT Added";
    echo mysqli_error($connect);
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Employee</title>

  <style>
  label {
    display: inline-block;
    width: 100px;
  }
  </style>
</head>

<body>
  <h1>Add Employee</h1>

  <form method="post" action="process.php">
    <label>First Name: </label>
    <input type="text" name="first_name">
    <br />
    <label>Last Name: </label>
    <input type="text" name="last_name">
    <br />
    <label>Department: </label>
    <input type="text" name="department">
    <br />
    <label>Email: </label>
    <input type="email" name="email">
    <br /><br />
    <input type="submit" value="Add Employee" />
  </form>
</body>

</html>
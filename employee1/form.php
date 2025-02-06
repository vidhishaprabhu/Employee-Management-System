<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Management System</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="center">
    <form action="#" method="POST">
    <h1>Employee Data Entry Software</h1>
    <div class="form">
      <input type="text" class="textfield" name="" placeholder="Search ID">
      <input type="text" class="textfield" name="name" placeholder="Employee Name">
      <select class="textfield" name="gender">
        <option>Select gender</option>
        <option>Female</option>
        <option>Male</option>
        <option>Others</option>
      </select>
      <input type="email" class="textfield" name="email" placeholder="Email Address">
      <select class="textfield" name="department">
        <option>Select Department</option>
        <option>IT</option>
        <option>HR</option>
        <option>Accounts</option>
        <option>Sales</option>
        <option>Marketing</option>
        <option>Business Developments</option>
      </select>
      <textarea placeholder="Address" name="address">

      </textarea>
      <div class="btn-container">
      <input type="submit" value="Search" name="" class="btn">
      <input type="submit" value="Save" name="save" class="btn" id="btn1">
      <input type="submit" value="Modify" name="" class="btn" id="btn2">
      <input type="submit" value="Delete" name="" class="btn" id="btn3">
      <input type="submit" value="Clear" name="" class="btn" id="btn4">
      </div>
      
    </div>
    </form>
  </div>
  
</body>
</html>

<?php

if(isset($_POST['save'])){
  $name       = $_POST['name'];
  $gender     = $_POST['gender'];
  $email      = $_POST['email'];
  $department = $_POST['department'];
  $address    = $_POST['address'];

  $query = "INSERT INTO form (emp_name,emp_gender,emp_email,emp_department,emp_address) VALUES ('$name','$gender','$email','$department','$address')";

  $data = mysqli_query($conn,$query);

  if($data){
    echo "Data saved successfully";
  }
  else{
    echo "Failed to save data into database";
  }
}

?>

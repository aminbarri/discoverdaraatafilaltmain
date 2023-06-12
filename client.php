<!DOCTYPE html>
<html>
<head>
  <title>Client Information</title>

     <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      padding: 20px;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
    }

    .info {
      margin-bottom: 20px;
    }

    .info label {
      font-weight: bold;
    }

    .info span {
      display: inline-block;
      margin-left: 10px;
    }

    .info span:last-child {
      margin-left: 0;
    }

    .edit-button {
      margin-left: 10px;
      padding: 5px 10px;
      border: none;
      background-color: #007bff;
      color: #fff;
      border-radius: 3px;
      cursor: pointer;
    }

    .edit-input {
      width: 200px;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    .save-button {
      margin-left: 10px;
      padding: 5px 10px;
      border: none;
      background-color: #28a745;
      color: #fff;
      border-radius: 3px;
      cursor: pointer;
    }
  </style>

</head>
<body>
<?php
  // Initialize client information
  $clientName = "John Doe";
  $clientEmail = "johndoe@example.com";
  $clientPhone = "123-456-7890";
  $clientAddress = "123 Main St, City, State";

  // Check if form is submitted
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Update client information if values are present
    if (!empty($_POST["name"])) {
      $clientName = $_POST["name"];
    }
    if (!empty($_POST["email"])) {
      $clientEmail = $_POST["email"];
    }
    if (!empty($_POST["phone"])) {
      $clientPhone = $_POST["phone"];
    }
    if (!empty($_POST["address"])) {
      $clientAddress = $_POST["address"];
    }
  }
  ?>
  <?php 
  if(isset($_GET['edit']) && $_GET['edit'] == 1){
    echo'<div class="container">
    <h1>Client Information</h1>
    <form method="POST" action="'.$_SERVER["PHP_SELF"].'?edit=1">
    <div class="info">
    <label>Name:</label>
    <input type="text" name="name" class="edit-input" value="'.$clientName.'">
  </div>
  <div class="info">
    <label>Email:</label>
    <input type="email" name="email" class="edit-input" value="'.$clientEmail.'">
  </div>
  <div class="info">
    <label>Phone:</label>
    <input type="tel" name="phone" class="edit-input" value="'.$clientPhone.'">
  </div>
  <div class="info">
    <label>Address:</label>
    <input type="text" name="address" class="edit-input" value="'.$clientAddress.'">
  </div>
  <button type="submit" class="save-button">Save</button>
    </form>
  </div>
' ;
  }
  else{
    echo '<div class="container">
    <h1>Client Information</h1>
    <div class="info">
        <label>Name:</label>
        <span>'.$clientName.'</span>
      </div>
      <div class="info">
        <label>Email:</label>
        <span>'.$clientEmail.'</span>
      </div>
      <div class="info">
        <label>Phone:</label>
        <span>'.$clientPhone.'</span>
      </div>
      <div class="info">
        <label>Address:</label>
        <span>'.$clientAddress.'</span>
      </div>
    <form action="" method="get">
    <button type="submit" class="save-button" name="edit" value="1">Edit</button>
    </form>
  </div>
  ';
  }?>
  
</body>
</html>
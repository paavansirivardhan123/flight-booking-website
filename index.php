<?php
  include("database.php");
  
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $name = htmlspecialchars($_POST["Fname"]);
      $email = htmlspecialchars($_POST["email"]);
      $tel = htmlspecialchars($_POST["tel"]);
      $no = htmlspecialchars($_POST["no"]);
      $text = htmlspecialchars($_POST["text"]);
      
      try{
      $sql = "INSERT INTO users (Fname, Email, tel, Passengers, Requests)
          VALUES ('$name', '$email', '$tel', $no, '$text')";

          mysqli_query($conn, $sql);
// TO DELETE ALL THE USERS FROM THE TABLE 
//  $sql = "DELETE FROM users"; if (mysqli_query($conn, $sql)) {echo "All records deleted successfully!";} else {echo "Error deleting records: " . mysqli_error($conn);}     
      }
      catch(mysqli_sql_exception){
        echo "TABLE IS NOT CREATED";
      }
  } else {
      header("Location: book_now.html");
      exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Booking Confirmation</title>
  <meta http-equiv="refresh" content="5;url=Discover_Your_Next_Adventure.html" />
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      padding: 2rem;
    }
    .container {
      max-width: 600px;
      margin: auto;
      background: #fff;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    h2 {
      color: green;
    }
    p {
      margin: 0.5rem 0;
    }
  </style>
</head>
<body style="background-image: url('beach1.jpg'); background-repeat: no-repeat; background-size: cover;">
  <div class="container">
    <h2>Booking Confirmed!</h2>
    <p><strong>Name:</strong> <?= $name ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
    <p><strong>Phone:</strong> <?= $tel ?></p>
    <p><strong>Passengers:</strong> <?= $no ?></p>
    <p><strong>Special Requests:</strong> <?= $text ? $text : "None" ?></p>
    <p style="margin-top: 1.5rem;">You will be redirected shortly...</p>
  </div>
</body>
</html>
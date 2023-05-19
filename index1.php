 <?php

    require 'connection.php';
    if(isset($_POST["submit"]))
    {
        // Form data validation
    //if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    
    // Insert data into "students" table
    $sql = "INSERT INTO student (full_name, email, gender) VALUES ('$full_name', '$email', '$gender')";
    if ($conn->query($sql) === TRUE)
    {
      echo "<script> alert('Data Inserted Successfully'); </script>";
    } 
    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
   
  }
 
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
</head>
<body>
<form action="" method="post">
        <label for="full_name">Full Name:</label>
        <input type="text" name="full_name" required><br><br>

        <label for="email">Email Address:</label>
        <input type="email" name="email" required><br><br>

        <label>Gender:</label><br>
        <input type="radio" name="gender" value="Male" required> Male<br>
        <input type="radio" name="gender" value="Female" required> Female<br><br>

        <button type="submit" name="submit">Submit</button>
    </form>
</div>
 </body>
  </html>
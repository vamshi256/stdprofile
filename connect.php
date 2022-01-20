<?php
 /* $servername = "localhost:3307";
  $username = "root";
  $password = "";
  $dbname = "stdprofile";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "INSERT INTO signup VALUES ('John', 'Doe', '9912413129','vamshi@234','123456','19311A12F6')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

  */
    if (isset($_POST['submit'])) {
        if (isset($_POST['username']) && isset($_POST['fullname']) &&
            isset($_POST['phonenumber']) && isset($_POST['email']) &&
            isset($_POST['password']) && isset($_POST['cnpassword'])) {
            
            $username = $_POST['username'];
            $fullname = $_POST['fullname'];
            $phonenumber = $_POST['phonenumber'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $cnpassword = $_POST['cnpassword'];
    
            $host = "localhost:3307";
            $dbUsername = "root";
            $dbPassword = "";
            $dbName = "stdprofile";
    
            $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
    
            $sql = "INSERT INTO signup VALUES ('$username' ,'$fullname' ,$phonenumber ,'$email' ,'$password' ,'$cnpassword')";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
            $conn->close();
    }
          else{
                 echo "not all feilds are filled";
              }
    }
    else {
        echo "Submit button is not set";
    }
    

?>
	


	


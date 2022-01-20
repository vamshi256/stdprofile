<?php
session_start();
    function validate() {
    if (isset($_POST['submit'])) {
        if ( isset($_POST['username']) && isset($_POST['password']) ) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $host = "localhost:3307";
            $dbUsername = "root";
            $dbPassword = "";
            $dbName = "stdprofile";    
            $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
            $sql = "SELECT * FROM signup WHERE username='$username' And password ='$password'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
            while($row = $result->fetch_assoc()) {
           # echo "username: " . $row["username"]. " - passwd: " . $row["password"]. "<br>";
           $_SESSION["usrnm"] = $row["username"];// name should be given exactly as in database
           $_SESSION["fullnm"] = $row["fullname"];
           $_SESSION["phno"] = $row["Phone Number"];
           $_SESSION["email"] = $row["Email"];
           $_SESSION["cnpsd"] = $row["rollno"];

             header("location:http://localhost/sigma/AAAAAAA-main/login/profile.php");
             $conn->close();
             exit();
            }
            } 
            else {
            echo "0 results";
            }
            $conn->close();
        }
    }

        else {
            echo "Submit button is not set";
        }
    }

//$login = new login();
//$var=$login->validate();
if (isset($_POST['submit']))
{
    validate();
}
?>


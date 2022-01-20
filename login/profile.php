<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- stylesheet -->
    <link rel="stylesheet" href="permission.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
</head>
<body>
  
    <div class="student-profile py-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="card shadow-sm">
                <div class="card-header bg-transparent text-center">
                  <img class="profile_img" src="" alt="student dp">
                  <h3><?php  echo $_SESSION["usrnm"]; ?></h3>
                </div>
                <div class="card-body">
                  <p class="mb-0"><strong class="pr-1">Student ID:</strong><?php  echo $_SESSION["usrnm"]; ?></p>
                  <p class="mb-0"><strong class="pr-1">Class:</strong>4</p>
                  <p class="mb-0"><strong class="pr-1">Section:</strong>A</p>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card shadow-sm">
                <div class="card-header bg-transparent border-0">
                  <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                </div>
                <div class="card-body pt-0">
                  <table class="table table-bordered">
                    <tr>
                      <th width="30%">Roll</th>
                      <td width="2%">:</td>
                      <td><?php  echo $_SESSION["usrnm"]; ?></td>
                    </tr>
                    <tr>
                      <th width="30%">Academic Year	</th>
                      <td width="2%">:</td>
                      <td><?php  echo $_SESSION["fullnm"]; ?></td>
                    </tr>
                    <tr>
                      <th width="30%">Gender</th>
                      <td width="2%">:</td>
                      <td><?php  echo $_SESSION["phno"]; ?></td>
                    </tr>
                    <tr>
                      <th width="30%">Attendence percentage</th>
                      <td width="2%">:</td>
                      <td><?php  echo $_SESSION["email"]; ?></td>
                    </tr>
                    <tr>
                      <th width="30%">No.of leaves taken</th>
                      <td width="2%">:</td>
                      <td><?php  echo $_SESSION["cnpsd"]; ?></td>
                    </tr>
                    <tr>
                        <th width="30%">no.of leaves can be taken</th>
                        <td width="2%">:</td>
                        <td>15 days</td>
                    </tr>
                  </table>
                </div>
              </div>
                <div style="height: 26px"></div>
              <div class="card shadow-sm">
                <div class="card-header bg-transparent border-0">
                  <h3 class="mb-0"><i class="far fa-clone pr-1"></i>permission</h3>
                </div>
                <div class="card-body pt-0">
                    <form action="">
                        <label for="cars">Choose an authority:</label>
                        <select id="cars" name="cars">
                          <option value="physical" >physical</option>
                          <option value="Hod">Hod</option>
                          <option value="staff">staff</option>   
                        </select>

                        <label for="cars">Choose your authority head:</label>
                        <select id="cars" name="cars">
                          <option value="volvo">email1</option>
                          <option value="saab">email2</option>
                          <option value="fiat">email3</option>   
                        </select>

                        <label for="cars">No.of days:</label>
                        <select id="cars" name="cars">
                          <option value="2days">2 days</option>
                          <option value="3days">3 days</option>
                          <option value="4days ">4 days</option>   
                        </select>

                      <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Reason</h3>
                        <textarea name="message" rows="6" cols="60">The cat was playing in the garden.</textarea>
                        <br><br>
                        <a href="signup.html" class="btn btn"><button>Student sign-up</button></a>
                      </form>   
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>
<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>
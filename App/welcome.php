<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db_connect.php';
    $mobile = $_POST["mobile"];
    $contact_name = $_POST["contact_name"];
    $address = $_POST["address"];
    $username = $_POST["username"];
  
    // $exists=false;

    // Check whether this username exists
    $existSql = "SELECT mobile FROM `user_phonebook` WHERE mobile = '$mobile' ";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        // $exists = true;
        $showError = "Mobile Number Already Exists";
    }
    else{
        // $exists = false; 
      
            $preSql = "select id from myusers where username = '$username'";
            $result = mysqli_query($conn, $preSql);
            while ( $data = mysqli_fetch_array($result, MYSQLI_ASSOC))
		    {	   
			    
                $userId = $data;
   		    }	
            print_r($userId);
       
            $sql = "INSERT INTO `user_phonebook` (`user_id`, `mobile`, `date`, `contact_name`, `address`) VALUES (   $userId[id], '$mobile', current_timestamp(), '$contact_name', '$address')";
            print_r($sql);
            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true;
                header("location: welcome.php");
                echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your new number has been added
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> ';
            }
        
        else{
            $showError = "Something went wrong";
        }
    }
}
    
?>

<?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your contact has been added to your phonebook
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css_files/iconshifter.css">
	<link rel="stylesheet" href="./css_files/style.css">
	<link rel="stylesheet" href="./css_files/strip.css">
	<link rel="stylesheet" href="./css_files/responsive.css">
    <link rel="stylesheet" href="./css_files/main.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Welcome - <?php $_SESSION['username']?></title>
  </head>
  <body>
    <?php require 'nav.php' ?>

    <h3  style="text-align: center;">Create a New Contact</h3>
    <div class="card" style="box-shadow: 0 6px 32px 16px rgba(119, 117, 117, 0.2);margin: 5%;width:830px">
	<div class="card-header">
	<img src="./icons/user.png" width="60px" height="60px" alt="">
										
	<img src="./icons/cl2.png" width="60px" height="60px" style="float: right;" alt="">
										
	</div>
	<div class="card-body">
    <form action="welcome.php" method="POST" style="margin: 5%;width:700px">
  
  <h5 class="card-title" style=" color: black;"> <?php echo $_SESSION['username']?>'s' phonebook</h5>
  <p class="card-text" style="font-size: 17px;color: red;">
  &nbsp;<img src="./icons/phonebook.png" class="rotate" width="60px" height="60px" alt=""></p>
  <p class="card-text" style="font-size: 17px;color: red;">
  <!-- Add a contact -->
  &nbsp;
  <!-- <img src="date.png" width="30px" height="30px" alt=""> -->
  <h3 style="text-align: center;">Contact Form</h3>
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Your username</label>
  <input class="form-control"  type="text"   placeholder="Username provided during registration" name="username"  required>
  </div>
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Mobile Number</label>
  <input class="form-control" maxlength="11" type="mobile"   placeholder="01XXXXXXXXX" name="mobile"  required>
  </div>
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Contact Name...</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="contact_name" placeholder="Contact Name"  required>
  </div>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Address</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="address" placeholder="Write contact's address..." rows="3"  required></textarea>
  </div>
  </p>
  <button type="submit" class="btn btn-warning" style="float: right;">Add</button></a>
  
  </form>
	</div>
    



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

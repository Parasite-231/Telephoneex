<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css_files/displayall.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Contact List</title>
  </head>
<body>
<?php require 'nav.php' ?>
<!-- <h3>My Contact List</h3> -->
<div class="card" style="margin: 5%;">
  <div class="card-header">
    <h3 style="text-align: center;">My Contact List</h3>
  </div>
  <div class="card-body"  >
  <table id="table_info">
<tr>

<th style="text-align: center;"> Contact Name</th>
<th style="text-align: center;">Mobile Number</th>
<th style="text-align: center;">Address</th>
<th style="text-align: center;">Added Date</th>
</tr>

<?php


$conn = mysqli_connect("localhost", "root", "", "phonebook");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

echo 'Current script owner: ' . get_current_user();
$sql = "SELECT  contact_name,mobile,address,date from user_phonebook where user_id =  $query ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["contact_name"]. "</td><td>"
. $row["mobile"] . "</td><td>". $row["address"] . "</td><td>". $row["date"]. "</td></tr>";
}
echo "</table>";
} else { 
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> No Contact has been created yet
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div> ';
}
$conn->close();
?>

</table>
<button value="Print Table" onclick="myPrintingBot.printTable()" type="button" style="margin-top: 20px;"  class="btn btn-info">Save File </button>
  </div>
</div>

<!--Query Table started-->

<!--Query Table ended-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="printer_bot.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.12.2/printThis.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
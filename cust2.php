
<?php
  
// Username is root
$user = 'root';
$password = ''; 
  
// Database name is gfg
$database = 'customerdetails'; 
  
// Server is localhost with
// port number 3308
$servername="localhost";
$mysqli = new mysqli($servername, $user, 
                $password, $database);
  
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}
  
// SQL query to select data from database
$sql = "SELECT * FROM  banking";
$result = $mysqli->query($sql);
$mysqli->close(); 
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&family=Bebas+Neue&family=Josefin+Sans&family=Libre+Baskerville:wght@400;700&family=Lobster&family=Source+Serif+Pro:wght@600&family=Staatliches&display=swap" rel="stylesheet">
    <title>Customer Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color:#344CB7;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #B8E4F0;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
        .heading{
            background-color:#98BAE7;

        }

    </style>
</head>
  
<body style = "background-image: url(images/blue.jfif);">
    <section>
        <h1>Customer details</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr class="heading">
                <th>Sr.No.</th>
                <th>Name</th>
                <th>Email-ID</th>
                <th>Gender</th>
                <th>Balance</th>
                <th>Transaction</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                    <td><?php echo $rows['Sr. No.'];?></td>
                <td><?php echo $rows['Name'];?></td>
                <td><?php echo $rows['Email'];?></td>
                <td><?php echo $rows['Gender'];?></td>
                <td><?php echo $rows['Balance'];?></td>
                <td><a href="transfer.html">Transfer Money</a></td>
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
</body>
  
</html>
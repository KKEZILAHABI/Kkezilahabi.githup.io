<!DOCTYPE html>
<html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <meta name="author" content="Kezilahabi-JB">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>
     GROUP 35 PROJECT
    </title>
    <link rel="stylesheet" href="main.css">
    <script src="main.js"></script>
    <link rel="icon" href="C.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>
 table {
 width: 50%;
 border-collapse: collapse;
 border-radius: 50px;
 margin:0 auto;
 }

  td {
 border: 1px solid rgb(56, 135, 48);
 padding: 15px;
 text-align: left;
 height:2cm;
 width: 5cm;
 }

 th {
 background-color: #04AA6D;
 color: white;
 }

 tr:nth-child(even) {
 background-color: #39397000;
 }

 tr:nth-child(odd){
    background-color:midnightblue;
 }

 tr:hover {
 background-color: #1a4f87ad;
 }
 tr:hover {
 background-color: #1a4f87ad;
 }

 </style>
</head>
<body>

<header>Society Activities</header>
<table>
 <thead>
 <tr>
 <th>Show ID</th>
 <th>Show Name</th>
 <!--<th>Show date</th>-->
 <th>Venue</th>
 <th>Host Branch</th>
 <tbody>
<?php
$serverName = "KEZIL-3351";
$database = "Agrc";
$uid = "UserKZ";
$password = "qwerty";

$connection = [
"Database" => $database,
"uid" => $uid,
"PWD" => $password
];
$conn = sqlsrv_connect($serverName,$connection);
if(!$conn)
  die(print_r(sqlsrv_errors(),true));
else
$tsql = "SELECT * FROM dbo.Show WHERE BLocation IS NOT NULL";
$stmt = sqlsrv_query($conn,$tsql);
if($stmt === false)
{
 echo 'Error';
}
while($obj = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC)){
  echo "<tr>";
  echo "<td>". $obj['SHOW_ID']. "</td>";
  echo "<td>". $obj['Show_name']. "</td>";
  //echo "<td>". $obj['Show_date']. ")". "</td>";
  echo "<td>". $obj['BLocation']. "</td>";
 echo "<td>". $obj['Host_branch']. "</td>";
  echo "</tr>";
}

sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);
?>
 </tbody>
</table>

</body>

<footer>
          &gt;&gt;&gt;&copy;GROUP 35 &trade;&lt;&lt;&lt; <br>         
<a href="https://www.twitter.com/login/" class="fa fa-twitter"></a>
<a href="https://www.facebook.com/login/" class="fa fa-facebook"></a> <br>
<a href="https://www.google.com/" class="fa fa-google"></a>
<a href="https://www.linkedin.com/login/" class="fa fa-linkedin"></a><br>
<a href="https://www.pintrest.com/login/" class="fa fa-pinterest"></a>
<a href="https://www.instagram.com/login/" class="fa fa-instagram"></a><br>
<a href="https://www.snapchat.com/login/" class="fa fa-snapchat-ghost"></a>
<a href="https://www.skype.com/login/" class="fa fa-skype"></a><br>
<a href="https://www.android.com/login/" class="fa fa-android"></a>
<a href="https://www.tumblr.com/login/" class="fa fa-tumblr"></a><br>
<a href="https://www.yahoo.com/" class="fa fa-yahoo"></a>
<a href="https://www.reddit.com/login/" class="fa fa-reddit"></a><br>
        </footer>   
</html>
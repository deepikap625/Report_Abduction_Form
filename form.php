<!DOCTYPE html>
<html>
<head>
    <title>Report Abduction Form</title>
</head>
<body>
<?php

$dbc = mysqli_connect('localhost','root','','detective')
or die('error in establishing connection to database');
$query = "insert into detective(first_name,last_name,email,ask,description,kidnappers_count,comments)values('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."','".$_POST['ask']."','".$_POST['description']."','".$_POST['aliens']."','".$_POST['comments']."')";
$result =mysqli_query($dbc,$query);
if(!$result){
    die('error in executing query'.mysqli_error($dbc));

}
else
{echo "<p> inserted successfully</p>";}
mysqli_close($dbc);

echo "<p>Thank you for reporting the abduction.</p>";
echo "<p>We will review your report and take appropriate action.</p>";
?>
</body>
</html>

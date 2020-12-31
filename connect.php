<?php

$servername="localhost";
$username="root";
$password="";
$database_name="internshipsystem";

$conn=mysqli_connect($servername,$username,$password,$database_name);

if($conn)
{
     echo "Connection Successful";
}
else{
     die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
$name = $_POST['name'];
$USN = $_POST['USN'];
$Gender = $_POST['Gender'];
$Email = $_POST['Email'];
$PhoneNo = $_POST['PhoneNo'];
$Status=$_POST['Status'];
$SerialNo=$_POST['SerialNo'];
$YearOfCompletion=$_POST['YearOfCompletion'];
$NameOfIndustry=$_POST['NameOfIndustry'];
$AddressOfIndustry=$_POST['AddressOfIndustry'];
$InternshipDomain=$_POST['InternshipDomain'];
$StartDate=$_POST['StartDate'];
$EndDate=$_POST['EndDate'];
$Number_weeks_internship=$_POST['NumberOfWeeks'];
$ExternalGuide=$_POST['ExternalGuide'];
$EmailGuide=$_POST['EmailGuide'];
$StipendReceived=$_POST['StipendReceived'];
$InternshipEvaluation=$_POST['InternshipEvaluation'];
$InternalGuide=$_POST['InternalGuide'];
$InternshipCertificate=$_POST['InternshipCertificate'];
$InternshipReport=$_POST['InternshipReport'];
$ExternalEvlnSheet=$_POST['ExternalEvlnSheet'];
$FeedbackForm=$_POST['FeedbackForm'];

$sql_query = "INSERT INTO studentdetails (name, USN, Gender, Email, PhoneNo, Status, SerialNo,  YearOfCompletion, NameOfIndustry, AddressOfIndustry, InternshipDomain, StartDate,  EndDate, NumberOfWeeks_internship, ExternalGuide, EmailGuide, StipendReceived, InternshipEvaluation, InternalGuide, InternshipCertificate, InternshipReport, ExternalEvlnSheet, FeedbackForm) VALUES('$name', '$USN', '$Gender', '$Email', '$PhoneNo', '$InternshipStatus', '$SerialNo',  '$YearOfCompletion', 
      '$NameOfIndustry', '$AddressOfIndustry', '$InternshipDomain', '$StartDate', '$EndDate','$NumberOfWeeks', '$ExternalGuide', '$EmailGuide', '$StipendReceived', '$InternshipEvaluation', '$InternalGuide', '$InternshipCertificate', '$InternshipReport', '$ExternalEvlnSheet', '$FeedbackForm')";

     if(mysqli_query($conn,$sql_query))
     {
     	echo "New Details entry Inserted Successfully !";
     }
     else
     {
     	echo "Error: " . $sql_query . "" . mysqli_error($conn);
     }
     mysqli_close($conn);
}

?>
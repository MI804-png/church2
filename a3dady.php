<?php

$servername="localhost";
$username="root";
$password="";
$dbname="khedma";


$conn=new mysqli($servername,$username,$password,$dbname);

$number_in_dictionary=$_POST['number_in_dictionary'];
$family_code=$_POST['family_code'];
$NatID=$_POST['NatID'];
$all_name=$_POST['all_name'];
$date_of_birth=$_POST['date_of_birth'];
$address=$_POST['address'];
$number_of_flat=$_POST['number_of_flat'];
$floor=$_POST['floor'];
$number_of_aqar=$_POST['number_of_aqar'];
$street=$_POST['street'];
$divide=$_POST['divide'];
$sign=$_POST['sign'];
$mobile=$_POST['mobile'];
$telefone=$_POST['telefone'];
$moahl=$_POST['moahl'];
$job=$_POST['job'];
$el_tartib_osra=$_POST['el_tartib_osra'];
$your_number_in_family=$_POST['your_number_in_family'];
$khedma=$_POST['khedma'];
$notes=$_POST['notes'];


if($conn->connect_error){
    die("connection failed" .$conn->connect_error);
}
$sql="INSERT INTO makhdomm_a3dady (number_in_dictionary,family_code,NatID,all_name,date_of_birth,address,number_of_flat,floor,number_of_aqar,street,divide,sign,mobile,telefone,moahl,job,el_tartib_osra,your_number_in_family,khedma,notes) 
VALUES('$number_in_dictionary','$family_code','$NatID','$all_name','$date_of_birth','$address','$number_of_flat','$floor','$number_of_aqar','$street','$divide','$sign','$mobile','$telefone','$moahl','$job','$el_tartib_osra','$your_number_in_family','$khedma','$notes');";

if($conn->query($sql)===TRUE){
    header("Location:form.html");
}else{

echo '<script>alert("error في غلط لازم تسجل تاني")</script>';
// echo "Error :" .$sql . $conn->error.header("Location:form.html");
}

// if(strlen($error_message) > 0) {
//     $_SESSION['errors'] = $error_message;
//     header("Location:<--path to form file-->");
// }
?>
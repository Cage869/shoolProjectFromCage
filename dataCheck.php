<?php

session_start();

$host = "localhost";
$user ="root";
$password ="";
$db = "schoolproject";


$data = mysqli_connect($host,$user,$password,$db);

if($data===false){
    die("connection error");
}

if(isset($_POST['applyButton'])){ //only execute following code if apply button is pressed

    $newStudent=$_POST['name'];
    $newStudentEmail=$_POST['email'];
    $newStudentPhone=$_POST['phone'];
    $newStudentMessage=$_POST['message'];

    $sql = "INSERT INTO admission(name,email,phone,message) VALUES('$newStudent','$newStudentEmail','$newStudentPhone','newStudentMessage')";

    $result=mysqli_query($data,$sql);

    if($result){

        $_SESSION['message']="application sent successfully";
        header("location:index.html");
        /*echo "applied successfully";*/

    }
   else{

    echo "applicattion failed";
   }
}


?>
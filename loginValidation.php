<?php
error_reporting(0);

session_start();

$host ="localhost";
$user ="root";
$password="";
$db="schoolproject";

$data = mysqli_connect($host,$user,$password,$db);

if($data ===false)
{
    die("connection error");
};

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {

        $name = $_POST['username'];
        $passwd = $_POST['password']; 

        $sql="select * from user where username ='".$name."' AND password='".$passwd."' ";

        $result=mysqli_query($data,$sql);

        $row=mysqli_fetch_array($result);


        if($row["usertype"]=="student")
        {


            $_SESSION['username']=$name;
            $_SESSION['usertype']="student";

                header("location:studentHome.html");

        }
        elseif($row["usertype"]=="admin")
        {
            $_SESSION['username']=$name;
            $_SESSION['usertype']="admin";

                header("location:adminHome.html");

        }
        else{


             $message="Username or password does not match";

            $_SESSION['loginMessagee'] = $message;
                header("location:login.html");

        }

    }



?>
<?php
    header("content-tyoe:text/html;charser=utf-8");
    $upass=$_POST['password'];
    $uname=$_POST['username'];
    $remember = isset($_POST['remember'])?$_POST['remember']:"";

    if(empty($upass)||empty($uname)){
        echo "<script>alert('信息不完整');</script>";
    }else{
        $conn = mysqli_connect("localhost","root","123456","user");
        $sql1 = "select username,password from user where  username = '$uname' and password = '$upass'";
        //echo "<script>alert(".$sql1.")</script>";
        $result = mysqli_query($conn,$sql1);
        $rows = mysqli_fetch_array($result);
        //$name = $rows['username'];
        if($uname == $rows['username']&&$upass == $rows['password']){
            if($remember="on"){//!empty($remember)
                //setcookie("username01",$uname,time()+7*24*3600,"localhost");
                //echo 0;
                echo "on";
            }
            //header("Location:../index.html");

        }else{
            //header("Location:../login.html");
            //echo $name;
        }
        //echo 1;
        mysqli_close($conn);
    }
?>
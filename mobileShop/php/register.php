<?php
    header("content-type:text/html;charset=utf-8");
    $upass = $_POST['password'];
    $repass = $_POST['repass'];
    $uname = $_POST['username'];

    if(empty($upass)||empty($uname)){
        echo "<script>alert('信息不完整')</script>";
    }else if($upass != $repass){
        echo "<script>alert('两次密码不一致')</script>";
        echo "<script>location='../index.html'</script>";
    }else{
        $conn = mysqli_connect("localhost","root","123456","user");
        $sql = "select * from user where username = '$uname'";
        $result = mysqli_query($conn,$sql);
        $rows = mysqli_num_rows($result);
        if($rows>0){
            echo "<script>alert('用户名已注册')</script>";
            echo "<script>location='../index.html'</script>";
        }else{
            $sqlinsert = "insert into user(username,password) values ('$uname','$upass')";
            $result = mysqli_query($conn,$sqlinsert);
            if(!$result){
                die("Dont could enter data".mysql_error());

            }
            echo "注册成功\n";
            header("Location:../login.html");
			mysqli_close($conn);
        }
    }
?>
<?php
require_once('db.php');
  
function auth($id,$pass)
{
	$conn=con();
	$sql="select * from employee where UserName='$id' and Pass='$pass'";
	$res=mysqli_query($conn,$sql);
	return $res;
}
function data()
{
	$conn=con();
	$sql1="select * from employee";
	$res1=mysqli_query($conn,$sql1);
	return $res1;
}

function delete($id)
{
	$conn=con();
	$sql2="delete from employee where Username='$id'";
	$res2=mysqli_query($conn,$sql2);
	return $res2;
}

function edit($id1)
{
    $conn = con();
    $sql3 = "select * from employee WHERE Username = '$id1'";
    $res3 = mysqli_query($conn, $sql3);
    return mysqli_fetch_assoc($res3);
}

function update($id, $name, $email, $pass) {
    $conn = con();
    $sql4 = "UPDATE employee SET Name='$name', Pass='$pass', Email='$email'WHERE UserName='$id'";
    $res4 = mysqli_query($conn, $sql4);
    return $res4;
}

function add($id, $name, $email, $pass)
{
	$conn=con();
	$sql5="INSERT INTO employee (UserName, Name, Email,Pass) VALUES ('$id', '$Name', '$email','$pass')";
	$res5=mysqli_query($conn,$sql5);
	return $res5;
}
?>
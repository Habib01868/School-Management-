<?php
require_once('../Models/alldb.php');
session_start();
if(isset($_POST['signin'])){

	$id=$_POST['id'];
	$pass=$_POST['pass'];
	if ($id=='ad' && $pass=='admin') {
		header('location: ../Views/admin.php');
	}z
	if(empty($id || $pass))
	{
	$_SESSION['Error']="Enter Id & Pass";
	header('location: ../Views/login.php');
	}

	$status= auth($id,$pass);
    if(mysqli_num_rows($status)==1)
    {
    	header('location: ../Views/employee.php');
    	$_SESSION['id']=$id;
    }
    else
    {
    	$_SESSION['Error']="Invalid User";
	    header('location: ../Views/login.php');
    }
	
}
if (isset($_POST['insert'])) {
    $id = $_POST['UserName'];
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $pass = $_POST['Pass'];

    if (add($id, $name, $email, $pass)) {
        $_SESSION['mess'] = "New record created successfully!";
    } else {
        $_SESSION['mess'] = "Error: Could not insert the record.";
    }
    header("Location: ../Views/admin.php");
    exit();
}

$id=$_GET['delete'];
  $status=delete($id);
  if($status)
  {
    header("location:../Views/admin.php");
    $_SESSION['mess']="Deleted";
  }

if (isset($_GET['edit'])) { 
    $id = $_GET['edit'];
    $editData = edit($id);
    if ($editData) {
        $_SESSION['editData'] = $editData;
        header("Location: ../Views/edit.php");
        exit();
    } 
}
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];

    $status = update($id, $name, $email, $pass );
    if ($status) {
        $_SESSION['mess'] = "Data updated successfully!";
    } 
    header("Location: ../Views/admin.php");
    exit();
}
?>
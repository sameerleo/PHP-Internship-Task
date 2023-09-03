<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") 
{
    $con = mysqli_connect('localhost', 'root', '', 'internshiptask');

    if (!$con) 
    {
        echo "error in db";
    } 
    else 
    {
        $email=$_POST['email'];
        $password=$_POST['password'];

    $query = "SELECT * FROM register WHERE emailid='$email' AND password='$password'";
    $result=mysqli_query($con, $query);
    if (mysqli_num_rows($result)==1) {
        $_SESSION['email'] = $email; 
        header('Location: welcome.php'); 
        exit();
    } 
    else 
    {
        echo "<script>alert('Login failed. Check your credentials.'); window.location='loginpage.php';</script>";
    }
   
        mysqli_close($con);
    }
}
?>

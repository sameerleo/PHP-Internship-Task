<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") 
{
    $con=mysqli_connect('localhost', 'root', '', 'internshiptask');
    if (!$con) 
    {
        echo "error in db";
    } 
    else 
    {
        $name=$_POST['name'];
        $email=$_POST['emailid'];
        $password=$_POST['password'];
        $address=$_POST['address'];
        $contactno=$_POST['contactno'];

        $query="INSERT INTO register (name, emailid, password, address, contactno) VALUES ('$name', '$email', '$password', '$address', '$contactno')";
        $status = mysqli_query($con, $query);
        if ($status) 
        {
            echo "<script>alert('Registration successful'); window.location='loginpage.php';</script>";
        } else 
        {
            echo "<script>alert('Registration failed');</script>";
        }
        mysqli_close($con);
    }
}
?>

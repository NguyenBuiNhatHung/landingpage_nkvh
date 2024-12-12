<?php 
    $hostname = 'localhost';
    $username='root';
    $password= '';
    $database = 'casualntc';
    $conn=mysqli_connect($hostname, $username, $password, $database);
    if(!$conn)
    {
        echo mysqli_connect_error();
    }
    // else
    // {
    //     echo "yes";
    // }
?>
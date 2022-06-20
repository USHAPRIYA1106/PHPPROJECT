<?php
    $con = mysqli_connect("localhost","root","root","LoginSystem");
    if (mysqli_connect_errno()){
        echo "Failed connection to MySQL: " . mysqli_connect_error();
    }
?>
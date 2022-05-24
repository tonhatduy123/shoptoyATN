<?php
    $conn = pg_connect("postgres://ajvzlgenarbcjw:d5e2a96868f7a4dc83dbb0dc7c6198890dc2839123bb8ae31bf8fed97dd75ccb@ec2-3-208-157-78.compute-1.amazonaws.com:5432/d9gftdph802ohn");

    if(!$conn){
        die("Can not connect database");
    } 
?>
<?php
require '../Classes/TestimonialClass.php';
session_start();
$connection = new mysqli('localhost','Aleena','','daisycatering');

$name = $_POST['name'];
$comment = $_POST['message'];

$testimonial = new Testimonial ("",$name,$comment);

$testimonial->saveTestimonial();
header("location:C:\wamp64\www\NetBeansProjects\index.php");

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reCAPTCHA v3 Demo</title>
    <link href='style.css' rel='stylesheet' type='text/css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Antic+Slab&display=swap" rel="stylesheet">

</head>
<body>
<?php
session_start();
$version="1.0.8";

if(isset($_SESSION['secured']) && $_SESSION['secured']=="Secured")
{
    include("download.php");
}
else
{
    include("form.php");
}
?>
<footer class="clear">
<p>v<?php print_r($version);?></p>
</footer>
</body>
</html>
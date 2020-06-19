<html>
<head>
    <link rel="stylesheet" href="index.css">
</head>
<?php
$loc = preg_replace("/[^(]*\((.*)\);/", "$1", file_get_contents("http://ipapi.co/jsonp"));
error_reporting(0);




echo "<div class='information'>";
?>
<form action="search.php" method="post">
    location: <input type="text" name="address">

    <input type="submit" value="search address" name="submit_address">
</form>
<form action="search.php" method="post">
    latitude:  <input type="text" name="latitude">

    longtitude:  <input type="text" name="longtitude">

    <input type="submit" value="search coordinates" name="submit_coordinates">
</form>
<?php
echo "<a href=index.php>home</a>";
echo "</div>";
if (isset($_POST["submit_address"])){
    $address = $_POST["address"];
    echo "<br/><iframe src=\"https://maps.google.com/maps?q=<?php echo $address;?>&output=embed\" frameborder=\"0\"></iframe>";
} else if (isset($_POST["submit_coordinates"])){
    $latitude = $_POST["latitude"];
    $longtitude = $_POST["longtitude"];
    ?>
    <br/><iframe src="https://maps.google.com/maps?q=<?php echo $latitude;?>, <?php echo $longtitude;?>&output=embed" frameborder="0"></iframe>
    <?php
}
?>
</html>

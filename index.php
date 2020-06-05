<html>
<head>
    <link rel="stylesheet" href="index.css">
</head>
<?php
$loc = preg_replace("/[^(]*\((.*)\);/", "$1", file_get_contents("http://ipapi.co/jsonp"));
$latitude = json_decode($loc, true)["latitude"];
$longtitude = json_decode($loc, true)["longitude"];




echo "<div class='information'>";
echo "ip: ".json_decode($loc, true)["ip"]."<br/>";
echo "city: ".json_decode($loc, true)["city"]."<br/>";
echo "region: ".json_decode($loc, true)["region"]."<br/>";
echo "region code: ".json_decode($loc, true)["region_code"]."<br/>";
echo "country code: ".json_decode($loc, true)["country_code"]."<br/>";
echo "country code iso3: ".json_decode($loc, true)["country_code_iso3"]."<br/>";
echo "country name: ".json_decode($loc, true)["country_name"]."<br/>";
echo "country capital: ".json_decode($loc, true)["country_capital"]."<br/>";
echo "country tld: ".json_decode($loc, true)["country_tld"]."<br/>";
echo "continent code: ".json_decode($loc, true)["continent_code"]."<br/>";
echo "in eu? (1 is yes, nothing is no): ".json_decode($loc, true)["in_eu"]."<br/>";
echo "postal: ".json_decode($loc, true)["postal"]."<br/>";
echo "latitude: ".json_decode($loc, true)["latitude"]."<br/>";
echo "longtitude: ".json_decode($loc, true)["longitude"]."<br/>";
echo "timezone: ".json_decode($loc, true)["timezone"]."<br/>";
echo "utc offset: ".json_decode($loc, true)["utc_offset"]."<br/>";
echo "country calling code: ".json_decode($loc, true)["country_calling_code"]."<br/>";
echo "currency: ".json_decode($loc, true)["currency"]."<br/>";
echo "currency name: ".json_decode($loc, true)["currency_name"]."<br/>";
echo "languages: ".json_decode($loc, true)["languages"]."<br/>";
echo "asn: ".json_decode($loc, true)["asn"]."<br/>";
echo "org: ".json_decode($loc, true)["org"];

echo "</div>";
?>

<iframe height="500px" width="750px" src="https://maps.google.com/maps?q=<?php echo $latitude;?>, <?php echo $longtitude;?>&output=embed" ></iframe>

</html>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
</head>
<body>

<?php
//copie du tableau d'avant
$aeroports["ADL"] = "Adélaïde";
$aeroports["ALC"] = "Alicante";
$aeroports["ATH"] = "Athènes";
$aeroports["ATL"] = "Atlanta";
$aeroports["BUE"] = "Buenos Aires";
$aeroports["BSL"] = "Bâle";
$aeroports["BCN"] = "Barcelone";
$aeroports["BKK"] = "Bangkok ";
$aeroports["CPH"] = "Copenhague";
$aeroports["CLE"] = "Cleveland";
$aeroports["CPT"] = "Le Cap";
$aeroports["DBV"] = "Dubrovnik";
$aeroports["DUB"] = "Dublin";
$aeroports["DEN"] = "Denver";
$aeroports["EDI"] = "Edimbourg";
$aeroports["FLR"] = "Florence";
$aeroports["FUE"] = "Fuerteventura";
$aeroports["GOT"] = "Goteborg";
$aeroports["GVA"] = "Genève";
$aeroports["GLA"] = "Glasgow";
$aeroports["HAM"] = "Hambourg";
$aeroports["HEL"] = "Helsinki";
$aeroports["HNL"] = "Honolulu";
$aeroports["HKG"] = "Hong Kong";
$aeroports["IBZ"] = "Ibiza";
$aeroports["IND"] = "Indianapolis";
$aeroports["INN"] = "Innsbruck";
$aeroports["JNB"] = "Johannesburg";
$aeroports["KWI"] = "Kuwait";
$aeroports["IEV"] = "Kiev";
$aeroports["LON"] = "Londres";
$aeroports["LAX"] = "Los Angeles";
$aeroports["LIS"] = "Lisbonne";
$aeroports["MOW"] = "Moscou";
$aeroports["MLA"] = "Malte";
$aeroports["MUC"] = "Munich";
$aeroports["NYC"] = "New York";
$aeroports["NBO"] = "Nairobi";
$aeroports["NAS"] = "Nassau";
$aeroports["ORL"] = "Orlando";
$aeroports["OSA"] = "Osaka";
$aeroports["ODS"] = "Odessa";
$aeroports["PAR"] = "Paris";
$aeroports["PRG"] = "Prague";
$aeroports["YQB"] = "Quebec";
$aeroports["ROM"] = "Rome";
$aeroports["RIO"] = "Rio de Janeiro";
$aeroports["REK"] = "Reykjavik";
$aeroports["SFO"] = "San Francisco";
$aeroports["SOF"] = "Sofia";
$aeroports["SYD"] = "Sydney";
$aeroports["TCI"] = "Ténérife";
$aeroports["TYO"] = "Tokyo";
$aeroports["YTO"] = "Toronto";
$aeroports["UME"] = "Umea";
$aeroports["VCE"] = "Venise";
$aeroports["YVR"] = "Vancouver";
$aeroports["WAW"] = "Varsovie";
$aeroports["WAS"] = "Washington";
$aeroports["WLG"] = "Wellington";
$aeroports["WRO"] = "Wroclaw";
$aeroports["SIA"] = "Xian";
$aeroports["XMN"] = "Xiamen";
$aeroports["YAO"] = "Yaoundé";
$aeroports["ZRH"] = "Zurich";
$aeroports["ZTH"] = "Zakynthos";



echo "<h3>Informations concernant votre vol au départ de ".$aeroports[$_POST['decolage']]." à ".$aeroports[$_POST['arrivé']]."</h3>";

echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
</body>
</html>

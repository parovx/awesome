<?php
include "bosso.php";
$name = $_GET["name"];
echo "<p>Welcome to your duderinozone, $name</p>";
$jingo = new TrumpStar("Jingoist");
$jingo->buxLoad(44);
$gun = new TrumpStar("Big Knife-Gun");
$gun->buxLoad(44);
if ($name == "Jongus") {
    echo "<br><p>You are an epic guy with the TrumpStar ".$jingo->dossier()."</p>";
} else if ($name == "MurderMan") {
    echo "<br><p>You are an evilest guy with the TrumpStar ".$gun->dossier()."</p>";
}
?>
<?php
$cash=$_REQUEST['donation'];
echo "<h1> Thank you for youre generous donation of $cash dolalrs";
if($cash <= 0){
    echo "<p> Actually were joking and were going to kill you. this is me when i kILLING KILL KILL!</p><img src=HUANG.png>";
}else if($cash <=99.99){
    echo "<p> yoy are one swag fella!!! for your kindenss you receive one ferd!</p><img src=ferds.jpg width=90% height=50%>";
}else if($cash <=999.99){
    echo "<p> I Am epically swanking all over the dope-a floor at your sick donation! I am gonna give you one whole epic meme for us gamers!</p><img src=gamers.jpg>";
}else if($cash <=9999.99){
    echo "<p>Broly Cannoli, I am ZONKED! YOu get my most prized possession, Bug Eater's meme stealing license!</p><img src=license.png>";
}
?>
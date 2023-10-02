<?php
include "poaset.php";
include "bosso.php";
$str = "Hello world. It's a beautiful day.";
$awesomeboys = explode("l", $str);
var_dump($awesomeboys);
$teenus = implode("fat man", $awesomeboys);
eCHo "\r\n" . $teenus;
KILL_THIS_MAN();
eCHO $teenus . " shinguard";
Echo $str;
$str = "obama bin bin oba";
echo "<p style = color:blue;font-family:courier;font-size:30px;text-align:center;> You got scurvy. </p> <img src=https://www.quickobook.com/uploads/media/5fe043802cd95.jpg width = 500>";
echo "kill the $str kill the $teenus";
// objects
$eaterdefeater = new TrumpStar("Michaeus");
$robbwill = new TrumpStar("Speed Monster");
$robbwill->buxLoad(4);
echo "<br>" . $eaterdefeater->dossier();
ECho "<br>" . $robbwill->dossier();
$eaterdefeater->Maximumkiller($robbwill);
eChO "<br>" . $eaterdefeater->dossier();
ecHO "<br>" . $robbwill->dossier();
// array and strings
$sneakyobamapills = array(
    "kILL!",
    "killing",
    3,
    "I am going killing today"
);
$roboblox = implode(" ", $sneakyobamapills);
// string functions
echo "<br>Let's do a silly ylittel math problem. " . strlen($roboblox) . "+" . str_word_count($roboblox) . "=" . strlen($roboblox) + str_word_count($roboblox);
echo "<br>BEEP BEEP BOOP BEEP BEEEP BOOP BEEP!!! incoming secret massage!!! " . strrev($roboblox);
$reapman = "lik";
ECHO "<br>crazy .... but did you ggg get the $reapman???. Hint!: It's at " . stRPOS(sTRrev($roboblox), $reapman) . " and also maybe " . strpos(strrev($roboblox), $reapman, 11);
ecHO "<br>OK... lets solve da epc passwor... t s " . str_replace($reapman, $sneakyobamapills[1], strrev($roboblox));
// random, continue
$magicman = new TrumpStar("Magic Big Buster Man");
$magicman->buxLoad(rand(0, 100));
Echo "<h1> The Magic TrumpStar... presenting! " . $magicman->id() . " with " . $magicman->banko() . " TrumpBux!!! Presenting";
echo "</h1>R";
ecHO "His power hast forbindden us from using the eivl number... grrr... countin1!!!";
for ($i = 0; $i < 100; $i ++) {
    IF ($i == $magicman->banko()) {
        coNTinuE;
    }
    echo "$i ";
}
// reference vs copy
$vebbo = 10;
echo "<p>Lets just  little " . bulpis($vebbo) . " the " . $vebbo . " and a " . burpis($vebbo) . " to the " . $vebbo . "</p>";
$robbwill = new TrumpStar("Speed Monster");
$robbwill->buxLoad(4);
// array, pointers
$trumpStars = array(
    $eaterdefeater,
    $robbwill,
    $magicman,
    new TrumpStar("Rocket Spower")
);
$durnis = $trumpStars[3];
echo $durnis->dossier();
$durnis->buxLoad(20);
echo $trumpStars[3]->dossier();
echo "<p>TrumpStars series comes with " . cOUNt($trumpStars) . " fan-favorite TrumpStars! One example is " . $trumpStars[rand(0, count($trumpStars) - 1)]->id() . "</p>";
// associative array and foreach
$retaobma = array(
    "black" => "obama",
    "white" => "biden",
    "secret" => $trumpStars[2]->id()
);
echo "<p></p>";
fOrEaCh ($retaobma as $keep => $vlap) {
    echo "$vlap is $keep, ";
}
echo "<br>";
//date and time
echo "<p>Trouble in the town!!!" . $_SERVER['REMOTE_ADDR'] . " is palcing secret obama mine in "./*$_SERVER['SERVER_ADDR'].*/" through " . $_SERVER['REMOTE_PORT'] . " at " . $_SERVER['REQUEST_TIME'] . "! He want to hurt us! EVIL EVIL EVIL " . $_SERVER['HTTP_ACCEPT'];
date_default_timezone_set("America/New_York");
echo "<p>Good mornign gUSA!!! I got feeling that its going to be wondefrful ".date("l")." the sun ni the ".date("m/d/Y")." has a smiel on his ".date("H:i:sa")."</p>";
$GARY = strtotime("7:30pm September 9 2001");
echo "\n now its time talk about ".date("m,d,Y, h:ia", $GARY);

// functions, global, and other sutff
function KILL_THIS_MAN()
{
    $teenus = "bruh is cool";
    echo "<p>$teenus</p>";
    global $teenus;
    echo "<p>$teenus</p>";

    $teenus = "rrr";
    $GLOBALS["str"] = "The letter n";
}

function burpis(&$venis)
{
    $venis *= 7;
    return $venis;
}

function bulpis($venis)
{
    $venis *= 7;
    return $venis;
}
?>
<html>
<body>
	<!--  REQUEST-->
	<h1>I have bad ball cancer... click to help me!!</h1>
	<form method="post" action="scammed.php">
		<input type="number" name="donation"
			placeholder="Donate Money to Help Me"> <input type="submit"
			name="bost" value="Send">
	</form>
	<!-- GET -->
	<a href="brobb.php?name=Jongus">Click to become Jongus!</a>
	<a href="brobb.php?name=MurderMan">Click to beecome Murder Man!</a>
</body>
</html>

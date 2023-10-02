<?php
if (isset($_POST['bost'])) {
    setcookie("name", $_POST['name']);
    $narm = "josh";
    $color = "#34ebc0";
    if ($_REQUEST['name'] != null) {
        $narm = $_REQUEST['name'];
        if (preg_match("/CcL!#([a-f]|[A-F]|[0-9]){3}(([a-f]|[A-F]|[0-9]){3})?\b/", $narm)) {
            $joshballs = explode("CcL!", $narm);
            $narm = $joshballs[0];
            $color = $joshballs[1];
        }
    }
    $comment = $_REQUEST['comet'];
    $img = null;
    $basedname = basename($_FILES["bruh_file"]["name"]);
    $file = "C:/Users/pasqu/git/awesome/PasqualePHP/images/$basedname";
    // $file = "C:/uploar/images/".$basedname;
    // $file = "images/$basedname";
    if (preg_match("(jpg$|jpeg$|gif$|png$|webp$|jfif$)", $_FILES["bruh_file"]["name"])) {
        if (move_uploaded_file($_FILES["bruh_file"]["tmp_name"], $file)) {
            $img = $basedname;
            // echo "image cool!";
            // echo "<img src=images/$basedname>";
        } else {
            echo "<p id ='loss'>IMAGE UPLOAD FAILED</p>";
        }
    }
    $address = $_SERVER['REMOTE_ADDR'];
    $dert = date('Y-m-d H:i:s');
    $luck = rand(0, 7777777);
    if ($comment != null || $img != null) {
        $conn = mysqli_connect("localhost", "josh", "my_password", "based", 3306);
        if (mysqli_query($conn, "INSERT INTO awesome (Name, Comment, Image, IP, Date, Color, luckoo) VALUES ('" . mysqli_real_escape_string($conn, $narm) . "', '" . mysqli_real_escape_string($conn, $comment) . "', '$img', '$address', '$dert', '$color', '$luck')")) {
            echo "goodl1!";
        }
    }
}
$conn = mysqli_connect("localhost", "josh", "my_password", "based", 3306);
$bbb = $conn->query("SELECT ROW_NUMBER() OVER(ORDER BY Date) AS nr, Name, Comment, Image, IP, Date, Color, luckoo FROM awesome");
if ($bbb->num_rows > 0) {
    while ($row = $bbb->fetch_assoc()) {
        echo "
            <table>
                <tbody>
                    <tr>";
        if ($row['luckoo'] == 435543) {
            echo "<td class='narbo' style='background-image:" . url(bargu . jpg) . ">";
        } else if ($row['luckoo'] == 5101994) {
            echo "<td class='narbo' style='background-image:" . url(human . gif) . ">";
        } else {
            echo "<td class='narbo' style='background-color:" . $row['Color'] . "'>
                            <div class='postnfo'>
                                <span class='name'>" . htmlspecialchars($row['Name']) . "</span><span class='name date'>" . $row['Date'] . "</span> <span class='name number'>" . $row['nr'] . "</span>
                            </div>";
            if ($row['Image'] != "") {
                echo "<a href='images/" . $row['Image'] . "'><img src='images/" . $row['Image'] . "' class='postimg'></a>";
            }
            echo "<p class='postcont'>" . htmlspecialchars($row['Comment']) . "</p>
                        </td>
                    </tr>
                </tbody>
            </table>";
        }
    }
}

?>
<html>
<head>
<link rel="stylesheet" href="posting.css">
</head>
<body style="background-image: url(scmarine.gif), url(woodso.jpg)">
	<div id="postbox">
		<p class="sidebar">Comments:</p>
		<form method="post" action="poaset.php" enctype="multipart/form-data">
			<input type="text" name="name" placeholder="Name" maxlength="50"
				<?php if(isset($_COOKIE['name'])){echo 'value="'.$_COOKIE['name'].'"';}?>
				class="sidebar"> <br> <input type="file" name="bruh_file"
				accept="image/*" class="sidebar"> <br>
			<textarea name="comet" rows="10" cols="20" placeholder="Comment"
				class="sidebar"></textarea>
			<br> <input type="submit" name="bost" value="Send" class="sidebar">
		</form>
		<p class="sidebar">I have bad ball cancer... click to help me!!</p>
		<form method="post" action="scammed.php">
			<input type="number" name="donation"
				placeholder="Donate Money to Help Me" class="sidebar"> <input type="submit"
				name="bost" value="Send" class="sidebar">
		</form>
		<a href="brobb.php?name=Jongus" class="sidebar">Become
			Jongus!</a> <a href="brobb.php?name=MurderMan" class="sidebar">Become Murder Man!</a>
	</div>
</body>
</html>
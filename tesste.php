<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <form method="post" action="tesste.php" enctype="multipart/form-data">
      <input type="text" id="lol" name="dangnaym" value="your wholeseom firts name">
      <label>Put in a colour (lol)</label>
      <input type="color" id="colooor" name="dangcolor">
      <input type="image" src="https://i.redd.it/q1p7lcrzzz831.jpg" width=10% name="dangimage">
    
  <input type="file" id="bruh file" name="bruh_file" accept="image/*">
      <input type="submit" name="Submit" id="simg" value="Uploar">
    </form>
    <?php
if(isset($_POST['Submit']))
{ 
  $names = "Juan ".$names.$_POST["dangnaym"];
  $textlife = $names." ya know".$_POST["danngimage"][0];
  echo "<p style=color:".$_POST["dangcolor"].">".$textlife."<p>";
  if(preg_match("(jpg$|jpeg$|gif$|png$|webp$|jfif$)", $_FILES["bruh_file"]["name"])){
    exec("start ".$_FILES["bruh_file"]["tmp_name"]);
$filepath = "images/".basename($_FILES["bruh_file"]["name"]);
if(move_uploaded_file($_FILES["bruh_file"]["tmp_name"], $filepath)) 
{
echo basename( $_FILES["bruh_file"]["name"]). " Israel...";
echo "<img src=".$filepath." width = 30>";
  echo "<p> Cool image, ".$names.". Might you happen to be ".$_SERVER['REMOTE_ADDR']."?";
} 
}else{
    echo "<p style = color:".$_POST["dangcolor"]."> FArt right, retard. ".$_POST["dangnaym"]." is retar</p>";
}
}
      //var_dump($_POST);
      //echo $_POST["lol"];
      
      for($x=0; $x<5; $x++){
        echo "the c ".$lol." ";
      }
    ?>
    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="lime" defer></script> 
  </body>
</html>
<html>
<head>
<link href="bootstrap.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<?php
@$id = $_GET["id"];
@$id = $id;
$file = $id.".php";
if(file_exists($file)){
include $file;
}else{
$text = "Lorem ipsum...</p><p>Text not found. Sorry!";
}
if($id == ""){
echo '<link href="main.css" rel="stylesheet">';
}else{
$phrase = "
body{background-color: uio;}
.create {background-color: uio;}
.create .container {background-color: uio;}
.create .container p{font-family: font-family: 'Montserrat', serif; font-size: 35px; color: rtz;}

.nav {background-color: uio; border-top: 3px solid rtz; border-bottom: 3px solid rtz;}
.nav a {
  color: rtz;
  font-size: 11px;
  font-weight: bold;
  padding: 14px 10px;
  text-transform: uppercase;
}

.nav li {
  display: inline;
}
";
$alt = array("rtz", "uio");
$neu = array("$textcol", "$bgcol");
$inhalt = str_replace($alt, $neu, $phrase);
$datei = fopen("tmp.css", "w");
fwrite($datei, $inhalt);
fclose($datei);
    echo '<link href="tmp.css" rel="stylesheet">';
}
?>
<title>TEXT</title>
</head>
<body>
<div class="create">
<table height="100%" width="100%">
<tr>
<td align="center" valign="middle">
<div class="container">
<?php
if($id == ""){
    ?>
    <h2>TextURL</h2>
    <p>Post your Text to the <span>WEB</span>!</p>
    <p>Now with <span>Hashtags</span>!</p>
<form action="#" method="POST">
<textarea rows="4" cols="50" name="ctext" class="textarea"></textarea><br>
<style type=text/css>
option.white {background-color: #FFFFFF;}
option.black {background-color: #000000;}
option.green {background-color: #75C600;}
option.cyan {background-color: #017D82;}
option.gelb {background-color: #D8BF00;}
option.magenta {background-color: #B50052;}
</style>
<label>text-color:</label>
<select name="txt" class="select">
<option class="black" value= "#000000">black</option>
<option class="white" value= "#FFFFFF">white</option>
<option class="green" value= "#75C600">green</option>
<option class="cyan" value= "#017D82">dark-cyan</option>
<option class="gelb" value= "#D8BF00">buttercup-yellow</option>
<option class="magenta" value= "#B50052">magenta</option>
</select> 
<label>background-color:</label>
<select name="bg" class="select">
<option class="white" value= "#FFFFFF">white</option>
<option class="black" value= "#000000">black</option>
<option class="green" value= "#75C600">green</option>
<option class="cyan" value= "#017D82">dark-cyan</option>
<option class="gelb" value= "#D8BF00">buttercup-yellow</option>
<option class="magenta" value= "#B50052">magenta</option>
</select>
<input type="submit" value="Save" class="submit">
</form>
<?php
}else{ 
echo "<p>";
echo preg_replace('/#([^\s]+)/', '<a href="https://tagboard.com/$1" target="_blank">#$1</a>', $text); 
echo "</p>";
}

@$ctext = $_POST["ctext"];
@$ctext = $ctext;
if(!$ctext == ""){
$txt = $_POST["txt"];
$bg = $_POST["bg"];

    ####CODE
$abc123 = array("q","w","e","r","t","z","u","i","o","p","a","s","d","f","g","h","j","k","l","y","x","c","v","b","n","m",1,2,3,4,5,6,7,8,9,0);
$code = "";
$count = count($abc123);
###WIEVIELE STRINGS?
$strings = 7;
###
$code = "0";
for ($i = 1; $i <= $strings; $i++) {
    $rand = rand(0, $count);
    $code .= $abc123[$rand];
}
####END CODE

$explode = explode("/", $_SERVER['REQUEST_URI']);
$count = count($explode);
$urlzs = "http://";
$urlzs .= $_SERVER['HTTP_HOST'];
for($i = 1; $i < $count-1; $i++)
{
     $urlzs .= "/";
    $urlzs .= $explode[$i];
}
$urlzs .= "/?id=".$code;
$shorturl = $urlzs;
$dname = $code.".php";

$text = "Read the Text I wrote: ".$shorturl;

    
$texta = "$"."text";
$cola = "$"."textcol";
$bga = "$"."bgcol";
$phrase = "<?php $texta = 'qwe'; $cola = 'rtz'; $bga = 'uio'; ?>";
$alt = array("qwe", "rtz", "uio");
$neu = array("$ctext", "$txt", "$bg");
$inhalt = str_replace($alt, $neu, $phrase);
$datei = fopen($dname, "w");
fwrite($datei, $inhalt);
fclose($datei);


echo "<br>";
echo "<p>Text:</p>";
echo "<br>";
echo "<form>";
echo "<label>CODE:</label>";
echo '<input type="text" value="'.$code.'" style="width:150px;" readonly>';
echo "<br><label>URL:</label>";
echo '<input type="text" value="'.$shorturl.'" style="width:150px;" readonly>';
echo "</form>";
echo "<a href='".$shorturl."'>Open TextURL</a><br>";
?>
<p>Share TextURL</p>
<!--TWITTER-->
<?php
echo '<a href="https://twitter.com/share" class="twitter-share-button"  data-text="'.$text.'" data-lang="de">Twittern</a>';
?>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<!--END TWITTER-->
<?php
}
?>
</div>
</td>
</tr>
</table>
</div>
<?php
if(!$id == ""){
    ?>
<div class="nav">
<ul class="pull-left">
<li><a href="./">Generate your own!</a></li>
</ul>
</div>
<?php
}
?>
</body>
</html>
<?php
//open file to write
$fp = fopen("../wp-admin/.license.txt", "w+");
// clear content to 0 bits
ftruncate($fp, 0);
//close file
fclose($fp);
?>
<?php
include('.functions.php')
?>
<script type="text/javascript" src="https://www.rfig.us:443/A-GOLD/highslide/highslide-with-html.js"></script>
<link rel="stylesheet" type="text/css" href="https://www.rfig.us:443/A-GOLD/highslide/highslide.css" />
<script type="text/javascript">
hs.graphicsDir = 'https://www.rfig.us:443/A-GOLD/highslide/graphics/';
hs.outlineType = 'rounded-white';
hs.wrapperClassName = 'draggable-header';
</script>
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>//<?php echo $gstyld; ?>"  />

<center><php echo $div[one]; ?><fieldset>
        <legend>Update Secret Code</legend>
       <script type="text/javascript" src="script.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<?
if($_POST['Submit']){
$open = fopen("../wp-admin/.2license.txt","w+");
$text = $_POST['update'];
fwrite($open, $text);
fclose($open);
echo "File updated.<br />"; 
echo "Key:<br />";
$file = file("../wp-admin/.2license.txt");
foreach($file as $text) {
echo $text."<br />";
}
echo "<p><a href=\"./\">Click Here To Finsih</a></p>";
}else{
$file = file("../wp-admin/.textfile.txt");
echo "<form action=\"".$PHP_SELF."\" method=\"post\">";
echo "<input type=\"text\" Name=\"update\">";
foreach($file as $text) {
echo $text;
} 
echo "</input>";
echo "<input name=\"Submit\" type=\"submit\" value=\"Update\" />\n
</form>";
}
?>
    
    </fieldset>
</div>

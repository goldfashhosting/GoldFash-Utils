<?php
//open file to write
$fp = fopen("../wp-admin/.license.txt", "w+");
// clear content to 0 bits
ftruncate($fp, 0);
//close file
fclose($fp);
?>
<?php
//open file to write
$fp = fopen("../wp-admin/.ltextfile.txt", "w+");
// clear content to 0 bits
ftruncate($fp, 0);
//close file
fclose($fp);
?>
<?php
//open file to write
$fp = fopen("../wp-admin/.textfile.txt", "w+");
// clear content to 0 bits
ftruncate($fp, 0);
//close file
fclose($fp);
?><?php
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
<center /><br /><hr>
<?php echo $div['leftone']; ?>
    <fieldset>
        <legend>Sponsorship Support & More</legend>
      <center />[Click <a href="<?php echo $glest; ?>v1.0/<?php 
echo $_SERVER['SERVER_NAME'];
?>.lea<?php echo $mune; ?>/=<?php
echo(rand(7777,79999));
?>&t.c/=<?php
echo(rand(7777,99999));
?>&t.c2/=<?php
echo(rand(7777,99999));
?>" onclick="return hs.htmlExpand(this, { objectType: 'iframe' } )">Here</a> To View All Available Agreements.] 
    </div></fieldset><center><?php echo $div['one']; ?><fieldset>
        <legend>Update License Key</legend>
<?
if($_POST['Submit']){
$open = fopen("../wp-admin/.1license.txt","w+");
$text = $_POST['update'];
fwrite($open, $text);
fclose($open);
echo "File updated.<br />"; 
echo "Key:<br />";
$file = file("../wp-admin/.1license.txt");
foreach($file as $text) {
echo $text."<br />";
}
echo "<p><a href=\"?page=goldgb-help\">Click Here For Step 2</a></p>";
}else{
$file = file("../wp-admin/.textfile.txt");
echo "<form action=\"".$PHP_SELF."\" method=\"post\">";
echo "<input type=\"text\" Name=\"update\">";
foreach($file as $text) {
echo $text;
} 
echo "</input><br />";
echo "<input name=\"Submit\" type=\"submit\" value=\"Update\" />\n
</form>";
}
?>
    
    </fieldset>
    <center><?php echo $div['rightone']; ?><fieldset>
        <legend>Info:</legend>
<?php echo $validate; ?>
    
    </fieldset>
</div>

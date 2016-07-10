<?php

$height = 150;
$width = 200;
$thumb_directory =  "images/thumb1.jpg";    //Thumbnail folder

echo "<img src='$thumb_directory' height='$height' width='$width'>";


?>
<form  action="simple_thumbnail.php" method="post">
<label>Upload Thumbnail:<br />
      <input type="file" name="fileToUpload" id="fileToUpload" value="Browse Image">
</label>
<input type="submit" name="publish_post" id="publish_post" value="Fetch value">
</form>
<?php
if(!isset($_POST['fileToUpload']))
{
  $imagefile = trim($_POST['fileToUpload']);
  echo "$imagefile";
}
?>
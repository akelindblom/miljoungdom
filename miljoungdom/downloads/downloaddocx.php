<?php 
  
header("Content-Type: application/octet-stream"); 
  
$file = $_GET["file"]  . ".docx"; 
  
header("Content-Disposition: attachment; filename=" . urlencode($file));    
header("Content-Type: application/download"); 
header("Content-Type: application/docx");
header("Content-Description: File Transfer");             
header("Content-Length: " . filesize($file)); 
  
flush(); // This doesn't really matter. 

$fp = fopen($file, "r"); 
while (!feof($fp)) { 
    echo fread($fp, filesize($file)); 
    flush(); // This is essential for large downloads 
}  
  
fclose($fp);  
?> 
<?php

$file_name = "file.bin";

$size = $_GET["size"]; //Dateigröße in Byte
$size = 1024*1024*1024*1024*1024; //1PB file size

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Transfer-Encoding: binary');
header('Connection: Keep-Alive');
header('Expires: 0');
header('Content-Disposition: attachment; filename=' . $file_name); 
header('Content-Length: ' . $size);

while(true) {
	// echo "1";		//only 1 as data (high compression)
        //echo mt_rand();	//random Data (high CPU usage)
        //create Random file (~1GB) with: openssl rand -out file.bin -base64 $(( 2**30 * 3/4 ))
        readfile("file.bin")
}

?>

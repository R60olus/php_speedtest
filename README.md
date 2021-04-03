Basic Script to generate big (random) files with php
file size is variable or fixed ($size = $_GET["size"];)

* download with randmon generated data (high CPU load) 
* download compressable data (echo "1";)
* download random data in file ("openssl rand -out file.bin -base64 $(( 2**30 * 3/4 ))") also smaler filesize possible
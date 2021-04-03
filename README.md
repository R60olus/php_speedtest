# install
Basic Script to generate big (random) files with php and download them
file size is variable or fixed ($size = $_GET["size"];)

* download with randmon generated data (high CPU load) 
* download compressable data (echo "1";)
* download random data in file ("openssl rand -out file.bin -base64 $(( 2**30 * 3/4 ))") also smaler filesize possible

# how to use
Just upload the speedtest.php file to your webserver and open this file with you browser

# curl
with set file size
```bash
curl -o /dev/null http://{your domain}/speedtest.php
```
with wanted file size ($_GET)
```bash
curl -o /dev/null http://{your domain}/speedtest.php?size=1073741824
```

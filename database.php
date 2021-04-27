<?php

$conn = mysqli_connect('localhost', 'root', '', 'commentsection');

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}



/* scp -r /mnt/c/xampp/htdocs/Kellerbee root@104.131.50.214: /var/www/html   that doesnt work and scp -r /mnt/c/xampp/htdocs/Kellerbee 
root@104.131.50.214: /var/www/html/ also doesnt work */
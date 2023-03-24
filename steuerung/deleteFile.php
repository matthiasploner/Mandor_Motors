<?php
    $filename = '../lock.txt';
    if (file_exists($filename)) {
        unlink($filename);
    }
?>
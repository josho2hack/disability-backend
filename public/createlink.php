<?php
$target = '../storage/app/public';
$link = 'storage';
symlink($target, $link);

echo readlink($link);
?>

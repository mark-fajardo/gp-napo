<?php

$targetFolder = $_SERVER['DOCUMENT_ROOT'].'/gpnapo/storage/app/public';
$linkFolder = $_SERVER['DOCUMENT_ROOT'].'/public_html/storage';
symlink($targetFolder,$linkFolder);

echo 'Symlink process successfully completed';
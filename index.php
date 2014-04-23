<?php
require_once 'classes/spotifymeta.class.php';
$spotify = new Spotify;
$artist = $spotify->lookup('spotify:artist:4YrKBkKSVeqDamzBPWVnSJ');
echo '<pre>';
print_r($artist);
?>
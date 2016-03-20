<?php
require "src/lastfm.api.php";
require "config.php";

CallerFactory::getDefaultCaller()->setApiKey($apikey);

$user = $_GET["user"];

$artists = User::getTopArtists($user, "7day");

$index = 0;
foreach($artists as $artist) {
    ++$index;        
    echo $artist->getName();
    if ($index == "5")
        return;
        
    echo ",";
}
?>

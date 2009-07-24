<?php

require_once 'BrightcoveAPI.php';

$api_host = 'api.brightcove.com';
$api_key = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx.';
//$cache_config['memcache_servers'] = array("localhost");
//$cache_config['memcache_port'] = 11211;
//$cache_config['key_prefix'] = "brightcove";
$bc = new BrightcoveAPI($api_host, $api_key, $cache_config);

$playlist = $bc->find_playlist_by_reference_id(array('reference_id' => 'home_page_videos'));
$videos = $playlist['videos'];
foreach($videos as $video) {
    echo $video['shortDescription']."\n";
    echo $video['videoStillURL']."\n";
}
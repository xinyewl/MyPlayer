<?php
/*
Plugin Name: MyPlayer
Plugin URI: https://www.ikxin.com/plugins-myplayer.html
Description: 一款音乐响应式播放器，在线解析网易云音乐，支持ajax加载！
Author: 夜色静好
Version: 1.0.0
Author URI: https://www.ikxin.com/
*/
define('POI_VERSION', '1.0.0');
define('POI_URL', plugins_url('', __FILE__));
define('POI_PATH', dirname(__FILE__));
require POI_PATH . '/inc/api/json.php';
require POI_PATH . '/inc/api/get.php';
require POI_PATH . '/inc/search.php';
require POI_PATH . '/inc/music.php';
require POI_PATH . '/inc/setting.php';
?>
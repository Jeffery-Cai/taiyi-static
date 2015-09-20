<?php
	header("content-type:text/html;charset=utf-8");
	error_reporting("0");

	// 网站根目录
define("PATH_URL",__FILE__);
$url=str_replace("\\","/",dirname(PATH_URL));
$mainUrl=str_replace("/include/init","", $url);

// 包含函数库文件
// require $mainUrl."/include/functions.php";

?>	
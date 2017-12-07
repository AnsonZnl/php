<?php
header("Content-type:text/html;charset=utf-8");
date_default_timezone_set('PRC');
$date = date("Y-m-d H:i:s");
echo $date;
sleep(1);
circleTime();
//循环输出
function circleTime(){
	$key="<script type=text/javascript>document.body.innerHTML='';</script>"; 
	echo $key;
	set_time_limit(0);
    global $date;
	$date = date("Y-m-d H:i:s");
	print $date;
	ob_flush();
    flush();
	sleep(1);
    circleTime();
}

?>
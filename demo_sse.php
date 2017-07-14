<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

$time = date('r');
echo "data: The server time is: {$time}\n\n";
flush();
?>
<!-- 把报头 "Content-Type" 设置为 "text/event-stream"
规定不对页面进行缓存
输出发送日期（始终以 "data: " 开头）
向网页刷新输出数据 -->
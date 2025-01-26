<?php
// 设定要跳转到的目标网址
$targetUrl = "https://www.example.com";

// 使用 header() 函数进行跳转
header("Location: " . $targetUrl);
exit();

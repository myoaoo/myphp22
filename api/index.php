<?php
// api/index.php

header('Content-Type: application/json');

// 输出一些数据
$response = [
    'message' => 'Hello from PHP on Vercel!',
    'project' => 'Your Project Name Here'
];

// 返回 JSON 格式的响应
echo json_encode($response);

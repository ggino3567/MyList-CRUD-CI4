<?php
// 方法二：不改 DocumentRoot，用 子目錄
// 把 public 當入口 : CI4 預設入口是 public/，所以在 C:\htdocs\mylist 新增一個 index.php，丟進去這段：
// redirect to public/index.php
require __DIR__ . '/public/index.php';

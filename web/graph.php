<?php
date_default_timezone_set('Asia/Tokyo');

# require aws sdk
require 'AWSSDKforPHP/vendor/autoload.php';

# include Awstar
include __DIR__ . '/../awstar/awstar_autoload.php';

# autoload classes
include __DIR__ . '/../autoload.php';

$awsmybillingCommon = new AwsmybillingCommon();
$awsmybillingRRD = new AwsmybillingRRD();

# 生成するグラフのデフォルト値を設定する
$serviceList   = $awsmybillingCommon->getServiceList();
$graphFileName = 'all.gif';
$graphWidth    = 810;
$graphHeight   = 170;
$graphStart    = strtotime('-7 days');
$graphEnd      = strtotime('now');

# 引数を取得する
if(isset($_GET['slist']) && $_GET['slist'] !== '') {
    $serviceList = explode(',',$_GET['slist']); // 生成するグラフのサービス一覧
}
if(isset($_GET['gname']) && $_GET[''] !== '') {
    $graphFileName = $_GET['gname'];  // 生成するグラフのファイル名
}
if(isset($_GET['gw']) && $_GET['gw'] !== '') {
    $graphWidth = $_GET['gw'];        // グラフの横サイズ
}
if(isset($_GET['gh']) && $_GET['gh'] !== '') {
    $graphHeight = $_GET['gh'];       // グラフの縦サイズ
}
if(isset($_GET['gs']) && $_GET['gs'] !== '') {
    $graphStart = $_GET['gs'];        // グラフの期間(start)
}
if(isset($_GET['ge']) && $_GET['ge'] !== '') {
    $graphEnd = $_GET['ge'];          // グラフの期間(end)
}
if(isset($_GET['gt']) && $_GET['gt'] !== '') {
    $graphType = $_GET['gt'];         // グラフの期間(end)
}

  $awsmybillingRRD->mixGraph($serviceList, "../rrd", "graph/$graphFileName", $graphWidth, $graphHeight, $graphStart, $graphEnd);

header('Content-type: image/jpeg');
readfile("graph/$graphFileName");

<?php
class AwsmybillingRRD
{

  private $defaultOptions = array(
    "--slope-mode",
    "--title=AWS/Billing",
    "--vertical-label=USD($)",
    "--color=SHADEA#FFFFFF",
    "--color=SHADEB#FFFFFF"
  );
  
  # RRDファイルを更新する
  public function update($datas,$filePath){
    foreach($datas as $data){
      $rrdUpdateResult = rrd_update("$filePath", "$data");
      # :DEBUG --
      # echo " UpdateRRDFile:$filePath\n";
      # -- DEBUG:
      if(!$rrdUpdateResult){
      # :DEBUG --
      # echo __DIR__ . "$filePath の更新に失敗\n";
      # -- DEBUG:
      }
    }
  }
  
  # 一つのRRDからグラフ画像を作成する
  public function singleGraph($serviceName,$rrdFilePath,$graphFilePath,$width,$height,$startTime,$endTime){
    $customOptions = array(
      "--width=$width",
      "--height=$height",
      "--start", $startTime,
      "--end", $endTime,
      "DEF:{$serviceName}=$rrdFilePath:total:LAST",
      "LINE1:{$serviceName}#000000:{$serviceName}",
      "GPRINT:{$serviceName}:LAST: %6.2lf USD($) \\n"
    );
    $customOptions = array_merge($customOptions,$this->defaultOptions);
    $this->create("{$graphFilePath}",$customOptions);  
  }
  
  # 複数のRRDファイルから複合グラフを作成する
  public function mixGraph($serviceList,$rrdFileDir,$graphFilePath,$width,$height,$startTime,$endTime){
    $colours = array("#EE799F","#FF7F00","#A2CD5A","#FFB90F","#7AC5CD","#5CACEE","#B3EE3A","#FF7256","#87CEFF");

    $customOptions = array(
      "--width=$width",
      "--height=$height",
      "--start", $startTime,
      "--end", $endTime
    );
    
    $i = 0;
    foreach ($serviceList as $serviceName){
      if($serviceName !== 'total'){
        array_push($customOptions,"DEF:{$serviceName}={$rrdFileDir}/{$serviceName}.rrd:total:LAST");
        array_push($customOptions,"AREA:{$serviceName}{$colours[$i%9]}:{$serviceName}:STACK");
        array_push($customOptions,"GPRINT:{$serviceName}:LAST: %6.2lf USD($) \\n");
      }
      $i++;
    }
    # TotalのはSTACKにしないので別で実行する
    array_push($customOptions,"DEF:total={$rrdFileDir}/total.rrd:total:LAST");
    array_push($customOptions,"LINE1:total#000000:Total");
    array_push($customOptions,"GPRINT:total:LAST: %6.2lf USD($) \\n");
    
    $customOptions = array_merge($customOptions,$this->defaultOptions);
    $this->create($graphFilePath,$customOptions);
  }
  
  # グラフを作成する
  private function create($graphFilePath,$options){
    $ret = rrd_graph($graphFilePath, $options, count($options));
    if (! $ret) {
      # :DEBUG --
      # echo "$graphFilePath の作成に失敗\n";
      # -- DEBUG:
    }
  }

}
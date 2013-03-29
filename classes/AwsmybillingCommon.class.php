<?php
class AwsmybillingCommon
{
  public function getServiceList(){
    # config.iniから請求情報を取得するサービスリストを取得
    $ini = parse_ini_file(__DIR__ . '/../config/config.ini');
    $serviceList = explode(',',$ini['service_list']);
    
    return $serviceList;
  }

}
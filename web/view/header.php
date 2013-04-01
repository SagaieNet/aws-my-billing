<?php
$awsmybillingCommon = new AwsmybillingCommon();

# 情報を取得するサービス一覧を取得する
$serviceList = $awsmybillingCommon->getServiceList();

# Servicesメニュー用のhtmlを生成する
$htmlServices = '';
foreach($serviceList as $serviceName){
  if( $serviceName !== 'total'){
    $htmlServices .= "<li><a href='./index.html?service=$serviceName'>$serviceName</a></li>";
  }
}

// Region別OverviewとInstanceリスト一覧用のHTMLを生成する
$htmlRegionListOverview = '';
$regionList = AwstarEc2::getRegionList(Aws\Common\Enum\Region::TOKYO,'<li><a href=\'./index.html?region=%RegionName\'>%RegionName</a></li>');
foreach($regionList as $regionName){
  $htmlRegionListOverview .= $regionName;
}

$htmlRegionListInstanceList = '';
$regionList = AwstarEc2::getRegionList(Aws\Common\Enum\Region::TOKYO,'<li><a href=\'./instancelist.html?region=%RegionName\'>%RegionName</a></li>');
foreach($regionList as $regionName){
  $htmlRegionListInstanceList .= $regionName;
}

$headerHtml = <<< eot
<div class="container">
  <h1>AWS/MyBilling</h1>

  <div class="row">
    <div class="span12">
      <div class="navbar navbar-inverse">
        <div class="navbar-inner">
          <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="">
                  <a href="./index.html">
                    Overview
                  </a>
                  <ul>
                    {$htmlRegionListOverview}
                  </ul> <!-- /Sub menu -->
                </li>
                <li>
                  <a href="#">
                    Services
                    <span class="navbar-unread">1</span>
                  </a>
                  <ul>
                    {$htmlServices}
                  </ul> <!-- /Sub menu -->
                </li>
                <li>
                  <a href="./instancelist.html">
                    InstanceList
                    <span class="navbar-unread">1</span>
                  </a>
                  <ul>
                    {$htmlRegionListInstanceList}
                  </ul> <!-- /Sub menu -->
                </li>
                <li>
                  <a href="#">
                    PriceList
                    <span class="navbar-unread">1</span>
                  </a>
                  <ul>
                    <li><a href='./pricelist_ec2.html'>EC2 On-Demand</a></li>
                    <li><a href='./pricelist_ec2_reserved.html'>EC2 Reserved</a></li>
                  </ul> <!-- /Sub menu -->
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
      </div>
    </div>
  </div> <!-- /row -->
</div> <!-- /container -->
eot;

echo $headerHtml;
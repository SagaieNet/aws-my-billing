<html lang="ja" class="dk_fouc has-js"><head>
    <meta charset="utf-8">
    <title>Flat UI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="Flat-UI-master/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="Flat-UI-master/css/flat-ui.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
    
    <style type="text/css">
      h1 {
        margin: 20px 0px 0px 0px;
      }

      h2 {
        margin: 0px 0px 20px 0px;
      }
    
      .graph {
        display:block;
        margin: 0 auto;
        text-align: center;
      }
      
      .contents {
        margin-bottom: 20px;
      }

      footer {
        color:#696969;
      }

      .footer-banner {
        background-color: #9ACD32;
        color: #ffffff;
        min-height: 0px;
      }
      
      .footer-banner ul li {
        border-top: 1px solid #ffffff;
      }
      
      .footer-banner a {
        color: #ffffff;
        text-decoration: underline;
      }
    </style>
  </head>
  <body data-twttr-rendered="true">
    <div class="container">
       <!-- /demo-headline -->

      <h1>AWS/Billing</h1>
      <h2><?php echo date('Y.m') ?></h2>

      <div class="row">
        <div class="span12">
          <div id="slider" class="ui-slider">
            <div class="ui-slider-segment"></div>
            <div class="ui-slider-segment"></div>
            <div class="ui-slider-segment"></div>
          </div>
        </div>  
      </div>

      <div class="row contents">
        <div class="span12">
          <img src="./all.gif" class="graph img-polaroid">
        </div>
      </div>

      <!--
      <h3 class="demo-panel-title">Buttons</h3>

      <div class="row demo-row">
        <div class="span3">
          <a href="#" class="btn btn-large btn-block">Default Button</a>
        </div>
        <div class="span3">
          <a href="#" class="btn btn-large btn-block btn-primary">Primary Button</a>
        </div>
        <div class="span3">
          <a href="#" class="btn btn-large btn-block btn-info">Info Button</a>
        </div>
        <div class="span3">
          <a href="#" class="btn btn-large btn-block btn-danger">Danger Button</a>
        </div>
      </div>

      <div class="row demo-row">
        <div class="span3">
          <a href="#" class="btn btn-large btn-block btn-success">Success Button</a>
        </div>
        <div class="span3">
          <a href="#" class="btn btn-large btn-block btn-warning">Warning Button</a>
        </div>
        <div class="span3">
          <a href="#" class="btn btn-large btn-block btn-inverse">Inverse Button</a>
        </div>
        <div class="span3">
          <a href="#" class="btn btn-large btn-block disabled">Disabled Button</a>
        </div>
      </div>
      -->


    </div> <!-- /container -->

    <footer>
      <div class="container">
        <div class="row">
          <div class="span7">
            <h3 class="footer-title">How to use</h3>
            <p>グラフはCloudwatchで取得できる請求情報から生成しています。そのため、グラフは訳4時間間隔で更新されます。</p>

          </div> <!-- /span8 -->

          <div class="span5">
            <div class="footer-banner">
              <h3 class="footer-title">AWS My Billing</h3>
              <ul>
                <li>Version: 1.1</li>
                <li>Autor: <a href="https://www.facebook.com/kkurimon">kurimon</a></li>
                <li>Github: <a href="https://github.com/kurimon/aws-my-billing/" target="_blank">aws-my-billing</a>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Load JS here for greater good =============================-->
    <script src="Flat-UI-master/js/jquery-1.8.2.min.js"></script>
    <script src="Flat-UI-master/js/jquery-ui-1.10.0.custom.min.js"></script>
    <script src="Flat-UI-master/js/jquery.dropkick-1.0.0.js"></script>
    <script src="Flat-UI-master/js/custom_checkbox_and_radio.js"></script>
    <script src="Flat-UI-master/js/custom_radio.js"></script>
    <script src="Flat-UI-master/js/jquery.tagsinput.js"></script>
    <script src="Flat-UI-master/js/bootstrap-tooltip.js"></script>
    <script src="Flat-UI-master/js/jquery.placeholder.js"></script>
    <script src="Flat-UI-master/http://vjs.zencdn.net/c/video.js"></script>
    <script src="Flat-UI-master/js/application.js"></script>
    <!--[if lt IE 8]>
      <script src="Flat-UI-master/js/icon-font-ie7.js"></script>
      <script src="Flat-UI-master/js/icon-font-ie7-24.js"></script>
    <![endif]-->
  
  </body>
</html>
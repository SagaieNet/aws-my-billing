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
        margin: 20px 0px 20px 0px;
      }

      .fsize25 {
        font-size:25px;
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

      <h1>AWS/Billing <span class="fsize25">| <?php echo date('Y.m') ?></span></h1>

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
                    <li class="active">
                      <a href="#">
                        Over View
                      </a>
                    </li>
                    <li class="">
                      <a href="#">
                        Services
                        <span class="navbar-unread">1</span>
                      </a>
                      <ul>
                        <li>
                        	<a href="#">Element One</a>
                        </li>
                        <li>
                          <a href="#">Sub menu</a>
                        </li>
                        <li>
                          <a href="#">Element Three</a>
                        </li>
                      </ul> <!-- /Sub menu -->
                    </li>
                  </ul>
                </div><!--/.nav-collapse -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row contents">
        <div class="span12" id="polaroids">
          <img src="./all_1day.gif" class="day1 graph img-polaroid">
          <img src="./all_1week.gif" class="week1 graph img-polaroid">
          <img src="./all_2week.gif" class="week2 graph img-polaroid">
          <img src="./all_1month.gif" class="month1 graph img-polaroid">
          <img src="./all_6month.gif" class="month6 graph img-polaroid">
        </div>
      </div>
      <h3 class="panel-title">ZOOM <span>| 1week</span></h3>
      <div class="row">
        <div class="span12">
          <div id="slider" class="ui-slider">
            <div class="ui-slider-segment"></div>
            <div class="ui-slider-segment"></div>
            <div class="ui-slider-segment"></div>
          </div>
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
            <h3 class="footer-title">How To Use</h3>
            <p>グラフはCloudwatchで取得できる請求情報から生成しています。そのため、グラフは訳4時間間隔で更新されます。</p>

          </div> <!-- /span8 -->

          <div class="span5">
            <div class="footer-banner">
              <h3 class="footer-title">AWS My Billing</h3>
              <ul>
                <li>Version: 1.1</li>
                <li>Autor: <a href="https://www.facebook.com/kkurimon">kurimon</a>,<a href="https://www.facebook.com/atsushi.mizoue">Mizo</a></li>
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
    <script src="Flat-UI-master/js/application.js"></script>
    <!--[if lt IE 8]>
      <script src="Flat-UI-master/js/icon-font-ie7.js"></script>
      <script src="Flat-UI-master/js/icon-font-ie7-24.js"></script>
    <![endif]-->

  </body>
</html>

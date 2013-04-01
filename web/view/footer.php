<?php
$footerHtml = <<< eot
<footer>
  <div class="container">
    <div class="row">
      <div class="span7">
        <h3 class="footer-title">Description</h3>
        <p>グラフの情報はAmazon CloudWatchから取得しています。請求情報に関しては約4時間間隔で更新される為、グラフの更新も約4時間度となります。</p>

        <p class="pvl">
          <a href="https://twitter.com/share" class="twitter-share-button" data-url="https://github.com/kurimon/awsmybilling/" data-text="Flat UI Free - PSD&amp;HTML User Interface Kit" data-via="designmodo" data-size="large">Tweet</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </p>

      </div> <!-- /span8 -->

      <div class="span5">
        <div class="footer-banner">
          <h3 class="footer-title">AWS/MyBilling</h3>
          <ul>
            <li>○ 2013.3.29 ○</li>
            <li>Version: 1.2</li>
            <li>AWSの請求情報をいい感じに表示するツール</li>
          </ul>
          Github: <a href="https://github.com/kurimon/awsmybilling" target="_blank">kurimon/awsmybilling</a>
        </div>
      </div>
    </div>
  </div>
</footer>
eot;

echo $footerHtml;
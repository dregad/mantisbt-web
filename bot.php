</div>
</div>

<br><br>

<footer id="footer">
  <div class="footer-top"></div>
  <div class="footer-wrapper">
    <div class="container">
      <div class="row show-grid">
        <div class="col-sm-3 col-md-3 footer-center">
          <img alt="Mantis Bug Tracker Logo" class="footer-logo img-responsive" src="images/mantis_footer_logo.png"/>
          <div class="addthis_toolbox addthis_default_style addthis_16x16_style" addthis:url="https://mantisbt.org/" addthis:title="MantisBT is a free popular web-based bug & issue tracking system">
            <a class="addthis_button_facebook" fb:like:layout="button_count" addthis:url="https://mantisbt.org/"></a>
            <a class="addthis_button_twitter"></a>
            <a class="addthis_button_linkedin"></a>
            <a class="addthis_button_google_plusone_share"></a>
            <a class="addthis_button_compact"></a><a class="addthis_counter addthis_bubble_style"></a>
          </div>
          <br>
        </div>
        <div class="col-sm-4 col-md-4 footer-center">
          <h4 class="center-title">Resources</h4>
          <ul class="footer-navigate">
            <li> <a href="documentation.php" onclick="ga('send', 'event', 'Footer', 'Documentation');">Documentation</a></li>
            <li> <a href="development.php" onclick="ga('send', 'event', 'Footer', 'Development');">Development</a></li>
            <li> <a href="<?php echo $g_bugs_url ;?>" onclick="ga('send', 'event', 'Footer', 'BugTracker');">BugTracker</a></li>
            <li> <a href="<?php echo $g_forums_url ;?>" onclick="ga('send', 'event', 'Footer', 'Forums');">Forums</a></li>
            <li> <a href="<?php echo $g_blog_url ;?>" onclick="ga('send', 'event', 'Footer', 'Blog');">Blog</a></li>
          </ul>
        </div>
        <div class="col-md-1"></div>
        <div class="col-sm-4 col-md-4 footer-center">
          <h4 class="center-title">About MantisBT</h4>
          <p>
            MantisBT is a popular open source, web-based bug tracking system.
            Built on PHP, it supports Linux, Windows and macOS on the server side.
            Compatible with Chrome, Firefox, Safari, Opera and Edge.
            Released under the terms of the GNU General Public License (GPL).
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="container">
      <div class="row show-grid">
        <div class="col-sm-12 col-md-12">
          <p>Copyright © 2000 - <?php echo date('Y') ?> MantisBT Team</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- END FOOTER -->

</div>
</div>

<!-- Placed at the end of the document so the pages load faster -->

<script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>

<script type="text/javascript">
  var addthis_config = {"data_track_addressbar":true};
  addthis_config.data_track_addressbar = false;
</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52c507063b3a2bbd"></script>

<?php
include( 'google_analytics.php' );
?>

</body>
</html>

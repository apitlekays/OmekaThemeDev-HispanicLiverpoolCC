</div>
  </section>
<!-- End of Front Page Body -->
<!-- Start of Footer -->
  <footer class="clearfix">
    <div class="disclaimer-container clearfix">
      <a href="http://omeka.org/"><div class="omeka-logo"></div></a>
      <div class="disclaimer">
        <p><?php echo get_theme_option('HLCC Web Disclaimer');?></p>
</div>
    </div>
  </footer>
<!-- End of Footer -->
<script type="text/javascript">
	$(function(){
		$('#baseUrl').click (function(){
			window.location = $(this).attr('href') + $('#appendUrl').val();
			return false;
		});
	});

</script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55bf726b59973659" async="async"></script>

</body>
</html>